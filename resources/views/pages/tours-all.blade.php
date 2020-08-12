@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Tours')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">

@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section id="nav-filled">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Tours</h4>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">

                        <ul class="nav nav-tabs pt-3" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab"
                                aria-controls="home-fill" aria-selected="true">
                                Tours
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab"
                                aria-controls="profile-fill" aria-selected="false">
                                Call Reminder
                                </a>
                            </li>
                            
                        </ul>

                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                <div class="table-responsive">
                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                
                                                <th class="text-white">Tour ID</th>
                                                <th class="text-white">Lead ID</th>
                                                <th class="text-white expanded">Attendees</th>
                                                
                                                <th class="text-white">Date</th>
                                                <th class="text-white">Scheduled Time</th>
                                                <th class="text-white">Time In</th>
                                                <th class="text-white">Time Out</th>
                                                <th class="text-white">Venue</th>
                                                
                                                <th class="text-white">Sales Personnel</th>
                                                <th class="text-white">Attendance</th>
                                                <th class="text-white" colspan="2">Action</th>
                                            </tr>
                                        </thead>    
                                    
                                        <tbody>
                                            @if(isset($payload))
                                                    @foreach($payload['tours_s'] as $tours)
                                                        @if(isset($payload['tours_s']))
                                                            <tr> 
                                                                <td><a href="{{ route('tours.showDetails', $tours->tour_id)}}">{{$tours->tour_id}}</a></td>
                                                                <td>{{$tours->lead_id1}}</td>
                                                                <td class="expanded">{{ $tours->salutation }} {{ $tours->name }}</td>

                                                                {{-- @if($tours->name != null && $tours->name2 != null)
                                                                    <td>
                                                                        <div>{{ $tours->salutation }} {{ $tours->name }},</div>
                                                                        <div>{{ $tours->salute2 }} {{ $tours->name2 }}</div>
                                                                    </td>
                                                                @else
                                                                    <td>{{$tours->salutation}} {{$tours->name}}</td>
                                                                @endif --}}

                                                                <td class="expanded">{{$tours->tour_date}}</td>
                                                                <td>{{Carbon\Carbon::createFromFormat('H:i:s', $tours->tour_initial_time)->format('h:i A')}}</td>

                                                                @if($tours->tour_time_in != null)
                                                                    <td>{{Carbon\Carbon::createFromFormat('H:i:s', $tours->tour_time_in)->format('h:i A')}}</td>
                                                                @else
                                                                    <td>{{$tours->tour_time_in}}</td>
                                                                @endif

                                                                @if($tours->tour_time_in != null)
                                                                    <td>{{Carbon\Carbon::createFromFormat('H:i:s', $tours->tour_time_out)->format('h:i A')}}</td>
                                                                @else
                                                                    <td>{{$tours->tour_time_out}}</td>
                                                                @endif
                                                                
                                                                <td>{{$tours->venue_name}}</td>
                                                                <td>{{$tours->sales_name}}</td>

                                                                
                                                                <!-- Haven decided to attend -->
                                                                @if($tours->tour_attend == null)
                                                                    <td>
                                                                        <div class="custom-control-inline">
                                                                            <button class="border-0 bg-transparent" data-toggle="modal" data-target="#addCall">                                                                    
                                                                                <a href="{{route('tours.attendTour', $tours->tour_id)}}">
                                                                                    <i class="bx bx-check-circle bx-md m-0 "></i>
                                                                                </a>
                                                                            </button>
                                                                            <form action="{{route('tours.attendTour', $tours->tour_id)}}" method="GET">
                                                                                @csrf
                                                                                <input type="hidden" value="3" name="notAttend">
                                                                                <button type="submit" class="border-0 bg-transparent">
                                                                                    <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                                                </button>
                                                                            </form>
                                                                        </div>        
                                                                    </td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                            </span>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm" onclick="tokenModal({{$tours->tour_id}},'{{$tours->tour_date}}', '{{$tours->tour_initial_time}}','{{$tours->sales_venue_id}}')">
                                                                                    <a class="dropdown-item"><i class="bx bx-edit-alt mr-1"></i> Edit</a>
                                                                                </button>
                                                                                <form action="{{ route('tours.archive', $tours->tour_id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('patch')
                                                                                    <input type="hidden" value="0" name="archive">
                                                                                    <button class="bg-transparent border-0" type="submit" class="dropdown-item">
                                                                                        <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                <!-- Attend the Tour -->
                                                                @elseif($tours->tour_attend == 1)
                                                                    <td><i class="bx bx-check-circle bx-md m-0 success"></i></td>
                                                                    <td>
                                                                        <div class="dropdown">
                                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                            </span>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall">
                                                                                    <a class="dropdown-item" href="{{route('members.createPage', ['lead_id'=>$tours->lead_id1, 'tour_id'=>$tours->tour_id])}}" >
                                                                                        <i class="bx bx-edit-alt mr-1"></i> Create Membership</a>
                                                                                </button>
                                                                                <form action="{{ route('tours.archive', $tours->tour_id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('patch')
                                                                                    <input type="hidden" value="0" name="archive">
                                                                                    <button class="bg-transparent border-0" type="submit" class="dropdown-item">
                                                                                        <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                <!-- Do not attend the Tour -->
                                                                @elseif ($tours->tour_attend == 2)
                                                                    <td>
                                                                        <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                                    </td>
                                                                    <td>
                                                                        <!-- <button class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#addCall">Archive</button> -->
                                                                        <div class="dropdown">
                                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                            </span>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <form action="{{ route('tours.archive', $tours->tour_id) }}" method="POST">
                                                                                    @csrf
                                                                                    @method('patch')
                                                                                    <input type="hidden" value="0" name="archive">
                                                                                    <button class="bg-transparent border-0" type="submit" class="dropdown-item">
                                                                                        <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                <div class="table-responsive">
                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    
                                                    <th class="text-white">Tour ID</th>
                                                    <th class="text-white">Lead ID</th>
                                                    <th class="text-white expanded">Attendees</th>
                                                    
                                                    <th class="text-white">Date</th>
                                                    <th class="text-white">Scheduled Time</th>
                                                    
                                                    
                                                    
                                                    <th class="text-white">Telemarketer</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white" colspan="2">Action</th>
                                                </tr>
                                            </thead>    
                                        
                                            <tbody>
                                                @if(isset($payload))
                                                        @foreach($payload['tours_s'] as $tours)
                                                            @if(isset($payload['tours_s']))
                                                                <tr> 
                                                                    <td><a href="{{ route('tours.showDetails', $tours->tour_id)}}">{{$tours->tour_id}}</a></td>
                                                                    <td>{{$tours->lead_id1}}</td>
                                                                    <td class="expanded">{{ $tours->salutation }} {{ $tours->name }}</td>

                                                                    {{-- @if($tours->name != null && $tours->name2 != null)
                                                                        <td>
                                                                            <div>{{ $tours->salutation }} {{ $tours->name }},</div>
                                                                            <div>{{ $tours->salute2 }} {{ $tours->name2 }}</div>
                                                                        </td>
                                                                    @else
                                                                        <td>{{$tours->salutation}} {{$tours->name}}</td>
                                                                    @endif --}}

                                                                    <td class="expanded">{{$tours->tour_date}}</td>
                                                                    <td>{{Carbon\Carbon::createFromFormat('H:i:s', $tours->tour_initial_time)->format('h:i A')}}</td>

                                                                    
                                                                    <td>{{$tours->sales_name}}</td>

                                                                    
                                                                    <!-- Haven decided to attend -->
                                                                    @if($tours->tour_attend == null)
                                                                        <td>
                                                                            <div class="custom-control-inline">
                                                                                <button class="border-0 bg-transparent" data-toggle="modal" data-target="#addCall">                                                                    
                                                                                    <a href="{{route('tours.attendTour', $tours->tour_id)}}">
                                                                                        <i class="bx bx-check-circle bx-md m-0 "></i>
                                                                                    </a>
                                                                                </button>
                                                                                <form action="{{route('tours.attendTour', $tours->tour_id)}}" method="GET">
                                                                                    @csrf
                                                                                    <input type="hidden" value="3" name="notAttend">
                                                                                    <button type="submit" class="border-0 bg-transparent">
                                                                                        <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                                                    </button>
                                                                                </form>
                                                                            </div>        
                                                                        </td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm" onclick="tokenModal({{$tours->tour_id}},'{{$tours->tour_date}}', '{{$tours->tour_initial_time}}','{{$tours->sales_venue_id}}')">
                                                                                        <a class="dropdown-item"><i class="bx bx-edit-alt mr-1"></i> Edit</a>
                                                                                    </button>
                                                                                    <form action="{{ route('tours.archive', $tours->tour_id) }}" method="POST">
                                                                                        @csrf
                                                                                        @method('patch')
                                                                                        <input type="hidden" value="0" name="archive">
                                                                                        <button class="bg-transparent border-0" type="submit" class="dropdown-item">
                                                                                            <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    <!-- Attend the Tour -->
                                                                    @elseif($tours->tour_attend == 1)
                                                                        <td><i class="bx bx-check-circle bx-md m-0 success"></i></td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall">
                                                                                        <a class="dropdown-item" href="{{route('members.createPage', ['lead_id'=>$tours->lead_id1, 'tour_id'=>$tours->tour_id])}}" ><i class="bx bx-edit-alt mr-1"></i> Create Membership</a>
                                                                                    </button>
                                                                                    <form action="{{ route('tours.archive', $tours->tour_id) }}" method="POST">
                                                                                        @csrf
                                                                                        @method('patch')
                                                                                        <input type="hidden" value="0" name="archive">
                                                                                        <button class="bg-transparent border-0" type="submit" class="dropdown-item">
                                                                                            <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    <!-- Do not attend the Tour -->
                                                                    @elseif ($tours->tour_attend == 2)
                                                                        <td>
                                                                            <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                                        </td>
                                                                        <td>
                                                                            <!-- <button class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#addCall">Archive</button> -->
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <form action="{{ route('tours.archive', $tours->tour_id) }}" method="POST">
                                                                                        @csrf
                                                                                        @method('patch')
                                                                                        <input type="hidden" value="0" name="archive">
                                                                                        <button class="bg-transparent border-0" type="submit" class="dropdown-item">
                                                                                            <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif
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
</section>

