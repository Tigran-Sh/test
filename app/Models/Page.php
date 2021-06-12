<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Page extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'pages';

    /**
     * @var string[]
     */
    protected $fillable = ['slug'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function data()
    {
        return $this->hasOne(PageData::class)->where('lang', m_locale());
    }
}
