<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'package_data';

    /**
     * @var string
     */
    public $foreigenKey = 'package_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'package_id', 'lang'];
}
