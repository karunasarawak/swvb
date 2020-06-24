<!-- body content of step 1 first member start -->
<fieldset>
  <!-- Basic start -->
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
        <label>Preferred Language</label>
        <select name="lang1" class="custom-select" required>
          <option selected>--</option>
          <option value="english">English</option>
          <option value="malay">Malay</option>
          <option value="chinese">Chinese</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4 invisible"></div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>NRIC/Passport</label>
        <input type="text" name="nric1" class="form-control" placeholder="880123137586" required>
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
  </div>
  <!-- basic end -->
  <div class="row mt-1">
    <!-- occupation start -->
    <div class="col-4 p-0">
      <div class="col-12">
        <h6 class="py-50">Occupation</h6>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Occupation/Designation</label>
          <input type="text" name="occupation1" class="form-control" placeholder="Occupation/Designation" required>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Employer/Company</label>
          <input type="text" name="employer1" class="form-control" placeholder="Employer/Company" required>
        </div>
      </div>
      <!-- occupation end -->
      <!-- contact start -->
      <div class="col-12 pt-1">
        <h6 class="py-50">Contact</h6>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Home Contact</label>
          <input type="number" name="home_contact1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Office Contact</label>
          <input type="number" name="office_contact1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Whatsapp</label>
          <input type="number" name="whatsapp1" class="form-control" placeholder="+60134567890" required>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Primary email</label>
          <input type="email" name="pri_email1" class="form-control" placeholder="abc@gmail.com" required>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Alternate email</label>
          <input type="email" name="alter_email1" class="form-control" placeholder="abc@gmail.com" required>
        </div>
      </div>
    <!-- contact end -->
    </div>

  <!-- address start -->
    <div class="col-sm-4">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">Address</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Primary Address</label>
            <input type="text" name="pri_addr1" class="form-control" placeholder="Primary Address 1" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="pri_addr2" class="form-control" placeholder="Primary Address 2" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="pri_addr3" class="form-control" placeholder="Primary Address 3" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="pri_addr4" class="form-control" placeholder="Primary Address 4" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Alternate Address</label>
            <input type="text" name="alter_addr1" class="form-control" placeholder="Alternate Address 1" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="alter_addr2" class="form-control" placeholder="Alternate Address 2" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="alter_addr3" class="form-control" placeholder="Alternate Address 3" required>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="alter_addr4" class="form-control" placeholder="Alternate Address 4" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>City</label>
            <select name="city1" class="select2 form-control" required>
              <option>--</option>
              <option value="kuching">Kuching</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>State</label>
            <select name="state1" class="select2 form-control" required>
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
            <select name="country1" class="select2 form-control" required>
              <option>--</option>
              <option value="malaysia">Malaysia</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- address end -->
    <!-- remarks start -->
    <div class="col-sm-4">
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
    <!-- remarks end -->
  </div>
  <button type="button" class="btn btn-primary position-absolute" id="btn_add1" onclick="showContact2()">Add Secondary Member</button>
  <!-- body content of step 1 first member end-->
