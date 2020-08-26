<!-- body content of step 1 first member start -->
<fieldset x-data="{ edit: true, original:false}" >  <!-- basic start -->
  <section id="form-repeater-wrapper">  
    <div class="row pt-1" >
      <div class="col-12">
        <h6 class="py-50">Contract Type</h6>
      </div>

      <form action="{{route('members.store')}}" class="wizard-horizontal" method="POST" novalidate>
      @csrf

      <div class="col-sm-4" >
        <div class="form-group controls">
          <div class="custom-control-inline">
          
          <div class="radio mr-1">
              <input type="radio" name="contract_type" value="1" id="individual1"  @click="edit=true, original=false" checked required>
              <label for="individual1">Individual</label>
            </div>
            <div class="radio">
              <input type="radio" name="contract_type" value="2" id="corporate1"  @click="edit=false, original=true" required>
              <label for="corporate1">Corporate</label>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row pt-1" x-show="original" x-cloak>
      <div class="col-12">
        <h6 class="py-50"  >Corporate Info</h6>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Company Name</label>
            <input  type="text" name="company_name" class="form-control" placeholder="--" data-validation-required-message="Please write the company name"  required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Nature of Business</label>
            <input type="text"  name="company_nob" class="form-control" placeholder="--" data-validation-required-message="Please write the nature of business" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Company No.</label>
            <input type="number" name="company_no"  class="form-control" placeholder="--" data-validation-required-message="Please write the company number" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label>Address Line 1</label>
            <input type="text" name="company_addr1"  class="form-control" placeholder="--" data-validation-required-message="Please write the address line 1" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Address Line 2</label>
            <input type="text" name="company_addr2"  class="form-control" placeholder="--" data-validation-required-message="Please write the address ine 2" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Postcode</label>
            <input type="number" name="company_pcode"   class="form-control" placeholder="--" data-validation-required-message="Please write the postcode" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >City</label>
            <select name="company_city" class="select2 form-control" required>
              <option>--</option>
                @foreach($payload['city'] as $city)
                  <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                @endforeach
            </select>
          </div>
        </div>
      </div>

      <div  class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >State</label>
            <select name="company_state" class="select2 form-control" readonly>
              <option>--</option>
              @foreach($payload['state'] as $state)
                <option value="{{$state->id}}">{{$state->state_name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      
      <div  class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Country</label>
            <select name="company_country" class="select2 form-control" required>
            <option>--</option>
              @foreach($payload['country'] as $country)
                <option value="{{$country->id}}">{{$country->short_code}}-{{$country->country_name}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div  class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label >Email</label>
              <input type="email" name="company_email" class="form-control"  placeholder="--" data-validation-required-message="Please write the email" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
              <label >Contact No.</label>
              <input type="number" name="company_contact" class="form-control"  placeholder="--" data-validation-required-message="Please write the contact number" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
              <label >Fax No.</label>
              <input type="number" name="company_fax"  class="form-control" placeholder="--" data-validation-required-message="Please write the fax no." required>
          </div>
        </div>
      </div>
    </div>

    <div class="row pt-1">
      <div class="col-12">
        <h6 class="py-50">Basic Contract Info</h6>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label>Application No.</label>
            <input type="number" name="appno" class="form-control" placeholder="--" data-validation-required-message="Please write the application number" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label>Application Date</label>
            <input type="date" name="app_date" class="form-control" value="--" data-validation-required-message="Please write the application date" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label>Agreement No.</label>
            <input type="number" name="agree_no" class="form-control" value="" data-validation-required-message="Please write the agreement number" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label>Agreement Date</label>
            <input type="date" name="agree_date" class="form-control" value="" data-validation-required-message="Please write the agreement date" required>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
          <div class="controls">
            <label>Membership No.</label>
            <input type="text" name="mbr_no" class="form-control" placeholder="--" data-validation-required-message="Please write the membership number" required>
          </div>
        </div>
      </div>

    </div>

    <!-- occupation end -->
    <!-- contact start -->
    <div class="row pt-1">
        <div class="col-12">
          <h6 class="py-50">Package</h6>
        </div>
      <div class="col-sm-4">
        <div class="form-group">
          <div class="controls">
            <label>Package Type</label>
            <select name="package_id" id="packagetype" onchange="package();" class="custom-select form-control package" data-validation-required-message="Please select a package type" required>
              <option value="" disabled selected>Select a package type</option>
              @foreach($payload['packages'] as $package)
                <option value="{{$package->package_id}}" class="{{$package->package_wd}} WD {{$package->package_we}}WE">{{$package->package}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="form-group">
          <div class="controls">
            <label>Entitlement</label>
            <input type="number" class="form-control entitlement" placeholder="--" readonly>
          </div>
        </div>
      </div>
      
        <div class="col-sm-4">
            <div class="form-group">
                <div class="controls">
                  <label>Package Price</label>
                  <div class="position-relative has-icon-left">
                    <input type="number" name="price" class="form-control price" placeholder="--" data-validation-required-message="Please write the package price" required>
                    <div class="form-control-position">RM</div>
                  </div>
                </div>
            </div>
        </div>
          
    </div>
    <!-- contact end -->
    <!-- payment start -->
    <div class="row pt-1">
      <div class="col-8">
        <h6 class="py-50">Payment</h6>
      </div>
     
    </div>
        <div class="row" >
          <!--<div class="col-sm-12">-->
          <!--    <div class="form repeater-default">-->
          <!--          <div data-repeater-list="group1">-->
          <!--              <div data-repeater-item>-->
          <!--                  <div class="row justify-content-between">-->
          <!--                      <div class="col-md-6 form-group">-->
          <!--                          <label for="Email">Down Payment </label>-->
          <!--                          <input type="number" name="poe_year1" class="form-control" id="pt_use_yr" placeholder="Enter Use year">-->
          <!--                      </div>-->
                                
                                
          <!--                      <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">-->
          <!--                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i-->
          <!--                            class="bx bx-x"></i>-->
          <!--                            Delete-->
          <!--                        </button>-->
          <!--                      </div>-->
          <!--                  </div>-->
          <!--                  <hr>-->
          <!--              </div>-->
          <!--          </div>-->
          <!--          <div class="form-group">-->
          <!--              <div class="col p-0">-->
          <!--                  <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>-->
          <!--                      Add-->
          <!--                  </button>-->
          <!--              </div>-->
          <!--          </div>-->
          <!--    </div>-->
          <!--</div>-->
          
         
          
          @for($i=1;$i>=6;$i++)
          <div class="col-sm-6">
            <div class="form-group">
              <div class="controls">
                <label>Down Payment {{$i}}</label>
                  <div class="position-relative has-icon-left">
                    <input type="number" name="dp[{{$i}}][dpymt]" class="form-control dp" placeholder="--" >
                    <div class="form-control-position">RM</div>
                  </div>
              </div>
            </div>
          </div>
           
          <div class="col-sm-6">
            <div class="form-group">
              <div class="controls">
                <label>Date</label>
                <input type="date" name=dp[{{$i}}][projected_alloc_date] class="form-control" placeholder="Date" required>
              </div>
            </div>
          </div>

        @endfor

          <!--<div class="col-sm-4">-->
          <!--  <div class="form-group">-->
          <!--    <div class="controls">-->
          <!--      <label>Installment 1</label>-->
          <!--      <input type="number" class="form-control" placeholder="--" required>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->

          <!--<div class="col-sm-4">-->
          <!--  <div class="form-group">-->
          <!--    <div class="controls">-->
          <!--      <label>Date</label>-->
          <!--      <input type="date" class="form-control" placeholder="--" required>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        
      <div class="row installment">
          <div class="col-md-4">
                   
            <div class="form-group">
              <div class="controls">
                <label>Installation Duration</label>
                <select name="duration" class="select2 form-control duration" data-validation-required-message="Please select a installation duration" required>
                  <option value="" disabled selected>Select a installation duration</option>
                  @include('includes.option_from_array',['data'=>$payload['interest'],'array'=>$payload['interest_durations']])
                </select>
              </div>
            </div>
            
            
            <div class="form-group">
              <div class="controls">
                <label>Admin Charges</label>
                <div class="position-relative has-icon-right">
                  <select name="charges" class="select2 form-control round mr-1 mb-1 interest">
                    @include('includes.option_from_array',['array'=>$payload['interests']])
                  </select>
                </div>
              </div>
            </div>
            
              <div class="form-group">
              <div class="controls">
                <label>Addition</label>
                <div class="position-relative has-icon-left">
                  <input type="number" name="addition" class="form-control at" value="0" placeholder="--" required>
                  <div class="form-control-position">RM</div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="controls">
                <label>Addition Remark</label>
                    <input type="text" name="addremark" class="form-control" placeholder="--" data-validation-required-message="Please write the addition remark" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="controls">
                <label>Discount</label>
                <div class="position-relative has-icon-left">
                  <input type="number" name="dis" class="form-control dt" value="0" placeholder="--" data-validation-required-message="Please write the discount" required>
                  <div class="form-control-position">RM</div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="controls">
                <label>Discount Remark</label>
                    <input type="text" name="disremark" class="form-control" placeholder="--" data-validation-required-message="Please write the discount remark" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="controls">
                <label>Nett Package Price</label>
                <div class="position-relative has-icon-left">
                  <input type="number" name="npt" class="form-control net" placeholder="--" data-validation-required-message="Please write the nett package price" required>
                  <div class="form-control-position">RM</div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="controls">
                <label>Rounding</label>
                <input type="number" class="form-control rounding" placeholder="--" required>
              </div>
            </div>
            
            <div class="form-group">
              <div class="controls">
                <label>Total Outstanding</label>
                  <div class="position-relative has-icon-left">
                    <input type="text" name="osd" class="form-control outstanding" placeholder="--" data-validation-required-message="Please write the total outstanding" required>
                    <div class="form-control-position">RM</div>
                  </div>
              </div>
            </div>
            
            <button type="button" class="btn btn-primary m-1" id="btn_add1" onclick="installment();" >Preview</button>
            
          </div>
          
          <div class="col-md-8">
              <div class="table table-responsive pt-3">
                  <table class="table tours-all" id="installtable" style="width:100%;">
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
          
    
   
    <!-- primary address end -->
    <!--alt address start -->
    <div class="row pt-1" x-data="{ cc: false, xcc:true}">
      <div class="col-12">
        <h6 class="py-50">AMF</h6>
      </div>

        <div class="col-sm-4" >
          <div class="form-group controls">
            <label>Credit Card</label>               
            <div class="custom-control-inline">
              <div class="radio mr-1">
                <input type="radio" name="amfcc" value="1" id="ccy" @click="xcc=false, cc=true" required>
                <label for="ccy">Yes</label>
              </div>
              <div class="radio">
                <input type="radio" name="amfcc" value="0" id="ccn" @click="xcc=true, cc=false">
                <label for="ccn">No</label>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-sm-4" x-show="cc">
          <div class="form-group controls">
            <label class="d-block">Credit Card Type</label>
            <select name="sp" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
              <option value="" disabled>--</option>
             
                  <option value="" disabled selected></option>
                
                <option value="" disabled></option>
               
            </select>
          </div>
        </div>

        <div class="col-sm-4" x-show="cc">
          <div class="form-group">
            <div class="controls">
              <label>Credit Card Number</label>
              <input type="number" name="amf_cc_no" class="form-control" placeholder="--" data-validation-required-message="Please write the next payment due" required>
            </div>
          </div>
        </div>

        <div class="col-sm-4" x-show="cc"> 
          <div class="form-group">
            <div class="controls">
              <label>Bank</label>
                <input type="name" name="amf_cc_name" class="form-control" placeholder="--" data-validation-required-message="Please write the next payment due" required>
            </div>
          </div>
        </div>

        <div class="col-sm-4" x-show="cc"> 
          <div class="form-group">
            <div class="controls">
              <label>Card Holder Name</label>
                <input type="name" name="amf_cc_name" class="form-control" placeholder="--" data-validation-required-message="Please write the next payment due" required>
            </div>
          </div>
        </div>

      <div class="col-sm-4" x-show="cc">
        <div class="form-group">
          <div class="controls">
            <label>Expiry Date</label>
            <input type="date" name="amf_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
          </div>
        </div>
      </div>

      <div class="col-sm-4" x-show="cc">
        <div class="form-group">
          <div class="controls">
            <label>CVV</label>
            <input type="number" name="amf_cc_ccv" class="form-control" placeholder="Please enter the" data-validation-required-message="Please enter the expiry date" required>
          </div>
        </div>
      </div>
    </div>

  

    <!--
    AMF end
    Installment start -->
    <div class="row pt-1" x-data="{ card: false, xccard:true}">
      <div class="col-12">
        <h6 class="py-50">Installment</h6>
      </div>

        <div class="col-sm-4" >
          <div class="form-group controls">
            <label>Credit Card</label>               
            <div class="custom-control-inline">
              <div class="radio mr-1">
                <input type="radio" name="instcc" value="1" id="instyes"  @click="xccard=false, card=true" required>
                <label for="instyes">Yes</label>
              </div>
              <div class="radio">
                <input type="radio" name="instcc" value="0" id="instno" @click="xccard=true, card=false">
                <label for="instno">No</label>
              </div>
              
            </div>
          </div>
        </div>

        <div class="col-sm-4" x-show="card">
          <div class="form-group controls">
            <label class="d-block">Credit Card Type</label>
            <select name="sp" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
              <option value="" disabled>--</option>
             
                  <option value="" disabled selected></option>
                
                <option value="" disabled></option>
               
            </select>
          </div>
        </div>

        <div class="col-sm-4" x-show="card">
          <div class="form-group">
            <div class="controls">
              <label>Credit Card Number</label>
              <input type="number" name="install_cc_no" class="form-control" placeholder="Please enter your credit card number" data-validation-required-message="Please write the next payment due" required>
            </div>
          </div>
        </div>

        <div class="col-sm-4" x-show="card"> 
          <div class="form-group">
            <div class="controls">
              <label>Bank</label>
                <input type="name" name="amf_cc_name" class="form-control" placeholder="--" data-validation-required-message="Please write the next payment due" required>
            </div>
          </div>
        </div>

        <div class="col-sm-4" x-show="card">
          <div class="form-group">
            <div class="controls">
              <label>Card Holder Name</label>
                <input type="name" name="install_cc_name" class="form-control" placeholder="Please enter your name" data-validation-required-message="Please write the next payment due" required>
            </div>
          </div>
        </div>

      <div class="col-sm-4" x-show="card">
        <div class="form-group">
          <div class="controls">
            <label>Expiry Date</label>
            <input type="date" name="install_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
          </div>
        </div>
      </div>

      <div class="col-sm-4" x-show="card">
        <div class="form-group">
          <div class="controls">
            <label>CVV</label>
            <input type="number" name="install_cc_ccv" class="form-control" placeholder="Please enter the" data-validation-required-message="Please enter the expiry date" required>
          </div>
        </div>
      </div>
    </div>
    <!-- Installment end -->

    <div class="row pt-1 pb-5">
      <div class="col-12">
        <h6 class="py-50">Assignment</h6>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <div class="controls">
            <label>Declaration No</label>
            <input type="number" name="declare_no" class="form-control" placeholder="--" data-validation-required-message="Please write the entitlement" required>
          </div>
        </div>
      </div>

      <div class="col-sm-8">
        
      </div>

        <div class="col-sm-4">
          <div class="form-group controls">
            <label class="d-block">Sales Personnel</label>
            <select name="sp" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
              <option value="" disabled>--</option>
              @foreach($payload['sp'] as $sp)
                @if($payload['tour']->sales_personnel_id == $sp->sales_team_id)
                  <option value="{{$sp->sales_team_id}}" disabled selected>{{$sp->sales_name}}</option>
                @else
                <option value="{{$sp->sales_team_id}}" disabled>{{$sp->sales_name}}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group controls">
            <label class="d-block">Sales Manager</label>
            <select name="sm" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
              <option value="" disabled>--</option>
                @foreach($payload['sm'] as $sm)
                  @if($payload['tour']->sales_manager_id == $sm->sales_team_id)
                    <option value="{{$sm->sales_team_id}}" selected>{{$sm->sales_name}}</option>
                  @else
                  <option value="{{$sm->sales_team_id}}" disabled>{{$sm->sales_name}}</option>
                  @endif
                @endforeach
            </select>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="form-group controls">
            <label class="d-block">Sales Venue</label>
            <select name="venue" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
              <option value="" disabled>--</option>
                @foreach($payload['venue'] as $venue)
                  @if($payload['tour']->sales_venue_id == $venue->sales_venue_id)
                    <option value="{{$venue->sales_venue_id}}" selected>{{$venue->venue_name}}</option>
                  @else
                    <option value="{{$venue->sales_venue_id}}" disabled>{{$venue->venue_name}}</option>
                  @endif
                @endforeach
            </select>
          </div>
        </div>
    </div>

    
  </section>
</fieldset>
  
  {{-- <!--down payment popout Modal -->
  <div class="modal fade" id="downpayment1" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-swvb-blue">
          <h5 class="modal-title text-white" id="exampleModalLongTitle">Down Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="bx bx-x"></i>
          </button>
        </div>
        <div class="modal-body">
       
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Close</span>
          </button>

          <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
            <i class="bx bx-check d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Accept</span>
          </button>
        </div>
      </div>
    </div>
  </div> --}}

