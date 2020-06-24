<fieldset>
  <div class="row">
    <div class="col-4">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">Basic</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Application No.</label>
            <input type="text" name="application_no" class="form-control" placeholder="application no."/>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Application Date</label>
            <fieldset class="form-group position-relative has-icon-left">
              <input type="text" name="application_date" class="form-control pickadate-short-string" placeholder="Select Date" required>
              <div class="form-control-position">
                <i class='bx bx-calendar'></i>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Agreement No.</label>
            <input type="text" name="agreement_no" class="form-control" placeholder="agreement no."/>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Agreement Date</label>
            <fieldset class="form-group position-relative has-icon-left">
              <input type="text" name="agreement_date" class="form-control pickadate-short-string" placeholder="Select Date" required>
              <div class="form-control-position">
                <i class='bx bx-calendar'></i>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Membership No.</label>
            <input type="text" name="membership_no" class="form-control" placeholder="membership no."/>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Membership Term</label>
            <select name="membership_term" class="custom-select" required>
              <option>--</option>
              <option value="25">25</option>
              <option value="30">30</option>
              <option value="widowed">Widowed</option>
              <option value="divorced">Divorced</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Membership Commencement</label>
            <fieldset class="form-group position-relative has-icon-left">
              <input type="text" name="commencement_date" class="form-control pickadate-short-string" placeholder="Select Date" readonly>
              <div class="form-control-position">
                <i class='bx bx-calendar'></i>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Membership Expiry</label>
            <fieldset class="form-group position-relative has-icon-left">
              <input type="text" name="expiry_date" class="form-control pickadate-short-string" placeholder="Select Date"  readonly>
              <div class="form-control-position">
                <i class='bx bx-calendar'></i>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Declaration No.</label>
            <input type="text" name="declaration_no" class="form-control" placeholder="declaration no."/>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">Payment</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Payment Schedule No.</label>
            <input type="text" name="declaration_no" class="form-control" placeholder="declaration no."/>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Installment Duration</label>
            <select name="installment_duration" class="custom-select" required>
              <option>--</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="3">4</option>
              <option value="3">5</option>
              <option value="3">6</option>
              <option value="3">7</option>
              <option value="3">8</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <label>Package Price</label>
          <input type="text" name="package_price" class="form-control" placeholder="Package Price" readonly>
        </div>
        <div class="col-sm-12">
          <label>Addition</label>
          <input type="text" name="addition" class="form-control" placeholder="100">
        </div>
        <div class="col-sm-12">
          <label>Discount</label>
          <input type="text" name="discount" class="form-control" placeholder="100">
        </div>
        <div class="col-sm-12">
          <label>Nett Package Price</label>
          <input type="text" name="nett_package_price" class="form-control" placeholder="" readonly>
        </div>
        <div class="col-sm-12">
          <label>Down payment Paid</label>
          <input type="text" name="down_payment_paid" class="form-control" placeholder="2000" required>
        </div>
        <div class="col-sm-12">
          <label>Admin Charges</label>
          <input type="text" name="admin_charges" class="form-control" placeholder="" readonly>
        </div>
        <div class="col-sm-12">
          <label>Payment To Date</label>
          <input type="text" name="admin_charges" class="form-control" placeholder="" readonly>
        </div>
        <div class="col-sm-12">
          <label>Balance Package Price</label>
          <input type="text" name="admin_charges" class="form-control" placeholder="" readonly>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="row">
        <div class="col-12">
          <h6 class="py-50">AMF</h6>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
            <label>Payment Type</label>
            <select name="payment_type" class="custom-select" required>
              <option>--</option>
              <option value="cash">Cash</option>
              <option value="credit_card">Credit Card</option>
            </select>
          </div>
        </div>
        <div class="col-sm-12">
          <label>Package price</label>
          <input type="text" name="package_price" class="form-control" placeholder="Package Price" readonly>
        </div>
        <div class="col-sm-12">
          <label>Addition</label>
          <input type="text" name="addition" class="form-control" placeholder="100">
        </div>
        <div class="col-sm-12">
          <label>Discount</label>
          <input type="text" name="discount" class="form-control" placeholder="100">
        </div>
        <div class="col-sm-12">
          <label>Nett Package Price</label>
          <input type="text" name="nett_package_price" class="form-control" placeholder="" readonly>
        </div>
        <div class="col-sm-12">
          <label>Down payment Paid</label>
          <input type="text" name="down_payment_paid" class="form-control" placeholder="2000" required>
        </div>
        <div class="col-sm-12">
          <label>Admin Charges</label>
          <input type="text" name="admin_charges" class="form-control" placeholder="" readonly>
        </div>
        <div class="col-sm-12">
          <label>Payment To Date</label>
          <input type="text" name="admin_charges" class="form-control" placeholder="" readonly>
        </div>
        <div class="col-sm-12">
          <label>Balance Package Price</label>
          <input type="text" name="admin_charges" class="form-control" placeholder="" readonly>
        </div>
      </div>
    </div>
  </div>
</fieldset>
