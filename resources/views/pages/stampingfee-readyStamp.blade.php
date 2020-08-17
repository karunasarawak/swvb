@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ready to Stamp')

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
                    <div class="card-title">
                        <div class="row">
                            <h4 class="text white col">Ready to Stamp Listing</h4>
                            <div></div>
                        </div>
                    </div>
                </div>

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <form action="{{ route('stamp.create') }}" method="POST">
                                @csrf
                                <table class="table" style="width:100%;">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th>
                                                <fieldset>
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="checkbox-input" id="pri_check" name="pri_check" onclick="checkAll()">
                                                        <label for="pri_check">Select All</label>
                                                    </div>
                                                </fieldset>
                                            </th>
                                            <th class="text-white">Membership No.</th>
                                            <th class="text-white">Primary Member</th>
                                            <th class="text-white">Secondary Member</th>
                                            <th class="text-white">Expiry Date</th>
                                        <th class="text-white">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($payload['readyStamp'] as $readyStamp)
                                            <tr>
                                                <td>
                                                    <fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" name="check{{ $loop->iteration }}" value="{{ $readyStamp->mbrship_no }}" id="checkbox{{ $loop->iteration }}" >
                                                            <label for="checkbox{{ $loop->iteration }}"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td>{{ $readyStamp->mbrship_no }}</td>
                                                <td>{{ $readyStamp->name1 }}</td>
                                                <td>{{ $readyStamp->name2 }}</td>
                                                <td>{{ $readyStamp->mbrship_exp }}</td>

                                                @if($readyStamp->mbrship_status == 2)
                                                    <td>Activate</td>
                                                @else
                                                    <td style="color:red;">Error</td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                </div>
                                    <button style="margin-right:2.5%;" type="submit" class=" btn btn-primary float-right" id="btn_add1">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>div>
                </div>
            </div>
        </div>
    </div>
</script>

<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
<script>
     function checkAll()
    {
        checkboxes = document.getElementsByClassName("checkbox-input");
        pri_check = document.getElementById("pri_check");

        if(pri_check.checked  == true)
        {
            for(var i = 0; i < checkboxes.length; i++)
            {
                checkboxes[i].checked = true;
            }
        }
        else if (pri_check.checked == false)
        {
            for(var i = 0; i < checkboxes.length; i++)
            {
                checkboxes[i].checked = false;
            }
        }  
    }
</script>
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
