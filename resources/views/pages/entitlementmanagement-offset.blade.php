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
<section class="float-left">
    <div class="row" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col card-title text-white">Manage Entitlement - Offset</h4>
                           
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive pt-3">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Select</th>
                                        <th class="text-white">Year</th>
                                        <th class="text-white">AMF Amount</th>
                                        <th class="text-white">Team/POE</th>
                                        <th class="text-white">Point allocated Date</th>
                                        <th class="text-white">Invoice Status</th>
                                        <th class="text-white">Invoice No.</th>
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
                                        
                                    </tr>
                                    
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
                                        
                                    </tr>
                                    
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
                                        
                                    </tr>
                  
                                </tbody>
                            </table>

                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 pt-1">Info</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Request Date</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Members</option>
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

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Remarks</label>
                                            <input type="text" class="form-control" id="item_name" name="item_name" placeholder="3D 2N" disabled>   
                                        </div>
                                    </div>
                                </div>

                                                            
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 pt-1">Upload</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">With Browse button</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </fieldset>
                                </div>  
                            </div>
                                
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <fieldset class="form-group">
                                        <label for="basicInputFile">With Browse button</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </fieldset>
                                </div>  
                            </div>

                                
                            
                            <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" data-toggle="modal" data-target="#offsetreminder">Save</button>  
                            
                            
                        </div>

                    </div>
                </div>     
            </div>   
        </div>
        
        
        
        <div class="col-md-4 float-right-top">
            
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Current Membership Info</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                 
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
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">ICT Request</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col text-align-center">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Account Status</a>
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

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
