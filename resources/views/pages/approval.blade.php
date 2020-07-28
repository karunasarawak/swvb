@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Approval')

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
                    <h4 class="card-title text-white">Approval</h4>
                </div>
                <div class="col-md-2">
                    
                        <div class="form-group pt-1 ml-1">
                            <label >Filter</label>
                            <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round" required>
                                <option value="membershipfilter1">Pending</option>
                                <option value="membershipfilter2">Active</option>
                                <option value="membershipfilter3">Withdrawal</option>
                                <option value="membershipfilter4">Suspended</option>
                            </select>
                        </div>
                    
                </div>
                <div class="card-content">

                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Col Ref No.</th>
                                        <th class="text-white">Request</th>
                                        <th class="text-white">Type of Request</th>
                                        <th class="text-white">Membership. No</th>
                                        <th class="text-white">Submitted By</th>
                                        <th class="text-white">Submitted Data</th>
                                        <th class="text-white">Voucher</th>
                                        <th class="text-white">Action</th>
                                        <th class="text-white">Special Approval</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <tr>
                                        <td>123456</td>
                                        <td>Approval of using expired Voucher</td>                        
                                        <td>Voucher</td>
                                        <td>260505550000</td>
                                        <td>Wilson</td>
                                        <td>01 July 2020</td>
                                        <td>CV10201010</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">                                                                    
                                            <i class="bx bx-check-circle bx-md m-0 success"></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    
                                                    <button class="bg-transparent border-0 dropdown-item" >
                                                        <i class="bx bx-task mr-1"></i> APPROVE
                                                    </button>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-check-shield mr-1"></i> VERIFY</a>
                                                
                                                </div>
                                            </div>
                                        </td>
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')s
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
