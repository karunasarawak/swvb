@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Attachments')

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
                        <h4 class="card-title text-white ml-2">Attachments</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Description</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Department</th>
                                        <th class="text-white">Date Created</th>
                                        <th class="text-white">Upload By</th>
                                        
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
                                                        <a class="dropdown-item" href="" ><i class="bx bx-pen mr-1"></i> VIEW</a>
                                                    </button>
                                                    
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-plus mr-1"></i> ADD</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-trash mr-1"></i> DELETE</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>


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
