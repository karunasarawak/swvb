
<!-- body content of step 1 second member start -->
<div id="contact2" x-data="{ edit: false, original:false}">
  <!-- basic start  -->
  <div class="row pt-5">
    <div class="col-12">
      <h6 class="py-50">Basic - Secondary member</h6>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <div class="custom-control-inline">
          <div class="radio mr-1">
            <input type="radio" name="lead_status" value="1" id="celead"  @click="edit=true, original=true" required selected>
            <label for="celead">Existing Lead</label>
          </div>
          <div class="radio">
            <input type="radio" name="lead_status" value="2" id="cnlead"  @click="edit=false, original=false">
            <label for="cnlead">New Lead</label>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-4 offset-4" style="text-align:right;">
      <div class="form-group controls">
        <button type="button" class="btn btn-primary" id="btn_add1" onclick="switchInfo()">Switch Info</button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4" x-show="original">
      <div class="form-group controls">
        <label>Existing Lead</label>
        <select class="select2 form-control"  id="exist_lead" name="exist_lead" readonly>
          <option value="">--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row pt-2">
    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Salutation</label>
          <select name="sec_salute" id="sec_salute"  class="custom-select" data-validation-required-message="Please select a salutation." required>
            <option value="">--</option>
              @foreach($payload['salute'] as $salute)
                <option value="{{$salute->salutation_id}}">{{$salute->salutation}}</option>
              @endforeach
          </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Name</label>
          <input type="text" name="sec_name" id="sec_name" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label class="d-block">Gender</label>
        <select name="sec_gender" id="sec_gender"  class="custom-select" data-validation-required-message="Please select a salutation." required>
          <option value="">--</option>
          @foreach($payload['gender'] as $gender)
            <option value="{{$gender->gender_id}}">{{$gender->gender_name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>NRIC/Passport</label>
          <input type="text" name="sec_nric" id="sec_nric" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>DOB</label>
          <input type="date" name="sec_dob" id="sec_dob" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Marital Status</label>
        <select name="sec_maritual" id="sec_maritual"  class="custom-select" required>
          <option value="">--</option>
          @foreach($payload['maritual'] as $maritual)
            <option value="{{$maritual->maritial_id}}">{{$maritual->maritial_name}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4" >
      <div class="form-group controls">
        <label>Race</label>
        <select name="sec_race" id="sec_race" class="custom-select" required>
            <option>--</option>
            @foreach($payload['race'] as $race)
              <option value="{{$race->race_id}}">{{$race->race_name}}</option>
            @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Religion</label>
        <select name="sec_religion" id="sec_religion" class="custom-select" required>
          <option value="">--</option>
          @foreach($payload['religion'] as $religion)
            <option value="{{$religion->religion_id}}">{{$religion->religion}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Nationality</label>
        <select name="sec_nation" id="sec_nation" class="custom-select" required>
          <option>--</option>
          @foreach($payload['nation'] as $nation)
            <option value="{{$nation->nation_id}}">{{$nation->nation}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Preferred Language</label>
        <select name="sec_lang" id="sec_lang" class="custom-select" required>
          <option value="">--</option>
          <option value="English">English</option>
          <option value="Malay">Malay</option>
          <option value="Chinese">Chinese</option>
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Status</label>
        <select name="sec_status" id="sec_status" class="custom-select" required>
          <option value="">--</option>
          <option value="0">Pending</option>
          <option value="1">Activate</option>
        </select>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Relationship With Primary Member</label>
        <select name="sec_relation" id="sec_relation" class="custom-select" required>
          <option value="">--</option>
          <option value="Siblings">Siblings</option>
          <option value="Wife">Wife</option>
          <option value="Children">Children</option>
          <option value="Friends">Friends</option>
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
          <input type="text" name="sec_occup" id="sec_occup" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group controls">
        <label>Employer/Company</label>
          <input type="text" name="sec_company" id="sec_company" class="form-control" placeholder="--" required>
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
          <input type="number" name="sec_mobile" id="sec_mobile" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Whatsapp</label>
          <input type="number" name="sec_whatsapp" id="sec_whatsapp" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Home No.</label>
          <input type="number" name="sec_home" id="sec_home" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Office No.</label>
          <input type="number" name="sec_office" id="sec_office" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Primary email</label>
          <input type="email" name="sec_pemail" id="sec_pemail" class="form-control" placeholder="--" required>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="form-group controls">
        <label>Alternate email</label>
          <input type="email" name="sec_aemail" id="sec_aemail" class="form-control" placeholder="--" required>
      </div>
    </div>

  </div>

  <!-- contact end -->
  <!--primary address & alternate address start -->
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
          <input type="text" name="sec_addr1" id="sec_addr1" class="form-control" placeholder="--" required>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 1</label>
          <input type="text" name="sec_alt_addr1" id="sec_alt_addr1" class="form-control" placeholder="--" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 2</label>
          <input type="text" name="sec_addr2" id="sec_addr2" class="form-control" placeholder="--" required>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group controls">
          <label>Address Line 2</label>
          <input type="text" name="sec_alt_addr2" id="sec_alt_addr2" class="form-control" placeholder="--" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3">
        <div class="form-group controls">
          <label>Postcode</label>
          <select name="sec_code" id="sec_code" class="form-control" required>
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
          <select name="sec_city" id="sec_city" class="form-control" required>
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
          <select name="sec_alt_code" id="sec_alt_code" class="form-control" required>
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
          <select name="sec_alt_city" id="sec_alt_city" class="form-control" required>
            <option value="">--</option>
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
          <select name="sec_state" id="sec_state" class="form-control" readonly>
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
          <select name="sec_alt_state" id="sec_alt_state" class="form-control" readonly>
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
          <select name="sec_country" id="sec_country" class="form-control" required>
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
          <select name="sec_alt_country" id="sec_alt_country" class="form-control" required>
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
            <textarea class="form-control" id="sec_remarks"name="remarks2" id="mship_remarks" rows="3" placeholder="Remarks" required></textarea>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- remarks end -->
</div>
<!-- body content of step 1 second member end--> 