@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" novalidate>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                    <label>Venue</label>
                                    <div class="position-relative">
                                        <select name="venue" class="form-control" id="venue" required
                                        data-validation-required-message="Please select a venue">
                                            <option value="">--</option>
                                            <option value="ABC Halls">ABC Halls</option>
                                            <option value="XYZ Halls">XYZ Halls</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                    <label>State</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="whatsapp" name="state" readonly value="Sarawak"
                                        data-validation-required-message="This State field is required" required>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                    <label>State</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="city" name="city" readonly value="Kuching"
                                        data-validation-required-message="This City field is required" required>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Date</label>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="text" class="form-control pickadate" placeholder="Select Date" name="date" required
                                        data-validation-required-message="Please select a Date">
                                        <div class="form-control-position">
                                        <i class='bx bx-calendar'></i>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Time</label>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="text" class="form-control pickatime" placeholder="Select Time" name="time" required
                                        data-validation-required-message="Please select a Time">
                                        <div class="form-control-position">
                                            <i class='bx bx-history'></i>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Lead Info</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                    <div class="form-group">
                        <div class="controls">
                        <label for="location">Salutation</label>
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
                        <input type="text" class="form-control" placeholder="Name" id="name" name="name"
                        data-validation-required-message="This Name field is required" required>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4">
                    <div class="form-group">
                        <div class="controls">
                        <label>Mobile No.</label>
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile"
                            data-validation-required-message="This Mobile No. field is required" required>
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
                        <label>Credit Card Limit</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" class="form-control" placeholder="5000" id="card_limit" name="card_limit"
                            data-validation-required-message="This Credit Card Limit field is required" required>
                            <div class="form-control-position">RM</div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="controls">
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" required
                            data-validation-required-message="This Email field is required">
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
</section>




<!-- Form wizard with step validation section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
