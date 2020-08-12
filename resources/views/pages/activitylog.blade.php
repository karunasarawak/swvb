@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Activity Logs')

{{-- vendor style --}}
@section('vendor-styles')
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Activity Logs</h4>
                </div>

                <br>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white" style="width:10%">User</th>
                                        <th class="text-white" style="width:10%">Action</th>
                                        <th class="text-white" style="width:10%">Date</th>
                                        <th class="text-white" style="width:10%">Time</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Wilson</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>

                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>
                                    <tr>
                                        <td>Chris</td>
                                        <td>Print Invoice 123456</td>
                                        <td>14 June 2020</td>
                                        <td>11:30am</td>
                                    </tr>

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
