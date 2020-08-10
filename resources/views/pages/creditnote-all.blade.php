@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Credit Note')

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
                <div class="card-content">
                    <div class="px-2 mt-1">
                         <a href="{{asset('creditnote/new')}}" class="btn btn-outline-primary round mr-1 mb-1">New </a>
                        <!-- <a href="" class="btn btn-outline-primary round mr-1 mb-1">Upload CSV</a>  -->
                    </div>
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table" id="tbl-acc">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">CN No.</th>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Amount</th>
                                        <th class="text-white">Type</th>
                                        <th class="text-white">Issue Date</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Creator</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($payload))
                                        @foreach ($payload['creditnotes'] as $creditnote)
                                        <tr class="row-link" onclick="location.href='{{route('creditnote.details', $creditnote->credit_id)}}'">
                                            <td>{{$creditnote->credit_no}}</td>
                                            <td>{{$creditnote->membership->mbrship_no}}</td>
                                            <td>{{$creditnote->membership->lead->name}}</td>
                                            <td>
                                            <?php
                                            $totalAmount = 0;
                                            ?>
                                            
                                            @foreach ($creditnote->creditNoteSubject as $cnSubjects)
                                                <?php
                                                $totalAmount = $totalAmount + $cnSubjects->amount;
                                                ?>
                                            @endforeach
                                            {{$totalAmount}}
                                            </td>
                                            <td>{{$creditnote->creditNoteType->cn_type}}</td>
                                            <td>{{$creditnote->issue_date}}</td>
                                            <td>
                                                <?php 
                                                if($creditnote->status == "1") {
                                                    echo 'Active';
                                                } ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>CN No.</th>
                                        <th>Membership No.</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Type</th>
                                        <th>Issue Date</th>
                                        <th>Status</th>
                                        <th>Creator</th>
                                    </tr>
                                </tfoot>
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
<script src="{{asset('assets/js/tbl_col_search.js')}}"></script>
@endsection
