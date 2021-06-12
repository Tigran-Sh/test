<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kyslik\ColumnSortable\Sortable;

class MeetingRoom extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'meeting_rooms';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'hotel_id', 'min', 'max', 'price_per_person', 'daily_pay', 'fee'];

    /**
     * @return BelongsTo
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(MeetingRoomData::class)->where('lang', m_locale());
    }
}
