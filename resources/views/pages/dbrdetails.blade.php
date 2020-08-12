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

                                <table class="table tours-all">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">SWVB (Office Use)</th>
                                            <th class="text-white">Week No.</th>
                                            
                                            <th class="text-white">Check In</th>
                                            <th class="text-white">Check Out</th>
                                            <th class="text-white">Unit Size</th>
                                            <th class="text-white">Room No.</th>
                                            <th class="text-white" colspan="2">Capacity</th>
                                            
                                            <th class="text-white" colspan="6">SWVB(Office Use)</th>
                                            
                                            
                                            
                                            
                                        </tr>
                                        <tr>
                                            <th class="text-white">RHU Ref</th>
                                            <th class="text-white">Guest Name</th>
                                            <th class="text-white">Hotel $ Resort</th>
                                            <th class="text-white"></th>
                                            <th class="text-white"></th>
                                            <th class="text-white"> </th>
                                            <th class="text-white"> </th>
                                            <th class="text-white">Private</th>
                                            <th class="text-white">Non-Private</th>
                                            <th class="text-white">Unit Type</th>
                                            <th class="text-white">No of Unit</th>
                                            <th class="text-white">Confirmation No.</th>
                                            <th class="text-white">Reservation & Request</th>
                                            
                                            <th class="text-white">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
                                                    </div>
                                                </div>
                                            
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td >74
                                            </td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            <td >Active</td>
                                            <td >System<</td>
                                            <td >205420000</td>
                                            <td >Yakub Sebastian</td>
                                            <td >RM 247.30</td>
                                            <td >Point Offset</td>
                                            <td >03 June 2020</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">

                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original" @click="edit=true, original=false"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" x-show="original"></i> DOWNLOAD RESERVATION REQUEST</a>
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
