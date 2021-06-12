<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'transfer_data';

    /**
     * @var string
     */
    public $foreigenKey = 'transfer_id';

    /**
     * @var array
     */
    protected $fillable = ['description', 'payment_conditions', 'refund_conditions', 'transfer_id', 'lang'];
}
