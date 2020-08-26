@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@foreach($payload['accommodations'] as $a)
  @php
    $accom[$a->accom_id]=$a;
  @endphp
@endforeach

@section('content')
<!-- Form wizard with icon tabs section start -->

<section id="form-repeater-wrapper">
  <!-- form default repeater -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">
                        RRCI - New Batch
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form repeater-default" action="{{url('/extmembership/rcibb/new')}}" method="POST">
                            @csrf
                            @method('patch')
                            <div data-repeater-list="room">
                               
                                <div data-repeater-item  class="room">
                                    <!--
                                    <div class="row pt-2">
                                        <div class="col-sm-12">
                                            <h5>Room 1</h5>
                                        </div>
                                    </div>
                                    -->
                                    <div class="row pt-2">
                                        @include('includes.pre_select',['array'=>$payload,'field'=>'','attr'=>'onchange="ta($(this));"','label'=>'Travel Agent','class'=>'ta_id'])
                                            @include('includes.option_from_data',['array'=>$payload['travel_agents'],'key'=>'ta_id','value'=>'ta_name'])
                                        @include('includes.post_select')
                                        
                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"accom_id",'attr'=>'onchange="accom($(this));"','label'=>'Hotel','class'=>'accom_id','divclass'=>' accomid'])
                                            @include('includes.option_from_data',['array'=>$payload['accommodations'],'key'=>'accom_id','value'=>'accom_name','class'=>'ta_id'])
                                        @include('includes.post_select')
                                        <div class="col-sm-6 " >
                                            <div class="form-group controls">
                                                <div class="custom-control-inline">
                                                    <div class="radio mr-1 pt-2 inven">
                                                        <input type="radio" value="1" id="inyes" name="inventory" class="inventory inyes" >
                                                        <label for="inyes">Inventory</label>
                                                    </div>
                                                    <div class="radio pt-2">
                                                        <input type="radio" value="2" id="inno"  name="inventory"  class="inventory inno" >
                                                        <label for="inno">Direct</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"inventory_id",'label'=>'Room No.','optional'=>1,'class'=>'room_no','divclass'=>'roomno'])
                                        @include('includes.post_select')
                                        
                                        <input type="hidden" name="room_no" class="room_num">

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"unit_type_id",'label'=>'Room Type','class'=>'unit_type','divclass'=>'unittypes'])
                                        @include('includes.post_select')

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"bed_type_id",'label'=>'Bed Type','class'=>'bed_type','divclass'=>'bedtype'])
                                        @include('includes.post_select')
                                       
                                        @include('includes.input',['array'=>$payload, 'field'=>"check_in",'label'=>'Check In','class'=>'ci','attr'=>'type="date" onchange="ci($(this));"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"check_out",'label'=>'Check Out','class'=>'co','attr'=>'type="date"'])
                                       
                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"week_no",'label'=>'Week','class'=>'weekno'])                                      
                                            @foreach(range(1,53) as $w)
                                                <option value="{{$w}}">{{$w}}</option>
                                            @endforeach
                                        @include('includes.post_select')

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"unit_size",'label'=>'Unit Size'])
                                            <option value="UT">UT</option>
                                            <option value="HU">HU</option>
                                        @include('includes.post_select')

                                                                      

                                        <!--
                                        <div class="col-sm-6" >
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>Ruh Ref No.</label>
                                                    <input type="textarea" name="ruh_ref_no" class="form-control" data-validation-required-message="Please enter the Ruh Ref No." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6" >
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label>II Dep. Ref No.</label>
                                                    <input type="textarea" name="ii_dep_ref_no" class="form-control" data-validation-required-message="Please enter the II Dep. Ref No." required>
                                                </div>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                    <div class="row pt-2">
                                        @include('includes.input',['array'=>$payload, 'field'=>"serial_no",'label'=>'Serial No.','label2'=>'Serial No.','attr'=>'type="number"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"resort_id",'label'=>'Resort ID','label2'=>'Resort ID','attr'=>'type="number"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"max",'label'=>'Max. Occupancy','attr'=>'type="number"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"privacy",'label'=>'Max. Privacy','attr'=>'type="number"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"deposit_date",'attr'=>'type="date"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"deposit_no",'attr'=>'type="text"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"travel_destination",'attr'=>'type="text"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"travel_date",'attr'=>'type="date"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"ict_ref_no",'label'=>'ICT Ref No','label2'=>'ICT Ref No','attr'=>'type="text"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"nexoft_ref",'label2'=>'Nexoft Ref','attr'=>'type="text"'])     

                                        @include('includes.input',['array'=>$payload, 'field'=>"internal_remark",'label'=>'Internal Remark','attr'=>'type="textarea"']) 
                                    </div>
                                    <!--        
                                    <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                        <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                            class="bx bx-x"></i>
                                            Delete
                                        </button>
                                    </div>
                                    -->
                                </div>
                                <hr>
                                
                            </div>
                            <!--
                            <div class="form-group">
                                <div class="col p-0">
                                <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                    Add
                                </button>
                                </div>
                            </div>
                            -->
                            <input type="hidden" id="status" name="status">

                            <div class="row">
                                <div class="col">
                                    <div class="float-right">
                                        <button class="btn btn-primary mr-1" onclick="$('#status').val('1');$('.form').submit();">Save for approval</button>
                                        <button class="btn btn-primary"  onclick="$('#status').val('0');$('.form').submit();">Save as draft</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!--/ form default repeater -->
</section>

<!-- Form wizard with step validation section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/forms/form-repeater.js')}}"></script>
<script>
var accd=roomd='';
var accs=JSON.parse('<?php echo json_encode($accom);?>' );
function ta(t){
    var room=t.closest('.room');
    var val=t.val();
    room.find('option.ta_id').hide();
    room.find('option.ta_id'+val).show(); 
    if(!room.find('option.ta_id:selected').hasClass('ta_id'+val)){
        room.find('.accom').val('').change();
    }
}

function accom(t){
    var room=t.closest('.room');
    var val=t.val();
    accd=accs[val];
    room.find('option.accom_id').hide();
    room.find('option.accom_id'+val).show(); 
    
    if(!room.find('option.accom_id:selected').hasClass('accom_id'+val)){
        room.find('option.accom_id:selected').parent().val('0').change();
     }
     
    $.get({
        url: "{{url('/getroom')}}/"+ val,
        cache: false,
    })
    .done(function( html ) {
        var d=JSON.parse(html);
        room.find('.room_no').html(d['inventories']);
        room.find('.unit_type').html(d['unit_types']);
        room.find('.bed_type').html(d['bed_types']);
        room.find('.room_no').val('');
        $('.inventory').click(function(){
            var room=$(this).closest('.room');
            if(room.find('.inyes').prop('checked')){
                room.find('.roomno').show();
            }else{
                room.find('.roomno').hide();
                room.find('.room_no').val('');
                room_no(room.find('.room_no'));
            }
        });
        $('.room_no').change(function(){
            room_no($(this));
        });
        $('.unit_type').change(function(){
           unittype($(this));
        });
    });
  }

  function room_no(t){
    var room=t.closest('.room');
    var val=t.val();
    if(val && val>0){
        room.find('.inv').hide();
        room.find('.inv'+val).show();
        room.find('.unit_type').val( room.find('.inv'+val).first().val());
        room.find('.room_num').val(t.find('option:selected').html());
    }else{
        room.find('.inv').show();
        room.find('.room_num').val('');
    }
    
    unittype(room.find('.unit_type'));
  }

  function unittype(t){
    var val=t.val();
    var room=t.closest('.room');
    if(val && val>0){
        room.find('.unittype').hide();
        room.find('.unittype'+val).show();
        room.find('.bed_type').val( room.find('.unittype'+val).first().val());
    }else{
        room.find('.unittype').show();
    }
    
  }

  function ci(t){
    var val=t.val();
    var dt=new  Date(val);
    var room=t.closest('.room');
    var date = new Date();

    var res = date.setDate(dt.getDate() + 6);
    var d=date.getDate();
    var m=dt.getMonth()+1;
    if(d<dt.getDate()){
        m+=1;
    }
    var y=date.getFullYear();
    if(m>12){
        y+=1;
        m-=12;
    }
    if(m<10){
        var m='0'+m;
    }
    if(d<10){
        var d='0'+d;
    }

    
    var da=y+'-'+m+'-'+d;
    room.find('.co').val(da);
    
    d = new Date(Date.UTC(dt.getFullYear(), dt.getMonth(), dt.getDate()));
    // Set to nearest Thursday: current date + 4 - current day number
    // Make Sunday's day number 7
    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay()||7));
    // Get first day of year
    var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
    // Calculate full weeks to nearest Thursday
    var weekNo = Math.ceil(( ( (d - yearStart) / 86400000) + 1)/7);

    room.find('.weekno').val(weekNo);
  }
</script>
@endsection
