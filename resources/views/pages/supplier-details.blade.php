@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Stamping Fee')

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
                    <div class="row">
                        <h4 class="col-md-10 card-title text-white ml-4">Membership Card Printing List</h4>
                        <a href="{{ url('report/stampingfeedprintdownload') }}" class="btn btn-outline-white round text-white bx bx-download float-right"></a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="" action="" novalidate>
                         @csrf
                        
                        
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1 pl-3">
                            
                                <p class="h5 swvb-blue m-0 font-weight-bold my-auto pb-2 col-sm-8">Batch 330</p>
                                <button type="button" class="col btn btn-primary m-1" x-show="original" @click="edit=true, original=false">Edit Info</button>
                                <p class="col h7  m-0 font-weight-bold my-auto pb-2">
                                    <button class="btn btn-primary" x-show="edit" x-cloak >                                                                    
                                        Save
                                    </button>
                                </p>
                                <p class="col h7 m-0 font-weight-bold my-auto pb-2">
                                    <button class="btn btn-primary" x-show="edit" x-cloak @click="edit=false, original=true">                                                                    
                                        Close
                                    </button>
                                </p>

                            
                            
                        </div>
                        <div class="row pt-1 pl-3">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Supplier</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Supplier" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Date Request</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Date Request" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Status" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Invoice No.</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Invoice No." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Consignment No.</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Consignment No." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Request By</p>
                                    <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Request By" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                
                            </div>

                            <div class="col">
                                
                                <div class="row">
                                    <p class="col">Request Date</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Request Date" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>

                                <div class="row">
                                    <p class="col">Checked By</p>
                                    <p class="col font-weight-bold black" x-show="original">Chris</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Checked By" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Approved By</p>
                                    <p class="col font-weight-bold black" x-show="original">Wilson</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Approved By" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Approved Date</p>
                                    <p class="col font-weight-bold black" x-show="original"s>02 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Approved Date" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                            </div>
                           
                        </div>

                            <div class="card-body card-dashboard pt-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th></th>
                                                <th class="text-white">Membership No.</th>
                                                <th class="text-white">Members Name(Primary)</th>
                                                <th class="text-white">members Name(Secondary)</th>
                                                <th class="text-white">Card Expiry Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox20">
                                                    <label for="checkbox20"></label>
                                                    </div>
                                                    </fieldset>
                                                </td>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                    <i class="bx bx-trash"></i>
                                                </button></td>
                                            </tr>
                                            <tr>
                                                <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox21">
                                                    <label for="checkbox21"></label>
                                                    </div>
                                                    </fieldset>
                                                </td>
                                                <td>305066</td>
                                                <td>01 May 2020</td>
                                                <td>Yakub Instalment 12</td>
                                                <td>200</td>
                                                <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                                    <i class="bx bx-trash"></i>
                                                </button></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        
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
