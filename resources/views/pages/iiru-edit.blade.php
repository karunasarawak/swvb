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
                        <form class="form room repeater-default" action="{{url('/extmembership/iiru/edit/'.$id)}}" method="POST">
                            @csrf
                            @method('patch')
                           
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
                                            @include('includes.option_from_data',['array'=>$payload['accommodations'],'key'=>'accom_id','value'=>'accom_name','class'=>'ta_id','data'=>$payload['data']['iiru']->reservation->accom_id])
                                        @include('includes.post_select')
                                        <div class="col-sm-6 " >
                                            <div class="form-group controls">
                                                <div class="custom-control-inline">
                                                    <div class="radio mr-1 pt-2 inven">
                                                        <input type="radio" value="1" id="inyes" name="inventory" class="inventory inyes" @if(!empty($payload['data']['room']['room_no'])) checked="checked" @endif >
                                                        <label for="inyes">Inventory</label>
                                                    </div>
                                                    <div class="radio pt-2">
                                                        <input type="radio" value="2" id="inno"  name="inventory"  class="inventory inno" >
                                                        <label for="inno">Direct</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"room[inventory_id]",'label'=>'Room No.','optional'=>1,'class'=>'room_no','divclass'=>'roomno'])
                                            @php echo implode('',$payload['inventories']); @endphp
                                        @include('includes.post_select')
                                        
                                        <input type="hidden" name="room[room_no]" class="room_num" value="{{$payload['data']['room']->room_no}}">

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"room[unit_type_id]",'label'=>'Room Type','class'=>'unit_type','divclass'=>'unittypes'])
                                        @php echo implode('',$payload['unit_types']); @endphp
                                        @include('includes.post_select')

                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"room[bed_type_id]",'label'=>'Bed Type','class'=>'bed_type','divclass'=>'bedtype'])
                                        @php echo implode('',$payload['bed_types']); @endphp
                                        @include('includes.post_select')
                                       
                                        @include('includes.input',['array'=>$payload, 'field'=>"reservation[check_in]",'label'=>'Check In','class'=>'ci','attr'=>'type="date" onchange="ci($(this));"'])

                                        @include('includes.input',['array'=>$payload, 'field'=>"reservation[check_out]",'label'=>'Check Out','class'=>'co','attr'=>'type="date"'])
                                       
                                        @include('includes.pre_select',['array'=>$payload, 'field'=>"week_no",'label'=>'Week','class'=>'weekno'])                                      
                                            @foreach(range(1,53) as $w)
                                                <option value="{{$w}}">{{$w}}</option>
                                            @endforeach
                                        @include('includes.post_select')

                                        @include('includes.input',['array'=>$payload, 'field'=>"iiru[exchange_no]",'label'=>'Confirmation No','attr'=>'type="text"'])
                                        @include('includes.input',['array'=>$payload, 'field'=>"room[room_remark]",'label'=>'Remark','attr'=>'type="text"'])

                                    
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
week($('.ci'));
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
    week(val);
   
  }

  function week(t){
    var val=t.val();
    var room=t.closest('.room');
    var dt=new  Date(val);
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
