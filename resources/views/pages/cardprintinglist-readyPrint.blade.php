@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ready to Print')

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
                            <h4 class="text white col">Ready to Print Listing
                                <a href="" class="btn btn-outline-white round text-white float-right">Download</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="table-responsive pt-3">
                            <form action={{ route('card.create') }} method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Supplier</label>
                                            <select name="supplier" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                                                <option value="">--</option>
                                                @foreach($payload['supplier'] as $supplier)
                                                    <option value="{{ $supplier->supplier_id }}">{{ $supplier->supplier_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <table class="table tours-all">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th>
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="pri_check" name="pri_check" onclick="checkAll()">
                                                        <label for="pri_check" class="text-white">Select ALl</label>
                                                    </div>
                                                </fieldset>
                                            </th>
                                            <th class="text-white">Membership No.</th>
                                            <th class="text-white">Primary Member</th>
                                            <th class="text-white">Secondary Member</th>
                                            <th class="text-white">Expriy Date</th>
                                            <th class="text-white">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($payload['mbrship'] as $mbrship)
                                        <tr>
                                            <td>
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" name="check{{ $loop->iteration }}" value="{{ $mbrship->mbrship_no }}" id="checkbox{{ $loop->iteration }}" >
                                                        <label for="checkbox{{ $loop->iteration }}">Select</label>
                                                    </div>
                                                </fieldset>
                                            </td>
                                            <td>{{ $mbrship->mbrship_no }}</td>
                                            <td>{{ $mbrship->name1 }}</td>
                                            <td>{{ $mbrship->name2 }}</td>
                                            <td>{{ $mbrship->mbrship_exp }}</td>

                                            @if($mbrship->mbrship_status == 2)
                                                <td>Activate</td>
                                            @else
                                                <td style="color:red;">Error</td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                                    <button style="margin-right:2.5%;" type="submit" class=" btn btn-primary float-right" id="btn_add1">Create</button>
                                </div>
                            </form>
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
<script>
    function checkAll()
    {
        checkboxes = document.getElementsByClassName("checkbox-input");
        pri_check = document.getElementById("pri_check");

        if(pri_check.checked  == true)
        {
            for(var i = 0; i < checkboxes.length; i++)
            {
                checkboxes[i].checked = true;
            }
        }
        else if (pri_check.checked == false)
        {
            for(var i = 0; i < checkboxes.length; i++)
            {
                checkboxes[i].checked = false;
            }
        }  
    }
</script>
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
