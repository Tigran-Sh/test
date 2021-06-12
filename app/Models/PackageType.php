<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kyslik\ColumnSortable\Sortable;

class PackageType extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'package_types';

    /**
     * @var string[]
     */
    protected $fillable = ['name'];

    /**
     * @return HasMany
     */
    public function packages() : HasMany
    {
        return $this->hasMany(Package::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(PackageTypeData::class)->where('lang', m_locale());
    }
}
