@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ICT Request')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" id="form-repeater-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">New Account Adjustment</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form repeater-default" method="POST" action="" novalidate>
                        @csrf
                        
                        <div class="row pt-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Membership No.</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
                                            data-validation-required-message="This Mobile No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Member Name</label>
                                        <div class="position-relative">
                                            <input type="name" class="form-control" placeholder="Name of member" id="pt_mbr_name" name="mbr_name"
                                            data-validation-required-message="This Member name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Reservation No.</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Reservation No." id="pt_rsvn_no" name="rsvn_no"
                                            data-validation-required-message="This Reservation No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice
                                </p>
                            </div>
                        </div>
                      
                        <div class="row pt-1">
                            <div class="col">
                                <form class="form repeater-default">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>
                                        <div class="row justify-content-between">
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Email">Invoice Type</label>
                                                <input type="number" name="use_yr" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Unit Price (RM)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Rounding Adj. (RM)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Total (RM)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            
                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                                    class="bx bx-x"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col p-0">
                                        <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                            Add
                                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Credit Note/Debit/Receipt/Refund -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Credit/Debit Note & Receipt/Refund
                                </p>
                            </div>
                        </div>
                      
                        <div class="row pt-1">
                            <div class="col">
                                <form class="form repeater-default">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="gender">Document Type</label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option value="Male">Credit Note</option>
                                                        <option value="Female">Debit Note</option>
                                                        <option value="Female">Voice Receipt/Refund</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Original Invoice No.</label>
                                                    <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Unit Price (RM)</label>
                                                    <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Rounding Adj. (RM)</label>
                                                    <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Total (RM)</label>
                                                    <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                
                                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                                        class="bx bx-x"></i>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col p-0">
                                        <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                            Add
                                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <!-- EVC Poe Expiry Date Extention -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Redundant of:</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio1">
                                                        <label for="radio1">Guest Certificate Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio1">
                                                        <label for="radio1">Reservation Admin Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio2">
                                                        <label for="radio2">Internal Affiliation Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Oversight by Staff</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio1">
                                                        <label for="radio1">Waiver of Reservation Admin Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio1">
                                                        <label for="radio1">Discount of Reactivation Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio2">
                                                        <label for="radio2">Cancellation of Membership</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio2">
                                                        <label for="radio2">Booking Cancellation</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio2">
                                                        <label for="radio2">Duplicate of Invoice</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="radio">
                                                        <input type="radio" name="bsradio" id="radio2">
                                                        <label for="radio2">Others</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                     

                            <!-- EVC Add Bonus Entitlement -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>For Reservation No:</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
                                            data-validation-required-message="This Mobile No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Others or Remarks</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
                                            data-validation-required-message="This Mobile No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                         
                            <button type="submit" class="btn btn-outline-primary mr-1 mb-1 mt-1">Save</button>
                            
                            
                        </div>
                    </form>
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
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
@endsection
