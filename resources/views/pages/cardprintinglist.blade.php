@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Card Printing List')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Basic tabs start -->
<section id="basic-tabs-components">
    <div class="row">
        <div class="col-12">
            <div class="card"> 
                <div class="card-header bg-swvb-cyan">
                    <div class="card-title">
                        <div class="row">
                            <h4 class="text white col">Card Printing Batch List
                                <a href="{{ route('card.ready') }}">
                                    <button type="button" class="btn btn-outline-white round text-white ml-2">Create New Batch</button>
                                </a>
                                <a href="" class="btn btn-outline-white round text-white float-right">Download</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive pt-3">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox10">
                                                    <label for="checkbox10"></label>
                                                </div>
                                            </fieldset>
                                        </th>
                                        <th class="text-white" href="{{ route('card.details') }}">Batch No.</th>
                                        <th class="text-white">Consignment No.</th>
                                        <th class="text-white">Mode of Dispatch</th>
                                        <th class="text-white">DIspatch Date</th>
                                        <th class="text-white">Status</th>
                                        <th class="text-white">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    
                                        <td>
                                            <fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                    <label for="checkbox2"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><a href="{{ route('card.details') }}">14</a></td>
                                        {{-- <?php echo "<script>alert('HI')</script>"; ?> --}}
                                        <td><a>100044</a></td>
                                        <td><a>Self Collection</a></td>
                                        <td><a>01 April 2020</a></td>
                                        <td>Sent for Printing</td>
                                        
                                        <td>
                                            <div class="dropdown">
                                                <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#default">
                                                        <a class="dropdown-item"><i class="bx bx-send mr-1"></i> Sent</a>
                                                    </button>
                                                    <button class="bg-transparent border-0" data-toggle="modal" data-target="#inlineForm">
                                                        <a class="dropdown-item" ><i class="bx bx-envelope mr-1"></i> Receive</a>
                                                    </button>
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
</section>
<!-- Basic Tag Input end -->

<!-- Received modal popout -->
<div class="modal fade" id="default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
            <h5 class="modal-title text-white" id="exampleModalLongTitle">Received</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
            </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>Dispatch Mode</label>
                    <select name="role1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                        <option value=""></option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <label>Consignment No.</label>
                        <input  type="number" name="staff_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                    </div>
                </div>
                                
                    
                <div class="form-group">
                    <div class="controls">
                        <label>Invoice No.</label>
                        <input  type="text" name="email" class="form-control" placeholder="@saraworldwide.com" data-validation-required-message="Please write the email"  required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <label>Courier Payment</label>
                        <div class="position-relative has-icon-left">
                            <input  type="text" name="email" class="form-control" placeholder="@saraworldwide.com" data-validation-required-message="Please write the email"  required>
                            <div class="form-control-position">RM</div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="controls">
                        <label>Date</label>
                        <input type="date" name="email" class="form-control" placeholder="" data-validation-required-message="Please write the email"  required>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>

            <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Accept</span>
            </button>
            </div>
        </div>
    </div>
</div>

<!-- Sent modal popout -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Sent </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Date </label>
                    <div class="form-group">
                        <input type="date" placeholder="Email Address" class="form-control">
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Sent modal popout -->
<div class="modal fade text-left" id="new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Sent </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Supplier</label>
                        <select name="role1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                            <option value=""></option>
                        </select>
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datetime-moment.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
@endsection
