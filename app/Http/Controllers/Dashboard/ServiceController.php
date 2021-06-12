<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Hotel;
use App\Models\Service;
use App\Models\ServiceData;
use App\Models\User;
use App\Services\DataService;
use App\Traits\OneTimePasswordTrait;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController extends Controller
{
    use OneTimePasswordTrait;

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $services = Service::when($request->get('search'), function ($query) use ($request) {
            return $query->where(function ($q) use ($request) {
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $hotels = Hotel::pluck('name', 'id')->toArray();
        $contacts = User::contact()->get()->pluck('full_name', 'id');

        return view('dashboard.services.create', compact('hotels', 'contacts'));
    }

    /**
     * @param ServiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(ServiceRequest $request)
    {
        $data = $request->all();
        $service = Service::create($data);
        $contact = $service->load('user');
        //Check if user should change password
        $this->sendOneTimePasswordChangeEmail($contact);
        DataService::saveData($data, $service, new ServiceData());
        flash()->success('Service Created');
        return redirect()->route('services.index');
    }

    /**
     * @param Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Service $service)
    {
        return view('dashboard.services.show', compact('service'));
    }

    /**
     * @param Service $service
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Service $service)
    {
        $data = ServiceData::where('service_id', $service->id)->get()->keyBy('lang');
        $hotels = Hotel::pluck('name', 'id')->toArray();
        $contact = $service->load('user');
        $contact = $contact->user()->first();
        $contacts = User::contact()->get()->pluck('full_name', 'id');

        return view('dashboard.services.edit', compact('service', 'hotels', 'contacts', 'data', 'contact'));
    }

    /**
     * @param $service
     * @param ServiceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Service $service, ServiceRequest $request)
    {
        $data = $request->all();
        $service->update($data);
        DataService::saveData($data, $service, new ServiceData());
        flash()->success('Service Updated');
        return redirect()->route('services.index');
    }

    /**
     * @param Service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Service $service)
    {
        try {
            Service::destroy($service->id);
            flash()->success('Service Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this service!');
        }
        return redirect()->route('services.index');
    }
}
