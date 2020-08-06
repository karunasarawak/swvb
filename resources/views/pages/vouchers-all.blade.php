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
                    <h4 class="card-title text-white">All Vouchers</h4>
                </div>
                <div class="card-content">
                    <div class="px-2 pt-1">
                         <a href="" class="btn btn-outline-primary round mr-1 mb-1" >Add<i class="bx bx-plus-medical"></i></a>
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1" >Active</a> 
                        <a href="" class="btn btn-outline-primary round mr-1 mb-1">Archive</a> 
                    </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all" style="width:100%;">
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
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($voucher as $voucher)
                                        <tr>    
                                            <td>{{$voucher->voucher_id}}</td>
                                            <td></td>
                                            <td></td>
                                            <td>{{$voucher->cv_start_date}}</td>
                                            <td>{{$voucher->cv_exp_date}}</td>
                                            <td>{{$voucher->night}} Nights</td>
                                            <td>{{$voucher->no_occupancy}} people</td>
                                            @if ($voucher->accom_id == "1")
                                                <?php $venue = "Grand Margeherita Hotel";?>
                                            @elseif ($voucher == "2")
                                                <?php $venue = "Damai Beach Resort";?> 
                                            @endif

                                            <td><?php echo $venue;?></td>

                                            @if ($voucher->has_used == "0")
                                                <?php $used = "Not Used";?>
                                            @elseif ($voucher->has_used == "1")
                                                <?php $used = "Used";?> 
                                            @endif
                                            <td>{{$used}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0 dropdown-item" data-toggle="modal" data-target="#inlineForm100"
                                                        onclick="edit('{{$voucher->voucher_id}}','{{$voucher->cv_exp_date}}','{{$voucher->night}}','{{$voucher->no_occupancy}}','{{$voucher->accom_id}}')">
                                                            <i class="bx bx-edit-alt mr-1"></i> EDIT
                                                        </button>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-printer mr-1"></i> PRINT</a>
                                                        <form action="{{route('vouchers.archive', $voucher->voucher_id)}}" method="POST">
                                                            @csrf 
                                                            @method('patch')
                                                            <button type="submit" class="bg-transparent border-0 dropdown-item">
                                                                <i class="bx bx-edit-alt mr-1"></i> Archieve
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
<div class="modal fade text-left" id="inlineForm100" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Edit Vouchers</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{route('vouchers.edit')}}" method="POST">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="form-group">
                        <input id="voucher_id" type="hidden" name="voucher_id" class="form-control" required>    
                    </div>

                    <label>Expiry Date</label>
                    <div class="form-group">
                        <input id="exp_date" type="date" name="exp_date" class="form-control" required>    
                    </div>

                    <label>No. of Stay</label>
                    <div class="form-group">
                        <select id="stay" name="stay" class="custom-select" data-validation-required-message="Please select a salutation." required>
                            <option value="">--</option>
                            <option value="1">2D1N</option>
                            <option value="2">3D2N</option>
                        </select>
                    </div>

                    <label>No. of Occupancy</label>
                    <div class="form-group">
                        <select id="occup" name="occup" class="custom-select" data-validation-required-message="Please select a salutation." required>
                            <option value="">--</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <label>Hotel</label>
                    <div class="form-group">
                        <select id="hotel" name="hotel" class="custom-select" data-validation-required-message="Please select a salutation." required>
                            <option value="">--</option>
                            <option value="1">Grand Margherita Hotel</option>
                            <option value="2">Damai Beach Resort</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
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
<script>
    function edit(voucher_id,exp_date, night, occup, hotel_id)
    {
        // alert(exp_date + night + occup + hotel_id);
        document.getElementById("voucher_id").value = voucher_id;
        document.getElementById("exp_date").value = exp_date;
        document.getElementById("stay").value = night;
        document.getElementById("occup").value = occup;
        document.getElementById("hotel").value = hotel_id;

    }
</script>
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
