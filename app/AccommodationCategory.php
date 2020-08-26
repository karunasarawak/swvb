<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccommodationCategory extends Model
{
    protected $fillable = [
            'accom_cat_id',
            'accom_cat',
            'min_mbrship_paid'
    ];
}
