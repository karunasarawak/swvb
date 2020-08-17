@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Event Logs')

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
                            <a href="" class="btn btn-outline-white text-white round mb-1 ml-1" data-toggle="modal" data-target="#inlineForm">New</a>                            
                            <div class="col-md-4">
                                <fieldset class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                        <div class="px-2 pt-1">
                        <button type="button" class="btn btn-primary"><a href="{{ url('/acceventlogs') }}" class="text-white">Account Event Logs</a></button>(This button is for demostration purpose only, account has different format)
                        </div>
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table tours-all">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-white">ID</th>
                                        <th class="text-white">Membership</th>
                                        <th class="text-white">Name</th>
                                        <th class="text-white">Type</th>
                                        <th class="text-white">Category</th>
                                        <th class="text-white">Title</th>
                                        <th class="text-white">Date Created</th>
                                        <th class="text-white">Created By</th>
                                        <th class="text-white">Last Called Date</th>
                                        <th class="text-white">Latest Called By</th>
                                        <th class="text-white">Next Call Date</th>
                                    </tr>
                                    <tbody>
                                        <tr class="row-link" onclick="location.href='{{ url('/eventlogs/details') }}'">
                                            <td>EL00001</td>
                                            <td>2001230000</td>
                                            <td>Chris</td>
                                            <td>Complaint</td>
                                            <td>RSVN</td>
                                            <td>ABC</td>
                                            <td>01.11.2020</td>
                                            <td>James</td>
                                            <td>05.11.2020</td>
                                            <td>Chris</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ url('/eventlogs/details') }}">EL00001</a></td>
                                            <td>2001230000</td>
                                            <td>Chris</td>
                                            <td>Complaint</td>
                                            <td>RSVN</td>
                                            <td>ABC</td>
                                            <td>01.11.2020</td>
                                            <td>James</td>
                                            <td>05.11.2020</td>
                                            <td>Chris</td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{ url('/eventlogs/details') }}">EL00001</a></td>
                                            <td>2001230000</td>
                                            <td>Chris</td>
                                            <td>Complaint</td>
                                            <td>RSVN</td>
                                            <td>ABC</td>
                                            <td>01.11.2020</td>
                                            <td>James</td>
                                            <td>05.11.2020</td>
                                            <td>Chris</td>
                                        </tr>
                                    </tbody>
                                </thead>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">EVENT LOG</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
            </div>
            <form action="#">
                
                <div class="modal-body">
                    <div class="row">   
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Membership</label>
                                <input type="text" name="nric" class="form-control" placeholder="880123137586" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Type</label>
                                <select name="type" class="custom-select" required>
                                    <option disabled selected>Select a type</option>
                                    <option value="complaint">Complaint</option>
                                    <option value="conservation">Conservation</option>
                                </select>     
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Category</label>
                                <select name="type" class="custom-select" required>
                                    <option disabled selected>Select a category</option>
                                    <option value="complaint">RSVN</option>
                                    <option value="conservation">Conservation</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label> Location</label>
                                <select name="type" class="custom-select" required>
                                    <option disabled selected>Select a location</option>
                                    <option value="complaint">Kuching</option>
                                    <option value="conservation">Conservation</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Assigned to</label>
                                <select name="type" class="custom-select" required>
                                    <option disabled selected>Select a people assigned to</option>
                                    <option value="complaint">CC01</option>
                                    <option value="conservation">Conservation</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Add Department</label>
                                <select name="type" class="custom-select" required>
                                    <option disabled selected>Select a department</option>
                                    <option value="complaint">CC01</option>
                                    <option value="conservation">Conservation</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Communication Channel</label>
                                <select name="type" class="custom-select" required>
                                    <option disabled selected>Select a communication channel</option>
                                    <option value="complaint">Fax</option>
                                    <option value="conservation">Conservation</option>
                                </select> 
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group controls">
                                <label>Title</label>
                                <input type="text" name="nric" class="form-control" placeholder="880123137586" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group controls">
                                <label>Description</label>
                                <fieldset class="invoice-address form-group">
                                    <textarea class="form-control" rows="4" placeholder="John Doe"></textarea>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Cancel</span>
                        </button>
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Save</span>
                        </button>
                
                    </div>
            </form>
        </div>
    </div>
</div>

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
@endsection
