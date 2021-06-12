<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Kyslik\ColumnSortable\Sortable;

class Region extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'regions';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'image'];

    /**
     * @return HasMany
     */
    public function destinations() : HasMany
    {
        return $this->hasMany(Destination::class);
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
}
