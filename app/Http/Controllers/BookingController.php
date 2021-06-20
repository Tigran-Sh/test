<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Booking;
use App\Models\ExtraService;
use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class BookingController extends Controller
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function reservation($id)
    {
        $package = Package::with('hotel', 'hotel.destination', 'hotel.data', 'hotel.price', 'hotel.services', 'hotel.images', 'hotel.services.data')
            ->find($id);
        $hotel = $package->hotel;
        $services = $hotel->services;
        $hotel_ids = Package::where('package_type_id', $package->package_type_id)
            ->pluck('hotel_id')
            ->toArray();
        $hotels = Hotel::with('services', 'images','data','price','services.data')
            ->whereIn('id', $hotel_ids)
            ->where('id', '!=', $hotel->id)
            ->paginate(m_per_page());
        $hotelsForExtraServices = Hotel::with('services', 'images','data')
            ->whereIn('id', $hotel_ids)
            ->paginate(m_per_page());
        $extraServices = ExtraService::with('destination', 'data','images')
            ->whereIn('destination_id', $hotel_ids)
            ->get();

        return view('booking.reservation', compact('hotel_ids', 'package', 'hotel', 'hotels', 'services', 'extraServices','hotelsForExtraServices'));
    }

    /**
     * @return Application|Factory|View
     */
    public function extra_services()
    {
        return view('booking.extra-service');
    }

    /**
     * @return Application|Factory|View
     */
    public function personal_information()
    {
        return view('booking.personal-information');
    }

    /**
     * @return Application|Factory|View
     */
    public function package_information()
    {
        return view('booking.package-information');
    }

    /**
     * @return Application|Factory|View
     */
    public function pick_dates()
    {
        return view('booking.pick-dates');
    }

//    /**
//     * Package Reservation
//     *
//     * @param ReservationRequest $request
//     * @return JsonResponse
//     */
//    public function reservation(ReservationRequest $request): JsonResponse
//    {
//        $data = $request->validated();
//        $data['reservation_number'] = generate_random_string();
//        Booking::create($data);
//
//        return response()->json(1, Response::HTTP_OK);
//    }
}
