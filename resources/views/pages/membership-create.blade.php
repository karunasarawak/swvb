@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership')

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}"> --}}
@endsection

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section id="info-tabs-">
  <div class="row">
    <div class="col-12">
      <div class="card icon-tab">
        <div class="card-header">
          <h4 class="card-title">New Membership</h4>
        </div>
        <div class="card-content mt-2">
          <div class="card-body">
            {{-- class="wizard-validation" for validation--}}
            <form action="#" class="wizard-horizontal" novalidate>
              <!-- Step 1 -->
              <h6>
                <i class="step-icon"></i>
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name:user.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                </span>
                <span>STEP 1 - CONTRACT</span>
              </h6>
              <!-- Step 1 end-->
              @include('pages.contract-new')
              <!-- Step 2-->
              <h6>
                <i class="step-icon"></i>
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name:briefcase.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                </span>
                <span>STEP 2 - MEMBERS</span>
              </h6>
              <!-- Step 2 end-->
              <!-- body content of step 2 -->
              @include('pages.contract-new2')
              <!-- body content of step 2 end-->
              <!-- Step 3-->
              <h6>
                <i class="step-icon"></i>
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name:users.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                </span>
                <span>Nominee</span>
              </h6>
              <!-- Step 3 end-->
              <!-- body content of step 3 -->
              <fieldset>
                <div class="row">
                  <div class="col-12">
                    <h6 class="py-50">Enter Nominate Details</h6>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ad, consectetur animi magni
                        magnam nihil error, quaerat pariatur dolores unde quod sequi modi temporibus libero eos
                        consequuntur ab maxime alias!
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group">
                      <label>Nomination Name</label>
                      <input type="text" class="form-control" placeholder="Nomination Name">
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="form-group">
                      <label>Nominee's Relation</label>
                      <input type="text" class="form-control" placeholder="Relation">
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-4">
                    <div class="form-group">
                      <label>Nominee Age</label>
                      <input type="number" class="form-control" placeholder="Age">
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-4">
                    <div class="form-group">
                      <label>Nominee Documents</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile05">
                        <label class="custom-file-label" for="inputGroupFile05">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <h6 class="py-50">Terms and conditions for nominee</h6>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci odit sunt facilis,
                      exercitationem placeat in maiores, ullam doloribus aperiam sint culpa, quo ducimus tempore
                      perferendis ipsum laborum officia ut dignissimos!
                    </p>
                  </div>
                </div>
              </fieldset>
              <!-- body content of step 3 end-->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Form wizard with icon tabs section end -->

<!-- Form wizard with step validation section start -->
<section id="validation">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <h4 class="card-title">Validation Example</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="#" class="wizard-validation">
              <!-- Step 1 -->
              <h6>
                <i class="step-icon"></i>
                <span>Basic Information</span>
              </h6>
              <!-- Step 1 -->
              <!-- body content of step 1 -->
              <fieldset>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="firstName3">First Name </label>
                      <input type="text" class="form-control required" id="firstName3" name="firstName"
                        placeholder="Enter Your First Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="lastName3">Last Name</label>
                      <input type="text" class="form-control required" id="lastName3" name="lastName"
                        placeholder="Enter Your Last Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="emailAddress5">Email</label>
                      <input type="email" class="form-control required" id="emailAddress5" name="emailAddress"
                        placeholder="Enter Your Email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="location">City</label>
                      <select class="custom-select form-control" id="location" name="location">
                        <option value="">New York</option>
                        <option value="Amsterdam">Chicago</option>
                        <option value="Berlin">San Francisco</option>
                        <option value="Frankfurt">Boston</option>
                      </select>
                    </div>
                  </div>
                </div>
              </fieldset>
              <!-- body content of step 1 end -->
              <!-- Step 2 -->
              <h6>
                <i class="step-icon"></i>
                <span>Job Details</span>
              </h6>
              <!-- step 2 -->
              <!-- body content of step 2 end -->
              <fieldset>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="proposalTitle3">
                        Proposal Title
                      </label>
                      <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle"
                        placeholder="Enter Your Proposel Title">
                    </div>
                    <div class="form-group">
                      <label for="jobTitle5">
                        Job Title
                      </label>
                      <input type="text" class="form-control required" id="jobTitle5" name="jobTitle5"
                        placeholder="Enter Your Job Title">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="shortDescription3">Short Description</label>
                      <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"
                        placeholder="Please Enter short Description"></textarea>
                    </div>
                  </div>
                </div>
              </fieldset>
              <!-- body content of step 2 end -->
              <!-- Step 3 -->
              <h6>
                <i class="step-icon"></i>
                <span>Event Details</span>
              </h6>
              <!-- step 3 end -->
              <!-- step 3 content -->
              <fieldset>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eventName3">
                        Event Name
                      </label>
                      <input type="text" class="form-control required" id="eventName3" name="eventName"
                        placeholder="Enter Event Name">
                    </div>
                    <div class="form-group">
                      <label for="eventStatus3">Event Statuss</label>
                      <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                        <option value="Planning">Planning</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Finished">Finished</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="eventLocation3">Event Location </label>
                      <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                        <option value="Planning">New York</option>
                        <option value="In Progress">Chicago</option>
                        <option value="Finished">San Francisco</option>
                        <option value="Finished">Boston</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="mr-2">Requirements :</label>
                      <div class="c-inputs-stacked">
                        <div class="d-inline-block mr-2">
                          <fieldset>
                            <div class="checkbox">
                              <input type="checkbox" class="checkbox__input" id="checkbox6">
                              <label for="checkbox6">Staffing</label>
                            </div>
                          </fieldset>
                        </div>
                        <div class="d-inline-block">
                          <fieldset>
                            <div class="checkbox">
                              <input type="checkbox" class="checkbox__input" id="checkbox5">
                              <label for="checkbox5">Catering</label>
                            </div>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <!-- step 3 content end-->
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

<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>

{{-- <script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script> --}}
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('assets/js/membership-new.js')}}"></script>

<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>

<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>

{{-- <script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script> --}}
@endsection
