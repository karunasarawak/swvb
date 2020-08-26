<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IiReserveUnit extends Model
{
    protected $fillable =[
        'year',
        'status'
    ];

    protected $table = 'ii_reserve_units';

}

                