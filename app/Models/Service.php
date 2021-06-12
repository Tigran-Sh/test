<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Kyslik\ColumnSortable\Sortable;

class Service extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'services';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'hotel_id', 'duration', 'address', 'longitude', 'latitude', 'user_id'];

    /**
     * @return BelongsTo
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return MorphMany
     */
    public function prices(): MorphMany
    {
        return $this->morphMany(Price::class, 'item');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(ServiceData::class)->where('lang', m_locale());
    }
}
