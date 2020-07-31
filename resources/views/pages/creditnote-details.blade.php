@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Credit Note')

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

                        <h4 class="card-title text-white">Credit Note - {{$payload['creditnote']->credit_no}}</h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Membership Details</p>
                            </div>
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Credit Note Details</p>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <p class="col">Membership No.</p>
                                    <p class="col font-weight-bold black">{{$payload['creditnote']->membership->mbrship_no}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">{{$payload['creditnote']->membership->lead->name}}</p>
                                </div>
                                <div class="row">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <p class="col">Remarks</p>
                                    <p class="col font-weight-bold black">{{$payload['creditnote']->cn_remarks}}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">Active</p>
                                </div>
                                <div class="row">
                                    <p class="col">Creation Date</p>
                                    <p class="col font-weight-bold black">{{$payload['creditnote']->issue_date}}</p>
                                </div>
                            </div>
                            <div class="col-4">
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Subject To</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <table class="table" id="data-table">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Invoice No</th>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Date</th>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Description</th>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Amount</th>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Paid</th>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Balance</th>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Credit Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($payload['creditnote']->creditNoteSubjects as $cnSubject)
                                        <tr>
                                            <td class="align-middle tbl-cell-text">
                                            {{$cnSubject->invoice->inv_no}}
                                            </td>
                                            <td class="align-middle tbl-cell-text">
                                            {{$cnSubject->invoice->issue_date}}
                                            </td>
                                            <td class="align-middle tbl-cell-text">
                                            <?php $i = 1; $len = count($cnSubject->invoice->invoiceItem); ?>
                                            @foreach ($cnSubject->invoice->invoiceItem as $invoiceItem)
                                                {{$invoiceItem->item_name}}<?php if($i < $len){echo ', ';} $i++;?>
                                            @endforeach
                                            </td>
                                            <td class="align-middle tbl-cell-text">
                                            </td>
                                            <td class="align-middle tbl-cell-text">
                                            </td>
                                            <td class="align-middle tbl-cell-text">
                                            </td>
                                            <td class="align-middle tbl-cell-text">
                                            {{$cnSubject->amount}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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

