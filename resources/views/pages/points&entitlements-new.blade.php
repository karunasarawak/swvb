@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Points $ Entitlements')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Points $ Entitlements</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form-horizontal" method="POST" novalidate>
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                        <div class="controls">
                        <label for="location">Membership No.</label>
                        <select class="custom-select form-control" id="salutation" name="salutation"
                        data-validation-required-message="Please select a salutation" required>
                            <option value="">--</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Sir">Sir</option>
                            <option value="Mdm">Mdm</option>
                            <option value="Tuan Haji">Tuan Haji</option>
                            <option value="Puan Hajjah">Puan Hajjah</option>
                            <option value="Encik">Encik</option>
                            <option value="Puan">Puan</option>
                            <option value="Dato">Dato</option>
                            <option value="Datu">Datu</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" value="" name="name"
                            data-validation-required-message="This Name field is required" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Current Points/Entitlements</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile"
                                data-validation-required-message="This Mobile No. field is required" readonly>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4" >
                        <div class="form-group controls">

                            <div class="custom-control-inline">
                                <div class="radio mr-1">
                                    <input type="radio" name="contract_type" value="1" id="individual1"  @click="edit=true, original=false" checked required>
                                    <label for="individual1">Deduct</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="contract_type" value="2" id="corporate1"  @click="edit=false, original=true" required>
                                    <label for="corporate1">Add</label>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Whatsapp</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="+60 12 345 6789" id="whatsapp" name="whatsapp"
                                data-validation-required-message="This Whatsapp field is required" required>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Total Points/Entitlements</label>
                                <input type="text" class="form-control" placeholder="5000" id="card_limit" name="card_limit"
                                data-validation-required-message="This Credit Card Limit field is required" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Term</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="+60 12 345 6789" id="whatsapp" name="whatsapp"
                                data-validation-required-message="This Whatsapp field is required" required>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Expiry Date</label>
                            <div class="position-relative">
                                <input type="date" class="form-control" placeholder="+60 12 345 6789" id="whatsapp" name="whatsapp"
                                data-validation-required-message="This Whatsapp field is required" required>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label for="location">Telemarkerter</label>
                            <select class="custom-select form-control" id="telemarkerter" name="telemarkerter"
                            data-validation-required-message="Please select a telemarketer." required>
                                <option value="">--</option>
                                <option value="McClara">McClara</option>
                                <option value="Mark">Mark</option>
                                <option value="John">John</option>
                                <option value="Son">Son</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary round mr-1 mb-1">Save</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
@endsection