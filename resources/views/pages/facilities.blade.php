@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Facilities')

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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-swvb-cyan">
                            <div class="row">
                                <h4 class="col card-title text-white ml-2">Facilities<button class="btn btn-outline-white round ml-1 text-white" data-toggle="modal" data-target="#newf">New</button></h4>
                            </div>    
                        </div>
                        <div class="card-content">
                            
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">

                                    <table class="table tours-all" style="width:100%;">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white" >Facility</th>
                                                <th class="text-white" >Required field</th>
                                                <th class="text-white" >Status</th>
                                                <th class="text-white" >Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                              
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                          
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                             
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td>Credentials</td>
                                                <td><div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                            
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

<div class="modal fade text-left" id="newf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Facilities</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>  
            <form action="#">
                <div class="modal-body">
                                
                    <label>Status</label>
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
                            <label > Facility</label>
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
