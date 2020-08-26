@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Installment Schedule')

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
                <div class=" bg-swvb-cyan">
                    <div class="row card-header">
                        
                        <p ><h4 class="card-title text-white ml-2">Installment Schedule<a href="{{ url('/installment/calculator') }}" class="btn btn-outline-white round text-white ml-2">Installment Calculator</a></h4> </p>
                        
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Payment Schedule No.</th>
                                        <th class="text-white" style="30%">Membership No.</th>
                                        <th class="text-white" style="50%">Name</th>
                                        <th class="text-white" style="30%">Package</th>
                                        
                                        <th class="text-white" style="30%">Paid %</th>
                                        <th class="text-white" style="30%">Status</th>
                                        <th class="text-white" style="30%">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($installment as $item)
                                    <tr>
                                    <td><a href="{{ route('installment.detail', $item->install_id) }}">{{$item->install_id}}</a></td>
                                        <td> {{$item->mbrship_no}}</td>
                                        <td class="expanded">{{$item->name}}</td>
                                        <td>{{$item->package}}</td>
                                        
                                        <td>50</td>
                                        <td>Active</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> Download</a>
                                                    </button>
                                                    
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
