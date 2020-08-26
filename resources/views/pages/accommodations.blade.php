@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Accommodations')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="col card-title text-white">Accommodation<a href="{{ url('/admin/accmd/new') }}" class="btn btn-outline-white round mr-1 ml-1 text-white">New</a></h4>
                    
                </div>
                <div class="card-content">
                    <section id="nav-filled">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">

                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="dbr-tab-fill" data-toggle="tab" href="#dbr-fill" role="tab"
                                                    aria-controls="dbr-fill" aria-selected="true">
                                                    Club Asia International
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="rmh-tab-fill" data-toggle="tab" href="#rmh-fill" role="tab"
                                                    aria-controls="rmh-fill" aria-selected="false">
                                                    Easturia Vacation Club
                                                    </a>
                                                </li>
                        
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content pt-1">
                                                <div class="tab-pane active" id="dbr-fill" role="tabpanel" aria-labelledby="dbr-tab-fill">
                                                    
                                                    <div class="card-body card-dashboard">
                                                        <div class="table-responsive">

                                                            <table class="table tours-all">
                                                                <thead class="bg-swvb-dark">
                                                                    <tr>
                                                                        <th class="text-white" >ID</th>
                                                                        <th class="text-white" >Accommodation</th>
                                                                        <th class="text-white" >Code</th>
                                                                        
                                                                        <th class="text-white" >Travel</th>
                                                                        <th class="text-white" >Term</th>
                                                                        <th class="text-white" >Quantity</th>
                                                                        <th class="text-white" >Purchased</th>
                                                                        <th class="text-white" >Capacity</th>
                                                                        
                                                                        <th class="text-white" >Nett No. of Package</th>
                                                                        <th class="text-white" >AMF</th>
                                                                        <th class="text-white" >Points</th>
                                                                        <th class="text-white" >Status</th>
                                                                        <th class="text-white" >Action</th>

                                                                        
                                                                    </tr>
                                                                    
                                                                </thead>
                                                                <tbody>
                                                                @foreach($payload['accmmdcai'] as $acai)
                                                                    <tr>
                                                                        <td ><a href="{{ route('accmd.details') }}">{{$acai->accom_id}}</a></td>
                                                                        <td >{{$acai->accom_name}}</td>
                                                                        <td >{{$acai->accom_code}}</td>
                                                                        <td >{{$acai->travelagent->ta_name}}</td>
                                                                        <td >{{$acai->accom_code}}</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>    
                                                                        <td >205420000</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                                                    
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
                                                <div class="tab-pane" id="rmh-fill" role="tabpanel" aria-labelledby="rmh-tab-fill">
                                                    
                                                    <div class="card-body card-dashboard">
                                                        <div class="table-responsive">

                                                            <table class="table tours-all">
                                                                <thead class="bg-swvb-dark">
                                                                    <tr>
                                                                        <th class="text-white" >Accommodation</th>
                                                                        <th class="text-white" >Code</th>
                                                                        
                                                                        <th class="text-white" >Travel</th>
                                                                        <th class="text-white" >Term</th>
                                                                        <th class="text-white" >Quantity</th>
                                                                        <th class="text-white" >Purchased</th>
                                                                        <th class="text-white" >Capacity</th>
                                                                        
                                                                        <th class="text-white" >Nett No. of Package</th>
                                                                        <th class="text-white" >AMF</th>
                                                                        <th class="text-white" >Points</th>
                                                                        <th class="text-white" >Status</th>
                                                                        <th class="text-white" >Action</th>

                                                                        
                                                                    </tr>
                                                                    
                                                                </thead>
                                                                <tbody>
                                                                @foreach($payload['accmmdevc'] as $aevc)
                                                                    <tr>
                                                                        <td >{{$aevc->accom_name}}</td>
                                                                        <td >{{$aevc->accom_code}}</td>
                                                                        <td >{{$aevc->travelagent->ta_name}}</td>
                                                                        <td >{{$aevc->accom_code}}</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >205420000</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                                                    
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
                        </div>
                    </section>
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
