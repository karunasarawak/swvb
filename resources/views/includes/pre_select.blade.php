@php
    if(empty($label2)){
        $label2=strtolower($label);
    }
@endphp
<div class="col-sm-6 @if(!empty($divclass)) {{$divclass}} @endif">
    <div class="form-group">
        <div class="controls">
            <label for="{{$field}}">{{$label}}</label>
            <select 
                @if(!empty($attr)) <?php echo $attr; ?> @endif
                @if(!empty($field)) name="{{$field}}" @endif
                class="custom-select form-control @if(!empty($class)) {{$class}} @endif"  
                @if(empty($optional)) data-validation-required-message="Please select a {{$label2}}" required @endif
            >
                <option value="0">Please select the {{$label2}}</option>