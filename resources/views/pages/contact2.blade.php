<!-- body content of step 1 first member start -->
<fieldset>
  <!-- basic start -->
  <div class="row">
    <div class="col-12">
      <h6 class="py-50">Basic - Primary member</h6>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Salutation</label>
        <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
          <option value="">--</option>
          <option value="Mr.">Mr.</option>
          <option value="Ms.">Ms.</option>
          <option value="Dr.">Dr.</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>DOB</label>
        <fieldset class="form-group position-relative has-icon-left">
          <input type="text" name="dob1" class="form-control pickadate-short-string" placeholder="Select Date" required>
          <div class="form-control-position">
            <i class='bx bx-calendar'></i>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Religion</label>
        <input type="text" name="religion1" class="form-control" placeholder="Religion" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name1" class="form-control" placeholder="Name" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Marital Status</label>
        <select name="marital1" class="custom-select" required>
          <option>--</option>
          <option value="single">Single</option>
          <option value="married">Married</option>
          <option value="widowed">Widowed</option>
          <option value="divorced">Divorced</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Nationality</label>
        <select name="nalionality1" class="select2 form-control" required>
          <option selected>--</option>
          <option value="Malaysian">Malaysian</option>
          <option value="Singaporean">Singaporean</option>
          <option value="3">Dr.</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label class="d-block">Gender</label>
        <div class="custom-control-inline">
          <div class="radio mr-1">
            <input type="radio" name="gender1" id="male1" checked="" required>
            <label for="male1">Male</label>
          </div>
          <div class="radio">
            <input type="radio" name="gender1" id="female1" checked="">
            <label for="female1">Female</label>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Race</label>
        <select name="race1" class="custom-select" required>
          <option selected>--</option>
          <option value="malay">Malay</option>
          <option value="chinese">Chinese</option>
          <option value="indian">Indian</option>
          <option value="bumipuera">Bumiputera</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Preferred Language</label>
        <select name="lang1" class="custom-select" required>
          <option selected>--</option>
          <option value="english">English</option>
          <option value="malay">Malay</option>
          <option value="chinese">Chinese</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>NRIC/Passport</label>
        <input type="text" name="nric1" class="form-control" placeholder="880123137586" required>
      </div>
    </div>
  </div>
  <!-- basic end -->
  <hr>
  <!-- occupation start -->
  <div class="row">
    <div class="col-12">
      <h6 class="py-50">Occupation</h6>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Occupation/Designation</label>
        <input type="text" name="occupation1" class="form-control" placeholder="Occupation/Designation" required>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Employer/Company</label>
        <input type="text" name="employer1" class="form-control" placeholder="Employer/Company" required>
      </div>
    </div>
  </div>
  <!-- occupation end -->
  <hr>
  <!-- contact start -->
  <div class="row">
    <div class="col-12">
      <h6 class="py-50">Contact</h6>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Mobile</label>
        <input type="number" name="home_contact1" class="form-control" placeholder="+60134567890" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Home Contact</label>
        <input type="number" name="home_contact1" class="form-control" placeholder="+60134567890" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Primary email</label>
        <input type="email" name="pri_email1" class="form-control" placeholder="abc@gmail.com" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Whatsapp</label>
        <input type="number" name="whatsapp1" class="form-control" placeholder="+60134567890" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Office Contact</label>
        <input type="number" name="office_contact1" class="form-control" placeholder="+60134567890" required>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Alternate email</label>
        <input type="email" name="alter_email1" class="form-control" placeholder="abc@gmail.com" required>
      </div>
    </div>
  </div>
  <!-- contact end -->
  <hr>
  <!-- address start -->
  <div class="row">
    <div class="col-12">
      <h6 class="py-50">Address</h6>
    </div>
    <!--primary address start -->
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Primary Address</label>
            <input type="text" name="pri_addr_street1" class="form-control" placeholder="House Number/Lot Number/Floor and Building Name" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Postcode</label>
            <select name="pri_postal1" class="select2 form-control" required>
              <option>--</option>
              <option value="98000">98000</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>City</label>
            <select name="pri_city1" class="select2 form-control" required>
              <option>--</option>
              <option value="kuching">Kuching</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>State</label>
            <select name="pri_state1" class="select2 form-control" readonly>
              <option>--</option>
              <option value="sarawak">Sarawak</option>
              <option value="sabah">Sabah</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Country</label>
            <select name="pri_country1" class="select2 form-control" required>
              <option value="malaysia">Malaysia</option>
              <option value="brunei">Brunei</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!--alt address start -->
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Alternate Address</label>
            <input type="text" name="alt_addr1" class="form-control" placeholder="Alternate Address 1" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Postcode</label>
            <select name="alt_postal1" class="select2 form-control" required>
              <option>--</option>
              <option value="98000">98000</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>City</label>
            <select name="alt_city1" class="select2 form-control" required>
              <option>--</option>
              <option value="kuching">Kuching</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>State</label>
            <select name="alt_state1" class="select2 form-control" required>
              <option>--</option>
              <option value="sarawak">Sarawak</option>
              <option value="sabah">Sabah</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Country</label>
            <select name="alt_country1" class="select2 form-control" required>
              <option>--</option>
              <option value="malaysia">Malaysia</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- alt address end -->
  </div>
  <!-- address end -->
  <hr>
  <!-- remarks start -->
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">Remarks</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Remarks</label>
            <textarea class="form-control" name="mship_remarks1" id="mship_remarks" rows="3" placeholder="Remarks" required></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- remarks end -->
  </div>
  <button type="button" class="btn btn-primary position-absolute" id="btn_add1" onclick="showContact2()">Add Secondary Member</button>
  <button type="button" class="btn btn-danger form-2 position-absolute" id="btn_delete1" onclick="deleteContact2()">Delete Secondary Member</button>
  <!-- body content of step 1 first member end-->
  <hr>

  @livewire('add-secondary-member')



  <!-- body content of step 1 second member start -->
