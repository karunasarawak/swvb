@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Schedule Tours')
\
{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/daterange/daterangepicker.css')}}">
@endsection
@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <form class="form-horizontal" method="POST" action="{{route('tours.store', $payload['leads']->lead_id)}}" id="newtours" novalidate>
        @csrf        
        @method('patch')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Schedule Tour - {{$payload['leads']->name}}</h4>
                </div>
                <div class="card-header">
                    <h7 class="card-title swvb-blue m-0 font-weight-bold my-auto pb-2">Basic Information</h7>
                </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Salutation</label>
                                                <p>{{$payload['leads']->salutation}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Name</label>
                                                <div class="position-relative">
                                                <p>{{$payload['leads']->name}}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Mobile No.</label>
                                            <p>{{$payload['leads']->mobile_no}}</p>

                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Whatsapp</label>
                                                <div class="position-relative">
                                                <p>{{$payload['leads']->whatsapp_no}}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Credit Card Limit</label>
                                                <div class="position-relative has-icon-left">
                                                <p>{{$payload['leads']->credit_card_limit}}</p>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                          
                                
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Telemarkerter</label>
                                            <p>{{$payload['leads']->sales_name}}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Email</label>
                                            <output type="text" class="form-control" id="email" name="email" placeholder="abc@gmail.com" required
                                                data-validation-required-message="This Email field is required">
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <!-- <input type="text" name="leadid" value="{{$payload['leads']->lead_id}}"> -->

                            <div class="row pt-2">
                                <div class="col">
                                    <h7 class="card-title swvb-blue m-0 font-weight-bold my-auto">Tour Info</h7>
                                </div>
                            </div>
                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="date" class="form-control" value="09-11-2020" name="date" required
                                                data-validation-required-message="Please select a Date">
                                                <div class="form-control-position">
                                                
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Initial Time</label>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="time" class="form-control" value="1:00am" id="timein" name="time" required
                                                data-validation-required-message="Please select a Time">
                                              
                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Venue</label>
                                                <div class="position-relative">
                                                    <select name="venue" class="custom-select form-control" id="venue" required
                                                    data-validation-required-message="Please select a venue">
                                                        <option value="">--</option>
                                                        @foreach($payload['venues'] as $venues)
                                                            <option value="{{$venues->sales_venue_id}}">{{$venues->venue_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Country</label>
                                                <div class="position-relative">
                                                    <select name="country" id="country" class="custom-select form-control" required 
                                                    data-validation-required-message="Please select a country">
                                                        <option value="">--</option>
                                                        @foreach($payload['countries'] as $country)
                                                            <option value="{{$country->id}}">{{$country->short_code}} - {{$country->country_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                   

                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>State</label>
                                                <div class="position-relative">
                                                    <select name="state" class="custom-select form-control" required>
                                                        <option>--</option>
                                                        @foreach($payload['states'] as $states)
                                                            <option value="{{$states->id}}">{{$states->state_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                                    <!-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>City</label>
                                                <div class="position-relative">
                                                <select name="city" class="select2 form-control" required>
                                                    <option>--</option>
                                                    @foreach($payload['cities'] as $city)
                                                        <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Sales Personnel</label>
                                                <div class="position-relative">
                                                <select name="salesp" class="select2 form-control" required>
                                                    <option>--</option>
                                                    @foreach($payload['salesp'] as $salesp)
                                                        <option value="{{$salesp->sales_team_id}}">{{$salesp->sales_name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                             
                            <button type="submit" class="btn btn-primary m-1 mr-1 mb-1" onclick="on()">Save</button>
                        </div>
                    
                </form>
            </div>
</section>

<!-- Form wizard with step validation section end -->
@endsection


<script type="text/javascript">
$(document).on('save','form#newtours',function(event){
	event.preventDefault();
	var sel = $("#country").val();
	if(sel == ''){
		alert('Please select countries first');
		return false;
	}
});
</script>
{{-- vendor scripts --}}

@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
