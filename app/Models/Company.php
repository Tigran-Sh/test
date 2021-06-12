<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'companies';

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'website', 'email', 'phone', 'fax', 'zip', 'city', 'street', 'house', 'description',
        'company_type_id', 'image'];


    /**
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CompanyType::class, 'company_type_id');
    }

    /**
     * @return BelongsToMany
     */
    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'company_user','company_id','user_id');
    }

    /**
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
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
        return $this->hasOne(CompanyData::class)->where('lang', m_locale());
    }
}
