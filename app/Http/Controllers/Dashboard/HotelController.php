<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Models\Destination;
use App\Models\Hotel;
use App\Models\HotelData;
use App\Models\Price;
use App\Services\DataService;
use App\Services\FileService;
use GPBMetadata\Google\Api\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use function Sentry\captureException;

class HotelController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $hotels = Hotel::when($request->get('search'), function ($query) use ($request) {
            return $query->where(function ($q) use ($request) {
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.hotels.index', compact('hotels'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $destinations = Destination::pluck('name','id')->toArray();

        return view('dashboard.hotels.create', compact('destinations'));
    }

    /**
     * @param HotelRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(HotelRequest $request)
    {
        $data = $request->all();
        $hotel = Hotel::create($data);
        if ($request->hasFile('images')) {
            $imageService = new FileService();
            $imageService->saveMultipleImages($data['images'], 'hotels', $hotel);
        }
        DataService::saveData($data, $hotel, new HotelData());
        $data['item_id'] = $hotel->id;
        $data['item_type'] = get_class($hotel);
        Price::create($data);
        flash()->success('Hotel Created');
        return redirect()->route('hotels.index');
    }

    /**
     * @param Hotel $hotel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Hotel $hotel)
    {
        return view('dashboard.hotels.show', compact('hotel'));
    }

    /**
     * @param Hotel $hotel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Hotel $hotel)
    {
        $destinations = Destination::pluck('name', 'id')->toArray();
        $data = [];
        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = HotelData::where('hotel_id', $hotel->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.hotels.edit', compact('hotel', 'destinations', 'data'));
    }

    /**
     * @param $hotel
     * @param HotelRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Hotel $hotel, HotelRequest $request)
    {
        $data = $request->all();

        $hotel->update($data);
        DataService::saveData($data, $hotel, new HotelData());
        if ($request->hasFile('images')) {
            $imageService = new FileService();
            $imageService->saveMultipleImages($data['images'], 'hotels', $hotel, true);
        }
        Price::updateOrCreate([
            'item_id' => $hotel->id,
            'item_type' => get_class($hotel),
        ], [
            'price' => $data['price'],
            'system_price' => $data['system_price'],
            'd_price' => $data['d_price'],
            'system_d_price' => $data['system_d_price'],
            'fee' => $data['fee'],
            'weekday' => $data['weekday'],
            'month' => $data['month'],
        ]);
        flash()->success('Hotel Updated');
        return redirect()->route('hotels.index');
    }

    /**
     * @param Hotel $hotel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Hotel $hotel)
    {
        try {
            Hotel::destroy($hotel->id);
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this hotel!');
        }
        return redirect()->route('hotels.index');
    }
}
