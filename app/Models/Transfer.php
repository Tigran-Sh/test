<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class Transfer extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'transfers';

    /**
     * @var string[]
     */
    protected $fillable = ['address', 'start_longitude', 'end_longitude', 'start_latitude', 'end_latitude',
        'minimum', 'maximum', 'extra_service_group_id', 'extra_service_type_id', 'price_per_km', 'car_size',
        'user_id', 'destination_id'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(TransferData::class)->where('lang', m_locale());
    }

}
