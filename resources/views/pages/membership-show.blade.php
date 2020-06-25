@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership')

{{-- vendor style --}}
@section('vendor-styles')
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">All Membership</h4>
                </br>
                <a href="{{ url('/membership/new') }}" type="button" class="btn btn-primary">Easy access to Create membership</a>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table membership-all">
                                <thead class="bg-swvb-cyan">
                                    <tr>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">IC</th>
                                        <th class="text-white">Contact</th>
                                        <th class="text-white">Email</th>
                                        <th class="text-white">Application Date</th>
                                        <th class="text-white">Agreement Date</th>
                                        <th class="text-white">Membership Expiry</th>
                                        <th class="text-white">Package Type</th>
                                        <th class="text-white">Package Price</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="">2060860000</a></td>
                                        <td>Mr John Doe</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Pending</td>

                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060870000</a></td>
                                        <td>Mrs Jane Lee</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-x-hotel bx-md m-0 danger"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060880000 </a></td>
                                        <td>Mr Adam</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Withdrawal</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060890000</a></td>
                                        <td>Mrs Catherine</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Suspended</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060900000</a></td>
                                        <td>Mr John Doe</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Pending</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060910000</a></td>
                                        <td>Mrs Jane Lee</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Active</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060920000</a></td>
                                        <td>Mr Adam</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>

                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Withdrawal</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060930000 </a></td>
                                        <td>Mrs Catherine</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>

                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Suspended</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060940000</a></td>
                                        <td>Mr John Doe</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>

                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Pending</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060950000</a></td>
                                        <td>Mrs Jane Lee</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>

                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Active</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060960000</a></td>
                                        <td>Mr Adam</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Withdrawal</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060970000</a></td>
                                        <td>Mrs Catherine</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Suspended</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>

                                    <tr>
                                    <td><a href="">2060980000</a></td>
                                        <td>Mr John Doe</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Pending</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
                                    </tr>
                                    <tr>
                                    <td><a href="">2060900000</a></td>
                                        <td>Mrs Jane Lee</td>
                                        <td>123456-13-1234</td>
                                        <td>+6012 345 6789</td>
                                        <td>abc@gmail.com</td>
                                        <td>01 April 2020 </td>
                                        <td>01 April 2020 </td>
                                        <td>08 April 2020</td>
                                        <td>Ruby - premium</td>
                                        <td>RM10,000</td>
                                        <td>Active</td>
                                        <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-hotel bx-md m-0 danger"></i>
                                            </button></td>
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
