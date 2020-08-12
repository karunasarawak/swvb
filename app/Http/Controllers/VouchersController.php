<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voucher;

class VouchersController extends Controller
{
    // input forms
    public function index(){

        $pageConfigs = ['pageHeader' => true];

        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Vouchers"],["name" => "All"]
        ];

        $voucher = Voucher::all()->where('voucher_status', 1);

        // dd($voucher);

        return view('pages.vouchers-all',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'voucher'=>$voucher]);
    }
    
    public function editVoucher(Request $request)
    {
      Voucher::where('voucher_id', $request->voucher_id)
          ->update([
            'cv_exp_date'=>$request->exp_date,
            'night'=>$request->stay,
            'no_occupancy'=>$request->occup,
            'accom_id'=>$request->hotel
          ]);

      return redirect('vouchers');
    }

    public function archiveVoucher(Request $request, $voucher_id)
    {
      $voucher = Voucher::find(1);
      $voucher->voucher_status = '0';
      $voucher->save();

      return redirect('vouchers/archive');
    }
}
