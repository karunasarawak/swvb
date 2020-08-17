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

    <div class="card">
        <div class=" card-header bg-swvb-cyan">
            <div class="card-title">
                <div class="row">
                    <div class="col-10" style="">
                        <h4 class="col text-white" style="">Stamping Fee List Details</h4>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-outline-white round text-white bx bx-download float-right"></button>
                    </div>
                </div>
            </div>
        </div>
                    
        <div class="card-content">
            <div class="card-body">
                <div class="row pt-1">
                    <div class="col-9 col-md-9">
                        <p class="h5 swvb-blue">Batch {{ $payload['batchDetail']->sfb_id }}</p>
                    </div>


                    <div class="col-3 col-sm-3" x-show="edit" x-cloak>
                        <button type="button" class="btn btn-primary px-3" >Save</button>
                        <button type="button" class="btn btn-primary float-right px-3" @click="edit=false, original=true">Close</button>
                    </div>

                    <div class="col-3 col-sm-3">
                        <button type="button" class="btn btn-primary float-right" x-show="original" @click="edit=true, original=false">Edit Info</button>
                    </div>
    
                </div>

                <div class="row pt-1">
                    <div class="col">
                        <div class="row">
                            <p class="col">Status</p>
                            <p class="col font-weight-bold black" x-show="original"></p>
                            <p class="col" x-cloak x-show="edit">
                                <input  type="text" name="salutation" class="form-control" placeholder="Date Request" data-validation-required-message="Please write the company name"  required>
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
                            <p class="col">Request By</p>
                            <p class="col font-weight-bold black" x-show="original">John Doe</p>
                            <p class="col" x-cloak x-show="edit">
                                <input  type="text" name="salutation" class="form-control" placeholder="request by" data-validation-required-message="Please write the company name"  required>
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <p class="col">Checked By</p>
                            <p class="col font-weight-bold black" x-show="original">Chris</p>
                            <p class="col" x-cloak x-show="edit">
                                <input  type="text" name="salutation" class="form-control" placeholder="checked by" data-validation-required-message="Please write the company name"  required>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col">Approved By</p>
                            <p class="col font-weight-bold black" x-show="original">Wilson</p>
                            <p class="col" x-cloak x-show="edit">
                                <input  type="text" name="salutation" class="form-control" placeholder="approved by" data-validation-required-message="Please write the company name"  required>
                            </p>
                        </div>
                        <div class="row">
                            <p class="col">Approved Date</p>
                            <p class="col font-weight-bold black" x-show="original">02 April 2020</p>
                            <p class="col" x-cloak x-show="edit">
                                <input  type="text" name="salutation" class="form-control" placeholder="approved date" data-validation-required-message="Please write the company name"  required>
                            </p>
                        </div>
                    </div>
                    
                </div>

                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addStamp">New Stamp</button>

                <div class="pt-3 table-responsive">
                    <table class="table">
                        <thead class="bg-swvb-dark">
                            <tr>
                                <th class="text-white">Membership No.</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">NRIC/Passport No.</th>
                                <th class="text-white">Date of Agreement</th>
                                <th class="text-white">Package Price (RM)</th>
                                <th class="text-white">Membership Status</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payload['stampList'] as $mbr)
                                <tr>
                                    <td>{{ $mbr->mbrship_no }}</td>
                                    <td>{{ $mbr->name1 }}</td>
                                    <td>{{ $mbr->nric }}</td>

                                    @if($mbr->agreement_date != null)
                                        <td>{{ $mbr->agreement_date }}</td>
                                    @else
                                        <td>Error</td>
                                    @endif

                                    <td>{{ $mbr->package_price }}</td>

                                    @if($mbr->mbrship_status == 2)
                                        <td>Activate</td>
                                    @else
                                        <td>Error</td>
                                    @endif

                                    <td>
                                        <form action="{{ route('stamp.deleteStamp', $payload['batchDetail']->sfb_id) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" value="{{ $mbr->mbrship_no }}" name="mbrship_no">
                                            <button type="submit" class="border-0 bg-transparent p-0">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Add Stamp Modal --}}
<div class="modal fade text-left" id="addStamp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Add Stamp</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('stamp.addStamp', $payload['batchDetail']->sfb_id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Batch ID</label>
                        <div class="form-group">
                            <input type="text" id="batch_id" value="{{ $payload['batchDetail']->sfb_id }}" class="form-control" x-bind:value="pri" readonly>
                        </div>

                        <label>Membership No.</label>
                        <select name="mbrship_no" id="mbrship_no" class="select2 form-control" onchange="findMembership()" data-validation-required-message="" required>
                            <option value="" selected>--</option>
                            @if($payload['memberships'] != null)
                                @foreach ($payload['memberships'] as $mbr)
                                    <option value="{{ $mbr->mbrship_no }}" data-pri="{{ $mbr->name1 }}" data-sec="{{ $mbr->name2 }}" data-exp="{{ $mbr->mbrship_exp }}">
                                        {{ $mbr->mbrship_no }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <label>Primary Member</label>
                    <div class="form-group">
                        <input type="text" id="pri_member" placeholder="" class="form-control" x-bind:value="pri" readonly>
                    </div>

                    <label>Secondary Member</label>
                    <div class="form-group">
                        <input type="text" id="sec_member" name="sec_member" placeholder="" class="form-control" x-bind:value="sec"readonly>
                    </div>

                    <label>Expriry Date</label>
                    <div class="form-group">
                        <input type="date" id="exp_date" name="exp_date" placeholder="" class="form-control" x-bind:value="exp" readonly>
                    </div>
                    
                    <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Add</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- pop out modal box for update status -->
{{-- <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
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
            </div> --}}

                   
<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
<script>
        function findMembership()
    {
        var mbr_no = document.getElementById("mbrship_no");

        var pri = document.getElementById("pri_member");
        var sec = document.getElementById("sec_member");
        var exp = document.getElementById("exp_date");

        pri.value = mbr_no.options[mbr_no.selectedIndex].dataset.pri;
        sec.value = mbr_no.options[mbr_no.selectedIndex].dataset.sec;
        exp.value = mbr_no.options[mbr_no.selectedIndex].dataset.exp;

    }
</script>
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
