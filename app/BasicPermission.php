<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicPermission extends Model
{
    protected $fillable = [
            'bpermission_id',
            'staff_id',
            'module',
            'permission'
    ];
}
