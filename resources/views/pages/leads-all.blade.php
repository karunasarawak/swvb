@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

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
                <div class="card-header">
                    <h4 class="card-title">All Leads</h4>
                </div>
                <div class="card-content">
                    <div class="px-2">
                        {{-- <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">New Lead</a>
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a> --}}
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table leads-all">
                                <thead class="bg-swvb-cyan">
                                    <tr>
                                        <th class="text-white">Lead ID</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Creation Date</th>
                                        <th class="text-white">Creation Time</th>
                                        <th class="text-white">Telemarketer</th>
                                        <th class="text-white">Proceed</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($payload))

                                        @foreach ($payload['leads'] as $lead)
                                        <tr>
                                        <td>{{$lead->lead_id}}</td>
                                        <td>{{$lead->salutation_id}} {{$lead->name}}</td>
                                        <td>{{$lead->created_at->format("d F Y")}}</td>
                                        <td>{{$lead->created_at->format("h:i A")}}</td>
                                        <td>{{$lead->telemarketer_id}}</td>
                                            <td>
                                                <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                    <i class="bx bx-check-circle bx-md m-0 success"></i>
                                                </button>
                                                <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                    <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                                </button>
                                            </td>
                                            <td></td>
                                        </tr>
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
@endsection
