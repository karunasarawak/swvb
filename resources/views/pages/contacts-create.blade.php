@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Contact')

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

                        <h4 class="card-title">Member Info - John Doe</h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row">
                            <div class="col">
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2">Member Detail<i class="bx bx-pencil"></i></p>
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
                                    <p class="col">Gender</p>
                                    <p class="col font-weight-bold black">Male</p>
                                </div>
                                <div class="row">
                                    <p class="col">NRIC/Passport No.</p>
                                    <p class="col font-weight-bold black">1223456-13-1234</p>
                                </div>
                                <div class="row">
                                    <p class="col">DOB</p>
                                    <p class="col font-weight-bold black">1 January 1950</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Marital Status</p>
                                    <p class="col font-weight-bold black">Married</p>
                                </div>
                                <div class="row">
                                    <p class="col">Race</p>
                                    <p class="col font-weight-bold black">Chinese</p>
                                </div>
                                <div class="row">
                                    <p class="col">Religion</p>
                                    <p class="col font-weight-bold black">Buddism</p>
                                </div>
                                <div class="row">
                                    <p class="col">Nationalities</p>
                                    <p class="col font-weight-bold black">Malaysian</p>
                                </div>
                                <div class="row">
                                    <p class="col">Preferred Language</p>
                                    <p class="col font-weight-bold black">English</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2">Occupation<i class="bx bx-pencil"></i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Occupation</p>
                                    <p class="col font-weight-bold black">Boss</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Employer Company</p>
                                    <p class="col font-weight-bold black">Boss Company</p>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2">Contact<i class="bx bx-pencil"></i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Home No.</p>
                                    <p class="col font-weight-bold black">+6082 123 456</p>
                                </div>
                                <div class="row">
                                    <p class="col">Office No.</p>
                                    <p class="col font-weight-bold black">+6082 123 457</p>
                                </div>
                                <div class="row">
                                    <p class="col">Whatsapp</p>
                                    <p class="col font-weight-bold black">+6 012 345 6789</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Primary Email</p>
                                    <p class="col font-weight-bold black">abc@gmail.com</p>
                                </div>
                                <div class="row">
                                    <p class="col">Secondary Email</p>
                                    <p class="col font-weight-bold black">def@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2">Primary Address<i class="bx bx-pencil"></i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Address Line 1</Address></p>
                                    <p class="col font-weight-bold black">No 123, Lot 12345</p>
                                </div>
                                <div class="row">
                                    <p class="col">Address Line 2</p>
                                    <p class="col font-weight-bold black">Lorong 123A, Jalan ABC</p>
                                </div>
                                <div class="row">
                                    <p class="col">Postcode</p>
                                    <p class="col font-weight-bold black">93350</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">City Email</p>
                                    <p class="col font-weight-bold black">Kuching</p>
                                </div>
                                <div class="row">
                                    <p class="col">State</p>
                                    <p class="col font-weight-bold black">Sarawak</p>
                                </div>
                                <div class="row">
                                    <p class="col">Country</p>
                                    <p class="col font-weight-bold black">Malaysia</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2">Secondary Address<i class="bx bx-pencil"></i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Address Line 1</Address></p>
                                    <p class="col font-weight-bold black">No 123, Lot 12345</p>
                                </div>
                                <div class="row">
                                    <p class="col">Address Line 2</p>
                                    <p class="col font-weight-bold black">Lorong 123A, Jalan ABC</p>
                                </div>
                                <div class="row">
                                    <p class="col">Postcode</p>
                                    <p class="col font-weight-bold black">93350</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">City Email</p>
                                    <p class="col font-weight-bold black">Kuching</p>
                                </div>
                                <div class="row">
                                    <p class="col">State</p>
                                    <p class="col font-weight-bold black">Sarawak</p>
                                </div>
                                <div class="row">
                                    <p class="col">Country</p>
                                    <p class="col font-weight-bold black">Malaysia</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2">Contract</p>
                            </div>
                        </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table leads-all">
                                <thead class="bg-swvb-cyan">
                                    <tr>
                                        <th class="text-white">Salutation</th>
                                        <th class="text-white">Agreement Date</th>
                                        <th class="text-white">Package</th>
                                        <th class="text-white">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>234560000</td>
                                        <td>01 June 2020</td>
                                        <td>Pearl - Full</td>
                                        <td>ACTIVE</td>
                                    </tr>
                                    <tr>
                                        <td>134560000</td>
                                        <td>01 June 2020</td>
                                        <td>Pearl - Half</td>
                                        <td>EXPIRED</td>
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
