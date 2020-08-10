<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //Database Attributes
    //Where to link function
    protected $fillable = [
        'tour_id',
        'lead_id',
        'sales_personnel_id',
        'tour_date',
        'tour_time',
        'tour_time_in',
        'tour_time_out', 
        'tour_status', 'created_at', 'updated_at'];

    public $timestamps = false;
}
