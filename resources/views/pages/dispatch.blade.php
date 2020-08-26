@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Dispatch')

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
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Dispatch
                            <button class="btn btn-outline-white round ml-2 text-white" data-toggle="modal" data-target="#upload">Upload CSV</button>
                        </h4>
                    </div>    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive pt-3">
                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Consignment Note</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Title</th>
                                        <th class="text-white">Event Log Type</th>
                                        <th class="text-white">Event Log Category</th>
                                        <th class="text-white">Event Log ID</th>
                                        <th class="text-white">Remark</th>
                                        <th class="text-white">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dispatch as $disp)
                                        <tr>
                                            <td>{{ $disp->consignment_note }}</td>
                                            <td>{{ $disp->mbrship_no }}</td>
                                            <td>{{ $disp->el_title }}</td>
                                            <td>{{ $disp->el_type_name }}</td>
                                            <td>{{ $disp->el_cat_name }}</td>
                                            <td>{{ $disp->el_id }}</td>
                                            <td>{{ $disp->remarks }}</td>
                                            <td>{{ $disp->status }}</td>
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

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Upload CSV</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('dispatch.upload') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group controls">
                        <div class="custom-file">
                            <lable>Uploads</lable>
                            <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>Save
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
