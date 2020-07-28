@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Aging Reminder')

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
                        <h4 class="col-sm-2 card-title text-white">Aging Reminder</h4>
                    
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="text-white">Filter</label>
                                    <select name="membershipfilter" class="select2 form-control btn btn-outline-white round mr-1 text-white" required>
                                    <option value="membershipfilter1">CCO</option>
                                    <option value="membershipfilter2">Reminder Progress</option>
                                    <option value="membershipfilter3">Club</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col ">
                            <a href="" class="btn btn-outline-white ml-1 round text-white bx bx-printer float-right"></a>
                            <a href="" class="btn btn-outline-white round text-white bx bx-download float-right"></a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive pt-3">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        
                                        <th class="text-white">Membership</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Contact</th>
                                        <th class="text-white">Reminder Progress</th>
                                        <th class="text-white">Insurance Date</th>
                                        
                                        <th class="text-white">Total Outstanding</th>
                                        <th class="text-white">Reminder Expired Date</th>
                                        <th class="text-white">Projected Called Date</th>
                                        <th class="text-white">Called Date</th>
                                    
                                        <th class="text-white">Sent Date</th>
                                        <th class="text-white">CCO</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                   
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td>01 April 2020</td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-plus-circle mr-1"></i> New Event Log</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-plus-circle mr-1"></i> New Event Log</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-plus-circle mr-1"></i> New Event Log</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-plus-circle mr-1"></i> New Event Log</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" >
                                                        <a class="dropdown-item" href="" ><i class="bx bx-plus-circle mr-1"></i> New Event Log</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
