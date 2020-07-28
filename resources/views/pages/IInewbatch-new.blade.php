@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->

<section id="form-repeater-wrapper">
  <!-- form default repeater -->
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-swvb-cyan">
          <h4 class="card-title text-white">
            Interval International Reserve Unit - New Batch
          </h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form repeater-default">
                <div data-repeater-list="group-a">
                    <div data-repeater-item>
                        
                                <div class="row pt-1">
                                    <div class="col">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Batch #1</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="location">Room No.</label>
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
                                                <label for="location">Room Type</label>
                                                <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                    <option value="1">Chalet</option>
                                                    <option value="2">John</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="location"> Bed Type</label>
                                                <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                    <option value="1">Chalet</option>
                                                    <option value="2">John</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="location">Week</label>
                                                <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                    <option value="1">Chalet</option>
                                                    <option value="2">John</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Check In</label>
                                                    <input type="date" class="form-control" value="14 July 2020" id="creditcard" name="name"
                                                    data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Check Out</label>
                                                    <input type="link" class="form-control" value="20 July 2020" id="creditcard" name="name"
                                                    data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                                
                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                    class="bx bx-x"></i>
                                    Delete
                                </button>
                            </div>
                        </div>
                        <hr>
                    
                </div>
                <div class="form-group">
                    <div class="col p-0">
                    <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                        Add
                    </button>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ form default repeater -->
</section>

<!-- Form wizard with step validation section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
@endsection
