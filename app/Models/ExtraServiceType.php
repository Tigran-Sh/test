<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Kyslik\ColumnSortable\Sortable;

class ExtraServiceType extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'extra_service_types';

    /**
     * @var array
     */
    protected $fillable = ['name', 'image'];

    /**
     * @return HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(ExtraService::class);
    }

    /**
     * @return HasMany
     */
    public function transfers(): HasMany
    {
        return $this->hasMany(Transfer::class);
    }

    /**
     * @param $value
     * @return string
     */
    public function getImageAttribute($value)
    {
        if($value){
            return Storage::url($value);
        }
    }

    /**
     * @param $value
     * @return string
     */
    public function getThumbAttribute()
    {
        if($this->image){
            return Storage::url('thumb/' . $this->getAttributes()['image']);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(ExtraServiceTypeData::class)->where('lang', m_locale());
    }
}
