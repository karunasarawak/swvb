@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation float-sm-left">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">RCI:BB - New Batch</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="" novalidate>
                            @csrf
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Batch #1</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Travel Agent</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Chris</option>
                                                <option value="2">John</option>

                                            </select>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Hotel</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Damai Beach Resort</option>
                                                <option value="2">Riverside Majestic Hotel</option>

                                            </select>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Iventory</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>

                                            </select>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Check In</label>
                                                <input type="date" class="form-control" value="14 July 2020" id="creditcard" name="name"
                                                data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Check Out</label>
                                                <input type="date" class="form-control" value="14 July 2020" id="creditcard" name="name"
                                                data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Room Type</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Chalet</option>
                                                <option value="2">John</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location"> Bed Type</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Chalet</option>
                                                <option value="2">John</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Reserve Using</label>
                                            <select name="package_id" id="packagetype" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Member</option>
                                                <option value="2">John</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Remark</label>
                                                <input type="text" class="form-control" placeholder="Remarks" id="creditcard" name="name"
                                                data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            
                           
                        </form>
                            <a href="{{url('/receipt/new')}}"><button type="button" class="btn btn-primary text-white m-1" id="btn_add1" >Submit</button></a>
                            {{-- @livewire('add-attendee-form') --}}
                            <button type="button" class="btn btn-outline-primary" id="attendeeButton" onclick="addAttendee()">Add Attendee</button>                               
                          
                            <div id="attendee2" class="d-none select2-advance">
                                <form class="form-horizontal" method="" action="" novalidate>
                            @csrf
                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Batch #1</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="location">Room No.</label>
                                                    <select name="package_id" id="packagetype" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="1">2345600</option>
                                                        <option value="2">John</option>

                                                    </select>
                                        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="location">Room Type</label>
                                                    <select name="package_id" id="packagetype" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="1">Chalet</option>
                                                        <option value="2">John</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="location"> Bed Type</label>
                                                    <select name="package_id" id="packagetype" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="1">Chalet</option>
                                                        <option value="2">John</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="location">Week</label>
                                                    <select name="package_id" id="packagetype" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="1">Chalet</option>
                                                        <option value="2">John</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Check In</label>
                                                        <input type="date" class="form-control hid" value="14 July 2020" id="creditcard" name="name"
                                                        data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Check Out</label>
                                                        <input type="link" class="form-control hid" value="20 July 2020" id="creditcard" name="name"
                                                        data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    
                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Batch #2</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="location">Room No.</label>
                                                    <select name="package_id" id="packagetype" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="1">MSCHQ</option>
                                                        <option value="2">John</option>

                                                    </select>           
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="col-sm-4" id="creditcard">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Room Type</label>
                                                    <select name="package_id" id="packagetype" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="1">Chalet</option>
                                                        <option value="2">John</option>

                                                    </select>    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Bed Type</label>
                                                    <select name="package_id" id="method" class="custom-select form-control hid" data-validation-required-message="Please select a package type" required>
                                                        <option value="internetbanking">Single</option>
                                                        <option value="creditc">Credit Card</option>
                                                        <option value="cheque">Cheque</option>
                                                    </select>     
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                <label>Week</label>
                                                    <select name="salutation1" class="custom-select hid" data-validation-required-message="Please select a salutation." required>
                                                        
                                                        <option value="Mr.">1</option>
                                                        <option value="Ms.">May Bank</option>
                                                        <option value="Dr.">Cimb Bank</option>
                                                        <option value="Dr.">Public Bank</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Check In</label>
                                                        <input type="link" class="form-control hid" value="20 July 2020" id="creditcard" name="name"
                                                        data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Check Out</label>
                                                        <input type="link" class="form-control hid" value="20 July 2020" id="creditcard" name="name"
                                                        data-validation-required-message="This Name field is required" data-toggle="modal" data-target="#inlineForm" required>
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </form>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Form wizard with step validation section end -->
@endsection
<script type="text/javascript">

    function showandhide(){
         var dp = document.getElementById("method").value  

         var getvalue = document.getElementById("creditc");

         if(dp == "credit card")
        {
            dp.show();
        }
        else
        {
            dp.hide();
        }
         
    }
</script>
{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
@endsection
