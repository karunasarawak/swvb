<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    protected $fillable = [
        'id',
        'state_name',
        'country_id',
    ];
}
