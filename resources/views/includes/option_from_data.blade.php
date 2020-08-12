@foreach($array as $d)
    <option 
        value='{{$d->$key}}' 
        @if(!empty($data) && $data==$d->$key) selected="selected" @endif
        @if(!empty($class))
            @php
                $clas='';
                $cls=explode(',',$class);
                foreach($cls as $c){
                    $clas.=$c.' '.$c.$d->$c.' ';
                }
            @endphp
            class='{{$clas}}'
        @endif
    >
        {{$d->$value}}
    </option>
@endforeach