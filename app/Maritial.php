<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maritial extends Model
{
    protected $fillable = [
        'maritial_id',
        'maritial_name',
    ];

    public function leads()
    {
        return $this->belongsTo('App\Leads');
    }
}


