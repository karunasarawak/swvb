@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ready to Stamp')

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
                    <h4 class="card-title text-white">Ready to Stamp Listing</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                    <tr>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Primary Member</th>
                                        <th class="text-white">Secondary Member</th>
                                        <th class="text-white">Expiry Date</th>
                                        <th class="text-white">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payload['readyStamp'] as $readyStamp)
                                        <tr>
                                            <td>{{ $list->mbrship_no }}</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                    {{-- <tr>
                                        <td><a href="{{ url('/report/stampingfeedetails') }}">B0001</a></td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
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
                                    </tr>  --}}
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
