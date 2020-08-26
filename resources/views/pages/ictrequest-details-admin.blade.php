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
    <div class="row" x-data="{ e: false, o: true }">
        <div class="col-md-12">
            <div class="card">
                <!-- must use form and route method to submit data -->
                <form action="{{route('pt.update', $payload['ict']->pict_req_id)}}" class="m-2" method="POST" >
                    @csrf
                    <!-- enctype='multipart/form-data' -->
                    @method('patch')
                        <div class="card-header bg-swvb-cyan">
                            <div class="row">
                                <div class="card-title">
                                    <h4 class="col text-white ml-2">Points/Entitlement Adjustment Details

                                    @if ($payload['ict']->pict_req_status == 0)    
                                    <button type="button" class="btn btn-outline-white round ml-2" x-show="o" @click="e = true, o = false">Edit</button>
                                    <div class="float-right" x-show="e" x-cloak>
                                        <button type="submit" class="btn btn-outline-white round mr-1">Save</button>
                                        <button type="button" class="btn btn-outline-white round" @click="e = false, o = true">Close</button>
                                    </div>
                                    </h4>
                                    @endif  
                                </div>
                            </div>
                        
                        </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="row pt-3">
                                <div class="col ml-3">
                                    <div class="row">
                                        <p class="col">Membership No.</p>
                                        <p class="col font-weight-bold black">{{$payload['ict']->membership['mbrship_no']}}</p>
                                        
                                    </div>
                                
                                    <div class="row">
                                        <p class="col">Member Name</p>
                                        <p class="col font-weight-bold black" >{{$payload['ict']->membership->lead['name']}}</p>
                                        
                                    </div>
                                    <div class="row">
                                        <p class="col">Reservation No.</p>
                                        <p class="col font-weight-bold black" >{{$payload['ict']->membership->reservation['rsvn_no']}}</p>
                                       
                                    </div>
                                </div>
                                
                               
                            </div>

                    
                       
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pl-3">CAI Points Reinstate/Adjustment
                                    </p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive pt-3">
                                                <table class="table table-bordered">
                                                    <thead class="bg-swvb-dark">
                                                        <tr>
                                                            <th class="text-white">Use Year</th>
                                                            <th class="text-white">Points</th>
                                                            
                                                            <th class="text-white">Proposed Expiry Date</th>
                                                            
                                                        </tr>
                                                    </thead>
                                            @if(isset($payload))
                                                @foreach($payload['pointadj1'] as $pt1)
                                                    @if($pt1->points != "") 
                                                    <tbody>
                                           
                                                        <tr>

                                                            <td><p x-show="o">{{$pt1->poe_year}}</p><p x-cloak x-show="e"><input  type="number" name="poe_year1" class="form-control" value="{{$pt1->poe_year}}" ></p></td>
                                                            <td><p x-show="o">{{$pt1->points}}</p><p x-cloak x-show="e"><input  type="number" name="points1" class="form-control" value="{{$pt1->points}}" ></p></td>
                                                            
                                                            <td><p x-show="o">{{$pt1->expiry_date}}</p><p x-cloak x-show="e"><input  type="date1" name="expiry_date1" class="form-control" value="{{$pt1->expiry_date}}" ></p></td>
                                                            
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                   

                        @if(isset($payload['pointadj2']))
                            <div class="col">
                                    <p class="h6 swvb-blue ml-2 font-weight-bold my-auto">EVC POE Reinstate</p>
                                </div>

                            <div class="row">
                               
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive pt-3">
                                                <table class="table table-bordered">
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
                                                            @if($pt2->we != "")
                                                    <tbody>
                                                
                                                                <tr>

                                                                    <td><p x-show="o">{{$pt2->poe_year}}</p><p x-cloak x-show="e"><input type="number" name="poe_year2" class="form-control" value="{{$pt2->poe_year}}" ></p></td>
                                                                    <td><p x-show="o">{{$pt2->we}}</p><p x-cloak x-show="e"><input type="number" name="we2" class="form-control" value="{{$pt2->we}}" ></p></td>
                                                                    <td><p x-show="o">{{$pt2->wd}}</p><p x-cloak x-show="e"><input type="number" name="wd2" class="form-control" value="{{$pt2->wd}}" ></p></td>
                                                                    <td><p x-show="o">{{$pt2->expiry_date}}</p><p x-cloak x-show="e"><input type="date2" name="expiry_date" class="form-control" value="{{$pt2->expiry_date}}" ></p></td>
                                                                    
                                                                </tr>
                                                            @else

                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                        @endif

                            <div class="row pt-1 ml-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Points Expiry Date Extention</p>
                                </div>
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">EVC Add Bonus Entitlement</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
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

                                                            <td><p x-show="o">{{$pt3->poe_year}}</p><p x-cloak x-show="e"><input type="number" name="poe_year3" class="form-control" value="{{$pt3->poe_year}}" ></p></td>
                                                            
                                                            <td><p x-show="o">{{$pt3->expiry_date}}</p><p x-cloak x-show="e"><input type="date" name="expiry_date3" class="form-control" value="{{$pt3->expiry_date}}" ></p></td>
                                                            
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
                                                    <table class="table table-bordered">
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

                                                            <td><p x-show="o">{{$pt4->poe_year}}</p><p x-cloak x-show="e"><input type="number" name="poe_year4" class="form-control" value="{{$pt4->poe_year}}" ></p></td>
                                                            <td><p x-show="o">{{$pt4->we}}</p><p x-cloak x-show="e"><input type="number" name="we4" class="form-control" value="{{$pt4->we}}" ></p></td>
                                                            <td><p x-show="o">{{$pt4->wd}}</p><p x-cloak x-show="e"><input type="number" name="wd4" class="form-control" value="{{$pt4->wd}}" ></p></td>
                                                            <td><p x-show="o">{{$pt4->expiry_date}}</p><p x-cloak x-show="e"><input type="date" name="expiry_date4" class="form-control" value="{{$pt4->expiry_date}}" ></p></td>
                                                            
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

                           
                        
                            <div class="row pt-1 ml-1 pb-2">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto">EVC Add Member Loyatly Reward</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
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
                                                            <td>{{$pt5->mbrship_no}}
                                                            
                                                            </td>
                                                            <td><p x-show="o">{{$pt5->wd}}</p><p x-cloak x-show="e"><input type="number" name="wd5" class="form-control" value="{{$pt5->wd}}" ></p></td>
                                                            <td><p x-show="o">{{$pt5->we}}</p><p x-cloak x-show="e"><input type="number" name="we5" class="form-control" value="{{$pt5->we}}" ></p></td>
                                                            <td><p x-show="o">{{$pt5->expiry_date}}</p><p x-cloak x-show="e"><input type="date" name="expiry_date5" class="form-control" value="{{$pt5->expiry_date}}" ></p></td>
                                                            
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
                            <div class="row">
                                <section id="form-repeater-wrapper">
                                    <!-- form default repeater -->
                                      
                                    <!--/ form default repeater -->
                                     <div class="row">
                                        <div class="col">
                                          <div class="card">
                                            <div class="card-header">
                                              <h4 class="card-title">
                                                Attachments
                                              </h4>
                                            </div>
                                            <div class="card-content">
                                              <div class="card-body">
                                                <div class="form repeater-default">
                                                    <div data-repeater-list="group-a">
                                                        <div data-repeater-item>
                                                            <div class="row justify-content-between">
                                                                
                                                                    <input type='file' name='file'>
                                                               
                                                                <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                                    <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                                                        class="bx bx-x"></i>
                                                                      Delete
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col p-0">
                                                        <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                                            Add Attachments
                                                        </button>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                     </div>
                                  </section>
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
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection

