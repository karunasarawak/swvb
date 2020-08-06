@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Tour Attend Details')

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
@endsection

@section('content')

<!-- Form wizard with step validation section start -->
<section id="validation">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-swvb-cyan">
          <h4 class="card-title text-white">Tour Attend Details</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <!-- FORM_ACTION -->
           <!-- change back to wizard-validation after tat -->
            <form action="{{route('tours.viewDetails',$payload['attend']->tour_id)}}" class="wizard-horizontal" id="toursattend" method="POST">
              @csrf
              @method('patch')
              <!-- Step 1 -->
              <h6>
                <i class="step-icon"></i>
                <span>Step 1 - ATTENDEE'S INFO</span>
              </h6>
              <!-- Step 1 -->
              <!-- body content of step 1 -->

              <!-- toursid -->
              <input type="hidden" class="form-control required" id="tourid" name="tourid" value="{{$payload['attend']->tour_id}}" />
              <input type="hidden" class="form-control required" id="leadid" name="leadid" value="{{$payload['attend']->lead_id}}" />

              <fieldset>
                <h4 class="card-title font-weight-bold">Attendee's 01 Information</h4>
                <h4 class="card-title">Basic Information</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="salutation1">Salutation </label>
                      <select class="custom-select form-control required" id="salutation1" name="salutation1" value="{{$payload['attend']->salutation_id}}">
                            <option value="1">Mr</option>
                            <option value="2">Mrs</option>
                            <!-- <option value="3">Sir</option>
                            <option value="4">Mdm</option>
                            <option value="5">Tuan Haji</option>
                            <option value="6">Puan Hajjah</option>
                            <option value="7">Encik</option>
                            <option value="8">Puan</option>
                            <option value="9">Dato</option>
                            <option value="10">Datu</option> -->
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name1">Name </label>
                        <input type="text" class="form-control required" id="name1" name="name1" placeholder="Enter Your Name" value="{{$payload['attend']->name}}">
                    </div>
                    
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="gender1">Gender</label>
                      <select class="custom-select form-control required" id="gender1" name="gender1">
                        <option value="" disabled selected>Select a gender</option> 
                        @foreach($payload['gender'] as $gender)
                          <option value="{{$gender->gender_id}}">{{$gender->gender_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nric1">NRIC PassPort No.</label>
                      <input type="number" class="form-control required" id="nric1" name="nric1" 
                        placeholder="--">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="dob1">DOB</label>
                        <input type="date" class="form-control" id="dob1" name="dob1" value="" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status1">Marital Status</label>
                      <select class="custom-select form-control required" id="status1" name="status1">
                        <option value="" disabled selected>Select a marital status</option>
                        @foreach($payload['maritial'] as $maritial)
                          <option value="{{$maritial->maritial_id}}">{{$maritial->maritial_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="race1">Race</label>
                      <select class="custom-select form-control required" id="race1" name="race1">
                        <option value=""disabled selected>Select a race</option>  
                        @foreach($payload['race'] as $race)
                          <option value="{{$race->race_id}}">{{$race->race_name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="religion1">Religion</label>
                      <select class="custom-select form-control required" id="religion1" name="religion1">
                        <option value=""disabled selected>Select a religion</option>
                        @foreach($payload['religion'] as $religion)
                          <option value="{{$religion->religion_id}}">{{$religion->religion}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nationality1">Nationality</label>
                      <select class="custom-select form-control required" id="nationality1" name="nationality1">
                        <option value=""disabled selected>Select a nationality</option>
                        @foreach($payload['nation'] as $nation)
                          <option value="{{$nation->nation_id}}">{{$nation->nation}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Occupation Information</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Occupation/Designation</label>
                        <input type="text" class="form-control" value="" id="occupation1" name="occupation1" placeholder="--" required>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employer1">Employer/Company</label>
                      <input type="text" class="form-control required" name="company1" id="company1" placeholder="--">
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Contact</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Mobile No.</label>
                      <input type="number" class="form-control" placeholder="--" id="mobileno1" name="mobileno1" value="{{$payload['attend']->mobile_no}}"
                        data-validation-required-message="This mobile field is required" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Whatsapp</label>
                      <input type="number" class="form-control" placeholder="--" id="whatsapp1" name="whatsapp1" value="{{$payload['attend']->whatsapp_no}}"
                        data-validation-required-message="This Whatsapp field is required" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employer1">Home No.</label>
                      <input type="number" class="form-control required" name="homeno1" id="homeno1"  placeholder="--">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Office No.</label>
                      <input type="number" class="form-control" placeholder="--" id="officeno1" name="officeno1"
                        data-validation-required-message="This Name field is required" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Primary Email</label>
                      <input type="text" class="form-control" placeholder="--" id="pemail1" name="pemail1"
                        data-validation-required-message="This Primary Email field is required" required>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Alternate Email</label>
                      <input type="text" class="form-control" placeholder="--" id="aemail1" name="aemail1"
                        data-validation-required-message="This Alternate Email field is required" required>
                    </div>
                  </div>



                </div>
                {{-- @livewire('add-attendee-form') --}}
                <button type="button" class="btn btn-outline-primary" id="attendeeButton" onclick="addAttendee()">Add Attendee</button>
                
                <br />
                <br />
                <div id="attendee2" class="d-none select2-advance" x-data="{ edit: false, original:true}">
                  <h4 class="card-title font-weight-bold">Attendee's 02 Information</h4>
                  <h4 class="card-title">Basic Information</h4>

                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group controls">
                        <div class="custom-control-inline">
                          <div class="radio mr-1">
                            <input type="radio" name="lead_status" value="1" id="elead" checked="" @click="edit=true, original=false" required>
                            <label for="elead">Existing Lead</label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="lead_status" value="2" id="nlead" checked="" @click="edit=false, original=true">
                            <label for="nlead">New Lead</label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-4">
                      <div class="form-group controls">
                        <select class=" form-control" x-show="edit" id="exist_lead" name="exist_lead" readonly>
                          <option value="">--</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                    </div>

                    
                  </div>

                  <div class="row">
                    <div class="col-md-4" x-show="original">
                      <div class="form-group">
                        <label for="salutation1">Salutation </label>
                        <select class="custom-select form-control required hid" id="salutation2" name="salutation2"  data-validation-required-message="This Primary Email field is required">
                              <option value=""disabled selected>Select a salutation</option>
                              <option value="1">Mr</option>
                              <option value="2">Mrs</option>
                              <!-- <option value="Sir">Sir</option>
                              <option value="Mdm">Mdm</option>
                              <option value="Tuan Haji">Tuan Haji</option>
                              <option value="Puan Hajjah">Puan Hajjah</option>
                              <option value="Encik">Encik</option>
                              <option value="Puan">Puan</option>
                              <option value="Dato">Dato</option>
                              <option value="Datu">Datu</option> -->
                          </select>
                      </div>
                    </div>
                    <div class="col-md-4" x-show="original">
                      <div class="form-group">
                        <label for="name1">Name </label>
                        <input type="text" class="form-control required hid" id="name2" name="name2"
                          placeholder="--"  data-validation-required-message="This Primary Email field is required">
                      </div>
                    </div>
                    <div class="col-md-4" x-show="original">
                      <div class="form-group">
                        <label for="gender1">Gender</label>
                        <select class="custom-select form-control required hid" id="gender2" name="gender2"  data-validation-required-message="This Primary Email field is required">
                          <option value=""disabled selected>Select a gender</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                      </div>
                    </div>
                </div>
                <div class="row" x-show="original">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nric1">NRIC PassPort No.</label>
                      <input type="number" class="form-control required hid" id="nric2" name="nric2"
                        placeholder="--"  data-validation-required-message="This Primary Email field is required">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="dob1">DOB</label>
                      <div class="form-group controls">
                          <input type="date" name="dob2" id="cvexpiry2" class="form-control required hid" value=""  placeholder="--"
                          data-validation-required-message="This Primary Email field is required" >
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status1">Marital Status</label>
                      <select class="custom-select form-control required hid" id="status2" name="status2"  placeholder="--"
                      data-validation-required-message="This Primary Email field is required">
                        <option value=""disabled selected>Select a marital status</option>
                          @foreach($payload['maritial'] as $maritial)
                            <option value="{{$maritial->maritial_id}}">{{$maritial->maritial_name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row" x-show="original">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="race1">Race</label>
                      <select class="custom-select form-control required hid" id="race2" name="race2"  data-validation-required-message="This Primary Email field is required">
                        <option value=""disabled selected>Select a race</option>  
                          @foreach($payload['race'] as $race)
                            <option value="{{$race->race_id}}">{{$race->race_name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="religion1">Religion</label>
                      <select class="custom-select form-control required hid" id="religion2" name="religion2"  data-validation-required-message="This Primary Email field is required">
                        <option value=""disabled selected>Select a religion</option>
                          @foreach($payload['religion'] as $religion)
                            <option value="{{$religion->religion_id}}">{{$religion->religion}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nationality1">Nationality</label>
                      <select class="custom-select form-control required hid" id="nationality2" name="nationality2"  data-validation-required-message="This Primary Email field is required">
                        <option value=""disabled selected>Select a nationality</option>
                          @foreach($payload['nation'] as $nation)
                            <option value="{{$nation->nation_id}}">{{$nation->nation}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <h4 class="card-title" x-show="original">Occupation Information</h4>
                <div class="row" x-show="original">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Occupation/Designation</label>
                      <input type="text" class="form-control required" name="occupation2" id="occupation2" placeholder="--">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employer1">Employer/Company</label>
                      <input type="text" class="form-control required hid" name="company2" id="company2"
                      placeholder="--"  data-validation-required-message="This Primary Email field is required">
                    </div>
                  </div>
                </div>
                <h4 class="card-title" x-show="original">Contact</h4>
                <div class="row" x-show="original">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Mobile No.</label>
                      <input type="number" class="form-control required hid" placeholder="--" id="mobileno2" name="mobileno2"
                        data-validation-required-message="This mobile field is required">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Whatsapp</label>
                      <input type="number" class="form-control required hid" placeholder="--" id="whatsapp2" name="whatsapp2"
                        data-validation-required-message="This Whatsapp field is required" >
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employer1">Home No.</label>
                      <input type="number" class="form-control required hid" name="homeno2" id="homeno2"
                      placeholder="--"  data-validation-required-message="This Primary Email field is required">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Office No.</label>
                      <input type="number" class="form-control required hid" placeholder="--" id="officeno2" name="officeno2"
                        data-validation-required-message="This Name field is required" >
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Primary Email</label>
                      <input type="text" class="form-control required hid" placeholder="--" id="pemail2" name="pemail2"
                        data-validation-required-message="This Primary Email field is required">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Alternate Email</label>
                      <input type="text" class="form-control required hid" placeholder="--" id="aemail2" name="aemail2"
                        data-validation-required-message="This Alternate Email field is required">
                    </div>
                  </div>
              </fieldset>

              <!-- Step 3 -->
              <h6>
                <i class="step-icon"></i>
                <span>STEP 2 - SALES'S INFO</span>
              </h6>
              <fieldset>
                
                <h4 class="card-title">Sales Venue</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="salesvenue">Sales Venue</label>
                        <select name="venue1" class="custom-select" required>
                          @foreach($payload['venue'] as $venue)
                            @if($payload['attend']->sales_venue_id == $venue->sales_venue_id)
                              <option value="{{$venue->sales_venue_id}}" selected>{{$venue->venue_name}}</option>
                            @else
                            <option value="{{$venue->sales_venue_id}}">{{$venue->venue_name}}</option>
                            @endif
                          @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">Time In</label>
                      <div class="position-relative has-icon-left">
                        <input type="time" class="form-control required" placeholder="1:00pm" id="timeIn1" name="timeIn1">
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">Time Out</label>
                      <div class="position-relative has-icon-left">
                        <input type="time" class="form-control required" placeholder="1:30pm" id="timeOut2" name="timeOut1">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">Monthly Income</label>
                      <div class="position-relative has-icon-left">
                        <input type="text" class="form-control required" placeholder="5000" id="income1" name="income1" value="">
                        <div class="form-control-position">RM</div>
                      </div>
                    </div>
                  </div>
                  

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">No. of Children</label>
                      <div class="position-relative has-icon-left">
                        <select name="no_child1" class="custom-select" required>
                          <option value="">--</option>
                          <option value="0">00</option>
                          <option value="1">01</option>
                          <option value="2">02</option>
                          <option value="3">03</option>
                          <option value="4">04</option>
                          <option value="5">05</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">Tour Outcome</label>
                         <div class="row ml-1">
                           <div class="radio mr-1">
                              <input type="radio" name="tourOutcome1" id="qt" value="1" checked="" required>
                              <label for="qt">QT</label>
                            </div>
                        
                            <div class="radio">
                              <input type="radio" name="tourOutcome1" id="nq"  value="2" checked="">
                              <label for="nq">NQ</label>
                            </div>

                            <div class="radio">
                              <input type="radio" name="tourOutcome1" id="ns" value="3" checked="">
                              <label for="ns">NS</label>
                            </div>
                          
                            <div class="radio">
                              <input type="radio" name="tourOutcome1" id="others" value="4" checked="">
                              <label for="others">Others</label>
                            </div>
                        </div>
                    </div>
                  </div>
                  

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="income">Remarks</label>
                      
                        <input type="text" class="form-control required" placeholder="" id="remark" name="remark" required>
                     
                    </div>
                  </div>

                </div>

                <h4 class="card-title pt-2">Sales & Marketing</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cvno">Sales Personnel</label>
                      <select name="salesp1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                        <option value="">--</option>
                        @foreach($payload['salesp'] as $salesp)
                          @if($payload['attend']->sales_personnel_id == $salesp->sales_team_id)
                            <option value="{{$salesp->sales_team_id}}" selected>{{$salesp->sales_name}}</option>
                          @else
                            <option value="{{$salesp->sales_team_id}}">{{$salesp->sales_name}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Sales Manager</label>
                        <select name="salesm1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                          <option value=""disabled selected>Select a sales manager</option>
                          @foreach($payload['salesm'] as $salesm)
                            <option value="{{$salesm->sales_team_id}}">{{$salesm->sales_name}}</option>
                          @endforeach
                        </select>
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="cvexpirydate">Marketing Agency</label>
                      <select name="ma1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                        <option value=""disabled selected>Select a marketing agency</option>
                        @foreach($payload['ma'] as $ma)
                          <option value="{{$ma->ma_id}}">{{$ma->ma_name}}</option>
                        @endforeach
                      </select>   
                    </div>
                  </div>
                </div>
              
                <h4 class="card-title">Complimentary Voucher</h4>
                 <div class="row" x-data="{edit: false, original:true}">
                      <div class="col-md-12">
                          <div class="form-group controls">
                              <div class="row">
                                <label class="pl-1">Apply Complimentary Voucher</label>
                                <div class="custom-control-inline">
                                      
                                    <div class="col">
                                      <div class="radio mr-1">
                                        <input type="radio" name="acv" id="yes" checked=""  @click="edit=true, original=false" value="1" required>
                                        <label for="yes">Yes</label>
                                      </div>
                                    </div>  
                                    <div class="col">
                                      <div class="radio"> 
                                        <input type="radio" name="acv" @click="edit=false, original=true" id="no" value="0" checked="" >
                                        <label for="no">No</label>
                                      </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                        
                      
                      <div class="col-sm-4" x-show="edit">
                        <div class="form-group controls">
                          <label>Accomodation</label>
                          <select name="accom1" class="custom-select" required>
                            <option value=""disabled selected>Select a accomodation</option>
                            <option value="1">Grand Margherita Hotel</option>
                            <option value="2">Damai Beach Resort</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4" x-show="edit">
                        <div class="form-group controls">
                          <label>No of Stay</label>
                          <select name="stay1" class="custom-select" required>
                            <option value=""disabled selected>Select number of stay</option>
                            <option value="2">3D2N</option>
                            <option value="1">2D1N</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4" x-show="edit">
                        <div class="form-group controls">
                          <label>No of Occupancy</label>
                          <select name="occup1" class="custom-select" required>
                            <option value=""disabled selected>Select number of occupancy</option>   
                            <option value="2">2</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-4" x-show="edit">
                        <div class="form-group controls">
                          <label>CV Date</label>
                          <input type="date" name="cv_start1" class="form-control" value="01 June 2020" required>
                        </div>
                      </div>
                      <div class="col-sm-4" x-show="edit">
                        <div class="form-group controls">
                          <label>CV Expiry</label>
                          <input type="date" name="cv_exp1" class="form-control" value="01 June 2020" required>
                        </div>
                      </div>

                      <div class="col-sm-12" x-show="edit">
                        <div class="form-group controls">
                          <label>Voucher Apply To</label>
                          <div class="custom-control-inline">
                            <fieldset>
                              <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox100" name="apply[]" value="1">
                                <label for="checkbox100">Attendee's 1</label>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox101" name="apply[]" value="2">
                                <label for="checkbox101">Attendee's 2</label>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                      </div>

                        <div class="col-sm-4">
                           <div class="form-group controls">
                              <div class="row">
                                <label class="pl-1">Proceed To Contract</label>
                                  <div class="custom-control-inline">
                                     <div class="row"> 
                                        <div class="col">
                                          <div class="radio mr-1">
                                            <input type="radio" name="contract" id="y" checked=""  value="1" required>
                                            <label for="y">Yes</label>
                                          </div>
                                        </div>  
                                        <div class="col">
                                          <div class="radio"> 
                                            <input type="radio" name="contract" id="n"  checked="" value="0" >
                                            <label for="n">No</label>
                                          </div>
                                        </div>
                                     </div>
                                  </div>
                              </div>
                          </div>
                       </div>
                  
                </div>
              </fieldset>
              <button type="submit" class="btn btn-primary m-1" id="btn_add1" onclick="showContact2()">Save</button>
            </form>
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
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="{{asset('assets/js/appendform.js')}}"></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
