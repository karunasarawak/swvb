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
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="col card-title text-white">II Membership</h4>
                        
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                       
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mt-" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="dbr-tab-fill" data-toggle="tab" href="#dbr-fill" role="tab"
                                aria-controls="dbr-fill" aria-selected="true">
                                RCI
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rmh-tab-fill" data-toggle="tab" href="#rmh-fill" role="tab"
                                aria-controls="rmh-fill" aria-selected="false">
                                II
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rmh-tab-fill" data-toggle="tab" href="#rmh-fill" role="tab"
                                aria-controls="rmh-fill" aria-selected="false">
                                BSM
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
                                                    <th class="text-white">Membership No.</th>
                                                    <th class="text-white">II Membership No.</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Verified By</th>
                                                    <th class="text-white">Verified Date</th>
                                                    <th class="text-white">Approved By</th>
                                                    <th class="text-white">Approved Date</th>
                                                    <th class="text-white">II:RU List</th>
                                                    <th class="text-white">Reservation Request</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">74</a></td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                   
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                    
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000034</td>
                                                    <td>Iola</td>
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000035</td>
                                                    <td>Zorita</td>
                                                    <td>Zorita</td>
                                                    <td>11 June 2018</td>
                                                    <td>07:18 PM</td>
                                                    <td>Reed Meyer</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000036</td>
                                                    <td>Denton</td>
                                                    <td>Denton</td>
                                                    <td>13 March 2020</td>
                                                    <td>09:30 PM</td>
                                                    <td>Joseph Sanford</td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000037</td>
                                                    <td>Maris</td>
                                                    <td>Maris</td>
                                                    <td>21 January 2020</td>
                                                    <td>11:09 AM</td>
                                                    <td>Daniel Matthews</td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000038</td>
                                                    <td>Cecilia</td>
                                                    <td>Cecilia</td>
                                                    <td>26 November 2019</td>
                                                    <td>03:37 AM</td>
                                                    <td>Tyler Washington</td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000039</td>
                                                    <td>Buckminster</td>
                                                    <td>Buckminster</td>
                                                    <td>10 March 2020</td>
                                                    <td>05:35 PM</td>
                                                    <td>Salvador Heath</td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000040</td>
                                                    <td>Hadley</td>
                                                    <td>Hadley</td>
                                                    <td>28 October 2018</td>
                                                    <td>12:43 PM</td>
                                                    <td>Hamish Klein</td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000041</td>
                                                    <td>Malachi</td>
                                                    <td>Malachi</td>
                                                    <td>22 January 2020</td>
                                                    <td>03:29 PM</td>
                                                    <td>Kennan Chase</td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                                    <td>1000042</td>
                                                    <td>Yael</td>
                                                    <td>Yael</td>
                                                    <td>04 September 2019</td>
                                                    <td>07:31 PM</td>
                                                    <td>Joel Allen</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
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
                                                    <th class="text-white">Batch</th>
                                                    <th class="text-white">RSVN No.</th>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Contact No.</th>
                                                    <th class="text-white">Email</th>
                                                    <th class="text-white">Country</th>
                                                    <th class="text-white">Create Date</th>
                                                    <th class="text-white">Prepared By</th>
                                                    <th class="text-white">Verified 1</th>
                                                    <th class="text-white">Approved By</th>
                                                    <th class="text-white">Signature</th>
                                                    <th class="text-white">Approved Date</th>
                                                    <th class="text-white">II:RU List</th>
                                                    <th class="text-white">Reservation Request</th>
                                                    <th class="text-white">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                                                       
                                                <tr>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>03:05 AM</td>
                                                    <td>Charles Dean</td>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>03:05 AM</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                
                                                </tr>
                                                <tr>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>05:19 AM</td>
                                                    <td>Travis Mckinney</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000034</td>
                                                    <td>1000034</td>
                                                    <td>Iola</td>
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000035</td>
                                                    <td>1000035</td>
                                                    <td>Zorita</td>
                                                    <td>Zorita</td>
                                                    <td>11 June 2018</td>
                                                    <td>07:18 PM</td>
                                                    <td>Reed Meyer</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000036</td>
                                                    <td>1000036</td>
                                                    <td>Denton</td>
                                                    <td>Denton</td>
                                                    <td>13 March 2020</td>
                                                    <td>09:30 PM</td>
                                                    <td>Joseph Sanford</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000037</td>
                                                    <td>1000037</td>
                                                    <td>Maris</td>
                                                    <td>Maris</td>
                                                    <td>21 January 2020</td>
                                                    <td>11:09 AM</td>
                                                    <td>Daniel Matthews</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000038</td>
                                                    <td>1000038</td>
                                                    <td>Cecilia</td>
                                                    <td>Cecilia</td>
                                                    <td>26 November 2019</td>
                                                    <td>03:37 AM</td>
                                                    <td>Tyler Washington</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000039</td>
                                                    <td>1000039</td>
                                                    <td>Buckminster</td>
                                                    <td>Buckminster</td>
                                                    <td>10 March 2020</td>
                                                    <td>05:35 PM</td>
                                                    <td>Salvador Heath</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000040</td>
                                                    <td>1000040</td>
                                                    <td>Hadley</td>
                                                    <td>Hadley</td>
                                                    <td>28 October 2018</td>
                                                    <td>12:43 PM</td>
                                                    <td>Hamish Klein</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000041</td>
                                                    <td>1000041</td>
                                                    <td>Malachi</td>
                                                    <td>Malachi</td>
                                                    <td>22 January 2020</td>
                                                    <td>03:29 PM</td>
                                                    <td>Kennan Chase</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000042</td>
                                                    <td>1000042</td>
                                                    <td>Yael</td>
                                                    <td>Yael</td>
                                                    <td>04 September 2019</td>
                                                    <td>07:31 PM</td>
                                                    <td>Joel Allen</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        </div>
                                                    </div>
                                                    </td>
                                                    <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
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
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
<script>
$(function() {
  $('[data-toggle="popover"]').popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
  });
});
</script>
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
