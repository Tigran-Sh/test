<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingRoomData extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'meeting_room_data';

    /**
     * @var string
     */
    public $foreigenKey = 'meeting_room_id';

    /**
     * @var array
     */
    protected $fillable = ['description', 'meeting_room_id', 'lang'];
}
