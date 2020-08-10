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
                        <h4 class="card-title text-white ml-2">Role Details</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="row pt-1 pl-2" >
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Role</p>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>Role</li>
                                    <li>Abbreviation</li>
                                    <li>Status</li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
    <div class="row" id="custom-checkbox-colored">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Basic Permissions</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Module</th>
                                        <th class="text-white">EA</th>
                                        <th class="text-white">C</th>
                                        <th class="text-white">V</th>
                                        <th class="text-white">E</th>
                                        <th class="text-white">N/A</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                            @if(isset($payload))
                                @foreach($payload['module'] as $l)        
                                <tr>
                                    <td>{{$l}}</td>
                                  
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$l}}_ea" id="{{$l}}1">
                                                <label class="custom-control-label" for="{{$l}}1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$l}}_c" id="{{$l}}2">
                                                <label class="custom-control-label" for="{{$l}}2"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$l}}_v" id="{{$l}}3">
                                                <label class="custom-control-label" for="{{$l}}3"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary checkbox"  name="{{$l}}_e" id="{{$l}}4">
                                                <label class="custom-control-label" for="{{$l}}4"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary "  name="{{$l}}_na" id="{{$l}}5">
                                                <label class="custom-control-label" for="{{$l}}5"></label>
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

<script type="text/javascript">
    $(document).ready(function(){
    
        $("#{{$l}}1").change(function(){
            var checked = $(this).is(':checked');
            if (checked){
                $(".checkbox").each(function(){
                    $(this).prop("checked", true);
                });
            }else {
                $(".checkbox").each(function(){
                    $(this).prop("checked", false);
                });
            }
        });

    
    
        $(".checkbox").click(function(){

            if($(".checkbox").length == $(".checkbox:checked").length){
                $("#{{$l}}1").prop("checked", true);
            }else {
                $("#{{$l}}1").removeAttr("checked");
            }

        });

    });

    document.getElementById('#{{$l}}1').onclick = function(){
        alert(hi);
        var checkboxes = document.querySelectorAll('input[type="checkbox")');
        for (var checkbox of checkboxes){
            checkbox.checked = this.checked;
        }
    }

</script>
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
