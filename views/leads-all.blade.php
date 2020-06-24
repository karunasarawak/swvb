@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

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
                <div class="card-header">
                    <h4 class="card-title">All Leads
                    </h4>
                    @foreach ($leads as $item)
                        {{$item['name']}}
                    @endforeach
                </div>
                <div class="card-content">
                    <div class="px-2">
                        {{-- <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">New Lead</a>
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a> --}}
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table leads-all">
                                <thead class="bg-swvb-cyan">
                                    <tr>
                                        <th class="text-white">Lead ID</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Creation Time</th>
                                        <th class="text-white">Telemarketer</th>
                                        <th class="text-white">Proceed</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1000031</td>
                                        <td>Clementine</td>
                                        <td>03 June 2019</td>
                                        <td>03:10 AM</td>
                                        <td>Phelan Henson</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-check-circle bx-md m-0 success"></i>
                                            </button>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-x-circle bx-md m-0 danger"></i>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000032</td>
                                        <td>Elizabeth</td>
                                        <td>27 April 2019</td>
                                        <td>03:05 AM</td>
                                        <td>Charles Dean</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000033</td>
                                        <td>Todd</td>
                                        <td>06 January 2020</td>
                                        <td>05:19 AM</td>
                                        <td>Travis Mckinney</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000034</td>
                                        <td>Iola</td>
                                        <td>06 November 2019</td>
                                        <td>08:31 PM</td>
                                        <td>Jameson Knight</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000035</td>
                                        <td>Zorita</td>
                                        <td>11 June 2018</td>
                                        <td>07:18 PM</td>
                                        <td>Reed Meyer</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000036</td>
                                        <td>Denton</td>
                                        <td>13 March 2020</td>
                                        <td>09:30 PM</td>
                                        <td>Joseph Sanford</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000037</td>
                                        <td>Maris</td>
                                        <td>21 January 2020</td>
                                        <td>11:09 AM</td>
                                        <td>Daniel Matthews</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000038</td>
                                        <td>Cecilia</td>
                                        <td>26 November 2019</td>
                                        <td>03:37 AM</td>
                                        <td>Tyler Washington</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000039</td>
                                        <td>Buckminster</td>
                                        <td>10 March 2020</td>
                                        <td>05:35 PM</td>
                                        <td>Salvador Heath</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000040</td>
                                        <td>Hadley</td>
                                        <td>28 October 2018</td>
                                        <td>12:43 PM</td>
                                        <td>Hamish Klein</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000041</td>
                                        <td>Malachi</td>
                                        <td>22 January 2020</td>
                                        <td>03:29 PM</td>
                                        <td>Kennan Chase</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1000042</td>
                                        <td>Yael</td>
                                        <td>04 September 2019</td>
                                        <td>07:31 PM</td>
                                        <td>Joel Allen</td>
                                        <td></td>
                                        <td></td>
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
@endsection
