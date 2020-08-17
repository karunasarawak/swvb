<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardPrintingBatch extends Model
{
    protected $fillable = [
        'cpb_id',
        'supplier_id',
        'consignment_no',
        'invoice_no',
        'courier_payment',
        'dispatch_mode',
        'sent_date',
        'receive_date',
        'cpb_status'
    ];

    
    protected $table = 'card_printing_batch';
    //
}
