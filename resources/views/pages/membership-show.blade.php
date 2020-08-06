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
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Membership</h4>
                </div>

                    <div class="col-md-2">
                        <div class="form-group pt-1">
                            <label >Filter</label>
                            <select name="membershipfilter" class="select2 form-control" required>
                            <option value="membershipfilter1">Pending</option>
                            <option value="membershipfilter2">Active</option>
                            <option value="membershipfilter3">Withdrawal</option>
                            <option value="membershipfilter4">Suspended</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="{{ url('/membership/{lead_id}/{tour_id}/new') }}" type="button" class="btn btn-primary ">Create membership</a>
                    </div>

                <br>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table table-responsive">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
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

                                    <!-- @foreach ($membership as $row)
                                    <tr>
                                        <td><a href="/contacts/details">{{$row->mbrship_id}}</a></td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->NRIC}}</td>
                                        <td>{{$row->mobile_no}}</td>
                                        <td>{{$row->primary_email}}</td>
                                        <td>{{$row->application_date}}</td>
                                        <td>{{$row->agreement_date}}</td>
                                        <td>{{$row->mbrship_exp}}</td>
                                        <td>{{$row->package_id}}</td>
                                        <td>RM10,000</td>
                                        <td>{{$row->mbrship_exp}}g</td>

                                @endforeach -->

                                        <!-- <td>
                                            <button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                <i class="bx bx-archive-in bx-md m-0 danger"></i>
                                            </button>
                                        </td> -->

                                    <!-- </tr> -->


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
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
