<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\ExtraService;
use App\Models\Hotel;
use App\Models\MeetingRoom;
use App\Models\Package;
use App\Models\PackageData;
use App\Models\PackageType;
use App\Models\Service;
use App\Services\DataService;
use App\Services\FileService;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PackageController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request  $request)
    {
        $packages = Package::with('type')->when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.packages.index', compact('packages'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $types = PackageType::pluck('name', 'id')->toArray();
        $hotels = Hotel::pluck('name', 'id')->toArray();
        $meeting_rooms = MeetingRoom::pluck('name', 'id')->toArray();
        $services = Service::pluck('name', 'id')->toArray();
        $extra_services = ExtraService::pluck('name', 'id')->toArray();
        return view('dashboard.packages.create', compact('extra_services', 'services', 'hotels',
            'meeting_rooms', 'types'));
    }

    /**
     * @param PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PackageRequest $request)
    {
        $data = $request->all();
        $package = Package::create($data);
        DataService::saveData($data, $package, new PackageData());
        if($request->file('image')){
            $imageService = new FileService();
            $imageService->saveImage($request->file('image'), $package, 'packages');
        }
        $package->services()->sync($request->get('services', []));
        $package->extra_services()->sync($request->get('extra_services', []));
        flash()->success('Package Created');
        return redirect()->route('packages.index');
    }

    /**
     * @param Package $package
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Package $package)
    {
        return view('dashboard.packages.show', compact('package'));
    }

    /**
     * @param Package $package
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Package $package)
    {
        $data = [];
        foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $data[$localeCode] = PackageData::where('package_id', $package->id)->where('lang', $localeCode)->first();
        }
        $types = PackageType::pluck('name', 'id')->toArray();
        $hotels = Hotel::pluck('name', 'id')->toArray();
        $meeting_rooms = MeetingRoom::pluck('name', 'id')->toArray();
        $services = Service::pluck('name', 'id')->toArray();
        $extra_services = ExtraService::pluck('name', 'id')->toArray();
        $selected_services = $package->services()->pluck('services.id')->toArray();
        $selected_extra_services = $package->extra_services()->pluck('extra_services.id')->toArray();
        return view('dashboard.packages.edit',  compact('package','extra_services', 'services',
            'hotels', 'meeting_rooms', 'selected_extra_services', 'selected_services', 'types', 'data'));
    }

    /**
     * @param $package
     * @param PackageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Package $package, PackageRequest $request)
    {
        $data = $request->all();
        $package->update($data);
        DataService::saveData($data, $package, new PackageData());
        if($request->file('image')){
            $imageService = new FileService();
            $imageService->saveImage($request->file('image'), $package, 'packages');
        }
        $package->services()->sync($request->get('services', []));
        $package->extra_services()->sync($request->get('extra_services', []));
        flash()->success('Package Updated');
        return redirect()->route('packages.index');
    }

    /**
     * @param Package $package
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Package $package)
    {
        try {
            Package::destroy($package->id);
            flash()->success('Package Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this package!');
        }
        return redirect()->route('packages.index');
    }
}
