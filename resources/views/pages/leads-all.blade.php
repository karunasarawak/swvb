@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}">
@endsection
{{-- page-styles --}}

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/file-uploaders/dropzone.css')}}">
@endsection

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Leads</h4>
                </div>
                <div class="card-content">
                    <div class="px-2 pt-1">
                        <a href="{{route('leads.new')}}" class="btn btn-outline-primary round mr-1 mb-1">New Lead</a>
                        <form action="{{ route('leads.upload')}}" class="m-2" method="POST" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <input type='file' name='file'>
                            <input type='submit' name='submit' value='Import'>
                        </form>
                    </div>
                    <div class="card-body card-dashboard">

                        <ul class="nav nav-tabs pt-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab"
                                aria-controls="home-fill" aria-selected="true">
                                Leads
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
                                    <table class="table leads-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Lead ID</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white">Creation Date</th>
                                                <th class="text-white">Creation Time</th>
                                                <th class="text-white">Telemarketer</th>
                                                <th class="text-white">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['leads'] as $lead)
                                                <tr></tr>
                                                    <td><a href="{{route('leads.details', $lead->lead_id)}}">{{$lead->lead_id}}</a></td>
                                                    <td>{{$lead->salutation}} {{$lead->name}}</td>

                                                    @if($lead->created_at != null)
                                                        <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->created_at)->format('d-m-Y')}}</td>
                                                        <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->created_at)->format('h:i A')}}</td>
                                                    @else
                                                        <td></td>
                                                        <td></td>
                                                    @endif

                                                    <td>{{$lead->sales_name}}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall">
                                                                    <a class="dropdown-item" href="{{route('tours.new', $lead->lead_id)}}" ><i class="bx bx-edit-alt mr-1"></i>Create Tour</a>
                                                                </button>
                                                                <form action="{{route('leads.archive', $lead->lead_id)}}" method="POST">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <input type="hidden" value="0" name="archive">
                                                                    <button class="bg-transparent border-0" type="submit">
                                                                        <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table leads-all">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">Lead ID</th>
                                                        <th class="text-white">Name</th>
                                                        <th class="text-white">Call Date</th>
                                                        <th class="text-white">Call Time</th>
                                                        <th class="text-white">Telemarketer</th>
                                                        <th class="text-white">Status</th>
                                                        <th class="text-white">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($payload))
                                                        @foreach($payload['leads'] as $lead)
                                                        <tr></tr>
                                                            <td><a href="{{route('leads.details', $lead->lead_id)}}">{{$lead->lead_id}}</a></td>
                                                            <td>{{$lead->salutation}} {{$lead->name}}</td>

                                                            @if($lead->created_at != null)
                                                                <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->created_at)->format('d-m-Y')}}</td>
                                                                <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->created_at)->format('h:i A')}}</td>
                                                            @else
                                                                <td></td>
                                                                <td></td>
                                                            @endif

                                                            <td>{{$lead->sales_name}}</td>
                                                            <td>Called</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                    </span>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall">
                                                                            <a class="dropdown-item" href="{{route('tours.new', $lead->lead_id)}}" ><i class="bx bx-edit-alt mr-1"></i>Create Tour</a>
                                                                        </button>
                                                                        <form action="{{route('leads.archive', $lead->lead_id)}}" method="POST">
                                                                            @csrf
                                                                            @method('patch')
                                                                            <input type="hidden" value="0" name="archive">
                                                                            <button class="bg-transparent border-0" type="submit">
                                                                                <a class="dropdown-item"><i class="bx bx-trash mr-1"></i> Archive</a>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>
{{-- <script src="{{asset('assets/js/uploads.js')}}"></script> --}}
@endsection
