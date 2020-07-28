@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Users & Roles')

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
                        <h4 class="card-title text-white ml-2">Approvals</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white"></th>
                                        <th class="text-white">Check</th>
                                        <th class="text-white">Check 2</th>
                                        <th class="text-white">Verify</th>
                                        <th class="text-white">Verify 2</th>
                                        <th class="text-white">Approval</th>
                                        <th class="text-white">Approval 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>ICT requests</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="ictrequest" id="ictapp" checked=""   required></td>
                                        <td><input type="radio" name="ictrequest" id="ictapp2"   required></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Special reservation requests</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="specialrr" id="srrapp" checked=""   required></td>
                                        <td><input type="radio" name="specialrr" id="srrapp2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>Expired voucher usage requests</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="evur" id="evurapp" checked=""   required></td>
                                        <td><input type="radio" name="evur" id="evurapp2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>RCI Bulk Banking</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="rbb" id="rbbv"   required></td>
                                        <td><input type="radio" name="rbb" id="rbbv2"   required></td>
                                        <td><input type="radio" name="rbb" id="rbbapp" checked=""   required></td>
                                        <td><input type="radio" name="rbb" id="rbbapp2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>II Reserved Units</td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="iiru" id="iiruv"   required></td>
                                        <td><input type="radio" name="iiru" id="iiruv2"   required></td>
                                        <td><input type="radio" name="iiru" id="iiruapp" checked=""   required></td>
                                        <td><input type="radio" name="iiru" id="iiruapp2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>Edit reservations level 1</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="erl1" id="erl1app" checked=""   required></td>
                                        <td><input type="radio" name="erl1" id="erl1app2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>Edit reservations level 2</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="erl2" id="erl2app" checked=""   required></td>
                                        <td><input type="radio" name="erl2" id="erl2app2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>Point/entitlement advancement</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="pea" id="peaapp" checked=""   required></td>
                                        <td><input type="radio" name="pea" id="peaapp2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>Refund</td>
                                        <td></td>
                                        <td><input type="radio" name="refund" id="refundc2"   required></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="refund" id="refundapp" checked=""   required></td>
                                        <td><input type="radio" name="refund" id="refundcapp2"   required></td>
                                    </tr>
                                    <tr>
                                        <td>Suspend</td>
                                        <td><input type="radio" name="suspend" id="suspendc"   required></td>
                                        <td><input type="radio" name="suspend" id="suspendc2"   required></td>
                                        <td></td>
                                        <td></td>
                                        <td><input type="radio" name="suspend" id="suspendapp" checked=""   required></td>
                                        <td><input type="radio" name="suspend" id="suspendapp2"   required></td>
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
