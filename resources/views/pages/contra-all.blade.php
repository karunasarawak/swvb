@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Contra')

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
                <div class="card-content">
                    <div class="card-header bg-swvb-cyan">
                        <div class="card-title">
                            <a href="{{asset('contra/new')}}" class="btn btn-outline-white round mr-1 ">New </a>
                            <!-- <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a>  -->
                        </div>
                    </div>
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table" id="tbl-acc">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Contra No.</th>
                                        <th class="text-white">Membership</th>
                                        <th class="text-white">Contract Inv.</th>
                                        <th class="text-white">Invoice Received (3rd Party)</th>
                                        <th class="text-white">Amount</th>
                                        <th class="text-white">Invoice Amount</th>
                                        <th class="text-white">Balance</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Issue Date</th>
                                        <th class="text-white">Creator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                                <tfoot>
                                   
                                    <tr>
                                        <td><a href="{{url('/contra/details')}}">CN10013902</a></td>
                                        <td>1000034</td>
                                        <td>Iola</td>
                                        <td>Iola</td>
                                        <td>06 November 2019</td>
                                        <td>08:31 PM</td>
                                        <td>Jameson Knight</td>
                                        <td>ABC place</td>
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-task mr-1"></i> Verify</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-check-shield mr-1"></i> Approve</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('/contra/details')}}">CN10013902</a></td>
                                        <td>1000034</td>
                                        <td>Iola</td>
                                        <td>Iola</td>
                                        <td>06 November 2019</td>
                                        <td>08:31 PM</td>
                                        <td>Jameson Knight</td>
                                        <td>ABC place</td>
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-task mr-1"></i> Verify</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-check-shield mr-1"></i> Approve</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('/contra/details')}}">CN10013902</a></td>
                                        <td>1000034</td>
                                        <td>Iola</td>
                                        <td>Iola</td>
                                        <td>06 November 2019</td>
                                        <td>08:31 PM</td>
                                        <td>Jameson Knight</td>
                                        <td>ABC place</td>
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-task mr-1"></i> Verify</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-check-shield mr-1"></i> Approve</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
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
