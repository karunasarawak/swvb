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
<section id="form-repeater-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Unit Type Details<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addroles"><i class="bx bx-plus"></i></button></h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="row pt-3 pl-2">
                            <div class="col-sm-6">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Room Informations</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Bed Types</p>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Room Type</p>
                                    <p class="col font-weight-bold black">234560000</p>
                                </div>
                                <div class="row">
                                    <p class="col">Min Pax</p>
                                    <p class="col font-weight-bold black">John Doe</p>
                                </div>
                                <div class="row">
                                    <p class="col">Max Pax</p>
                                    <p class="col font-weight-bold black">Kuching Branch</p>
                                </div>
                               
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">123412341234</p>
                                </div>

                                <div class="row">
                                    <p class="col">Extra Bed</p>
                                    <p class="col font-weight-bold black"><input type="number" name="nric" class="form-control" value="" placeholder="NRIC" data-validation-required-message="Please write the company name"  required></p>
                                </div>

                                <div class="row">
                                    <p class="col">Sofa Bed</p>
                                    <p class="col font-weight-bold black"><input  type="number" name="nric" class="form-control" value="" placeholder="NRIC" data-validation-required-message="Please write the company name"  required></p>
                                </div>
                            </div>
                            <div class="col ml-2">
                                <div class="row">
                                    <form class="form repeater-default">
                                        <div data-repeater-list="group-a">
                                            <div data-repeater-item>
                                                <div class="row justify-content-between">
                                                    <div class="col-sm-12 form-group">
                                                        <label for="Email">Bed Type </label>
                                                        <input type="text" class="form-control" id="Email" placeholder="Select bed types">
                                                    </div>
                                                    
                                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                                        class="bx bx-x"></i>
                                                        Delete
                                                    </button>
                                                    </div>
                                                </div>
                                            <hr>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col p-0">
                                            <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                                Add
                                            </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="row pt-1 pl-2" >
                    <div class="col">
                        <p class="h7 swvb-blue font-weight-bold  ml-2">Unit Type Price</p>
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Start Date</th>
                                        <th class="text-white">End Date</th>
                                        <th class="text-white">Season</th>
                                        <th class="text-white">Payable Unit</th>
                                        <th class="text-white">Amount Payable WE</th>
                                        <th class="text-white">Amount Payable WD</th>
                                        <th class="text-white">Reservation Type</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>Erman</td>
                                        <td>ICT</td>
                                        <td>ICT01</td>
                                        <td>erman@saraworldwide.com</td>
                                        <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPLOAD</a>
                                                    </button>

                                                </div>
                                            </div></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> DISABLE</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Darween</td>
                                        <td>ICT</td>
                                        <td>ICT02</td>
                                        <td>darween@saraworldwide.com</td>
                                        <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPDATE</a>
                                                    </button>
                                                </div>
                                            </div></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ali</td>
                                        <td>CCO</td>
                                        <td>CC001</td>
                                        <td>ali@saraworldwide.com</td>
                                        <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPLOAD</a>
                                                    </button>
                                                    
                                                </div>
                                            </div></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Claudia</td>
                                        <td>ICT</td>
                                        <td>ICT02</td>
                                        <td>darween@saraworldwide.com</td>
                                        <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                            <option value="1">Enable</option>
                                            <option value="2">Disable</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPDATE</a>
                                                    </button>
                                                </div>
                                            </div></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </div> 

                    <div class="card-body card-dashboard">
                        <div class="row pt-3 pl-2">
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Season</p>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="card-content">
                    
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white" style="width:50%">Season</th>
                                                    <th class="text-white" style="width:50%">Payable WD</th>
                                                    <th class="text-white" style="width:50%">Payable WE</th>
                                                    <th class="text-white" style="width:50%">Reservation Type</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <tr>
                                                    <td>Erman</td>
                                                    <td>ICT</td>
                                                    <td>ICT01</td>
                                                    <td>ICT01</td>
                                                </tr>
                                                <tr>
                                                    <td>Erman</td>
                                                    <td>ICT</td>
                                                    <td>ICT01</td>
                                                    <td>ICT01</td>
                                                </tr>
                                                <tr>
                                                    <td>Erman</td>
                                                    <td>ICT</td>
                                                    <td>ICT01</td>
                                                    <td>ICT01</td>
                                                </tr>
                                                <tr>
                                                    <td>Erman</td>
                                                    <td>ICT</td>
                                                    <td>ICT01</td>
                                                    <td>ICT01</td>
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

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="addusers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="controls">
                            <label > Name</label>
                            <input  type="text" name="company_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>
                                
                    <label>Role</label>
                    <div class="form-group">
                        <select name="id1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                            <option value="" disabled>Add Role</option>
                            <option value="d1">Admin</option>
                            <option value="sibu">MSE</option>
                            <option value="miri">MSO</option>
                            <option value="miri">MRM</option>
                            <option value="miri">MRE</option>
                            <option value="miri">MRO</option>
                            <option value="miri">FM</option>
                            <option value="miri">CCE</option>
                            <option value="miri">CCO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label > Email</label>
                            <input  type="text" name="company_name" class="form-control" placeholder="@saraworldwide.com" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
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

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="addroles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Roles</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    
                                
                    <label>Role</label>
                    <div class="form-group">
                        <select name="id1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                            <option value="" disabled>Add Role</option>
                            <option value="d1">Admin</option>
                            <option value="sibu">MSE</option>
                            <option value="miri">MSO</option>
                            <option value="miri">MRM</option>
                            <option value="miri">MRE</option>
                            <option value="miri">MRO</option>
                            <option value="miri">FM</option>
                            <option value="miri">CCE</option>
                            <option value="miri">CCO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label > Code</label>
                            <input  type="text" name="company_name" class="form-control" placeholder="@saraworldwide.com" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
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
@endsection
