<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationalities extends Model
{
    protected $fillable = [
        'nation_id',
        'nation',
    ];
}
