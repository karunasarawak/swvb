<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditNoteSubject extends Model
{
    protected $fillable = [
        'cn_subject_id',
        'credit_id',
        'inv_id',
        'mbrship_id',
        'amount',
        'created_by',
        'created_at',
        'updated_at',
    ];

    public function invoice()
    {
        return $this->belongsTo('App\Invoice', 'inv_id', 'inv_id');
    }
}
