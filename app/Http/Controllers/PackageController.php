<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageType;
use App\Models\Region;
use App\Http\Requests\BookPackageRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use function request;

class PackageController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(BookPackageRequest $request)
    {
        $data = $request->validated();
        $regions = Region::all();
        $packages = Package::with('hotel.meeting_rooms', 'hotel.price', 'data', 'hotel.destination', 'hotel')
            ->when($data['region_id'], function ($query) use ($data) {
                $query->whereHas('hotel.destination', function ($qr) use ($data) {
                    $qr->where('region_id', $data['region_id']);
                });
            })->when(request()->get('count'), function ($query) use ($data) {
                $query->whereHas('hotel', function ($qH) use ($data) {
                    $qH->where('guest_count', '>=', $data['count']);
                });
            })->when(request()->get('type'), function ($query) {
                $query->where('package_type_id', request()->get('type'));
            })->latest()->paginate(m_per_page());
        $types = PackageType::with('data')->get();
        return view('packages.index', compact('packages', 'types', 'regions'));
    }

    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $package = Package::findOrFail($id);
        $packages = Package::with('data')->where('id', '!=', $id)
            ->inRandomOrder()->take(3)->get();
        return view('packages.show', compact('package', 'packages'));
    }
}
