<?php

namespace App\Observers;

use App\Models\Hotel;
use App\Traits\DeleteRelationalImagesTrait;

class HotelObserver
{
    use DeleteRelationalImagesTrait;
    /**
     * Calculate guest count after create hotel
     *
     * @param Hotel $hotel
     */
    public function saving(Hotel $hotel)
    {
        $hotel->guest_count = $hotel->available_single_rooms + $hotel->available_double_rooms * 2;
    }

    /**
     * Calculate guest count after updating hotel
     *
     * @param Hotel $hotel
     */
    public function updating(Hotel $hotel)
    {
        $hotel->guest_count = $hotel->available_single_rooms + $hotel->available_double_rooms * 2;
    }

    /**
     * @param Hotel $hotel
     */
    public function deleting(Hotel $hotel)
    {
        $this->deleteImages($hotel);
    }
}
