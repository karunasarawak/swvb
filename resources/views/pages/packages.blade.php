@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Packages')

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
                    <h4 class="col card-title text-white">Packages<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addpackages"><i class="bx bx-plus"></i></button></h4>
                    
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
                                                    Package Price
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
                                                                        <th class="text-white" rowspan="2">Package</th>
                                                                        <th class="text-white" rowspan="2">Usage year</th>
                                                                        
                                                                        <th class="text-white" rowspan="2">Unit Price</th>
                                                                        <th class="text-white" rowspan="2">Term</th>
                                                                        <th class="text-white" rowspan="2">Quantity</th>
                                                                        <th class="text-white" rowspan="2">Purchased</th>
                                                                        <th class="text-white" rowspan="2">Capacity</th>
                                                                        
                                                                        <th class="text-white" rowspan="2">Nett No. of Package</th>
                                                                        <th class="text-white" rowspan="2">AMF</th>
                                                                        <th class="text-white" rowspan="2">Points</th>
                                                                        <th class="text-white" colspan="2">Status</th>
                                                                        <th class="text-white" rowspan="2">Action</th>

                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="text-white">WD</th>
                                                                        <th class="text-white">WE</th>
                                                                        
                                                                        
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
                                                                        
                                                                        <td >03 June 2020</td>
                                                                        
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
                                                <div class="tab-pane" id="rmh-fill" role="tabpanel" aria-labelledby="rmh-tab-fill">
                                                    
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
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                    <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td >System</td>
                                                                        <td >74</td>
                                                                        <td >Yakub Sebastian</td>
                                                                        <td >RM 247.30</td>
                                                                        <td >Point Offset</td>
                                                                        <td >03 June 2020</td>
                                                                        <td >Active</td>
                                                                        <td>
                                                                            <div class="dropdown">
                                                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                                                </span>
                                                                                <div class="dropdown-menu dropdown-menu-right">

                                                                                    <button class="bg-transparent border-0"><a class="dropdown-item" href="#" ><i class="bx bx-edit-alt mr-1" ></i> EDIT</a></button>
                                                                                    <!-- set url to reservation detail page -->
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </td>
                                                                            
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane" id="approval-fill" role="tabpanel" aria-labelledby="approval-tab-fill">
                                                    
                                                    <div class="card-body card-dashboard">
                                                        <div class="table-responsive">

                                                            <table class="table tours-all">
                                                                <thead class="bg-swvb-dark">
                                                                    <tr>
                                                                        <th class="text-white">Title</th>
                                                                        <th class="text-white">Requested By</th>
                                                                        <th class="text-white">Date Requested</th>
                                                                        <th class="text-white">Attachment</th>
                                                                        <th class="text-white">Receipt No.</th>
                                                                        <th class="text-white"></th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <fieldset class="form-group position-relative">
                                                                                <input type="text" class="form-control" id="iconLeft2">
                                                                                <div class="form-control-position">
                                                                                    <i class="bx bx-search"></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="form-group position-relative">
                                                                                <input type="text" class="form-control" id="iconLeft2">
                                                                                <div class="form-control-position">
                                                                                    <i class="bx bx-search"></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="form-group position-relative">
                                                                                <input type="text" class="form-control" id="iconLeft2">
                                                                                <div class="form-control-position">
                                                                                    <i class="bx bx-search"></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="form-group position-relative">
                                                                                <input type="text" class="form-control" id="iconLeft2">
                                                                                <div class="form-control-position">
                                                                                    <i class="bx bx-search"></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        
                                                                        </td>
                                                                        <td>
                                                                            <fieldset class="form-group position-relative">
                                                                                <input type="text" class="form-control" id="iconLeft2">
                                                                                <div class="form-control-position">
                                                                                    <i class="bx bx-search"></i>
                                                                                </div>
                                                                            </fieldset>
                                                                        
                                                                        </td>
                                                                        <td>
                                                                        
                                                                        </td>
                                                                        
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000032</td>
                                                                        <td>1000032</td>
                                                                        <td>Elizabeth</td>
                                                                        <td>Elizabeth</td>
                                                                        <td>27 April 2019</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000033</td>
                                                                        <td>1000033</td>
                                                                        <td>Todd</td>
                                                                        <td>Todd</td>
                                                                        <td>06 January 2020</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000034</td>
                                                                        <td>1000034</td>
                                                                        <td>Iola</td>
                                                                        <td>Iola</td>
                                                                        <td>06 November 2019</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000035</td>
                                                                        <td>1000035</td>
                                                                        <td>Zorita</td>
                                                                        <td>Zorita</td>
                                                                        <td>11 June 2018</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000036</td>
                                                                        <td>1000036</td>
                                                                        <td>Denton</td>
                                                                        <td>Denton</td>
                                                                        <td>13 March 2020</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000037</td>
                                                                        <td>1000037</td>
                                                                        <td>Maris</td>
                                                                        <td>Maris</td>
                                                                        <td>21 January 2020</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000038</td>
                                                                        <td>1000038</td>
                                                                        <td>Cecilia</td>
                                                                        <td>Cecilia</td>
                                                                        <td>26 November 2019</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000039</td>
                                                                        <td>1000039</td>
                                                                        <td>Buckminster</td>
                                                                        <td>Buckminster</td>
                                                                        <td>10 March 2020</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000040</td>
                                                                        <td>1000040</td>
                                                                        <td>Hadley</td>
                                                                        <td>Hadley</td>
                                                                        <td>28 October 2018</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000041</td>
                                                                        <td>1000041</td>
                                                                        <td>Malachi</td>
                                                                        <td>Malachi</td>
                                                                        <td>22 January 2020</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td>1000042</td>
                                                                        <td>1000042</td>
                                                                        <td>Yael</td>
                                                                        <td>Yael</td>
                                                                        <td>04 September 2019</td>
                                                                        <td> 
                                                                            <button class="btn btn-outline-primary round" data-toggle="modal" data-target="#addCall">
                                                                                <a href="{{url('/receipt/new')}}">New Receipt</a>
                                                                            </button>
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
                                </dvi>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade text-left" id="addpackages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Add Packages</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="controls">
                            <label > Code</label>
                            <input  type="number" name="company_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>
                                
                    <label>Package Type</label>
                    <div class="form-group">
                        <select name="id1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                            <option value="" disabled>Select package type</option>
                            <option value="d1">Individual</option>
                            <option value="sibu">Corporate</option>
                            
                        </select>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


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