<!-- pop out modal box for edit -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Update Scheduled Time</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
            </div>
            <form action="{{route('tours.edit')}}" method="POST">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="form-group controls">       
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="controls">
                                <!-- <label>TourID</label> \-->
                                <input type="hidden" class="form-control" value="" id="tourid" name="tourid"
                                    data-validation-required-message="This field is required" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="controls">
                                <label>Date</label>
                                    <input type="date" class="form-control" value="01 June 2020" id="date" name="date"
                                    data-validation-required-message="This field is required" required>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-sm-12">
                        <div class="form-group">
                                <div class="controls">
                                    <label>Initial Scheduled Time</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" class="form-control" placeholder="1:00 PM" id="time" name="time"
                                            data-validation-required-message="This field is required" required>
                                                
                                        </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                                <div class="controls">
                                    <label>Venue</label>
                                        <div class="position-relative has-icon-left">
                                            <select name="venue" id="venue" class="custom-select" id="" data-validation-required-message="Please select a venue." required>
                                            <option value="0">--</option>
                                                @if(isset($venues))
                                                    @foreach($venues as $venue)
                                                        <option value="{{$venue->sales_venue_id}}">{{$venue-> venue_name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                </div>
                        </div>
                    </div>
                       
                    </div>
                </div>

                     
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                    
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal" aria-label="close">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function tokenModal($id, $date, $time, $venue)
    {
        document.getElementById("tourid").value = $id;
        document.getElementById("date").value = $date; 
        document.getElementById("time").value = $time;
        document.getElementById("venue").value = $venue;
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
