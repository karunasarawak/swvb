<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    //
    protected $fillable = [
            'doc_id',
            'doc_type'
    ];

    protected $table = 'documents_type';
}
