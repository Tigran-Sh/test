<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Price extends Model
{
    use HasFactory, Sortable;

    /**
     * @var string
     */
    protected $table = 'prices';

    /**
     * @var string[]
     */
    protected $fillable = ['item_id', 'item_type', 'price', 'd_price', 'system_price', 'system_d_price', 'weekday',
        'month', 'breakfast', 'fee', 'price_per_person'];

    /**
     * @var string[]
     */
    protected $casts = [
        'weekday' => 'array',
        'month' => 'array'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function item()
    {
        return $this->morphTo();
    }

}
