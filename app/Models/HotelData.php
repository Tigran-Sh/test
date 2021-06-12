<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'hotel_data';

    /**
     * @var string
     */
    public $foreigenKey = 'hotel_id';

    /**
     * @var array
     */
    protected $fillable = ['details', 'payment_conditions', 'refund_conditions', 'short_description', 'hotel_id', 'lang'];
}
