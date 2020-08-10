@foreach($array as $k=>$d)
    <option value='{{$k}}' @if(!empty($data) && $data==$k) selected="selected" @endif>{{$d}}</option>
@endforeach