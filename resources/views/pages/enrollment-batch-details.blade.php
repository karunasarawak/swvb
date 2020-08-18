@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12"></div>
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col card-title text-white">External Memberships
                            <a href="{{ url('/communicationlog/new') }}" class="btn btn-outline-white round text-white float-right ml-1">Approve</a>
                            <a href="{{ url('/communicationlog/new') }}" class="btn btn-outline-white round text-white float-right">Reject</a></h4>                 
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive mt-2">
                                <table class="table tours-all">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white"><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox10">
                                                    <label for="checkbox10"></label>
                                                </div>
                                            </fieldset></th>
                                            <th class="text-white">Membership No.</th>
                                            <th class="text-white">Name</th>
                                            {{-- <th class="text-white">RCI Membership No.</th>
                                            <th class="text-white">RCI Membership Status</th> --}}
                                            <th class="text-white">Enrolled Date</th>
                                            <th class="text-white">Expiry Date</th>
                                            <th class="text-white">Enrolled By</th>
                                            <th class="text-white">Communication Channel</th>
                                            <th class="text-white">Request Date</th>
                                            <th class="text-white">Remarks</th>
                                            <th class="text-white">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="checkbox10">
                                                        <label for="checkbox10"></label>
                                                    </div>
                                                </fieldset>
                                            </td>
                                            <td><a href="{{url('/refund/details')}}">74</a></td>
                                            <td>205420000</td>
                                            <td>Yakub Sebastian</td>
                                            <td>RM 247.30</td>
                                            <td>Point Offset</td>
                                            <td>03 June 2020</td>
                                            <td>03 June 2020</td>
                                            <td>Active</td>
                                           
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                    <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> UPLOAD</a>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox10">
                                                    <label for="checkbox10"></label>
                                                </div>
                                            </fieldset></td>
                                            <td><a href="{{url('/refund/details')}}">CN10013902</a></td>
                                            <td>205420000</td>
                                            {{-- <td>Yakub Sebastian</td>
                                            <td>RM 247.30</td> --}}
                                            <td>Point Offset</td>
                                            <td>03 June 2020</td>
                                            <td>03 June 2020</td>
                                            <td>Active</td>
                                            
                                            <td>
                                                <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> UPLOAD</a>
                                                </div>
                                                </div>
                                            </td>
                                            <td>-</td>
                                            <td><div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> DOWNLOAD</a>
                                                <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> UPLOAD</a>
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
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
<script>
$(function() {
  $('[data-toggle="popover"]').popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
  });
});
</script>
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
