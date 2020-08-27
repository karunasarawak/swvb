<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\EventLog;

class Dispatch extends Model
{
    public static function upload($data)
    {
        DB::table('dispatch')->insert([
                'consignment_note'=>$data['consignment_note'],
                'mode'=>$data['mode'],
                'dispatch_item'=>$data['dispatch_item'],
                'dispatch_date'=>$data['dispatch_date'],
                'item_status'=>$data['item_status'],
                'remarks'=>$data['remarks'],
            ]);
    }
        
}              