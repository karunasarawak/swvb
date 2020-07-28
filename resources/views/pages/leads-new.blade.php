@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Leads')

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
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">New Leads</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="" novalidate>
                        @csrf
                        <input type="hidden" name="status" value="1">
                        <div class="row pt-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="location">Salutation</label>
                                    <select class="custom-select form-control" id="salutation" name="salutation_id"
                                    data-validation-required-message="Please select a salutation" required>
                                        <option value="">--</option>
                                        @foreach ($payload['salutations'] as $salutation)
                                            <option value="{{$salutation->salutation_id}}">{{$salutation->salutation}}</option>
                                        @endforeach
                                    </select>
                                    
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
                                            <input type="text" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
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
                                            <input type="text" class="form-control" placeholder="+60 12 345 6789" id="whatsapp" name="whatsapp_no"
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
                                            <input type="text" class="form-control" placeholder="5000" id="card_limit" name="credit_card_limit"
                                            data-validation-required-message="This Credit Card Limit field is required" required>
                                            <div class="form-control-position">RM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Telemarkerter</label>
                                        <select class="custom-select form-control" id="telemarkerter" name="telemarketer_id"
                                        data-validation-required-message="Please select a telemarketer." required>
                                            <option value="">--</option>
                                            @foreach ($payload['telemarketers'] as $telemarketer)
                                                <option value="{{$telemarketer->sales_team_id}}">{{$telemarketer->sales_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary mr-1 mb-1 mt-1">Save</button>
                        <a href="{{route('leads.all')}}" class="btn btn-outline-primary mr-1 mb-1 mt-1">Cancel</a>
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
