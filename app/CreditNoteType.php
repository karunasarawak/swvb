<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditNoteType extends Model
{
    protected $fillable = [
        'cn_type_id',
        'cn_type',
    ];
}
