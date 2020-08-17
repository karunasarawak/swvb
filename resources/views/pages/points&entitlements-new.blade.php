@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Points & Entitlements')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" id="basic-touchspin">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-swvb-cyan">
            <h4 class="card-title text-white">Points & Entitlements</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form-horizontal" method="POST" novalidate>
                @csrf
                <div class="row pt-3">
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" value="" name="name"
                            data-validation-required-message="This Name field is required" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
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
                    <div class="col-sm-6" >
                        <div class="form-group controls">

                            
                                
                                <div class="radio mb-1">
                                    <input type="radio" name="contract_type" value="1" id="individual1"  @click="edit=true, original=false" checked required>
                                    <label for="individual1">Deduct</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="contract_type" value="2" id="corporate1"  @click="edit=false, original=true" required>
                                    <label for="corporate1">Add</label>
                                </div>
                            
                            
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="controls">
                            <label>Total Points/Entitlements</label>
                                <input type="text" class="form-control" placeholder="5000" id="card_limit" name="card_limit"
                                data-validation-required-message="This Credit Card Limit field is required" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="controls">
                            <label>Remarks</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Remarks" id="whatsapp" name="whatsapp"
                                data-validation-required-message="This Whatsapp field is required" required>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="row pt-1 pl-1">
                        <div class="col-sm-12">
                            <p class="h6 swvb-blue font-weight-bold pb-2">Points/Entitlements</p>
                        </div>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                                <div class="d-inline-block mb-1 mr-1">
                                    <input type="number" class="touchspin" value="0">
                                </div>
                                <label>pts</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                                <div class="d-inline-block mb-1 mr-1">
                                    <input type="number" class="touchspin" value="0">
                                </div>
                                <label>WD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                                <div class="d-inline-block mb-1 mr-1">
                                    <input type="number" class="touchspin" value="0">
                                </div>
                                <label>WE</label>
                            </div>
                        </div>
                    </div>
                    
                <button type="submit" class="btn btn-outline-primary round m-2">Save</button>
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
<script src="{{asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/forms/number-input.js')}}"></script>
