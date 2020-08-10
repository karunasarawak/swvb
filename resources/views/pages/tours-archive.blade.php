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
                    <div class="px-2">
                        {{-- <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">New Lead</a>
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a> --}}
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Lead ID</th>
                                        <th class="text-white">Tour ID</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Attendee(s)</th>
                                        <th class="text-white">Date</th>
                                        <th class="text-white">Time In</th>
                                        <th class="text-white">Time Out</th>
                                        <th class="text-white">Venue</th>
                                        <th class="text-white">Telemarketer</th>
                                        <th class="text-white">Sales Personnel</th>
                                        <th class="text-white">Attendance</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payload['allArchive'] as $archive)
                                        <tr>
                                            <td>{{ $archive->lead_id1 }}</td>
                                            <td>{{ $archive->tour_id }}</td>
                                            <td>{{ $archive->salutation }} {{ $archive->name }}</td>
                                            <td>???</td>
                                            <td>{{ $archive->tour_date }}</td>
                                            @if($archive->tour_time_in != null)
                                                <td>{{ Carbon\Carbon::createFromFormat('H:i:s', $archive->tour_time_in)->format('h:i A') }}</td>
                                            @else
                                                <td></td>
                                            @endif()
                                            
                                            @if($archive->tour_time_out != null)
                                                <td>{{ Carbon\Carbon::createFromFormat('H:i:s', $archive->tour_time_out)->format('h:i A') }}</td>
                                            @else
                                                <td></td>
                                            @endif
                                            
                                            <td>{{ $archive->venue_name }}</td>
                                            <td>J??</td>
                                            <td>{{ $archive->sales_name }}</td>

                                            @if($archive->tour_status == null)
                                                <td>Haven Attended</td>
                                            @elseif($archive->tour_status == 1)
                                                <td>Attended</td>
                                            @elseif($archive->tour_status == 2)
                                                <td>Not Attended</td>
                                            @else
                                                <td>Unknown</td>
                                            @endif

                                            <td>
                                                <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                    <i class="bx bx-check-circle bx-md m-0 success"></i>
                                                </button>
                                                <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                    <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                </button>
                                            </td>
                                            <td><button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                    Reactivate
                                                </button>
                                            </td>
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
</section>
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

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
