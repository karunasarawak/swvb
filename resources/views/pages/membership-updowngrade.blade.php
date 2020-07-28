@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Up/Dowgrade Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation float-sm-left">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Up / Downgrade Membership - 234560000</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{route('leads.store')}}" novalidate>
                         @csrf
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Request Info</p>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Date of Request Received</label>
                                            <input type="date" name="reference_no" class="form-control" value="23456 0000" data-validation-required-message="Please select the date of requested received" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>New Package</label>
                                            <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                                <option value="">Sapphire - Full</option>
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
                                            <label for="location">Date of Request</label>
                                            <input type="date" name="requestreceived_date" class="form-control" value="01 June 2020" data-validation-required-message="Please select the date of requested received" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Entitlement</label>
                                                <input type="text" class="form-control" placeholder="5 WD 2 WE" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Package Price</label>
                                                <input type="text" class="form-control" placeholder="RM 8000" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Installment Duration</label>
                                                <Select name="" class="custom-select" required>
                                                    <option>12 Month</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>AMF</label>
                                                <input type="number" class="form-control" placeholder="10,000" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Admin Fee</label>
                                                <input type="number" class="form-control" placeholder="RM 500" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Effective Date</label>
                                                <input type="date" class="form-control" value="04 April 2020" id="name" name="name"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            
                                            <label>Payment Schedule</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-primary form-2 position-absolute" id="btn_delete1" onclick="hideContact2()">Preview</button>
                                                    </div>
                                                </div>
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
                                            <label for="location">Aproved By</label>
                                            <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                                <option value="">Chris</option>
                                                <option value="Mr.">John</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">

                                            <label>Date of Approve</label>
                                                <div class="row">
                                                    <div class="col">
                                                    <input type="date" name="alt_addr_street2" class="form-control" value="01 April 2020" required>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                         <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Upload Document</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Member Request</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Note: RM200(20% of Difference)of admin fee will be charged</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <button type="button" class="btn btn-primary float-left position-relative mb-3" id="btn_add1" onclick="showContact2()">Submit</button>
                            
                    </div>
                </div>

                </form>
            </div>
            
        </div>
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

                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title  text-white">Assignments</h4>
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
