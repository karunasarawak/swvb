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
                        <div class="row">
                            <div class="col-sm-6" >
                                <div class="form-group controls">
                                    <div class="custom-control-inline">
                                        <div class="radio mr-1 pt-2">
                                            <input type="radio" name="contract_type" value="1" id="individual1"  @click="edit=true, original=false" checked required>
                                            <label for="individual1">Inventory</label>
                                        </div>
                                        <div class="radio pt-2">
                                            <input type="radio" name="contract_type" value="2" id="corporate1"  @click="edit=false, original=true" required>
                                            <label for="corporate1">Direct</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
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
                            <div class="col-sm-6">
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
                            <div class="col-sm-6">
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location"> Year</label>
                                        <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                            <option value="1">Chalet</option>
                                            <option value="2">John</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Travel Agent</label>
                                        <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                            <option value="1">Chalet</option>
                                            <option value="2">John</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Hotel</label>
                                        <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                            <option value="1">Chalet</option>
                                            <option value="2">John</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" >
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Check In</label>
                                        <input type="date" name="install_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" >
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Check Out</label>
                                        <input type="date" name="install_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
                                    </div>
                                </div>
                            </div>

                     
                            <div class="col-sm-6" >
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Confirmation No.</label>
                                        <input type="number" name="install_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
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

                <div class="row">
                    <div class="col">
                        <div class="float-right">
                            <button class="btn btn-primary mr-1">Save for approval</button>
                            <button class="btn btn-primary">Save as draft</button>
                        </div>
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
