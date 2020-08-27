@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Event Logs')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section >
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="card-title">
                        <div class="row">
                            <h4 class="col card-title text-white">Event Logs<a href="" class="btn btn-outline-white text-white round ml-1" data-toggle="modal" data-target="#inlineForm">New</a></h4>                           
                            <div class="col-md-4">
                                <fieldset class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="px-2 pt-1" style="margin:1.5%;">
                        <button type="button" class="btn btn-primary"><a href="{{ url('/acceventlogs') }}" class="text-white">Account Event Logs</a></button>(This button is for demostration purpose only, account has different format)
                    </div>

                    <div class="card-body card-dashboard">
                        <div class="table">
                            <table class="table tours-all" style="width:100%;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-white">ID</th>
                                        <th class="text-white">Membership</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Type</th>
                                        <th class="text-white">Category</th>
                                        <th class="text-white">Title</th>
                                        <th class="text-white">Created By</th>
                                        <th class="text-white">Last Updated By</th>
                                        <th class="text-white">Date Updated</th>
                                        <th class="text-white">Assign To</th>
                                        <th class="text-white">Date Resolved</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                    <tbody>
                                        @foreach($eventLogs as $event)
                                            <tr>
                                                <td><a href="{{ route('event.details',$event->el_id) }}">{{ $event->el_id }}</a></td>
                                                <td>{{ $event->mbrship_no }}</td>
                                                <td>{{ $event->name }}</td>
                                                <td>{{ $event->el_type_name }}</td>
                                                <td>{{ $event->el_cat_name }}</td>
                                                <td>{{ $event->el_title }}</td>
                                                <td>{{ $event->el_created_by }}</td>
                                                <td>{{ $event->el_updated_at }}</td>
                                                <td>{{ $event->el_updated_by }}</td>

                                                @if($event->el_assign_type == 1)
                                                    <td>{{ $event->staff_name }}</td>
                                                @elseif($event->el_assign_type == 2)
                                                    <td>{{ $event->dept }}</td>
                                                @endif
                                                <td>{{ $event->el_resolve_at }}</td>
                                                
                                                @if($event->el_status == 0)
                                                    <td>Unresolved</td>
                                                @elseif($event->el_status == 0)
                                                    <td>Resolved</td>
                                                @endif

                                                <td> 
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"><button class="bg-transparent border-0" data-toggle="modal" data-target="#update" onclick="getEventID({{ $event->el_id }})">
                                                                <i class="bx bx-pencil mr-1"></i>Update
                                                            </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" x-data="{edit:false, original:true}">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Create Event Log</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
            </div>
            <form action="{{ route('event.create') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">   
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Membership</label>
                                <select name="mbrship_id" class="custom-select" required>
                                    <option value="">--</option>
                                    @foreach($payload['mbr'] as $mbr)
                                        <option value="{{ $mbr->mbrship_id }}">{{ $mbr->mbrship_no }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="--" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Type</label>
                            <select name="el_type" class="custom-select" required>
                                <option value="">--</option>
                                @foreach($payload['el_type'] as $type)
                                    <option value="{{ $type->el_type_id }}">{{ $type->el_type_name }}</option>
                                @endforeach
                            </select>   
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Category</label>
                                <select name="el_cat" class="custom-select" required>
                                    <option value="">--</option>
                                    @foreach($payload['el_cat'] as $cat)
                                        <option value="{{ $cat->el_cat_id }}">{{ $cat->el_cat_name }}</option>
                                    @endforeach
                                </select>   
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Location</label>
                                <select name="branch" class="custom-select" required>
                                    <option value="">--</option>
                                    @foreach($payload['branch'] as $branch)
                                        <option value="{{ $branch->branch_id }}">{{ $branch->branch_name }}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Communication Channel</label>
                                <select name="com_channel" class="custom-select" required>
                                    <option value="">--</option>
                                    @foreach($payload['com_channel'] as $com)
                                        <option value="{{ $com->com_channel_id }}">{{ $com->com_channel }}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Reservation Type</label>
                                <select name="reservation_type" class="custom-select" required>
                                    <option value="">--</option>
                                    <option value="Entitlement">Entitlement</option>
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Date to Be Resolved</label>
                                <input type="date" name="date_to_resolve" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6" style="margin-top:4%;">
                            <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio">
                                        <input type="radio" value="1" name="assign" id="radio2" @click="edit=true, original=false" checked>
                                        <label for="radio2">Individual</label>
                                    </div>
                                </fieldset>
                            </li> 

                            <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio">
                                        <input type="radio" value="2" name="assign" value="2" id="d" @click="edit=false, original=true" >
                                        <label for="d">Department</label>
                                    </div>
                                </fieldset>
                            </li>
                        </div>

                        <div class="col-sm-6" x-cloak x-show="edit" >
                            <div class="form-group controls">
                                <label>Assigned to Individual</label>
                                <select name="assign_indiv" class="custom-select" required>
                                    <option value="">--</option>
                                    @foreach($payload['staff'] as $staff)
                                        <option value="{{ $staff->staff_id }}">{{ $staff->staff_code }} - {{ $staff->staff_name }}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-6" x-cloak x-show="original" >
                            <div class="form-group controls">
                                <label>Assigned to Department</label>
                                <select name="assign_dept" class="custom-select" required>
                                    <option value="">--</option>
                                    @foreach($payload['department'] as $dept)
                                        <option value="{{ $dept->dept_id }}">{{ $dept->dept }}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>                    

                        <div class="col-sm-12">
                            <div class="form-group controls">
                                <label>Remarks</label>
                                <fieldset class="invoice-address form-group">
                                    <textarea class="form-control" rows="4" name="remarks" placeholder="-"></textarea>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="submit" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none">Save</i>
                            {{-- <span class="d-none d-sm-block"></span> --}}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- pop out modal box for resolved-->
<div class="modal fade text-left" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" >
            <div class="modal-header bg-swvb-cyan">
                <h4 class="modal-title text-white" id="myModalLabel33">Update</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('event.update') }}" method="POST">
                @csrf 
                @method('patch')
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Event Log ID</label>
                            <input type="hidden" name="event_id" class="form-control" id="event_id" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Status</label>
                            <select name="status" class="custom-select" required>
                                <option value="0">Unresolved</option>
                                <option value="1">Resolved</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Date Resolved</label>
                            <input type="date" name="date_resolve" class="form-control" required>
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

<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script>
    function getEventID(event_id)
    {
        // alert(event_id)
        document.getElementById("event_id").value = event_id;
    }
</script>

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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection