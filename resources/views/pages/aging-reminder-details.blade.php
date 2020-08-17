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
<section id="nav-filled">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="col card-title text-white">Aging Reminder Details - 1000032</h4>
                </div>

                <div class="card-content">
                    <div class="card-body ">
                        <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col-md-2 ml-1">
                                    <div class="form-group pt-1">
                                        <label >Status</label>
                                        <select name="membershipfilter" class="select2 form-control" required>
                                        <option value="membershipfilter1">Approval</option>
                                        <option value="membershipfilter2">Pending</option>
                                        <option value="membershipfilter3">Reject</option>
                                        
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="col pt-2">
                                    <a href="" class="btn btn-primary round ml-2 mr-1 mt-1">Confirm</a>
                                </div>
                            </div>

                        </div>

                      
                        
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">

                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white"><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                                <label for="checkbox4"></label>
                                                            </div>
                                                        </fieldset>
                                                    </th>
                                                    <th class="text-white">Membership</th>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Contact No</th>
                                                    <th class="text-white">Reminder Progress</th>
                                                    <th class="text-white">Issuance Date</th>
                                                    <th class="text-white">Total Outstanding</th>
                                                    <th class="text-white">Real Time Aging</th>
                                                    <th class="text-white">Reminder Expired Date</th>
                                                    <th class="text-white">Projected Called Date</th>
                                                    <th class="text-white">Called Date</th>
                                                    <th class="text-white">Sent Date</th>
                                                    <th class="text-white">CCO</th>
                                                    <th class="text-white">Membership Status</th>
                                                    <th class="text-white">Reminder Status</th>
                                                    <th class="text-white">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>   
                                                    <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                                <label for="checkbox2"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>                                        
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>1000032</td>
                                                    <td>1000032</td>
                                                    <td>Elizabeth</td>
                                                    <td>Elizabeth</td>
                                                    <td>27 April 2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox21">
                                                                <label for="checkbox21"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox22">
                                                                <label for="checkbox22"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000034</td>
                                                    <td>1000034</td>
                                                    <td>Iola</td>
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox23">
                                                                <label for="checkbox23"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000035</td>
                                                    <td>1000035</td>
                                                    <td>Zorita</td>
                                                    <td>Zorita</td>
                                                    <td>11 June 2018</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox24">
                                                                <label for="checkbox24"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000036</td>
                                                    <td>1000036</td>
                                                    <td>Denton</td>
                                                    <td>Denton</td>
                                                    <td>13 March 2020</td>
                                                    <td>1000033</td>
                                                    <td>1000033</td>
                                                    <td>Todd</td>
                                                    <td>Todd</td>
                                                    <td>06 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox25">
                                                                <label for="checkbox25"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000037</td>
                                                    <td>1000037</td>
                                                    <td>Maris</td>
                                                    <td>Maris</td>
                                                    <td>21 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox27">
                                                                <label for="checkbox27"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000038</td>
                                                    <td>1000038</td>
                                                    <td>Cecilia</td>
                                                    <td>Cecilia</td>
                                                    <td>26 November 2019</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox28">
                                                                <label for="checkbox28"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000039</td>
                                                    <td>1000039</td>
                                                    <td>Buckminster</td>
                                                    <td>Buckminster</td>
                                                    <td>10 March 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox29">
                                                                <label for="checkbox29"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000040</td>
                                                    <td>1000040</td>
                                                    <td>Hadley</td>
                                                    <td>Hadley</td>
                                                    <td>28 October 2018</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-upload mr-1"></i> UPLOAD</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                <td><fieldset>
                                                            <div class="checkbox">
                                                                <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                                <label for="checkbox3"></label>
                                                            </div>
                                                        </fieldset>
                                                    </td>       
                                                    <td>1000041</td>
                                                    <td>1000041</td>
                                                    <td>Malachi</td>
                                                    <td>Malachi</td>
                                                    <td>22 January 2020</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> EDIT</a>
                                                            <a class="dropdown-item" href="#"><i class="bxs bxs-download-alt mr-1"></i> DOWNLOAD</a>
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
