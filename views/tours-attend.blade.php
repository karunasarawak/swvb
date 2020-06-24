@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Tour Detail')

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
        <div class="card-header pb-0">
          <h4 class="card-title">Tour Detail - Step 1</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="#" class="wizard-validation">
              <!-- Step 1 -->
              <h6>
                <i class="step-icon"></i>
                <span>Step 1</span>
              </h6>
              <!-- Step 1 -->
              <!-- body content of step 1 -->
              <fieldset>
                <h4 class="card-title font-weight-bold">Attendee's 01 Information</h4>
                <h4 class="card-title">Basic Information</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="salutation1">Salutation </label>
                      <select class="custom-select form-control required" id="salutation1" name="salutation1">
                            <option value="">Please Select a Salutation</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Sir">Sir</option>
                            <option value="Mdm">Mdm</option>
                            <option value="Tuan Haji">Tuan Haji</option>
                            <option value="Puan Hajjah">Puan Hajjah</option>
                            <option value="Encik">Encik</option>
                            <option value="Puan">Puan</option>
                            <option value="Dato">Dato</option>
                            <option value="Datu">Datu</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="name1">First Name </label>
                      <input type="text" class="form-control required" id="name1" name="name1"
                        placeholder="Enter Your Name">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="gender1">Gender</label>
                      <select class="custom-select form-control required" id="gender1" name="gender1">
                        <option value="">Please Select a Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="nric1">NRIC</label>
                      <input type="number" class="form-control required" id="nric1" name="nric1"
                        placeholder="Enter Your NRIC">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="dob1">DOB</label>
                      <fieldset class="position-relative has-icon-left">
                        <input type="text" class="form-control pickadate-months-year required" placeholder="Select Date" name="dob1" id="dob1">
                        <div class="form-control-position">
                          <i class='bx bx-calendar'></i>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="status1">Marital Status</label>
                      <select class="custom-select form-control required" id="status1" name="status1">
                        <option value="">Please Select Marital Status</option>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Widower">Widower</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="race1">Race</label>
                      <select class="custom-select form-control required" id="race1" name="race1">
                        <option value="">Please Select Race</option>
                        <option value="Malay">Malay</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Indian">Indian</option>
                        <option value="Iban">Iban</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="religion1">Religion</label>
                      <select class="custom-select form-control required" id="religion1" name="religion1">
                        <option value="">Please Select Religion</option>
                        <option value="Islam">Islam</option>
                        <option value="Christian">Christian</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Occupation Information</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="occupation1">Occupation/Designation</label>
                      <input type="text" class="form-control required" name="occupation1" id="occupation1"
                      placeholder="Enter Your Occupation/Designation">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="employer1">Employer/Company</label>
                      <input type="text" class="form-control required" name="employer1" id="employer1"
                      placeholder="Enter Your Employer/Company">
                    </div>
                  </div>
                </div>
                {{-- @livewire('add-attendee-form') --}}
                <button type="button" class="btn btn-outline-primary" id="attendeeButton" onclick="addAttendee()">Add Attendee</button>
                <br />
                <br />
                <div id="attendee2" class="d-none">
                  <h4 class="card-title font-weight-bold">Attendee's 02 Information</h4>
                  <h4 class="card-title">Basic Information</h4>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="salutation2">Salutation </label>
                        <select class="custom-select form-control required" id="salutation2" name="salutation2">
                          <option value="">Please Select a Salutation</option>
                          <option value="Mr">Mr</option>
                          <option value="Mrs">Mrs</option>
                          <option value="Sir">Sir</option>
                          <option value="Mdm">Mdm</option>
                          <option value="Tuan Haji">Tuan Haji</option>
                          <option value="Puan Hajjah">Puan Hajjah</option>
                          <option value="Encik">Encik</option>
                          <option value="Puan">Puan</option>
                          <option value="Dato">Dato</option>
                          <option value="Datu">Datu</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="name2">First Name </label>
                        <input type="text" class="form-control required" id="name2" name="name2" placeholder="Enter Your Name">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="gender2">Gender</label>
                          <select class="custom-select form-control required" id="gender2" name="gender2">
                            <option value="">Please Select a Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="nric2">NRIC</label>
                          <input type="number" class="form-control required" id="nric2" name="nric2" placeholder="Enter Your NRIC">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="dob2">DOB</label>
                            <fieldset class="position-relative has-icon-left">
                              <input type="text" class="form-control pickadate-months-year required" placeholder="Select Date" name="dob2" id="dob2">
                                <div class="form-control-position">
                                  <i class="bx bx-calendar"></i>
                                </div>
                              </fieldset>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="status2">Marital Status</label>
                              <select class="custom-select form-control required" id="status2" name="status2">
                                <option value="">Please Select Marital Status</option>
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Widower">Widower</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="race2">Race</label>
                              <select class="custom-select form-control required" id="race2" name="race2">
                                <option value="">Please Select Race</option>
                                <option value="Malay">Malay</option>
                                <option value="Chinese">Chinese</option>
                                <option value="Indian">Indian</option>
                                <option value="Iban">Iban</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="religion2">Religion</label>
                              <select class="custom-select form-control required" id="religion2" name="religion2">
                                <option value="">Please Select Religion</option>
                                <option value="Islam">Islam</option>
                                <option value="Christian">Christian</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4"></div>
                        </div>
                        <h4 class="card-title">Occupation Information</h4>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="occupation2">Occupation/Designation</label>
                              <input type="text" class="form-control required" name="occupation2" id="occupation2" placeholder="Enter Your Occupation/Designation">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="employer2">Employer/Company</label>
                                <input type="text" class="form-control required" name="employer2" id="employer2" placeholder="Enter Your Employer/Company">
                                </div>
                              </div>
                              <div class="col-md-4"></div>
                            </div>
                          </div>
              </fieldset>
              <!-- body content of step 1 end -->
              <!-- Step 2 -->
              <h6>
                <i class="step-icon"></i>
                <span>Sales Information</span>
              </h6>
              <!-- step 2 -->
              <!-- body content of step 2 end -->
              <fieldset>
                <h4 class="card-title font-weight-bold">Sales Information</h4>
                <h4 class="card-title">Basic Information</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="salesvenue">Sales Venue</label>
                      <input type="text" class="form-control required disabled" id="salesvenue" name="salesvenue" readonly
                        placeholder="" value="Kuching">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="date">Date</label>
                      <fieldset class="position-relative has-icon-left">
                        <input type="text" class="form-control pickadate-months-year required" placeholder="Select Date" name="date" id="date">
                        <div class="form-control-position">
                          <i class='bx bx-calendar'></i>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="timein">Time In</label>
                      <fieldset class="position-relative has-icon-left">
                        <input type="text" class="form-control pickatime" placeholder="Select Time In" name="timein" id="timein">
                        <div class="form-control-position">
                          <i class='bx bx-time'></i>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="timeout">Time Out</label>
                      <fieldset class="position-relative has-icon-left">
                        <input type="text" class="form-control pickatime" placeholder="Select Time Out" name="timeout" id="timeout">
                        <div class="form-control-position">
                          <i class='bx bx-time'></i>
                        </div>
                      </fieldset>
                    </div>
                  </div>

                </div>
                <h4 class="card-title">Attendee</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="child">No. of Children</label>
                      <input type="number" class="form-control required" id="child" name="child"
                        placeholder="Enter No. of Children">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">Income</label>
                      <div class="position-relative has-icon-left">
                        <input type="number" class="form-control required" placeholder="5000" id="income" name="income">
                        <div class="form-control-position">RM</div>
                      </div>
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Outcome</h4>
                <div class="row">
                  <div class="col-md-4">
                    <label>Tour Outcome</label>
                    <div class="form-group">
                      <select class="custom-select form-control required" id="touroutcome" name="touroutcome">
                        <option value="">Please Select Tour Outcome</option>
                        <option value="QT">QT</option>
                        <option value="NT">NT</option>
                        <option value="RS">RS</option>
                        <option value="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="mb-1">Voucher Apply To</label>
                    <div class="form-group">
                      <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                          <fieldset>
                            <div class="checkbox checkbox-shadow">
                              <input type="checkbox" class="required" value="Yes" id="applyatt1" name="voucherapplyto">
                              <label for="applyatt1">Attendee 1</label>
                            </div>
                          </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                          <fieldset>
                            <div class="checkbox checkbox-shadow">
                              <input type="checkbox" class="required" value="No" id="applyatt2" name="voucherapplyto">
                              <label for="applyatt2">Attendee 2</label>
                            </div>
                          </fieldset>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="mb-1">Proceed to Contract</label>
                    <div class="form-group">
                      <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                          <fieldset>
                            <div class="radio radio-shadow">
                              <input type="radio" class="required" value="Yes" id="proceedyes" name="proceedcontract">
                              <label for="proceedyes">Yes</label>
                            </div>
                          </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                          <fieldset>
                            <div class="radio radio-shadow">
                              <input type="radio" class="required" value="No" id="proceedno" name="proceedcontract">
                              <label for="proceedno">No</label>
                            </div>
                          </fieldset>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Sales & Marketing</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="personnel">Sales Personnel</label>
                      <select class="custom-select form-control required" id="personnel" name="personnel">
                        <option value="">Please Select Sales Personnel</option>
                        <option value="Rudy">Rudy</option>
                        <option value="Trevor">Trevor</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="manager">Sales Manager</label>
                      <select class="custom-select form-control required" id="manager" name="manager">
                        <option value="">Please Select Sales Manager</option>
                        <option value="Jenn">Jenn</option>
                        <option value="Mark">Mark</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="agency">Marketing Agency</label>
                      <select class="custom-select form-control required" id="agency" name="agency">
                        <option value="">Please Select Marketing Agency</option>
                        <option value="BSM">BSM</option>
                        <option value="ARGUS">ARGUS</option>
                      </select>
                    </div>
                  </div>
                </div>
                <h4 class="card-title">Complimentary Voucher</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="personnel" class="mb-1">Proceed to CV</label>
                      <ul class="list-unstyled mb-0">
                        <li class="d-inline-block mr-2 mb-1">
                          <fieldset>
                            <div class="radio radio-shadow">
                              <input type="radio" class="required" value="Yes" id="cvyes" name="proceedcv" onchange="proceedCV(1)">
                              <label for="cvyes">Yes</label>
                            </div>
                          </fieldset>
                        </li>
                        <li class="d-inline-block mr-2 mb-1">
                          <fieldset>
                            <div class="radio radio-shadow">
                              <input type="radio" class="required" value="No" id="cvno" name="proceedcv" onchange="proceedCV(0)">
                              <label for="cvno">No</label>
                            </div>
                          </fieldset>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row d-none" id="proceedcv">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="cvno">CV No.</label>
                      <input type="text" class="form-control required" placeholder="Enter CV No." name="CV No." id="cvno">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="cvdate">CV Date</label>
                        <fieldset class="position-relative has-icon-left">
                          <input type="text" class="form-control pickadate-months-year required" placeholder="Select Date" name="cvdate" id="cvdate">
                            <div class="form-control-position">
                              <i class="bx bx-calendar"></i>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="cvexpirydate">CV Expiry Date</label>
                          <fieldset class="position-relative has-icon-left">
                            <input type="text" class="form-control pickadate-months-year required" placeholder="Select Date" name="cvexpirydate" id="cvexpirydate">
                              <div class="form-control-position">
                                <i class="bx bx-calendar"></i>
                              </div>
                            </fieldset>
                          </div>
                        </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="accomodation">Accomodation</label>
                          <select class="custom-select form-control required" id="accomodation" name="accomodation">
                            <option value="">Please Select Accomodation</option>
                            <option value="GMH">GMH</option>
                            <option value="DBR">DBR</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="stay">No. of Stay</label>
                          <select class="custom-select form-control required" id="stay" name="stay">
                            <option value="">Please Select No. of Stay</option>
                            <option value="3D2N">3D2N</option>
                            <option value="2D1N">2D1N</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="occupancy">No. of Occupancy</label>
                          <select class="custom-select form-control required" id="occupancy" name="occupancy">
                            <option value="">Please Select No. of Occupancy</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                          </select>
                        </div>
                      </div>
                </div>
              </fieldset>
              <!-- body content of step 2 end -->
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
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="{{asset('assets/js/appendform.js')}}"></script>
@endsection
