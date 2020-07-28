@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership')

{{-- vendor style --}}
@section('vendor-styles')
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Activity Log</h4>
                </div>

                <br>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">No.</th>
                                        <th class="text-white">Subject</th>
                                        <th class="text-white">URL</th>
                                        <th class="text-white">Method</th>
                                        <th class="text-white">Ip</th>
                                        <th class="text-white">User Agent</th>
                                        <th class="text-white">Agreement Date</th>
                                        <th class="text-white">User Id</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if ($logs->count())
                                    @foreach($logs as $key => $log)               
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $log->subject }}</td>
                                        <td class="text-success">{{ $log->url }}</td>
                                        <td><label class="label label-info">{{ $log->method }}</label></td>
                                        <td class="text-warning">{{ $log->ip }}</td>
                                        <td class="text-danger">{{ $log->agent }}</td>
                                        <td>{{ $log->user_id }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#addCall">Delete</butto></td>
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
