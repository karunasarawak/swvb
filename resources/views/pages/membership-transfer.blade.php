@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Transfer Membership')

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
                        <h4 class="card-title text-white">Transfer Membership - 234560000</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                        <form class="form-horizontal" method="POST" action="" novalidate>
                            @csrf
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Package Info</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Date of Request Received</label>
                                            <input type="date" name="requestreceived_date" class="form-control" value="23456 0000" data-validation-required-message="Please select the date of requested received" required>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>New Declaration/Disclosure No.</label>
                                                <input type="text" class="form-control" placeholder="ABC1234" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Sales Approval</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Approved By</label>
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
                                            <label>Date of Approve</label>
                                                <input type="date" class="form-control" value="01 April 2020" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Transfer Fee(10%)</label>
                                                <input type="number" class="form-control" placeholder="RM 500" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Processing Fee</label>
                                                <input type="number" class="form-control" placeholder="RM 500" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group controls">
                                    <label class="d-block">Transfer To</label>
                                        <div class="custom-control-inline">
                                            <div class="radio mr-1">
                                                <input type="radio" name="gender1" id="male1" checked="" required>
                                                <label for="male1">New Member</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="gender1" id="female1" checked="">
                                                <label for="female1">Exisiting Member</label>
                                            </div>
                                        </div>
                                </div>  
                            </div>
                            <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Upload Document</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group controls">
                                    <div class="col-lg-12 col-md-12">
                                            <fieldset class="form-group">
                                            <label for="basicInputFile">Member Request</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                                <p for="basicInputFile">10% of Package price will be charged</p>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group controls">
                                    <div class="col-lg-12 col-md-12">
                                            <fieldset class="form-group">
                                            <label for="basicInputFile">Approval Letter</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" onclick="showContact2()">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 float-right-top">
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title text-white">Current Membership Info</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row pt-1">
                                <div class="col-4">
                                    <h6 class="py-50">Member Info</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Member Name</p>
                                        <p class="col font-weight-bold black">John Doe</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Contact No.</p>
                                        <p class="col font-weight-bold black">+6012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col-4">
                                    <h6 class="py-50">Membership Info</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Membership No.</p>
                                        <p class="col font-weight-bold black">23456 0000</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Date of Application</p>
                                        <p class="col font-weight-bold black">+6012 345 6789</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Date of Agreement</p>
                                        <p class="col font-weight-bold black">01 April 2020</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Package Type</p>
                                        <p class="col font-weight-bold black">Pearl Full</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Package Price</p>
                                        <p class="col font-weight-bold black">10,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Entitlement</p>
                                        <p class="col font-weight-bold black">SWD 2WE</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Payment to Date</p>
                                        <p class="col font-weight-bold black">5,000</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">External Membership</p>
                                        <p class="col font-weight-bold black">Yes</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Eligible for Transfer</p>
                                        <p class="col font-weight-bold black">No</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                            <div class="card-header bg-swvb-cyan">
                                <h4 class="card-title text-white">Assignments</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row pt-1">
                                                <p class="col">Declaration No.</p>
                                                <p class="col font-weight-bold black">1234 0000</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">MRO</p>
                                                <p class="col font-weight-bold black">MRO1-Chris</p>
                                            </div>
                                            <div class="row">
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
</section>
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
