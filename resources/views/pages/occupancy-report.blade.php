@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Occupancy Report')

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
                    <div class="row">
                        <h4 class="col-md-10 card-title text-white">Occupancy Report</h4>
                       
                    </div>
                    
                </div>
                <div class="card-content">
                    <div class="card-body">
                            <div class="card-body card-dashboard pt-2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Date Started</label>
                                                <input type="date" name="company_email" class="form-control"  placeholder="--" value="2020-09-08" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Date Ended</label>
                                                <input type="date" name="company_email" class="form-control"  placeholder="--" value="2020-02-02" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Hotel</label>
                                                <select name="membershipfilter" class="select2 form-control  mr-1 mb-1 " required>
                                                <option value="membershipfilter1">RMH</option>
                                                <option value="membershipfilter2">DBR</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive pt-1">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Salutation</th>
                                                <th class="text-white">Guest Name</th>
                                                <th class="text-white">Contact No.</th>
                                                <th class="text-white">Passport No.</th>
                                                <th class="text-white">IC No.</th>
                                                <th class="text-white">Arrival Date</th>
                                                <th class="text-white">Check-in Date</th>
                                                <th class="text-white">Check-out Date</th>
                                                <th class="text-white">Malaysian</th>
                                                <th class="text-white">Remarks</th>
                                                <th class="text-white">Arrival Date</th>
                                                <th class="text-white">Departure Date</th>
                                                <th class="text-white">Actual Nights</th>
                                                <th class="text-white">Status</th>
                                                <th class="text-white">Action</th>
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
                                                <td>23.4</td>
                                                <td><button type="button" class="btn btn-success mr-1 mb-1">Arrive</button></td>
                                                <td><button type="button" class="btn btn-danger mr-1 mb-1">Depart</button></td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
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
                                                <td>23.4</td>
                                                <td>2020-02-02</td>
                                                <td>2020-02-04</td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
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
                                                <td>23.4</td>
                                                <td><button type="button" class="btn btn-success mr-1 mb-1">Arrive</button></td>
                                                <td><button type="button" class="btn btn-danger mr-1 mb-1">Depart</button></td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
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
                                                <td>23.4</td>
                                                <td><button type="button" class="btn btn-success mr-1 mb-1">Arrive</button></td>
                                                <td><button type="button" class="btn btn-danger mr-1 mb-1">Depart</button></td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
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
                                                <td>23.4</td>
                                                <td><button type="button" class="btn btn-success mr-1 mb-1">Arrive</button></td>
                                                <td><button type="button" class="btn btn-danger mr-1 mb-1">Depart</button></td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
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
                                                <td>23.4</td>
                                                <td><button type="button" class="btn btn-success mr-1 mb-1">Arrive</button></td>
                                                <td><button type="button" class="btn btn-danger mr-1 mb-1">Depart</button></td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
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
                                                <td>23.4</td>
                                                <td><button type="button" class="btn btn-success mr-1 mb-1">Arrive</button></td>
                                                <td><button type="button" class="btn btn-danger mr-1 mb-1">Depart</button></td>
                                                <td>5</td>
                                                <td>Arrived</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        
                                                        <a class="dropdown-item" href="#"><i class="bx bx-save mr-1"></i> EDIT/SAVE</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-download mr-1"></i> DOWNLOAD</a>
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
