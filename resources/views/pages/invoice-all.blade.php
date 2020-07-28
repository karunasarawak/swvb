@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Invoice')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="px-2 mt-1">
                         <a href="{{asset('invoice/new')}}" class="btn btn-outline-primary round mr-1 mb-1">New </a>
                        <!-- <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a>  -->
                    </div>
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table" id="tbl-acc">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Invoice No.</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Item</th>
                                        <th class="text-white">Amount</th>
                                        <th class="text-white">Issue Date</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Creator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($payload))
                                        @foreach ($payload['invoices'] as $invoice)
                                        <tr class="row-link" onclick="location.href='{{route('invoice.details', $invoice->inv_id)}}'">
                                            <td>{{$invoice->inv_no}}</td>
                                            <td>{{$invoice->membership->mbrship_no}}</td>
                                            <td>{{$invoice->membership->lead->name}}</td>
                                            <td>
                                            <?php $i = 1; $len = count($invoice->invoiceItem); ?>
                                            @foreach ($invoice->invoiceItem as $invoiceItem)
                                                {{$invoiceItem->item_name}}<?php if($i < $len){echo ', ';} $i++;?>
                                            @endforeach
                                            </td>
                                            <?php
                                                if($invoice->inv_disc > 0){
                                                    if($invoice->inv_disc_method == "RM"){
                                                        $amount = $invoice->total - $invoice->inv_disc;
                                                    } else if ($invoice->inv_disc_method == "%"){
                                                        $amountPercentage = 100 - $invoice->inv_disc;
                                                        $amount = $invoice->total * ($amountPercentage / 100);
                                                    }
                                                } else {
                                                    $amount = $invoice->total;
                                                }
                                            ?>
                                            <td>RM {{number_format($amount, 2)}}</td>
                                            <td></td>
                                            <td>
                                                <?php 
                                                if($invoice->status == "1") {
                                                    echo 'Pending';
                                                } ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Invoice No.</th>
                                        <th>Membership No.</th>
                                        <th>Name</th>
                                        <th>Item</th>
                                        <th>Amount</th>
                                        <th>Issue Date</th>
                                        <th>Status</th>
                                        <th>Creator</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js"></script>
<script src="{{asset('vendors/js/tables/datatable/datetime-moment.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('assets/js/tbl_col_search.js')}}"></script>
@endsection
