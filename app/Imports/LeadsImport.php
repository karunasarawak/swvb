<?php

namespace App\Imports;

use App\Leads;
use App\Salutations;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;

class LeadsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
                
        $salut = DB::select('select * from salutations where salutation = "'.$row[0].'"', [1]);
        $telem = DB::select('select * from staffs where staff_name LIKE "%'.$row[5].'%"', [1]);

        return new Leads([
            'salutation_id'     => $salut[0]->salutation_id,
            'name'              => $row[1],
            'mobile_no'         => $row[2], 
            'whatsapp_no'       => $row[3],
            'credit_card_limit' => $row[4],
            'telemarketer_id'   => $telem[0]->staff_id
        ]);
    }
}

// class LeadsImport implements ToModel, WithHeadingRow
// {
//     /**
//     * @param array $row
//     *
//     * @return \Illuminate\Database\Eloquent\Model|null
//     */
//     public function model(array $row)
//     {
//         return new Leads([
//             'salutation_id'     => $row['salutation'],
//             'name'              => $row['name'],
//             'mobile_no'         => $row['mobile_no'], 
//             'whatsapp_no'       => $row['whatsapp_no'],
//             'credit_card_limit' => $row['credit_card_limit'],
//             'telemarketer_id'   => $row['telemarketer']
//         ]);
//     }
// }
