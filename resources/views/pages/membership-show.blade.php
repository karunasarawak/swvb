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
<section class="simple-validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Membership</h4>
                </div>

                <div class="col-md-2 ml-1">
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($membership as $mbr)
                                        <tr>
                                            <td><a href="{{ route('membership.details', $mbr->mbrship_id) }}">{{ $mbr->mbrship_id }}</a></td>
                                            <td>{{ $mbr->name }}</td>
                                            <td>{{ $mbr->nric }}</td>
                                            <td>{{ $mbr->mobile_no }}</td>
                                            <td>{{ $mbr->primary_email}}</td>
                                            <td>{{ $mbr->application_date }}</td>
                                            <td>{{ $mbr->agreement_date }}</td>
                                            <td>{{ $mbr->mbrship_exp }}</td>
                                            <td>{{ $mbr->package }}</td>
                                            <td>RM {{ $mbr->package_price }}</td>

                                            @if($mbr->mbrship_status == 0)
                                                <td>Pending</td>
                                            @elseif($mbr->mbrship_status == 1)
                                                <td>Be Back</td>
                                            @elseif($mbr->mbrship_status == 2)
                                                <td>Active</td>
                                            @elseif($mbr->mbrship_status == 3)
                                                <td>Suspend</td>
                                            @elseif($mbr->mbrship_status == 4)
                                                <td>Terminate</td>
                                            @elseif($mbr->mbrship_status == 5)
                                                <td>Repurchase</td>
                                            @elseif($mbr->mbrship_status == 6)
                                                <td>Deceased</td>
                                            @elseif($mbr->mbrship_status == 6)
                                                <td>Write Off</td>
                                            @endif
                                        </tr>
                                    @endforeach()
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