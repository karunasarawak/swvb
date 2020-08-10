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
    <div class="row" x-data="{name: ''}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">New Points/Entitlement Adjustment</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                    <form  method="POST" action="{{route('store.points')}}" novalidate>
                        @csrf
                        
                        <div class="row pt-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="mbrship_id">Membership No</label>
                                        <select name="mbrship_id" id="mbrship_id" class="custom-select form-control" data-validation-required-message="Please select a member" onchange="checkdigit()" x-ref="selectBox" @change="name=$refs.selectBox.options[$refs.selectBox.selectedIndex].dataset.name" required>
                                            <option value="" disabled selected>Membership No</option>
                                            @if(isset($payload))
                                                @foreach($payload['memberships'] as $membership)
                                            <option value="{{$membership->mbrship_id}}" data-name="{{$membership->lead->name}}" data-number="{{$membership->rsvn_no}}">{{$membership->mbrship_no}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                              
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name" id="name" x-bind:value="name" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <!-- <label>digit</label> -->
                                            <input type="hidden" class="form-control" placeholder="" id="demo"  disabled>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Reservation No.</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Reservation No." x-bind:value="number" id="pt_rsvn_no" name="rsvn_no"
                                            disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Requested By</label>
                                        <select class="custom-select form-control required" id="requested_by" name="requested_by" data-validation-required-message="Please select a package type" required>
                                            <option value="">--</option> 
                                            @foreach($payload['staff'] as $staff)
                                            <option value="{{$staff->staff_id}}">{{$staff->staff_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Verified By</label>
                                        <select name="verified_by" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                        <option value="">--</option>
                                        @foreach($payload['staff'] as $staff)
                                            <option value="{{$staff->staff_id}}">{{$staff->staff_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Approved By</label>
                                        <select name="approved_by" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                        <option value="">--</option>
                                        @foreach($payload['staff'] as $staff)
                                            <option value="{{$staff->staff_id}}">{{$staff->staff_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                            <!-- CAI Points Reinstate/Adjustment -->
                        <div id="cai">
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">CAI Points Reinstate/Adjustment
                                    </p>
                                </div>
                            </div>
                            <!-- type 1 -->
                            <div class="row pt-1">
                                <div class="col">
                                    <div class="form repeater-default">
                                        <div data-repeater-list="group1">
                                            <div data-repeater-item>
                                                <div class="row justify-content-between">
                                                    <div class="col-md-2 col-sm-12 form-group">
                                                        <label for="Email">Use Year </label>
                                                        <input type="number" name="poe_year1" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                                    </div>
                                                    <div class="col-md-2 col-sm-12 form-group">
                                                        <label for="password">Points</label>
                                                        <input type="points" name="points1" class="form-control" id="password" placeholder="Enter Password">
                                                    </div>
                                                    <div class="col-md-2 col-sm-12 form-group">
                                                        <label for="password">Proposed Expiry Date</label>
                                                        <input type="date" name="expiry_date1" class="form-control" id="password" placeholder="Enter Password">
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
                                        <div class="col p-0">
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <!-- EVC POE Reinstate/Adjustment -->
                        <div id="evc">
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC POE Reinstate/Adjustments
                                    </p>
                                </div>
                            </div>
                            <!-- type 2 -->
                            <div class="row pt-1">
                                <div class="col">
                                    <div class="form repeater-default">
                                        <div data-repeater-list="group2">
                                            <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="Email">POE</label>
                                                    <input type="number" name="poe_year2" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Entitlement (WD)</label>
                                                    <input type="number" name="wd2" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Entitlement (WE)</label>
                                                    <input type="number" name="we2" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Proposed Expiry Date</label>
                                                    <input type="date" name="expiry_date2" class="form-control" id="password" placeholder="Enter Password">
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
                                              
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!-- EVC Poe Expiry Date Extention -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC POE Expiry Date Extention
                                </p>
                            </div>
                        </div>
                        <!-- Type 3 -->
                        <div class="row pt-1">
                            <div class="col">
                                <div class="form repeater-default">
                                    <div data-repeater-list="group3">
                                        <div data-repeater-item>
                                        <div class="row justify-content-between">
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Email">POE</label>
                                                <input type="number" name="poe_year3" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Proposed Expiry Date</label>
                                                <input type="date" name="expiry_date3" class="form-control" id="password" placeholder="Enter Password">
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
                        <!-- Type 4 -->
                        <div class="row pt-1">
                            <div class="col">
                                <div class="form repeater-default">
                                    <div data-repeater-list="group4">
                                        <div data-repeater-item>
                                        <div class="row justify-content-between">
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Email">POE</label>
                                                <input type="number" name="poe_year4" class="form-control" id="pt_use_yr" placeholder="Enter Use year">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Entitlement (WD)</label>
                                                <input type="number" name="wd4" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Entitlement (WE)</label>
                                                <input type="number" name="we4" class="form-control" id="password" placeholder="Enter Password">
                                            </div>
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">Proposed Expiry Date</label>
                                                <input type="date" name="expiry_date4" class="form-control" id="password" placeholder="Enter Password">
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
                        <!-- Type 5 -->
                        <div class="row pt-1">
                            <div class="col">
                                <div class="form repeater-default">
                                    <div data-repeater-list="group5">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label>Membership No.</label>
                                                    <select name="mbrship_id1" id="mbrship_id1" class="custom-select form-control" data-validation-required-message="Please select a member"  required>
                                                        <option value="" disabled selected>Membership No</option>
                                                        @if(isset($payload))
                                                            @foreach($payload['memberships'] as $membership)
                                                        <option value="{{$membership->mbrship_id}}" >{{$membership->mbrship_no}}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <!-- <label for="Email">Membership No.</label>
                                                    <input type="number" name="mbrship_no" class="form-control" id="pt_use_yr" placeholder="Enter Use year"> -->
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Entitlement (WD)</label>
                                                    <input type="number" name="wd5" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Entitlement (WE)</label>
                                                    <input type="number" name="we5" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Proposed Expiry Date</label>
                                                    <input type="date" name="expiry_date5" class="form-control" id="password" placeholder="Enter Password">
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
                                </div>
                            </div>
                        </div>    
                          
                            <button type="submit" class="btn btn-outline-primary mr-1 mb-1 mt-1">Submit</button>
             
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

</script>
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
<script src="{{asset('assets/js/select_onchange.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
