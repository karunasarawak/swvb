@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Accommodations')

@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/calendars/tui-time-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/calendars/tui-date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/calendars/tui-calendar.min.css')}}">
@endsection

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/calendars/app-calendar.css')}}">
@endsection


@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" id="nav-filled">
    <div class="row" x-data="{ e: false, o: true }">
        <div class="col-md-12">
            <form action="" method="POST" novalidate>
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title text-white ml-2">Accommodations details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="" novalidate>
                                @csrf
                                
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="row pt-3 ">
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Accommodation</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Location</p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Accommodation</p>
                                                @if(isset($payload['accmd']))
                                                <p class="col font-weight-bold black" x-show="o">{{$payload['accmd']->accom_name}}</p>
                                                @else
                                                <p x-cloak x-show="e"><input type="text" name="accom_name" class="form-control" value="" required></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Code</p>
                                                <p class="col font-weight-bold black" x-show="o">{{$payload['accmd']->accom_code}}</p>
                                                <p x-cloak x-show="e"><input type="number" name="poe_year4" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-6">Accommodation Category</p>
                                                <p class="col font-weight-bold black" x-show="o">Kuching Branch</p>
                                                <p class="col-sm-6" x-cloak x-show="e">
                                                <select class="custom-select form-control required" id="accom_cat" name="marital_status" required>
                                                @foreach($payload['acccategory'] as $ac)
                                                <option value="{{$ac->accom_cat_id}}">{{$ac->accom_cat}}</option>
                                                @endforeach
                                                </select>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Club</p>
                                                <p class="col font-weight-bold black" x-show="o">Online Banking</p>
                                                <p class="col" x-cloak x-show="e">
                                                <select class="custom-select form-control required" id="marital_status" name="club" required>
                                                <option value="" disabled selected>Select club</option>
                                                <option value="0">CAI</option>
                                                <option value="1">EVC</option>
                                                </select>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Travel Agent</p>
                                                <p class="col font-weight-bold black" x-show="o">RHB Bank</p>
                                                <p class="col" x-cloak x-show="e">
                                                <select class="custom-select form-control required" id="marital_status" name="marital_status" required>
                                                @foreach($payload['ta'] as $ta)
                                                <option value="{{$ta->ta_id}}">{{$ta->ta_name}}</option>
                                                @endforeach
                                                </select>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Status</p>
                                                <p class="col font-weight-bold black" x-show="o">123412341234</p>
                                                <p class="col" x-cloak x-show="e"><input type="number" name="poe_year4" class="form-control" value="" required></p>
                                            </div>
                                        </div>
                                    
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Address 1</p>
                                                <p class="col font-weight-bold black" x-show="o">Open</p>
                                                <p x-cloak x-show="e"><input type="number" name="accom_addr" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Address 2</p>
                                                <p class="col font-weight-bold black" x-show="o">...</p>
                                                <p x-cloak x-show="e"><input type="number" name="accom_addr" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Address 3</p>
                                                <p class="col font-weight-bold black" x-show="o">...</p>
                                                <p x-cloak x-show="e"><input type="number" name="accom_addr" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Address 4</p>
                                                <p class="col font-weight-bold black" x-show="o">...</p>
                                                <p x-cloak x-show="e"><input type="number" name="accom_addr" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Postcode</p>
                                                <p class="col font-weight-bold black" x-show="o">01 May 2020</p>
                                                <p x-cloak x-show="e"><input type="number" name="postcode" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">State</p>
                                                <p class="col font-weight-bold black" x-show="o">-</p>
                                                <p x-cloak x-show="e"><input type="number" name="state_id" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">City</p>
                                                @if(is_null($payload['accmd']->city_id))
                                                <p x-show="e"><input type="number" name="city_id" class="form-control" value="" required></p>
                                                @else
                                                <p class="col font-weight-bold black" x-show="o">{{$payload['accmd']->city_id}}</p>
                                                
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Country</p>
                                                <p class="col font-weight-bold black" x-show="o">-</p>
                                                <p x-cloak x-show="e"><input type="number" name="country_id" class="form-control" value="" required></p>
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="row pt-3 ">
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Booking Details</p>
                                        </div>
                                        
                                    </div>
                                    <div class="row" >
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Start Lead Time</p>
                                                <p class="col font-weight-bold black" x-show="o">8100489</p>
                                                <p x-cloak x-show="e"><input type="number" name="min_lead_time" class="form-control" value="" required></p>
                                            </div>
                                            
                                            <div class="row">
                                                <p class="col">Latest By</p>
                                                <p class="col font-weight-bold black" x-show="o">1234 0000 1234</p>
                                                <p x-cloak x-show="e"><input type="number" name="max_lead_time" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Cancellation Deadline</p>
                                                <p class="col font-weight-bold black" x-show="o">1234 0000 1234</p>
                                                <p x-cloak x-show="e"><input type="number" name="cxl_deadline" class="form-control" value="" required></p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Minimum Stay</p>
                                                <p class="col font-weight-bold black" x-show="o">John Doe</p>
                                                <p x-cloak x-show="e"><input type="number" name="min_stay" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Admin Charges</p>
                                                <p class="col font-weight-bold black" x-show="o">01/2024</p>
                                                <p x-cloak x-show="e"><input type="number" name="admin_charges" class="form-control" value="" required></p>
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
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col">
                                            <div class="form repeater-default">
                                                <div data-repeater-list="group-a">
                                                    <div data-repeater-item>
                                                        <div class="row justify-content-between">
                                                            <div class="col-md-4">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <label for="Email">Number of Pax </label>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <input type="number" class="form-control w-1" id="Email" placeholder="0">
                                                                            </div>
                                                                            <p>-</p>
                                                                            <div class="col">
                                                                                <input type="number" class="form-control w-1" id="Email" placeholder="0">
                                                                            </div>  
                                                                        </div>              
                                                                    </div>
                                                                </div>
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
                                                    <div class="row">
                                                        <div class="col" x-show="e" x-cloak>
                                                            <button type="submit" class="btn btn-primary round mr-1">Save</button>
                                                            <button type="button" class="btn btn-primary round" @click="e = false, o = true">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row pt-3">
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Check In/Check Out Time</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Season(CAI)</p>
                                        </div>
                                    
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Check In Time</p>
                                                <p class="col font-weight-bold black" x-show="o">8100489</p>
                                                <p x-cloak x-show="e"><input type="time" name="poe_year4" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Check Out Time</p>
                                                <p class="col font-weight-bold black" x-show="o">RHB Bank</p>
                                                <p x-cloak x-show="e">
                                                <input type="time" name="poe_year4" class="form-control" value="" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col-sm-6">Season</p>
                                                <p class="col font-weight-bold black" x-show="o">John Doe</p>
                                                <p class="col-sm-6" x-cloak x-show="e">
                                                <select class="custom-select form-control required" id="marital_status" name="" required>
                                                @foreach($payload['s'] as $s)
                                                <option value="{{$s->season_id}}">{{$s->season}}</option>
                                                @endforeach
                                                </select>
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Start Date</p>
                                                <p class="col font-weight-bold black" x-show="o">01/2024</p>
                                                <p x-cloak x-show="e"><input type="number" name="poe_year4" class="form-control" value="" required></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">End Date</p>
                                                <p class="col font-weight-bold black" x-show="o">100</p>
                                                <p x-cloak x-show="e"><input type="number" name="poe_year4" class="form-control" value="" required></p>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="row">
                                    
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Additional Info</p>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col-sm-3">Remarks</p>
                                                <p class="col-sm-6 font-weight-bold black" x-show="o">John Doe</p>
                                                <p x-cloak x-show="e"><input type="number" name="poe_year4" class="form-control" value="" required></p>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary m-1" id="btn_add1" x-show="o" @click="e = true, o = false">Create</button>
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
                                    <div class="row">
                                        <div class="card">
                                            <div class="row pl-2">
                                                <div class="col-sm-4">
                                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Unit Types<a href="{{ url('/admin/unitdetails') }}" class="btn btn-outline-white round mr-1 ml-1 text-white"><i class="bx bx-plus"></i></a></p>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    
                                                    <div class="table-responsive pt-2">
                                                        <table class="table" style="width:100%;">
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
                                            

                                                {{-- end --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="rmh-fill" role="tabpanel" aria-labelledby="rmh-tab-fill">
                                    <div class="card">
                                        <div class="row pl-2">
                                            <div class="col-sm-4">
                                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Admin Changes Waive<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addunittype"><i class="bx bx-plus"></i></button></p>
                                            </div>
                                        </div>

                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="table-responsive pt-2">
                                                    <table class="table" style="width:100%">
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

                            <div class="calendar-wrapper position-relative">
                                <!-- calendar app overlay -->
                                <div class="app-content-overlay"></div>
                                <!-- calendar sidebar start -->
                                <div id="sidebar" class="sidebar">
                                  <div class="sidebar-new-schedule">
                                    <!-- create new schedule button -->
                                    <button id="btn-new-schedule" type="button" class="btn btn-primary btn-block sidebar-new-schedule-btn">
                                      Block Date
                                    </button>
                                  </div>
                                  <!-- sidebar calendar labels -->
                                  <div id="sidebar-calendars" class="sidebar-calendars">
                                    <div>
                                      <div class="sidebar-calendars-item">
                                        <!-- view All checkbox -->
                                        <div class="checkbox">
                                          <input type="checkbox" class="checkbox-input tui-full-calendar-checkbox-square" id="checkbox1" value="all"
                                            checked>
                                          <label for="checkbox1">View all</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="calendarList" class="sidebar-calendars-d1"></div>
                                  </div>
                                  <!-- / sidebar calendar labels -->
                                </div>
                                <!-- calendar sidebar end -->
                                <!-- calendar view start  -->
                                <div class="calendar-view">
                                  <div class="calendar-action d-flex align-items-center flex-wrap">
                                    <!-- sidebar toggle button for small sceen -->
                                    <button class="btn btn-icon sidebar-toggle-btn">
                                      <i class="bx bx-menu font-large-1"></i>
                                    </button>
                                    <!-- dropdown button to change calendar-view -->
                                    <div class="dropdown d-inline mr-75">
                                      <button id="dropdownMenu-calendarType" class="btn btn-action dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i id="calendarTypeIcon" class="bx bx-calendar-alt"></i>
                                        <span id="calendarTypeName">Dropdown</span>
                                      </button>
                                      <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                        <li role="presentation">
                                          <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-daily">
                                            <i class="bx bx-calendar-alt mr-50"></i>
                                            <span>Daily</span>
                                          </a>
                                        </li>
                                        <li role="presentation">
                                          <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-weekly">
                                            <i class='bx bx-calendar-event mr-50'></i>
                                            <span>Weekly</span>
                                          </a>
                                        </li>
                                        <li role="presentation">
                                          <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-monthly">
                                            <i class="bx bx-calendar mr-50"></i>
                                            <span>Month</span>
                                          </a>
                                        </li>
                                        <li role="presentation">
                                          <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-weeks2">
                                            <i class='bx bx-calendar-check mr-50'></i>
                                            <span>2 weeks</span>
                                          </a>
                                        </li>
                                        <li role="presentation">
                                          <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-weeks3">
                                            <i class='bx bx-calendar-check mr-50'></i>
                                            <span>3 weeks</span>
                                          </a>
                                        </li>
                                        <li role="presentation" class="dropdown-divider"></li>
                                        <li role="presentation">
                                          <div role="menuitem" data-action="toggle-workweek" class="dropdown-item">
                                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek" checked>
                                            <span class="checkbox-title bg-primary"></span>
                                            <span>Show weekends</span>
                                          </div>
                                        </li>
                                        <li role="presentation">
                                          <div role="menuitem" data-action="toggle-start-day-1" class="dropdown-item">
                                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1">
                                            <span class="checkbox-title"></span>
                                            <span>Start Week on Monday</span>
                                          </div>
                                        </li>
                                        <li role="presentation">
                                          <div role="menuitem" data-action="toggle-narrow-weekend" class="dropdown-item">
                                            <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                                            <span class="checkbox-title"></span>
                                            <span>Narrower than weekdays</span>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                    <!-- calenadar next and previous navigate button -->
                                    <span id="menu-navi" class="menu-navigation">
                                      <button type="button" class="btn btn-action move-today mr-50 px-75" data-action="move-today">Today</button>
                                      <button type="button" class="btn btn-icon btn-action  move-day mr-50 px-50" data-action="move-prev">
                                        <i class="bx bx-chevron-left" data-action="move-prev"></i>
                                      </button>
                                      <button type="button" class="btn btn-icon btn-action move-day mr-50 px-50" data-action="move-next">
                                        <i class="bx bx-chevron-right" data-action="move-next"></i>
                                      </button>
                                    </span>
                                    <span id="renderRange" class="render-range"></span>
                                  </div>
                                  <!-- calendar view  -->
                                  <div id="calendar" class="calendar-content"></div>
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
<script src="{{asset('vendors/js/calendar/tui-code-snippet.min.js')}}"></script>
<script src="{{asset('vendors/js/calendar/tui-dom.js')}}"></script>
<script src="{{asset('vendors/js/calendar/tui-time-picker.min.js')}}"></script>
<script src="{{asset('vendors/js/calendar/tui-date-picker.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/calendar/chance.min.js')}}"></script>
<script src="{{asset('vendors/js/calendar/tui-calendar.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/navs/navs.js')}}"></script>
<script src="{{asset('js/scripts/extensions/calendar/calendars-data.js')}}"></script>
<script src="{{asset('js/scripts/extensions/calendar/schedules.js')}}"></script>
<script src="{{asset('js/scripts/extensions/calendar/app-calendar.js')}}"></script>
@endsection
