<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = [
        'race_id',
        'race_name',
        'created_at',
        'updated_at'
    ];
}
