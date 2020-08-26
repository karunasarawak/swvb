@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section class="float-left">
    <div class="row" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col card-title text-white">Membership Details - 234560000</h4>
                            
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab"
                                aria-controls="home-fill" aria-selected="true">
                                Attendee's 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab"
                                aria-controls="profile-fill" aria-selected="false">
                                Attendee's 2
                                </a>
                            </li>
                           
                        </ul>

                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                
                                <div class="row pt-1">
                                    <div class="col-sm-6">
                                        <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Basic</h4>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contact</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <p class="col-sm-6">Name</p>
                                            <p class="col-sm-6 font-weight-bold black">{{$payload['details']->name}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">NRIC</p>
                                            <p class="col-sm-6 font-weight-bold black">{{$payload['details']->nric}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">DOB</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->dob}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Gender</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->gender_name}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Marital Status</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->maritial_name}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Religion</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->religion}}</p>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Mobile No.</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->mobile_no}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Home No.</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->home_no}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Whatsapp No.</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->whatsapp_no}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Office No.</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->office_no}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Primary Email</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->primary_email}}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Alternate Email</p>
                                            <p class="col font-weight-bold black">{{$payload['details']->alt_email}}</p>
                                        </div>

                                    </div>
                                </div>    

                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Sales Venue</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->venue_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Date</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->tour_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Time In</p>
                                                @if ($payload['details']->tour_time_in != null)
                                                    <p class="col font-weight-bold black">{{Carbon\Carbon::createFromFormat('H:i:s', $payload['details']->tour_time_in)->format('h:i A')}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Time Out</p>
                                                @if ($payload['details']->tour_time_out != null)
                                                    <p class="col font-weight-bold black">{{Carbon\Carbon::createFromFormat('H:i:s', $payload['details']->tour_time_out)->format('h:i A')}}</p>
                                                @else
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Occupation</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->occupation}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Company</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->company}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Sales & Marketing</h4>
                                        </div>
                                        <div class="col">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Attendee</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Telemarketer</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Sales Personnel</p>
                                                <p class="col font-weight-bold black">{{$payload['sp']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Sales Manager</p>
                                                <p class="col font-weight-bold black">{{$payload['sm']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Marketig Agency</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->ma_name}}</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">No. of Children</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->tour_no_of_children}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Monthly Income</p>
                                                <p class="col font-weight-bold black">RM {{$payload['details']->tour_month_income}}</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Voucher Apply</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->voucher_no}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">CV No.</p>
                                                <p class="col font-weight-bold black"></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Accomodation</p>
                                                @if ($payload['details']->accom_id == 1)
                                                    <?php $venue = "Grand Margeherita Hotel";?>
                                                @elseif ($payload['details']->accom_id == 2)
                                                    <?php $venue = "Damai Beach Resort";?> 
                                                @endif
                                                <p class="col font-weight-bold black">{{$venue}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">No. of Stay</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->night}} nights</p>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">No. of Occupancy</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->no_occupancy}} people</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">CV Date</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->cv_start_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">CV Expiry</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->cv_exp_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Voucher Apply To</p>
                                                <span class="col font-weight-bold black">{{$payload['details']->name}}</span>
                                                <br>
                                                <span class="col font-weight-bold black">{{$payload['detail2']->name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                               


                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Basic</p>
                                        </div>
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contact</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Sales Venue</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->venue_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Date</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->tour_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Time In</p>
                                                @if ($payload['details']->tour_time_in != null)
                                                    <p class="col font-weight-bold black">{{Carbon\Carbon::createFromFormat('H:i:s', $payload['details']->tour_time_in)->format('h:i A')}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Time Out</p>
                                                @if ($payload['details']->tour_time_out != null)
                                                    <p class="col font-weight-bold black">{{Carbon\Carbon::createFromFormat('H:i:s', $payload['details']->tour_time_out)->format('h:i A')}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Occupation/designation</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->occupation}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Employer/Company</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->company}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Sales & Marketing</h4>
                                        </div>
                                        <div class="col">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Attendee</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Telemarketer</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Sales Personnel</p>
                                                <p class="col font-weight-bold black">{{$payload['sp']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Sales Manager</p>
                                                <p class="col font-weight-bold black">{{$payload['sm']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Marketing Agency</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->ma_name}}</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">No. of Children</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->tour_no_of_children}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Monthly Income</p>
                                                <p class="col font-weight-bold black">RM {{$payload['details']->tour_month_income}}</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Voucher Apply</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->voucher_no}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">CV No.</p>
                                                <p class="col font-weight-bold black"></p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Accomodation</p>
                                                @if ($payload['details']->accom_id == 1)
                                                    <?php $venue = "Grand Margeherita Hotel";?>
                                                @elseif ($payload['details']->accom_id == 2)
                                                    <?php $venue = "Damai Beach Resort";?> 
                                                @endif
                                                <p class="col font-weight-bold black">{{$venue}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">No. of Stay</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->night}} nights</p>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">No. of Occupancy</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->no_occupancy}} people</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">CV Date</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->cv_start_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">CV Expiry</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->cv_exp_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Voucher Apply To</p>
                                                <p class="col font-weight-bold black"></p>
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
       
        
        <div class="col-md-4 float-right-top">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Function</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                       
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col">
                                        <button type="button" class="w-100 btn btn-primary" data-toggle="modal" data-target="#inlineForm">
                                        Update Status
                                        </button>

                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col text-align-center">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Account Status</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/installment/amfall') }}" type="button" class="w-100 btn btn-primary ">AMF Schedule</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/installment') }}" type="button" class="w-100 btn btn-primary ">Installment Schedule</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/membership/em') }}" type="button" class="w-100 btn btn-primary ">Point/Entitlement Management</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">View Previous Members</a>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
          
           
        </div>

    </div>
