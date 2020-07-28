<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\CreditNotes;

use App\CreditNoteTypes;

use App\CreditNoteSubjects;

use App\Membership;

use App\InvoiceItems;

class CreditNotesController extends Controller
{
    public function index(){
        $pageConfigs = ['pageHeader' => true];

        $breadcrumbs = [
          ["link" => "/", "name" => "Home"],["link" => "/creditnote", "name" => "Credit Note"],["name" => "All"]
        ];

        $creditnotes = CreditNotes::all();

        $payload = ['creditnotes'=>$creditnotes];

        // dd($payload);

        return view('pages.creditnote-all',['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }

    public function newCreditNote(){
  
      $pageConfigs = ['pageHeader' => true];
  
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/creditnote", "name" => "Credit Note"],["name" => "New Credit Note"]
      ];
  
      $memberships = Membership::all();

      $creditNoteTypes = CreditNoteTypes::all();
  
      $payload = ['memberships'=>$memberships, 'creditNoteTypes'=>$creditNoteTypes];
  
      return view('pages.creditnote-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }

    public function search(Request $request){
      $invoices = [];

      if($request->has('mbrship_id')){
        $invoices = DB::table("invoices")
          ->where('mbrship_id',$request->mbrship_id)
          ->get();
      }

      $invoiceDesc = [];

      foreach ($invoices as $invoice) {
        $invoiceItems = DB::table("invoice_items")
          ->where('inv_id', $invoice->inv_id)
          ->get();
        $itemCount = 0;
        $description = '';
        foreach($invoiceItems as $invoiceItem) {
          if($itemCount > 0){
            $description .= ', ';
          }
          $description .= $invoiceItem->item_name;
          $itemCount++;
        }
        array_push($invoiceDesc, $description);
      }

      $invoiceItemsAmount = [];

      // foreach ($invoices as $invoice) {
      //   $invoiceItems = DB::table("invoice_items")
      //     ->where('inv_id', $invoice->inv_id)
      //     ->get();
      //     $amount = 0;
      //   foreach($invoiceItems as $invoiceItem) {
      //     $amount = $amount + $invoiceItem->amount;
      //   }
      //   array_push($invoiceItemsAmount, $amount);
      // }

      foreach ($invoices as $invoice) {
        $discMethod = $invoice->inv_disc_method;
        if($discMethod == "RM"){
          $amount = $invoice->total - $invoice->inv_disc;
          $finalAmount = number_format($amount, 2);
          array_push($invoiceItemsAmount, $finalAmount);
        } else if ($discMethod == "%"){
          $amountPercentage = 100 - $invoice->inv_disc;
          $amount = $invoice->total * ($amountPercentage / 100);
          $finalAmount = number_format($amount, 2);
          array_push($invoiceItemsAmount, $finalAmount);
        } else if ($discMethod == NULL){
          $amount = $invoice->total;
          $finalAmount = number_format($amount, 2);
          array_push($invoiceItemsAmount, $finalAmount);
        }
      }

      return response()->json(['member_invoices' => $invoices, 'invoice_description' => $invoiceDesc, 'invoice_amount' => $invoiceItemsAmount]);
    }

    public function storeCreditNote(Request $request) {
      $newCreditNote = CreditNotes::create($request->all());
      $newCNId = $newCreditNote->id;

      for($i = 0; $i < count($request->amount); $i++){
        $creditNoteSubjects[] = [
          'credit_id' => $newCNId,
          'inv_id' => $request->inv_id[$i],
          'mbrship_id' => $request->mbrship_id,
          'amount' => $request->amount[$i]
        ];
      }

      CreditNoteSubjects::insert($creditNoteSubjects);

      return redirect('creditnote');
    }

    public function viewCreditNote($id) {
      $pageConfigs = ['pageHeader' => true];
  
      $breadcrumbs = [
        ["link" => "/", "name" => "Home"],["link" => "/creditnote", "name" => "Credit Note"],["name" => "View Credit Note Details"]
      ];

      $creditNote = CreditNotes::where('credit_id', $id)->get();

      

      $payload = ['creditnote'=>$creditNote[0]];

      return view('pages.creditnote-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
    }
}
