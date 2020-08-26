@php
    $fields=explode('[',$field);
    $data='';
    $dataa=array();
    
    if(!empty($array['data'])){
        $dataa=$array['data'];
    }
    foreach($fields as $fn){
        $fn=str_replace(']','',$fn);
        if(!empty($dataa[$fn])){
            $dataa=$dataa[$fn];
            $data=$dataa;
        }
    }
    if(!empty($dataa->$fn)){
        $data=$dataa->$fn;
    }
    if(empty($label)){
        $label=Str::title(str_replace(array('_'),' ',$fn));
    }
    if(empty($label2)){
        $label2=strtolower($label);
    }
@endphp
<div class="col-sm-6 @if(!empty($divclass)) {{$divclass}} @endif">
    <div class="form-group">
        <div class="controls">
            <label for="{{$field}}">{{$label}}</label>
            <input 
                @if(!empty($attr)) <?php echo $attr; ?> @endif
                @if(!empty($field)) name="{{$field}}" @endif
                @if(!empty($data)) value="{{$data}}" @endif
                class="form-control @if(!empty($class)) {{$class}} @endif"  
                @if(empty($optional)) data-validation-required-message="Please select a {{$label2}}" required @endif
           >
        </div>
    </div>
</div>