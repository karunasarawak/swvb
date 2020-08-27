@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Event Logs Details')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@php 
    use App\Http\Controllers\EventLogsController;
    use App\Http\Controllers\Calculations;
@endphp


@section('content')
<!-- Zero configuration table -->
<section id="popover-triggers">
    <div class="row">
        <div class="col-12">
            <!-- Membership Information -->
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Membership Information</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-sm-3">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member's Information</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Last Point Allocation</p>
                            </div>
                            <div class="col-sm-3 pl-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Status</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <p class="col">Salutation</p>
                                    <p class="col font-weight-bold black">{{ $eventDetail->salutation }}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">{{ $eventDetail->name }}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Mobile Contact</p>
                                    <p class="col font-weight-bold black">{{ $eventDetail->mobile_no }}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Whatsapp</p>
                                    <p class="col font-weight-bold black">{{ $eventDetail->whatsapp_no }}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Package</p>
                                    <p class="col font-weight-bold black">{{ $eventDetail->package }}</p>
                                </div>
                                <div class="row">
                                    <p class="col">Ext. Membership</p>
                                    <p class="col font-weight-bold black">-</p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    @if($eventDetail->mbrship_status == 0)
                                        <p class="col font-weight-bold black">Pending</p>
                                    @elseif($eventDetail->mbrship_status == 1)
                                        <p class="col font-weight-bold black">Be Back</p>
                                    @elseif($eventDetail->mbrship_status == 2)
                                        <p class="col font-weight-bold black">Active</p>
                                    @elseif($eventDetail->mbrship_status == 3)
                                        <p class="col font-weight-bold black">Suspend</p>
                                    @elseif($eventDetail->mbrship_status == 4)
                                        <p class="col font-weight-bold black">Terminate</p>
                                    @elseif($eventDetail->mbrship_status == 5)
                                        <p class="col font-weight-bold black">Suspend</p>
                                    @elseif($eventDetail->mbrship_status == 6)
                                        <p class="col font-weight-bold black">Deceased</p>
                                    @elseif($eventDetail->mbrship_status == 6)
                                        <p class="col font-weight-bold black">Write Off</p>
                                    @endif
                                </div>
                                <div class="row">
                                    <p class="col-sm-6">Entitlement</p>
                                    <p class="col-sm-6 font-weight-bold black">{{ $eventDetail->package_wd }}WD {{ $eventDetail->package_we }}WE</p>
                                </div>
                                
                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="table">
                                            <table class="table leads-all" style="width:100%;">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">Term</th>
                                                        <th class="text-white">Pts</th>
                                                        <th class="text-white">Allocated</th>
                                                        <th class="text-white">Expiry</th>
                                                        <th class="text-white">Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pointAllocate as $point)
                                                        <tr>
                                                            <td>{{ $point->term }}</td>
                                                            <td>{{ $point->amount_allocated }}</td>
                                                            <td>{{ $point->alloc_date }}</td>
                                                            <td>{{ $point->exp_date }}</td>
                                                            <td>{{ $point->balance }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 pl-4">
                                <div class="row">
                                    <p class="col-sm-7">Paid (%)</p>
                                    <p class="col font-weight-bold black"></p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">AMF Outstanding</p>
                                    <p class="col font-weight-bold black">RM @php echo Calculations::getOutstandingAmf($eventDetail->mbrship_id) @endphp</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Installment Outstanding</p>
                                    <p class="col font-weight-bold black">RM @php echo Calculations::getOutstandingInstallation($eventDetail->mbrship_id)@endphp</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Other Outstanding</p>
                                    <p class="col font-weight-bold black">RM </p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Reservation Fee</p>
                                    <p class="col font-weight-bold black">RM </p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Membership Card Fee</p>
                                    <p class="col font-weight-bold black">RM </p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Transfer Fee</p>
                                    <p class="col font-weight-bold black">RM </p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Administration Fee</p>
                                    <p class="col font-weight-bold black">RM </p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Total Outstanding</p>
                                    <p class="col font-weight-bold black">RM @php echo Calculations::getTotalOutstanding($eventDetail->mbrship_id)@endphp</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Over Payment</p>
                                    <p class="col font-weight-bold black">RM </p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>  
            </div>    

            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Event Details</h4>
                </div>
                <div class="card-content">
                    <div class="col pt-1 pl-1">
                        <div class="row">
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Details</p>
                            </div>
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Creation</p>
                            </div>
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Refer</p>
                            </div>
                        </div>             
                    </div>
                        <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Type</p>
                                        <p class="col font-weight-bold black">{{ $eventDetail->el_type_name }}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Category</p>
                                        <p class="col font-weight-bold black">{{ $eventDetail->el_cat_name }}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Title</p>
                                        <p class="col font-weight-bold black">{{ $eventDetail->el_title }}</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Description</p>
                                        <p class="col font-weight-bold black">{{ $eventDetail->el_remarks }}</p>
                                    </div>
                                    
                                </div>

                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Created by</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->el_created_by }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Created Date</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->el_created_at }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Last Updated By</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->el_updated_by }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Date Updated</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->el_updated_at }}</p>
                                        </div>
                                        
                                    </div>

                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Assign to</p>
                                            @if($eventDetail->el_assign_type == 1)
                                                <p class="col font-weight-bold black">{{ $eventDetail->staff_name }}</p>
                                            @elseif($eventDetail->el_assign_type == 2)
                                                <p class="col font-weight-bold black">{{ $eventDetail->dept }}</p>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <p class="col">Date Created</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->el_created_at }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Date to Resolved</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->el_to_resolve_at }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Reserve Using</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->reservation_type }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Communication Channel</p>
                                            <p class="col font-weight-bold black">{{ $eventDetail->com_channel }}</p>
                                        </div>
                                        
                                    </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row card-title">
                        <h4 class="text-white ml-1">Communication log</h4>
                        <button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#newcl">New</button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col">
                                <div class="card-body card-dashboard">
                                    <div class="table">
                                        <table class="table leads-all" style="width:100%;">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Ref No.</th>
                                                    <th class="text-white">Date</th>
                                                    <th class="text-white">Start Time</th>
                                                    <th class="text-white">End Time</th>
                                                    <th class="text-white">Call Length</th>
                                                    <th class="text-white">Outcome</th>
                                                    <th class="text-white">Communication Channel</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Remarks</th>
                                                    <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($comLog as $com)
                                                    <tr>
                                                        <td>{{ $com->cl_id }}</td>
                                                        <td>{{ $com->init_date }}</td>
                                                        <td>{{Carbon\Carbon::createFromFormat('H:i:s', $com->start_time)->format('h:i A')}}</td>
                                                        <td>{{Carbon\Carbon::createFromFormat('H:i:s', $com->end_time)->format('h:i A')}}</td>
                                                        <td>{{ $com->call_length }} minutes</td>
                                                        <td>{{ $com->outcome }}</td>
                                                        <td>{{ $com->com_channel }}</td>

                                                        @if($com->cl_status == 0)
                                                            <td>Unresolved</td>
                                                        @elseif ($com->cl_status == 1)
                                                            <td>Resolved</td>
                                                        @endif

                                                        <td>{{ $com->remarks }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                </span>
                                                                
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#upload" onclick="getCallID({{ $com->cl_id }})">
                                                                        <a class="dropdown-item"><i class="bx bx bx-upload mr-1"></i>Upload Attachments</a>
                                                                    </button>
                                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#attach{{ $loop->iteration }}">
                                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i>Show Attachments</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        @php $attach = EventLogsController::showAttachments($com->cl_id) @endphp
                                                        
                                                        <div class="modal fade text-left" id="attach{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                <div class="modal-content" style="width:200%;">
                                                                    <div class="modal-header bg-swvb-blue">
                                                                        <h4 class="modal-title text-white" id="myModalLabel33">Attachments</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" a ria-label="Close">
                                                                            <i class="bx bx-x"></i>
                                                                        </button>
                                                                    </div>

                                                                    
                                                                    <div class="modal-body" style="overflow:hidden;">
                                                                        <div class="row">
                                                                            <div class="col-sm-3">
                                                                                <div class="form-group controls">
                                                                                    <p class="font-weight-bold black">Title</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <div class="form-group controls">
                                                                                    <p class="font-weight-bold black">Document</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-2">
                                                                                <div class="form-group controls">
                                                                                    <p class="font-weight-bold black">Uploaded By</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <div class="form-group controls">
                                                                                    <p class="font-weight-bold black">Remarks</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            @foreach($attach as $a)
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group controls">
                                                                                        <p>{{ $a->doc_title }}</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group controls">
                                                                                        <p>{{ $a->doc_directory }}</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <div class="form-group controls">
                                                                                        <p>{{ $a->doc_created_by }}</p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-3">
                                                                                    <div class="form-group controls">
                                                                                        <p>{{ $a->remarks }}</p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-sm-1">
                                                                                    <button class="bg-transparent border-0">
                                                                                        <a class="dropdown-item" href="{{ route('event.download', $a->doc_directory) }}"><i class="bx bx-download"></i></a>
                                                                                    </button>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>  
                </div>    
            </div>  
                    
            
        </div>                
    </div>   
</section>  

<!-- pop out modal box for communication log status -->
<div class="modal fade text-left" id="newcl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Communication Log</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('event.newCom', ['event_id'=>$eventDetail->el_id, 'lead_id'=>$eventDetail->lead_id] ) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Start Time</label>
                            <input type="time" name="start_time" class="form-control"  required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>End Time</label>
                            <input type="time" name="end_time" class="form-control"  required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
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
                        </div>
                    </div>

                    

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Communication Channel</label>
                            <select name="com_channel" class="custom-select" required>
                                <option value="">--</option>
                                @foreach($com_channel as $com)
                                    <option value="{{ $com->com_channel_id }}">{{ $com->com_channel }}</option>
                                @endforeach
                            </select> 
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Status</label>
                            <select name="status" class="custom-select" required>
                                <option value="">--</option>
                                <option value="0">Unresovled</option>
                                <option value="1">Resolved</option>
                            </select> 
                        </div>
                    </div>

                    {{-- <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Deadline to Resolved</label>
                            <input type="date" name="date_to_resolve" class="form-control"  required>
                        </div>
                    </div> --}}

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Remarks</label>
                            <input type="text" name="remarks" class="form-control" row="3" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="submit" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Upload Attachment Modal-->
<div class="modal fade text-left" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="width:160%;">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Upload Attachments</h4>
                <button type="button" class="close" data-dismiss="modal" a ria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group controls">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="--" required>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            {{-- <label>Call Log ID</label> --}}
                            <input type="hidden" name="call_id" class="form-control" id="call_id" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group controls">
                            <label>Uploads</label>
                            <div class="custom-file">
                                <input type="file" name="file1" class="custom-file-input" id="inputGroupFile01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group controls">
                            <label>Remarks</label>
                            <input type="text" name="remark1" class="form-control" placeholder="--">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group controls">
                            <div class="custom-file">
                                <input type="file" name="file2" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group controls">
                            <input type="text" name="remark2" class="form-control" placeholder="--">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group controls">
                            <div class="custom-file">
                                <input type="file" name="file3" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group controls">
                            <input type="text" name="remark3" class="form-control" placeholder="--">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="submit" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $('#myModal').on('hidden', function(){
        $('#dialog').modalPopover('toggle')
    })

    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    
    if(exist)
    {
      alert(msg);
    }

    function getCallID(call_id)
    {
        // alert(call_id)
        document.getElementById('call_id').value = call_id;
    }
</script>
<!--/ Zero configuration table -->
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
<script src="{{asset('js/scripts/popover/popover.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection

