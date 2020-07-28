@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Withdraw Membership')

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
                            <h4 class="card-title text-white">Withdraw / Cancellation - 234560000</h4>
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
                                            <label>Date of Request</label>
                                                <input type="date" class="form-control" value="01 June 2020" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Date of Salvage</label>
                                                <input type="date" class="form-control" value="01 June 2020" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Deadline of Salvage</label>
                                                <input type="date" class="form-control" value="30 June 2020" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Type of Request</label>
                                                <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                                    <option value="">Withdraw</option>
                                                    <option value="Mr.">Transfer</option>
                                                    <option value="Ms.">Upgrade</option>
                                                    <option value="Dr.">Downgrade</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Salvage Info</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Date of Salvage</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Chris</option>
                                                <option value="2">John</option>

                                            </select>           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Event ID</label>
                                                <input type="number" class="form-control" placeholder="1234 0000" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Salvage Outcome</label>
                                                <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                                    <option value="">Refund</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                    <option value="Dr.">Dr.</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Reason of Withdrawal/Cancel</label>
                                                <input type="text" class="form-control" placeholder="RM 500" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group controls">
                                    <label class="d-block">Income Group</label>
                                        <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                                    <option value="">Below RM 5000</option>
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Ms.">Ms.</option>
                                                    <option value="Dr.">Dr.</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Refund Info</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Reason of Withdrawal/Cancel</label>
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                                </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group controls">
                                        <label class="d-block">Refund Letter</label>
                                            <div class="custom-control-inline">
                                                <div class="radio mr-1">
                                                    <input type="radio" name="gender1" id="male1" checked="" required>
                                                    <label for="male1">Yes</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="gender1" id="female1" checked="">
                                                    <label for="female1">No</label>
                                                </div>
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
