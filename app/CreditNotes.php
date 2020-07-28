<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditNotes extends Model
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

    public function creditNoteTypes()
    {
        return $this->belongsTo('App\CreditNoteTypes', 'cn_type_id', 'cn_type_id');
    }

    public function membership()
    {
        return $this->belongsTo('App\Membership', 'mbrship_id', 'mbrship_id');
    }

    public function creditNoteSubjects()
    {
        return $this->hasMany('App\CreditNoteSubjects', 'credit_id', 'credit_id');
    }
}
