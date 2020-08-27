@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Dispatch')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@php 
    use App\Http\Controllers\DispatchController;
@endphp

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
                            <a href="{{ route('dispatch.downloadSample', ['filename'=>'dispatch_sample', 'dispatch_id'=>0]) }}"><button class="btn btn-outline-white round ml-2 text-white">Download Sample File</button></a>
                        </h4>
                    </div>    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                    <div class="table">
                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        {{-- <th class="text-white">Dispatch ID</th> --}}
                                        <th class="text-white">Consignment Note</th>
                                        <th class="text-white">Mode</th>
                                        <th class="text-white">Dispatch Item</th>
                                        <th class="text-white">Dispatch Date</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Remarks</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dispatch as $disp)
                                        <tr>
                                            {{-- <td>{{ $disp->dispatch_id }}</td> --}}
                                            <td>{{ $disp->consignment_note }}</td>
                                            <td>{{ $disp->mode }}</td>
                                            <td>{{ $disp->dispatch_item }}</td>
                                            <td>{{ $disp->dispatch_date }}</td>
                                            <td>{{ $disp->item_status }}</td>
                                            <td>{{ $disp->remarks }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item">
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#upload_attach" onclick="getDispatchID({{ $disp->dispatch_id  }})">
                                                                <i class="bx bx-upload mr-1"></i>UPLOAD ATTACHMENTS
                                                            </button>
                                                        </a>
                                                        <a class="dropdown-item">
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#attach{{ $loop->iteration }}" onclick="">
                                                                <i class="bx bx-pencil mr-1"></i>SHOW ATTACHMENTS
                                                            </button>
                                                        </a>
                                                        <form action="{{ route('dispatch.delete', ['dispatch_id'=>$disp->dispatch_id, 'dispatch_no'=>$disp->dispatch_id, 'dispatch_no2'=>$disp->dispatch_id]) }}" method="POST">
                                                            @csrf
                                                            @method('patch')
                                                            <input type="hidden" value="{{ $disp->dispatch_id }}">
                                                            <a class="dropdown-item">
                                                                <button type="submit" class="bg-transparent border-0" >
                                                                    <i class="bx bx-trash mr-1"></i>DELETE
                                                                </button>
                                                            </a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>

                                            @php $attach = DispatchController::showAttachments($disp->dispatch_id) @endphp

                                            <div class="modal fade text-left" id="attach{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content" style="width:200%;">
                                                        <div class="modal-header bg-swvb-blue">
                                                            <h4 class="modal-title text-white" id="myModalLabel33">Attachments</h4>
                                                            <button type="button" class="close" data-dismiss="modal" a ria-label="Close">
                                                                <i class="bx bx-x"></i>
                                                            </button>
                                                        </div>

                                                        
                                                        <div class="modal-body" style="overflow:hidden;">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <div class="form-group controls">
                                                                        <p class="font-weight-bold black">Title</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group controls">
                                                                        <p class="font-weight-bold black">Document</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group controls">
                                                                        <p class="font-weight-bold black">Uploaded By</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group controls">
                                                                        <p class="font-weight-bold black">Remarks</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                @foreach($attach as $a)
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group controls">
                                                                            <p>{{ $a->doc_title }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <div class="form-group controls">
                                                                            <p>{{ $a->doc_directory }}</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <div class="form-group controls">
                                                                            <p>{{ $a->doc_created_by }}</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-3">
                                                                        <div class="form-group controls">
                                                                            <p>{{ $a->remarks }}</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-1">
                                                                        <button class="bg-transparent border-0">
                                                                            <a class="dropdown-item" href="{{ route('dispatch.downloadAttach', $a->doc_directory) }}"><i class="bx bx-download"></i></a>
                                                                        </button>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

<!--Upload CSV-->
<div class="modal fade text-left" id="upload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Upload CSV</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('dispatch.upload') }}" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="modal-body">
                    <div class="form-group controls">
                        <div class="custom-file">
                            <lable>Uploads</lable>
                            <input type="file" name="file" class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <input type="submit" name="submit" class="btn btn-primary ml-1" value="Save">
                        {{-- <i class="bx bx-check d-block d-sm-none"></i>Save --}}
                    
                </div>
            </form>
        </div>
    </div>
</div>

<!--Upload Attachment Modal-->
<div class="modal fade text-left" id="upload_attach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content" style="width:160%;">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Upload Attachments</h4>
                <button type="button" class="close" data-dismiss="modal" a ria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('dispatch.uploadAttach', ['dispatch_id'=>0]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group controls">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="--" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group controls">
                                {{-- <label>Dispatch ID</label> --}}
                                <input type="hidden" name="dispatch_id" class="form-control" id="dispatch_id" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group controls">
                            <label>Uploads</label>
                            <div class="custom-file">
                                <input type="file" name="file1" class="custom-file-input" id="inputGroupFile01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group controls">
                            <label>Remarks</label>
                            <input type="text" name="remark1" class="form-control" placeholder="--">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group controls">
                            <div class="custom-file">
                                <input type="file" name="file2" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group controls">
                            <input type="text" name="remark2" class="form-control" placeholder="--">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group controls">
                            <div class="custom-file">
                                <input type="file" name="file3" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <div class="col-sm-6 form-group controls">
                            <input type="text" name="remark3" class="form-control" placeholder="--">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="submit" class="btn btn-light-secondary">
                        <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Show Attachment-->

<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script>
    function getDispatchID(dispatch_id)
    {
        document.getElementById('dispatch_id').value = dispatch_id;
    }
</script>
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
