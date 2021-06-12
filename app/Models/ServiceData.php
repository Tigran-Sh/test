<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'service_data';

    /**
     * @var string
     */
    public $foreigenKey = 'service_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'slogan', 'dress_code', 'team_proven', 'details', 'description', 'service_id', 'lang'];
}
