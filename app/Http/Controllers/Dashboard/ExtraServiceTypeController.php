<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExtraServiceTypeRequest;
use App\Models\ExtraServiceType;
use App\Models\ExtraServiceTypeData;
use App\Services\DataService;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ExtraServiceTypeController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request  $request)
    {
        $extra_service_types = ExtraServiceType::when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.extra_service_types.index', compact('extra_service_types'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.extra_service_types.create');
    }

    /**
     * @param ExtraServiceTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ExtraServiceTypeRequest $request)
    {
        $data = $request->all();
        $extra_service_type = ExtraServiceType::create($data);
        DataService::saveData($data, $extra_service_type, new ExtraServiceTypeData());
        flash()->success('Extra Service Type Created');
        return redirect()->route('extra_service_types.index');
    }

    /**
     * @param ExtraServiceType $extra_service_type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(ExtraServiceType $extra_service_type)
    {
        return view('dashboard.extra_service_types.show', compact('extra_service_type'));
    }

    /**
     * @param ExtraServiceType $extra_service_type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(ExtraServiceType $extra_service_type)
    {
        $data = [];
        foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $data[$localeCode] = ExtraServiceTypeData::where('extra_service_type_id', $extra_service_type->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.extra_service_types.edit',  compact('extra_service_type', 'data'));
    }

    /**
     * @param $extra_service_type
     * @param ExtraServiceTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ExtraServiceType $extra_service_type, ExtraServiceTypeRequest $request)
    {
        $data = $request->all();
        $extra_service_type->update($data);
        DataService::saveData($data, $extra_service_type, new ExtraServiceTypeData());
        flash()->success('Extra Service Type Updated');
        return redirect()->route('extra_service_types.index');
    }

    /**
     * @param ExtraServiceType $extra_service_type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ExtraServiceType $extra_service_type)
    {
        try {
            $extra_service_type->delete();
            flash()->success('Extra Service Type Deleted');
        } catch (\Throwable $e) {
            flash()->warning('Cannot delete this extra service type!');
        }
        return redirect()->route('extra_service_types.index');
    }
}
