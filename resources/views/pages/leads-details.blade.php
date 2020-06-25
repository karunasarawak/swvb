@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

{{-- page style --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/picker-modal.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section>
    <div class="row" x-data="{ edit: false, original: true }">
        <div class="col-md-12">
        <div class="card">
        <form action="{{route('leads.edit', $payload['lead']->lead_id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">View Lead Details</h4>
                <button type="button" class="btn btn-outline-primary round" x-show="original" @click="edit = true, original = false">Edit</button>
                <div class="float-right" x-show="edit" x-cloak>
                    <button type="submit" class="btn btn-outline-primary round mr-1">Save</button>
                    <button type="button" class="btn btn-outline-primary round" @click="edit = false, original = true">Close</button>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body d-flex">
                    <div class="col">
                        <h5 class="swvb-blue"><strong>Basic</strong></h5>
                        <div class="row">
                            <p class="col-sm-5">Salutation</p>
                            <p class="col" x-show="original">Mr</p>
                            <p class="col" x-cloak x-show="edit"><input type="text" name="salutation_id" class="form-control" value="Mr"></p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Name</p>
                            <p class="col" x-show="original">{{$payload['lead']->name}}</p>
                            <p class="col" x-cloak x-show="edit"><input type="text" name="name" class="form-control" value="{{$payload['lead']->name}}"></p>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="swvb-blue"><strong>Contact</strong></h5>
                        <div class="row">
                            <p class="col-sm-5">Mobile No.</p>
                            <p class="col" x-show="original">{{$payload['lead']->mobile_no}}</p>
                            <p class="col" x-cloak x-show="edit"><input type="text" name="mobile_no" class="form-control" value="{{$payload['lead']->mobile_no}}"></p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Whatsapp</p>
                            <p class="col" x-show="original">{{$payload['lead']->whatsapp_no}}</p>
                            <p class="col" x-cloak x-show="edit"><input type="text" name="whatsapp_no" class="form-control" value="{{$payload['lead']->whatsapp_no}}"></p>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="swvb-blue"><strong>Others</strong></h5>
                        <div class="row">
                            <p class="col-sm-5">Credit Card Limit</p>
                            <p class="col" x-show="original">RM {{$payload['lead']->credit_card_limit}}</p>
                            <p class="col" x-cloak x-show="edit"><input type="text" name="credit_card_limit" class="form-control" value="{{$payload['lead']->credit_card_limit}}"></p>
                        </div>
                        <div class="row">
                            <p class="col-sm-5">Telemarketer</p>
                            <p class="col" x-show="original">{{$payload['lead']->telemarketer_id}}</p>
                            <p class="col" x-cloak x-show="edit"><input type="text" name="telemarketer_id" class="form-control" value="{{$payload['lead']->telemarketer_id}}"></p>
                        </div>
                    </div>
                </div>
                <div class="px-2 pb-2">


                </div>
            </div>
        </form>
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

                <form action="{{route('leads.addCall', $payload['lead']->lead_id)}}" method="POST">
                    @csrf
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
                                            <label>Call Date</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control pickadate" placeholder="Select Date" name="callDate">
                                                <div class="form-control-position">
                                                <i class='bx bx-calendar'></i>
                                                </div>
                                            </fieldset>
                                            <label>Call Time</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control pickatime" placeholder="Select Time" name="callTime">
                                                <div class="form-control-position">
                                                    <i class='bx bx-history'></i>
                                                </div>
                                            </fieldset>
                                            <label>Remarks</label>
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

                </form>
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
                                        <label>Tour Outcome</label>
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
