@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Communication Log')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation float-sm-left">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">New Call</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="" novalidate>
                         @csrf
                        
                        <div class="row pt-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Membership No.</label>
                                        <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                            <option value="1">2345600</option>
                                            <option value="2">John</option>

                                        </select>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="John Doe" id="name" name="name"
                                            data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Subject </label>
                                            <input type="text" class="form-control" placeholder="Call Back" id="name" name="name"
                                            data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Date </label>
                                            <input type="date" class="form-control" value="01 May 2020" id="name" name="name"
                                            data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Time </label>
                                            <input type="time" class="form-control" value="10:00am" id="name" name="name"
                                            data-validation-required-message="This Name field is required" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Subject </label>
                                        <fieldset class="invoice-address form-group">
                                            <textarea class="form-control" rows="4" placeholder="John Doe"></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-primary m-1" id="btn_add1" onclick="showContact2()">Save</button>
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
