<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLog extends Model
{
    protected $fillable = [
        'el_id',
        'mbrship_id',
        'lead_id',
        'el_type_id',
        'el_cat_id',
        'el_title',
        'el_desc',
        'el_created_by',
        'el_created_at',
        'el_updated_by',
        'el_updated_at',
        'el_refer_to',
        'el_refer_date',
        'el_to_resolve_at',
        'el_resolve_at',
        'el_reserve',
        'com_channel_id'
    ];

    public function lead()
    {
        return $this->belongsTo('App\Lead', 'lead_id', 'lead_id');
    }

    public function callLog()
    {
        return $this->hasMany('App\CallLog', 'el_id', 'el_id');
    }

    public function eventLogCategory()
    {
        return $this->belongsTo('App\EventLogCategory', 'el_cat_id', 'el_cat_id');
    }

    public function eventLogType()
    {
        return $this->belongsTo('App\EventLogType', 'el_type_id', 'el_type_id');
    }
}
