<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $fillable = [
        'staff_id',
        'staff_name',
        'staff_role_id',
        'is_active'
    ];

    public function leads()
    {
        return $this->hasMany('App\Leads');
    }
}
