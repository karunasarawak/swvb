@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ICT Request')

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
                        <h4 class="card-title text-white ml-2">ICT Request<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#ict">Add</button></h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">

                            <ul class="nav nav-tabs pt-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab"
                                    aria-selected="true">
                                    <i class="bx bx-home align-middle"></i>
                                    <span class="align-middle">Points ICT Request</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab"
                                    aria-selected="false">
                                    <i class="bx bx-user align-middle"></i>
                                    <span class="align-middle">Account ICT Request</span>
                                    </a>
                                </li>
                            </ul>
                        <div class="table-responsive">
                            <div class="tab-content">
                                <!-- ict pt -->
                                <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">ICT Ref No.</th>
                                                <th class="text-white">Description</th>
                                                <th class="text-white">Requested Department</th>
                                                <th class="text-white">Requested Staff</th>
                                                <th class="text-white">Request Date/Time</th>
                                                <th class="text-white">Attachment</th>
                                                <th class="text-white">Verified By</th>
                                                <th class="text-white">Approved By</th>
                                                <th class="text-white">Resolved By</th>
                                                <th class="text-white">Resolved Dateline</th>
                                                <th class="text-white">ICT Remarks</th>
                                                <th class="text-white">Status</th>
                                                <th class="text-white">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['ict'] as $ict)   
                                                    @if(isset($payload['ict']))
                                                        <tr>
                                                            <!-- if use relationship, table->model function name->column -->
                                                            <td><a href="{{ route('pt.details', $ict->pict_req_id)}}">{{$ict->pict_req_id}}</a></td>
                                                            <td>{{$ict->membership->mbrship_no}}</td>
                                                            <td>{{$ict->request->department->dept}}</td>
                                                            <td>{{$ict->reqstaff->staff_name}}</td>
                                                            <td>{{$ict->pict_req_created_at}}</td>
                                                            <td>{{$ict->verifystaff->staff_name}}</td>
                                                            <td></td>
                                                            <td>{{$ict->approvestaff->staff_name}}</td>
                                                            <td>{{$ict->pict_processed}}</td>
                                                            @if ($ict->pict_req_status == "0")
                                                                <?php $status = "Pending Verify"; ?>
                                                            @elseif ($ict->pict_req_status == "1")
                                                                <?php $status = "Pending Approval"; ?>
                                                            @elseif ($ict->pict_req_status == "2")
                                                                <?php $status = "Pending Resolve"; ?>
                                                            @elseif ($ict->pict_req_status == "3")
                                                                <?php $status = "Resolved"; ?>
                                                            @elseif ($ict->pict_req_status == "4")
                                                                <?php $status = "Rejected"; ?>
                                                            @endif
                                                            <td></td>
                                                            <td></td>
                                                            <td>{{$status}}</td>
                                                            @if($ict->pict_req_status==0)    
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                        </span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <!-- <button class="bg-transparent border-0"  >
                                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                                            </button> -->
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.reject', $ict->pict_req_id)}}" ><i class="bx bx-pen mr-1"></i> REJECT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.status', ['ict_id'=>$ict->pict_req_id, 'ict_status'=>$ict->pict_req_status])}}" ><i class="bx bx-pen mr-1"></i> VERIFY</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @elseif($ict->pict_req_status==1)
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                        </span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.reject', $ict->pict_req_id)}}" ><i class="bx bx-pen mr-1"></i> REJECT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.status', ['ict_id'=>$ict->pict_req_id, 'ict_status'=>$ict->pict_req_status])}}" ><i class="bx bx-pen mr-1"></i> APPROVE</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>  
                                                            @elseif($ict->pict_req_status==2)
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                        </span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.reject', $ict->pict_req_id)}}" ><i class="bx bx-pen mr-1"></i> REJECT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.status', ['ict_id'=>$ict->pict_req_id, 'ict_status'=>$ict->pict_req_status])}}" ><i class="bx bx-pen mr-1"></i> RESOLVE</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>  
                                                            @elseif($ict->pict_req_status==3)
                                                                <td>
                                                                    
                                                                </td>  
                                                            </tr>
                                                            @elseif($ict->pict_req_status==4)
                                                                <td>
                                                                    
                                                                </td>  
                                                            </tr>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endif
                                        </tbody>
                                    </table>
                                </div>

                                <!-- acc ict -->
                                <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">ICT Ref No.</th>
                                                <th class="text-white">Description</th>
                                                <th class="text-white">Requested Department</th>
                                                <th class="text-white">Requested Staff</th>
                                                <th class="text-white">Request Date/Time</th>
                                                <th class="text-white">Attachment</th>
                                                <th class="text-white">Verified By</th>
                                                <th class="text-white">Approved By</th>
                                                <th class="text-white">Resolved By</th>
                                                <th class="text-white">Resolved Dateline</th>
                                                <th class="text-white">ICT Remarks</th>
                                                <th class="text-white">Status</th>
                                                <th class="text-white">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['acc'] as $acc)   
                                                    @if(isset($payload['acc'])) 
                                                        <tr>
                                                            <!-- if use relationship, table->model function name->column -->
                                                            <td><a href="{{ route('acc.details', $acc->aict_req_id)}}">{{$acc->aict_req_id}}</a></td>
                                                            <td>{{$acc->membership['mbrship_no']}}</td>
                                                            <td>{{$acc->request->department['dept']}}</td>
                                                            <td>{{$acc->reqstaff['staff_name']}}</td>
                                                            <td>{{$acc->aict_date_requested}}</td>
                                                            <td>{{$acc->verifystaff['staff_name']}}</td>
                                                            <td></td>
                                                            <td>{{$acc->approvestaff['staff_name']}}</td>
                                                            <td>{{$acc->aict_processed}}</td>
                                                            @if ($acc->aict_req_status == "0")
                                                                <?php $status = "Pending Verify"; ?>
                                                            @elseif ($acc->aict_req_status == "1")
                                                                <?php $status = "Pending Approval"; ?>
                                                            @elseif ($ict->aict_req_status == "2")
                                                                <?php $status = "Pending Resolve"; ?>
                                                            @elseif ($acc->aict_req_status == "3")
                                                                <?php $status = "Resolved"; ?>
                                                            @elseif ($acc->aict_req_status == "4")
                                                                <?php $status = "Rejected"; ?>
                                                            @endif
                                                            <td></td>
                                                            <td></td>
                                                            <td>{{$status}}</td>
                                                            @if($ict->pict_req_status==0)    
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                        </span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <!-- <button class="bg-transparent border-0"  >
                                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                                            </button> -->
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.reject', $ict->pict_req_id)}}" ><i class="bx bx-pen mr-1"></i> REJECT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.status', ['ict_id'=>$ict->pict_req_id, 'ict_status'=>$ict->pict_req_status])}}" ><i class="bx bx-pen mr-1"></i> VERIFY</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            @elseif($ict->pict_req_status==1)
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                        </span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.reject', $ict->pict_req_id)}}" ><i class="bx bx-pen mr-1"></i> REJECT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.status', ['ict_id'=>$ict->pict_req_id, 'ict_status'=>$ict->pict_req_status])}}" ><i class="bx bx-pen mr-1"></i> APPROVE</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>  
                                                            @elseif($ict->pict_req_status==2)
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                        </span>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.reject', $ict->pict_req_id)}}" ><i class="bx bx-pen mr-1"></i> REJECT</a>
                                                                            </button>
                                                                            <button class="bg-transparent border-0" >
                                                                                <a class="dropdown-item" href="{{route('ict.status', ['ict_id'=>$ict->pict_req_id, 'ict_status'=>$ict->pict_req_status])}}" ><i class="bx bx-pen mr-1"></i> RESOLVE</a>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </td>  
                                                            @elseif($ict->pict_req_status==3)
                                                                <td>
                                                                    
                                                                </td>  
                                                            </tr>
                                                            @elseif($ict->pict_req_status==4)
                                                                <td>
                                                                    
                                                                </td>  
                                                            </tr>
                                                            @endif
                                                        @endif
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
</section>

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="ict" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New ICT Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('ict.bring')}}" method="POST" novalidate>
            @csrf
                <div class="modal-body">
                    <label>Request</label>
                    <div class="form-group controls">
                        <label class="d-block">Type</label>
                        <div class="custom-control-inline">
                        <div class="radio mr-1">
                            <input type="radio" name="icttype" id="ht" value="point" checked="" required>
                            <label for="ht">Points/Entitlement Adjustment</label>
                        </div>  
                        <div class="radio">
                            <input type="radio" name="icttype" id="fc" value="acc" checked="">
                            <label for="fc">Account</label>
                        </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" >
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block" >Next</span>
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
