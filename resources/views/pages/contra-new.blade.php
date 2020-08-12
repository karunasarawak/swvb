@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Contra')

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
                    <h4 class="card-title text-white">New Contra</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('leads.store')}}" novalidate>
                         @csrf
                        
                        
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-sm-6">
                                <p class="h6 swvb-blue font-weight-bold my-auto pb-2">Membership Detail</p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <label for="">Membership No.</label>
                                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                        <option value="">--</option>
                                        <option value="Mr.">100020000</option>
                                        <option value="Ms.">100030000</option>
                                        <option value="Dr.">100040000</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group controls">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" readonly>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 pt-2">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice Received</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group controls">
                                            <label>Invoice No.</label>
                                            <input type="text" name="number" class="form-control" placeholder="Invoice No" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-6">
                                        <div class="form-group controls">
                                            <label>Amount(RM)</label>
                                            <input type="text" name="number" class="form-control" placeholder="Amount" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="form-group controls">
                                            
                                            <label>Remark</label>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                            </fieldset>
                                        </div>
                                    </div> 
                                </div>
                                </div>
                            
                            </div>
                            
                        </div>


                        
                        <div class="row pt-1">
                            <div class="col-sm-6 ">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contra With</p>
                            </div>
                            
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th>
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            
                                                            <input type="checkbox" class="checkbox-input" id="checkbox1">
                                                            <label for="checkbox"></label>
                                                        </div>
                                                    </fieldset>
                                                </th>
                                                <th class="text-white">Invoice</th>
                                                <th class="text-white">Date</th>
                                                <th class="text-white">Description</th>
                                                <th class="text-white">Amount</th>
                                                <th class="text-white">Paid</th>
                                                <th class="text-white">Balance</th>
                                                <th class="text-white">Applied Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                            <label for="checkbox2"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                                <td>
                                                    <input type="text" name="" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                    <label for="checkbox3"></label>
                                                    </div>
                                                    </fieldset>
                                                </td>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td>50</td>
                                                <td>150</td>
                                                <td>
                                                    <input type="text" name="" class="form-control">
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            

                        </div>
                        <a href="{{url('/refund')}}">
                        <button type="button" class="btn btn-primary m-1" id="btn_add1">Create</button>
                        </a>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
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
                                                    <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                    <label for="checkbox2"></label>
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