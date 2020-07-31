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
                    <h4 class="card-title text-white">New Points/Entitlement Adjustment</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                    <form class="form repeater-default" method="POST" action="" novalidate>
                        @csrf
                        
                        <div class="row pt-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Membership No.</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Membership No." id="pt_mbrship_no" name="mbrship_no"
                                            data-validation-required-message="This Membership No. field is required" required>
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

                        <!-- CAI Points Reinstate/Adjustment -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">CAI Points Reinstate/Adjustment
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
                                                <label for="Email">Use Year </label>
                                                <input type="number" name="use_yr" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Points</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="Male">Male</option>
                                                <option value="Female">female</option>
                                            </select>
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                            <label for="Profession">Profession</label>
                                            <select name="profession" id="Profession" class="form-control">
                                                <option value="FontEnd Developer">Designer</option>
                                                <option value="BackEnd Developer">Developer</option>
                                                <option value="Bussiness Analystic">Tester</option>
                                                <option value="Project Cordinator">Manager</option>
                                            </select>
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
                        

                          <!-- EVC POE Reinstate/Adjustment -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC POE Reinstate/Adjustments
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
                                                <label for="Email">POE</label>
                                                <input type="number" name="use_yr" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Entitlement (WD)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Entitlement (WE)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Proposed Expiry Date</label>
                                                <input type="date" class="form-control" id="password" placeholder="Enter Password">
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
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC POE Expiry Date Extention
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>POE</label>
                                        <input type="number" class="form-control" placeholder="Name" id="name" name="name"
                                        data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>
                      
                        
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Entitlement (WD)</label>
                                        <input type="number" class="form-control" placeholder="Name" id="name" name="name"
                                        data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Entitlement (WE)</label>
                                        <input type="number" class="form-control" placeholder="Name" id="name" name="name"
                                        data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>
                       
                        
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Proposed Expiry Date</label>
                                        <input type="date" class="form-control" placeholder="Name" id="name" name="name"
                                        data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <!-- EVC Add Bonus Entitlement -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Add Bonus Entitlement
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Proposed Expiry Date</label>
                                        <div class="position-relative">
                                            <input type="date" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
                                            data-validation-required-message="This Mobile No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                          <!-- EVC Add Member Loyalty Reward -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Add Member Loyalty Reward
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
                                                <label for="Email">Membership No.</label>
                                                <input type="number" name="use_yr" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Entitlement (WD)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Entitlement (WE)</label>
                                                <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Proposed Expiry Date</label>
                                                <input type="date" class="form-control" id="password" placeholder="Enter Password">
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
                                   
                            
                            <button type="submit" class="btn btn-outline-primary mr-1 mb-1 mt-1">Submit</button>
                            
                
                        
                        
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
