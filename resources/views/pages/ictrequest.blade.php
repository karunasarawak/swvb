@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ICT Request')

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
                        <h4 class="card-title text-white ml-2">ICT Request<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#ict">Add</button></h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">ICT Ref No.</th>
                                        <th class="text-white">Description</th>
                                        <th class="text-white">Department</th>
                                        <th class="text-white">Requested By</th>
                                        <th class="text-white">Request Date / Time</th>
                                        <th class="text-white">Verified By</th>
                                        <th class="text-white">Approved By</th>
                                        <th class="text-white">Resolved By</th>
                                        
                                        
                                        
                                        <th class="text-white">Status</th>
                                        
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if(isset($payload))
                                        @foreach($payload['ict'] as $ict)     
                                    <tr>
                                        <td>{{$ict->ict_req_id}}</td>
                                        <td>Hardcoded?</td>
                                        <td></td>
                                        <td>{{$ict->requested_by}}</td>
                                        <td>{{$ict->ict_req_created_at}}</td>
                                        <td>{{$ict->verified_by}}</td>
                                        <td>{{$ict->approval_1_by}}</td>
                                        <td>{{$ict->resolved_by}}</td>
                                        <td>{{$ict->ict_req_status}}</td>
                                        
                                        
                                        <td><div class="dropdown">
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

                                    @endforeach
                                @endif
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="ict" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New ICT Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Request</label>
                    <div class="form-group">
                        <select name="id1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                            <option value="" disabled>Add Branch</option>
                            <option value="d1">12 Month</option>
                            <option value="sibu">Sibu</option>
                            <option value="miri">Miri</option>
                        </select>
                    </div>
                    <label>Remarks</label>
                    <div class="form-group">
                        <fieldset class="form-group">
                            <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Remarks"></textarea>
                        </fieldset>
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
<div class="modal fade" id="attachment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
