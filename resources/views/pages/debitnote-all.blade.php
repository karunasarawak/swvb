@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Debit Note')

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
                    <div class=" card-title ">
                    <a href="{{asset('debitnote/new')}}" class="btn btn-outline-white round mr-1 ">New </a>
                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">DN No.</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Creator</th>
                                        <th class="text-white">Amount</th>
                                        <th class="text-white">Reason</th>
                                        <th class="text-white">Issue Date</th>
                                        <th class="text-white">Status</th>
                                        
                                    </tr>

                                    
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('/debitnote/details')}}">74</a></td>
                                        <td>205420000</td>
                                        <td>Yakub Sebastian</td>
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>

                                        <td>RM 247.30</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('/debitnote/details')}}">74</a></td>
                                        <td>205420000</td>
                                        <td>Yakub Sebastian</td>
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>

                                        <td>RM 247.30</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                       
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('/debitnote/details')}}">74</a></td>
                                        <td>205420000</td>
                                        <td>Yakub Sebastian</td>
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>

                                        <td>RM 247.30</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                      
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('/debitnote/details')}}">74</a></td>
                                        <td>205420000</td>
                                        <td>Yakub Sebastian</td>
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>

                                        <td>RM 247.30</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                      
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('/debitnote/details')}}">74</a></td>
                                        <td>205420000</td>
                                        <td>Yakub Sebastian</td>
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>

                                        <td>RM 247.30</td>
                                        <td>03 June 2020</td>
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
