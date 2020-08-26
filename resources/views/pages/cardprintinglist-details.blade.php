@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Card Printing Batch Details')

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
                    <h4 class="col text-white">Card Printing Batch Details
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
                                <p class="h5 swvb-blue">Batch {{ $payload['batchDetail']->cpb_id }}</p>
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
                                    @if($payload['batchDetail']->cpb_status == 0)
                                        <?php $status = "Pending to Be Sent";?>
                                    @elseif($payload['batchDetail']->cpb_status == 1)
                                        <?php $status = "Sent"?>
                                    @elseif($payload['batchDetail']->cpb_status == 2)
                                        <?php $status = "Received";?>
                                    @else
                                        <?php $status = "";?>
                                    @endif

                                    <p class="col font-weight-bold black" x-show="original"><?php echo $status;?></p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="status" class="form-control" value="" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Sent Date</p>
                                    @if($payload['batchDetail']->sent_date != null)
                                        <p class="col font-weight-bold black" x-show="original">{{ $payload['batchDetail']->sent_date }}</p>
                                    @else 
                                        <p class="col font-weight-bold black" x-show="original"></p>
                                    @endif
                                    
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="date" name="sent_date" class="form-control" value="{{ $payload['batchDetail']->sent_date }}" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Invoice No.</p>
                                    @if($payload['batchDetail']->invoice_no != null)
                                        <p class="col font-weight-bold black" x-show="original">{{ $payload['batchDetail']->invoice_no }}</p>
                                    @else 
                                        <p class="col font-weight-bold black" x-show="original"></p>
                                    @endif

                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="invoice" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Courier Payment</p>
                                    @if($payload['batchDetail']->courier_payment != null)
                                        <p class="col font-weight-bold black" x-show="original">RM {{ $payload['batchDetail']->courier_payment }}</p>
                                    @else 
                                        <p class="col font-weight-bold black" x-show="original"></p>
                                    @endif

                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="courier" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Supplier</p>
                                    @if($payload['batchDetail']->supplier_id != null)
                                        @foreach($payload['supplier'] as $supplier)
                                            @if($payload['batchDetail']->supplier_id == $supplier->supplier_id)
                                                <p class="col font-weight-bold black" x-show="original">{{ $supplier->supplier_name }}</p>
                                            @endif
                                        @endforeach
                                    @else 
                                        <p class="col font-weight-bold black" x-show="original"></p>
                                    @endif 
                                
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="supplier" class="form-control" placeholder="Invoice No." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Received Date</p>
                                    @if($payload['batchDetail']->receive_date != null)
                                        <p class="col font-weight-bold black" x-show="original">{{ $payload['batchDetail']->receive_date }}</p>
                                    @else 
                                        <p class="col font-weight-bold black" x-show="original"></p>
                                    @endif

                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="receive_date" class="form-control" placeholder="Consignment No." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Consignment No</p>
                                    @if($payload['batchDetail']->receive_date != null)
                                        <p class="col font-weight-bold black" x-show="original">{{ $payload['batchDetail']->receive_date }}</p>
                                    @else 
                                        <p class="col font-weight-bold black" x-show="original"></p>
                                    @endif

                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="consignment" class="form-control" placeholder="Request By" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                            </div>

                        </div>
                </form>
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addMember">New Card</button>
                <div class="pt-3 table-responsive">
                    <table class="table">
                        <thead class="bg-swvb-dark">
                            <tr>
                                <th class="text-white">Membership No.</th>
                                <th class="text-white">Members Name(Primary)</th>
                                <th class="text-white">members Name(Secondary)</th>
                                <th class="text-white">Card Expiry Date</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($payload['memberList'] as $member)
                                <tr>
                                    <td>{{ $member->mbrship_no }}</td>
                                    <td>{{ $member->name1 }}</td>
                                    <td>{{ $member->name2 }}</td>
                                    <td>{{ $member->mbrship_exp }}</td>
                                    <td>
                                        <form action="{{ route('card.deleteCard', ['batch_no'=>$payload['batchDetail']->cpb_id]) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" value="{{ $member->mbrship_no }}" name="mbrship_no">
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

  <!--Add membership Modal -->
<div class="modal fade text-left" id="addMember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Add Card</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="{{ route('card.addCard', $payload['batchDetail']->cpb_id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Batch ID</label>
                        <div class="form-group">
                            <input type="text" id="batch_id" value="{{ $payload['batchDetail']->cpb_id }}" class="form-control" x-bind:value="pri" readonly>
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
<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
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

    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    
    if(exist)
    {
      alert(msg);
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
