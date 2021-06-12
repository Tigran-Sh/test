<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraServiceData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'extra_service_data';

    /**
     * @var string
     */
    public $foreigenKey = 'extra_service_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slogan', 'dress_code', 'team_proven', 'details', 'description', 'cancellation', 'payment_conditions', 'extra_service_id',
        'lang'];
}
