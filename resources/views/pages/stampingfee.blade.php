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
                    <div class="card-body ">
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
                                        <th class="text-white">Date of Checked</th>
                                        <th class="text-white">Date of Approved</th>
                                        <th class="text-white">Date Sent for stamping</th>
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
                                            <td>RM {{ $list->stamping_fee }}</td>

                                            @if($list->penalty != null)
                                                <td>RM {{ $list->penalty }} </td>
                                            @else
                                                <td></td>
                                            @endif

                                            <td>RM {{ $list->total_stamping_fee }}</td>

                                            <td>{{ $list->sfb_req_at }}</td>
                                            <td>{{ $list->sfb_verify_at }}</td>
                                            <td>{{ $list->sfb_approved_at }}</td>
                                            <td>{{ $list->sfb_sent_at }}</td>
                                            <td>{{ $list->sfb_receive_at }}</td>

                                            @if($list->sfb_status == 0)
                                                <td>Pending to Request</td>
                                            @elseif($list->sfb_status == 1)
                                                <td>Pending to Verify</td>
                                            @elseif($list->sfb_status  == 2)
                                                <td>Pending to Approve</td>
                                            @elseif($list->sfb_status == 3)
                                                <td>Pending to Send</td>
                                            @elseif($list->sfb_status == 4)
                                                <td>Pending to Receive</td>
                                            @else
                                                <td>Received</td>
                                            @endif
                                            
                                            <td>
                                                <div class="dropdown" style="z-index: 500000;"></div>
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>

                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <form action="{{ route('stamp.export', $list->sfb_id) }}" method="GET">
                                                            <button class="bg-transparent border-0">
                                                                <a class="dropdown-item">
                                                                    <i class="bx bx-download mr-1"></i>Download
                                                                </a>
                                                            </button>
                                                        </form>
                                                    
                                                        <form action="{{ route('stamp.export_LHDN', ['batch_id'=>$list->sfb_id, 'batch_no'=>$list->sfb_id]) }}" method="GET">
                                                            <button class="bg-transparent border-0">
                                                                <a class="dropdown-item">
                                                                    <i class="bx bx-download mr-1"></i>Download LHDN
                                                                </a>
                                                            </button>
                                                        </form>
                                                        
                                                        @if($list->sfb_status == 0)
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#request" onclick="getBatchID({{ $list->sfb_id }})">
                                                                <a class="dropdown-item"><i class="bx bx-message-dots mr-1"></i>Request</a>
                                                            </button>
                                                        @elseif($list->sfb_status == 1)
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#verify" onclick="getBatchID({{ $list->sfb_id }})">
                                                                <a class="dropdown-item"><i class="bx bx-task mr-1"></i>Verify</a>
                                                            </button>
                                                        @elseif($list->sfb_status == 2)
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#approve" onclick="getBatchID({{ $list->sfb_id }})">
                                                                <a class="dropdown-item"><i class="bx bx-check-shield mr-1"></i>Approve</a>
                                                            </button>
                                                        @elseif($list->sfb_status == 3)
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#sent" onclick="getBatchID({{ $list->sfb_id }})">
                                                                <a class="dropdown-item"><i class="bx bx-send mr-1"></i>Sent</a>
                                                            </button>
                                                        @elseif($list->sfb_status == 4)
                                                            <button class="bg-transparent border-0" data-toggle="modal" data-target="#receive" onclick="getBatchID({{ $list->sfb_id }})">
                                                                <a class="dropdown-item"><i class="bx bx-envelope mr-1"></i>Receive</a>
                                                            </button>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td> 
                                            
                                        </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <input type="hidden" value="{{ $list->sfb_id }}" name="batch_id">
                            <input type="hidden" value="{{ $list->sfb_id }}" name="batch_id_lhdn"> --}}
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

{{-- Verify Modal --}}
<div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Verify</h5>
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
                        <input type="number" name="batch_id" id="batch_id_verify" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="2" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Verified Date</label>
                            <input type="date" name="verify_date" class="form-control" placeholder="--" required>
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
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Approve</h5>
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
                        <input type="number" name="batch_id" id="batch_id_approve" class="form-control">
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
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Sent</h5>
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
                        <input type="number" name="batch_id" id="batch_id_sent" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="4" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Sent Date</label>
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

{{-- Receive Modal --}}
<div class="modal fade" id="receive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Sent</h5>
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
                        <input type="number" name="batch_id" id="batch_id_receive" class="form-control">
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" name="status_no" value="5" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Receive Date</label>
                            <input type="date" name="receive_date" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Consignment Note</label>
                            <input type="number" name="consignment" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Mode of Dispatch</label>
                            <select class="custom-select form-control required" name="dispatch_mode">
                                <option value="Self Collection">Self Collection</option>
                                <option value="Nationwide">Nationwide</option>
                                <option value="GDex">GDex</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Date of Dispatch</label>
                            <input type="date" name="dispatch_date" class="form-control" placeholder="--" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <label>Dispatch Status</label>
                            <input type="text" name="dispatch_status" value="1" class="form-control" placeholder="--" required>
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
        var verify = document.getElementById("batch_id_verify");
        var approve = document.getElementById("batch_id_approve");
        var sent = document.getElementById("batch_id_sent");
        var receive = document.getElementById("batch_id_receive");

        request.value = batch_id;
        verify.value = batch_id;
        approve.value = batch_id;
        sent.value = batch_id;
        receive.value = batch_id;
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
<script src="{{asset('js/scripts/pages/table-extended.js')}}"></script>
@endsection