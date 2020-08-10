<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_Role extends Model
{
    protected $fillable = [
         'role_id',
         'role',
         'code',
         'department'
    ];
}
