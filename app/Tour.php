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
        'lead_id2',
        'sales_personnel_id',
        'sales_manager_id',
        'sales_venue_id',
        
        'tour_initial_time',
        'tour_date',
        'tour_time',
        'tour_time_in',
        'tour_time_out', 
        'tour_state', 
        'tour_city',
        'tour_marketing_agency',
        'tour_no_of_children',
        'tour_outcome',
        'tour_remarks', 
        'tour_month_income', 
        'tour_proceed_contract',
        'tour_attend', 
        'is_archive', 
        'created_at', 
        'updated_at',
    ];

    public $timestamps = false;

    public function lead()
    {
        return $this->belongsTo('App\Lead', 'lead_id1', 'lead_id');
    }

    public function salesvenue()
    {
        return $this->hasOne('App\SalesVenue', 'sales_venue_id', 'sales_venue_id');
    }
}