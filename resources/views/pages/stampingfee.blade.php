@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Stamping Fee List')

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
                    <div class="card-title">
                        <div class="row">
                            <h4 class="text white col">Stamping Fee Batch List
                                <a href="{{ route('stamp.ready') }}">
                                    <button type="button" class="btn btn-outline-white round text-white ml-2">Create New Batch</button>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Batch No.</th>
                                        <th class="text-white">No of Members</th>
                                        <th class="text-white">Stamping Fee</th>
                                        <th class="text-white">Penalty</th>
                                        <th class="text-white">Total Stamping Fee</th>
                                        <th class="text-white">Date of Request</th>
                                        <th class="text-white">Date of Approved</th>
                                        <th class="text-white">Date send for stamping</th>
                                        <th class="text-white">Date of Received</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payload['list'] as $list)
                                        <tr>
                                            <td><a href="{{ route('stamp.details',$list->sfb_id) }}">{{ $list->sfb_id }}</a></td>
                                            <td></td>                        
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="dropdown">
                                                    <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="bg-transparent border-0" data-toggle="modal" data-target="#addCall">
                                                            <a class="dropdown-item" href="#" ><i class="bx bx-trash mr-1"></i> DELETE</a>
                                                        </button>
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

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">UPDATE STATUS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group controls">       

                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="controls">
                                <label>TourID</label>
                                    <input type="text" class="form-control" value="" id="tourid" name="tourid"
                                    data-validation-required-message="This Name field is required" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="controls">
                                <label>Date</label>
                                    <input type="date" class="form-control" value="01 June 2020" id="date" name="date"
                                    data-validation-required-message="This Name field is required" required>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-sm-12">
                        <div class="form-group">
                                <div class="controls">
                                    <label>Initial Scheduled Time</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" class="form-control" placeholder="1:00 PM" id="card_limit" name="card_limit"
                                            data-validation-required-message="This Credit Card Limit field is required" required>
                                                
                                        </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                                <div class="controls">
                                    <label>Venue</label>
                                        <div class="position-relative has-icon-left">
                                            <select name="venue" class="custom-select" data-validation-required-message="Please select a venue." required>
                                                <option value="">--</option>
                                                @if(isset($venues))
                                                    @foreach($venues as $venue)
                                                        <option value="">{{$venue-> venue}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                </div>
                        </div>
                    </div>
                       
                    </div>
                </div>

                     
                      <div class="modal-footer">
                           <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                                  <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Save</span>
                           </button>
                           
                           <button type="button" class="close btn btn-light-secondary" data-dismiss="modal" aria-label="close">
                                  <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                           </button>
                      </div>
            </form>
        </div>
    </div>
</div>

<script>
    function tokenModal($id)
    {
        alert($id);
    }
</script>

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
