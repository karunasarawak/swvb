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
                <h4 class="card-title">View Lead Details</h4>
            </div>
            <div class="card-content">
                <div class="card-body d-flex">
                    <div class="col-sm-6">
                        <div class="row justify-content-between mb-1">
                          <p class="h5 swvb-blue text-center m-0 font-weight-bold my-auto pl-1 bm1">Attendee's 01 Info</p>
                          <div class="row">
                            <button class="btn btn-outline-primary round mr-1">Edit</button>
                            <button class="btn btn-outline-primary round ">Generate Payment Invoice</button>
                          </div>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Salutation</p>
                          <p class="col font-weight-bold black">Mr</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Name</p>
                          <p class="col font-weight-bold black">John Doe</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">NRIC/Passport No.</p>
                          <p class="col font-weight-bold black">700412-13-1234</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">DOB</p>
                          <p class="col font-weight-bold black">12 April 1970</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Mobile Contact</p>
                          <p class="col font-weight-bold black">+6012 345 6789</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Whatsapp</p>
                          <p class="col font-weight-bold black">+6012 345 6789</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Primary Email</p>
                          <p class="col font-weight-bold black">John@mail.com</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Alternate Email</p>
                          <p class="col font-weight-bold black">John@gssc.com</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Gender</p>
                          <p class="col font-weight-bold black">Male</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Marital Status</p>
                          <p class="col font-weight-bold black">Single</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Occupation/Designation</p>
                          <p class="col font-weight-bold black">Captain</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Employer/Company</p>
                          <p class="col font-weight-bold black">Ship</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Race</p>
                          <p class="col font-weight-bold black">Others</p>
                        </div>
                        <div class="row">
                          <p class="col-sm-5">Religion</p>
                          <p class="col font-weight-bold black">Others</p>
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
                  <div class="card-body d-flex">
                      <div class="col-sm-6">
                          <div class="row justify-content-between mb-1">
                            <p class="h5 swvb-blue text-center m-0 font-weight-bold my-auto pl-1">Sales Information</p>
                            <div class="row">
                              <button class="btn btn-outline-primary round mr-1">Edit</button>
                            </div>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Sales Venue</p>
                            <p class="col font-weight-bold black">Kuching</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Time In</p>
                            <p class="col font-weight-bold black">1.00 PM</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Time Out</p>
                            <p class="col font-weight-bold black">2.00 PM</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Monthly Income</p>
                            <p class="col font-weight-bold black">RM 5000</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">No. Of Children/p>
                            <p class="col font-weight-bold black">3</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Tour Outcome</p>
                            <p class="col font-weight-bold black">RS</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Remarks</p>
                            <p class="col font-weight-bold black">-</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Sales Personnel</p>
                            <p class="col font-weight-bold black">Mark</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Sales Manager</p>
                            <p class="col font-weight-bold black">Fergusson</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Marketing Agency</p>
                            <p class="col font-weight-bold black">GMBH</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">CV. No.</p>
                            <p class="col font-weight-bold black">CV00001</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">CV. Date</p>
                            <p class="col font-weight-bold black">23 June 2020</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">CV. Expiry</p>
                            <p class="col font-weight-bold black">23 July 2020</p>
                          </div>
                          <div class="row">
                            <p class="col-sm-5">Other CV.</p>
                            <p class="col font-weight-bold black">-</p>
                          </div>
                      </div>
                  </div>
                  <div class="px-2 pb-2">


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
