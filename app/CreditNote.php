<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditNote extends Model
{
    protected $fillable = [
        'credit_id',
        'credit_no',
        'mbrship_id',
        'cn_type_id',
        'cn_remarks',
        'issue_date',
        'status',
    ];

    // protected $guarded = ['inv_id'];

    public function creditNoteType()
    {
        return $this->belongsTo('App\CreditNoteType', 'cn_type_id', 'cn_type_id');
    }

    public function membership()
    {
        return $this->belongsTo('App\Membership', 'mbrship_id', 'mbrship_id');
    }

    public function creditNoteSubject()
    {
        return $this->hasMany('App\CreditNoteSubject', 'credit_id', 'credit_id');
    }
}
