<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class TaskAssign extends Model
{
    // Update
    public static function updateData($data)
    {
        $mro = DB::table('staff')->where('staff_code', $data['mro'])->pluck('staff_id');
        $cco = DB::table('staff')->where('staff_code', $data['cco'])->pluck('staff_id');
        // dd($mro);
        
        $value = DB::table('memberships')
                ->where('mbrship_no', $data['mbrship_no'])
                ->update([
                    'mro' => $mro[0],
                    'cco' => $cco[0]
                ]);

     }
}
