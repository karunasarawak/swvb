@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership Details')

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}"> --}}
@endsection

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section id="info-tabs-">
  <div class="row">
    <div class="col-12">
      <div class="card icon-tab">

        <div class="card-header bg-swvb-cyan">  
          <h4 class="card-title text-white">New Membership</h4>
        </div>
        <div class="card-content mt-2 pt-3">
          <div class="card-body">
            {{-- class="wizard-validation" for validation--}}
            <form action="{{route('members.store')}}" class="wizard-horizontal" method="POST" novalidate>
              @csrf
              <!-- Step 1 -->
              <h6>
                 <i class="step-icon"></i>
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name:user.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                </span>
                <span>STEP 1 - MEMBERS</span>
              </h6>
              <!-- Step 1 end-->
              @include('pages.contract-newPriMbr')
              {{-- @yield('priMbr') --}}
              <!-- Step 2-->
              <h6>
                <i class="step-icon"></i>
                <span class="fonticon-wrap">
                  <i class="livicon-evo"
                    data-options="name:briefcase.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
                </span>
                <span>STEP 2 - CONTRACTS</span>
              </h6>
               <!-- Step 2 end -->
               
               <!-- body content of step 2 -->
               @include('pages.contract-new2')

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Form wizard with step validation section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script>
  var pri = ['lead_id','pri_salute','pri_name','pri_gender','pri_nric', 'pri_dob','pri_maritual',
            'pri_race','pri_religion','pri_nation','pri_lang','pri_status',
            'pri_occup','pri_company','pri_mobile','pri_whatsapp','pri_home','pri_office','pri_pemail','pri_aemail',
            'pri_addr1','pri_alt_addr1','pri_addr2','pri_alt_addr2','pri_code','pri_city','pri_alt_code',
            'pri_alt_city','pri_state','pri_alt_state','pri_country','pri_alt_country','pri_remarks'];

  var sec =  ['exist_lead','sec_salute','sec_name','sec_gender','sec_nric', 'sec_dob','sec_maritual',
            'sec_race','sec_religion','sec_nation','sec_lang','sec_status', 
            'sec_occup','sec_company','sec_mobile','sec_whatsapp','sec_home','sec_office','sec_pemail','sec_aemail',
            'sec_addr1','sec_alt_addr1','sec_addr2','sec_alt_addr2','sec_code','sec_city','sec_alt_code',
            'sec_alt_city','sec_state','sec_alt_state','sec_country','sec_alt_country','sec_remarks'];
  

  function switchInfo()
  {
    for(var i = 0; i < 100; i++)
    {
      var temp = document.getElementById(pri[i]).value;
      document.getElementById(pri[i]).value = document.getElementById(sec[i]).value;
      document.getElementById(sec[i]).value = temp;
    }
  }

  function chooseLead(condition)
  {
    console.log(condition);

    if(condition == 1)
    {
      var data = @json($payload['lead2']);

      console.log(data);
      for(var a = 0; a < data.length; a++)
      {
        if(data[a] == null)
        {
          document.getElementById(sec[a]).value = "";
        }
        else if (data[a] != null)
        {
          document.getElementById(sec[a]).value = data[a];
        }
      }
    }
    else if($condition == 0)
    {
      for(var i = 0; i < 100; i++)
      {
        document.getElementById(sec[i]).value = "";
      }
    }
    
  }

</script>

<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
{{-- <script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script> --}}
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('assets/js/membership-new.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
{{-- <script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script> --}}
<script>
    var price = @json($payload['prices']);
    var interestd = @json($payload['interest_rates']);
    function package(){
        $('.price').val(price[$('.package').val()]);
        $('.entitlement').val($('.package option[value="'+$('.package').val()+'"]').attr('class'));
        
    }
    $('.duration').change(function(){
        $('.interest').val(interestd[$('.duration').val()]).change();
    });


    $('.installment .form-control').keyup(function(){
      calculate();
    });

    $('.installment .form-control').mouseup(function(){
        calculate();
    });

   
    function calculate(){
        if($('.price').val()){
            var price=parseFloat($('.price').val());
            if($('.at').val()){
              price+=parseFloat($('.at').val())
            }
            if($('.dt').val()){
              price-=parseFloat($('.dt').val());
            }
            $('.net').val(price);
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
        var net=parseFloat($('.outstanding').val());
        if($('.rounding').val()){
          net+=parseFloat($('.rounding').val());
        }
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
        var interestsum=parseFloat(0.00)+0;

        var tbody='<tr><td></td><td>'+fulldate+'</td><td>Total Outstanding(Loan)+Rounding</td><td></td><td></td><td>'+net.toFixed(2)+'</td></tr>';
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
