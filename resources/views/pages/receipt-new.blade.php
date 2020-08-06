@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Receipt')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link href="{{asset('assets/css/invoice-style.css') }}" rel="stylesheet" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation float-sm-left"  >
    <div class="row" x-data="{name: ''}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Add New Receipt</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="" novalidate>
                         @csrf
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Member</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="mbrship_id">Membership No</label>
                                        <select name="mbrship_id" id="mbrship_id" class="select2 custom-select form-control" data-validation-required-message="Please select a member" onchange="setInputName()" required>
                                            <option value="" disabled selected>Membership No</option>
                                            @if(isset($payload))
                                                @foreach($payload['memberships'] as $membership)
                                            <option value="{{$membership->mbrship_id}}" data-name="{{$membership->lead->name}}">{{$membership->mbrship_no}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" id="name" x-bind:value="name" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Details</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label for="location">Collected By</label>
                                        <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                            <option value="1">MSCHQ</option>
                                            <option value="2">OTP-AMEX</option>
                                            <option value="1">OTP-VISA/MASTER</option>
                                            <option value="2">MPRC</option>
                                            <option value="1">SALES AGENT</option>
                                            

                                        </select>           
                                    </div>
                                </div>
                            </div>

                           
                            <!-- onchange -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Method</label>
                                        <select name="method" id="method" class="custom-select form-control" onchange="creditCardSection()" data-validation-required-message="Please select a package type" required>
                                            <option value="internetbanking">Internet Banking</option>
                                            <option value="creditcard" >Credit Card</option>
                                            <option value="cheque">Cheque</option>
                                        </select>     
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Bank in to</label>
                                        <select name="salutation1" class="custom-select form-control" data-validation-required-message="Please select a salutation." required>
                                            <option value="Mr.">RHB Bank</option>
                                            <option value="Ms.">May Bank</option>
                                            <option value="Dr.">Cimb Bank</option>
                                            <option value="Dr.">Public Bank</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">Bank-in Ref No.</label>
                                        <input type="number" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="income">Amount</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="number" class="form-control required" placeholder="5000" id="income" name="income">
                                        <div class="form-control-position">RM</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group controls">
                                    <label class="d-block">Remarks</label>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder=""></textarea>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1" id="creditcard">
                            <div class="col-12">
                                <h6 class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Credit Card Info</h6>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label>Select Terminal</label>
                                    <input type="link" class="form-control" placeholder="Please select Terminal" id="terminal_id" name="tid" data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">Card No.</label>
                                        <input type="number" name="name" class="form-control" placeholder="1234 0000 1234" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">Card Expiry</label>
                                        <input type="number" name="name" class="form-control" placeholder="01/2024" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">Card Isssuer Bank</label>
                                    <select name="salutation1" class="custom-select form-control" data-validation-required-message="Please select a card issuer bank." required>
          
                                        <option value="Mr.">RHB Bank</option>
                                        <option value="Ms.">Cimb Bank</option>
                                        <option value="Dr.">May Bank</option>
                                        <option value="Dr.">Public Bank</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">Name on Card</label>
                                        <input type="name" name="name" class="form-control" placeholder="John Doe" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">CVV</label>
                                        <input type="number" name="name" class="form-control" placeholder="100" required>
                                </div>
                            </div>

                            <!-- credit card option -->
                            <div class="col-sm-4" id="ccshow">
                                <div class="form-group">
                                    <label>Bank Charges</label>
                                    <input type="text" class="form-control" id="bank_charges" name="bank_charges" placeholder="6.00 %" readonly>
                                </div>
                            </div>

                            <!-- credit card option -->
                            <div class="col-md-4" id="ccshow">
                                <div class="form-group">
                                    <label for="income">Charge Date</label>
                                    <input type="text" class="form-control" id="tax_note" name="tax_note" value="01 May 2020">
                                </div>
                            </div>

                            <!-- credit card option -->
                            <div class="col-md-4" id="ccshow">
                                <div class="form-group">
                                    <label for="income">Clearance Date</label>
                                    <input type="text" class="form-control" id="tax_note" name="tax_note" value="30 May 2020">
                                </div>
                            </div>
                        </div>

                        <div class="row pt-2 align-items-center">
                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <label class="d-block">Subject to</label>
                                    <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
                                        
                                        <option value="Mr.">Installment & AMF, Reservation</option>
                                        <option value="Ms.">Other</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>    
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group controls">
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input" id="checkbox1" checked>
                                        <label for="checkbox1">Show Immature Invoice</label>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body card-dashboard pt-3">
                                <div class="table-responsive">
                                    <table class="table" id="data-table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th></th>
                                                <th class="text-white">Invoice</th>
                                                <th class="text-white">Date</th>
                                                <th class="text-white">Description</th>
                                                <th class="text-white">Amount</th>
                                                <th class="text-white">Paid</th>
                                                <th class="text-white">Balance</th>
                                                <th class="text-white">Receipt Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <a href="{{url('/receipt/new')}}"><button type="button" class="btn btn-primary text-white m-1" id="btn_add1" >Create</button></a>
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
                                                <th class="text-white"></th>
                                                <th class="text-white">TID</th>
                                                <th class="text-white">MID</th>
                                                <th class="text-white">EPP Term</th>
                                                <th class="text-white">Charge Type</th>
                                                <th class="text-white">Bank Charges</th>
                                                <th class="text-white">Merchant Bank</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['terminals'] as $terminal)
                                                <tr>
                                                    <td>
                                                    <fieldset>
                                                        <div class="radio">
                                                        <input type="radio" class="terminal-radio-button" name="terminal_id" id="radio{{$terminal->terminal_id}}" value="{{$terminal->terminal_id}}" onclick="terminalSelect('{{$terminal->tid}}', '{{$terminal->bank_charges}} %')">
                                                        <label for="radio{{$terminal->terminal_id}}"></label>
                                                        </div>
                                                    </fieldset>
                                                    </td>
                                                    <td>{{$terminal->tid}}</td>
                                                    <td>{{$terminal->mid}}</td>
                                                    <td>{{$terminal->epp}}</td>
                                                    <td>{{$terminal->charge_type}}</td>
                                                    <td>{{$terminal->bank_charges}}</td>
                                                    <td>{{$terminal->merchant_bank}}</td>
                                                </tr>
                                                @endforeach
                                            @endif
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                    
                            <div class="px-2 text-center">
                                <button type="button" class="btn btn-outline-primary round" data-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="button" class="btn btn-outline-primary round" data-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Confirm</span>
                                </button>
                                <!-- <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round">Confirm</a> -->
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

<!-- <script>
 function changemethod() {
    var m = document.getElementById("method").value;    
    var s = document.getElementById("ccshow").value;

    s.style.display = "hidden";

    if (m == 'creditcard')
    {
        s.style.visibility = 'visible';
    }
 }

</script> -->

<!-- Form wizard with step validation section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('assets/js/tbl_row_update.js')}}"></script>
<script src="{{asset('assets/js/select_onchange.js')}}"></script>
<script src="{{asset('assets/js/terminal_modal.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
@endsection
