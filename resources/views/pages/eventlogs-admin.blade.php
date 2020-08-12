@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Event Logs')

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
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Event Log</h4>
                    </div>  
                </div>
                <div class="card-content">
                   <div class="row">
                        <div class="col">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive pt-3">

                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Type<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addtypes"><i class="bx bx-plus white"></i></button></th>
                                                <th class="text-white">Status</th>
                                                <th class="text-white">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td><fieldset class="form-group position-relative">
                                                        <input type="text" class="form-control" id="iconLeft2">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-search"></i>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td><fieldset class="form-group position-relative">
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
                                                <td>Complaint</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Conservation</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Enquiry</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Request</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> SAVE</a>
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
                        <div class="col">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive pt-3">

                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white" style="width:50%">Categories<button class="btn btn-outline-white round ml-1" data-toggle="modal" data-target="#addcategories"><i class="bx bx-plus white"></i></button></th>
                                                <th class="text-white">Status</th>
                                                <th class="text-white">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td><fieldset class="form-group position-relative">
                                                        <input type="text" class="form-control" id="iconLeft2">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-search"></i>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td><fieldset class="form-group position-relative">
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
                                                <td>RSVN</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Payment</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Incentive</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                            </button>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>RSVN</td>
                                                <td><fieldset class="form-group">
                                                    <select class="form-control" id="basicSelect">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
                                                        
                                                    </select>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0" >
                                                                <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> SAVE</a>
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

<div class="modal fade text-left" id="addcategories" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel33">New Event Log Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="bx bx-x"></i>
            </button>
        </div>
        <form action="#">
            <div class="modal-body">
            <label>Text</label>
            <div class="form-group">
                <input type="text" placeholder="Email Address" class="form-control">
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">login</span>
            </button>
            </div>
        </form>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="addtypes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel33">New Event Log Type</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="bx bx-x"></i>
            </button>
        </div>
        <form action="#">
            <div class="modal-body">
            <label>Type</label>
            <div class="form-group">
                <input type="text" placeholder="Email Address" class="form-control">
            </div>
            
            <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">login</span>
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
