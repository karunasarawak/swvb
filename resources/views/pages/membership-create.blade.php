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
               <!-- body content of step 2 end
               Step 3 -->
               <!-- <h6> 
                <i class="step-icon"></i> 
                 <span class="fonticon-wrap"> 
                   <i class="livicon-evo"
                    data-options="name:users.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i> 
                 </span> 
                 <span>Nominee</span> 
               </h6>  -->
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
  var pri = ['pri_salute','pri_name','pri_gender','pri_nric', 'pri_dob','pri_maritual',
            'pri_race','pri_religion','pri_nation','pri_lang','pri_status',
            'pri_occup','pri_company','pri_mobile','pri_whatsapp','pri_home','pri_office','pri_pemail','pri_aemail',
            'pri_addr1','pri_alt_addr1','pri_addr2','pri_alt_addr2','pri_code','pri_city','pri_alt_code',
            'pri_alt_city','pri_state','pri_alt_state','pri_country','pri_alt_country','pri_remarks'];

  var sec =  ['sec_salute','sec_name','sec_gender','sec_nric', 'sec_dob','sec_maritual',
            'sec_race','sec_religion','sec_nation','sec_lang','sec_status', 
            'sec_occup','sec_company','sec_mobile','sec_whatsapp','sec_home','sec_office','sec_pemail','sec_aemail',
            'sec_addr1','sec_alt_addr1','sec_addr2','sec_alt_addr2','sec_code','sec_city','sec_alt_code',
            'sec_alt_city','sec_state','sec_alt_state','sec_country','sec_alt_country','sec_remarks'];
  
  var leads = {!! json_encode($payload['lead2']->name) !!};

  function switchInfo()
  {
    for(var i = 0; i < 100; i++)
    {
      var temp = document.getElementById(pri[i]).value;
      document.getElementById(pri[i]).value = document.getElementById(sec[i]).value;
      document.getElementById(sec[i]).value = temp;
    }
  }

  function sample()
  {
    var type = document.getElementById("packagetype");
    var sample = document.getElementById("sample");
    var en = document.getElementById("en");

    en.innerHTML = sample.className;

    alert(sample.className);
  }

  function showExists()
  {
    
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
{{-- <script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script> --}}
@endsection
