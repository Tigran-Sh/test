<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Storage;
use Kyslik\ColumnSortable\Sortable;

class ExtraService extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'extra_services';

    /**
     * @var array
     */
    protected $fillable = ['name', 'attributes', 'duration', 'longitude', 'latitude', 'destination_id', 'extra_service_group_id',
        'extra_service_type_id', 'user_id', 'address'];

    /**
     * @var string[]
     */
    protected $casts = [
        'attributes' => 'array'
    ];

    /**
     * @return MorphMany
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class,'imageable');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ExtraServiceType::class, 'extra_service_type_id');
    }

    /**
     * @return BelongsToMany
     */
    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(Package::class, 'package_extra_services');
    }

    /**
     * @return MorphOne
     */
    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'item');
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
        return $this->hasOne(ExtraServiceData::class)->where('lang', m_locale());
    }

}
