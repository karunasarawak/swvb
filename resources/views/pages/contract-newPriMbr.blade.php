{{-- @section('priMbr') --}}
<!-- body content of step 1 first member start -->
<fieldset>
  <!-- basic start -->
  <div class="row">
    <div class="col-12">
      <h6 class="py-50">Basic - Primary member</h6>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Lead ID</label>
        <input type="text" name="lead_id" class="form-control" placeholder="Lead ID" value="{{$payload['lead']->lead_id}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Lead ID 2</label>
        @if($payload['lead2'] != null)
          <input type="text" name="lead_id2" class="form-control" placeholder="Lead ID 2" value="{{$payload['lead2']->lead_id}}" required>
        @else
          <input type="text" name="lead_id2" class="form-control" placeholder="Lead ID 2" value="" required>
        @endif
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Tour ID</label>
        <input type="text" name="tour_id" class="form-control" placeholder="Tour ID" value="{{$payload['tour']->tour_id}}" required>
      </div>
    </div>
    
    <!-- <div class="col-sm-4">
      <div class="form-group controls">
        <label>Member Type</label>
        <select name="member_type" class="custom-select" required>
          <option value="1">Primary Member</option>
          <option value="2">Secondary Member</option>
        </select>
      </div>
    </div> -->

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Salutation</label>
        <select name="pri_salute" id="pri_salute" class="custom-select" data-validation-required-message="Please select a salutation." required>
          @foreach($payload['salute'] as $salute)
            @if($payload['lead']->salutation_id == $salute->salutation_id)
              <option value="{{$salute->salutation_id}}" selected>{{$salute->salutation}}</option>
            @else
            <option value="{{$salute->salutation_id}}">{{$salute->salutation}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Name</label>
        <input type="text" id="pri_name" name="pri_name" class="form-control" value="{{$payload['lead']->name}}" required >
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Gender</label>
        <select name="pri_gender" id="pri_gender" class="custom-select" data-validation-required-message="Please select a salutation." required readonly>
          @foreach($payload['gender'] as $gender)
            @if($payload['lead']->salutation_id == $gender->gender_id)
              <option value="{{$gender->gender_id}}" selected>{{$gender->gender_name}}</option>
            @else
              <option value="{{$gender->gender_id}}" {{$gender->gender_name}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>NRIC</label>
        <input type="text" id="pri_nric" name="pri_nric" class="form-control" value="{{$payload['lead']->nric}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>DOB</label>
        <input type="date" id="pri_dob" name="pri_dob" class="form-control" value="{{$payload['lead']->dob}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Maritual Status</label>
        <select name="pri_maritual" id="pri_maritual" class="custom-select" data-validation-required-message="Please select a salutation." required>
          <option value="">--</option>
          @foreach($payload['maritual'] as $maritual)
            @if($payload['lead']->marital_status == $maritual->maritial_id)
              <option value="{{$maritual->maritial_id}}" selected>{{$maritual->maritial_name}}</option>
            @else
              <option value="{{$maritual->maritial_id}}">{{$maritual->maritial_name}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Race</label>
        <select name="pri_race" id="pri_race" class="custom-select" required>
          <option value="">--</option>
          @foreach($payload['race'] as $race)
            @if($payload['lead']->ethnicity_id == $race->race_id)
              <option value="{{$race->race_id}}" selected> {{$race->race_name}}</option>
            @else
              <option value="{{$race->race_id}}">{{$race->race_name}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Religion</label>
        <select name="pri_religion" id="pri_religion" class="custom-select" required>
          @foreach($payload['religion'] as $religion)
            @if($payload['lead']->religion_id == $religion->religion_id)
              <option value="{{$religion->religion_id}}" selected>{{$religion->religion}}</option>
            @else
              <option value="{{$religion->religion_id}}">{{$religion->religion}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Nationality</label>
        <select name="pri_nation" id="pri_nation" class="custom-select" required>
          <option value="">--</option>
          @foreach($payload['nation'] as $nation)
            @if($payload['lead']->nationality == $nation->nation_id)
              <option value="{{$nation->nation_id}}" selected>{{$nation->nation}}</option>
            @else
              <option value="{{$nation->nation_id}}">{{$nation->nation}}</option>
            @endif
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Preferred Language</label>
        <select name="pri_lang" id="pri_lang" class="custom-select" required>
          <option value="">--</option>
          <option value="English">English</option>
          <option value="Malay">Malay</option>
          <option value="Chinese">Chinese</option>
          <option value="Indian">Indian</option>
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Status</label>
        <select name="pri_status" id="pri_status" class="custom-select" required>
          <option value="">--</option>
          <option value="0">Pending</option>
          <option value="1">Activate</option>
        </select>
      </div>
    </div>

  </div>
  <!-- basic end -->
  <!-- occupation start -->
  <div class="row pt-1">

    <div class="col-12">
      <h6 class="py-50">Occupation</h6>
    </div>

    <div class="col-sm-6">
      <div class="form-group controls">
        <label>Occupation/Designation</label>
        <input type="text" id="pri_occup" name="pri_occup" class="form-control" value="{{$payload['lead']->occupation}}" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group controls">
        <label>Employer/Company</label>
        <input type="text" id="pri_company" name="pri_company" class="form-control" value="{{$payload['lead']->company}}" placeholder="--" required>
      </div>
    </div>

  </div>
  <!-- occupation end -->
  <!-- contact start -->
  <div class="row pt-1">

    <div class="col-12">
      <h6 class="py-50">Contact</h6>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Mobile</label>
        <input type="number" id="pri_mobile" name="pri_mobile" class="form-control" value="{{$payload['lead']->mobile_no}}"  required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Whatsapp</label>
        <input type="number" id="pri_whatsapp" name="pri_whatsapp" class="form-control" value="{{$payload['lead']->whatsapp_no}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Home No.</label>
        <input type="number" id="pri_home" name="pri_home" class="form-control" value="{{$payload['lead']->home_no}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Office No.</label>
        <input type="number" id="pri_office" name="pri_office" class="form-control" value="{{$payload['lead']->office_no}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Primary email</label>
        <input type="email" id="pri_pemail" name="pri_pemail" class="form-control" value="{{$payload['lead']->primary_email}}" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Alternate email</label>
        <input type="email" id="pri_aemail" name="pri_aemail" class="form-control" value="{{$payload['lead']->alt_email}}" required>
      </div>
    </div>

  </div>
  <!-- contact end -->
  <!--primary address start -->
  <div class="row pt-1">

    <div class="col-6">
      <h6 class="py-50">Primary Address</h6>
    </div>

    <div class="col-6">
      <h6 class="py-50">Alternate Address</h6>
    </div>

  </div>

    <div class="row">

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 1</label>
          <input type="text" id="pri_addr1" name="pri_addr1" class="form-control" placeholder="--" required>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 1</label>
          <input type="text" name="pri_alt_addr1" id="pri_alt_addr1" class="form-control" placeholder="--" required>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 2</label>
          <input type="text" id="pri_addr2" name="pri_addr2" class="form-control" placeholder="--" required>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 2</label>
          <input type="text" id="pri_alt_addr2" name="pri_alt_addr2" class="form-control" placeholder="--" required>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-3">
        <div class="form-group controls">
          <label>Postcode</label>
          <select id="pri_code" name="pri_code" class="form-control" required>
            <option value="">--</option>
            <option value="1">98000</option>
            <option value="2">Sibu</option>
            <option value="3">Miri</option>
          </select>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group controls">
          <label>City</label>
          <select id="pri_city" name="pri_city" class="form-control" required>
            <option value="">--</option>
              @foreach($payload['city'] as $city)
                <option value="{{$city->city_id}}">{{$city->city_name}}</option>
              @endforeach
          </select>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group controls">
          <label>Postcode</label>
          <select id="pri_alt_code" name="pri_alt_code" class="form-control" required>
            <option value="">--</option>
            <option value="1">98000</option>
            <option value="2">Sibu</option>
            <option value="3">Miri</option>
          </select>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="form-group controls">
            <label>City</label>
            <select id="pri_alt_city" name="pri_alt_city" class="form-control" required>
            <option  value="">--</option>
            @foreach($payload['city'] as $city)
              <option value="{{$city->city_id}}">{{$city->city_name}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group controls">
          <label>State</label>
          <select name="pri_state" id="pri_state" class="form-control">
            <option value="">--</option>
            @foreach($payload['state'] as $state)
              <option value="{{$state->id}}">{{$state->state_name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>State</label>
          <select id="pri_alt_state" name="pri_alt_state" class="form-control">
            <option value="">--</option>
            @foreach($payload['state'] as $state)
              <option value="{{$state->id}}">{{$state->state_name}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="form-group controls">
            <label>Country</label>
            <select name="pri_country" id="pri_country" class="form-control" required>
            <option value="">--</option>
              @foreach($payload['country'] as $country)
                <option value="{{$country->id}}">{{$country->short_code}}-{{$country->country_name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="form-group controls">
            <label>Country</label>
            <select id="pri_alt_country" name="pri_alt_country" class="form-control" required>
            <option value="">--</option>
              @foreach($payload['country'] as $country)
                <option value="{{$country->id}}">{{$country->short_code}}-{{$country->country_name}}</option>
              @endforeach
            </select>
          </div>
        </div>

      </div>
    
  <!-- alt address end -->
  <!-- remarks start -->
  <div class="row pt-1">
    <div class="col-sm-12">
      <div class="row">

        <div class="col-12">
          <h6 class="py-50">Remarks</h6>
        </div>

        <div class="col-sm-12">
          <div class="form-group controls">
            <label>Remarks</label>
            <textarea class="form-control" name="pri_remarks" id="pri_remarks" rows="3" placeholder="Remarks" required></textarea>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- remarks end -->
  <hr class="mx-n2">
  <button type="button" class="btn btn-primary position-absolute" id="btn_add1" onclick="showContact2()">Add Secondary Member</button>
  <button type="button" class="btn btn-danger form-2 position-absolute" id="btn_delete1" onclick="hideContact2()">Delete Secondary Member</button>
  <!-- body content of step 1 first member end-->

  <!-- body content of step 1 second member start -->
   @include('pages.contract-newSecMbr') 
  <!-- body content of step 1 second member end-->
</fieldset>
{{-- @stop --}}



