@foreach($array as $d)
<?php print_r($d);?>
    <option value='{{$d->$key}}' @if(!empty($data) && $data==$d->$key) selected="selected" @endif>{{$d->$value}}</option>
@endforeach