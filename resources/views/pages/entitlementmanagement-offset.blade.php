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
<section id="form-repeater-wrapper">
    <div class="row" >
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header bg-swvb-cyan">
                     <div class="card-title">
                            <div class="row">
                                <h4 class="text white col">Manage Entitlement - fasdrwgdfgdgdf</h4>
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
                                        <th class="text-white">Invoice No.</th>
                                        <th class="text-white">Invoice Status</th>
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
                            <div class="col">
                                <div class="card-content">
                                    <div class="card-body">
                                      <form class="form repeater-defeault">
                                        <div data-repeater-list="group-a">
                                          <div data-repeater-item>
                                            <div class="row justify-content-between">
                                              <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Email">Email </label>
                                                <input type="email" class="form-control" id="Email" placeholder="Enter email id">
                                              </div>
                                              <div class="col-md-2 col-sm-12 form-group">
                                                <label for="password">password</label>
                                                <input type="password" class="form-control" id="password" placeholder="Enter Password">
                                              </div>
                                              <div class="col-md-2 col-sm-12 form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                  <option value="Male">Male</option>
                                                  <option value="Female">female</option>
                                                </select>
                                              </div>
                                              <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Profession">Profession</label>
                                                <select name="profession" id="Profession" class="form-control">
                                                  <option value="FontEnd Developer">Designer</option>
                                                  <option value="BackEnd Developer">Developer</option>
                                                  <option value="Bussiness Analystic">Tester</option>
                                                  <option value="Project Cordinator">Manager</option>
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
                        

                        {{-- <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" onclick="showContact2()">ADD</button> --}}
                        <button type="button" class="btn btn-primary float-right m-1 mb-5" id="btn_add1" data-toggle="modal" data-target="#offsetreminder">Save</button>  
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
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Membership Info</p>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <P>Membership No</P>
                                </div>
                                <div class="col">
                                    <P>10001000</P>
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
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">ICT Request</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="col">
                            <div class="row pt-1">
                                <div class="col text-align-center">
                                    <a href="" type="button" class="w-100 btn btn-primary ">Add Entitlement</a>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <a href="" type="button" class="w-100 btn btn-primary ">Restore Entitlement</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
