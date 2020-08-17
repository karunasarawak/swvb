<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Membership;

use App\Terminal;

use App\Bank;

class ReceiptController extends Controller
{
    public function index(){
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "#", "name" => "Receipt"],["name" => "All"]
        ];
    
        return view('pages.receipt-all', ['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs]);
      }
    
      public function newReceipt(){
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "New Receipts"]
        ];

        $memberships = Membership::with('lead')->get();

        $terminals = Terminal::all();

        $banks = Bank::all();

        $payload = ['memberships'=>$memberships, 'terminals'=>$terminals, 'banks'=>$banks];
    
        return view('pages.receipt-new',['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
      }

      public function Receiptdetails(){
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/leads", "name" => "Receipts"],["name" => "Receipts Details"]
        ];
    
        return view('pages.receipt-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
    
}
