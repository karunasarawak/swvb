@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Receipt')

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
                    <div class="row card-title">
                        <h4 class="text-white col">Communication Log<a href="{{ url('/communicationlog/new') }}" class="btn btn-outline-white round ml-2 mr-1 text-white">New</a></h4>
                        
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive pt-1">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Subject</th>
                                        <th class="text-white">Event Log ID</th>
                                        <th class="text-white">Remarks</th>
                                        <th class="text-white">Date</th>
                                        <th class="text-white">Time</th>
                                        <th class="text-white">Staff</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="23456000" id="iconLeft2">
                                             <p>2345600</p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="John Doe" id="iconLeft2">
                                               <p>John Doe</p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Subject A" id="iconLeft2">     
                                                <p>Subject A</p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="1234567" id="iconLeft2">
                                                <p>1234567</p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Call Back" id="iconLeft2">
                                                <p>Call Back</p>
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" value="01 May 2020" id="iconLeft2"> 
                                                <p>01 May 2020</p>
                                        </td>
                                        <td>
                                            <input type="time" class="form-control" value="11:00am" id="iconLeft2">
                                                <p>11:00am</p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Wilson" id="iconLeft2">
                                                <p>Wilson</p>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary m-1" id="btn_add1" onclick="()">Save</button>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td>1000032</td>
                                        <td>1000032</td>
                                        <td>Elizabeth</td>
                                        <td>Elizabeth</td>
                                        <td>27 April 2019</td>
                                        <td>03:05 AM</td>
                                        <td>Charles Dean</td>
                                        <td>ABC place</td>
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000033</td>
                                        <td>1000033</td>
                                        <td>Todd</td>
                                        <td>Todd</td>
                                        <td>06 January 2020</td>
                                        <td>05:19 AM</td>
                                        <td>Travis Mckinney</td>
                                        <td>ABC place</td>
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
                                                    </button>
                                                    
                                                </div>
                                            </div>
                                        </td>
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
                                        <td>  
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm100" >
                                                        <a class="dropdown-item"><i class="bx bx-pencil mr-1"></i> Edit</a>
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


<div class="modal fade" id="inlineForm100" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h5 class="modal-title text-white" id="exampleModalLongTitle">Communication Log</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div class="modal-body">
           
                <label>Card Holder</label>
                <div class="form-group">
                    <input type="number" placeholder="Card holder" class="form-control">
                </div>
                <label>Card Type</label>
                <div class="form-group">
                    <input type="name" placeholder="Type of card" class="form-control">
                </div>
                <label>Card Issuer</label>
                <div class="form-group">
                    <input type="number" placeholder="Card issuer" class="form-control">
                </div>
                <label>Name on Card</label>
                <div class="form-group">
                    <input type="name" placeholder="Name on card" class="form-control">
                </div>
                <label>CVV</label>
                <div class="form-group">
                    <input type="number" placeholder="CVV" class="form-control">
                </div>
                <label>Expiry Date</label>
                <div class="form-group">
                    <input type="date" value="01 June 2020" class="form-control">
                </div>
                <label>Card No.</label>
                <div class="form-group">
                    <input type="number" placeholder="Card Number" class="form-control">
                </div>
                <label>Remarks</label>
                <div class="form-group">
                    <input type="name" placeholder="Remarks" class="form-control">
                </div>
                <label>Status</label>
                <div class="form-group">
                    <input type="text" placeholder="Status" class="form-control">
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
