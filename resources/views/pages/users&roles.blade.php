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
<section x-data="{ e: false, o:true}">
    <div class="row">
        <form action="" method="" >
                    @csrf
                    
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <div class="row">
                            <h4 class="card-title text-white ml-2">Roles<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addroles"><i class="bx bx-plus"></i></button></h4>
                        </div>    
                    </div>
                    <div class="card-content">
                                <p class="col h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                    <button type="submit" class="col btn btn-primary" x-show="e" x-cloak >                                                                   
                                        Save
                                    </button>
                                </p>
                                <p class="col h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                    <button type="button" class="col btn btn-primary" x-show="e" x-cloak @click="e=false, o=true">                                                                  
                                        Close
                                    </button>
                                </p>
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">

                                <table class="table tours-all">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white" style="width:30%">Roles</th>
                                            <th class="text-white" style="width:30%">Code</th>
                                            <th class="text-white">Department</th>
                                           
                                            <th class="text-white">Status</th>
                                            <th class="text-white" style="width:10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            @if(isset($payload))
                                @foreach($payload['roles'] as $staffs)
                                    @if(isset($payload['roles']))
                                        <tr>
                                            <td><p x-show="o">{{$staffs->role}}</p><p class="col" x-cloak x-show="e">
                                                <select class="custom-select form-control required" id="" name="" required>
                                                    
                                               
                                                </select>
                                                </p>
                                            </td>
                                            <td><p x-show="o">{{$staffs->code}}</p>
                                                <p class="col" x-cloak x-show="e">
                                                    <input  type="text" name="" class="form-control" value="" placeholder="Name" data-validation-required-message="Please write the company name"  required>
                                                </p></td>
                                            <td>{{$staffs->dept_id}}
                                            </td>
                                            @if ($staffs->is_active == "0")
                                                <?php $status = "Deactive"; ?>
                                            @elseif ($staffs->is_active == "1")
                                                <?php $status = "Active"; ?>
                                            @endif
                                            <td>{{$status}}</td>
                                            @if($staffs->is_active == 1)
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button type="button" class="bg-transparent border-0" x-show="o" @click="e=true, o=false">
                                                            <a class="dropdown-item"  ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                        </button>
                                                        <button type="button" class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                        </button>
                                                        <button type="button" class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="{{route('staff.status',['role_id'=>$staffs->role_id, 'is_active'=>$staffs->is_active])}}" ><i class="bx bx-archived mr-1"></i> DEACTIVATE</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            @elseif($staffs->is_active == 0)
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button type="button" class="bg-transparent border-0" x-show="o" @click="e=true, o=false">
                                                            <a class="dropdown-item"  ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                        </button>
                                                        <button type="button" class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                        </button>
                                                        <button type="button" class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="{{route('staff.status',['role_id'=>$staffs->role_id, 'is_active'=>$staffs->is_active])}}" ><i class="bx bx-archived mr-1"></i> ACTIVATE</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                             @endif

                        @endforeach
                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-swvb-cyan">
                        <div class="row">
                            <h4 class="card-title text-white ml-2">Users<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addusers"><i class="bx bx-plus"></i></button></h4>
                        </div>    
                    </div>
                    <div class="card-content">
                        
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">

                                <table class="table tours-all">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">Staff</th>
                                            <th class="text-white">Role Code</th>
                                            <th class="text-white">Code</th>
                                            <th class="text-white">Email</th>
                                            <th class="text-white">Status</th>
                                            <th class="text-white">Signature</th>
                                            <th class="text-white">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td>Erman</td>
                                            <td>ICT</td>
                                            <td>ICT01</td>
                                            <td>erman@saraworldwide.com</td>
                                            <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                                <option value="1">Enable</option>
                                                <option value="2">Disable</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPLOAD</a>
                                                        </button>

                                                    </div>
                                                </div></td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> DISABLE</a>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Darween</td>
                                            <td>ICT</td>
                                            <td>ICT02</td>
                                            <td>darween@saraworldwide.com</td>
                                            <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                                <option value="1">Enable</option>
                                                <option value="2">Disable</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPDATE</a>
                                                        </button>
                                                    </div>
                                                </div></td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                        </button>
                                                    
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ali</td>
                                            <td>CCO</td>
                                            <td>CC001</td>
                                            <td>ali@saraworldwide.com</td>
                                            <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                                <option value="1">Enable</option>
                                                <option value="2">Disable</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPLOAD</a>
                                                        </button>
                                                        
                                                    </div>
                                                </div></td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                        </button>
                                                    
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Claudia</td>
                                            <td>ICT</td>
                                            <td>ICT02</td>
                                            <td>darween@saraworldwide.com</td>
                                            <td><select class="custom-select form-control required" id="salutation1" name="salutation1" value="">
                                                <option value="1">Enable</option>
                                                <option value="2">Disable</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> UPDATE</a>
                                                        </button>
                                                    </div>
                                                </div></td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> EDIT</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> RESET PASSWORD</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
                                                        </button>
                                                        <button class="bg-transparent border-0" >
                                                            <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                        </button>
                                                    
                                                    </div>
                                                </div>
                                            </td>
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
            </div>
        </form>
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
                            <input  type="text" name="staff_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>
                                
                    <label>Role</label>
                    <div class="form-group">
                        <select name="role1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                        @foreach($payload['roles'] as $roles)
                            <option value="{{$roles->role_id}}">{{$roles->role}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label > Email</label>
                            <input  type="text" name="email" class="form-control" placeholder="@saraworldwide.com" data-validation-required-message="Please write the company name"  required>
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
            <form action="{{route('new.roles')}}" method="GET" >
                @csrf
                
                <div class="modal-body">    
                                
                    <label>Role</label>
                    <div class="form-group">
                        <input  type="text" name="role" class="form-control"  placeholder="code" data-validation-required-message="Please create a role"  required>
                    </div>
                    <div class="form-group">
                        <div class="controls">
                            <label > Code</label>
                            <input  type="text" name="code" class="form-control"  placeholder="code" data-validation-required-message="Please create a code for selected role"  required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1" data-dismiss="modal">
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
