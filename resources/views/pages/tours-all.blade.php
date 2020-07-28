@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Tours')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Tours</h4>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        
                                        <th class="text-white">Tour ID</th>
                                        <th class="text-white">Lead ID</th>
                                        <th class="text-white">Attendees</th>
                                        
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
                                                        <td>{{$tours->salutation}} {{$tours->name}}</td>
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
                                                                <button class="border-0 bg-transparent" data-toggle="modal" data-target="#addCall">                                                                    
                                                                    <a href="{{route('tours.attendTour', $tours->tour_id, '1')}}">
                                                                        <i class="bx bx-check-circle bx-md m-0 "></i>
                                                                    </a>
                                                                </button>
                                                                <form action="{{route('tours.attendTour', $tours->tour_id)}}" method="GET">
                                                                    @csrf
                                                                    <input type="hidden" value="2" name="notAttend">
                                                                    <button type="submit" class="border-0 bg-transparent">
                                                                        <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            <td>

                                                            <!-- DELETE THIS -->
                                                                <div class="row">
                                                                    <button class="btn btn-outline-primary round mr-1 mb-1 " data-toggle="modal" data-target="#inlineForm" 
                                                                    onclick="tokenModal({{$tours->tour_id}},'{{$tours->tour_date}}', '{{$tours->tour_initial_time}}','{{$tours->sales_venue_id}}')">Edit</button>
                                                                </div>
                                                                <div class="row">
                                                                <button class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#addCall">Archive</button>
                                                            </div>
                                                                <div class="dropdown">
                                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                    data-toggle="dropdown" aria-haspopup="f" aria-expanded="false" role="menu">
                                                                    </span>
                                                                   
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
                                                                        <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall">
                                                                            <a class="dropdown-item" href="#" ><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                        </button>
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
                                                                        <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall"> 
                                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
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
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
