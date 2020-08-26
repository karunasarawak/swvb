@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ICT Request')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" id="form-repeater-wrapper">
    <div class="row" x-data="{name: ''}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">New Account Adjustment</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form  method="POST" action="{{route('store.acc')}}" novalidate>
                        @csrf
                        
                        <div class="row pt-3">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Membership No.</label>
                                        <select name="acc_mbrship_id" id="acc_mbrship_id" class="custom-select form-control" data-validation-required-message="Please select a member" onchange="linkrefer()" x-ref="selectBox" @change="name=$refs.selectBox.options[$refs.selectBox.selectedIndex].dataset.name" required>
                                            <option value="" disabled selected>Membership No</option>
                                            @if(isset($payload))
                                                @foreach($payload['memberships'] as $membership)
                                                    
                                            <option value="{{$membership->mbrship_id}}" data-name="{{$membership->lead->name}}" data-number="{{$membership->reservation['rsvn_no']}}">{{$membership->mbrship_no}}</option>
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
                                        <input type="text" class="form-control" placeholder="Name" id="acc_name" x-bind:value="name" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Reservation No.</label>
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Reservation No." x-bind:value="number" id="pt_rsvn_no" name="rsvn_no"
                                            disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Requested By</label>
                                        <select class="custom-select form-control required" id="requested_by" name="requested_by" data-validation-required-message="Please select a package type" required>
                                            <option value="" disabled selected>Select a staff</option> 
                                    
                                            @foreach($payload['staff'] as $staff)
                                            <option value="{{$staff->staff_id}}">{{$staff->staff_name}}</option>
                                            @endforeach
                                       
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Verified By</label>
                                        <select class="custom-select form-control required" id="verified_by" name="requested_by" data-validation-required-message="Please select a package type" required>
                                            <option value="" disabled selected>Select a staff</option> 
                                            @foreach($payload['staff'] as $staff)
                                            <option value="{{$staff->staff_id}}">{{$staff->staff_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Approved By</label>
                                        <select class="custom-select form-control required" id="requested_by" name="approved_by" data-validation-required-message="Please select a package type" required>
                                            <option value="" disabled selected>Select a staff</option> 
                                            @foreach($payload['staff'] as $staff)
                                            <option value="{{$staff->staff_id}}">{{$staff->staff_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
   

                        <!-- Invoice -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice
                                </p>
                            </div>
                        </div>
                      
                        <div class="row pt-1">
                            <div class="col">
                                <div class="form repeater-default">
                                    <div data-repeater-list="group1">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="Email">Invoice Type</label>
                                                    <select name="doc_type1" id="doc_type1" class="custom-select form-control required doc_type">
                                                        <option value="" disabled selected>Select a invoice type</option>
                                                        @foreach($payload['invoiceitemtype'] as $i)
                                                            <option value="{{$i->inv_itm_type_id}}">{{$i->item}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Unit Price (RM)</label>
                                                    <input type="number" name="unit_price1" class="form-control" id="unitprice" onclick="cal()" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Rounding Adj. (RM)</label>
                                                    <input type="number" name="rounding1" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Total (RM)</label>
                                                    <input type="number" name="total_price1" class="form-control" id="totalprice" placeholder="Enter Password">
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
                                </div>
                            </div>
                        </div>

                        <!-- Credit Note/Debit/Receipt/Refund -->
                        <div class="row pt-1">
                            <div class="col">
                                <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Credit/Debit Note & Receipt/Refund
                                </p>
                            </div>
                        </div>
                      
                        <div class="row pt-1">
                            <div class="col">
                                <div class="form repeater-default">
                                    <div data-repeater-list="group2">
                                        <div data-repeater-item>
                                            <div class="row justify-content-between">
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="gender">Document Type</label>
                                                    <select name="doc_type2" id="doc_type2" class="form-control doc_type" onchange="showrecinv()">
                                                    <option value="" disabled selected>Select a document type</option>
                                                    @foreach($payload['doc'] as $doc)
                                                        <option value="{{$doc->doc_id}}">{{$doc->doc_type}}</option>
                                                    @endforeach
                                                    </select>
                                                    
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Original Invoice/Receipt No.</label>
                                                    <select name="doc_type2" id="invorreceipt" class="form-control no">
                                                    <option value="" disabled selected>Select a document no.</option>
                                                        <option value="1">Credit Note</option>
                                                        <option value="2">Debit Note</option>
                                                        <option value="3">Voice Receipt/Rwebefund</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Unit Price (RM)</label>
                                                    <input type="number" name="unit_price2" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Rounding Adj. (RM)</label>
                                                    <input type="number" name="rounding2" class="form-control" id="password" placeholder="Enter Password">
                                                </div>
                                                <div class="col-md-2 col-sm-12 form-group">
                                                    <label for="password">Total (RM)</label>
                                                    <input type="number" name="total_price2" class="form-control" id="password" placeholder="Enter Password">
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
                                </div>
                            </div>
                        </div>


                        <!-- EVC Poe Expiry Date Extention -->
                        <div class="row" id="basic-checkbox">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Redundant of:</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="gcf" class="checkbox-input" id="checkbox21">
                                                        <label for="checkbox21">Guest Certificate Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="raf" class="checkbox-input" id="checkbox22">
                                                        <label for="checkbox22">Reservation Admin Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="iaf" class="checkbox-input" id="checkbox23">
                                                        <label for="checkbox23">Internal Affiliation Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Oversight by Staff</label>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="wraf" class="checkbox-input" id="checkbox2">
                                                        <label for="checkbox2">Waiver of Reservation Admin Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="drf" class="checkbox-input" id="checkbox3">
                                                        <label for="checkbox3">Discount of Reactivation Fee</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="cm" class="checkbox-input" id="checkbox4">
                                                        <label for="checkbox4">Cancellation of Membership</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="bc" class="checkbox-input" id="checkbox5">
                                                        <label for="checkbox5">Booking Cancellation</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-5 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="di" class="checkbox-input" id="checkbox6">
                                                        <label for="checkbox6">Duplicate of Invoice</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="reason[]" value="others" class="checkbox-input" id="checkbox7">
                                                        <label for="checkbox7">Others</label>
                                                    </div>
                                                </fieldset>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                     
                            <!-- EVC Add Bonus Entitlement -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>For Reservation No:</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
                                            data-validation-required-message="This Mobile No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Others or Remarks</label>
                                        <div class="position-relative">
                                            <input type="text" name="aict_other_remarks" class="form-control" placeholder="+60 12 345 6789" id="mobile" name="mobile_no"
                                            data-validation-required-message="This Mobile No. field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>      
                         
                            <button type="submit" class="btn btn-outline-primary mr-1 mb-1 mt-1">Save</button>
                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.doc_type', function(){
            
            var doc_id = $(this).val();
            var div = $(this).parent();

            var op = "";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findno')!!}',
                data:{'id':'doc_id'},
                success:function(data){
                    op+= '<option value="0" selected disabled>Select No.</option>';
                    for (var i=0; i<data.length; i++){
                        op+='<option value="' + data[i].id + '">' + data[i].no+'</option>';
                    }
                }

                div.find('.no').html(" ");
                div.find('.no').append(op);
                ),
                error:function(){

                }
            });
        });
       
    });

    function showrecinv() {
    var select = document.getElementById('doc_type2');
    var display = document.getElementById('invorreceipt');

        var firstprice = document.getElementById('unitprice');
        
        var firsttotal = firsttotal + firstprice;
        var firsttotal = sum.toFixed(2);
        var lastdigit = firsttotal.substring(firsttotal.length - 1, firsttotal.length);

        var front = Math.floor(firsttotal);
        var dec = firsttotal - front;
        var dec = dec.toFixed(2);

        var decUp1 = dec * 10;
        var decUp2 = dec * 100;
        
        if (lastdigit < 3){
            var newDec1 = Math.floor(decUp1);
            var finalDec = newDec1 / 10;
        }else if(lastdigit > 2 && lastdigit < 6)
        {
            var newDec2 = Math.ceil(decUp2 / 5) * 5;
            var finalDec = newDec2 / 100;
        }else if(lastdigit > 5 && lastdigit < 8)
        {
            var newDec2 = Math.floor(decUp2 / 5) * 5;
            var finalDec = nenwDec2 / 100;
        }else if (lastdigit > 7)
        {
            var newDec1 = Math.round(decUp1);
            var finaDec = newDec1 / 10;
        }

        var formatFinalDec = finalDec.toFixed(2);
        var roundingVal = formatFinalDec - dec;
        var formatRoundingVal = roundingVal.toFixed(2);

        var totalVal = parseFloat(front) + parseFloat(formatFinalDec);
        var formatTotalVal = totalVal.toFixed(2);

        document.getElementById('totalprice').value = formatTotalVal;
    }
</script>
<!-- Form wizard with step validation section end -->
@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('assets/js/select_onchange.js')}}"></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
@endsection
