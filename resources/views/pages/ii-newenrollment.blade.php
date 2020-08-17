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
<section class="simple-validation">
    <div class="row">   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Membership Info</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="row pt-1">
                                    <div class="col-sm-3">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member's Information</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Last Point Allocation</p>
                                    </div>
                                    <div class="col-sm-3 pl-4">
                                        <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Status</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <p class="col-sm-6">Salutation</p>
                                            <p class="col-sm-6 font-weight-bold black">Mr</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Name</p>
                                            <p class="col-sm-6 font-weight-bold black">John Doe</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Mobile Contact</p>
                                            <p class="col-sm-6 font-weight-bold black">+6012 345 6798</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Whatsapp</p>
                                            <p class="col-sm-6 font-weight-bold black">+6012 345 6798</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Package</p>
                                            <p class="col-sm-6 font-weight-bold black">Pearl Package</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Ext. Membership</p>
                                            <p class="col-sm-6 font-weight-bold black">-</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Status</p>
                                            <p class="col-sm-6 font-weight-bold black">Active</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-6">Entitlement</p>
                                            <p class="col-sm-6 font-weight-bold black">3WD 3WE</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table leads-all">
                                                        <thead class="bg-swvb-dark">
                                                            <tr>
                                                                <th class="text-white">Term</th>
                                                                <th class="text-white">Pts</th>
                                                                <th class="text-white">Allocated</th>
                                                                <th class="text-white">Expiry</th>
                                                                <th class="text-white">Balance</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>10,000</td>
                                                                <td>01.07.2020</td>
                                                                <td>01.07.2020</td>
                                                                <td>3WD 1WE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>10,000</td>
                                                                <td>01.07.2020</td>
                                                                <td>01.07.2020</td>
                                                                <td>3WD 1WE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>10,000</td>
                                                                <td>01.07.2020</td>
                                                                <td>01.07.2020</td>
                                                                <td>3WD 1WE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>10,000</td>
                                                                <td>01.07.2020</td>
                                                                <td>01.07.2020</td>
                                                                <td>3WD 1WE</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>10,000</td>
                                                                <td>01.07.2020</td>
                                                                <td>01.07.2020</td>
                                                                <td>3WD 1WE</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 pl-4">
                                        <div class="row">
                                            <p class="col-sm-7">Paid (%)</p>
                                            <p class="col font-weight-bold black">80%</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-7">AMF Outstanding</p>
                                            <p class="col font-weight-bold black">RM 50</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-7">Installment Outstanding</p>
                                            <p class="col font-weight-bold black">RM 50</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-7">Other Outstanding</p>
                                            <p class="col font-weight-bold black">RM 50</p>
                                        </div>
                                        
                                        <div class="row">
                                            <p class="col-sm-7">Total Outstanding</p>
                                            <p class="col font-weight-bold black">RM 70</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-7">Over Payment</p>
                                            <p class="col font-weight-bold black">RM 100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>  
                    </div>
                </div>
            </div>

            <div class="card" >
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">II Enrollment</h4>
                </div>

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-sm-6 ml-1">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Request Information</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col ml-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Membership No.</label>
                                        <select name="salutation1" class="custom-select"   data-validation-required-message="Please select a salutation." required>
                                            <option value="">--</option>
                                            <option value="Mr.">Membership No.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <label>Eligibility</label>
                                        <select name="salutation1" class="custom-select"  data-validation-required-message="Please select a salutation." required>
                                            <option value="">--</option>
                                            <option value="Mr.">Not Eligible</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Reason</label>
                                        <input type="text" class="form-control" id="item_name" name="item_name"   required>   
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Communication Channel</label>
                                        <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                            <option value="">--</option>
                                            <option value="Mr.">Fax</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Communication Channel</label>
                                        <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                            <option value="">--</option>
                                            <option value="Mr.">Fax</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Started Date</label>
                                        <input type="date" class="form-control"  id="item_name" name="item_name" value="01 July 2020" required>   
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Expired Date</label>
                                        <input type="date" class="form-control"  id="item_name" name="item_name" value="01 July 2020" required>   
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Enrolled Date</label>
                                        <input type="date" class="form-control"  id="item_name" name="item_name" value="01 July 2020" required>   
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="remark">Remark</label>
                                                <textarea class="form-control"  id="remark" name="remark" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <a href="{{url('/')}}">
                            <button type="button" class="btn btn-primary m-1" id="btn_add1">Save</button>
                        </a>
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
