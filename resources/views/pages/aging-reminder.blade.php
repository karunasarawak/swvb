@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Aging Reminder')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section id="nav-filled">
    <div class="row" id="context-menu">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="col card-title text-white">Aging Reminder<a href="{{ url('#') }}" class="btn btn-outline-white round ml-2 mr-1 text-white">Create New Batch</a></h4>
                </div>

                <div class="card-content">
                    <div class="card-body ">
                        <div class="card-body card-dashboard">
                            <!-- for all tabs -->
                            <div class="row" >
                                <div class="col-md-2 ml-1" >
                                    <div class="form-group pt-1">
                                        <label >Club</label>
                                        <select name="membershipfilter" class="select2 form-control" required>
                                        <option value="membershipfilter1">Pending</option>
                                        <option value="membershipfilter2">Active</option>
                                        <option value="membershipfilter3">Withdrawal</option>
                                        <option value="membershipfilter4">Suspended</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2 ml-1" >
                                    <div class="form-group pt-1">
                                        <label >Reminder Progress</label>
                                        <select name="membershipfilter" class="select2 form-control" required>
                                        <option value="membershipfilter1">Pending</option>
                                        <option value="membershipfilter2">Active</option>
                                        <option value="membershipfilter3">Withdrawal</option>
                                        <option value="membershipfilter4">Suspended</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2 ml-1" >
                                    <div class="form-group pt-1">
                                        <label >Membership Status</label>
                                        <select name="membershipfilter" class="select2 form-control" required>
                                        <option value="membershipfilter1">Pending</option>
                                        <option value="membershipfilter2">Active</option>
                                        <option value="membershipfilter3">Withdrawal</option>
                                        <option value="membershipfilter4">Suspended</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col pt-2" id="generate">
                                    <a href="" class="btn btn-primary round ml-2 mr-1 mt-1">Generate Approval</a>
                                </div>

                                <div class="col mt-2" id="download">
                                  <button class="btn btn-primary round mr-1  left-click-context-menu" type="button">
                                    Left Click On Me
                                    </button>
                                   
                                </div>
                            </div>

                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs " id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="dbr-tab-fill" data-toggle="tab" href="#dbr-fill" role="tab"
                                aria-controls="dbr-fill" aria-selected="true" onclick="showbtn()">
                                All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rmh-tab-fill" data-toggle="tab" href="#rmh-fill" role="tab"
                                aria-controls="rmh-fill" aria-selected="false" onclick="hidebtn()">
                                Approval
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="confirm-tab-fill" data-toggle="tab" href="#confirm-fill" role="tab"
                                aria-controls="confirm-fill" aria-selected="false" onclick="showdownload()">
                                Confirmed
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
                                                    <th class="text-white"></th>
                                                    <th class="text-white">Membership</th>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Contact No</th>
                                                    <th class="text-white">Real Time Aging</th>
                                                    <th class="text-white">Issuance Date</th>
                                                    <th class="text-white">Total Outstanding</th>
                                                    <th class="text-white">Reminder Expired Date</th>
                                                    <th class="text-white">Projected Called Date</th>
                                                    <th class="text-white">Called Date</th>
                                                    <th class="text-white">Sent Date</th>
                                                    <th class="text-white">CCO</th>
                                                    <th class="text-white">Membership Status</th>
                                                    <th class="text-white">Reminder Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        {{-- <div class="checkbox"> --}}
                                                            <input type="checkbox" class="checkbox-input" id="checkbox602">
                                                        {{-- </div> --}}
                                                    </td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
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
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{-- <div class="checkbox"> --}}
                                                            <input type="checkbox" class="checkbox-input" id="checkbox602">
                                                        {{-- </div> --}}
                                                    </td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
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
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{-- <div class="checkbox"> --}}
                                                        <input type="checkbox" class="checkbox-input" id="checkbox602">
                                                        {{-- </div> --}}
                                                    </td>
                                                    <td>1000034</td>
                                                    <td>Iola</td>
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
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
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{-- <div class="checkbox"> --}}
                                                            <input type="checkbox" class="checkbox-input" id="checkbox602">
                                                        {{-- </div> --}}
                                                    </td>
                                                    <td>1000035</td>
                                                    <td>Zorita</td>
                                                    <td>Zorita</td>
                                                    <td>11 June 2018</td>
                                                    <td>07:18 PM</td>
                                                    <td>Reed Meyer</td>
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
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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

                                        <table class="table tours-all" style="width:100%;">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Aging Reminder ID</th>
                                                    <th class="text-white">Reminder Status</th>
                                                    <th class="text-white">Prepared By</th>
                                                    <th class="text-white">Contact No.</th>
                                                    <th class="text-white">Date</th>
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
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>03:05 AM</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">

                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white"></th>
                                                    <th class="text-white">Membership</th>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Contact No</th>
                                                    <th class="text-white">Reminder Progress</th>
                                                    <th class="text-white">Issuance Date</th>
                                                    <th class="text-white">Total Outstanding</th>
                                                    <th class="text-white">Real Time Aging</th>
                                                    <th class="text-white">Reminder Expired Date</th>
                                                    <th class="text-white">Projected Called Date</th>
                                                    <th class="text-white">Called Date</th>
                                                    <th class="text-white">Sent Date</th>
                                                    <th class="text-white">CCO</th>
                                                    <th class="text-white">Membership Status</th>
                                                    <th class="text-white">Reminder Status</th>
                                                    <th class="text-white">Action</th>
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
                                                        <fieldset class="form-group position-relative">
                                                            <input type="text" class="form-control" id="iconLeft2">
                                                            <div class="form-control-position">
                                                                <i class="bx bx-search"></i>
                                                            </div>
                                                        </fieldset>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="confirm-fill" role="tabpanel" aria-labelledby="approval-tab-fill">
                                
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">

                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white"></th>
                                                    <th class="text-white">Membership</th>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Contact No</th>
                                                    <th class="text-white">Event Log ID</th>
                                                    <th class="text-white">Reminder Progress</th>
                                                    <th class="text-white">Issuance Date</th>
                                                    <th class="text-white">Total Outstanding</th>
                                                    <th class="text-white">Real Time Aging</th>
                                                    <th class="text-white">Reminder Expired Date</th>
                                                    <th class="text-white">Projected Called Date</th>
                                                    <th class="text-white">Called Date</th>
                                                    <th class="text-white">Follow Up Date</th>
                                                    <th class="text-white">Sent Date</th>
                                                    <th class="text-white">CCO</th>
                                                    <th class="text-white">Membership Status</th>
                                                    <th class="text-white">Reminder Status</th>
                                                    <th class="text-white">Actions</th>
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
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
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
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> CLOSE REMINDER</a>
                                                            
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>                                                  </tr>
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

<script type="text/javascript">
    document.getElementById("download").style.display = "none"
    
    function showbtn(){
       
       
       document.getElementById("download").style.display = "none";
       document.getElementById("generate").style.display = "block";

   }



    function hidebtn(){
       
        document.getElementById("generate").style.display = "none";
        document.getElementById("download").style.display = "none";

    }

    function showdownload()
    {
        document.getElementById("generate").style.display = "none";
        document.getElementById("download").style.display = "block";
    }

    
</script>
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
<script src="{{asset('vendors/js/extensions/jquery.contextMenu.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/idle-timer.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/numeral/numeral.js')}}"></script>
<script src="{{asset('vendors/js/extensions/numeral/locales.js')}}"></script>

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="{{asset('js/scripts/extensions/ext-component-miscellaneous.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
