<?php

namespace App\Imports;

use App\Dispatch;
use Maatwebsite\Excel\Concerns\ToModel;

class DispatchImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        
        return new Dispatch([
            //
        ]);
    }
}
