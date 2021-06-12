<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTypeData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'package_type_data';

    /**
     * @var string
     */
    public $foreigenKey = 'package_type_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'package_type_id', 'lang'];
}
