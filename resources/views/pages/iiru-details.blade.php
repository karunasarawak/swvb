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
<section id="nav-filled">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="col card-title text-white">Interval International Reserve Unit - Batch 74<a href="" class="btn btn-outline-white text-white round mr-1 ml-2" data-toggle="modal" data-target="#inlineForm">Create New Batch</a></h4>
                    
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">

                                <table class="table tours-all table-bordered">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white" rowspan="2">No</th>
                                            <th class="text-white">SWVB (Office Use)</th>
                                            <th class="text-white" rowspan="2">Week No.</th>
                                            
                                            <th class="text-white" rowspan="2">Check-in Day</th>
                                            <th class="text-white" rowspan="2">Check-out Day</th>
                                            <th class="text-white" rowspan="2">Unit Size</th>
                                            
                                            <th class="text-white" colspan="2">Capacity</th>
                                            
                                            <th class="text-white" colspan="3">SWVB(Office Use)</th>  
                                      
                                            <th class="text-white" rowspan="2">Action</th>
                                        </tr>
                                        <tr>
                                        <th class="text-white">RHU Ref</th>                                           
                                            <th class="text-white">Private</th>
                                            <th class="text-white">Non-Private</th>
                                            <th class="text-white">Unit Type</th>
                                            <th class="text-white">No of Unit</th>
                                            <th class="text-white">Confirmation No.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payload['ir'] as $ir)
                                        @foreach($ir->reservation->room as $room)
                                            <tr>
                                                <td>{{$ir->iiru_id}}</td>
                                                <td>{{$ir->ruh_ref_no}}</td>
                                                <td>{{date('W', strtotime($ir->reservation->check_in))}}</td>
                                                <td>{{date('d M Y',strtotime($ir->reservation->check_in))}}</td>
                                                <td>{{date('d M Y',strtotime($ir->reservation->check_out))}}</td>
                                                <td></td>
                                                <td>Sleep {{$payload['unit_types'][$room->unit_type_id]->min_pax}}</td>
                                                <td>Sleep {{$payload['unit_types'][$room->unit_type_id]->max_pax}}</td>
                                                <td>{{$payload['unit_types'][$room->unit_type_id]->unit_type}}</td>
                                                <td>{{$room->room_no}}</td>
                                                <td>{{$ir->exchange_no}}</td>
                                            
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">

                                                            <a class="dropdown-item" href="{{url('extmembership/iiru/edit/'.$room->rsvn_room_id)}}" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                        </div>
                                                    </div>
                                                
                                                </td>
                                            </tr>   
                                        @endforeach
                                      
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
