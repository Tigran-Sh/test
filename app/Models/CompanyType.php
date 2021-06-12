<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class CompanyType extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'company_types';

    /**
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * @return HasMany
     */
    public function companies() : HasMany
    {
        return $this->hasMany(Company::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(CompanyTypeData::class)->where('lang', m_locale());
    }


}
