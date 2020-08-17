<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'staff_id',
        'role_id',
        'staff_name',
        'staff_fullname',
        'staff_code',
        'email',
        'is_active'
    ];
   
    public function lead()
    {
        return $this->hasMany('App\Lead');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'staff_id', 'dept_id');
    }

}
