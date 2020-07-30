<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_Roles extends Model
{
    protected $fillable = [
         'role_id',
         'role',
         'code',
         'department'
    ];
}
