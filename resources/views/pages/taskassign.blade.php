@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Task Assignment')

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
                        <a href="{{ url('/refund/new') }}" class="col-sm-2 btn btn-outline-white round mr-1 mb-1 ml-1 text-white">Assign Task</a>
                        <div class="custom-file col-sm-2">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <form action="{{route('task.upload')}}" method="POST" >
                                <label class="custom-file-label" for="inputGroupFile01">Upload CSV</label>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive-xl">

                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Membership Name</th>
                                        
                                        <th class="text-white">Status</th>
                                        <th class="text-white">CCO</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
