@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reinstate Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@php
    use App\Http\Controllers\Calculations;
@endphp

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" >
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title text-white">Reinstatement - 234560000</h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form  method="POST" action="{{route('reinstate.get', $payload['membership']->mbrship_id)}}" novalidate>
                            @csrf
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Request Information</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Reference No.</label>
                                            <input type="number" name="ref_no" class="form-control" placeholder="1234 0000" data-validation-required-message="Please select the date of requested received" required>
                                        </div>
                                    </div>
                              </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Date of Membership Terminate</label>
                                            <input type="date" class="form-control" value="01 June 2020" id="date" name="date"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Amount Payable for Reinstatement (RM)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Amount Due At Reinstatement</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control" placeholder="--" value="{{number_format(Calculations::getTotalOutstanding($payload['membership']->mbrship_id),2)}}" onkeyup="calcPayable()" id="amt_due" name="amt_due"
                                                data-validation-required-message="The amount of late payment penalty charge" required>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Amount Due At Reinstatement</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" id="show" class="form-control" placeholder="--" 
                                                data-validation-required-message="The amount of late payment penalty charge" readonly>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>


                            <div class="row" x-data="{ edit: false, original:true}">
                                
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="location">Late Payment Penalty Charge</label>
                                                <div class="custom-control-inline">
                                                    <div class="radio mr-1">
                                                        <input type="radio" name="amfcc" value="1" id="ccy" @click="edit=true, original=false" required>
                                                        <label for="ccy">Yes</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input type="radio" name="amfcc" value="0" id="ccn" @click="edit=false, original=true">
                                                        <label for="ccn">No</label>
                                                    </div>
                                                </div>       
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6" x-cloak x-show="edit">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Late Payment Penalty Charge</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="number" class="form-control" placeholder="--" onkeyup="calcPayable()" id="late_payment" name="late_payment"
                                                    data-validation-required-message="This Name field is required" required>
                                                    <div class="form-control-position">RM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                               
                            <div class="row" x-data="{ e:false, o:true}">
                                
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="location">Reinstatement Fee</label>
                                                
                                                    <div class="custom-control-inline">
                                                        <div class="radio mr-1">
                                                            <input type="radio" name="amfcc" value="1" id="cb" @click="e=true, o=false" required>
                                                            <label for="cb">Yes</label>
                                                        </div>
                                                    
                                                        <div class="radio">
                                                            <input type="radio" name="amfcc" value="0" id="c" @click="e=false, o=true">
                                                            <label for="c">No</label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6" x-cloak x-show="e">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Reinstatement Fee</label>
                                                <div class="position-relative has-icon-left">
                                                    <input type="number" class="form-control" placeholder="--" onkeyup="calcPayable()" id="reinstate" name="reinstate"
                                                    data-validation-required-message="This Name field is required" required>
                                                    <div class="form-control-position">RM</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Total Amount Payable</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control" placeholder="--" id="total" name="total"
                                                data-validation-required-message="This Name field is required" readonly>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Total Amount Paid</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="number" class="form-control" placeholder="--" onkeyup="calcPayable()" id="paid" name="paid"
                                                data-validation-required-message="This Name field is required" required>
                                                <div class="form-control-position">RM</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Official Receipt No.</label>
                                            <select name="receipt_id" class="select2 form-control" required>
                                                <option>--</option>
                                                    @foreach($payload['receipt'] as $receipt)
                                                    <option value="{{$receipt->receipt_id}}">{{$receipt->receipt_no}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Point Offset AMF (CAI only) Details</label>
                                                <input type="text" class="form-control" placeholder="--" id="pt_offset_amt" name="pt_offset_amt"
                                                data-validation-required-message="This Name field is required" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Remarks</label>
                                            <fieldset class="form-group">
                                                <textarea class="form-control" name="remark" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-primary float-left position-relative mb-5 hide" onclick="showbuttons()" id="btn_add1" >Submit</button>
                            <button type="submit" class="btn btn-primary float-left position-relative mb-5 hide"  id="print" >Print</button>
                            <button type="submit" class="btn btn-primary float-left position-relative mb-5 hide"  id="upload" >Upload</button>
                            <button type="submit" class="btn btn-primary float-left position-relative mb-5 hide"  id="proceed" >Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Current membership info!!!! -->
        <div class="col-md-4 ">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Current Membership Info</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-12">
                                <h6 class="py-50">Member Info</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row pt-1">
                                    <p class="col">Member Name</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->lead['name']}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Contact No.</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->lead['mobile_no']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-12">
                                <h6 class="py-50">Membership Info</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row pt-1">
                                    <p class="col">Membership No.</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->mbrship_id}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Date of Application</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->application_date}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Date of Agreement</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->agreement_date}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Package Type</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->package['package']}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Package Price</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->package['package_price']}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Entitlement</p>
                                    <p class="col font-weight-bold black"></p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Payment to Date</p>
                                    <p class="col font-weight-bold black">{{ number_format(Calculations::getInstallationToDate($payload['membership']->mbrship_id), 2) }}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">External Membership</p>
                                    <p class="col font-weight-bold black">Yes</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Eligible for Transfer</p>
                                    <p class="col font-weight-bold black">No</p>
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
            
            </div>

            <!-- Assignment     -->
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                        <h4 class="card-title text-white">Assignments</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row">
                            <div class="col">
                                <div class="row pt-1">
                                    <p class="col">Declaration No.</p>
                                    <p class="col font-weight-bold black">1234 0000</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">MRO</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->mro}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">CCO</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->cco}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Sales Personnel</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->tour->salespersonnel['sales_name']}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Sales Manager</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->tour->salesmanager['sales_name']}}</p>
                                </div>
                                <div class="row pt-1">
                                    <p class="col">Sales Venue</p>
                                    <p class="col font-weight-bold black">{{$payload['membership']->tour->salesvenue['sales_venue']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</section>
        
<script>
        document.getElementById("print").style.display = "none";
        document.getElementById("upload").style.display = "none";
        document.getElementById("proceed").style.display = "none";
        
        function calcPayable(){
            console.log("function called")
            var amtdue = document.getElementById("amt_due").value;
            console.log(amtdue);
            var late_pymt = document.getElementById("late_payment").value;
            var reinstate = document.getElementById("reinstate").value;
            var paid = document.getElementById("paid").value;
            // var total = document.getElementById("payable").value;
            var total = 0;
           
                var total = +amtdue + +paid + +late_pymt + +reinstate;
            // }

            document.getElementById("total").value = total;
         }

         function showbuttons()
         {
                document.getElementById("print").style.display = "block";
                document.getElementById("upload").style.display = "block" ;
                document.getElementById("proceed").style.display = "block" ;
                
         }

</script>
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