@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Users & Roles')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<style>
        .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
</style>
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section >
    <div class="row">                    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Roles<button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#addroles"><i class="bx bx-plus"></i></button></h4>
                    </div>    
                </div>
                <div class="card-content">
                            
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Roles</th>
                                        <th class="text-white" >Code</th>
                                        <th class="text-white">Department</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white" >Action</th>
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
                                                        <a class="dropdown-item" href="{{ url('/roledetails') }}" ><i class="bx bx-download mr-1"></i> SET PRIVILEGED</a>
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

                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Staff</th>
                                        <th class="text-white">Role</th>
                                        <th class="text-white">Code</th>
                                        <th class="text-white">Email</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Signature</th>
                                        <th class="text-white">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                        @if(isset($payload))
                            @foreach($payload['roles'] as $staffs)
                                @if(isset($payload['roles']))         
                                    <tr>
                                        <td>{{$staffs->staff_name}}</td>
                                        <td>{{$staffs->role}}</td>
                                        <td>{{$staffs->role}}</td>
                                        <td>erman@saraworldwide.com</td>
                                        <td>{{$staffs->is_active}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#newsignature">
                                                        <a class="dropdown-item"><i class="bx bx-pen mr-1"></i> UPLOAD</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" data-toggle="modal"
                                                        data-target="#signature">
                                                        <a class="dropdown-item"><i class="bx bx-pen mr-1"></i> CHANGE SIGNATURE</a>
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
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> ARCHIVED</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-archived mr-1"></i> DISABLE</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            
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

<!-- user -->
<div class="modal fade text-left" id="addusers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('new.staff')}}" method="POST" novalidate>
                @csrf
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
                            <input  type="text" name="email" class="form-control" placeholder="@saraworldwide.com" data-validation-required-message="Please write the email"  required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Role -->
<div class="modal fade text-left" id="addroles" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Roles</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('new.roles')}}" method="POST" novalidate>
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
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- new signature -->
<div class="modal fade text-left" id="newsignature" tabindex="-1" role="dialog" aria-labelledby="newsignature" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Signature</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('signature.create')}}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                
                <div class="modal-body">    
                    
                    <div class="col-lg-6 col-md-12">
                        <fieldset class="form-group">
                            <label for="basicInputFile">Upload Your Signature Images</label>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" value="upload" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- change signature -->
<div class="modal fade" id="signature" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalCenterTitle">Change Signature</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                        <form method="POST" action="{{route('signature.modify')}}" >
                            @csrf
                            <div class="col-md-12">
                                <label class="" for="">Signature:</label>
                                <br/>
                                <div id="sig" ></div>
                                <br/>
                                <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                                <textarea id="signature64" name="signed" style="display: none"></textarea>
                            </div>
                        </form>
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

<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>
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
