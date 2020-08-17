@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Installment Schedule Calculator')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col-md-10 card-title text-white">Installment Schedule Calculator</h4>
                        
                        <div class="col-2 ">
                            <a href="" class="btn btn-outline-white round text-white ml-1 bx bx-printer float-right"></a>
                            <a href="" class="btn btn-outline-white round text-white bx bx-download float-right"></a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-content">
                    <div class="card-body">
                            <div class="card-dashboard pt-2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Package</label>
                                                <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round mr-1 mb-1 text-white" required>
                                                <option value="membershipfilter1">Sapphire - Full</option>
                                                <option value="membershipfilter2">Active</option>
                                                <option value="membershipfilter3">Withdrawal</option>
                                                <option value="membershipfilter4">Suspended</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Installment Plan</label>
                                                <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round mr-1 mb-1 text-white" required>
                                                <option value="membershipfilter1">12 Month</option>
                                                <option value="membershipfilter2">Active</option>
                                                <option value="membershipfilter3">Withdrawal</option>
                                                <option value="membershipfilter4">Suspended</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment</label>
                                                <button type="button" class="select2 form-control btn btn-outline-primary round mr-1 mb-1 text-white" data-toggle="modal" data-target="#adddpwnpayment">Add</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Membership Price</label>
                                                <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round mr-1 mb-1 text-white" required>
                                                <option value="membershipfilter1">RM 5000</option>
                                                <option value="membershipfilter2">Active</option>
                                                <option value="membershipfilter3">Withdrawal</option>
                                                <option value="membershipfilter4">Suspended</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table" style="width:100%;">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">No.</th>
                                                <th class="text-white">Projected Date</th>
                                                <th class="text-white">Item</th>
                                                <th class="text-white">Installment</th>
                                                <th class="text-white">Admin Charges</th>
                                                <th class="text-white">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>22 June 2020</td>
                                                <td>Down Payment 1</td>
                                                <td>1550</td>
                                                <td>23.4</td>
                                                <td>273.4</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>22 June 2020</td>
                                                <td>Down Payment 1</td>
                                                <td>1550</td>
                                                <td>23.4</td>
                                                <td>273.4</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>22 June 2020</td>
                                                <td>Down Payment 1</td>
                                                <td>1550</td>
                                                <td>23.4</td>
                                                <td>273.4</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>22 June 2020</td>
                                                <td>Down Payment 1</td>
                                                <td>1550</td>
                                                <td>23.4</td>
                                                <td>273.4</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>22 June 2020</td>
                                                <td>Down Payment 1</td>
                                                <td>1550</td>
                                                <td>23.4</td>
                                                <td>273.4</td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>22 June 2020</td>
                                                <td>Down Payment 1</td>
                                                <td>1550</td>
                                                <td>23.4</td>
                                                <td>273.4</td>
                                            </tr>
                                            <tr>
                                               
                                                <td></td>
                                                <td></td>
                                                <td>Adjustment</td>
                                                <td></td>
                                                <td></td>
                                                <td>-30.50</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                
                                                <th></th>
                                                <th></th>
                                                <th>Total</th>
                                                <th></th>
                                                <th></th>
                                                <th>8,000.30</th>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        <button type="button" class="btn btn-primary m-1" id="btn_add1" onclick="showContact2()">Reschedule</button>
                
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="adddownpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-cyan">
                <h4 class="modal-title text-white" id="myModalLabel33">Choose Terminal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group controls">
                        <div class="card-body card-dashboard">
                        
                        </div>
                                
                        <div class="px-2">
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Cancel</a>
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Confirm</a>
                            
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
@endsection
