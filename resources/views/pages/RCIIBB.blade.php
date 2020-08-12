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
                    <h4 class="col card-title text-white">RCI:BB<a href="{{route('rcibb.new')}}" class="btn btn-outline-white text-white round ml-1">New Batch</a></h4>
                    
                </div>
                <div class="card-content">

                            <div class="card-body card-dashboard">

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group pt-1 ">
                                            <label >Filter Year</label>
                                            <select name="membershipfilter" class="select2 form-control btn btn-outline-primary round" required>
                                            <option value="membershipfilter1">Pending</option>
                                            <option value="membershipfilter2">Active</option>
                                            <option value="membershipfilter3">Withdrawal</option>
                                            <option value="membershipfilter4">Suspended</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">

                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Batch</th>
                                                <th class="text-white">Hotel</th>
                                                <th class="text-white">Contact No.</th>
                                                <th class="text-white">Prepared By</th>
                                                <th class="text-white">Verified 1</th>
                                                <th class="text-white">Verified 1 Date</th>
                                                <th class="text-white">Verified 2</th>
                                                <th class="text-white">Verified 2 Date</th>
                                                <th class="text-white">Signature</th>
                                                <th class="text-white">Approved Date</th>
                                                <th class="text-white">II:RU List</th>
                                                <th class="text-white">Reservation Request</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">74</a></td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                                <td>03 June 2020</td>
                                                <td>Active</td>
                                                <td>System</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                                <td>03 June 2020</td>
                                                <td>Active</td>
                                                <td>System</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000035</td>
                                                <td>Zorita</td>
                                                <td>Zorita</td>
                                                <td>11 June 2018</td>
                                                <td>07:18 PM</td>
                                                <td>Reed Meyer</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000036</td>
                                                <td>Denton</td>
                                                <td>Denton</td>
                                                <td>13 March 2020</td>
                                                <td>09:30 PM</td>
                                                <td>Joseph Sanford</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000037</td>
                                                <td>Maris</td>
                                                <td>Maris</td>
                                                <td>21 January 2020</td>
                                                <td>11:09 AM</td>
                                                <td>Daniel Matthews</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000038</td>
                                                <td>Cecilia</td>
                                                <td>Cecilia</td>
                                                <td>26 November 2019</td>
                                                <td>03:37 AM</td>
                                                <td>Tyler Washington</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000039</td>
                                                <td>Buckminster</td>
                                                <td>Buckminster</td>
                                                <td>10 March 2020</td>
                                                <td>05:35 PM</td>
                                                <td>Salvador Heath</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000040</td>
                                                <td>Hadley</td>
                                                <td>Hadley</td>
                                                <td>28 October 2018</td>
                                                <td>12:43 PM</td>
                                                <td>Hamish Klein</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000041</td>
                                                <td>Malachi</td>
                                                <td>Malachi</td>
                                                <td>22 January 2020</td>
                                                <td>03:29 PM</td>
                                                <td>Kennan Chase</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
                                                        </div>
                                                        </div>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td><a href="{{url('/extmembership/rcibb/details')}}">CN10013902</a></td>
                                                <td>1000042</td>
                                                <td>Yael</td>
                                                <td>Yael</td>
                                                <td>04 September 2019</td>
                                                <td>07:31 PM</td>
                                                <td>Joel Allen</td>
                                                <td>ABC place</td>
                                                <td>
                                                        <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> PRINT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> EXPORT CSV</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> VERIFIED</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> APPROVED </a>
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
