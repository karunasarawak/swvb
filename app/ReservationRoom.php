<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationRoom extends Model
{
    protected $fillable = [
        'rsvn_type_id',
        'inventory_id',
        'unit_type_id',
        'bed_type_id',
        'room_no',
        'room_no_of_pax',
        'room_price',
        'room_wd_points',
        'room_we',
        'room_remark',
        'bf_price_per_pax',
        'bf_pax',
        'bf_price_unit'
    ];
}
