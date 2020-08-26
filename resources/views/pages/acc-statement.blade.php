@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section id="nav-filled">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="card-title">
                        <h4 class="col  text-white">Statement of Account </h4>
                    </div>  
                </div>
                <div class="card-content">
                    <div class="card-body ">
                                
                        <div class="card-dashboard">
                            <div class="row pt-1" >
                                <div class="col-md-12">
                                    <h6 class="py-50"  >All</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label >Club</label>
                                            <select name="company_city" class="select2 form-control" required>
                                            <option>--</option>
                                                <option value="">EVC</option>
                                                <option value="">CAI</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label >Start Date of Invoice and Receipt Issue</label>
                                            <input  type="date" name="company_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label >End Date of Invoice and Receipt Issue</label>
                                            <input  type="date" name="company_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label >Membership Status</label>
                                            <select name="company_city" class="select2 form-control" required>
                                            <option>--</option>
                                                <option value="">Active</option>
                                                <option value="">Pending</option>
                                                <option value="">Suspend</option>
                                                <option value="">Terminate</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="button" class="btn btn-primary m-1" id="btn_add1" >Add</button>
                            
                            <div class="row pt-1" >
                                <div class="col-md-12">
                                    <h6 class="py-50"  >Individual</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label >Membership No.</label>
                                            <select name="company_city" class="select2 form-control" required>
                                            <option>--</option>
                                                <option value="">1231231231</option>
                                                <option value="">23123123</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label >Name</label>
                                            <input  type="text" name="company_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <button type="button" class="btn btn-primary m-1" id="btn_add1" >Add</button>
                            
                        </div>    
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="card-title">
                        <h4 class="col  text-white">Statement of Account Printing List
                        <a href="" class="btn btn-outline-white round text-white float-right">Print</a>
                        <a href="" class="btn btn-outline-white round ml-2 mr-1 text-white float-right">Clear</a>
                        </h4>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body ">
                                
                        <div class="card-dashboard">
                            <div class="table-responsive">

                                <table class="table tours-all">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">Batch ID</th>
                                            <th class="text-white">Cards</th>
                                            <th class="text-white">Created By</th>
                                            <th class="text-white">Charge Date</th>
                                            <th class="text-white">Completion Date</th>
                                            <th class="text-white">Completed By</th>
                                            <th class="text-white">Status</th>
                                            <th class="text-white">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">74</a></td>
                                            <td>205420000</td>
                                            <td>Yakub Sebastian</td>
                                            <td>RM 247.30</td>
                                            <td>Point Offset</td>
                                            <td>03 June 2020</td>
                                            <td>Active</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>205420000</td>
                                            <td>Yakub Sebastian</td>
                                            <td>RM 247.30</td>
                                            <td>Point Offset</td>
                                            <td>03 June 2020</td>
                                            <td>Active</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000034</td>
                                            <td>Iola</td>
                                            <td>Iola</td>
                                            <td>06 November 2019</td>
                                            <td>08:31 PM</td>
                                            <td>Jameson Knight</td>
                                            <td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000035</td>
                                            <td>Zorita</td>
                                            <td>Zorita</td>
                                            <td>11 June 2018</td>
                                            <td>07:18 PM</td>
                                            <td>Reed Meyer</td>
                                            <td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000036</td>
                                            <td>Denton</td>
                                            <td>Denton</td>
                                            <td>13 March 2020</td>
                                            <td>09:30 PM</td>
                                            <td>Joseph Sanford</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000037</td>
                                            <td>Maris</td>
                                            <td>Maris</td>
                                            <td>21 January 2020</td>
                                            <td>11:09 AM</td>
                                            <td>Daniel Matthews</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000038</td>
                                            <td>Cecilia</td>
                                            <td>Cecilia</td>
                                            <td>26 November 2019</td>
                                            <td>03:37 AM</td>
                                            <td>Tyler Washington</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000039</td>
                                            <td>Buckminster</td>
                                            <td>Buckminster</td>
                                            <td>10 March 2020</td>
                                            <td>05:35 PM</td>
                                            <td>Salvador Heath</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000040</td>
                                            <td>Hadley</td>
                                            <td>Hadley</td>
                                            <td>28 October 2018</td>
                                            <td>12:43 PM</td>
                                            <td>Hamish Klein</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000041</td>
                                            <td>Malachi</td>
                                            <td>Malachi</td>
                                            <td>22 January 2020</td>
                                            <td>03:29 PM</td>
                                            <td>Kennan Chase</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('/extmembership/details')}}">CN10013902</a></td>
                                            <td>1000042</td>
                                            <td>Yael</td>
                                            <td>Yael</td>
                                            <td>04 September 2019</td>
                                            <td>07:31 PM</td>
                                            <td>Joel Allen</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-download-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
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
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
<script>
$(function() {
  $('[data-toggle="popover"]').popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
  });
});
</script>
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
