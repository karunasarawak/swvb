<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallLog extends Model
{
    protected $fillable = [
        'cl_id',
        'el_id',
        'lead_id',
        'outcome',
        'reason',
        'com_channel',
        'remarks',
        'created_at',
        'updated_at'
    ];
}
