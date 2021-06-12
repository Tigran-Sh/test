<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'company_data';

    /**
     * @var string
     */
    public $foreigenKey = 'company_id';

    /**
     * @var array
     */
    protected $fillable = ['description', 'company_id', 'lang'];
}
