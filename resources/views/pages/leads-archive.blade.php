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
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Leads</h4>
                </div>
                <div class="card-content">
                    <div class="px-2">
                        {{-- <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">New Lead</a>
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a> --}}
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table leads-archive">
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
                                        @foreach ($payload['leads'] as $lead)
                                        <tr>
                                            <td><a href="{{route('leads.details', $lead->lead_id)}}">{{$lead->lead_id}}</a></td>
                                            <td>{{$lead->salutation}} {{$lead->name}}</td>
                                            <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->created_at)->format('d-m-Y')}}</td>
                                            <td>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $lead->created_at)->format('H:i A')}}</td>
                                            <td>{{$lead->sales_name}}</td>
                                            <td>
                                                <form action="{{route('leads.archive', $lead->lead_id)}}" method="POST">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="btn btn-outline-primary round mb-1 pl-3 pr-3" data-toggle="modal" data-target="#addCall">
                                                       Restore
                                                    </button>
                                                </form>
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
    {{-- Modal Start --}}

    {{-- Upload CSV Modal --}}
        <div class="modal fade" id="csvUpload" tabindex="-1" role="dialog" aria-labelledby="#csvUploadTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-swvb-blue">
                        <h5 class="modal-title white" id="csvUploadTitle">Upload Leads (CSV){{URL::current()}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <form action="{{route('leads.csvUpload')}}" class="dropzone dropzone-area" id="leads-upload" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="dz-message">Click Here or Drop File to Upload</div>
                            </form>
                        </div>
                        <button class="btn btn-outline-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                        <button type="button" class="btn btn-outline-primary" id="submit-leads-csv" >
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Upload</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    {{-- Modal End --}}
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
