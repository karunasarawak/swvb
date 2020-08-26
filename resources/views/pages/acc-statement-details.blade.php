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
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="col card-title text-white">View Statements of Account</h4>
                </div>
                <div class="card-content">
                        <div class="card-body ">

                            <div class="card-dashboard">
                                <div class="table-responsive">

                                    <table class="table tours-all" style="width:100%">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                
                                                <th class="text-white">Date</th>
                                                <th class="text-white">Description</th>
                                                <th class="text-white">Charges</th>
                                                <th class="text-white">Credits/th>
                                                <th class="text-white">Balance</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td>74</td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                            
                                            </tr>
                                            <tr>
                                                
                                                <td>74</td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                            
                                            </tr>
                                            <tr>
                                                
                                                <td>74</td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                            
                                            </tr>
                                            <tr>
                                                
                                                <td>74</td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                            
                                            </tr>
                                            <tr>
                                                
                                                <td>74</td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                            
                                            </tr>
                                            
                                            
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
@endsection
