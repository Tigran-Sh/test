<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraServiceTypeData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'extra_service_type_data';

    /**
     * @var string
     */
    public $foreigenKey = 'extra_service_type_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'extra_service_type_id', 'lang'];
}
