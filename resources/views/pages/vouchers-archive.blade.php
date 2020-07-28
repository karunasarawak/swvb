@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Vouchers')

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
                    <h4 class="card-title text-white">Archived Vouchers</h4>
                </div>
                <div class="card-content">
                    <div class="px-2 pt-1">
                         <a href="" class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#inlineForm6">Add<i class="bx bx-plus-medical"></i></a>
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#inlineForm7">Active</a> 
                        <!-- <a href="" class="btn btn-outline-primary round mr-1 mb-1">Archive</a>  -->
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Vouchers No.</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Start Date</th>
                                        <th class="text-white">Expiry Date</th>
                                        <th class="text-white">No. of Stay</th>
                                        <th class="text-white">No. of Occupancy</th>
                                        <th class="text-white">Hotel</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1000031</td>
                                        <td>1000031</td>
                                        <td>Clementine</td>
                                        <td>03 June 2019</td>
                                        <td>03 June 2019</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Phelan Henson</td>
                                        <td>
                                            <a href="{{asset('tours/attend')}}">
                                              <i class="bx bx-file bx-md m-0 "></i>
                                            </a>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000032</td>
                                        <td>1000032</td>
                                        <td>Elizabeth</td>
                                        <td>27 April 2019</td>
                                        <td>27 April 2019</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Charles Dean</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000033</td>
                                        <td>1000033</td>
                                        <td>Todd</td>
                                        <td>06 January 2020</td>
                                        <td>06 January 2020</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Travis Mckinney</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000034</td>
                                        <td>1000034</td>
                                        <td>Iola</td>
                                        <td>06 November 2019</td>
                                        <td>06 November 2019</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Jameson Knight</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000035</td>
                                        <td>1000035</td>
                                        <td>Zorita</td>
                                        <td>11 June 2018</td>
                                        <td>11 June 2018</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Reed Meyer</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000036</td>
                                        <td>1000036</td>
                                        <td>Denton</td>
                                        <td>13 March 2020</td>
                                        <td>13 March 2020</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Joseph Sanford</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000037</td>
                                        <td>1000037</td>
                                        <td>Maris</td>
                                        <td>21 January 2020</td>
                                        <td>21 January 2020</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Daniel Matthews</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000038</td>
                                        <td>1000038</td>
                                        <td>Cecilia</td>
                                        <td>26 November 2019</td>
                                        <td>26 November 2019</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Tyler Washington</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000039</td>
                                        <td>1000039</td>
                                        <td>Buckminster</td>
                                        <td>10 March 2020</td>
                                        <td>10 March 2020</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Salvador Heath</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000040</td>
                                        <td>1000040</td>
                                        <td>Hadley</td>
                                        <td>28 October 2018</td>
                                        <td>28 October 2018</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Hamish Klein</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000041</td>
                                        <td>1000041</td>
                                        <td>Malachi</td>
                                        <td>22 January 2020</td>
                                        <td>22 January 2020</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Kennan Chase</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall" data-toggle="modal" data-target="#inlineForm5">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1000042</td>
                                        <td>1000042</td>
                                        <td>Yael</td>
                                        <td>04 September 2019</td>
                                        <td>04 September 2019</td>
                                        <td>3D2N</td>
                                        <td>2</td>
                                        <td>Joel Allen</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-file bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-printer bx-md m-0 "></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#inlineForm10">
                                                <i class="bx bx-pencil bx-md m-0 "></i>
                                            </button>
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


<!--login form Modal -->
<div class="modal fade text-left" id="inlineForm10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Vouchers/h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Membership No.</label>
                    <div class="form-group">
                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                        <option value="">--</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                    </div>
                    <label>Name</label>
                    <div class="form-group">
                        <p>John Doe</p>
                    </div>
                    <label>Expiry Date</label>
                    <div class="form-group">
                        <input type="date" name="name" class="form-control" placeholder="Name" required>    
                    </div>
                    <label>No. of Stay</label>
                    <div class="form-group">
                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                        <option value="">--</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                    </div>
                    <label>No. of Occupancy</label>
                    <div class="form-group">
                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                        <option value="">--</option>
                        <option value="Mr.">2</option>
                        <option value="Ms.">4</option>
                        
                    </select>
                    </div>
                    <label>Hotel</label>
                    <div class="form-group">
                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                        <option value="">--</option>
                        <option value="Mr.">Grand Margherita Hotel</option>
                        <option value="Ms.">Damai Beach Resort</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
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
