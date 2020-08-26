<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RcibbReservation extends Model
{
    protected $table = 'rcibb_reservations';
    protected $primaryKey='rcibb_rsvn_id';
    

    public function reservation()
    {
        return $this->belongsTo('App\Reservation','rsvn_id','rsvn_id');
    }

    public function batch()
    {
        return $this->belongsTo('App\RciBulkBanking','rcibb_id','rcibb_id');
    }

}
