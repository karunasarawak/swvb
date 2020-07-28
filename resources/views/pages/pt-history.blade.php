@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Entitlement')

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
                        
                        <p ><h4 class="card-title text-white">Point History - 234560000</h4> </p>
                        <p class="col"> <a href="" class="btn btn-outline-white round text-white">Manage Point</a> </p>
                        
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Ref No.</th>
                                        <th class="text-white">Transaction Date</th>
                                        <th class="text-white">Usage Year</th>
                                        <th class="text-white">Decription</th>
                                        <th class="text-white">Point In</th>
                                        <th class="text-white">Balance</th>
                                        <th class="text-white">Expired Date</th>
                                        <th class="text-white">Processed By</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
                                        
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>00000001</td>
                                        <td>26541000</td>
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>RM 300</td>
                                        <td>RM 1000</td>
                                        <td>50</td>
                                        <td>Active</td>
                                       
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
