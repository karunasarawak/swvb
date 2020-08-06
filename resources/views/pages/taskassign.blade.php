@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Task Assignment')

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
                        <form action="{{ url("/taskassign")}}" method="POST" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <input type='file' name='file' >
                            <input type='submit' name='submit' value='Import'>
                            {{-- <button class="col-sm-2 btn btn-outline-white round mr-1 mb-1 ml-1 text-white">Assign Task</button> --}}
                        </form>
                        
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="custom-file col-sm-2">      
                            
                        </div>
                        <div class="table-responsive-xl">
                            <table class="table tours-all" style="width:100%;">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Membership No.</th>
                                        <th class="text-white">Membership Name</th>
                                        <th class="text-white">CCO</th>
                                        <th class="text-white">MRO</th>
                                        <th class="text-white">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($taskassign != null)
                                        @foreach($taskassign as $task)
                                            <tr>
                                                <td>{{ $task->mbrship_no }}</td>
                                                <td>{{ $task->name }}</td>
                                                <td>{{ $task->CCO }}</td>
                                                <td>{{ $task->MRO }}</td>

                                                @if($task->mbrship_status == 0)
                                                    <?php $status = "Pending"; ?>
                                                @elseif($task->mbrship_status == 1)
                                                    <?php $status = "Be Back"; ?>
                                                @elseif($task->mbrship_status == 2)
                                                    <?php $status = "Activate"; ?>
                                                @elseif($task->mbrship_status == 3)
                                                    <?php $status = "Suspend"; ?>
                                                @elseif($task->mbrship_status == 4)
                                                    <?php $status = "Terminated"; ?>
                                                @elseif($task->mbrship_status == 5)
                                                    <?php $status = "Repurchase"; ?>
                                                @elseif($task->mbrship_status == 6)
                                                    <?php $status = "Deceased"; ?>
                                                @endif

                                                <td><?php echo $status; ?></td>
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
