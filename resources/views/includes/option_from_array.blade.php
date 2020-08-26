@foreach($array as $k=>$d)
    <option 
        value='{{$k}}' 
        @if(!empty($data) && $data==$k) selected="selected" @endif
        @if(!empty($class))
            @php
                $clas='';
                $cls=explode(',',$class);
                foreach($cls as $c){
                    $clas.=$c.' '.$c.$d->$c.' ';
                }
            @endphp
        @endif
        >{{$d}}</option>
@endforeach