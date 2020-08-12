<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventLog extends Model
{
    protected $fillable = [
        'el_id',
        'el_type_id',
        'el_cat_id',
        'lead_id',
        'customer_type',
        'title',
        'last_updated_by',
        'created_by',
        'created_at',
        'updated_by'
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
