@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','AMF Schedule')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row jsutify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">AMF Schedule</h4>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all" >
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white" style="width:10%">AMF Schedule No.</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Package</th>
                                        <th class="text-white">Last Charged Date</th>
                                        
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    <tr class="row-link" onclick="location.href='{{ url('/installment/amfdetails') }}'">
                                        <td><a  >1234 0000</a></td>
                                        <td>23450000</td>                        
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>01 June 2020</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ url('/installment/amfdetails') }}" >1234 0000</a></td>
                                        <td>23450000</td>                        
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>01 June 2020</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ url('/installment/amfdetails') }}" >1234 0000</a></td>
                                        <td>23450000</td>                        
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>01 June 2020</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ url('/installment/amfdetails') }}" >1234 0000</a></td>
                                        <td>23450000</td>                        
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>01 June 2020</td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{ url('/installment/amfdetails') }}" >1234 0000</a></td>
                                        <td>23450000</td>                        
                                        <td>John Doe</td>
                                        <td>Pearl-Full</td>
                                        <td>01 June 2020</td>
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
