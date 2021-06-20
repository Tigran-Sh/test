<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ExtraService;
use App\Models\Hotel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * @param $id
     * @return JsonResponse
     */
    public function getExtraServiceData($id): JsonResponse
    {
        $hotel = Hotel::find($id);
        $extraServices = ExtraService::with('images','data')
            ->where('destination_id',$hotel->destination_id)
            ->get();
        return response()->json($extraServices);
    }
}
