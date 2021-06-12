<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'contact_data';

    /**
     * @var string
     */
    public $foreigenKey = 'user_id';

    /**
     * @var array
     */
    protected $fillable = ['description', 'user_id', 'lang'];
}
