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
<section class="simple-validation" id="nav-filled">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white ml-3">Accommodations details</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{route('leads.store')}}" novalidate>
                            @csrf
                            
                            
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="row pt-3 pl-2">
                                    <div class="col-sm-6">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Accommodation</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Location</p>
                                    </div>
                                </div>
                                <div class="row pl-2">
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Accommodation</p>
                                            <p class="col font-weight-bold black">234560000</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Code</p>
                                            <p class="col font-weight-bold black">John Doe</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Accommodationn Category</p>
                                            <p class="col font-weight-bold black">Kuching Branch</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Club</p>
                                            <p class="col font-weight-bold black">Online Banking</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Travel Agent</p>
                                            <p class="col font-weight-bold black">RHB Bank</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Status</p>
                                            <p class="col font-weight-bold black">123412341234</p>
                                        </div>
                                    </div>
                                
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Address 1</p>
                                            <p class="col font-weight-bold black">Open</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Postcode</p>
                                            <p class="col font-weight-bold black">01 May 2020</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">State</p>
                                            <p class="col font-weight-bold black">-</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">City</p>
                                            <p class="col font-weight-bold black">-</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Country</p>
                                            <p class="col font-weight-bold black">-</p>
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="row pt-3 pl-2">
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Booking Details</p>
                                    </div>
                                    
                                </div>
                                <div class="row pl-2">
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Reservation Lead Time</p>
                                            <p class="col font-weight-bold black">8100489</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Guaranteed Booking Start By</p>
                                            <p class="col font-weight-bold black">RHB Bank</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Latest By</p>
                                            <p class="col font-weight-bold black">1234 0000 1234</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Cancellation Deadline</p>
                                            <p class="col font-weight-bold black">1234 0000 1234</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Minimum Stay</p>
                                            <p class="col font-weight-bold black">John Doe</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Admin Charges</p>
                                            <p class="col font-weight-bold black">01/2024</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Provided Breakfast (RM)</p>
                                            <p class="col font-weight-bold black">100</p>
                                        </div>
                                        <div class="row">
                                            <div class="form repeater-default">
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="col-md-4  form-group">
                                                                <label for="Email">Number of Pax </label>
                                                                <input type="number" class="form-control" id="Email" placeholder="Enter number of pax">
                                                            </div>
                                                           
                                                            <div class="col-md-6  form-group">
                                                                <label for="password">Breakfast Price Per Pax (RM)</label>
                                                                <input type="password" class="form-control" id="password" placeholder="Enter price per pax">
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
                                </div>

                                
                                
                                <div class="row pt-3 pl-2">
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Check In/Check Out Time</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Season(CAI)</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Additional Info</p>
                                    </div>
                                </div>
                                <div class="row pl-2">
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Check In Time</p>
                                            <p class="col font-weight-bold black">8100489</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Check Out Time</p>
                                            <p class="col font-weight-bold black">RHB Bank</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Season</p>
                                            <p class="col font-weight-bold black">John Doe</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Start Date</p>
                                            <p class="col font-weight-bold black">01/2024</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">End Date</p>
                                            <p class="col font-weight-bold black">100</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Remarks</p>
                                            <p class="col font-weight-bold black">John Doe</p>
                                        </div>
                                    
                                    </div>
                                </div>

                            
                                <button type="button" class="btn btn-primary m-1" id="btn_add1" onclick="showContact2()">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="dbr-tab-fill" data-toggle="tab" href="#dbr-fill" role="tab"
                            aria-controls="dbr-fill" aria-selected="true">
                            Room Types
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="rmh-tab-fill" data-toggle="tab" href="#rmh-fill" role="tab"
                            aria-controls="rmh-fill" aria-selected="false">
                            Admin Charges Waive
                            </a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content pt-1">
                        <div class="tab-pane active" id="dbr-fill" role="tabpanel" aria-labelledby="dbr-tab-fill">
                            
                            <div class="card">
                                <div class="card-header bg-swvb-cyan">
                                    <h4 class="card-title text-white">Unit Types<a href="{{ url('/admin/unitdetails') }}" class="btn btn-outline-white round mr-1 ml-1 text-white"><i class="bx bx-plus"></i></a></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="table-responsive pt-2">
                                            <table class="table">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">Unit Type</th>
                                                        <th class="text-white">Bed Type</th>
                                                        <th class="text-white">Sleeping Capacity</th>
                                                        <th class="text-white">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Chalet</td>
                                                        <td>Single, Double</td>
                                                        <td>2-3</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> ADD UNIT</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> MANAGE PRICE</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                                    </button>
                                                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white" colspan="2">Unit No</th>
                                                            <th class="text-white" >Status</th>
                                                            <th class="text-white" ></th>
                                                        
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td colspan="2">313</td>
                                                        <td>Active</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> DELETED</a>
                                                                    </button>
                                                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="rmh-fill" role="tabpanel" aria-labelledby="rmh-tab-fill">
                            
                            <div class="card">
                                <div class="card-header bg-swvb-cyan">
                                    <h4 class="card-title text-white">Admin Changes Waive<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addunittype"><i class="bx bx-plus"></i></button></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="table-responsive pt-2">
                                            <table class="table">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">Period</th>
                                  
                                                        <th class="text-white">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Chalet</td>
                                                        
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> ADD UNIT</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> MANAGE PRICE</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                                    </button>
                                                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white" colspan="2">Unit No</th>
                                                            <th class="text-white" colspan="2">Status</th>
                                                        
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td colspan="2">313</td>
                                                        <td>Active</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                </span>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" >
                                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> DELETED</a>
                                                                    </button>
                                                                
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                   
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    
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
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
@endsection
