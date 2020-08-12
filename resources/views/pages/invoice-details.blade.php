@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Invoice')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">

                        <h4 class="card-title text-white">Invoice - {{$payload['invoice']->inv_no}}</h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Membership Details</p>
                            </div>
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice Items Details</p>
                            </div>
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Transaction Details</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <p class="col">Membership No.</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->membership->mbrship_no}}</p>
                            </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->membership->lead->name}}</p>
                                </div>
                                <div class="row">   
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->membership->mbrship_status}}</p>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice Detail</p>
                                    </div>
                                </div> 
                                <div class="row">
                                    <p class="col">Issue Date</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->issue_date}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Tax Note</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->tax_note}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Tax</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->tax}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Discount Method</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->inv_disc_method}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Discount Value</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->inv_disc}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Discount Note</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->inv_disc_note}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->status}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Remark</p>
                                    <p class="col font-weight-bold black">{{$payload['invoice']->remark}}</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <table class="table" id="tbl-invoice">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Item</td>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle" colspan="2">Amount</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($payload['invoice']->invoiceItem as $invoiceItem)
                                        <tr>
                                            <td class="align-middle tbl-cell-text">{{$invoiceItem->invoiceItemType->item}}</td>
                                            <td class="align-middle tbl-cell-text">RM {{$invoiceItem->amount}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot class="tbl-footer-grey">
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Tax (%)</td>
                                            <td id="tax-display" class="align-middle tbl-cell-text">RM {{$payload['invoice']->tax_amount}} (SST 6%)</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Rounding</td>
                                            <td id="rounding-display" class="align-middle tbl-cell-text">RM {{$payload['invoice']->rounding}}</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Total</td>
                                            <td id="total-display" class="align-middle tbl-cell-text">RM {{$payload['invoice']->total}}</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Discount ({{$payload['invoice']->inv_disc_method}})</td>
                                            <td id="total-display" class="align-middle tbl-cell-text">
                                                <?php 
                                                if ($payload['invoice']->inv_disc_method == "RM"){ 
                                                $discountAmount = $payload['invoice']->inv_disc;
                                                ?>
                                                RM {{$payload['invoice']->inv_disc}}
                                                <?php
                                                } else {
                                                $discountAmount = ($payload['invoice']->total * $payload['invoice']->inv_disc) / 100;
                                                echo 'RM ' . $discountAmount . ' (' . $payload['invoice']->inv_disc . '%)';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Total (Discounted)</td>
                                            <td id="total-display" class="align-middle tbl-cell-text">
                                                <?php
                                                $discountedTotal = $payload['invoice']->total - $discountAmount;
                                                echo 'RM ' . number_format((float)$discountedTotal, 2, '.', '');
                                                ?>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-4">
                            </div>
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
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection

