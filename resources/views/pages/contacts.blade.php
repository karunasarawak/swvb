@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Contact')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row" x-data="{ edit: false, original:true}">
        <div class="col-md-12">
            <div class="card">
                <!-- must use form and route method to submit data -->
                <form action="{{route('contacts.edit', $payload['leads']->lead_id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="card-header bg-swvb-cyan">
                        <div class="row">
                            <h4 class="col card-title text-white ml-4">Member Info - John Doe</h4>
                            <p class="col h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                <button type="submit" class="col btn btn-primary" x-show="edit" x-cloak >                                                                   
                                    Save
                                </button>
                                </p>
                                <p class="col h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                    <button class="col btn btn-primary" x-show="edit" x-cloak @click="edit=false, original=true">                                                                  
                                        Close
                                    </button>
                                </p>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 pl-5">Member Detail<button class="border-0 bg-transparent" x-show="original" @click="edit=true, original=false">                                                           
                                            <i class="bx bx-pencil "></i>
                                        </button></p>
                                    
                                </div>
                            </div>

                        
                            <div class="row" >
                                <div class="col ml-5">
                                    <div class="row">
                                        <p class="col">Saluation</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->salutation}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="salutation_id" name="salutation_id" required>
                                            
                                        @foreach($payload['salutation'] as $salutation)
                                            @if($salutation->salutation == $payload['leads']->salutation)
                                            <option value="{{$payload['leads']->salutation}}" selected>{{$salutation->salutation}}</option>
                                            @else
                                            <option value="{{$salutation->salutation_id}}">{{$salutation->salutation}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Name</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="name" class="form-control" value="{{$payload['leads']->name}}" placeholder="Name" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Gender</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->gender_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="gender" name="gender" required>
                                            
                                            @foreach($payload['gender'] as $gender)
                                            <option value="{{$gender->gender_id}}">{{$gender->gender_name}}</option>
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">NRIC/Passport No.</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->nric}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="NRIC" class="form-control" value="{{$payload['leads']->nric}}" placeholder="NRIC" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">DOB</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->dob}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="date" name="dob" class="form-control" value="{{$payload['leads']->dob}}" placeholder="date of birth" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Maritial Status</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->maritial_name }}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="marital_status" name="marital_status" required>
                                            
                                            @foreach($payload['maritial'] as $maritial)
                                            <option value="{{$maritial->maritial_id}}">{{$maritial->maritial_name}}</option>
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Race</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->race_name }}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="race_name" name="race_name" required>
                                            
                                            @foreach($payload['race'] as $race)
                                            <option value="{{$race->race_id}}">{{$race->race_name}}</option>
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Religion</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->religion }}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="religion" name="religion" required>
                                            
                                            @foreach($payload['religion'] as $religion)
                                            <option value="{{$religion->religion_id}}">{{$religion->religion}}</option>
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Nationalities</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->nation }}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="nationalities" name="nationalities" required>
                                            
                                            @foreach($payload['nation'] as $nation)
                                            <option value="{{$nation->nation_id}}">{{$nation->nation}}</option>
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Preferred Language</p>
                                        <p class="col font-weight-bold black" x-show="original">English</p>
                                        <p class="col" x-cloak x-show="edit">
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1 pl-5">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Occupation<i class="bx bx-pencil"></i></p>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Occupation</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->occupation}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="occupation" class="form-control" value="{{$payload['leads']->occupation}}" placeholder="Occupation" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Employer Company</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->company}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="company" class="form-control" value="{{$payload['leads']->company}}" placeholder="Company" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>

                                </div>
                            </div>  
                            <div class="row pt-1 ml-3">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Contact<i class="bx bx-pencil"></i></p>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Home No.</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->home_no}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="home_no" class="form-control" value="{{$payload['leads']->home_no}}" placeholder="+6082 123 456" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Office No.</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->office_no}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="office_no" class="form-control" value="{{$payload['leads']->office_no}}" placeholder="+6082 123 456" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Whatsapp</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->whatsapp_no}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="whatsapp_no" class="form-control" value="{{$payload['leads']->whatsapp_no}}" placeholder="+6082 123 456" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Primary Email</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->primary_email}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="primary_email" class="form-control" value="{{$payload['leads']->primary_email}}" placeholder="Email" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Alternate Email</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['leads']->alt_email}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="alt_email" class="form-control" value="{{$payload['leads']->alt_email}}" placeholder="Email" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-1 ml-3">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Primary Address<i class="bx bx-pencil"></i></p>
                                </div>
                            </div>
                    
                            <div class="row ml-3">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Address Line 1</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['primaryAddress']->addr_1}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="addr_1" class="form-control" value="{{$payload['primaryAddress']->addr_1}}" placeholder="Line 1" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Address Line 2</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['primaryAddress']->addr_2}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="addr_2" class="form-control" value="{{$payload['primaryAddress']->addr_2}}" placeholder="Line 2" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Postcode</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['primaryAddress']->postcode}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="postcode" class="form-control" value="{{$payload['primaryAddress']->postcode}}" placeholder="Postcode" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <p class="col">City </p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['primaryAddress']->city_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="country" name="country" required>
                                            
                                            @foreach($payload['city'] as $city)
                                                @if($payload['primaryAddress']->city_name == $city->city_name)
                                                <option value="{{$payload['primaryAddress']->city_name}}">{{$city->city_name}}</option>
                                                @else
                                                <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">State</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['primaryAddress']->state_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="state_name" name="state_name" required>
                                            
                                            @foreach($payload['state'] as $s)
                                            <option value="{{$s->id}}">{{$s->state_name}}</option>
                                            @endforeach
                                        </select>
                                        
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Country</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['primaryAddress']->country_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="country" name="country" required>
                                            
                                        @foreach($payload['country'] as $country)
                                            @if($country->id == $payload['primaryAddress']->country_name)
                                            <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                            @else
                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row pt-1 ml-3">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Alternate Address<i class="bx bx-pencil"></i></p>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Address Line 1</Address></p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['altAddress']->addr_1}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="addr_1" class="form-control"  value="{{$payload['altAddress']->addr_1}}" placeholder="Line 1" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Address Line 2</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['altAddress']->addr_2}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="addr_2" class="form-control" value="{{$payload['altAddress']->addr_2}}" placeholder="Line 2" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Postcode</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['altAddress']->postcode}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                            <input  type="text" name="postcode" class="form-control" value="{{$payload['altAddress']->postcode}}" placeholder="Postcode" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <p class="col">City </p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['altAddress']->city_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="state_name" name="state_name" required>
                                            
                                        @foreach($payload['city'] as $city)
                                            @if($city->city_id == $payload['altAddress']->city_name)
                                            <option value="{{$payload['altAddress']->city_name}}">{{$city->city_name}}</option>
                                            @else
                                            <option value="{{$city->city_id}}">{{$city->city_name}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                            <p class="col">State</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['altAddress']->state_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="country" name="country" required>
                                            
                                            @foreach($payload['state'] as $s)
                                            <option value="{{$s->id}}">{{$s->state_name}}</option>
                                            @endforeach
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Country</p>
                                        <p class="col font-weight-bold black" x-show="original">{{$payload['altAddress']->country_name}}</p>
                                        <p class="col" x-cloak x-show="edit">
                                        <select class="custom-select form-control required" id="country" name="country" required>
                                            
                                        @foreach($payload['country'] as $country)
                                             @if($country->country_name == $payload['altAddress']->addr_1)
                                            <option value="{{$payload['altAddress']->addr_1}}">{{$country->country_name}}</option>
                                            @else
                                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row pt-1 ml-3">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 ">Contract</p>
                                </div>
                            </div>

                        
                            <div class="col">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive-lg">
                                        <table class="table table-striped leads-all expanded">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Membership No.</th>
                                                    <th class="text-white">Agreement Date</th>
                                                    <th class="text-white">Package</th>
                                                    <th class="text-white">Status</th>
                                                    
                                                    
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($payload))
                                                
                                                    
                                                <tr>
                                                    <td>{{$payload['leads']->mbrship_no}}</td>
                                                    <td>{{$payload['leads']->agreement_date}}</td>
                                                    <td>{{$payload['leads']->package_name}}</td>
                                                    <td>{{$payload['leads']->mbrship_status}}</td>
                                                    
                                                </tr>
                                                    

                                            @endif
                                            
                                            </tbody>
                                        </table>
                                    </div>   
                                </div>
                            </div>   
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
</section>


<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="//cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js"></script>
<script src="{{asset('vendors/js/tables/datatable/datetime-moment.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection

