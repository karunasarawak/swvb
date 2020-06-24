@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

{{-- page style --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section>
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Contacts</h4>
            </div>
            <div class="card-content">
                <div class="card-body d-flex">
                    <div class="col">
                        <h5 class="swvb-blue"><strong>View</strong></h5>
                        <div class="row">
<div class="col-md-3">
                                <button class="btn btn-outline-primary round ">Installment Schedule</button>
                            </div>
<div class="col-md-3">
                                <button class="btn btn-outline-primary round ">Dispatch History</button>
                            </div>
<div class="cold-md-3">
                                <button class="btn btn-outline-primary round ">Account Statement</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-outline-primary round ">Point Management</button>
                            </div>
                        </div>

                    </div>
                        <div class="row">
                            <h5 class="swvb-blue"><strong>Status</strong></h5>
                            <p class="col-sm-5">Name</p>
                            <p class="col">John Doe</p>
                        </div>
                        <div class="row">
    <div class="col-md-3">
                                <button class="btn btn-outline-primary round ">Installment Schedule</button>
                            </div>
<div class="col-md-3">
                                <button class="btn btn-outline-primary round ">Update Status</button>
                            </div>
                        </div>

<div class="row">
                            <div class="col-md-3">
                                <h5 class="swvb-blue"><strong>Member Info</strong></h5>
                            </div>
                            <div class="col-md-3">
                            <button class="btn btn-outline-primary round ">Edit</button>
                            </div>
                        </div>

<div class="row">
            <divclass="col">
        <div class="row">
                                <p class="col-sm-5">Salutation</p>
        <p class="col">Mr</p>
                            </div>
                            <div class="row">
            <p class="col-sm-5">Name</p>
                                <p class="col">John Doe</p>
                            </div>
<div class="row">
            <p class="col-sm-5">NRIC/Passport No.</p>
                                <p class="col">700401-13-234</p>
                            </div>
                            <div class="row">
            <p class="col-sm-5">DOB</p>
                                <p class="col">01 April 1970</p>
                            </div>
<div class="row">
                                <p class="col-sm-5">Mobile No.</p>
                                <p class="col">+60 12 345 6789</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Whatsapp</p>
                                <p class="col">+60 12 345 6789</p>
                            </div>
<div class="row">
                                <p class="col-sm-5">Primary Email</p>
                                <p class="col">abc@gmail.com</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Alternate Email</p>
                                <p class="col">def@gmail.com</p>
                            </div>
                            <div class="row">
        <p class="col-sm-5">Address</p>
                                <p class="col">No 123, Lorong 123
                                Jalan 123, Kuching</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Gender</p>
                                <p class="col">Male</p>
                            </div>
    <div class="row">
                                <p class="col-sm-5">Martital Status</p>
                                <p class="col">Married</p>
                            </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <p class="col-sm-5">Occupation/ Designation</p>
                            <p class="col">Boss</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Employer/Company</p>
                            <p class="col">Boss Company</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Race</p>
                            <p class="col">Chinese</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Religion</p>
                            <p class="col">Buddism</p>
                        </div>
<div class="row">
                            <p class="col-sm-5">Nationality</p>
                            <p class="col">Malaysian</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Country</p>
                            <p class="col">Malaysia</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Postcode</p>
                            <p class="col">93350</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">State</p>
                            <p class="col">Sarawak</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">City</p>
                            <p class="col">Kuching</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Relationship to
                                Primary Member</p>
                            <p class="col">Spouse</p>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-3">
                                <h5 class="swvb-blue"><strong>Contract Info</strong></h5>
                            </div>
                            <div class="col-md-3">
                            <button class="btn btn-outline-primary round ">Edit</button>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <p class="col-sm-5">Application NO.</p>
                                <p class="col">1234 0000</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Agreement No.</p>
                                <p class="col">1324 0000</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Membership No</p>
                                <p class="col">2060860000</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">DOB</p>
                                <p class="col">01 April 1970</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Mobile No.</p>
                                <p class="col">+60 12 345 6789</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Whatsapp</p>
                                <p class="col">+60 12 345 6789</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Primary Email</p>
                                <p class="col">abc@gmail.com</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Alternate Email</p>
                                <p class="col">def@gmail.com</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Address</p>
                                <p class="col">No 123, Lorong 123
                                Jalan 123, Kuching</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Gender</p>
                                <p class="col">Male</p>
                            </div>
                            <div class="row">
                                <p class="col-sm-5">Martital Status</p>
                                <p class="col">Married</p>
                            </div>
                    </div>

                    <div class="col">
                        <div class="row">
                            <p class="col-sm-5">Occupation/ Designation</p>
                            <p class="col">Boss</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Employer/Company</p>
                            <p class="col">Boss Company</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Race</p>
                            <p class="col">Chinese</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Religion</p>
                            <p class="col">Buddism</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Nationality</p>
                            <p class="col">Malaysian</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Country</p>
                            <p class="col">Malaysia</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Postcode</p>
                            <p class="col">93350</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">State</p>
                            <p class="col">Sarawak</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">City</p>
                            <p class="col">Kuching</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">State</p>
                            <p class="col">Sarawak</p>
                        </div>
                    </div>

                    <div class="col">
                        <h5 class="swvb-blue"><strong>Others</strong></h5>
                        <div class="row">
                            <p class="col-sm-5">Credit Card Limit</p>
                            <p class="col">RM 4000</p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Telemarketer</p>
                            <p class="col">Wilson</p>
                        </div>
                    </div>
                </div>
                <div class="px-2 pb-2">


                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between pb-0">
                    <h4 class="card-title">Call Log</h4>
                    <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">Add Call +</button>
                </div>

                {{-- Modal Start --}}

                {{-- New Call Modal --}}

                <div class="modal fade" id="addCall" tabindex="-1" role="dialog" aria-labelledby="#addCallTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-swvb-blue">
                                <h5 class="modal-title white" id="addCallTitle">Add Call</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control pickadate" placeholder="Select Date" name="callDate">
                                            <div class="form-control-position">
                                              <i class='bx bx-calendar'></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control pickatime" placeholder="Select Time" name="callTime">
                                            <div class="form-control-position">
                                                <i class='bx bx-history'></i>
                                            </div>
                                        </fieldset>
                                        <textarea name="callRemarks" rows="3" class="form-control"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary round" data-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Save</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Update Modal --}}

                <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="#updateTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-swvb-blue">
                                <h5 class="modal-title white" id="update">Proceed to Tour</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="bx bx-x"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <div class="radio my-1">
                                            <input type="radio" name="proceed" value="yes" id="radio1">
                                            <label for="radio1">Yes</label>
                                        </div>
                                        <div class="radio my-1">
                                            <input type="radio" name="proceed" value="no" id="radio2">
                                            <label for="radio2">No</label>
                                        </div>
                                        <div class="radio my-1">
                                            <input type="radio" name="proceed" value="no-pickup" id="radio3">
                                            <label for="radio3">No Pickup</label>
                                        </div>
                                        <label for="reason">Reason</label>
                                        <select name="reason" id="reason" class="form-control mb-1">
                                            <option value="">--</option>
                                            <option value="Not Interested">Not Interested</option>
                                        </select>
                                        <label for="callLength">Call Length (Min)</label>
                                        <input type="number" name="callLength" id="callLength" class="form-control" min="0">
                                    </div>
                                    {{-- <button type="button" class="btn btn-primary round" data-dismiss="modal">
                                        <i class="bx bx-check d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Save</span>
                                    </button> --}}
                                    <a href="{{asset('tours/new')}}" class="btn btn-outline-primary round">Save</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal End --}}

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table call-log">
                                <thead class="bg-swvb-cyan">
                                    <tr>
                                        <th class="text-white">Call ID</th>
                                        <th class="text-white">Creation Date</th>
                                        <th class="text-white">Creation Time</th>
                                        <th class="text-white">Call Length</th>
                                        <th class="text-white">Outcome</th>
                                        <th class="text-white">Reason</th>
                                        <th class="text-white">Remarks</th>
                                        <th class="text-white"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1000031</td>
                                        <td>03 June 2019</td>
                                        <td>03:10 AM</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><button class="btn btn-outline-primary round" data-toggle="modal" data-target="#update">Update</button></td>
                                    </tr>
                                    <tr>
                                        <td>1000032</td>
                                        <td>27 April 2019</td>
                                        <td>03:05 AM</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><button class="btn btn-outline-primary round" data-toggle="modal" data-target="#update">Update</button></td>
                                    </tr>
                                    <tr>
                                        <td>1000033</td>
                                        <td>06 January 2020</td>
                                        <td>05:19 AM</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><button class="btn btn-outline-primary round" data-toggle="modal" data-target="#update">Update</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
