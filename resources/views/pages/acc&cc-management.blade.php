@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ACC & CC Management')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row" x-data="{ edit: false, original:true}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col ml-4 card-title text-white">ACC & CC Management | Invoice Header</h4>                        
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="" action="" novalidate>
                        
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue ml-3 font-weight-bold my-auto pt-2">Basic Informations</p>
                                    </div>
                                </div>
                                <div class="row pt-1 pl-3">
                                    <div class="col">
                                        <div class="row">
                                                <p class="col">Address Line 1</p>
                                                <p class="col font-weight-bold black" x-show="original">12345 0000</p>
                                                <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="12345 0000" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                                <p class="col">Address Line 2</p>
                                                <p class="col font-weight-bold black" x-show="original">234561000</p>
                                                <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="234561000" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Address Line 3</p>
                                            <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="John Doe" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Address Line 4</p>
                                            <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="John Doe" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Postcode</p>
                                            <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="John Doe" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Country</p>
                                            <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="John Doe" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Contact No.</p>
                                            <p class="col font-weight-bold black" x-show="original">12 Month</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="Supplier" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        
                                        <div class="row">
                                            <p class="col">Fax No.</p>
                                            <p class="col font-weight-bold black" x-show="original">RM 1000</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="number" name="salutation" class="form-control" placeholder="RM 1000" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                    </div>
                                   
                                </div>
                            <div class="row">
                                <div class="col-md-11">
                                    <button type="button" class=" btn btn-primary float-right" id="btn_add1" x-show="original" @click="edit=true, original=false">Edit Info</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 ">
                                    <button type="submit" class="btn btn-primary float-right" x-show="edit" x-cloak >                                                                    
                                        Save
                                    </button>
                                </div>
                                <div class="col ">
                                    <button type="button" class="btn btn-primary float-right" x-show="edit" x-cloak @click="edit=false, original=true">                                                                    
                                        Close
                                    </button>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <p class="h7 swvb-blue ml-3 font-weight-bold my-auto pt-2">Invoice Items</p>
                                    </div>
                                    <p class="col"><button type="button" class=" btn btn-primary m-1 ml-3" id="btn_add1" data-toggle="modal" data-target="#newinvoiceitem">New</button></p>
                                </div>
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Item</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Installment Payment</td>
                                                    <td>Active</td>
                                                    <td><div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button class="bg-transparent border-0" >
                                                                    <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> DEACTIVATE</a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Extra Service Charges</td>
                                                    <td>Inactive</td>
                                                    <td><div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button class="bg-transparent border-0" >
                                                                    <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> ACTIVATE</a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Admin Charges</td>
                                                    <td>Inactive</td>
                                                    <td><div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button class="bg-transparent border-0" >
                                                                    <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> ACTIVATE</a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            <button type="button" class="btn btn-primary m-1 ml-3" id="btn_add1" onclick="showContact2()">Reschedule</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--downpayment-->
<div class="modal fade text-left" id="newinvoiceitem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Invoice Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    
                    <div class="card-content">
                        <div class="card-body">
                            <label>Item </label>
                            <div class="form-group">
                                <input type="text" placeholder="Email Address" class="form-control">
                            </div>

                            <div class="form-group">
                                <div class="controls">
                                    <label>Status</label>
                                    <select name="mro" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                    <option value="">--</option>
                                    <option value="1">AA</option>
                                    <option value="2">BB</option>
                                    </select>
                                </div>
                            </div>
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

<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
