@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Card Printing List')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="">
    <div class="card">
        <div class=" card-header bg-swvb-cyan">
            <div class="card-title">
                <div class="row">
                    <h4 class="col text-white">Membership Card Printing List
                    <button type="button" class="btn btn-outline-white round text-white bx bx-download float-right"></button></h4>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form-horizontal" method="" action=""  x-data="{ edit: false, original:true}" novalidate>
                    @csrf
                        <div class="row pt-1">
                            <div class="col-9 col-md-9">
                                <p class="h5 swvb-blue">Batch 330</p>
                            </div>
                            <div class="col-3 col-sm-3" x-show="edit" x-cloak>
                                <button type="button" class="btn btn-primary px-3" >Save</button>
                                <button type="button" class="btn btn-primary float-right px-3" @click="edit=false, original=true">Close</button>
                            </div>
                            <div class="col-3 col-sm-3">
                                <button type="button" class="btn btn-primary float-right" x-cloak x-show="original" @click="edit=true, original=false">Edit Info</button>
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Supplier" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Sent Date</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Date Request" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Invoice No.</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Status" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Courier Payment</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Status" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Supplier</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Invoice No." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Received Date</p>
                                    <p class="col font-weight-bold black" x-show="original">01 April 2020</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Consignment No." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Consignment No</p>
                                    <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="Request By" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                            </div>

                        </div>
                </form>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addMember">Add Membership</button>
                <div class="pt-3 table-responsive">
                    <table class="table">
                        <thead class="bg-swvb-dark">
                            <tr>
                                <th class="text-white">Membership No.</th>
                                <th class="text-white">Members Name(Primary)</th>
                                <th class="text-white">members Name(Secondary)</th>
                                <th class="text-white">Card Expiry Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>305066</td>
                                <td>01 May 2020</td>
                                <td>Yakub Instalment 12</td>
                                <td>200</td>
                                <td><button class="border-0 bg-transparent p-0" data-toggle="modal" data-target="#addCall">
                                    <i class="bx bx-trash"></i>
                                </button></td>
                            </tr>
                            <tr>
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
            
            <button type="button" class="btn btn-primary m-3 float-right" >
            Create
            </button>
        </div>    
    </div>
</section>

  <!--Add membership Modal -->
<div class="modal fade text-left" id="addMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Add Membership</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Membership No.</label>
                        <select name="mbr_no" id="mbr_no" class="select2 form-control" onchange="findMembership()" data-validation-required-message="" required>
                            <option value="">--</option>
                            @if($payload['memberships'] != null)
                                @foreach ($payload['memberships'] as $mbr)
                                    <option value="{{ $mbr->mbrship_id }}" data-pri="{{ $mbr->name }}" data-sec="{{ $mbr->name2 }}" data-exp="{{ $mbr->mbrship_exp }}">
                                        {{ $mbr->mbrship_no }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <label>Primary Member</label>
                    <div class="form-group">
                        <input type="text" id="pri" placeholder="" class="form-control" x-bind:value="pri" readonly>
                    </div>

                    <label>Secondary Member</label>
                    <div class="form-group">
                        <input type="text" id="sec" placeholder="" class="form-control" x-bind:value="sec"readonly>
                    </div>

                    <label>Expriry Date</label>
                    <div class="form-group">
                        <input type="date" id="exp" placeholder="" class="form-control" x-bind:value="exp" readonly>
                    </div>
                    
                    <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Add</span>
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
<script>
    function findMembership()
    {
        var mbr_no = document.getElementById("mbr_no");

        var pri = document.getElementById("pri");
        var sec = document.getElementById("sec");
        var exp = document.getElementById("exp");

        pri.value = mbr_no.options[mbr_no.selectedIndex].dataset.pri;
        sec.value = mbr_no.options[mbr_no.selectedIndex].dataset.sec;
        exp.value = mbr_no.options[mbr_no.selectedIndex].dataset.exp;

    }
</script>

<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
