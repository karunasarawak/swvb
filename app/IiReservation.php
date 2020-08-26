<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IiReservation extends Model
{
    protected $fillable =[
        'ruh_ref_no',
        'ii_dep_ref_no',
        'exchange_no'
    ];

    protected $table = 'ii_reservations';

    public function reservation()
    {
        return $this->belongsTo('App\Reservation','rsvn_id','rsvn_id');
    }

    public function iiru()
    {
        return $this->belongsTo('App\IiReserveUnit','iiru_id','iiru_id');
    }

}

                