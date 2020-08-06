<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Invoices;

use App\InvoiceItems;

use App\Membership;

use App\InvoiceItemTypes;

class InvoicesController extends Controller
{
  public function index(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/invoice", "name" => "Invoice"],["name" => "All"]
    ];

    $invoices = Invoices::with('invoiceItem', 'membership.lead')->get();

    // $invoiceItems = InvoiceItems::all();

    $memberships = Membership::with('lead')->get();

    $payload = ['invoices'=>$invoices, 'memberships'=>$memberships];

    // dd($payload);

    return view('pages.invoice-all',['pageConfigs'=>$pageConfigs, 'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function newInvoice(){

    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/invoice", "name" => "Invoice"],["name" => "New Invoice"]
    ];

    $invoices = Invoices::all();

    $invoiceItems = InvoiceItems::all();

    $memberships = Membership::with('lead')->get();

    $invoiceItemTypes = InvoiceItemTypes::all();

    $payload = ['invoices'=>$invoices, 'invoiceItems'=>$invoiceItems, 'memberships'=>$memberships, 'invoiceItemTypes'=>$invoiceItemTypes];

    return view('pages.invoice-new',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }

  public function storeInvoice(Request $request) {
    $newInvoice = Invoices::create($request->all());
    $newInvoiceId = $newInvoice->id;

    for($i = 0; $i < count($request->itemID); $i++) {
      $invoiceItems[] = [
        'inv_id' => $newInvoiceId,
        'inv_itm_type_id' => $request->itemID[$i],
        'item_name' => $request->item[$i],
        'amount' => $request->amount[$i]
      ];
    }

    InvoiceItems::insert($invoiceItems);

    return redirect('invoice');
  }

  public function viewInvoice($id) {
    $pageConfigs = ['pageHeader' => true];

    $breadcrumbs = [
      ["link" => "/", "name" => "Home"],["link" => "/invoice", "name" => "Invoice"],["name" => "View Invoice Details"]
    ];

    $invoice = Invoices::where('inv_id', $id)->get();

    $payload = ['invoice'=>$invoice[0]];

     // dd($payload);

    return view('pages.invoice-details',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs, 'payload'=>$payload]);
  }
}