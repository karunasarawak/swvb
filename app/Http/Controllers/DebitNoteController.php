<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DebitNoteController extends Controller
{
    public function index(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/debitnote", "name" => "Debit Note"],["name" => "All"]
        ];
    
        return view('pages.debitnote-all',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function newDebitNote(){
    
        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/debitnote", "name" => "Debit Note"],["link" => "/newDebitNote/", "name" => "New "]
        ];
    
        return view('pages.debitnote-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }

      public function details(){

        $pageConfigs = ['pageHeader' => true];
    
        $breadcrumbs = [
            ["link" => "/", "name" => "Home"],["link" => "/debitnote", "name" => "Debit Note"],["link" => "/debitnote/details", "name" => "Debit Note Details"],["name" => "Debit Note Details"]
        ];
    
        return view('pages.debitnote-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs]);
      }
}
