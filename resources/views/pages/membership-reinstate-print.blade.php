@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Reinstate Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection


@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation" >
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <div class="col">
                            <h4 class="card-title text-white">Reinstatement - {{$payload['membership']->mbrship_no}}</h4>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        
                        
                            <div class="row pt-1">
                                <div class="col-sm-6">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Request Information</p>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    
                                    <div class="row">
                                        <p class="col">Reference No.</p>
                                        <p class="col">{{$payload['reinstate']->ref_no}}</p>
                                    </div>
                                    
                              </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                            <p class="col">Date of Membership Terminate</p>
                                            <p class="col">{{$payload['reinstate']->date}}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Amount Payable for Reinstatement (RM)</p>
                                </div>
                            </div>


                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="row">
                                            <p class="col">Late Payment Penalty Charge</p>
                                            <p class="col">{{$payload['reinstate']->late_payment}}</p>
                                    </div>
                                    <div class="row">
                                            <p class="col">Reinstatement Fee</p>
                                            <p class="col">{{$payload['reinstate']->reinstate}}</p>
                                    </div>
                                    <div class="row">
                                            <p class="col">Total Amount Payable</p>
                                            <p class="col">{{$payload['reinstate']->payable}}</p>
                                    </div>
                                    <div class="row">
                                            <p class="col">Total Amount Paid</p>
                                            <p class="col">{{$payload['reinstate']->total_amount}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                            <p class="col">Official Receipt No.</p>
                                            <p class="col">{{$payload['reinstate']->receipt['']}}</p>
                                    </div>
                                    <div class="row">
                                            <p class="col">Point Offset AMF (CAI only) Details</p>
                                            <p class="col">{{$payload['reinstate']->pt_offset_amt}}</p>
                                    </div>
                                    <div class="row">
                                            <p class="col">Remarks</p>
                                            <p class="col">{{$payload['reinstate']->remark}}</p>
                                    </div>
                                    
                                </div>
                            </div>
                        
                            
                            <a href="{{route('reinstate.print', $payload['reinstate']->membership_id)}}"><button type="submit" class="btn btn-primary float-left position-relative mb-5 hide"  >Print</button></a>
                            <button type="submit" class="btn btn-primary float-left position-relative mb-5 hide"  >Upload</button>
                            <button type="submit" class="btn btn-primary float-left position-relative mb-5 hide"  >Proceed</button>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
        
    </div>
</section>
        
<script>
        // document.getElementById("print").style.display = "none";
        // document.getElementById("upload").style.display = "none";
        // document.getElementById("proceed").style.display = "none";
        
        // function calcPayable(){
        //     console.log("function called")
        //     var amtdue = document.getElementById("amt_due").value;
        //     console.log(amtdue);
        //     var late_pymt = document.getElementById("late_payment").value;
        //     var reinstate = document.getElementById("reinstate").value;
        //     var paid = document.getElementById("paid").value;
        //     // var total = document.getElementById("payable").value;
        //     var total = 0;
           
        //         var total = +amtdue + +paid + +late_pymt + +reinstate;
        //     // }

        //     document.getElementById("total").value = total;
        //  }

        //  function showbuttons()
        //  {
        //         document.getElementById("print").style.display = "block";
        //         document.getElementById("upload").style.display = "block" ;
        //         document.getElementById("proceed").style.display = "block" ;
                
        //  }

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
