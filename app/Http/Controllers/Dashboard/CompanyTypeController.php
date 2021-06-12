<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyTypeRequest;
use App\Models\CompanyType;
use App\Models\CompanyTypeData;
use App\Services\DataService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CompanyTypeController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $search = $request->get('search') ?? '';
        $company_types = CompanyType::when($search, function ($query) use ($request, $search) {
            $query->where(function ($q) use ($request, $search) {
                $q->where('name', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('data', function ($qD) use ($search) {
                        $qD->where('description', 'LIKE', '%' . $search . '%');
                    });
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.company_types.index', compact('company_types'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.company_types.create');
    }

    /**
     * @param CompanyTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CompanyTypeRequest $request)
    {
        $data = $request->all();
        $company_type = CompanyType::create($data);
        DataService::saveData($data, $company_type, new CompanyTypeData());
        flash()->success('Company Type Created');
        return redirect()->route('company_types.index');
    }

    /**
     * @param CompanyType $company_type
     * @return Application|Factory|View
     */
    public function show(CompanyType $company_type)
    {
        return view('dashboard.company_types.show', compact('company_type'));
    }

    /**
     * @param CompanyType $company_type
     * @return Application|Factory|View
     */
    public function edit(CompanyType $company_type)
    {
        $data = [];
        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = CompanyTypeData::where('company_type_id', $company_type->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.company_types.edit', compact('company_type', 'data'));
    }

    /**
     * @param $company_type
     * @param CompanyTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CompanyType $company_type, CompanyTypeRequest $request)
    {
        $data = $request->all();
        $company_type->update($data);
        DataService::saveData($data, $company_type, new CompanyTypeData());
        flash()->success('Company Type Updated');
        return redirect()->route('company_types.index');
    }

    /**
     * @param CompanyType $company_type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(CompanyType $company_type): \Illuminate\Http\RedirectResponse
    {
        try {
            CompanyType::destroy($company_type->id);
            flash()->success('Company Type Deleted');
        } catch (\Throwable $e) {
            flash()->warning('Cannot delete this company type!');
        }
        return redirect()->route('company_types.index');
    }
}
