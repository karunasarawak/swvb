<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardPrinting extends Model
{
    protected $fillable = [
        'cpl_id',
        'cpb_id',
        'mbrship_no'
    ];

    protected $table = 'card_printing_list';
}