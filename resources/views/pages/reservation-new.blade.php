@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reservation')

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
@endsection
@php
  $salopt='';
  foreach($salute as $s){
    $salopt.='<option value="'.$s->salutation_id.'">'.$s->salutation.'</option>';
  }
  
@endphp
@section('content')

<!-- Form wizard with step validation section start -->
<section id="validation">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-swvb-cyan">
          <h4 class="card-title text-white">New Reservation</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <!-- FORM_ACTION -->
           <!-- wizard-validation -->
            <form action="" class="wizard-horizontal"  method="POST">
              @csrf
              @method('patch')
              
              <!-- Step 1 -->
              <h6>
                <i class="step-icon"></i>
                <span>Step 1 - MEMBER</span>
              </h6>
              <!-- Step 1 -->
              <!-- body content of step 1 -->
              <fieldset>
                <!-- hotel -->
                <h4 class="card-title pt-1">Member info</h4>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="salutation1">Membership No. </label>
                        <input type="number" class="form-control required" id="mbrship_id" name="res[mbrship_id]" placeholder="23456 0000" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name1">Name </label>
                        <input type="text" class="form-control required" id="name1" name="name1" placeholder="John Doe" required>
                    </div>
                  </div>
                 
                   <!-- hotel -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <div class="controls">
                        <label>Communication Channel</label>
                        <select name="res[communication_channel]" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
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

                  <!-- hotel -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="booking_received_date">Booking Received Date</label>
                        <input type="date" class="form-control required" id="booking_received_date" name="res[booking_received_date]" value="1 July 2020" required>
                    </div>
                  </div>
                </div>
              </fieldset>
              @if($rsvntype=='hotel')
              <!-- Step 2 Booking Info -->   
              <h6>
                <i class="step-icon"></i>
                <span>STEP 2 - BOOKING INFO</span>
              </h6>
              <fieldset x-data="{ edit: false, original:true}">
               
                  <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Membership Information</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="row pt-1">
                                <div class="col-sm-4">
                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member's Information</p>
                                </div>
                                <div class="col-sm-5">
                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Last Point Allocation</p>
                                </div>
                                <div class="col ">
                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Status</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Saluation</p>
                                        <p class="col font-weight-bold black">Mr</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Name</p>
                                        <p class="col font-weight-bold black">John Doe</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Mobile Contact</p>
                                        <p class="col font-weight-bold black">+6012 345 6798</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Whatsapp</p>
                                        <p class="col font-weight-bold black">+6012 345 6798</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Package</p>
                                        <p class="col font-weight-bold black">Pearl Package</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Ext. Membership</p>
                                        <p class="col font-weight-bold black">-</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Status</p>
                                        <p class="col font-weight-bold black">Active</p>
                                    </div>

                                </div>

                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <div class="table-responsive">
                                                <table class="table leads-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Term</th>
                                                            <th class="text-white">Pts</th>
                                                            <th class="text-white">Allocated</th>
                                                            <th class="text-white">Expiry</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>10,000</td>
                                                            <td>01.07.2020</td>
                                                            <td>01.07.2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>10,000</td>
                                                            <td>01.07.2020</td>
                                                            <td>01.07.2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>10,000</td>
                                                            <td>01.07.2020</td>
                                                            <td>01.07.2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>10,000</td>
                                                            <td>01.07.2020</td>
                                                            <td>01.07.2020</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>10,000</td>
                                                            <td>01.07.2020</td>
                                                            <td>01.07.2020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="row">
                                        <p class="col">Paid (%))</p>
                                        <p class="col font-weight-bold black">80%</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">AMF Outstanding</p>
                                        <p class="col font-weight-bold black">RM 50</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Installment Outstanding</p>
                                        <p class="col font-weight-bold black">RM 50</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Other Outstanding</p>
                                        <p class="col font-weight-bold black">RM 50</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Reservation Fee</p>
                                        <p class="col font-weight-bold black">RM 20</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Membership Card Fee</p>
                                        <p class="col font-weight-bold black">RM 10</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Transfer Fee</p>
                                        <p class="col font-weight-bold black">RM 50</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Administration Fee</p>
                                        <p class="col font-weight-bold black">RM 20</p>
                                    </div>
                                    
                                    <div class="row">
                                        <p class="col">Total Outstanding</p>
                                        <p class="col font-weight-bold black">RM 70</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Over Payment</p>
                                        <p class="col font-weight-bold black">RM 100</p>
                                    </div>

                                </div>
                            </div>
                    </div> 
                    <h4 class="card-title">Booking Info</h4>
                    <div class="row">
                      <!-- hotel -->
                      <div class="col-sm-6">
                        <div class="form-group controls">
                          
                          <div class="custom-control-inline">
                            <div class="radio mr-1">
                              <input type="radio" name="mbrship_status" id="reservation" checked="" @click="edit=false, original=true" required>
                              <label for="reservation">Reservation</label>
                            </div>
                            <!--
                            <div class="radio mr-1">
                              <input type="radio" name="mbrship_status" id="rcideposit" checked=""  @click="edit=true, original=false">
                              <label for="rcideposit">RCI Deposit</label>
                            </div> 
                            -->
                            <div class="radio">
                              <input type="radio" name="mbrship_status" id="iideposit" checked=""  @click="edit=false, original=false">
                              <label for="iideposit">II Deposit</label>
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6" x-cloak x-show="edit">
                          <div class="form-group">
                            <label for="income">RCI Membership No.</label>
                              <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1" disabled>
                          </div>
                        </div>
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="income">Batch</label>
                              <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="timeOut1">
                          </div>
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Travel Agent</label>
                          <div class="position-relative has-icon-left">
                            <select name="no_child1" class="custom-select" required>
                              <option value="0">Please select the travel agent</option>
                              <option value="1">EVC</option>
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
                          <label for="income">Hotel</label>
                          <div class="position-relative has-icon-left">
                            <select name="res[accom_id']" class="custom-select" required>
                              <option value="0">Please select the hotel</option>
                              <option value="1">DBR</option>
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
                          <label for="income">Check In Date</label>
                          
                            <input type="date" class="form-control required" value="01 July 2020" id="timeOut2" name="res[check_in]">
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Check Out Date</label>
                          
                            <input type="date" class="form-control required" value="01 July 2020" id="timeOut2" name="res[check_out]">
                          
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">No. of Room</label>
                          
                            <select name="no_child1" class="custom-select" required>
                              <option value="0">Please select number of room</option>
                              <option value="1">01</option>
                              <option value="2">02</option>
                              <option value="3">03</option>
                              <option value="4">04</option>
                              <option value="5">05</option>
                            </select>
                          
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">No. of Pax</label>
                            <select name="no_child1" class="custom-select" required>
                              <option value="0">Please select number of pax</option>
                              <option value="1">01</option>
                              <option value="2">02</option>
                              <option value="3">03</option>
                              <option value="4">04</option>
                              <option value="5">05</option>
                            </select>
                        </div>
                      </div>
                  

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="salesvenue">Breakfast</label>
                      

                          <div class="custom-control-inline">
                            <div class="row">  
                              <div class="col radio ml-1 mr-1">
                                <input type="radio" name="Breakfast" id="Yes3" checked="" required>
                                <label for="Yes3">Yes</label>
                              </div>
                              <div class="col radio">
                                <input type="radio" name="Breakfast" id="No3" checked="">
                                <label for="No3">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
      
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="income">Reserve Breakfast Per Pax</label>
                            <input type="link" class="form-control required" placeholder="Your name" id="income1" name="income1" data-toggle="modal" data-target="#breakfastexpenses" required>  
                          </div>
                      </div>
                      
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="income">Breakfast Pax </label>
                            <input type="number" class="form-control required" placeholder="No of adults" id="income1" name="income1" required>  
                          </div>
                      </div>

                    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Internal Remark</label>
                          <textarea class="form-control" rows="4" placeholder="Internal Remark" name="res[internal_remark]"></textarea>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="income">Hotel Remark</label>
                          <textarea class="form-control" rows="4" placeholder="Hotel Remark"  name="res[accom_remark]"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row pt-1 mb-5">
                        
                        <div class="col-md-6">
                          <h4 class="card-title">Voucher</h4>
                          <div class="form-group">
                            <label for="income">Choose a Voucher</label>
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
                          <button type="button" class="btn btn-primary form-2 position-absolute float-right" id="btn_delete1" data-toggle="modal" data-target="#viewvoucher">View Voucher</button>
                        </div>
                        
                    </div>

                  </div>  
                  
              </fieldset>
            @endif

              @if($rsvntype=='facilities')
                <!-- Step 2 FACILITIES INFO -->
                <h6>
                  <i class="step-icon"></i>
                  <span>STEP 2 - FACILITIES INFO</span>
                </h6>
                <fieldset> 
                  <!-- hotel -->
                  <h4 class="card-title">Facilities Info</h4>
                  <div class="row">
                    
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Facilities</label>
                        <div class="position-relative has-icon-left">
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select the facilities</option>
                            <option value="1">Sarawak Culture Village</option>
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
                        <label for="income">Rate</label>
                          <input type="number" class="form-control required" placeholder="Rate" id="income1" name="income1" value="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="salesvenue">Check in Date</label>
                          <input type="date" class="form-control required" value="01 July 2020" id="timeIn1" name="res[check_in]">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Contract Rate</label>
                        <div class="position-relative has-icon-left">
                          <input type="number" class="form-control required" placeholder="012345678" id="timeOut2" name="res[check_out]">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">No of Pax</label>
                        <div class="position-relative has-icon-left">
                          <input type="number" class="form-control required" placeholder="Number of pax" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Confirmation No.</label>
                        <div class="position-relative has-icon-left">
                          <input type="number" class="form-control required" placeholder="Please enter your confirmation no." id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Confirmation Date</label>
                        <div class="position-relative has-icon-left">
                          <input type="date" class="form-control required" value="01 July 2020" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Total Adult</label>
                        <div class="position-relative has-icon-left">
                          <input type="number" class="form-control required" placeholder="Total number of adult" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Total Children</label>
                        <div class="position-relative has-icon-left">
                          <input type="number" class="form-control required" placeholder="Total number of children" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Remark</label>
                        <div class="position-relative has-icon-left">
                          <input type="text" class="form-control required" placeholder="Remark" id="timeOut2" name="timeOut1">
                        </div>
                      </div>
                    </div>
                    

                </div>
                </fieldset>

                <!-- Step 3 -->
                <h6>
                  <i class="step-icon"></i>
                  <span>STEP 3 - EXTRA CHARGES</span>
                </h6>
                <fieldset>
                  
                  <h4 class="card-title">Room Detail</h4>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Additional Charges</label>
                          <div class="row ml-2">
                            <div class="checkbox">
                              <input type="checkbox" class="checkbox-input tui-full-calendar-checkbox-square" id="latecheck" value="all"
                                checked>
                              <label for="latecheck">Late Check-in fee</label>
                            </div>
                            <div class="checkbox">
                              <input type="checkbox" class="checkbox-input tui-full-calendar-checkbox-square" id="lateout" value="all"
                                checked>
                              <label for="lateout">Late Check-out fee</label>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="income">Cost</label>
                          <input type="number" class="form-control required" placeholder="Cost" id="income1" name="income1" value="">
                      </div>
                    </div>
                  
                </fieldset> 
              @else
              <!-- Step 3 -->
              <h6>
                <i class="step-icon"></i>
                <span>STEP 3 - ROOM DETAIL</span>
              </h6>
              <fieldset id="touchspin-fixer">
                <!-- hotel -->
                <h4 class="card-title">Room Detail</h4>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="salesvenue">Inventory</label>
                       <div class="custom-control-inline">
                          <div class="row">
                            <div class="col radio mr-1">
                              <input type="radio" name="Inventory" id="inyes" checked="" required>
                              <label for="inyes">Yes</label>
                            </div>
                            <div class="col radio">
                              <input type="radio" name="Inventory" id="inno" checked="">
                              <label for="inno">No</label>
                            </div>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 roomno">
                      <div class="form-group">
                        <label for="income">Room No.</label>
                        <div class="position-relative has-icon-left">
                          <select name="room[unit_no]" class="custom-select" required>
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
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Room </label>
                        <div class="position-relative has-icon-left">
                          <select name="room[unit_type_id]" class="custom-select" required>
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
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Bed Type</label>
                        <div class="position-relative has-icon-left">
                          <select name="room[bed_type_id]" class="custom-select" required>
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
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="income">Reserve Using</label>
                          <select name="no_child1" class="custom-select" required>
                            <option value="0">Please select number of children</option>
                            <option value="1">Entitlement</option>
                            <option value="2">Point Rate</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                          </select>
                      </div>
                    </div>
            
                     <div class="col-md-6">
                       <div class="form-group">
                          <label for="income">Additional Charges</label>
                            <div class="row ml-2">
                              <div class="checkbox">
                                <input type="checkbox" class="checkbox-input tui-full-calendar-checkbox-square" id="latecheck" value="all"
                                  checked>
                                <label for="latecheck">Late Check-in fee</label>
                              </div>
                              <div class="checkbox">
                                <input type="checkbox" class="checkbox-input tui-full-calendar-checkbox-square" id="lateout" value="all"
                                  checked>
                                <label for="lateout">Late Check-out fee</label>
                              </div>
                            </div>
                        </div>
                      </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="income">Remark</label>
                            <fieldset class="form-group">
                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea" name="room[room_remark]"></textarea>
                            </fieldset>
                      </div>
                    </div>
                    
                    
                  </div>
                  
              </fieldset>
            @endif
              <!-- Step 4 -->
              <h6>
                <i class="step-icon"></i>
                <span>STEP @if($rsvntype=='faciltities')3 @else 4 @endif - GUEST INFO</span>
              </h6>
              <fieldset>
                <section id="form-repeater-wrapper">
                <!-- form default repeater -->
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body">
                            <form class="form repeater-default">
                              <div data-repeater-list="group-a">
                                <div data-repeater-item>
                                  <div class="row justify-content-between">
                                    <div class="col-md-6 form-group">
                                  
                                    </div>
                        
                                  </div>
                                
                                </div>
                              </div>
                              
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!--/ form default repeater -->
                 <div class="row">
                    <div class="col">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">
                            Check In Guest Info
                          </h4>
                        </div>
                        <div class="card-content">
                          <div class="card-body">
                                <div class="form repeater-default">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-md-4 form-group">
                                                    <label for="salution_id">Salutation</label>
                                                    <select name="salution_id" id="salution_id" class="form-control">
                                                      @php echo $salopt; @endphp
                                                  </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="guest_name">Name</label>
                                                    <input name="guest_name" class="form-control" id="guest_name" placeholder="Enter name">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="contact_no">Contact No.</label>
                                                    <input name="contact_no" class="form-control" id="contact_no" placeholder="Enter contact no.">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="guest_nric">NRIC</label>
                                                    <input name="guest_nric" class="form-control" id="guest_nric" placeholder="Enter contact no.">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="passport">Passport</label>
                                                    <input name="passport" class="form-control" id="passport" placeholder="Enter contact no.">
                                                </div>
                                                
                                                <div class="col-md-4 form-group">
                                                  <label for="malaysian">Nationality</label>
                                                  <select name="malaysian" id="malaysian" class="form-control">
                                                      <option value="FontEnd Developer">Malaysian</option>
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
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
              </section>
              
              </fieldset>

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- breakfast modal popout -->
<div class="modal fade text-left" id="breakfastexpenses" tabindex="-1" role="dialog" id="touchspin-fixer" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Reserve Breakfast</h4>
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


