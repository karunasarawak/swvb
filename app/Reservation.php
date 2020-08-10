<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'rsvn_id',
        'mbrship_id',
        'rsvn_type_id',
        'accom_id',
        'voucher_id',
        'invoice_id',
        'communication_channel',
        'check_in',
        'check_out',
        'no_of_pax',
        'internal_remark',
        'hotel_remark',
        'booking_received_date',
    ];
}
