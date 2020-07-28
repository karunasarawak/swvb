<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [
        'gender_id',
        'gender_name'
    ];

    public function leads()
    {
        return $this->hasMany('App\Leads');
    }

    protected $table = 'gender';
}