</section>
<!-- Nav Filled Ends -->


<!-- pop out modal box for update status (status : active) -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
                <div class="modal-header bg-swvb-cyan">
                    <h4 class="modal-title text-white" id="myModalLabel33">UPDATE STATUS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                    </button>
                </div>

            <!-- form for status of active -->
            <form action="" method="GET" novalidate>
                            @csrf
                <div class="modal-body">
                    <div class="form-group controls">
                        <div class="radio mr-1">
                            <input type="radio" name="Deceased" id="d1" value="d1" checked="" required>
                            <label for="d1">Deceased</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Transfer" value="Transfer" checked="" >
                            <label for="Transfer">Transfer</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Downgrade" value="Downgrade" checked="">
                            <label for="Downgrade">Up/Downgrade</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Cancellation" value="Cancellation" checked="">
                            <label for="Cancellation">Cancellation</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Repurchase" value="Repurchase" checked="">
                            <label for="Repurchase">Repurchase</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Suspend" value="Suspend" checked="">
                            <label for="female1">Suspend</label>
                        </div>
                        <div class="px-2">
                            <button class="btn btn-outline-primary round mr-1 mb-1" onclick="redirect()">Save</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
                      
    <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block" onclick="redirect()">Save</span>
        </button>

    </div>
    

</div>



<!--update status Modal for status: be back-->
<div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Update Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Withdrawal</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Email Address" class="form-control">
                    </div>
                    <label>Cancellation</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Password" class="form-control">
                    </div>
                    <label>Pending</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Email Address" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- update status Modal for status: peding
<div class="modal fade text-left" id="inlineForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-cyan">
                <h4 class="modal-title text-white" id="myModalLabel33">Update Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Deceased</label>
                    <div class="form-group">
                        <input type="radio" name="Deceased" id="deceased" placeholder="Deceased" class="form-control">
                    </div>
                    <label>Active</label>
                    <div class="form-group">
                        <input type="radio" name="Deceased" id="Active" placeholder="Active" class="form-control">
                    </div>
                    <label>Withdrawal</label>
                    <div class="form-group">
                        <input type="radio" name="Deceased" id="Withdrawal" placeholder="Withdrawal" class="form-control">
                    </div>
                    <label>Cancellation</label>
                    <div class="form-group">
                        <input type="radio" name="Deceased" id="Cancellation" placeholder="Cancellation" class="form-control">
                    </div>
                    <label>Suspend</label>
                    <div class="form-group">
                        <input type="radio" name="Deceased" id="Suspend" placeholder="Suspend" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div> -->


<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="inlineForm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Update Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Terminate</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Email Address" class="form-control">
                    </div>
                    <label>Active</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Password" class="form-control">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="inlineForm5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">New Credit Card</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Card Holder</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card holder" class="form-control">
                    </div>
                    <label>Card Type</label>
                    <div class="form-group">
                        <input type="name" placeholder="Type of card" class="form-control">
                    </div>
                    <label>Card Issuer</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card issuer" class="form-control">
                    </div>
                    <label>Name on Card</label>
                    <div class="form-group">
                        <input type="name" placeholder="Name on card" class="form-control">
                    </div>
                    <label>CVV</label>
                    <div class="form-group">
                        <input type="number" placeholder="CVV" class="form-control">
                    </div>
                    <label>Expiry Date</label>
                    <div class="form-group">
                        <input type="date" value="01 June 2020" class="form-control">
                    </div>
                    <label>Card No.</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card Number" class="form-control">
                    </div>
                    <label>Remarks</label>
                    <div class="form-gro up">
                        <input type="name" placeholder="Remarks" class="form-control">
                    </div>
                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" placeholder="Status" class="form-control">
                    </div>
                    

                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="inlineForm5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">New Credit Card</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Card Holder</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card holder" class="form-control">
                    </div>
                    <label>Card Type</label>
                    <div class="form-group">
                        <input type="name" placeholder="Type of card" class="form-control">
                    </div>
                    <label>Card Issuer</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card issuer" class="form-control">
                    </div>
                    <label>Name on Card</label>
                    <div class="form-group">
                        <input type="name" placeholder="Name on card" class="form-control">
                    </div>
                    <label>CVV</label>
                    <div class="form-group">
                        <input type="number" placeholder="CVV" class="form-control">
                    </div>
                    <label>Expiry Date</label>
                    <div class="form-group">
                        <input type="date" value="01 June 2020" class="form-control">
                    </div>
                    <label>Card No.</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card Number" class="form-control">
                    </div>
                    <label>Remarks</label>
                    <div class="form-group">
                        <input type="name" placeholder="Remarks" class="form-control">
                    </div>
                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" placeholder="Status" class="form-control">
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--add new secondary member-->
<div class="modal fade text-left" id="newsecondmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Secondary Member/Nominees</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Salutation</label>
                    <div class="form-group">
                        <input type="text" placeholder="Card holder" class="form-control">
                    </div>
                    <label>Name</label>
                    <div class="form-group">
                        <input type="name" placeholder="Type of card" class="form-control">
                    </div>
                    <label>Contact</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card issuer" class="form-control">
                    </div>
                    <label>Relationship</label>
                    <div class="form-group">
                        <input type="text" placeholder="Name on card" class="form-control">
                    </div>
                    
         
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--/ Zero configuration table -->

@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js"></script>
<script src="{{asset('vendors/js/tables/datatable/datetime-moment.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
