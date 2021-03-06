@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section class="float-left" id="form-repeater-wrapper" >
    <div class="row">
        <div class="col-md-8 container-fluid" style="overflow:hidden;">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col card-title text-white">Manage Entitlement - Advance</h4>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive pt-3">
                            <table class="table">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white"></th>
                                        <th class="text-white">Year</th>
                                        <th class="text-white">Entitlement</th>
                                        <th class="text-white">Term/POE</th>
                                        <th class="text-white">AMF Amount</th>
                                        <th class="text-white">Invoice No.</th>
                                        <th class="text-white">Invoice Balance</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                    <label for="checkbox2"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        
                                        <td>Self Collection</td>
                                        <td>01 April 2020</td>
                                        <td>Sent for Printing</td>
                                        <td>INV12345</td>
                                        <td>INV12345</td>
                                        <td>0</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                    <label for="checkbox3"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        
                                        <td>Self Collection</td>
                                        <td>01 April 2020</td>
                                        <td>Sent for Printing</td>
                                        <td>INV12345</td>
                                        <td>INV12345</td>
                                        <td>0</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                    <label for="checkbox4"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        
                                        <td>Self Collection</td>
                                        <td>01 April 2020</td>
                                        <td>Sent for Printing</td>
                                        <td>INV12345</td>
                                        <td></td>
                                        <td>100</td>
                                    </tr>
                
                                </tbody>
                            </table>

                            </div>

                            <div class="row pt-2">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-1">Entitlement</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Current Entitlement</label>
                                            <input type="text" class="form-control" id="item_name" name="item_name" placeholder="3D 2N" disabled>   
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Advance Entitlement</label>
                                            <input type="text" class="form-control" id="item_name" name="item_name" placeholder="3D 2N" disabled>   
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Total Entitlement</label>
                                            <input type="text" class="form-control" id="item_name" name="item_name" placeholder="3D 2N" disabled>   
                                        </div>
                                    </div>
                                </div>   
                            </div>

                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-1">Info</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Request Date</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Fax</option>
                                                <option value="2">Email</option>
                                                <option value="2">SMS</option>
                                                <option value="2">Whatsapp</option>
                                                <option value="2">Post</option>

                                            </select>           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Communication Channel</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Fax</option>
                                                <option value="2">Email</option>
                                                <option value="2">SMS</option>
                                                <option value="2">Whatsapp</option>
                                                <option value="2">Post</option>

                                            </select>           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Remarks</label>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Test"></textarea>
                                            </fieldset>        
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <div class="row pt-1">
                                                <div class="col">
                                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Upload</p>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="controls">
                                                    <form class="form repeater-default">
                                                        <div data-repeater-list="group-a">
                                                            <div data-repeater-item>
                                                                <div class="row justify-content-between">
                                                                    <div class="col-10 col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <div class="form-group">
                                                                                    <div class="custom-file">
                                                                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <div class="form-group">
                                                                                    <input type="textarea" class="form-control" id="remark" placeholder="remark">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col form-group">
                                                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button">
                                                                            <i class="bx bx-x"></i>Delete
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <hr> 
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col p-0">
                                                                <button class="btn btn-primary" data-repeater-create type="button">
                                                                    <i class="bx bx-plus"></i>Add
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
                        
                            <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" data-toggle="modal" data-target="#offsetreminder">Save</button>  
                    </div>
                </div>     
            </div>   
        </div>

        <div class="col-md-4">
            <div class="float-right-top" >
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title  text-white">Current Membership Info</h4>
                    </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                    
                                <div class="row pt-1">
                                    <div class="col">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-1 pt-1">Membership Info</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Mmebership No.</p>
                                            <p class="col font-weight-bold black">John Deo</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Member Name</p>
                                            <p class="col font-weight-bold black">John Deo</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Contact No.</p>
                                            <p class="col font-weight-bold black">+6012 3456789</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                
            </div>

            <div class="float-right-top" >
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title  text-white">View</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col text-align-center">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Account Statement</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/installment/amfall') }}" type="button" class="w-100 btn btn-primary ">AMF Schedule</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="float-right-top" >
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title  text-white">ICT requests</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col text-align-center">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Add or restore entitlement</a>
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
<!-- Nav Filled Ends -->

 <!--Offset reminder Modal -->
 <div class="modal fade text-left" id="offsetreminder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="bx bx-x"></i>
            </button>
        </div>
        <form action="#">
            <div class="modal-body">
            <label>Email: </label>
            <div class="form-group">
                <input type="text" placeholder="Email Address" class="form-control">
            </div>
            <label>Password: </label>
            <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
            </div>
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
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
@endsection
