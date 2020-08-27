@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Repurchase of Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@php
    use App\Http\Controllers\MembershipController;
    use App\Http\Controllers\StaffsController;
    use App\Http\Controllers\SalesTeamController;
    use App\Http\Controllers\Calculations;
@endphp

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation float-left">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title text-white">Repurchase of Membership</h4>
                        </div>
                        
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{route('membership.addRepurchase', $payload['membership']->mbrship_id)}}">
                            @csrf
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Repurchase</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="applicant-name">Name of Applicant</label>
                                            <input type="name" name="applicant_name" class="form-control" placeholder="--" data-validation-required-message="Please enter name of applicant" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="request-date">Date of Request</label>
                                                <input type="date" class="form-control" value="{{ date('Y-m-d') }}" id="application-date" name="request_date"
                                                data-validation-required-message="Please enter date of request" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="received-date">Date of Request Received</label>
                                            <input type="date" class="form-control" value="{{ date('Y-m-d') }}" id="received-date" name="received_date"
                                                data-validation-required-message="Please enter date of request received" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Status</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="payment-to-date">Membership Payment to Date</label>
                                            <input type="number" class="form-control" placeholder="RM" id="payment-to-date" name="payment_to_date" value="{{ number_format(Calculations::getInstallationToDate($payload['membership']->mbrship_id), 2) }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="amf-to-date">Annual Maintenance Fee Payment to Date</label>
                                            <input type="number" class="form-control" placeholder="RM" id="amf-to-date" name="amf_to_date" value="{{ number_format(Calculations::getAmfToDate($payload['membership']->mbrship_id), 2) }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <div class="controls">
                                            <label for="outst-amt">Outstanding Amount</label>
                                            <input type="number" class="form-control" placeholder="RM" id="outst-amt" name="outst_amt" value="{{ number_format(Calculations::getTotalOutstanding($payload['membership']->mbrship_id), 2) }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                            </div>

                        </div>

                        <div class="card-body card-dashboard pt-1">
                            <label>Entitlement Balance</label>
                            <div class="table-responsive">
                                <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Term</th>
                                                <th class="text-white">Weekday</th>
                                                <th class="text-white">Weekend</th>
                                                <th class="text-white">Balance</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        @foreach($payload['terms'] as $t)
                                        <tr>
                                            <td>{{ $t->term }}</td>
                                            <td>{{ MembershipController::getTermEnt($t->term, $payload['membership']->mbrship_id, 1) }}</td>
                                            <td>{{ MembershipController::getTermEnt($t->term, $payload['membership']->mbrship_id, 2) }}</td>
                                            <td>{{ MembershipController::getRemainEnt($t->term, $payload['membership']->mbrship_id, 1) }} WD {{ MembershipController::getRemainEnt($t->term, $payload['membership']->mbrship_id, 2) }} WE</td>
                                        </tr>
                                        @endforeach()

                                        <tr>
                                            <td colspan="3">Total Balance</td>
                                            <td>
                                                {{ MembershipController::getAllRemainEnt($payload['membership']->mbrship_id, 1) }} WD {{ MembershipController::getAllRemainEnt($payload['membership']->mbrship_id, 2) }} WE
                                                <input type="hidden" class="form-control" name="balance_wd" value="{{ MembershipController::getAllRemainEnt($payload['membership']->mbrship_id, 1) }}">
                                                <input type="hidden" class="form-control" name="balance_we" value="{{ MembershipController::getAllRemainEnt($payload['membership']->mbrship_id, 2) }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                            <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Instruction</h6>
                                </div>
                            
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Current Membership Period</label>
                                            <input type="number" class="form-control" placeholder="RM" id="nett-repurchase" name="current_period" value="{{ $payload['membership']->mbrship_term }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-sm-6">
                                </div>          

                                <div class="col-sm-6">
                                    <div class="form-group controls">
                                        <div class="form-group controls">
                                            <label for="repurchase-amount" class="d-block">Repurchase Amount</label>
                                            <input type="number" class="form-control" placeholder="RM" id="repurchase-amount" name="repurchase_amt" value="{{ MembershipController::calculateRepurchasePrice($payload['membership']->mbrship_term, $payload['membership']->package_id, $payload['membership']->package_price) }}" readonly>                                        
                                        </div>
                                    </div>
                                </div>          

                                <div class="col-sm-6">
                                    <div class="form-group controls">
                                        <label for="nett-repurchase" class="d-block">Total Nett Amount</label>
                                        <input type="number" class="form-control" placeholder="RM" id="nett-repurchase" name="nett_repurchase" step="0.01" min="0"
                                                data-validation-required-message="Please enter total nett amount" required>
                                    </div>
                                </div>          
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group controls">
                                        <label for="payment-remarks" class="d-block">Remarks</label>
                                        <input type="text" class="form-control" placeholder="--" id="payment-remarks" name="payment_remarks">
                                    </div>
                                </div>          
                            </div>
                            
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Bankers Details</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-holder">Name</label>
                                            <input type="text" class="form-control" placeholder="--" id="account-holder" name="account_holder"
                                                data-validation-required-message="Please enter banker's name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="bank-name">Bank</label>
                                            <input type="text" class="form-control" placeholder="--" id="bank-name" name="bank_name"
                                                data-validation-required-message="Please enter bank name" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="account-no">Account No.</label>
                                            <input type="number" class="form-control" placeholder="--" id="account-no" name="account_no"
                                                data-validation-required-message="Please enter account no." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" placeholder="--" id="address" name="address"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary float-left position-relative mb-5" id="btn_add1" onclick="showContact2()">Submit</button>
                        </form>
                 </div>
            </div>
            
         </div>
        </div>
        <!-- Current membership info!!!! -->
        <div class="col-md-4 float-right-top">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Current Membership Info</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="py-50">Member Info</h6>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Member Name</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->name }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Contact No.</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->mobile_no }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                <div class="col-12">
                                    <h6 class="py-50">Membership Info</h6>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Membership No.</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->mbrship_no }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Date of Application</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->application_date }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Date of Agreement</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->agreement_date }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Package Type</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->package }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Package Price</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->package_price }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Entitlement</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->package_wd }} WD {{ $payload['membership']->package_we }} WE</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">External Membership</p>
                                            <p class="col font-weight-bold black">{{ MembershipController::hasExtMembership($payload['membership']->mbrship_id) }}</p>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>

            <!-- Assignment     -->
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title text-white">Assignments</h4>
                    </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Declaration No.</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->declaration_no }}</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">MRO</p>
                                            <p class="col font-weight-bold black">@php echo StaffsController::getStaffName($payload['membership']->mro) @endphp</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">CCO</p>
                                            <p class="col font-weight-bold black">@php echo StaffsController::getStaffName($payload['membership']->cco) @endphp</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Sales Personnel</p>
                                            <p class="col font-weight-bold black">@php echo SalesTeamController::getSalesTeamMemberName($payload['membership']->sales_personnel_id) @endphp</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Sales Manager</p>
                                            <p class="col font-weight-bold black">@php echo SalesTeamController::getSalesTeamMemberName($payload['membership']->sales_manager_id) @endphp</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Sales Venue</p>
                                            <p class="col font-weight-bold black">{{ $payload['membership']->venue_name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
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
