@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reservation')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section class="float-left">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Reservation - 234560000</h4>
                    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1 pl-1">
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member Info<i class="bx bx-pencil"></i></p>
                            </div>
                           
                        </div>
                        <div class="row pl-1">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Membership No.</p>
                                    <p class="col font-weight-bold black">234560000</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">Mr John Doe</p>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Booking Received Date</p>
                                    <p class="col font-weight-bold black">01 July 2020</p>
                                </div>
                                <div class="row">
                                    <p class="col">Communication Channel</p>
                                    <p class="col font-weight-bold black">SMS</p>
                                </div>

                            </div>
                        </div>
                        

                        
                    </div>
                </div>

                <!-- Nav Filled Starts -->
                <section id="nav-filled">
                    <div class="row pt-1">
                        <div class="col-sm-12">
                             <section class="card">
                                 <div class="card-content">


                                    <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="bookinginfo-tab-fill" data-toggle="tab" href="#bookinginfo-fill" role="tab"
                                                aria-controls="contract-fill" aria-selected="true">
                                                Booking Info
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="roominfo-tab-fill" data-toggle="tab" href="#roominfo-fill" role="tab"
                                                aria-controls="payment-fill" aria-selected="false">
                                                Room Info
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="guestinfo-tab-fill" data-toggle="tab" href="#guestinfo-fill" role="tab"
                                                aria-controls="dispatch-fill" aria-selected="false">
                                                Guest Info
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="voucher-tab-fill" data-toggle="tab" href="#voucher-fill" role="tab"
                                                aria-controls="externalmembership-fill" aria-selected="false">
                                                Voucher
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="extracharges-tab-fill" data-toggle="tab" href="#extracharges-fill" role="tab"
                                                aria-controls="pointentitlement-fill" aria-selected="false">
                                                Extra Charges
                                                </a>
                                            </li>
                                            

                                        </ul>

                                    <!-- Booking info -->
                                    <div class="tab-content pt-1">
                                        <div class="tab-pane active" id="bookinginfo-fill" role="tabpanel" aria-labelledby="bookinginfo-tab-fill">
                                            <div class="card-content">
                                                <div class="card-body card-dashboard">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Booking Info<i class="bx bx-pencil"></i></p>
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <p class="col">RCI Deposit</p>
                                                                <p class="col font-weight-bold black">Yes</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">II Deposit</p>
                                                                <p class="col font-weight-bold black">Yes</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Batch</p>
                                                                <p class="col font-weight-bold black">74</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Travel Agent</p>
                                                                <p class="col font-weight-bold black">Wilson</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Hotel/Facility</p>
                                                                <p class="col font-weight-bold black">GMC</p>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <p class="col">Check In Date</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Check Out Date</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">RCI Batch No</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">II Exchange</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">RUH Ref No</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">II Deposit Ref No</p>
                                                                <p class="col font-weight-bold black">12345678</p>
                                                            </div>
                                                            
                                                            
                                                            
                                                        </div>
                                                            <div class="col">
                                                                <div class="row">
                                                                    <p class="col">RCI Membership No</p>
                                                                    <p class="col font-weight-bold black">6</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">II Membership No</p>
                                                                    <p class="col font-weight-bold black">6</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Number of Room</p>
                                                                    <p class="col font-weight-bold black">6</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">No of Pax</p>
                                                                    <p class="col font-weight-bold black">4</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Internal Remark</p>
                                                                    <p class="col font-weight-bold black">-</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Hotel Remark</p>
                                                                    <p class="col font-weight-bold black">-</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Voucher</p>
                                                                    <p class="col font-weight-bold black">CV201235</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Confirmation No.</p>
                                                                    <p class="col font-weight-bold black">CV201235</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Email Date from RCI</p>
                                                                    <p class="col"><input type="date" name="npdate" class="form-control" value="01 June 2020" data-validation-required-message="Please write the email date from RCI" required></p>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>


                                    <!-- Room info tab -->
                                    <div class="tab-pane" id="roominfo-fill" role="tabpanel" aria-labelledby="roominfo-tab-fill">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table leads-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Room</th>
                                                            <th class="text-white">Inventory</th>
                                                            <th class="text-white">Room Type</th>
                                                            <th class="text-white">Bed Type</th>
                                                            <th class="text-white">Room No.</th>
                                                            <th class="text-white">Reserved Using</th>
                                                            <th class="text-white">Adult</th>
                                                            <th class="text-white">Child</th>
                                                            <th class="text-white">Confirmation No.</th>
                                                            <th class="text-white">Breakfast </th>
                                                            <th class="text-white">Breakfast Expenses</th>
                                                            <th class="text-white">Batch No.</th>
                                                            <th class="text-white">Email Date</th>
                                                            <th class="text-white">Remark</th>
                                                            <th class="text-white">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Yes</td>
                                                            <td>Chalet</td>
                                                            <td>Double</td>
                                                            <td>132</td>
                                                            <td>Member  </td>
                                                            <td>2</td>
                                                            <td>2</td>
                                                            <td>Yes</td>
                                                            <td>RM 100</td>
                                                            <td>-</td>
                                                            <td>Pending Special Approval</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        
                                    </div>    


                                    <!-- Guest Info tab -->
                                    <div class="tab-pane" id="guestinfo-fill" role="tabpanel" aria-labelledby="guestinfo-tab-fill">
                                        <div class="card-body card-dashboard">
                                            <div class="table-responsive">
                                                <table class="table leads-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Guest</th>
                                                            <th class="text-white">Type</th>
                                                            <th class="text-white">Salutation</th>
                                                            <th class="text-white">Name</th>
                                                            <th class="text-white">Contact</th>
                                                            <th class="text-white">NRIC</th>
                                                            <th class="text-white">Passport</th>
                                                            <th class="text-white">Nationality</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode A</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>APPROVE</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode B</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>PENDING</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode A</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>APPROVE</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode B</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>PENDING</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode A</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>APPROVE</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode B</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>APPROVE</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode B</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>APPROVE</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1234 0000</td>
                                                            <td>Mode B</td>
                                                            <td>01 April 2020</td>
                                                            <td>Item 01</td>
                                                            <td>RCI BB - John Doe</td>
                                                            <td>PENDING</td>
                                                            <td>Your Remarks</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Voucher -->
                                    <div class="tab-pane" id="voucher-fill" role="tabpanel" aria-labelledby="voucher-tab-fill">
                                        <div class="card-body card-dashboard">
                                            <div class="card-content">
                                                <div class="card-body card-dashboard">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Voucher<i class="bx bx-pencil"></i></p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <p class="col">Voucher No.</p>
                                                                <p class="col font-weight-bold black">CV12121212</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Nights</p>
                                                                <p class="col font-weight-bold black">3D1N</p>
                                                            </div>
                                                
                                                        </div>

                                                            <div class="col">
                                                                <div class="row">
                                                                    <p class="col">Expiry Date</p>
                                                                    <p class="col font-weight-bold black">10 July 2020</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Hotel</p>
                                                                    <p class="col font-weight-bold black">RMH</p>
                                                                </div>
                                                            
                                                            </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2 pt-1">Promo<i class="bx bx-pencil"></i></p>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <p class="col">Promo Name</p>
                                                                <p class="col font-weight-bold black">Mid Year Promo</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Promo Period</p>
                                                                <p class="col font-weight-bold black">1 july 2020 - 31 July 2020</p>
                                                            </div>
                                                
                                                        </div>

                                                            <div class="col">
                                                                <div class="row">
                                                                    <p class="col">Discount</p>
                                                                    <p class="col font-weight-bold black">RM 100</p>
                                                                </div>
                                                                
                                                            
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                        
                                    <!-- Extra Charges -->
                                    <div class="tab-pane" id="extracharges-fill" role="tabpanel" aria-labelledby="extracharges-tab-fill">
                                        <div class="card-body card-dashboard">
                                            
                                            <div class="table-responsive">
                                                <table class="table leads-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Extra Charges</th>
                                                            <th class="text-white">Cost</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Admin Fee</td>
                                                            <td>RM 100</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Last Check in Fee</td>
                                                            <td>RM 50</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="col">
                                                    <button class="btn btn-primary ">New</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>

                        

                                 </div>
                            </section>
                        </div>
                
                    </div>
                </sectiom>
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
                                    Reservation Fee Invoice
                                    </button>

                                </div>
                            </div>
                           
                            <div class="row pt-1">
                                <div class="col">
                                    <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Reservation Request</a>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Reservation History</a>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Confirmation Slip</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Attachmment</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col">
                                        <p>abc.jpg</p>
                                        <p>Invoice Detail 23/6/2020</p>
                                    </div>
                                    <div class="col">
                                        <i class="bx bx-download"></i>
                                        <i class="bx bx-trash"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="row pt-1">
                                    <div class="col">
                                        <p>abc.jpg</p>
                                        <p>Invoice Detail 23/6/2020</p>
                                    </div>
                                    <div class="col">
                                        <i class="bx bx-download"></i>
                                        <i class="bx bx-trash"></i>
                                    </div>
                                </div>
                                <hr>
                                    <div class="row pt-1">
                                        <div class="col">
                                        <a href="{{ url('/membership/new') }}" type="button" class="btn btn-primary ">Upload</a>
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
            <form action="#">
                <div class="modal-body">
                    <div class="form-group controls">
                        <div class="radio mr-1">
                            <input type="radio" name="Deceased" id="d1" checked="" required>
                            <label for="d1">Deceased</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Transfer" checked="">
                            <label for="Transfer">Transfer</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Downgrade" checked="">
                            <label for="Downgrade">Up/Downgrade</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Cancellation" checked="">
                            <label for="Cancellation">Cancellation</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Repurchase" checked="">
                            <label for="Repurchase">Repurchase</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Suspend" checked="">
                            <label for="female1">Suspend</label>
                        </div>
                        <div class="px-2">
                            <button class="btn btn-outline-primary round mr-1 mb-1">Save</a>
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
                    <div class="form-group">
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

<!--/ Zero configuration table -->
<script type="text/javascript">
    function redirect()
    {
    
        if (document.getElementById("Transfer").selected){
            return redirect()->route('members.transfer');
        }
        else if (document.getElementById("Downgrade").selected)
        {
            return Redirect::route('members.updowngrade');
        }
    }
    </script>
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
@endsection
