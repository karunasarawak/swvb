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
<section id="popover-triggers">
    <div class="row">
        <div class="col-12">
            
            <!-- Membership Information -->
           
            <div class="card">
                <div class="card-header bg-swvb-cyan">

                        <h4 class="card-title text-white">Membership Information</h4>

                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col-sm-3">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Member's Information</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Last Point Allocation</p>
                            </div>
                            <div class="col-sm-3 pl-4">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Status</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <p class="col">Saluation</p>
                                    <p class="col font-weight-bold black">Mr</p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black">John Doe</p>
                                </div>
                                <div class="row">
                                    <p class="col">Mobile Contact</p>
                                    <p class="col font-weight-bold black">+6012 345 6798</p>
                                </div>
                                <div class="row">
                                    <p class="col">Whatsapp</p>
                                    <p class="col font-weight-bold black">+6012 345 6798</p>
                                </div>
                                <div class="row">
                                    <p class="col">Package</p>
                                    <p class="col font-weight-bold black">Pearl Package</p>
                                </div>
                                <div class="row">
                                    <p class="col">Ext. Membership</p>
                                    <p class="col font-weight-bold black">-</p>
                                </div>
                                <div class="row">
                                    <p class="col">Status</p>
                                    <p class="col font-weight-bold black">Active</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-6">Entitlement</p>
                                    <p class="col-sm-6 font-weight-bold black">3WD 3WE</p>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table leads-all">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">Term</th>
                                                        <th class="text-white">Pts</th>
                                                        <th class="text-white">Allocated</th>
                                                        <th class="text-white">Expiry</th>
                                                        <th class="text-white">Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                        <td>3WD 1WE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                        <td>3WD 1WE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                        <td>3WD 1WE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                        <td>3WD 1WE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>10,000</td>
                                                        <td>01.07.2020</td>
                                                        <td>01.07.2020</td>
                                                        <td>3WD 1WE</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3 pl-4">
                                <div class="row">
                                    <p class="col-sm-7">Paid (%)</p>
                                    <p class="col font-weight-bold black">80%</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">AMF Outstanding</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Installment Outstanding</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Other Outstanding</p>
                                    <p class="col font-weight-bold black">RM 50</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Total Outstanding</p>
                                    <p class="col font-weight-bold black">RM 70</p>
                                </div>
                                <div class="row">
                                    <p class="col-sm-7">Over Payment</p>
                                    <p class="col font-weight-bold black">RM 100</p>
                                </div>

                            </div>
                        </div>
                 </div>  
                </div>  
                
            </div>    
            


            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title text-white">Event Details</h4>
                </div>
                <div class="card-content">
                    <div class="col pt-1 pl-1">
                        <div class="row">
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Details</p>
                            </div>
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Creation</p>
                            </div>
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Refer</p>
                            </div>
                        </div>             
                    </div>
                        <div class="card-body card-dashboard">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <p class="col">Type</p>
                                        <p class="col font-weight-bold black">Complaint</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Category</p>
                                        <p class="col font-weight-bold black">RSVN</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Title</p>
                                        <p class="col font-weight-bold black">ABC</p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Description</p>
                                        <p class="col font-weight-bold black">DEF</p>
                                    </div>
                                    
                                </div>

                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Created by</p>
                                            <p class="col font-weight-bold black">John</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Created Date</p>
                                            <p class="col font-weight-bold black">01 July 2020</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Last Updated By</p>
                                            <p class="col font-weight-bold black">Wilson</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Date Updated</p>
                                            <p class="col font-weight-bold black">21 July 2020</p>
                                        </div>
                                        
                                    </div>

                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Refer to</p>
                                            <p class="col font-weight-bold black">CC01</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Date Created</p>
                                            <p class="col font-weight-bold black">01 June 2020</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Date to Resolved</p>
                                            <p class="col font-weight-bold black">01 July 2020</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Reserve Using</p>
                                            <p class="col font-weight-bold black">Entitlement</p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Communication Channel</p>
                                            <p class="col font-weight-bold black">Fax</p>
                                        </div>
                                        
                                    </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row card-title">
                        <h4 class="text-white ml-1">Communication log</h4>
                        <button class="btn btn-outline-white round mr-1 ml-1 text-white" data-toggle="modal" data-target="#newcl">New</button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1">
                            <div class="col">
                                
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Ref No.</th>
                                                    <th class="text-white">Date</th>
                                                    <th class="text-white">Time</th>
                                                    <th class="text-white">Call Length</th>
                                                    <th class="text-white">Outcome</th>
                                                    <th class="text-white">Communication Channel</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Deadline to Resolve</th>
                                                    <th class="text-white">Remarks</th>
                                                    <th class="text-white">Action</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr >
                                                    <td>124</td>
                                                    <td>04 April 2020</td>
                                                    <td>2:00 pm</td>
                                                    <td>20 Minute</td>
                                                    <td>Proceed</td>
                                                    <td>SMS</td>
                                                    <td>Proceed</td>
                                                    <td>01 Aug 2020</td>
                                                    <td>-</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button id="select-files" class="btn mb-1"><i class="icon-file2"></i>Upload Attachment</button>
                                                        
                                                        </div>
                                                    </div>
                                                       
                                                    </td>
                                                </tr>
                                                <tr id="popover-options">
                                                    <td>124</td>
                                                    <td>04 April 2020</td>
                                                    <td>2:00 pm</td>
                                                    <td>20 Minute</td>
                                                    <td>Proceed</td>
                                                    <td>SMS</td>
                                                    <td>Proceed</td>
                                                    <td>01 Aug 2020</td>
                                                    <td>-</td>
                                                    <td>
                                                    <div class="dropdown">
                                                        <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt mr-1"></i> edit</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash mr-1"></i> delete</a>
                                                        </div>
                                                    </div>
                                                </tr>
                                                <tr id="popover-options">
                                                    <td>124</td>
                                                    <td>04 April 2020</td>
                                                    <td>2:00 pm</td>
                                                    <td>20 Minute</td>
                                                    <td>Proceed</td>
                                                    <td>SMS</td>
                                                    <td>Proceed</td>
                                                    <td>01 Aug 2020</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <span class="bx bx-dots-horizontal-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <div class="custom-file col-sm-2">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                                                    <label class="custom-file-label" for="inputGroupFile01">Upload Attachment</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
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
                    
            
        </div>                
    </div>   
</section>                            
<!-- pop out modal box for update status -->
<div class="modal fade text-left" id="newcl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-cyan">
                <h4 class="modal-title text-white" id="myModalLabel33">New Communication Log</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bx bx-x"></i>
                    </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Date</label>
                            <input type="date" name="nric" class="form-control" value="11 July 2020" required>
                        </div>
                    </div>
                   
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Time</label>
                            <input type="time" name="nric" class="form-control" placeholder="1:00 PM" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Communication Channel</label>
                            <select name="pri_postal1" class="select2 form-control" required>
                                <option>--</option>
                                <option value="98000">SMS</option>
                                <option value="sibu">Sibu</option>
                                <option value="miri">Miri</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Status</label>
                            <input type="text" name="nric" class="form-control" placeholder="Proceed" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group controls">
                            <label>Deadline to Resolved</label>
                            <input type="date" name="nric" class="form-control" value="01 Aug 2020" required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                            <fieldset class="form-group">
                                <label for="basicInputFile">Upload Attachment</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </fieldset>
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


                           
 <script>
    $('#myModal').on('hidden', function(){
        $('#dialog').modalPopover('toggle')
    })
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
<script src="{{asset('js/scripts/popover/popover.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection

