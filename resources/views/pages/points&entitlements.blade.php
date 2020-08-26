@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Points & Entitlement History')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">

@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section id="nav-filled">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Points & Entitlement History</h4>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">

                        <ul class="nav nav-tabs pt-3" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab"
                                aria-controls="home-fill" aria-selected="true">
                                All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab"
                                aria-controls="profile-fill" aria-selected="false">
                                Approval
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                <div class="table-responsive">
                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
        
                                                <th class="text-white">Membership No.</th>
                                                <th class="text-white">Name</th>
                                                <th class="text-white expanded">Last Allocated date</th>
                                                
                                                <th class="text-white">Last Allocated Point/Ent.</th>
                                                <th class="text-white">Last Allocated Point/Ent. Balance</th>
                                                <th class="text-white">Total Point/Ent.</th>
                                            </tr>
                                        </thead>    
                                    
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                <div class="table-responsive">
                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    
                                                    <th class="text-white">Tour ID</th>
                                                    <th class="text-white">Lead ID</th>
                                                    <th class="text-white expanded">Attendees</th>
                                                    
                                                    <th class="text-white">Date</th>
                                                    <th class="text-white">Scheduled Time</th>
                                                    
                                                    
                                                    
                                                    <th class="text-white">Telemarketer</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white" colspan="2">Action</th>
                                                </tr>
                                            </thead>    
                                        
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function tokenModal($id, $date, $time, $venue)
    {
        document.getElementById("tourid").value = $id;
        document.getElementById("date").value = $date; 
        document.getElementById("time").value = $time;
        document.getElementById("venue").value = $venue;
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
