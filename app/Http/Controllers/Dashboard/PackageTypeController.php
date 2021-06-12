<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageTypeRequest;
use App\Models\PackageType;
use App\Models\PackageTypeData;
use App\Services\DataService;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PackageTypeController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request  $request)
    {
        $package_types = PackageType::when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.package_types.index', compact('package_types'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.package_types.create');
    }

    /**
     * @param PackageTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PackageTypeRequest $request)
    {
        $data = $request->all();
        $package_type = PackageType::create($data);
        DataService::saveData($data, $package_type, new PackageTypeData());
        flash()->success('Package Type Created');
        return redirect()->route('package_types.index');
    }

    /**
     * @param PackageType $package_type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(PackageType $package_type)
    {
        return view('dashboard.package_types.show', compact('package_type'));
    }

    /**
     * @param PackageType $package_type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(PackageType $package_type)
    {
        $data = [];
        foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $data[$localeCode] = PackageTypeData::where('package_type_id', $package_type->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.package_types.edit',  compact('package_type', 'data'));
    }

    /**
     * @param $package_type
     * @param PackageTypeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PackageType $package_type, PackageTypeRequest $request)
    {
        $data = $request->all();
        $package_type->update($data);
        DataService::saveData($data, $package_type, new PackageTypeData());
        flash()->success('Package Type Updated');
        return redirect()->route('package_types.index');
    }

    /**
     * @param PackageType $package_type
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PackageType $package_type)
    {
        try {
            PackageType::destroy($package_type->id);
            flash()->success('Package Type Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this package type!');
        }
        return redirect()->route('package_types.index');
    }
}
