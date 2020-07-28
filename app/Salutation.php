<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salutation extends Model
{
    protected $fillable = [
        'salutation'
    ];

    public function leads()
    {
        return $this->hasMany('App\Leads');
    }
}
