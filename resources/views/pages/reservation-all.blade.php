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
                     <button class="btn btn-outline-white round mr-1 mb-1 text-white" data-toggle="modal" data-target="#addreservation">Add Reservation</button>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">RSVN Ref No.</th>
                                        <th class="text-white">Type</th>
                                        <th class="text-white">Member Name</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Guest Name</th>
                                        <th class="text-white">Hotel/Facilities</th>
                                        <th class="text-white">Check in</th>
                                        <th class="text-white">Check out</th>
                                        <th class="text-white">Total Night Stay</th>
                                        <th class="text-white">Reservation Type</th>
                                        <th class="text-white">RCI/II Guest Name</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Creator</th>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
                                        <td>RM 247.30</td>
                                        <td>Point Offset</td>
                                        <td>03 June 2020</td>
                                        <td>Active</td>
                                        <td>System</td>
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
