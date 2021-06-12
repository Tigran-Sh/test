<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use App\Services\FileService;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request  $request)
    {
        $regions = Region::when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.regions.index', compact('regions'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard.regions.create');
    }

    /**
     * @param RegionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegionRequest $request)
    {
        $data = $request->all();
        $region = Region::create($data);
        if($request->file('image')){
            $imageService = new FileService();
            $imageService->saveImage($request->file('image'), $region, 'regions');
        }
        flash()->success('Region Created');
        return redirect()->route('regions.index');
    }

    /**
     * @param Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Region $region)
    {
        return view('dashboard.regions.show', compact('region'));
    }

    /**
     * @param Region $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Region $region)
    {
        return view('dashboard.regions.edit',  compact('region'));
    }

    /**
     * @param $region
     * @param RegionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Region $region, RegionRequest $request)
    {
        $data = $request->all();
        $region->update($data);
        if($request->file('image')){
            $imageService = new FileService();
            $imageService->saveImage($request->file('image'), $region, 'regions');
        }
        flash()->success('Region Updated');
        return redirect()->route('regions.index');
    }

    /**
     * @param Region $region
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Region $region)
    {
        try {
            Region::destroy($region->id);
            flash()->success('Region Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('Cannot delete this region!');
        }
        return redirect()->route('regions.index');
    }
}
