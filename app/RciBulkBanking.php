<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RciBulkBanking extends Model
{
    protected $table = 'rci_bulk_bankings';

    protected $primaryKey='rcibb_id';

    protected $fillable =[
        'batch_no',
        'sub_batch'
    ];

    public function ru()
    {
        return $this->belongsTo('App\RcibbReservation','rcibb_id','rcibb_id');
    }

}

                