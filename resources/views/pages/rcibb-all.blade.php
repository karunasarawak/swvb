@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

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
                    <h4 class="col card-title text-white">RCI:BB<a href="{{route('rcibb.new')}}" class="btn btn-outline-white text-white round ml-1">New Batch</a></h4>
                    
                </div>
                <div class="card-content">

                            <div class="card-body card-dashboard">

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group pt-1 ">
                                            <label >Filter Year</label>
                                            <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round" required>
                                            <option value="membershipfilter1">Pending</option>
                                            <option value="membershipfilter2">Active</option>
                                            <option value="membershipfilter3">Withdrawal</option>
                                            <option value="membershipfilter4">Suspended</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">

                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Batch</th>
                                                <th class="text-white">Hotel</th>
                                                <th class="text-white">Contact No.</th>
                                                <th class="text-white">Prepared By</th>
                                                <th class="text-white">Verified 1</th>
                                                <th class="text-white">Verified 1 Date</th>
                                                <th class="text-white">Verified 2</th>
                                                <th class="text-white">Verified 2 Date</th>
                                                <th class="text-white">Approved Date</th>
                                                <th class="text-white">II:RU List</th>
                                                <th class="text-white">Reservation Request</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($rr as $r)
                                            
                                            <tr>
                                            <td><a href="{{url('/extmembership/rcibb/details/'.$r->rcibb_id)}}">{{$r->batch_no}} @if(!empty($r->sub_batch)) -{{$r->sub_batch}} @endif</a></td>
                                                 <td>{{$accommodations[$r->ru->reservation->accom_id]->accom_name}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                    </div>
                                                    </div>
                                                </td>
                                                <td><div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                    </div>
                                                    </div>
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
