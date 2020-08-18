@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Stamping Fee List')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@php 
    use App\Http\Controllers\ReportController;
@endphp

@section('content')
<!-- Zero configuration table -->
<section id="table-chechbox">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="card-title">
                        <div class="row">
                            <h4 class="text white col">Stamping Fee Batch List
                                <a href="{{ route('stamp.ready') }}">
                                    <button type="button" class="btn btn-outline-white round text-white ml-2">Create New Batch</button>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Batch No.</th>
                                        <th class="text-white">No of Members</th>
                                        <th class="text-white">Stamping Fee</th>
                                        <th class="text-white">Penalty</th>
                                        <th class="text-white">Total Stamping Fee</th>
                                        <th class="text-white">Date of Request</th>
                                        <th class="text-white">Date of Approved</th>
                                        <th class="text-white">Date send for stamping</th>
                                        <th class="text-white">Date of Received</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payload['list'] as $list)
                                        <tr>
                                            <td><a href="{{ route('stamp.details',$list->sfb_id) }}">{{ $list->sfb_id }}</a></td>
                                            <td>@php echo ReportController::countResult($list->sfb_id) @endphp</td>
                                            <td>RM 20</td>
                                            <td></td>
                                            <td>RM @php echo ReportController::countResult($list->sfb_id)*20 @endphp</td>

                                            @if($list->penalty != null)
                                                <td>RM {{ $list->penalty }} </td>
                                            @else
                                                <td></td>
                                            @endif
                                            
                                            <td>{{ $list->sfb_req_at }}</td>
                                            <td>{{ $list->sfb_approved_at }}</td>
                                            <td>{{ $list->sfb_sent_at }}</td>

                                            @if($list->sfb_status == 0)
                                                <td>Pending to Request</td>
                                            @elseif($list->sfb_status == 1)
                                                <td>Pending to Approve</td>
                                            @elseif($list->sfb_status == 2)
                                                <td>Pending to Be Sent</td>
                                            @else
                                                <td>Sent</td>
                                            @endif
                                            
                                            <td>
                                                @if($list->sfb_status == 4)
                                                    <span></span>
                                                @else
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <form action="{{ route('stamp.export', $list->sfb_id) }}" method="GET">
                                                                <input type="hidden" value="{{ $list->sfb_id }}" name="batch_id">
                                                                <button class="bg-transparent border-0">
                                                                    <a class="dropdown-item">
                                                                        <i class="bx bx-send mr-1"></i>Download
                                                                    </a>
                                                                </button>
                                                            </form>
                                                            
                                                            

                                                            @if($list->sfb_status == 0)
                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#request" onclick="getBatchID({{ $list->sfb_id }})">
                                                                    <a class="dropdown-item"><i class="bx bx-send mr-1"></i>Request</a>
                                                                </button>
                                                            @elseif($list->sfb_status == 1)
                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#check" onclick="getBatchID({{ $list->sfb_id }}">
                                                                    <a class="dropdown-item"><i class="bx bx-send mr-1"></i>Check</a>
                                                                </button>
                                                            @elseif($list->sfb_status == 2)
                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#approve" onclick="getBatchID({{ $list->sfb_id }}">
                                                                    <a class="dropdown-item"><i class="bx bx-send mr-1"></i>Approve</a>
                                                                </button>
                                                            @elseif($list->sfb_status == 3)
                                                                <button class="bg-transparent border-0" data-toggle="modal" data-target="#sent" onclick="getBatchID({{ $list->sfb_id }}">
                                                                    <a class="dropdown-item"><i class="bx bx-send mr-1"></i>Sent</a>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif 
                                            </td>
                                            
                                            <td>
                                            @if($list->sfb_status == 4)
                                                    <span></span>
                                                @else
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ route('stamp.export', $list->sfb_id ) }}"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                    @if($list->sfb_status == 0)
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#request" onclick="getBatchID({{ $list->sfb_id }})">
                                                        <a class="dropdown-item" ><i class="bx bx-trash mr-1"></i> Request</a>
                                                    </button>
                                                    @elseif($list->sfb_status == 1)
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#check" onclick="getBatchID({{ $list->sfb_id }}">
                                                        <a class="dropdown-item" ><i class="bx bx-trash mr-1"></i> Check</a>
                                                    </button>
                                                    @elseif($list->sfb_status == 2)
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#approve" onclick="getBatchID({{ $list->sfb_id }}">
                                                        <a class="dropdown-item" ><i class="bx bx-trash mr-1"></i> Approve</a>
                                                    </button>
                                                    @elseif($list->sfb_status == 3)
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#sent" onclick="getBatchID({{ $list->sfb_id }}">
                                                        <a class="dropdown-item"><i class="bx bx-send mr-1"></i>Sent</a>
                                                    </button>
                                                    </div>
                                                    @endif
                                                </div> 
                                            @endif  
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

<!-- Request Modal-->
<div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>

            <form action="{{ route('stamp.changeStatus') }}"method="POST">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <label>Batch ID</label>
                    <div class="form-group">
                        <input type="number" name="batch_id" id="batch_id_request" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="1" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Penalty</label>
                            <input type="number" name="penalty" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Request Date</label>
                            <input type="date" name="request_date" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Check Modal --}}
<div class="modal fade" id="check" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>

            <form action=""method="POST">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <label>Batch ID</label>
                    <div class="form-group">
                        <input type="number" name="batch_id" id="batch_id_request" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="2" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Check Date</label>
                            <input type="date" name="check_date" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Approve Modal --}}
<div class="modal fade" id="approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>

            <form action=""method="POST">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <label>Batch ID</label>
                    <div class="form-group">
                        <input type="number" name="batch_id" id="batch_id_request" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="3" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Approved Date</label>
                            <input type="date" name="approve_date" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Sent Modal --}}
<div class="modal fade" id="sent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>

            <form action=""method="POST">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <label>Batch ID</label>
                    <div class="form-group">
                        <input type="number" name="batch_id" id="batch_id_request" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="4" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>sent Date</label>
                            <input type="date" name="sent_date" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>

                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function getBatchID(batch_id)
    {
        console.log(batch_id);
        var request = document.getElementById("batch_id_request");

        request.value = batch_id;
    }
</script>

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