<div class="modal fade text-left" id="viewvoucher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header bg-swvb-blue">
        <h4 class="modal-title" id="myModalLabel33">Voucher</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="bx bx-x"></i>
        </button>
      </div>
      <form action="#">
        <div class="modal-body">
          <label>Voucher No</label>
          <div class="form-group">
            <input type="number" placeholder="Email Address" class="form-control">
          </div>
          <label>Total Nights</label>
          <div class="form-group">
            <input type="number" placeholder="Password" class="form-control">
          </div>
          <label>Expiry Date</label>
          <div class="form-group">
            <input type="date" placeholder="Password" class="form-control">
          </div>
          <div class="form-group controls">

            <div class="custom-control-inline">
              <div class="radio mr-1">
                <input type="radio" name="contract_type" value="1" id="individual1"  @click="edit=true, original=false" checked required>
                <label for="individual1">Hotel</label>
              </div>
              <div class="radio">
                <input type="radio" name="contract_type" value="2" id="corporate1"  @click="edit=false, original=true" required>
                <label for="corporate1">Resort</label>
              </div>
            </div>

            <div class="form-group">
              <div class="controls">
                <label>Room Type</label>
                <select name="mro" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                  <option value="">--</option>
                  <option value="1">AA</option>
                  <option value="2">BB</option>
                </select>
              </div>
            </div>

            <label>Expiry Date</label>
          <div class="form-group">
            <input type="date" placeholder="Password" class="form-control">
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
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="{{asset('assets/js/appendform.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
@endsection
