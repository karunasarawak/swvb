
<!-- body content of step 1 second member start -->
<fieldset  x-data="{ edit: false, original:false}">
  <div>
     <div id="contact2">
       <!-- basic start  -->
       
       <div class="row pt-5">
         <div class="col-12">
           <h6 class="py-50">Basic - Secondary member</h6>
         </div>
 
         <div class="col-sm-4">
           <div class="form-group controls"></div>
             <div class="custom-control-inline">
               <div class="radio mr-1">
                 <input type="radio" name="lead_status" value="1" id="celead" @click="edit=false, original=true" onclick="chooseLead(1)" >
                 <label for="celead">Existing Lead</label>
               </div>
               <div class="radio">
                 <input type="radio" name="lead_status" value="2" id="cnlead" @click="edit=true, original=false" onclick="chooseLead(0)">
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
 
 
         <div class="row">
           <div class="col-sm-4">
             <div class="form-group controls" x-cloak x-show="original">
               <label>Existing Lead</label>
               <select class="form-control"  id="exist_lead" name="exist_lead">
                <option value="{{ $payload['lead']->lead_id }}" selected>{{ $payload['lead']->lead_id }} - {{ $payload['lead']->name }}</option>
                @if(!empty($payload['lead2']->id) && $payload['lead2']->salutation_id == $salute->salutation_id)
                <option value="{{ $payload['lead2']->lead_id }}" selected>{{ $payload['lead2']->lead_id }} - {{ $payload['lead2']->name }}</option>
                
                 @else 
                   <option value="">--</option>
                 @endif
               </select>
             </div>
           </div>
         </div>
 
         <div class="row pt-2" >
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Salutation</label>
                 <select name="sec_salute" id="sec_salute"  class="custom-select" data-validation-required-message="Please select a salutation." required>
                   <option value="">--</option>
                     @foreach($payload['salute'] as $salute)
                       @if(!empty($payload['lead2']->id) && $payload['lead2']->salutation_id == $salute->salutation_id)
                         <option value="{{ $salute->salutation_id }}" selected>{{ $salute->salutation }}</option>
                       @else
                         <option value="{{ $salute->salutation_id }}">{{ $salute->salutation }}</option>
                       @endif
                     @endforeach
                 </select>
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Name</label>
                 @if(!empty($payload['lead2']->lead_id))
                   <input type="text" name="sec_name" id="sec_name" class="form-control" value="{{ $payload['lead2']->name }}" required>
                 @else
                   <input type="text" name="sec_name" id="sec_name" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label class="d-block">Gender</label>
               <select name="sec_gender" id="sec_gender"  class="custom-select" data-validation-required-message="Please select a salutation." required>
                 <option value="">--</option>
                   @foreach($payload['gender'] as $gender)
                     @if(!empty($payload['lead2']->lead_id) && $payload['lead']->gender)
                       <option value="{{ $gender->gender_id}}" selected>{{ $gender->gender_name }}</option>
                     @else
                       <option value="{{ $gender->gender_id }}">{{ $gender->gender_name }}</option>
                     @endif
                   @endforeach
               </select>
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>NRIC/Passport</label>
                 @if(!empty($payload['lead2']->lead_id))
                   <input type="text" name="sec_nric" id="sec_nric" class="form-control" value="{{ $payload['lead2']->nric }}" required>
                 @else
                   <input type="text" name="sec_nric" id="sec_nric" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>DOB</label>
               @if(!empty($payload['lead2']->lead_id))
                 <input type="date" name="sec_dob" id="sec_dob" class="form-control" value="{{ $payload['lead2']->dob }}" required>
               @else
                 <input type="date" name="sec_dob" id="sec_dob" class="form-control" placeholder="--" required>
               @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Marital Status</label>
               <select name="sec_maritual" id="sec_maritual"  class="custom-select" required>
                 <option value="">--</option>
                 @foreach($payload['maritual'] as $maritual)
                   @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->marital_status == $maritual->maritial_id)
                     <option value="{{ $maritual->maritial_id }}" selected>{{ $maritual->maritial_name }}</option>
                   @else
                     <option value="{{ $maritual->maritial_id }}" selected>{{ $maritual->maritial_name }}</option>
                   @endif
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
                     @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->ethnicity_id == $race->race_id)
                       <option value="{{ $race->race_id }}" selected>{{ $race->race_name }}</option>
                     @else
                       <option value="{{ $race->race_id }}">{{ $race->race_name }}</option>
                     @endif
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
                   @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->religion_id == $religion->religion_id)
                     <option value="{{ $religion->religion_id }}" selected>{{ $religion->religion }}</option>
                   @else
                     <option value="{{ $religion->religion_id }}">{{ $religion->religion }}</option>
                   @endif
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
                   @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->nationality == $nation->nation_id)
                     <option value="{{ $nation->nation_id }}" selected>{{ $nation->nation }}</option>
                   @else
                     <option value="{{ $nation->nation_id }}">{{ $nation->nation}}</option>
                   @endif 
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
 
 
         <div class="row pt-1" > 
           <div class="col-12">
             <h6 class="py-50">Occupation</h6>
           </div>
   
           <div class="col-sm-6">
             <div class="form-group controls">
               <label>Occupation/Designation</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->occupation != null)
                   <input type="text" name="sec_occup" id="sec_occup" class="form-control" value="{{ $payload['lead2']->occupation }}" required>
                 @else
                   <input type="text" name="sec_occup" id="sec_occup" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-6">
             <div class="form-group controls">
               <label>Employer/Company</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->company != null)
                   <input type="text" name="sec_company" id="sec_company" class="form-control" value="{{ $payload['lead2']->company }}" required>
                 @else
                   <input type="text" name="sec_company" id="sec_company" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
         </div> 
 
         <div class="row pt-1" >
           <div class="col-12">
             <h6 class="py-50">Contact</h6>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Mobile</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->mobile_no != null)
                   <input type="number" name="sec_mobile" id="sec_mobile" class="form-control" value="{{ $payload['lead2']->mobile_no }}" required>
                 @else
                   <input type="number" name="sec_mobile" id="sec_mobile" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Whatsapp</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->whatsapp_no != null)
                   <input type="number" name="sec_whatsapp" id="sec_whatsapp" class="form-control" value="{{ $payload['lead2']->whatsapp_no }}" required>
                 @else
                   <input type="number" name="sec_whatsapp" id="sec_whatsapp" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Home No.</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->home_no != null)
                   <input type="number" name="sec_home" id="sec_home" class="form-control" value="{{ $payload['lead2']->home_no }}" required>
                 @else
                   <input type="number" name="sec_home" id="sec_home" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Office No.</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->office_no != null)
                   <input type="number" name="sec_office" id="sec_office" class="form-control" value="{{ $payload['lead2']->office_no }}" required>
                 @else
                   <input type="number" name="sec_office" id="sec_office" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Primary email</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->primary_email != null)
                   <input type="email" name="sec_pemail" id="sec_pemail" class="form-control" value="{{ $payload['lead2']->primary_email }}" required>
                 @else
                   <input type="email" name="sec_pemail" id="sec_pemail" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
           <div class="col-sm-4">
             <div class="form-group controls">
               <label>Alternate email</label>
                 @if(!empty($payload['lead2']->lead_id) && $payload['lead2']->alt_email != null)
                   <input type="email" name="sec_aemail" id="sec_aemail" class="form-control" value="{{ $payload['lead2']->alt_email }}" required>
                 @else
                   <input type="email" name="sec_aemail" id="sec_aemail" class="form-control" placeholder="--" required>
                 @endif
             </div>
           </div>
   
         </div>
 
         <div class="row pt-1" >
           <div class="col-6">
             <h6 class="py-50">Primary Address</h6>
           </div>
 
           <div class="col-6">
             <h6 class="py-50">Alternate Address</h6>
           </div>
 
         </div>
 
         <div class="row" >
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
 
         <div class="row" >
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
 
         <div class="row" >
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
 
         <div class="row" >
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
 
         <div class="row" x-show="original">
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
 
         <div class="row pt-1" x-show="original">
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
   
       </div>
 
     
 
         <!-- basic end -->
       <!-- occupation start -->
     
       <!-- occupation end -->
       <!-- contact start -->
      
 
       <!-- contact end -->
       <!--primary address & alternate address start -->
        
       <!-- alt address end -->
       <!-- remarks start -->
 
       
 
       
     </div>
 </fieldset>
 
   <!-- remarks end -->
 
   <!-- body content of step 2 second member end--> 
     
 
      
  