@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ICT Request')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <!-- must use form and route method to submit data -->
               
                    <div class="card-header bg-swvb-cyan">
                        <div class="row">
                            <h4 class="col card-title text-white ml-4">Points/Entitlement Adjustment Details</h4>
                               
                        </div>
                        
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            
                        
                            <div class="row pt-3">
                                <div class="col ml-5">
                                    <div class="row">
                                        <p class="col">Membership No.</p>
                                        <p class="col font-weight-bold black" x-show="o">{{$payload['members']->mbrship_no}}</p>
                                        <p class="col" x-cloak x-show="e">
                                        <select class="custom-select form-control required" id="salutation" name="salutation" required>
                                            
                                        
                                        </select>
                                        </p>
                                    </div>
                                
                                    <div class="row">
                                        <p class="col">Member Name</p>
                                        <p class="col font-weight-bold black" x-show="o">{{$payload['members']->name}}</p>
                                        <p class="col" x-cloak x-show="e">
                                            <input  type="text" name="name" class="form-control" value="" placeholder="Name" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Reservation No.</p>
                                        <p class="col font-weight-bold black" x-show="o">{{$payload['members']->rsvn_no}}</p>
                                        <p class="col" x-cloak x-show="e">
                                        <select class="custom-select form-control required" id="gender" name="gender" required>
                                            
                                           
                                        </select>
                                        </p>
                                    </div>
                                </div>
                                
                               
                            </div>


                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 pl-5">CAI Points Reinstate/Adjustment<button type="button" class="border-0 bg-transparent" x-show="o" @click="e=true, o=false">                                                           
                                            <i class="bx bx-pencil "></i>
                                        </button>
                                    </p>
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive pt-3">
                                                <table class="table tours-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Use Year</th>
                                                            <th class="text-white">Entitlement (WD)</th>
                                                            <th class="text-white">Entitlement (WE)</th>
                                                            <th class="text-white">Proposed Expiry Date</th>
                                                            
                                                        </tr>
                                                    </thead>
                                            @if(isset($payload))
                                                @foreach($payload['pointadj1'] as $pt1) 
                                                    <tbody>
                                           
                                                        <tr>

                                                            <td>{{$pt1->poe_year}}</td>
                                                            <td>{{$pt1->wd}}</td>
                                                            <td>{{$pt1->we}}</td>
                                                            <td>{{$pt1->expiry_date}}</td>
                                                            
                                                        </tr>
                                                @endforeach
                                            @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                    <p class="h6 swvb-blue ml-2 font-weight-bold my-auto pb-2">EVC POE Reinstate<i class="bx bx-pencil"></i></p>
                                </div>

                            <div class="row">
                               
                                <div class="col">
                                    <div class="table-responsive pt-3">
                                        <table class="table">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">POE</th>
                                                    <th class="text-white">Entitlement (WE)</th>
                                                    <th class="text-white">Entitlement (WD)</th>
                                                    <th class="text-white">Proposed Expiry Date</th>
                                                </tr>
                                            </thead>
                                            @if(isset($payload))
                                                @foreach($payload['pointadj2'] as $pt2) 
                                            <tbody>
                                           
                                                        <tr>

                                                            <td>{{$pt2->poe_year}}</td>
                                                            <td>{{$pt2->we}}</td>
                                                            <td>{{$pt2->wd}}</td>
                                                            <td>{{$pt2->expiry_date}}</td>
                                                            
                                                        </tr>
                                                @endforeach
                                            @endif
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="row pt-1 ml-3">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Points Expiry Date Extention<i class="bx bx-pencil"></i></p>
                                </div>
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Add Bonus Entitlement<i class="bx bx-pencil"></i></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table tours-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Use Year</th>
                                                            
                                                            <th class="text-white">Proposed Expiry Date</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['pointadj3'] as $pt3) 
                                                        <tr>

                                                            <td>{{$pt3->poe_year}}</td>
                                                            
                                                            <td>{{$pt3->expiry_date}}</td>
                                                            
                                                        </tr>
                                                @endforeach
                                            @endif
                                               
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table ">
                                                        <thead class="bg-swvb-dark">
                                                            <tr>
                                                                <th class="text-white">POE</th>
                                                                <th class="text-white">Entitlement (WE)</th>
                                                                <th class="text-white">Entitlement (WD)</th>
                                                                <th class="text-white">Proposed Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['pointadj4'] as $pt4) 
                                                        <tr>

                                                            <td>{{$pt4->poe_year}}</td>
                                                            <td>{{$pt4->we}}</td>
                                                            <td>{{$pt4->wd}}</td>
                                                            <td>{{$pt4->expiry_date}}</td>
                                                            
                                                        </tr>
                                                @endforeach
                                            @endif
                                                          
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        
                            <div class="row pt-1 ml-3">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Add Member Loyatly Reward<i class="bx bx-pencil"></i></p>
                                </div>
                                
                            </div>
                            <div class="row ml-3">
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table leads-all">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Membership No.</th>
                                                            <th class="text-white">Entitlement (WD)</th>
                                                            <th class="text-white">Entitlement (WE)</th>
                                                            <th class="text-white">Proposed Expiry Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                            @if(isset($payload))
                                                @foreach($payload['pointadj5'] as $pt5) 
                                                        <tr>
                                                            <td>{{$pt5->mbrship_no}}</td>
                                                            <td>{{$pt5->wd}}</td>
                                                            <td>{{$pt5->we}}</td>
                                                            <td>{{$pt5->expiry_date}}</td>
                                                            
                                                        </tr>
                                                @endforeach
                                            @endif
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
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
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection

