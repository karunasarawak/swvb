@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Users & Roles')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Approvals</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white" style="width:50%"></th>
                                        <th class="text-white">Check</th>
                                        <th class="text-white">Check 2</th>
                                        <th class="text-white">Verify</th>
                                        <th class="text-white">Verify 2</th>
                                        <th class="text-white">Approval</th>
                                        <th class="text-white">Approval 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                            
                            @if(isset($payload))
                                @foreach($payload['row'] as $r)    
                                    <tr>
                                        <td>{{$r}}</td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$r}}" id="{{$r}}1">
                                                <label class="custom-control-label" for="{{$r}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$r}}" id="{{$r}}1">
                                                <label class="custom-control-label" for="{{$r}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$r}}" id="{{$r}}1">
                                                <label class="custom-control-label" for="{{$r}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$r}}" id="{{$r}}1">
                                                <label class="custom-control-label" for="{{$r}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$r}}" id="{{$r}}1">
                                                <label class="custom-control-label" for="{{$r}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$r}}" id="{{$r}}1">
                                                <label class="custom-control-label" for="{{$r}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
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
</section>





<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
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

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
