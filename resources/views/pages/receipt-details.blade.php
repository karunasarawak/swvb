@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Receipt')

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
                    <h4 class="card-title text-white ml-3">RCPT-123456</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('leads.store')}}" novalidate>
                         @csrf
                        
                        
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-3 pl-2">
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Details</p>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Membership No.</p>
                                    <p class="col font-weight-bold black">234560000</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">John Doe</p>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Branch</p>
                                    <p class="col font-weight-bold black">Kuching Branch</p>
                                </div>
                                <div class="row">
                                    <p class="col">Method</p>
                                    <p class="col font-weight-bold black">Online Banking</p>
                                </div>
                                <div class="row">
                                    <p class="col">Banked in to</p>
                                    <p class="col font-weight-bold black">RHB Bank</p>
                                </div>
                                <div class="row">
                                    <p class="col">Bank-in to Account</p>
                                    <p class="col font-weight-bold black">123412341234</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">Open</p>
                                </div>
                                <div class="row">
                                    <p class="col">Creation Date</p>
                                    <p class="col font-weight-bold black">01 May 2020</p>
                                </div>
                                <div class="row">
                                    <p class="col">Remarks</p>
                                    <p class="col font-weight-bold black">-</p>
                                </div>
                                
                            </div>
                        </div>


                        <!-- credit card method payment details -->
                        <div class="row pt-1 pl-2">
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member</p>
                            </div>
                            
                        </div>
                        <div class="row pl-2">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Terminal</p>
                                    <p class="col font-weight-bold black">8100489</p>
                                </div>
                                <div class="row">
                                    <p class="col">Card Issuer Bank</p>
                                    <p class="col font-weight-bold black">RHB Bank</p>
                                </div>
                                <div class="row">
                                    <p class="col">Card No.</p>
                                    <p class="col font-weight-bold black">1234 0000 1234</p>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Name on Card</p>
                                    <p class="col font-weight-bold black">John Doe</p>
                                </div>
                                <div class="row">
                                    <p class="col">Card Expiry</p>
                                    <p class="col font-weight-bold black">01/2024</p>
                                </div>
                                <div class="row">
                                    <p class="col">CVV</p>
                                    <p class="col font-weight-bold black">100</p>
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Batch Payment No.</p>
                                    <p class="col font-weight-bold black">1</p>
                                </div>
                                <div class="row">
                                    <p class="col">Approval Code</p>
                                    <p class="col font-weight-bold black">12312</p>
                                </div>
                                
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-sm-6 pl-3">
                                <div class="form-group controls">
                                    <label class="d-block">Subject to</label>
                                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                        
                                        <option value="Mr.">Installment & AMF, Reservation</option>
                                        <option value="Ms.">Other</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>    
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group controls p-2">
                                    <input type="checkbox" id="imatureinvoice22" name="immatureinvoice22" required>
                                    <label for="immatureinvoice22">Show Immature Invoice</label>
                                </div>
                            </div>

                            <div class="card-body card-dashboard pt-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Invoice</th>
                                                <th class="text-white">Date</th>
                                                <th class="text-white">Description</th>
                                                <th class="text-white">Amount</th>
                                                <th class="text-white">Paid</th>
                                                <th class="text-white">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <button type="button" class="btn btn-primary m-1" id="btn_add1" onclick="showContact2()">Create</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel33" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-swvb-cyan">
                      <h4 class="modal-title text-white" id="myModalLabel33">Choose Terminal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                      </button>
                    </div>
                    <form action="#">
                      <div class="modal-body">
                            <div class="form-group controls">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">TID</th>
                                                <th class="text-white">TID</th>
                                                <th class="text-white">MID</th>
                                                <th class="text-white">ERP Term</th>
                                                <th class="text-white">Charge Type</th>
                                                <th class="text-white">Bank Charges</th>
                                                <th class="text-white">Merchant Bank</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                <fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox200" >
                                                    <label for="checkbox200"></label>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>81004899</td>
                                                <td>000001090105818</td>
                                                <td>0</td>
                                                <td>MAN</td>
                                                <td>0.80</td>
                                                <td>CIMB E-debit</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                    <label for="checkbox3"></label>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>81004899</td>
                                                <td>000001090105818</td>
                                                <td>0</td>
                                                <td>MAN</td>
                                                <td>0.80</td>
                                                <td>CIMB Debit debit</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                <fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                    <label for="checkbox4"></label>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>81004899</td>
                                                <td>000001090105818</td>
                                                <td>0</td>
                                                <td>MAN</td>
                                                <td>0.80</td>
                                                <td>CIMB Debit debit</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                <fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox5">
                                                    <label for="checkbox5"></label>
                                                    </div>
                                                </fieldset>
                                                </td>
                                                <td>81004899</td>
                                                <td>000001090105818</td>
                                                <td>0</td>
                                                <td>MAN</td>
                                                <td>0.80</td>
                                                <td>CIMB Debit debit</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                    
                            <div class="px-2">
                                    <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Cancel</a>
                                    <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Confirm</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                          <i class="bx bx-x d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Save</span>
                        </button>
                    
                      </div>
                    </form>
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
