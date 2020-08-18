<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StampingFeeBatch extends Model
{
    
    protected $fillable = [
        'sfb_id',
        'sfl_id',
        'sfb_req_by',
        'sfb_req_at',
        'sfb_approved_by',
        'sfb_approved_at',
        'sfb_req_at',
        'sfb_req_by',
        'penalty',
        'sfb_sent_at',
        'sfb_status'
    ];
          
  protected $table = 'stamping_fee_batch';
}
