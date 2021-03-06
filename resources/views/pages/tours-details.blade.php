@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Tour Details')

{{-- page style --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
@endsection

@section('content')
<!-- Nav Filled Starts -->
<section id="nav-filled" class="float-left container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content between bg-swvb-cyan">
                        <h4 class="card-title text-white">Tour Detail Preview - {{$payload['details']->name}}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-2">
                                        <div class="col">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Sales & Marketing</h4>
                                        </div>
                                        {{-- <div class="col">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Attendee</h4>
                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Telemarketer</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->sales_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Sales Personnel</p>
                                                @if($payload['sp'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['sp']->sales_name}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Sales Manager</p>
                                                @if($payload['sm'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['sm']->sales_name}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Marketig Agency</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->ma_name}}</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">No. of Children</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->tour_no_of_children}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Monthly Income</p>
                                                <p class="col font-weight-bold black">RM {{$payload['details']->tour_month_income}}</p>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Voucher Apply</p>
                                                @if($payload['details']->voucher_no != null)
                                                    <p class="col font-weight-bold black">Yes</p>
                                                @else 
                                                    <p class="col font-weight-bold black">No</p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">CV No.</p>
                                                @if($payload['details']->voucher_no != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->voucher_no}}</p>
                                                @else 
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Accomodation</p>
                                                @if ($payload['details']->accom_id == 1)
                                                    @php $venue = "Grand Margeherita Hotel"; @endphp
                                                @elseif ($payload['details']->accom_id == 2)
                                                    @php $venue = "Damai Beach Resort"; @endphp 
                                                @else
                                                    @php $venue = ""; @endphp 
                                                @endif
                                            <p class="col font-weight-bold black">{{ $venue }}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">No. of Stay</p>
                                                @if($payload['details']->night != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->night}} nights</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">No. of Occupancy</p>
                                                @if($payload['details']->no_occupancy != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->no_occupancy}} people</p>
                                                @else 
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">CV Date</p>
                                                @if($payload['details']->cv_start_date != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->cv_start_date}}</p>
                                                @else 
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">CV Expiry</p>
                                                @if($payload['details']->cv_exp_date != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->cv_exp_date}}</p>
                                            @else 
                                                    <p class="col font-weight-bold black"></p>
                                                @endif 
                                            </div>
                                            <div class="row">
                                                <p class="col">Voucher Apply To</p>
                                                @if($payload['details']->name != null && $payload['detail2'] != null)
                                                    <?php $attendees = $payload['details']->name.",".$payload['detail2']->name; ?>
                                                @elseif($payload['details']->name != null && $payload['detail2'] == null)
                                                    <?php $attendees = $payload['details']->name; ?>
                                                @elseif($payload['details']->name == null && $payload['detail2'] != null)
                                                    <?php $attendees = $payload['detail2']->name; ?>
                                                @endif

                                                <span class="col font-weight-bold black"><?php echo $attendees;?></span>
                                            </div>
                                        </div>
                                    </div>
                            <ul class="nav nav-tabs nav-fill pt-3" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab"
                                    aria-controls="home-fill" aria-selected="true">
                                    Attendee 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab"
                                    aria-controls="profile-fill" aria-selected="false">
                                    Attendee 2
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content pt-1">
                                <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                
                                    <div class="row pt-1">
                                        <div class="col-sm-6">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Basic</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contact</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col-sm-6">Name</p>
                                                <p class="col-sm-6 font-weight-bold black">{{$payload['details']->name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-6">NRIC</p>
                                                <p class="col-sm-6 font-weight-bold black">{{$payload['details']->nric}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">DOB</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->dob}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Gender</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->gender_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Marital Status</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->maritial_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Religion</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->religion}}</p>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Mobile No.</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->mobile_no}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Home No.</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->home_no}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Whatsapp No.</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->whatsapp_no}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Office No.</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->office_no}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Primary Email</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->primary_email}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Alternate Email</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->alt_email}}</p>
                                            </div>

                                        </div>
                                    </div>    

                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Sales Venue</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->venue_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Date</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->tour_date}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Time In</p>
                                                @if ($payload['details']->tour_time_in != null)
                                                    <p class="col font-weight-bold black">{{Carbon\Carbon::createFromFormat('H:i:s', $payload['details']->tour_time_in)->format('h:i A')}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Time Out</p>
                                                @if ($payload['details']->tour_time_out != null)
                                                    <p class="col font-weight-bold black">{{Carbon\Carbon::createFromFormat('H:i:s', $payload['details']->tour_time_out)->format('h:i A')}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Occupation</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->occupation}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Company</p>
                                                <p class="col font-weight-bold black">{{$payload['details']->company}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>  
                                <!-- 2nd attendeeeeeee -->
                                <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                    <div class="row pt-1">
                                        <div class="col-sm-6">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Basic</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4 class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contact</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col-sm-6">Name</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col-sm-6 font-weight-bold black">{{$payload['detail2']->name}}</p>
                                                @else
                                                    <p class="col-sm-6 font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-6">NRIC</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col-sm-6 font-weight-bold black">{{$payload['detail2']->nric}}</p>
                                                @else
                                                    <p class="col-sm-6 font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">DOB</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->dob}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Gender</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->gender_name}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Marital Status</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->maritial_name}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Religion</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->religion}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Mobile No.</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->mobile_no}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                                
                                            </div>
                                            <div class="row">
                                                <p class="col">Home No.</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->home_no}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Whatsapp No.</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->whatsapp_no}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Office No.</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['detail2']->office_no}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                            <div class="row">
                                                <p class="col">Primary Email</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->primary_email}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            
                                            </div>
                                            <div class="row">
                                                <p class="col">Alternate Email</p>
                                                @if($payload['detail2'] != null)
                                                    <p class="col font-weight-bold black">{{$payload['details']->alt_email}}</p>
                                                @else
                                                    <p class="col font-weight-bold black"></p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inlineForm">
                                    Print Voucher
                                    </button>
                                </div>
                            </div>
                        
                            <div class="row pt-1">
                                <div class="col">
                                    <a href="{{ url('/membership/'.$payload['details']->lead_id.'/'.$payload['details']->tour_id.'/new') }}" type="button" class="btn btn-primary ">Add Membership</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>  
            
        </div>

    </div>
</section>
<!-- Nav Filled Ends -->


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
<script src="{{asset('js/scripts/navs/navs.js')}}"></script>
@endsection
