@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Inventory')

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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Inventory</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row">
                          <div class="col-md-3">
                              <div class="px-2 py-2">
                                  <button class="btn btn-primary" data-toggle="modal" data-target="#seasons">Block Date</button>
                              </div>
                          </div>
                         
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                             
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #e40dcf; padding:4px;">&#9899;</span> 
                                  Block MEM</p>
                              
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #00d0dd; padding:4px;">&#9899;</span> 
                                  Block RCI BB</p>
                             
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #9007c9; padding:4px;">&#9899;</span> 
                                  Block RCI DS</p>
                             
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #c40001; padding:4px;">&#9899;</span> 
                                  Blocked</p>
                              
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #fea900; padding:4px;">&#9899;</span> 
                                  Block-II-DS</p>
                             
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #f8bdf3; padding:4px;">&#9899;</span> 
                                  BSM</p>

                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #a4a4be; padding:4px;">&#9899;</span> 
                                  Close MR</p>
                              
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #68dc9f; padding:4px;">&#9899;</span> 
                                  Lease Back</p>
                             
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #2d2d85; padding:4px;">&#9899;</span> 
                                  Online Booking</p>
                             
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #ffde0a; padding:4px;">&#9899;</span> 
                                  Reserved</p>
                              
                                  
                                  <p class="pr-1"><span style="color: transparent;text-shadow: 0 0 0 #333333; padding:4px;">&#9899;</span> 
                                  Unused</p>
                              
                            </div>
                            <div class="col-md-10 pl-1">
                              <div class="table-bordered table-responsive">
                                  <table class="table leads-archive" style="width:100%;">
                                      <thead class="bg-swvb-dark">
                                          <tr>
                                              <th class="text-white">Room</th>
                                              <th class="text-white expanded">Room No</th>
                                              <th class="text-white">21st May Thursday</th>
                                              <th class="text-white">22st May Friday</th>
                                              <th class="text-white">23st May Saturday</th>
                                              <th class="text-white">24st May Sunday</th>
                                              <th class="text-white">25st May Monday</th>
                                              <th class="text-white">26st May Tuesday</th>
                                              <th class="text-white">27st May Wednesday</th>
                                              <th class="text-white">28st May Thursday</th>
                                              <th class="text-white">29st May Friday</th>
                                              <th class="text-white">30st May Saturday</th>
                                              <th class="text-white">31st May Thursday</th>
                                              
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td colspan="13" class="text-left bg-primary text-white">Hotel - BPA</td>
                                              <td></td>
                                              <td</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-10-22</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-12-01</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-18-12</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-22-12</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-16-02</td>
                                              <td colspan="2" class="text-white text-left table-dark">RSVN No. 1234567</td>
                                              
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-07-17</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-07-01</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-08-11</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-06-12-A</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td colspan="13" class="text-left bg-primary text-white">Hotel: Riverside Majestic Hotel Puteri Wing</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-10-22</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-12-01</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                          <tr>
                                              <td>3 Bedroom Apartment</td>
                                              <td>77-18-12</td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
           
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade text-left" id="seasons" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Block</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>  
            <form action="#">
                <div class="modal-body">

                    <div class="form-group">
                        <div class="controls">
                            <label>Block Type</label>
                            <input type="text" name="company_name" class="form-control" placeholder="" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="controls">
                            <label>Start Date</label>
                            <input type="date" name="company_name" class="form-control" value="2020-02-02" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="controls">
                            <label>End Date</label>
                            <input type="date" name="company_name" class="form-control" value="2020-02-02" data-validation-required-message="Please write the company name"  required>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <div class="controls">
                            <label>Status</label>
                             <select name="hotel" class="form-control">
                                <option value="1" selected>EVC</option>
                                <option value="2">CAI</option>
                            </select>
                        </div>
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>
{{-- <script src="{{asset('assets/js/uploads.js')}}"></script> --}}
@endsection
