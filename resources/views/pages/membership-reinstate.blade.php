@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reinstate Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation float-left">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title text-white">Reinstatement - 234560000</h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="" novalidate>
                            @csrf
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Request Information</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Reference No.</label>
                                            <input type="number" name="requestreceived_date" class="form-control" placeholder="1234 0000" data-validation-required-message="Please select the date of requested received" required>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Date of Membership Terminate</label>
                                                <input type="date" class="form-control" value="01 June 2020" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    
                                </div>
                               
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Amount Payable for Reinstatement (RM)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Amount Due At Reinstatement</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control" placeholder="1234 0000" id="name" name="name"
                                                data-validation-required-message="The amount of late payment penalty charge" required>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Generate Reinstatement fee invoice</label>

                                            <div class="custom-control-inline">
                                                <div class="radio mr-1">
                                                 <input type="radio" name="amfcc" value="1" id="ccy" @click="xcc=false, cc=true" required>
                                                <label for="ccy">Yes</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="amfcc" value="0" id="ccn" @click="xcc=true, cc=false">
                                                <label for="ccn">No</label>
                                            </div>
                                            
                                            </div>       
                                        </div>
                                    </div>
                                </div>
                                <!-- if reinstatement fee yes then show -->
                               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">AMOUNT DUE AT REINSTATEMENT</label>
                                            <div class="row pl-1">
                                                <div class="custom-control-inline">
                                                    <div class="radio mr-1">
                                                        <input type="radio" name="amfcc" value="1" id="cb" @click="xcc=false, cc=true" required>
                                                        <label for="cb">Yes</label>
                                                    </div>
                                                
                                                    <div class="radio">
                                                        <input type="radio" name="amfcc" value="0" id="c" @click="xcc=true, cc=false">
                                                        <label for="c">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Total Amount Paid</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control" placeholder="1234 0000" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Official Receipt No.</label>
                                            
                                                <input type="number" class="form-control" placeholder="1234 0000" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Point Offset AMF (CAI only) Details</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" class="form-control" placeholder="1234 0000" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Remarks</label>
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                                </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button type="button" class="btn btn-primary float-left position-relative mb-5" id="btn_add1" onclick="showContact2()">Submit</button>
                        </form>
                 </div>
            </div>
            
         </div>
        </div>
        <!-- Current membership info!!!! -->
        <div class="col-md-4 float-right-top">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Current Membership Info</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="py-50">Member Info</h6>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Member Name</p>
                                            <p class="col font-weight-bold black">John Doe</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Contact No.</p>
                                            <p class="col font-weight-bold black">+6012 345 6789</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="py-50">Membership Info</h6>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Membership No.</p>
                                            <p class="col font-weight-bold black">23456 0000</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Date of Application</p>
                                            <p class="col font-weight-bold black">+6012 345 6789</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Date of Agreement</p>
                                            <p class="col font-weight-bold black">01 April 2020</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Package Type</p>
                                            <p class="col font-weight-bold black">Pearl Full</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Package Price</p>
                                            <p class="col font-weight-bold black">10,000</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Entitlement</p>
                                            <p class="col font-weight-bold black">SWD 2WE</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Payment to Date</p>
                                            <p class="col font-weight-bold black">5,000</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">External Membership</p>
                                            <p class="col font-weight-bold black">Yes</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Eligible for Transfer</p>
                                            <p class="col font-weight-bold black">No</p>
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                </div>
            </div>

            <!-- Assignment     -->
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title text-white">Assignments</h4>
                    </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Declaration No.</p>
                                            <p class="col font-weight-bold black">1234 0000</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">MRO</p>
                                            <p class="col font-weight-bold black">MRO1-Chris</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">CCO</p>
                                            <p class="col font-weight-bold black">CCO1</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Sales Personnel</p>
                                            <p class="col font-weight-bold black">Chris</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Sales Manager</p>
                                            <p class="col font-weight-bold black">Wilson</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Sales Venue</p>
                                            <p class="col font-weight-bold black">Kuching</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
