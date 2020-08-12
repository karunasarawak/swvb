@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Installment Schedule')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row" x-data="{ edit: false, original:true}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row ml-1">
                        <h4 class="col card-title text-white">Installment Schedule Detail</h4>
                        <a href="{{ url('/installment/calculator') }}" class="btn btn-outline-white round text-white">Installment Calculator</a>
                        <button class="btn btn-outline-white round text-white bx bx-printer ml-1 float-right"></button>

                        <button class="btn btn-outline-white round text-white bx bx-download ml-1 float-right"></button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="" action="" novalidate>
                            @csrf
                            
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue ml-3 font-weight-bold my-auto pt-2">Basic Info</p>
                                    </div>
                                    <div class="col">
                                        <p class="h7 swvb-blue font-weight-bold my-auto pt-2 ml-2">Payment Details</p>
                                    </div>
                                    <div class="col">
                                        
                                        <button type="button" class="btn btn-primary m-1 ml-3 float-right" id="btn_add1" x-show="original" @click="edit=true, original=false">Edit Info</button>
                                        <button type="button" class="btn btn-primary m-1 float-right" x-show="edit" x-cloak @click="edit=false, original=true">                                                                    
                                            Close
                                        </button>
                                        <button type="button" class="btn btn-primary m-1 float-right" x-show="edit" x-cloak >                                                                    
                                            Save
                                        </button>
                                 
                                    </div>

                                </div>

                                <div class="row pt-1 pl-3">
                                    <div class="col">
                                        <div class="row">
                                                <p class="col">Payment Schedule No.</p>
                                                <p class="col font-weight-bold black" x-show="original">12345 0000</p>
                                                <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="12345 0000" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                                <p class="col">Membership No.</p>
                                                <p class="col font-weight-bold black" x-show="original">234561000</p>
                                                <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="234561000" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Name</p>
                                            <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="John Doe" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Package</p>
                                            <p class="col font-weight-bold black" x-show="original">Premier - Full</p>
                                            <p class="col" x-cloak x-show="edit">
                                            <select name="id1" class="select2 form-control" data-validation-required-message="Please select a installation duration" required>
                                                <option value="" disabled>--</option>
                                                <option value="d1">Premier - Full</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Instalment Plan</p>
                                            <p class="col font-weight-bold black" x-show="original">12 Month</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="Supplier" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Down Payment 1</p>
                                            <p class="col font-weight-bold black" >RM 200</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Down Payment 2</p>
                                            <p class="col font-weight-bold black">RM 1000<button class="border-0 bg-transparent" data-toggle="modal" data-target="#downpayment" x-cloak x-show="edit" ><i class="bx bx-plus-circle pl-2"></i></p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Membership Price</p>
                                            <p class="col font-weight-bold black" x-show="original">RM 1000</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="number" name="salutation" class="form-control" placeholder="RM 1000" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Paid (%)</p>
                                            <p class="col font-weight-bold black" x-show="original">20%</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="number" name="salutation" class="form-control" placeholder="20%" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Admin Charges (%)</p>
                                            <p class="col font-weight-bold black" x-show="original">4%</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="Supplier" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Remarks</p>
                                            <p class="col font-weight-bold black" x-show="original">-</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="Remarks" data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                           
                                
                                    <div class="table table-responsive pt-3">
                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">No.</th>
                                                    <th class="text-white">Invoice No.</th>
                                                    <th class="text-white">Projected Date</th>
                                                    <th class="text-white">Actual Date</th>
                                                    <th class="text-white">Invoice Date</th>
                                                    <th class="text-white">Item Name</th>
                                                    <th class="text-white">Amount</th>
                                                    <th class="text-white expanded">Down Payment 1</th>
                                                    <th class="text-white expanded">Down Payment 2</th>
                                                    <th class="text-white">Admin Charges</th>
                                                    <th class="text-white">Total</th>
                                                    <th class="text-white">Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td></td>
                                                    <td>22 June 2020</td>
                                                    <td>22 June 2020</td>
                                                    <td>01 July 2020</td>
                                                    <td>Down Payment 1</td>
                                                    <td>RM 300</td>
                                                    <td>RM 1000</td>
                                                    <td>250</td>
                                                    <td>23.4</td>
                                                    <td>2325</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td></td>
                                                    <td>22 June 2020</td>
                                                    <td>22 June 2020</td>
                                                    <td>01 July 2020</td>
                                                    <td>Down Payment 1</td>
                                                    <td>RM 300</td>
                                                    <td>RM 1000</td>
                                                    <td>250</td>
                                                    <td>23.4</td>
                                                    <td>2325</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td></td>
                                                    <td>22 June 2020</td>
                                                    <td>22 June 2020</td>
                                                    <td>01 July 2020</td>
                                                    <td>Down Payment 1</td>
                                                    <td>RM 300</td>
                                                    <td>RM 1000</td>
                                                    <td>250</td>
                                                    <td>23.4</td>
                                                    <td>2325</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td></td>
                                                    <td>22 June 2020</td>
                                                    <td>22 June 2020</td>
                                                    <td>01 July 2020</td>
                                                    <td>Down Payment 1</td>
                                                    <td>RM 300</td>
                                                    <td>RM 1000</td>
                                                    <td>250</td>
                                                    <td>23.4</td>
                                                    <td>2325</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>05</td>
                                                    <td></td>
                                                    <td>22 June 2020</td>
                                                    <td>22 June 2020</td>
                                                    <td>01 July 2020</td>
                                                    <td>Down Payment 1</td>
                                                    <td>RM 300</td>
                                                    <td>RM 1000</td>
                                                    <td>250</td>
                                                    <td>23.4</td>
                                                    <td>2325</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td>06</td>
                                                    <td></td>
                                                    <td>22 June 2020</td>
                                                    <td>22 June 2020</td>
                                                    <td>01 July 2020</td>
                                                    <td>Down Payment 1</td>
                                                    <td>RM 300</td>
                                                    <td>RM 1000</td>
                                                    <td>250</td>
                                                    <td>23.4</td>
                                                    <td>2325</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>Adjustment</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>-30.50</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>8,000.30</th>
                                                    <th>2,005.00</th>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                               

                                
                            
                                <button type="button" class=" btn btn-primary m-3 float-right" id="btn_add1" onclick="showContact2()">Reschedule</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--downpayment-->
<div class="modal fade text-left" id="downpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Down Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form repeater-default">
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item>
                                        <div class="row justify-content-between">
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Email">Down Payment </label>
                                                <input type="email" class="form-control" id="Email" placeholder="Enter email id">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
