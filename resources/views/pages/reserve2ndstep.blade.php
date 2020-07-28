@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Event Logs')

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
            
            <!-- Membership Information -->
           
            <div class="card">
                <div class="card-header bg-swvb-cyan">

                        <h4 class="card-title text-white">Membership Information</h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member's Information</p>
                            </div>
                            <div class="col-sm-5">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Last Point Allocation</p>
                            </div>
                            <div class="col ">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Status</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Saluation</p>
                                    <p class="col font-weight-bold black">Mr</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">John Doe</p>
                                </div>
                                <div class="row">
                                    <p class="col">Mobile Contact</p>
                                    <p class="col font-weight-bold black">+6012 345 6798</p>
                                </div>
                                <div class="row">
                                    <p class="col">Whatsapp</p>
                                    <p class="col font-weight-bold black">+6012 345 6798</p>
                                </div>
                                <div class="row">
                                    <p class="col">Package</p>
                                    <p class="col font-weight-bold black">Pearl Package</p>
                                </div>
                                <div class="row">
                                    <p class="col">Ext. Membership</p>
                                    <p class="col font-weight-bold black">-</p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">Active</p>
                                </div>

                            </div>

                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table leads-all">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">Term</th>
                                                        <th class="text-white">Pts</th>
                                                        <th class="text-white">Allocated</th>
                                                        <th class="text-white">Expiry</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="row">
                                    <p class="col">Paid (%))</p>
                                    <p class="col font-weight-bold black">80%</p>
                                </div>
                                <div class="row">
                                    <p class="col">AMF Outstanding</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col">Installment Outstanding</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col">Other Outstanding</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col">Reservation Fee</p>
                                    <p class="col font-weight-bold black">RM 20</p>
                                </div>
                                <div class="row">
                                    <p class="col">Membership Card Fee</p>
                                    <p class="col font-weight-bold black">RM 10</p>
                                </div>
                                <div class="row">
                                    <p class="col">Transfer Fee</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col">Administration Fee</p>
                                    <p class="col font-weight-bold black">RM 20</p>
                                </div>
                                
                                <div class="row">
                                    <p class="col">Total Outstanding</p>
                                    <p class="col font-weight-bold black">RM 70</p>
                                </div>
                                <div class="row">
                                    <p class="col">Over Payment</p>
                                    <p class="col font-weight-bold black">RM 100</p>
                                </div>

                            </div>
                        </div>
                 </div>  
                </div>  
                @yield('secondstep')  
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

