@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reservation')

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
                    <h4 class="card-title text-white">Point & Entitlement Management</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <ul class="nav nav-tabs pt-2" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab"
                              aria-selected="true">
                              <i class="bx bx-home align-middle"></i>
                              <span class="align-middle">All</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab"
                              aria-selected="false">
                              <i class="bx bx-user align-middle"></i>
                              <span class="align-middle">Approvals</span>
                            </a>
                          </li>
                        </ul>
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Membership No.</th>
                                                <th class="text-white">Member Name</th>
                                                <th class="text-white">Term/POE</th>
                                                <th class="text-white">Last Allocation Date</th>
                                                <th class="text-white">Last Allocated Point/Entitlement</th>
                                                <th class="text-white">Last Allocated Point/Entitlement Balance</th>
                                                <th class="text-white">Next Allocation Date</th>
                                                <th class="text-white">Point/Entitlement Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                    
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                
                                                </td>
                                                <td>
                                                <fieldset class="form-group position-relative">
                                                    <input type="text" class="form-control" id="iconLeft2">
                                                    <div class="form-control-position">
                                                        <i class="bx bx-search"></i>
                                                    </div>
                                                </fieldset>
                                                    
                                                </td>
                                            </tr>
                                            <tr class="row-link" onclick="location.href='{{ url('/reservations/details') }}'">
                                                <td>CN10013902</td>
                                                <td>205420000</td>
                                                <td>Yakub Sebastian</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                                <td>03 June 2020</td>
                                                <td>Active</td>
                                                <td>System</td>
                                                <td>RM 247.30</td>
                                                <td>Point Offset</td>
                                                <td>03 June 2020</td>
                                                <td>Active</td>
                                                <td>System</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1000034</td>
                                                <td>1000034</td>
                                                <td>Iola</td>
                                                <td>Iola</td>
                                                <td>06 November 2019</td>
                                                <td>08:31 PM</td>
                                                <td>Jameson Knight</td>
                                                <td>ABC place</td>
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
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table tours-all" >
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Reference no.</th>
                                                <th class="text-white">Request</th>
                                                <th class="text-white">Type of Request</th>
                                                <th class="text-white">Membership no.</th>
                                                <th class="text-white">Created By</th>
                                                <th class="text-white">Date Created</th>
                                                <th class="text-white">Voucher</th>
                                                <th class="text-white">Action</th>
                                            </tr>
                                        </thead>
                                    
                                        <tbody>
                                            <tr>
                                                <td>123456</td>
                                                <td class="expanded">Approval of using expired Voucher</td>                        
                                                <td>Voucher</td>
                                                <td>260505550000</td>
                                                <td>Wilson</td>
                                                <td>01 July 2020</td>
                                                <td>CV10201010</td>
                                                <td>10000</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="bg-transparent border-0 dropdown-item" >
                                                                <i class="bx bx-task mr-1"></i> APPROVE
                                                            </button>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-check-shield mr-1"></i> VERIFY</a>
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
    </div>
</section>

<div class="modal fade text-left" id="addreservation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Add Reservation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('rsvn.bring')}}" method="GET" novalidate>
                @csrf
                <div class="modal-body">
                    <div class="form-group controls">
                        <label class="d-block">Type</label>
                        <div class="custom-control-inline">
                        <div class="radio mr-1">
                            <input type="radio" name="rsvntype" id="ht" value="hotel" checked="" required>
                            <label for="ht">Hotel</label>
                        </div>  
                        <div class="radio">
                            <input type="radio" name="rsvntype" id="fc" value="facilities" checked="">
                            <label for="fc">Facilities</label>
                        </div>
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
                      <span class="d-none d-sm-block" onclick="$(this).closest('form').submit();" >Next</span>
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
@endsection
