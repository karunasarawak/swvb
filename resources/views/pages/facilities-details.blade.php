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
<section id="form-repeater-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Facilities Details</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="card">
                            
                            <div class="card-content">
                                
                                <div class="card-body card-dashboard">
                                    <div class="row pt-3 pl-2">
                                        <div class="col-sm-4">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Facility Basic Information</p>
                                        </div>
                                        
                                    </div>
                                    <div class="row pl-2">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Facility</p>
                                                <p class="col font-weight-bold black">234560000</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Required Field</p>
                                                <p class="col font-weight-bold black">John Doe</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Status</p>
                                                <p class="col font-weight-bold black">Kuching Branch</p>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Pricing<button class="btn btn-outline-white round mr-1 ml-5 text-white" data-toggle="modal" data-target="#addusers">New</button></h4>
                    </div>    
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-3">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group controls">
                                            <label class="d-block">Seasonn</label>
                                            <select name="cco" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="">--</option>
                                                <option value="1">AA</option>
                                                <option value="2">BB</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form repeater-default">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item>
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="Email">Start Date </label>
                                                            <input type="date" class="form-control" id="Email" placeholder="Enter email id">
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="Email">End Date </label>
                                                            <input type="date" class="form-control" id="Email" placeholder="Enter email id">
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="password">Amount Payable Weekday</label>
                                                            <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                                        </div>
                                                        <div class="col-md-3 col-sm-12 form-group">
                                                            <label for="password">Amount Payable Weekdend</label>
                                                            <input type="number" class="form-control" id="password" placeholder="Enter Password">
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="gender">Reservation Type</label>
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">female</option>
                                                            </select>
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
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
@endsection
