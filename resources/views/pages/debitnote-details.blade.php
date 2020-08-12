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

                        <h4 class="card-title text-white">Debit Note</h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-3">
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 ">Membership Details</p>
                            </div>
                            <div class="col-4">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Details</p>
                            </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <p class="col">Membership No.</p>
                                    <p class="col font-weight-bold black"></p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black"></p>
                                </div>
                                
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <p class="col">Item</p>
                                    <p class="col font-weight-bold black"></p>
                                </div>
                                <div class="row">
                                    <p class="col">Remark</p>
                                    <p class="col font-weight-bold black">-</p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">Open<i class="bx bx-pencil"></i></p>
                                </div>
                                <div class="row">
                                    <p class="col">Creation Date</p>
                                    <p class="col font-weight-bold black">01 May 2020</p>
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
                                    
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Subcharge</td>
                                            <td class="align-middle tbl-cell-text">RM </td>
                                        </tr>
                                    <!-- <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                    <label for="checkbox2"></label> -->
                                    </tbody>
                                    <tfoot class="tbl-footer-grey">
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Tax (%)</td>
                                            <td id="tax-display" class="align-middle tbl-cell-text">RM </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Rounding</td>
                                            <td id="rounding-display" class="align-middle tbl-cell-text">RM </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Total</td>
                                            <td id="total-display" class="align-middle tbl-cell-text">RM </td>
                                        </tr>
                                       
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row pt-1">
                                <div class="col-sm-6 ml-1">
                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Subject To</p>
                                </div>
                            <div class="card-body card-dashboard pt-1">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                               
                                                <th class="text-white" style="width:30%">Invoice</th>
                                                <th class="text-white" style="width:30%">Date</th>
                                                <th class="text-white" style="width:50%">Description</th>
                                                <th class="text-white">Amount</th>
                                                <th class="text-white">Paid</th>
                                                <th class="text-white">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <button type="submit" class="btn btn-primary m-1" id="btn_create">Create</button>
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

