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
                <form action="{{route('leads.edit', $payload['details']->lead_id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="card-header d-flex justify-content-between bg-swvb-cyan">
                        <div class="row">
                            <h4 class="card-title text-white col">View Lead Details</h4>
                            <button type="button" class="btn btn-outline-white pl-1 col" x-show="original" @click="edit = true, original = false">Edit</button>
                            <!-- <button type="submit" x-show="edit" x-cloak class="btn btn-outline-white round mr-1 col">Save</button>
                            <button type="button" x-show="edit" x-cloak class="btn btn-outline-white round col" @click="edit = false, original = true">Close</button> -->
                        </div>
                    </div>
                    <div class="row pt-1 pl-1">
                        <div class="col">
                        @if($payload['details']->status == 1)
                            <div class="float-right" x-show="edit" x-cloak>
                                <button type="submit" class="btn btn-outline-primary round mr-1">Save</button>
                                <button type="button" class="btn btn-outline-primary round" @click="edit = false, original = true">Close</button>
                            </div>
                        </div>
                    </div>
                        @endif        
                        <div class="card-content">
                            <div class="card-body d-flex">
                                    <div class="col">
                                        <h5 class="swvb-blue"><strong>Basic</strong></h5>
                                        <div class="row">
                                            <p class="col-sm-5">Salutation</p>
                                            <p class="col" x-show="original">{{$payload['details']->salutation}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <select name="salutation" class="form-control">
                                                    @foreach ($payload['salutations'] as $salut)
                                                        @if($salut->salutation_id == $payload['details']->salutation_id)
                                                        <option value="{{$salut->salutation_id}}" selected>{{$salut->salutation}}</option>
                                                        @else
                                                        <option value="{{$salut->salutation_id}}">{{$salut->salutation}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div> 
                                        <div class="row">
                                            <p class="col-sm-5">Name</p>
                                            <p class="col" x-show="original">{{$payload['details']->name}}</p>
                                            <p  x-cloak x-show="edit"><input type="text" name="name" class="form-control" value="{{$payload['details']->name}}"></p>
                                        </div> 
                                    </div>  
                        
                                <div class="col">
                                    <h5 class="swvb-blue"><strong>Contact</strong></h5>
                                    <div class="row">
                                        <p class="col-sm-5">Mobile No.</p>
                                        <p class="col" x-show="original">{{$payload['details']->mobile_no}}</p>
                                        <p class="col" x-cloak x-show="edit"><input type="text" name="mobile_no" class="form-control" value="{{$payload['details']->mobile_no}}"></p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-5">Whatsapp</p>
                                        <p class="col" x-show="original">{{$payload['details']->whatsapp_no}}</p>
                                        <p class="col" x-cloak x-show="edit"><input type="text" name="whatsapp_no" class="form-control" value="{{$payload['details']->whatsapp_no}}"></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="swvb-blue"><strong>Others</strong></h5>
                                    <div class="row">
                                        <p class="col-sm-5">Credit Card Limit</p>
                                        <p class="col" x-show="original">RM {{$payload['details']->credit_card_limit}}</p>
                                        <p class="col" x-cloak x-show="edit"><input type="text" name="credit_card_limit" class="form-control" value="{{$payload['details']->credit_card_limit}}"></p>
                                    </div>
                                    <div class="row">
                                        <p class="col-sm-5">Telemarketer</p>
                                        <p class="col" x-show="original">{{$payload['details']->sales_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <select name="telemarketer_id" class="form-control">
                                                @foreach ($payload['telemarketer'] as $telem)
                                                    @if($telem->sales_team_id == $payload['details']->telemarketer_id)
                                                        <option value="{{$telem->sales_team_id}}" selected>{{$telem->sales_name}}</option>
                                                    @else
                                                        <option value="{{$telem->sales_team_id}}">{{$telem->sales_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </p>

                                    </div>
                                </div>
                            </div> 
                        </div>      
                </form>    
            </div>
        </div>
    </div>


   
        
            <div class="card">
                <div class="card-header d-flex justify-content-between pb- bg-swvb-cyan">
                    <div class="card-title">
                        <div class="row">
                        
                            <h4 class="card-title text-white col">Event Log</h4>
                            <button class="btn btn-outline-white col" data-toggle="modal" data-target="#addCall">Create Event</button>
                        </div>
                    </div>
                </div>

                {{-- Modal Start --}}

                <!-- Create Event Modal  -->
                <div class="modal fade text-left" id="addCall" tabindex="-1" role="dialog" aria-labelledby="addcalltitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-swvb-blue">
                                <h4 class="modal-title text-white" id="myModalLabel33">Create Event Log</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="bx bx-x"></i>
                                    </button>
                            </div>
                            <form action="{{route('leads.createEvent', $payload['details']->lead_id)}}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group controls">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                    <div class="controls">
                                                        <label>Lead ID</label>
                                                            <input type="text" class="form-control"  id="leadid" name="leadid" value="{{$payload['details']->lead_id}}"
                                                            data-validation-required-message="This field is required" required readonly> 
                                                    </div>
                                            </div>
                                        </div>    
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Type</label>
                                                    <select class="custom-select form-control" id="type" name="type"
                                                    data-validation-required-message="Please select a type" required>
                                                        <option value="">--</option>
                                                        @foreach($event['event_type'] as $type)
                                                            <option value="{{$type->el_type_id}}">{{$type->el_type_abbr}} - {{$type->el_type_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Category</label>
                                                    <select class="custom-select form-control" id="cat" name="cat"
                                                    data-validation-required-message="Please select a category" required>
                                                        <option value="">--</option>
                                                        @foreach($event['event_cat'] as $category)
                                                            <option value="{{$category->el_cat_id}}">{{$category->el_cat_abbr}} - {{$category->el_cat_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Title</label>
                                                        <input type="text" class="form-control"  id="title" name="title"
                                                        data-validation-required-message="This field is required" required> 
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-light-secondary">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Save</span>
                                    </button>
                                    
                                    <button type="button" class="close btn btn-light-secondary" data-dismiss="modal" aria-label="close">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                                
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive pt-3">
                            <table class="table table call-log">
                                <thead class="bg-swvb-cyan">
                                    <tr>
                                        <th class="text-white">ID</th>
                                        <!-- <th class="text-white">Name</th> -->
                                        <th class="text-white">Type</th>
                                        <th class="text-white">Category</th>
                                        <th class="text-white">Title</th>
                                        <th class="text-white">Date Created</th>
                                        <th class="text-white">Created By</th>
                                        <th class="text-white">Date Updated</th>
                                        <th class="text-white">Last Updated By</th>
                                        <th class="text-white" style="width:20%;" colspan="2">Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach($payload['events'] as $event)
                                     <tr class="show_row">
                                        <td>{{$event->el_id}}</td>
                                        <!-- <td>{{$event->lead->name}}</td> -->
                                        <td>{{$event->eventLogsType->el_type_name}}</td>
                                        <td>{{$event->eventLogsCategory->el_cat_name}}</td>
                                        <td>{{$event->title}}</td>
                                        <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->created_at)->format('d-m-Y')}}</td>
                                        <td>{{$event->created_by}}</td>
                                        <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->updated_at)->format('d-m-Y')}}</td>
                                        <td>{{$event->last_updated_by}}</td>
                                        <td>
                                            <button class="btn btn-outline-primary w-40" onclick="hiddenRow({{$loop->iteration}})">Show</button>
                                            <button class="btn btn-outline-primary"  data-toggle="modal" data-target="#leadsaddcall" 
                                            onclick="getEventID({{$event->el_id}}, {{$event->lead_id}})">Add Call</button>
                                        </td>
                                    </tr>
                                            <tr class="hidden1_row{{$loop->iteration}}" style="display:none;">
                                                <th>Call ID</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Call Length</th>
                                                <th>Start</th>
                                                <th>End</th>
                                                <th>Outcome</th>
                                                <th>Reason</th>
                                                <th>Remarks</th>
                                                <th>Actions</th>
                                            </tr>
                                       
                                            @foreach($event->callLogs as $calls)
                                                <tr class="hidden2_row{{$loop->iteration}}" style="display:none;">
                                                    <td>{{$calls->cl_id}}</td>
                                                    <td>{{$calls->init_date}}</td>

                                                    @if($calls->init_time != null)
                                                        <td>{{Carbon\Carbon::createFromFormat('H:i:s', $calls->init_time)->format('H:i A')}}</td>
                                                    @else
                                                        <td>{{$calls->init_time}}</td>
                                                    @endif

                                                    @if($calls->call_length != 0)
                                                        <td>{{$calls->call_length}} Minutes</td>
                                                    @else
                                                        <td></td>
                                                    @endif
                                                    
                                                    @if($calls->start_time != null)
                                                        <td>{{Carbon\Carbon::createFromFormat('H:i:s', $calls->start_time)->format('H:i A')}}</td>
                                                    @else
                                                        <td>{{$calls->start_time}}</td>
                                                    @endif

                                                    @if($calls->end_time != null)
                                                        <td>{{Carbon\Carbon::createFromFormat('H:i:s', $calls->end_time)->format('H:i A')}}</td>
                                                    @else
                                                        <td>{{$calls->end_time}}</td>
                                                    @endif

                                                    <td>{{$calls->outcome}}</td>
                                                    <td>{{$calls->reason}}</td>
                                                    <td>{{$calls->remarks}}</td>
                                                    <td>
                                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#update" 
                                                        onclick="getID({{$event->el_id}},{{$calls->lead_id}}, {{$calls->cl_id}})">Update Call</button>
                                                    </td>
                                                </tr>
                                        @endforeach                                         
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
</section>

<!-- Add Call -->
                                                
<div class="modal fade text-left" id="leadsaddcall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Add Calls</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('leads.addCall')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- <label>Event ID</label> -->
                    <div class="form-group">
                        <input type="hidden" id="event_id" name="event_id" class="form-control" readonly>
                    </div>
                    <!-- <label>Lead ID</label> -->
                    <div class="form-group">
                        <input type="hidden" id="lead_id" name="lead_id" class="form-control" readonly>
                    </div>
                    <label>Schedule Date</label>
                    <div class="form-group">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <label>Schedule Time</label>
                    <div class="form-group">
                        <input type="time"name="time" class="form-control">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</spsan>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Add</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Update Modal -->
<div class="modal fade text-left" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Update Call Log</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
        <form action="{{route('leads.updateCall')}}" method="POST">
            @csrf
            @method('patch')
            <div class="modal-body">
                <!-- <label>Call ID</label> -->
                <div class="form-group">
                    <input type="hidden" id="call_id2" name="call_id2" class="form-control" readonly>
                </div>
                <!-- <label>Event ID </label> -->
                <div class="form-group">
                    <input type="hidden" id="event_id2" name="event_id2" class="form-control" readonly>
                </div>
                <!-- <label>Lead ID </label> -->
                <div class="form-group">
                    <input type="hidden" id="lead_id2" name="lead_id2" class="form-control" readonly>
                </div>
                <label>Call Start Time</label>
                <div class="form-group">
                    <input type="time" name="start" class="form-control">
                </div>
                <label>Call End Time</label>
                <div class="form-group">
                    <input type="time" name="end" class="form-control">
                </div>
                <label>Outcome</label>
                <div class="form-group">
                    <select name="outcome" class="select2 form-control" required>
                        <option value="Proceed to Tour">Proceed to Tour</option>
                        <option value="Not to Proceed">Not to Proceed</option>
                        <option value="No Pickup">No Pickup</option>
                        <option value="Number not in Service">Number not in Service</option>
                        <option value="Wrong Recipient">Wrong Recipient</option>
                        <option value="Voice Mail">Voice Mail</option>
                        <option value="Rejected Call">Rejected Call</option>
                    </select>
                </div>
                <label>Reason</label>
                <div class="form-group">
                    <select name="reason" class="select2 form-control" required>
                        <option value="Not Interested">Not Interested</option>
                        <option value="Attended">Attended</option>
                        <option value="Owned Other Timeshare">Owned Other Timeshare</option>
                        <option value="Existing Member">Existing Member</option>
                    </select>
                </div>
                <label>Remarks</label>
                <div class="form-group">
                    <input type="text" name="remarks" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="submit" class="btn btn-primary ml-1">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Update</span>
            </button>
            </div>
        </form>
        </div>
    </div>
</div>                                               
{{-- Modal End --}}

<!-- Form wizard with step validation section end -->
{{-- vendor scripts --}}
@section('vendor-scripts')

<!-- Form wizard with step validation section end -->
@endsection
<script>
    function hiddenRow(count)
    {
        console.log(count);

        for (var a = 0; a < 10; a++)
        {
            var x = document.getElementsByClassName("hidden1_row" + count);
            var y = document.getElementsByClassName("hidden2_row" + count);

            if(x[a].style.display == 'none')
            {
                x[a].style.display = 'table-row'; 
                y[a].style.display = 'table-row'; 
            }
            else
            {
                x[a].style.display = 'none';
                y[a].style.display = 'none';
            }
            
        }
    }
    function getID(event_id2, lead_id2, call_id2)
    {
        // alert("CALL ID:"+ call_id2 + "EventID: " + event_id2 + " Lead ID: " + lead_id2);
        document.getElementById("call_id2").value = call_id2;
        document.getElementById("event_id2").value = event_id2;
        document.getElementById("lead_id2").value = lead_id2;
    }

    function getEventID(event_id, lead_id)
    {
        // alert("EventID: " + event_id + " Lead ID: " + lead_id);
        document.getElementById("event_id").value = event_id;
        document.getElementById("lead_id").value = lead_id;
    }

   
</script>
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
