<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTypeData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'company_type_data';

    /**
     * @var string
     */
    public $foreigenKey = 'company_type_id';

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'company_type_id', 'lang'];
}
