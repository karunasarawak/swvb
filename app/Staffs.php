<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $fillable = [
        'staff_name'
    ];

    public function leads()
    {
        return $this->hasMany('App\Leads');
    }
}
