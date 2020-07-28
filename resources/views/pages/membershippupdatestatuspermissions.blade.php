@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Users & Roles')

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
                        <h4 class="card-title text-white ml-2">Membership Update Status Permissions</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">N/A</th>
                                        <th class="text-white">C</th>
                                        <th class="text-white">V</th>
                                        <th class="text-white">E</th>
                                        <th class="text-white">EA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>Credentials</td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox20">
                                                    <label for="checkbox20"></label>
                                                </div>
                                            </fieldset></td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox30">
                                                    <label for="checkbox30"></label>
                                                </div>
                                            </fieldset></td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox40">
                                                    <label for="checkbox40"></label>
                                                </div>
                                            </fieldset></td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox50">
                                                    <label for="checkbox50"></label>
                                                </div>
                                            </fieldset></td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox60">
                                                    <label for="checkbox60"></label>
                                                </div>
                                            </fieldset></td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox7">
                                                    <label for="checkbox7"></label>
                                                </div>
                                            </fieldset></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>1000035</td>
                                        <td>1000035</td>
                                        <td>Zorita</td>
                                        <td>Zorita</td>
                                        <td>11 June 2018</td>
                                        <td>07:18 PM</td>
                                        <td>Reed Meyer</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000036</td>
                                        <td>1000036</td>
                                        <td>Denton</td>
                                        <td>Denton</td>
                                        <td>13 March 2020</td>
                                        <td>09:30 PM</td>
                                        <td>Joseph Sanford</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000037</td>
                                        <td>1000037</td>
                                        <td>Maris</td>
                                        <td>Maris</td>
                                        <td>21 January 2020</td>
                                        <td>11:09 AM</td>
                                        <td>Daniel Matthews</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000038</td>
                                        <td>1000038</td>
                                        <td>Cecilia</td>
                                        <td>Cecilia</td>
                                        <td>26 November 2019</td>
                                        <td>03:37 AM</td>
                                        <td>Tyler Washington</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000039</td>
                                        <td>1000039</td>
                                        <td>Buckminster</td>
                                        <td>Buckminster</td>
                                        <td>10 March 2020</td>
                                        <td>05:35 PM</td>
                                        <td>Salvador Heath</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000040</td>
                                        <td>1000040</td>
                                        <td>Hadley</td>
                                        <td>Hadley</td>
                                        <td>28 October 2018</td>
                                        <td>12:43 PM</td>
                                        <td>Hamish Klein</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000041</td>
                                        <td>1000041</td>
                                        <td>Malachi</td>
                                        <td>Malachi</td>
                                        <td>22 January 2020</td>
                                        <td>03:29 PM</td>
                                        <td>Kennan Chase</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                    <tr>
                                        <td>1000042</td>
                                        <td>1000042</td>
                                        <td>Yael</td>
                                        <td>Yael</td>
                                        <td>04 September 2019</td>
                                        <td>07:31 PM</td>
                                        <td>Joel Allen</td>
                                        <td>ABC place</td>
                                        <td>Chris</td>
                                        <td>25 April 2020 1:00PM</td>
                                        <td>-</td>
                                        <td>PENDING</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Activity Logs<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addusers"><i class="bx bx-plus"></i></button></h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <fieldset>
                              <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox1000" name="activitylogs" value="1">
                                <label for="checkbox1000">See all activity logs</label>
                              </div>
                        </fieldset>
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

<!--scrollbar Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" id="form-repeater-wrapper" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Scrolling Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="card-content">
                    <div class="card-body">
                        <form class="form repeater-default">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>

                <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
            </div>
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
