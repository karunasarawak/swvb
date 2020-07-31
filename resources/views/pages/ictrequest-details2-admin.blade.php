@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','ICT Request')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section>
    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <!-- must use form and route method to submit data -->
               
                    <div class="card-header bg-swvb-cyan">
                        <div class="row">
                            <h4 class="col card-title text-white ml-4">Account Adjustment Details</h4>
                           
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="row pt-1">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2 pl-5">Invoice</p>
                                </div>
                            </div>

                        
                            <div class="row" >
                                <div class="col ml-5">
                                    <div class="row">
                                        <p class="col">Membership No.</p>
                                        <p class="col font-weight-bold black" x-show="o"></p>
                                        <p class="col" x-cloak x-show="e">
                                        <select class="custom-select form-control required" id="salutation" name="salutation" required>
                                            
                                        
                                        </select>
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="col">Member Name</p>
                                        <p class="col font-weight-bold black" x-show="o"></p>
                                        <p class="col" x-cloak x-show="e">
                                            <input  type="text" name="name" class="form-control" value="" placeholder="Name" data-validation-required-message="Please write the company name"  required>
                                        </p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table leads-all">
                                                <thead class="bg-swvb-dark">
                                                    <tr>
                                                        <th class="text-white">No.</th>
                                                        <th class="text-white">Unit Price (RM)</th>
                                                        <th class="text-white">Rounding Adj. (RM)</th>
                                                        <th class="text-white">Total (RM)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode A</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode B</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode A</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode B</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode A</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode B</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode B</td>
                                                        <td>01 April 2020</td>
                                                        
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>1234 0000</td>
                                                        <td>Mode B</td>
                                                        <td>01 April 2020</td>
                                                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row pt-1 pl-5">
                                <div class="col">
                                    <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Credit Note/Debit Note/Void Receipt/Refund<i class="bx bx-pencil"></i></p>
                                </div>
                            </div>
                            <div class="row ml-3">
                                <div class="table-responsive">
                                    <table class="table leads-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">No.</th>
                                                <th class="text-white">Reservation No.</th>
                                                <th class="text-white">Document Type</th>
                                                <th class="text-white">Original Inv No. / OR No.</th>
                                                <th class="text-white">Unit Price (RM)</th>
                                                <th class="text-white">Rounding Adj. (RM)</th>
                                                <th class="text-white">Total (RM)</th>
                                                <th class="text-white">Reasons</th>
                                                <th class="text-white">Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode A</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode B</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode A</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode B</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode A</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode B</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode B</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>1234 0000</td>
                                                <td>Mode B</td>
                                                <td>01 April 2020</td>
                                                <td>Item 01</td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                    
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
</section>


<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
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
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}"></script>
<script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection

