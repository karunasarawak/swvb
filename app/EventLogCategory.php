<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLogCategory extends Model
{
    protected $fillable= [
        'el_cat_id',
        'el_cat_abbr',
        'el_cat_name',
        'created_at',
        'updated_at'
    ];

    protected $table = 'event_logs_category';
}
