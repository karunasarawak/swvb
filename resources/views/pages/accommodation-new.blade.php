@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Accommodatioos')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" id="form-repeater-wrapper">
    <div class="row" >
        <div class="col-md-12">
            <form action="{{route('accommodation.store')}}" method="POST" novalidate>
                @csrf
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title text-white ml-2">New Accommodations </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="row pt-3 ">
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Accommodation</p>
                                        </div>
                                        <!-- <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Location</p>
                                        </div> -->
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Accommodation</label>
                                                    <input type="text" name="accom_name" class="form-control" placeholder="--" data-validation-required-message="Please write the application number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Code</label>
                                                    <input type="text" name="accom_code" class="form-control" placeholder="--" data-validation-required-message="Please write the application number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Accommodation Category</label>
                                                    <select class="custom-select form-control required" id="accom_cat_id" name="accom_cat" required>
                                                    @foreach($payload['acccategory'] as $ac)
                                                    <option value="{{$ac->accom_cat_id}}">{{$ac->accom_cat}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Club</label>
                                                    <select class="custom-select form-control required" id="marital_status" name="club" required>
                                                    <option value="" disabled selected>Select club</option>
                                                    <option value="0">CAI</option>
                                                    <option value="1">EVC</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Travel Agent</label>
                                                    <select class="custom-select form-control required" id="marital_status" name="ta_id" required>
                                                    @foreach($payload['ta'] as $ta)
                                                    <option value="{{$ta->ta_id}}">{{$ta->ta_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Status</label>
                                                    <select class="custom-select form-control required" id="marital_status" name="package_status" required>
                                                    <option value="0">Inactive</option>
                                                    <option value="1">Active</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-3 ">
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Location</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Address 1</label>
                                                    <input type="text" name="mbr_no" class="form-control" placeholder="--" data-validation-required-message="Please write the membership number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Address 2</label>
                                                    <input type="text" name="mbr_no" class="form-control" placeholder="--" data-validation-required-message="Please write the membership number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Address 3</label>
                                                    <input type="text" name="mbr_no" class="form-control" placeholder="--" data-validation-required-message="Please write the membership number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Address 4</label>
                                                    <input type="text" name="mbr_no" class="form-control" placeholder="--" data-validation-required-message="Please write the membership number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>PostCode</label>
                                                    <input type="text" name="postcode" class="form-control" placeholder="--" data-validation-required-message="Please write the membership number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>State</label>
                                                    <select name="state_id" id="packagetype"  class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                    <option value=""disabled selected>Select a state</option>
                                                    @foreach($payload['states'] as $states)
                                                        <option value="{{$states->id}}" id="sample">{{$states->state_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>City</label>
                                                    <select name="city_id" id="packagetype"  class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                    <option value=""disabled selected>Select a city</option>
                                                    @foreach($payload['cities'] as $cities)
                                                        <option value="{{$cities->city_id}}" id="sample">{{$cities->city_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Country</label>
                                                    <select name="country_id" id="packagetype"  class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                    <option value=""disabled selected>Select a city</option>
                                                    @foreach($payload['countries'] as $countries)
                                                        <option value="{{$countries->id}}" id="sample">{{$countries->country_name}}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="row pt-3 ">
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Booking Details</p>
                                        </div>
                                        
                                    </div>
                                    <div class="row" >
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Start Lead Time</label>
                                                    <input type="time" name="min_lead_time" class="form-control" placeholder="--" required>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Latest By</label>
                                                    <input type="number" name="max_lead_time" class="form-control" placeholder="--" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Cancellation Deadline</label>
                                                    <input type="date" name="cxl_deadline" class="form-control" placeholder="--" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Minimum Stay</label>
                                                    <input type="number" name="min_stay" class="form-control" placeholder="--" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Admin Charges</label>
                                                    <input type="number" name="admin_charges" class="form-control" placeholder="--" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p>Provided Breakfast</p>
                                            </div>
                                            <div class="col">
                                                <div class="custom-control-inline">
                                                    <div class="col radio mr-1">
                                                        <input type="radio" name="Breakfast" id="Yes3" checked=""  required>
                                                        <label for="Yes3">Yes</label>
                                                    </div>
                                                    <div class="col radio">
                                                        <input type="radio" name="Breakfast" id="No3"  checked="">
                                                        <label for="No3">No</label>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row pt-3">
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Breakfast</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form repeater-default">
                                                <div data-repeater-list="group1">
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="col-md-4">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="Email">Number of Pax </label>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <input type="number" name="min_pax" class="form-control w-1" id="Email" placeholder="0">
                                                                            </div>
                                                                            <p>-</p>
                                                                            <div class="col">
                                                                                <input type="number" name="max_pax" class="form-control w-1" id="Email" placeholder="0">
                                                                            </div>  
                                                                        </div>              
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Breakfast Price Per Pax (RM)</label>
                                                                        <input type="number" name="price_per_pax" class="form-control" placeholder="--" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                                                    class="bx bx-x"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </div>
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
                                    
                                    
                                    <div class="row pt-3">
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Check In/Check Out Time</p>
                                        </div>
                                       
                                    </div>
                                    <div class="row ">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Check In Time</label>
                                                    <input type="time" name="check_in_start" class="form-control" value="" data-validation-required-message="Please write the agreement number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Check Out Time</label>
                                                    <input type="time" name="check_out_start" class="form-control" value="" data-validation-required-message="Please write the agreement number" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Season(CAI)</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form repeater-defeault">
                                                <div data-repeater-list="group2">
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Season</label>
                                                                        <select name="season" class="select2 form-control" required>
                                                                        <option>--</option>
                                                                        @foreach($payload['s'] as $s)
                                                                            <option value="{{$s->season_id}}">{{$s->season}}</option>
                                                                        @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Start Date</label>
                                                                        <input type="date" name="start_date" class="form-control" value="" data-validation-required-message="Please write the agreement date" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>End Date</label>
                                                                        <input type="date" name="end_date" class="form-control" value="" data-validation-required-message="Please write the agreement date" required>
                                                                    </div>
                                                                </div>
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

                                    <div class="row pt-3">
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Additional Info</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Remarks</label>
                                                    <input type="text" name="agree_date" class="form-control" value="" data-validation-required-message="Please write the agreement date" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-1" id="btn_add1" >Create</button>
                              
                            </div>
                        </div>
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</section>

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="addunittype" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">TID</th>
                                            <th class="text-white">TID</th>
                                            <th class="text-white">MID</th>
                                            <th class="text-white">ERP Term</th>
                                            <th class="text-white">Charge Type</th>
                                            <th class="text-white">Bank Charges</th>
                                            <th class="text-white">Merchant Bank</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" id="checkbox200" >
                                                <label for="checkbox200"></label>
                                                </div>
                                            </fieldset>
                                            </td>
                                            <td>81004899</td>
                                            <td>000001090105818</td>
                                            <td>0</td>
                                            <td>MAN</td>
                                            <td>0.80</td>
                                            <td>CIMB E-debit</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                <label for="checkbox3"></label>
                                                </div>
                                            </fieldset>
                                            </td>
                                            <td>81004899</td>
                                            <td>000001090105818</td>
                                            <td>0</td>
                                            <td>MAN</td>
                                            <td>0.80</td>
                                            <td>CIMB Debit debit</td>
                                        </tr>

                                        <tr>
                                            <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                <label for="checkbox4"></label>
                                                </div>
                                            </fieldset>
                                            </td>
                                            <td>81004899</td>
                                            <td>000001090105818</td>
                                            <td>0</td>
                                            <td>MAN</td>
                                            <td>0.80</td>
                                            <td>CIMB Debit debit</td>
                                        </tr>

                                        <tr>
                                            <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" id="checkbox5">
                                                <label for="checkbox5"></label>
                                                </div>
                                            </fieldset>
                                            </td>
                                            <td>81004899</td>
                                            <td>000001090105818</td>
                                            <td>0</td>
                                            <td>MAN</td>
                                            <td>0.80</td>
                                            <td>CIMB Debit debit</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                                
                        <div class="px-2">
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Cancel</a>
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Confirm</a>
                            
                        </div>
                    </div>
   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                        </button>
                    
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
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
@endsection