<!-- body content of step 1 second member start -->
<div id="contact2">
  <hr>
  <button type="button" class="btn btn-danger form-2" id="btn_delete1" onclick="deleteContact2()">Delete Secondary Member</button>
  <!-- Basic start -->
  <div class="row">
    <div class="col-12">
      <h6 class="py-50">Basic - Secondary member</h6>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Salutation</label>
        <select name="salutation2" class="custom-select form-2">
          <option>--</option>
          <option value="1">Mr.</option>
          <option value="2">Ms.</option>
          <option value="3">Dr.</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>DOB</label>
        <fieldset class="form-group position-relative has-icon-left">
          <input type="text" name="dob2" class="form-control pickadate-short-string form-2" placeholder="Select Date">
          <div class="form-control-position">
            <i class='bx bx-calendar'></i>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Religion</label>
        <input type="text" name="religion2" class="form-control form-2" placeholder="Religion">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name2" class="form-control form-2" placeholder="Name">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Marital Status</label>
        <select name="marital2" class="custom-select form-2">
          <option>--</option>
          <option value="1">Single</option>
          <option value="2">Married</option>
          <option value="3">Widowed</option>
          <option value="4">Divorced</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Nationality</label>
        <input type="text" name="nationality2" class="form-control form-2" placeholder="Nationality">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label class="d-block">Gender</label>
        <div class="custom-control-inline">
          <div class="radio mr-1">
            <input type="radio" class="form-2" name="gender2" id="male2" checked="">
            <label for="male2">Male</label>
          </div>
          <div class="radio">
            <input type="radio" name="gender2" id="female2" checked="">
            <label for="female2">Female</label>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Preferred Language</label>
        <select name="lang2" class="custom-select form-2">
          <option>--</option>
          <option value="english">English</option>
          <option value="malay">Malay</option>
          <option value="chinese">Chinese</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4 invisible"></div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>NRIC/Passport</label>
        <input type="text" name="nric2" class="form-control form-2" placeholder="880123137586">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Race</label>
        <select name="race2" class="custom-select form-2">
          <option>--</option>
          <option value="malay">Malay</option>
          <option value="chinese">Chinese</option>
          <option value="indian">Indian</option>
          <option value="bumipuera">Bumiputera</option>
        </select>
      </div>
    </div>
  </div>
  <!-- basic end -->
  <div class="row mt-1">
    <!-- occupation start -->
    <div class="col-4 p-0">
      <div class="col-12">
        <h6 class="py-50">Occupation</h6>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Occupation/Designation</label>
          <input type="text" name="occupation2" class="form-control form-2" placeholder="Occupation/Designation">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Employer/Company</label>
          <input type="text" name="employer2" class="form-control form-2" placeholder="Employer/Company">
        </div>
      </div>
      <!-- occupation end -->
      <!-- contact start -->
      <div class="col-12 pt-1">
        <h6 class="py-50">Contact</h6>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Home Contact</label>
          <input type="number" name="home_contact2" class="form-control form-2" placeholder="+60134567890">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Office Contact</label>
          <input type="number" name="office_contact2" class="form-control form-2" placeholder="+60134567890">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Whatsapp</label>
          <input type="number" name="whatsapp2" class="form-control form-2" placeholder="+60134567890">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Primary email</label>
          <input type="email" name="pri_email2" class="form-control form-2" placeholder="abc@gmail.com">
        </div>
      </div>
      <div class="col-sm-12">
        <div class="form-group">
          <label>Alternate email</label>
          <input type="email" name="alter_email2" class="form-control form-2" placeholder="abc@gmail.com">
        </div>
      </div>
    <!-- contact end -->
    </div>

  <!-- address start -->
    <div class="col-sm-4">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">Address</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Primary Address</label>
            <input type="text" name="pri_addr1_2" class="form-control form-2" placeholder="Primary Address 1">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="pri_addr2_2" class="form-control form-2" placeholder="Primary Address 2">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="pri_addr3_2" class="form-control form-2" placeholder="Primary Address 3">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="pri_addr4_2" class="form-control form-2" placeholder="Primary Address 4">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Alternate Address</label>
            <input type="text" name="alter_addr1_2" class="form-control form-2" placeholder="Alternate Address 1">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="alter_addr2_2" class="form-control form-2" placeholder="Alternate Address 2">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="alter_addr3_2" class="form-control form-2" placeholder="Alternate Address 3">
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <input type="text" name="alter_addr4_2" class="form-control form-2" placeholder="Alternate Address 4">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>City</label>
            <select name="city2" class="select2 form-control form-2">
              <option>--</option>
              <option value="kuching">Kuching</option>
              <option value="sibu">Sibu</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>State</label>
            <select name="state2" class="select2 form-control form-2">
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
            <select name="country2" class="select2 form-control form-2">
              <option>--</option>
              <option value="malaysia">Malaysia</option>
              <option value="sabah">Sabah</option>
              <option value="miri">Miri</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- address end -->
    <!-- remarks start -->
    <div class="col-sm-4">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">Remarks</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Remarks</label>
            <textarea class="form-control" name="mship_remarks2" id="mship_remarks" rows="3" placeholder="Remarks"></textarea>
          </div>
        </div>
      </div>
    </div>
    <!-- remarks end -->
  </div>
</div>
<!-- body content of step 1 second member end-->
</fieldset>



