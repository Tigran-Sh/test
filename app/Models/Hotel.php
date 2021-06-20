<?php

namespace App\Models;

use App\Artwork;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Storage;
use Kyslik\ColumnSortable\Sortable;

class Hotel extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'hotels';

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
        'destination_id',
        'longitude',
        'latitude',
        'stars',
        'max_room',
        'available_single_rooms',
        'available_double_rooms',
        'guest_count',
        'status'
    ];

    /**
     * @return MorphMany
     */
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class,'imageable');
    }

    public function getAvailableGuestsCountAttribute()
    {
        return$this->available_single_rooms + $this->available_double_rooms * 2;
    }

    /**
     * @return BelongsTo
     */
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }

    /**
     * @return HasMany
     */
    public function meeting_rooms(): HasMany
    {
        return $this->hasMany(MeetingRoom::class);
    }

    /**
     * @return HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
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
        if ($value) {
            return Storage::url($value);
        }
    }

    /**
     * @param $value
     * @return string
     */
    public function getThumbAttribute()
    {
        if ($this->image) {
            return Storage::url('thumb/' . $this->getAttributes()['image']);
        }
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(HotelData::class)->where('lang', m_locale());
    }
}
