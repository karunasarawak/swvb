@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Entitlement')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Basic tabs start -->
<section id="basic-tabs-components" >
    <div class="row">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-swvb-cyan">
                     <div class="card-title">
                            <div class="row">
                                <h4 class="text white col">Points</h4>
                            </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive pt-3">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Select</th>
                                        <th class="text-white">Year</th>
                                        <th class="text-white">AMF Amount</th>
                                        <th class="text-white">Team/POE</th>
                                        <th class="text-white">Point Allocated Date</th>
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
                                    
                                   
                                   
                                    
                                </tbody>
                            </table>
                            
                        </div>

                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Info</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Request Date</label>
                                        <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                            <option value="1">Members</option>
                                            <option value="2">John</option>

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
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Upload</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <fieldset class="form-group">
                                            
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <fieldset class="form-group">
                                            
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" onclick="showContact2()">ADD</button>
                        <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" data-toggle="modal" data-target="#offsetreminder">Save</button>  
                         
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="col-md-4 float-right-top">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Membership Info</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="col">
                            <div class="row pt-1">
                                <div class="col">         
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Membership No.</p>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <P>Member Name</P>
                                </div>
                                <div class="col">
                                    <P>John Doe</P>
                                </div>

                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <P>Contact No.</P>
                                </div>
                                <div class="col">
                                    <P>+6012 3456 789</P>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>     
            

    </div>
</section>
<!-- Basic Tag Input end -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
               
                <p>Point not allocated yet,create offset reminder?</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">No</span>
                </button>
            <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Yes</span>
            </button>
        </div>
    </div>
</div>
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datetime-moment.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
@endsection