<div id="contact2">
    <!-- basic start -->
    <div class="row">
      <div class="col-12">
        <h6 class="py-50">Basic - Primary member</h6>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Salutation</label>
          <select name="salutation1" class="custom-select" data-validation-required-message="Please select a salutation." required>
            <option value="">--</option>
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value="Dr.">Dr.</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>DOB</label>
          <fieldset class="form-group position-relative has-icon-left">
            <input type="text" name="dob1" class="form-control pickadate-short-string" placeholder="Select Date" required>
            <div class="form-control-position">
              <i class='bx bx-calendar'></i>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Religion</label>
          <input type="text" name="religion1" class="form-control" placeholder="Religion" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name1" class="form-control" placeholder="Name" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Marital Status</label>
          <select name="marital1" class="custom-select" required>
            <option>--</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widowed">Widowed</option>
            <option value="divorced">Divorced</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Nationality</label>
          <select name="nalionality1" class="select2 form-control" required>
            <option selected>--</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="3">Dr.</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="d-block">Gender</label>
          <div class="custom-control-inline">
            <div class="radio mr-1">
              <input type="radio" name="gender1" id="male1" checked="" required>
              <label for="male1">Male</label>
            </div>
            <div class="radio">
              <input type="radio" name="gender1" id="female1" checked="">
              <label for="female1">Female</label>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Race</label>
          <select name="race1" class="custom-select" required>
            <option selected>--</option>
            <option value="malay">Malay</option>
            <option value="chinese">Chinese</option>
            <option value="indian">Indian</option>
            <option value="bumipuera">Bumiputera</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Preferred Language</label>
          <select name="lang1" class="custom-select" required>
            <option selected>--</option>
            <option value="english">English</option>
            <option value="malay">Malay</option>
            <option value="chinese">Chinese</option>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>NRIC/Passport</label>
          <input type="text" name="nric1" class="form-control" placeholder="880123137586" required>
        </div>
      </div>
    </div>
    <!-- basic end -->
    <hr>
    <!-- occupation start -->
    <div class="row">
      <div class="col-12">
        <h6 class="py-50">Occupation</h6>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Occupation/Designation</label>
          <input type="text" name="occupation1" class="form-control" placeholder="Occupation/Designation" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label>Employer/Company</label>
          <input type="text" name="employer1" class="form-control" placeholder="Employer/Company" required>
        </div>
      </div>
    </div>
    <!-- occupation end -->
    <hr>
    <!-- contact start -->
    <div class="row">
      <div class="col-12">
        <h6 class="py-50">Contact</h6>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Mobile</label>
          <input type="number" name="home_contact1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Home Contact</label>
          <input type="number" name="home_contact1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Primary email</label>
          <input type="email" name="pri_email1" class="form-control" placeholder="abc@gmail.com" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Whatsapp</label>
          <input type="number" name="whatsapp1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Office Contact</label>
          <input type="number" name="office_contact1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label>Alternate email</label>
          <input type="email" name="alter_email1" class="form-control" placeholder="abc@gmail.com" required>
        </div>
      </div>
    </div>
    <!-- contact end -->
    <hr>
    <!-- address start -->
    <div class="row">
      <div class="col-12">
        <h6 class="py-50">Address</h6>
      </div>
      <!--primary address start -->
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Primary Address</label>
              <input type="text" name="pri_addr_street1" class="form-control" placeholder="House Number/Lot Number/Floor and Building Name" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Postcode</label>
              <select name="pri_postal1" class="select2 form-control" required>
                <option>--</option>
                <option value="98000">98000</option>
                <option value="sibu">Sibu</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>City</label>
              <select name="pri_city1" class="select2 form-control" required>
                <option>--</option>
                <option value="kuching">Kuching</option>
                <option value="sibu">Sibu</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>State</label>
              <select name="pri_state1" class="select2 form-control" readonly>
                <option>--</option>
                <option value="sarawak">Sarawak</option>
                <option value="sabah">Sabah</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Country</label>
              <select name="pri_country1" class="select2 form-control" required>
                <option value="malaysia">Malaysia</option>
                <option value="brunei">Brunei</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!--alt address start -->
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Alternate Address</label>
              <input type="text" name="alt_addr1" class="form-control" placeholder="Alternate Address 1" required>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Postcode</label>
              <select name="alt_postal1" class="select2 form-control" required>
                <option>--</option>
                <option value="98000">98000</option>
                <option value="sibu">Sibu</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>City</label>
              <select name="alt_city1" class="select2 form-control" required>
                <option>--</option>
                <option value="kuching">Kuching</option>
                <option value="sibu">Sibu</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>State</label>
              <select name="alt_state1" class="select2 form-control" required>
                <option>--</option>
                <option value="sarawak">Sarawak</option>
                <option value="sabah">Sabah</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Country</label>
              <select name="alt_country1" class="select2 form-control" required>
                <option>--</option>
                <option value="malaysia">Malaysia</option>
                <option value="sibu">Sibu</option>
                <option value="miri">Miri</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- alt address end -->
    </div>
    <!-- address end -->
    <hr>
    <!-- remarks start -->
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-12">
            <h6 class="py-50">Remarks</h6>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Remarks</label>
              <textarea class="form-control" name="mship_remarks1" id="mship_remarks" rows="3" placeholder="Remarks" required></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- remarks end -->
</div>


  <!-- body content of step 1 second member end-->
</fieldset>



