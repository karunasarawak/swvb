@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reservation')

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
          <h4 class="card-title text-white">Facilities Reservation</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <!-- FORM_ACTION -->
           
            <form action="" class="wizard-validation"  method="POST">
              @csrf
              @method('patch')
              
              <!-- Step 1 -->
              <!-- <h6>
                <i class="step-icon"></i>
                <span>Step 1 - MEMBER</span>
              </h6> -->
              <!-- Step 1 -->
              <!-- body content of step 1 -->

              <!-- <fieldset>
                
                <h4 class="card-title pt-1">Member info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="salutation1">Membership No. </label>
                        <input type="number" class="form-control required" id="name1" name="name1" placeholder="23456 0000" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name1">Name </label>
                        <input type="text" class="form-control required" id="name1" name="name1" placeholder="John Doe" required>
                    </div>
                  </div>
                 


                  <div class="col-sm-6">
                    <div class="form-group controls">
                      <label class="d-block">Status</label>
                      <div class="custom-control-inline">
                        <div class="radio mr-1">
                          <input type="radio" name="mbrship_status" id="pending1" checked="" required>
                          <label for="pending1">Room</label>
                        </div>
                        <div class="radio">
                          <input type="radio" name="mbrship_status" id="Activation1" checked="">
                          <label for="Activation1">Facility</label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>Communication Channel</label>
                        <select name="id1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                          <option>--</option>
                          <option value="d1">Whatsapp</option>
                          <option value="sibu">SMS</option>
                          <option value="miri">Call</option>
                          <option value="miri">Email</option>
                          <option value="sibu">POS</option>
                          <option value="miri">Online</option>
                          <option value="miri">Walk In</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="gender1">Booking Received Date</label>
                        <input type="date" class="form-control required" id="name1" name="name1" value="1 July 2020" required>
                    </div>
                  </div>
                </div>
                
              

              </fieldset> -->

              

              <!-- Step 2 -->
              
              <h6>
                <i class="step-icon"></i>
                <span>STEP 2 - FACILITIES INFO</span>
              </h6>
              <fieldset>
            
                <h4 class="card-title">Facilities Info</h4>
                
                  <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Facilities</label>
                        <div class="position-relative has-icon-left">
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
                            <option value="1">Sarawak Culture Village</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Rate</label>
                            <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Check In Date</label>
                            <input type="date" class="form-control required" value="01 July 2020" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Contract Rate</label>
                            <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1">
                        </div>
                      </div>

                    <div class="col-sm-6">
                      <div class="form-group controls">
                         <div class="custom-control-inline">
                          <div class="radio mr-1">
                            <input type="radio" name="mbrship_status" id="reservation" checked="" required>
                            <label for="reservation">Reservation</label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="mbrship_status" id="rcideposit" checked="">
                            <label for="rcideposit">RCI Deposit</label>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">No of Pax</label>
                        <div class="position-relative has-icon-left">
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
                            <option value="1">6</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Confirmation No.</label>
                            <input type="number" class="form-control required" placeholder="1234 0000" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Confirmation Date</label>
                            <input type="date" class="form-control required" value="01 July 2020" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    
                    
                      <div class="form-group">
                        <label for="income">No. of Pax</label>
                        
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                          </select>
                        
                      </div>
                  
                </div>  

              </fieldset>

              <!-- Step 3 -->
              <h6>
                <i class="step-icon"></i>
                <span>STEP 3 - GUEST DETAIL</span>
              </h6>
              <fieldset id="touchspin-fixer">
                
                <h4 class="card-title">Check In Guest Info</h4>
                
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Salutation </label>
                        <div class="position-relative has-icon-left">
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
                            <option value="1">Mr</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="income">Name</label>
                          <input type="name" class="form-control required" placeholder="Your name" id="income1" name="income1" value="" >  
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="income">Contact No.</label>
                          <input type="number" class="form-control required" placeholder="Your name" id="income1" name="income1" value="" >  
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="income">NRIC</label>
                          <input type="number" class="form-control required" placeholder="Your name" id="income1" name="income1" value="" >  
                      </div>
                    </div>  
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="income">Passport</label>
                          <input type="number" class="form-control required" placeholder="K12345567" id="income1" name="income1" value="" >  
                      </div>
                    </div>  
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Nationality</label>
                        <div class="position-relative has-icon-left">
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
                            <option value="1">malaysian</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  
              </fieldset>

              <!-- Step 4 -->
              <h6>
                <i class="step-icon"></i>
                <span>STEP 4 - EXTRA CHARGES</span>
              </h6>
              <fieldset>
       
                <h4 class="card-title">Extra Charges</h4>
                <div class="row">
                  
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="income">Extra Charges</label>
                      <div class="position-relative has-icon-left">
                        <select name="no_child1" class="custom-select" required>
                          <option value="0">Please select number of children</option>
                          <option value="1">Late Check-in Fee</option>
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
                      <label for="income">Cost</label>
                        <input type="number" class="form-control required" placeholder="Your name" id="income1" name="income1" value="">
                    </div>
                  </div>
                  
               </div>
               {{-- @livewire('add-charges-form') --}}
                <button type="button" class="btn btn-outline-primary m-3" id="attendeeButton" onclick="addAttendee()">Add Charges</button>
                
                  <div id="attendee2" class="d-none">
                    <h4 class="card-title mt-3">Check In Guest Info</h4>
                      <div class="row">
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="income">Salutation</label>
                            <div class="position-relative has-icon-left">
                              <select name="no_child1" class="custom-select" required>
                                <option value="0">Please select number of children</option>
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
                            <label for="income">Name</label>
                              <input type="name" class="form-control required" placeholder="Your name" id="income1" name="income1" value="">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="salesvenue">Contact No.</label>
                              <input type="number" class="form-control required" placeholder="1221221" id="timeIn1" name="timeIn1">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="income">NRIC</label>
                            <div class="position-relative has-icon-left">
                              <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="income">Passport</label>
                            <div class="position-relative has-icon-left">
                              <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="income">Nationality</label>
                            <div class="position-relative has-icon-left">
                              <input type="text" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1">
                            </div>
                          </div>
                        </div>
                        

                    </div>
                  </div>
              </fieldset>


              <!-- Step 5 -->
              <!-- <h6>
                <i class="step-icon"></i>
                <span>STEP 5 - FACILITIES</span>
              </h6>
              <fieldset>
                
                <h4 class="card-title">Room Detail</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="salesvenue">Inventory</label>
                      <div class="custom-control-inline">
                        <div class="radio mr-1">
                          <input type="radio" name="gender2" id="male1" checked="" required>
                          <label for="male1">Male</label>
                        </div>
                        <div class="radio">
                          <input type="radio" name="gender2" id="female1" checked="">
                          <label for="female1">Female</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="income">Room & Bed Type</label>
                          <div class="position-relative has-icon-left">
                            <select name="no_child1" class="custom-select" required>
                              <option value="0">Please select number of children</option>
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
                        <label for="income">Room No.</label>
                        <div class="position-relative has-icon-left">
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
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
                        <label for="income">Reserved Using</label>
                          <input type="date" class="form-control required" value="1 July 2020" id="income1" name="income1" value="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Breakfast</label>
                        <div class="position-relative has-icon-left">
                        <div class="custom-control-inline">
                          <div class="radio mr-1">
                            <input type="radio" name="gender2" id="male1" checked="" required>
                            <label for="male1">Yes</label>
                          </div>
                          <div class="radio">
                            <input type="radio" name="gender2" id="female1" checked="">
                            <label for="female1">No</label>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Breakfast Expenses</label>
                        <div class="position-relative has-icon-left">
                          <input type="link" class="form-control required" placeholder="3 WD 2 WE" id="income1" name="income1" value="" data-toggle="modal" data-target="#inlineForm50">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Extra Charges</label>
                          <input type="number" class="form-control required" placeholder="RM 500" id="income1" name="income1" value="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Remark</label>
                          <textarea class="form-control" rows="4" placeholder="Remark"></textarea>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Filter</label>
                          <textarea class="form-control" rows="4" placeholder="Remark"></textarea>
                      </div>
                    </div> 
                  </div>
                  
              </fieldset> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="modal fade text-left" id="breakfastexpenses" tabindex="-1" role="dialog" id="touchspin-fixer" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Breakfast Expenses</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Entitlement</label>
                    <div class="form-group">
                      <div class="d-inline-block mb-1 mr-1">
                        <label>WD</label>
                        <input type="text" class="touchspin-vertical" value="3" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="d-inline-block mb-1 mr-1">
                        <label>WE</label>
                        <input type="text" class="touchspin-vertical" value="3" />
                      </div>
                    </div>
                    <p>- OR -</p>
                    <label>Price</label>
                    <div class="form-group">
                        <input type="number" placeholder="RM 10" class="form-control">
                    </div>
                    <p>- OR -</p>
                    <div class="custom-control-inline">
                      <div class="radio mr-1">
                        <input type="radio" name="corporate1" id="individual1" checked="" required>
                        <label for="individual1">Complimentary</label>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cancel</span>
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
