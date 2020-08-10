<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $fillable = [
        'mbrship_id',
        'package_price', //from installment
        'package_id',
        //'cc_id_amf',
        //'cc_id_install',
        //'comp_id',
       // 'application_no',
        'application_date',
       // 'agreement_no',
        'agreement_date',
        //'membership term',
        // 'mebrship_commence',
         'mbrship_exp',
         //'declaration_no',
         //'mro', 'cco',
         //'install_auto',
         //'amf_auto',
                  //put all the fields at here
    ];
}
