@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Contacts')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}">
@endsection
{{-- page-styles --}}

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/file-uploaders/dropzone.css')}}">
@endsection

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">All Contacts</h4>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Salutations</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Gender</th>
                                        <th class="text-white">Home No.</th>
                                        <th class="text-white">Office No.</th>
                                        <th class="text-white col-4">Whatsapp</th>
                                        <th class="text-white">Primary Email</th>
                                        <th class="text-white">Alternate Email</th>
                                    </tr>
                                </thead>

                                @if(isset($payload))
                                        @foreach($payload['leads'] as $contacts)    
                                <tbody>

                              
                                                                                <!-- coz many display list -->
                                                                        <!--  pass lead id to controller to choose   main table ->  link to other table  -> database column name-->
                                        <tr class="row-link" onclick="location.href='{{route('contact.details', $contacts->lead_id)}}'">
                                            
                                            <td>{{$contacts->salutation['salutation']}}</td>
                                            <td>{{$contacts -> name}}</td>
                                            <td>{{$contacts -> genders['gender_name']}}</td>
                                            <td>{{$contacts -> home_no}}</td>
                                            <td>{{$contacts -> office_no}}</td>
                                            <td>{{$contacts -> whatsapp_no}}</td>
                                            <td>{{$contacts -> primary_email}}</td>
                                            <td>{{$contacts -> alt_email}}</td>
                                        </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>
{{-- <script src="{{asset('assets/js/uploads.js')}}"></script> --}}
@endsection

        
        