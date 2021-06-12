<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reservation_number',
        'email',
        'full_name',
        'phone',
        'company_name',
        'reservation_data'
    ];

    protected $casts = [
        'reservation_data' => 'array'
    ];
}
