<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'page_data';

    /**
     * @var string
     */
    public $foreigenKey = 'page_id';

    /**
     * @var array
     */
    protected $fillable = ['title', 'content', 'page_id', 'lang'];
}
