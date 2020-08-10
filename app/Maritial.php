<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maritial extends Model
{
    protected $fillable = [
        'maritial_id',
        'maritial_name',
    ];

    public function lead()
    {
        return $this->belongsTo('App\Lead');
    }
}


