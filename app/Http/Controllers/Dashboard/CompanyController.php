<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\CompanyType;
use App\Models\CompanyData;
use App\Models\User;
use App\Services\DataService;
use App\Services\FileService;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CompanyController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $search = $request->get('search') ?? '';
        $companies = Company::when($search, function ($query) use ($request, $search) {
            $query->where(function ($q) use ($request, $search) {
                $q->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('data', function ($qD) use ($search) {
                        $qD->where('description', 'LIKE', '%' . $search . '%');
                    });
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.companies.index', compact('companies'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $company_types = CompanyType::pluck('name', 'id')->toArray();
        $contacts = User::contact()->get()->pluck('full_name', 'id');
        return view('dashboard.companies.create', compact('company_types', 'contacts'));
    }

    /**
     * @param CompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CompanyRequest $request)
    {
        $data = $request->all();
        $company = Company::create($data);
        $company->contacts()->attach(['user_id' => $data['user_id']]);
        DataService::saveData($data, $company, new CompanyData());
        if ($request->file('image')) {
            $imageService = new FileService();
            $imageService->saveImage($request->file('image'), $company, 'companies');
        }
        flash()->success('Company Created');
        return redirect()->route('companies.index');
    }

    /**
     * @param Company $company
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Company $company)
    {
        return view('dashboard.companies.show', compact('company'));
    }

    /**
     * @param Company $company
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Company $company)
    {
        $company->load('contacts');
        $company_types = CompanyType::pluck('name', 'id')->toArray();
        $contacts = User::contact()->get()->pluck('full_name', 'id');
        $data = CompanyData::where('company_id', $company->id)->get()->keyBy('lang');
        return view('dashboard.companies.edit', compact('company', 'company_types', 'data', 'contacts'));
    }

    /**
     * @param $company
     * @param CompanyRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Company $company, CompanyRequest $request)
    {
        $data = $request->all();
        $company->update($data);
        $company->contacts()->sync(['user_id' => $data['user_id']]);
        DataService::saveData($data, $company, new CompanyData());
        if ($request->file('image')) {
            $imageService = new FileService();
            $imageService->saveImage($request->file('image'), $company, 'companies');
        }
        flash()->success('Company Updated');
        return redirect()->route('companies.index');
    }

    /**
     * @param Company $company
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Company $company)
    {
        try {
            Company::destroy($company->id);
            flash()->success('Company Deleted');
        } catch (\Throwable $exception) {
            dd($exception);
            flash()->warning('Cannot delete this company!');
        }
        return redirect()->route('companies.index');

    }
}
