<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExtraServiceRequest;
use App\Models\Destination;
use App\Models\ExtraService;
use App\Models\ExtraServiceData;
use App\Models\ExtraServiceType;
use App\Models\Price;
use App\Models\User;
use App\Services\DataService;
use App\Services\FileService;
use App\Traits\OneTimePasswordTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ExtraServiceController extends Controller
{
    use OneTimePasswordTrait;

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $extra_services = ExtraService::with('type')
            ->when($request->get('search'), function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
                });
            })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.extra_services.index', compact('extra_services'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $types = ExtraServiceType::pluck('name', 'id')->toArray();
        $contacts = User::contact()->get()->pluck('full_name', 'id');
        $destinations = Destination::pluck('name', 'id')->toArray();
        return view('dashboard.extra_services.create', compact('types', 'contacts', 'destinations'));
    }

    /**
     * @param ExtraServiceRequest $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(ExtraServiceRequest $request): RedirectResponse
    {
        $data = $request->all();
        $extra_service = ExtraService::create($data);
        $contact = $extra_service->load('user');
        //Check if user should change password
        $this->sendOneTimePasswordChangeEmail($contact);
        DataService::saveData($data, $extra_service, new ExtraServiceData());
        if ($request->file('images')) {
            $imageService = new FileService();
            $imageService->saveMultipleImages($data['images'], 'extra_services', $extra_service);
        }
        $data['item_id'] = $extra_service->id;
        $data['item_type'] = get_class($extra_service);
        Price::create($data);
        flash()->success('Extra Service Created');
        return redirect()->route('extra_services.index');
    }

    /**
     * @param ExtraService $extra_service
     * @return Application|Factory|View
     */
    public function show(ExtraService $extra_service)
    {
        return view('dashboard.extra_services.show', compact('extra_service'));
    }

    /**
     * @param ExtraService $extra_service
     * @return Application|Factory|View
     */
    public function edit(ExtraService $extra_service)
    {
        $data = ExtraServiceData::where('extra_service_id', $extra_service->id)->get()->keyBy('lang');
        $types = ExtraServiceType::pluck('name', 'id')->toArray();
        $contacts = User::contact()->get()->pluck('full_name', 'id');
        $contact = $extra_service->load('user');
        $contact = $contact->user()->first();
        $destinations = Destination::pluck('name', 'id')->toArray();

        return view('dashboard.extra_services.edit', compact('extra_service', 'types', 'contacts',
            'destinations', 'data', 'contact'));
    }

    /**
     * @param ExtraService $extra_service
     * @param ExtraServiceRequest $request
     * @return RedirectResponse
     */
    public function update(ExtraService $extra_service, ExtraServiceRequest $request)
    {
        $data = $request->all();
        $extra_service->update($data);
        DataService::saveData($data, $extra_service, new ExtraServiceData());
        if ($request->file('images')) {
            $imageService = new FileService();
            $imageService->saveMultipleImages($data['images'], 'extra_services', $extra_service, true);
        }
        Price::updateOrCreate([
            'item_id' => $extra_service->id,
            'item_type' => get_class($extra_service),
        ], [
            'price' => $data['price'],
            'price_per_person' => $data['price_per_person'],
            'fee' => $data['fee'],
            'weekday' => $data['weekday'],
            'month' => $data['month'],
        ]);
        flash()->success('Extra Service Updated');
        return redirect()->route('extra_services.index');
    }

    /**
     * @param ExtraService $extra_service
     * @return RedirectResponse
     */
    public function destroy(ExtraService $extra_service)
    {
        try {
            ExtraService::destroy($extra_service->id);
            flash()->success('Extra Service Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this extra service');
        }
        return redirect()->route('extra_services.index');
    }
}
