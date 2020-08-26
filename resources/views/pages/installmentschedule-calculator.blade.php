@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Installment Schedule Calculator')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col-md-10 card-title text-white">Installment Schedule Calculator</h4>
                        
                        <div class="col-2 ">
                            <a onclick="printtable();" class="btn btn-outline-white round text-white ml-1 bx bx-printer float-right"></a>
                            <a onclick="csv();" class="btn btn-outline-white round text-white bx bx-download float-right"></a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-content">
                    <div class="card-body">
                            <div class="card-dashboard pt-2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Package</label>
                                                <select name="membershipfilter" class="select2 form-control  round mr-1 mb-1 package"  onchange="package();" required>
                                                <option value="" disabled selected>Please select a package</option>
                                                @include('includes.option_from_array',['array'=>$payload['packages']])
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Package Price</label>
                                                <input type="number" name="company_contact" class="form-control round price"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Installment Duration</label>
                                            <select name="membershipfilter" class="select2 form-control  round mr-1 mb-1 duration" required>
                                                @include('includes.option_from_array',['data'=>$payload['interest'],'array'=>$payload['interest_durations']])
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Admin Charge (%)</label>
                                            <select name="membershipfilter" class="select2 form-control  round mr-1 mb-1 interest" required>
                                                @include('includes.option_from_array',['array'=>$payload['interests']])
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment 1</label>
                                                <input type="number" name="company_contact" class="form-control round dp"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment 2</label>
                                                <input type="number" name="company_contact" class="form-control round dp"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment 3</label>
                                                <input type="number" name="company_contact" class="form-control round dp"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment 4</label>
                                                <input type="number" name="company_contact" class="form-control round dp"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment 5</label>
                                                <input type="number" name="company_contact" class="form-control round dp"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Downpayment 6</label>
                                                <input type="number" name="company_contact" class="form-control round dp"  placeholder="--" data-validation-required-message="Please enter the down payment 1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Total Outstanding (Loan)</label>
                                                <input type="number" name="company_contact" class="form-control round outstanding" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label >Rounding</label>
                                                <input type="number"  name="company_nob" class="form-control round rounding" placeholder="Rounding" value="0.00" data-validation-required-message="" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-primary mt-2" onclick="installment();">Calculate</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table" id="installtable" style="width:100%;">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">No.</th>
                                                <th class="text-white">Projected Date</th>
                                                <th class="text-white">Item</th>
                                                <th class="text-white">Admin Charges</th>
                                                <th class="text-white">Installment</th>
                                                <th class="text-white">Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                       
                
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="adddownpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
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
                        
                        </div>
                                
                        <div class="px-2">
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Cancel</a>
                                <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Confirm</a>
                            
                        </div>
                    </div>
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
<script>
    var price=JSON.parse('<?php echo json_encode($payload['prices']);?>');
    var interest=JSON.parse('<?php echo json_encode($payload['interest_rates']);?>');
    function package(){
        $('.price').val(price[$('.package').val()]);
    }
    $('.duration').change(function(){
        $('.interest').val(interest[$('.duration').val()]);
    });

    $('.form-control').keyup(function(){
        calculate();
    });

    $('.form-control').mouseup(function(){
        calculate();
    });
   
    function calculate(){
        if($('.price').val()){
            var price=parseFloat($('.price').val());
            $('.dp').each(function(){
                if($(this).val()){
                    price-=$(this).val();
                }
            });
            var totalprice=price*(100+parseFloat($('.interest').val()))/100;
        
            $('.outstanding').val(totalprice);
        }
        
    }


    function installment(){
        var net=parseFloat($('.outstanding').val())+parseFloat($('.rounding').val());
        var total=net;
        var interest=net*parseFloat($('.interest').val())/(100+parseFloat($('.interest').val()));
       
        var duration=parseFloat($('.duration :selected').html());
        var interst_month=parseFloat(interest/duration);
        var installment=parseFloat(net/duration);
        var date=new Date();
        var day=date.getDate();
        var month=date.getMonth();
        var year=date.getFullYear();
        var options = { month: 'short'};
        var mon=date.toLocaleDateString('en-US', options);
        var fulldate=day+' '+mon+' '+year;
        net=net.toFixed(2);
        var interestsum=parseFloat(0.00)+0;

        var tbody='<tr><td></td><td>'+fulldate+'</td><td>Total Outstanding(Loan)+Rounding</td><td></td><td></td><td>'+net+'</td></tr>';
        for(var i=1;i<=duration;i++){
            month++;
            if(month==12){
                month=0;
                year+=1;
                date.setYear(year);
            }
            date.setMonth(month);
            month=date.getMonth();
            year=date.getFullYear();
            mon=date.toLocaleDateString('en-US', options);
            fulldate=day+' '+mon+' '+year;
            if(i==duration){
                installment=net;
                interest_month=interest-interestsum;
            }
            interestsum=0+parseFloat(interestsum)+parseFloat(interst_month);
            net-=installment;
            tbody+='<tr><td>'+i+'</td><td>'+fulldate+'</td><td>Installment '+i+'</td><td>'+interst_month.toFixed(2)+'</td><td>'+installment.toFixed(2)+'</td><td>'+net.toFixed(2)+'</td></tr>';
        }
        tbody+='<th></th><th></th><th>Total</th><th>'+interestsum.toFixed(2)+'</th><th>'+total.toFixed(2)+'</th><th></th>';
        $('#installtable tbody').html(tbody);
    }

    function csv() {
    var filename='PaymentSchedule.csv';
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}

    function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Hide download link
        downloadLink.style.display = "none";

        // Add the link to DOM
        document.body.appendChild(downloadLink);

        // Click download link
        downloadLink.click();
    }
    function printtable() {
        var headstr = "<html><head><title></title></head><body><table style='width:100%'>";
        var footstr = "</table></body>";
        var newstr = document.all.item('installtable').innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>
@endsection