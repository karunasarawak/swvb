<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLogsType extends Model
{
    protected $fillable = [
        'el_type_id',
        'el_cat_id',
        'el_type_abbr',
        'el_type_name',
        'created_at',
        'updated_at'
    ];

    protected $table = 'event_logs_type';
}
