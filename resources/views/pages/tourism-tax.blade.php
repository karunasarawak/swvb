@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Tourism Tax')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="card-title">
                        <div class="row">
                            <h4 class="col text-white">Tourism Tax
                                <a><button class="btn btn-outline-white round offset-5 float-right ml-1"><i class="bx bx-printer text-white"></i></button></a>
                                <button class="btn btn-outline-white round float-right"><i class="bx bx-download text-white"></i></button>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-body card-dashboard pt-2">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Date</label>
                                            <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round mr-1 mb-1 text-white" required>
                                            <option value="membershipfilter1">Sapphire - Full</option>
                                            <option value="membershipfilter2">Active</option>
                                            <option value="membershipfilter3">Withdrawal</option>
                                            <option value="membershipfilter4">Suspended</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Hotel Filter</label>
                                            <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round mr-1 mb-1 text-white" required>
                                            <option value="membershipfilter1">12 Month</option>
                                            <option value="membershipfilter2">Active</option>
                                            <option value="membershipfilter3">Withdrawal</option>
                                            <option value="membershipfilter4">Suspended</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mb-3">
                            <table class="table table-bordered">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white" colspan="13">(a) Reservation Details As per System</th>
                                        <th class="text-white" colspan="10">(b) On Check-in Day</th>
                                    </tr>
                                    <tr>
                                        <th class="text-white"></th>
                                        <th class="text-white">Guest Registration Form No.</th>
                                        <th class="text-white">Nexoft Reservation No.</th>
                                        <th class="text-white">Member/Guest Name</th>
                                        <th class="text-white">Nationality(Malaysian, MyPR, Non-Malaysian)</th>
                                        <th class="text-white">NRIC No, MyPR No, Passport No.</th>
                                        <th class="text-white">Check-in Date</th>
                                        <th class="text-white">Check-out Date</th>
                                        <th class="text-white">Total Nights</th>
                                        <th class="text-white">Check-in Time</th>
                                        <th class="text-white">Check-out Time</th>
                                        <th class="text-white">Room Type Confirmed</th>
                                        <th class="text-white">Unit No.</th>
                                        <th class="text-white">Actual Guest Check-in</th>
                                        <th class="text-white">Passport No.</th>
                                        <th class="text-white">Actual Check-in/Late Arrival (Date)</th>
                                        <th class="text-white">No Show</th>
                                        <th class="text-white">Early Departure/Actual Check Out(Date)</th>
                                        <th class="text-white">Total Actual Night Stay</th>
                                        <th class="text-white">TTx Paid</th>
                                        <th class="text-white">Invoice No.</th>
                                        <th class="text-white">Receipt No.</th>
                                        <th class="text-white">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>22 June 2020</td>
                                        <td>Down Payment 1</td>
                                        <td>1550</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        <td>23.4</td>
                                        <td>23.4</td>
                                        <td>273.4</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-pencil mr-1"></i> EDIT</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> SAVE</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="17"></td>
                                        <td >Total Actual Night Stay</td>
                                        <td></td>
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
</section>

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="adddownpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
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
                        
                        </div>
                                
                        <div class="px-2">
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Cancel</a>
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Confirm</a>
                            
                        </div>
                    </div>
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
