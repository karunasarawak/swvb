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
                    <div class="row">
                        <h4 class="col card-title text-white ml-2">CR-123456
                        <button class="btn btn-outline-white offset-8 round text-white bx bx-printer"></button>
                        <button class="btn btn-outline-white round text-white bx bx-download"></button>
                        <button class="btn btn-outline-white round text-white bx bx-pencil"></button>
                        </h4>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="" action="" novalidate>
                         @csrf
                        
                        
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-2">
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Travel Agent</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice Received</p>
                            </div>
                            <div class="col-sm-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contract With</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Travel Agent</p>
                                    <p class="col font-weight-bold black">234560000</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">John Doe</p>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Invoice No.</p>
                                    <p class="col font-weight-bold black">234560000</p>
                                </div>
                                <div class="row">
                                    <p class="col">Remarks</p>
                                    <p class="col font-weight-bold black">-</p>
                                </div>
                                <div class="row">
                                    <p class="col">Creation Date</p>
                                    <p class="col font-weight-bold black">RHB Bank</p>
                                </div>
                               
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Invoice No.</p>
                                    <p class="col font-weight-bold black">234560000</p>
                                </div>
                                <div class="row">
                                    <p class="col">Amount</p>
                                    <p class="col font-weight-bold black">RM100</p>
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
                                                <th></th>
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
                                                <td><fieldset>
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
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                        

                        </div>
                        <a href="{{url('/refund')}}" class="btn btn-primary text-white m-1">Create</a>
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
