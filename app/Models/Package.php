<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Kyslik\ColumnSortable\Sortable;

class Package extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'packages';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'image', 'package_type_id', 'hotel_id', 'meeting_room_id'];

    /**
     * @var string[]
     */
    protected $appends = ['thumb'];

    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PackageType::class, 'package_type_id');
    }

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
    public function meeting_room(): BelongsTo
    {
        return $this->belongsTo(MeetingRoom::class);
    }

    /**
     * @return BelongsToMany
     */
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'package_services');
    }

    /**
     * @return BelongsToMany
     */
    public function extra_services(): BelongsToMany
    {
        return $this->belongsToMany(ExtraService::class, 'package_extra_services');
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
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
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
        return $this->hasOne(PackageData::class)->where('lang', m_locale());
    }
}

