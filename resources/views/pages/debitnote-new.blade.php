@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','New Debit Note')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link href="{{asset('assets/css/invoice-style.css') }}" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section>
    <div class="row" x-data="{name: ''}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="" action="" novalidate>
                        @csrf
                        
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Member</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="mbrship_id">Membership No</label>
                                                <select name="mbrship_id" id="mbrship_id" class="select2 custom-select form-control" 
                                                data-validation-required-message="Please select a member" onchange="setInputName()" required>
                                                    <option value="" disabled selected>Membership No</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" id="name" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="mbrship_name">Add Bill To (Opt.)</label>
                                                <input type="text" class="form-control" name="mbrship_name" placeholder="Name" id="mbrship_name">
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                <div class="row pt-1">
                                    <div class="col">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Debit Note Details</p>
                                    </div>
                                </div>
                                
                                <div id="item-input-1" class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="item_name">Item Name</label>
                                                <select name="mbrship_id" id="mbrship_id" class="select2 custom-select form-control" 
                                                data-validation-required-message="Please select a member" onchange="setInputName()" required>
                                                    <option value="" disabled selected>Extra Service Charges</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="amount">Amount</label>
                                                <input type="number" class="form-control" placeholder="RM" id="amount_1" step=".01">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div id="item-input-2" class="row hidden">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="item">Item</label>
                                                <select name="item" id="item" class="custom-select form-control" onchange="itemSelect()">
                                                    <option value="" disabled selected>Select an item</option>
                                                   
                                                    <option value=""></option>
                                                       
                                                </select>           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="amount">Amount</label>
                                                <input type="number" class="form-control" id="amount_2" step=".01">
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div id="item-input-3" class="row hidden">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="item_name">Item Name</label>
                                                <input type="text" class="form-control" id="item_name_2" name="item_name" disabled>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <button type="button" class="btn btn-clear m-1" id="btn_clear" onclick="clearInvoiceDetail(), enableRBType()">Clear</button>
                                                <button type="button" class="btn btn-primary m-1" id="btn_add" onclick="addInvoiceDetail(), disableRBType()">Add</button>
                                                <button type="button" class="btn btn-danger m-1" id="btn_clear_added" onclick="clearInvoiceItems()">Clear Added Items</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col-12">
                                        <h6 class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Discount</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="inv_disc_method">Discount Method</label>
                                                <select name="inv_disc_method" id="inv_disc_method" placeholder="RM" class="custom-select form-control">
                                                    <option value="" disabled selected>--</option>
                                                    <option value="RM">RM</option>
                                                    <option value="%">%</option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="inv_disc">Discount Value</label>
                                                <input type="text" class="form-control" id="inv_disc" name="inv_disc">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="inv_disc_note">Discount Note</label>
                                                <input type="text" class="form-control" placeholder="Promotion Discount" id="inv_disc_note" name="inv_disc_note">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="tax_note">Tax Note</label>
                                                <input type="text" class="form-control" id="tax_note" name="tax_note" value="SST" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="tax">Tax</label>
                                                <input type="text" class="form-control" id="tax" name="tax" value="6%" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="remark">Remark</label>
                                                <textarea class="form-control" id="remark" name="remark"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-sm-5">

                                <input type="hidden" id="invoice-detail-count" name="invoice-detail-count" value="1">
                                <input type="hidden" id="invoice-detail-row-count" name="invoice-detail-row-count" value="0">

                                <input type="hidden" id="total-amount-value" name="items_amount" value="0">
                                <input type="hidden" id="tax-value" name="tax_amount" value="0">
                                <input type="hidden" id="rounding-value" name="rounding" value="0">
                                <input type="hidden" id="total-value" name="total" value="0">

                                <table class="table" id="tbl-invoice">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle">Item</td>
                                            <th class="h6 text-white font-weight-bold my-auto align-middle" colspan="2">Amount</td>
                                        </tr>
                                    </thead>
                                    <tbody id="invoice-tbody">
                                        <!-- <tr id="invoice-detail-0">
                                            <td class="align-middle tbl-cell-text">Admin Charges</td>
                                            <td class="align-middle tbl-cell-text">RM 10</td>
                                            <td class="align-middle tbl-cell-text">
                                                <button type="button" class="btn-danger btn btn-delete" onclick="deleteRow('invoice_detail', '0')">X</button>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                    <tfoot class="tbl-footer-grey">
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Subcharge</td>
                                            <td id="tax-display" class="align-middle tbl-cell-text" colspan="2">RM 0.00 (SST 6%)</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Tax (%)</td>
                                            <td id="rounding-display" class="align-right tbl-cell-text" colspan="2">RM 0.00</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Rounding</td>
                                            <td id="rounding-display" class="align-right tbl-cell-text" colspan="2">RM 0.00</td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle tbl-cell-text">Total</td>
                                            <td id="total-display" class="align-right tbl-cell-text" colspan="2">RM 0.00</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row pt-1">
                                <div class="col-sm-6 ml-1">
                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Attach To</p>
                                </div>
                            <div class="card-body card-dashboard pt-1">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th></th>
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
                                                <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                    <label for="checkbox2"></label>
                                                    </div>
                                                    </fieldset>
                                                </td>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                    <label for="checkbox3"></label>
                                                    </div>
                                                    </fieldset>
                                                </td>
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
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>


<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('assets/js/invoice.js')}}"></script>
<script src="{{asset('assets/js/select_onchange.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
@endsection
