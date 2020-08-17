@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ext Membership')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section id="nav-filled">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="col card-title text-white">
                            <span>Batch Payment - 1000114 Details</span>
                            <span class="offset-2">VISA</span>
                            <button class="btn btn-outline-white round mr-1 text-white bx bx-download"></button>
                            <button class="btn btn-outline-white round mr-1 text-white bx bx-printer"></button>
                            <span class="offset-1">MASTER</span>
                            <button class="btn btn-outline-white round mr-1 text-white bx bx-download"></button>
                            <button class="btn btn-outline-white round mr-1 text-white bx bx-printer"></button>
                        </h4>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group pt-1">
                                    <label >Filter Year</label>
                                    <select name="membershipfilter" class="select2 form-control" required>
                                    <option value="membershipfilter1">2020</option>
                                    <option value="membershipfilter2">Active</option>
                                    <option value="membershipfilter3">Withdrawal</option>
                                    <option value="membershipfilter4">Suspended</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs mt-" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="dbr-tab-fill" data-toggle="tab" href="#dbr-fill" role="tab"
                                aria-controls="dbr-fill" aria-selected="true">
                                AMEX
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rmh-tab-fill" data-toggle="tab" href="#rmh-fill" role="tab"
                                aria-controls="rmh-fill" aria-selected="false">
                                Visa &  Master
                                </a>
                            </li>
                     
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-1">
                            <div class="tab-pane active" id="dbr-fill" role="tabpanel" aria-labelledby="dbr-tab-fill">
                                
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">

                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th></th>
                                                    <th class="text-white">Invoice No.</th>
                                                    <th class="text-white">Invoice Date</th>
                                                    <th class="text-white">Membership No.</th>
                                                    <th class="text-white">Invoice Bank</th>
                                                    <th class="text-white">Card No</th>
                                                    <th class="text-white">Expire</th>
                                                    <th class="text-white">Installment</th>
                                                    <th class="text-white">Charge Date</th>
                                                    <th class="text-white">Amount</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Receipt No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox202">
                                                    <label for="checkbox202"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>74</td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                   
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                   <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox203">
                                                    <label for="checkbox203"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>CN10013902</td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                    
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                </tr>
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox204">
                                                    <label for="checkbox204"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>CN10013902</td>
                                                    <td>1000034</td>
                                                    <td>Iola</td>
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                </tr>
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox205">
                                                    <label for="checkbox205"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>CN10013902</td>
                                                    <td>1000035</td>
                                                    <td>Zorita</td>
                                                    <td>Zorita</td>
                                                    <td>11 June 2018</td>
                                                    <td>07:18 PM</td>
                                                    <td>Reed Meyer</td>
                                                    <td>Zorita</td>
                                                    <td>11 June 2018</td>
                                                    <td>07:18 PM</td>
                                                    <td>Reed Meyer</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="rmh-fill" role="tabpanel" aria-labelledby="rmh-tab-fill">
                                
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">

                                        <table class="table tours-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th></th>
                                                    <th class="text-white">Invoice No.</th>
                                                    <th class="text-white">Invoice Date</th>
                                                    <th class="text-white">Membership No.</th>
                                                    <th class="text-white">Invoice Bank</th>
                                                    <th class="text-white">Card No</th>
                                                    <th class="text-white">Expire</th>
                                                    <th class="text-white">Installment</th>
                                                    <th class="text-white">Charge Date</th>
                                                    <th class="text-white">Amount</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Receipt No.</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                                                       
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox602">
                                                    <label for="checkbox602"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>74</td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                   
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox502">
                                                    <label for="checkbox502"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>74</td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                   
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox402">
                                                    <label for="checkbox402"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>74</td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                   
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td><fieldset>
                                                    <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox302">
                                                    <label for="checkbox302"></label>
                                                    </div>
                                                    </fieldset></td>
                                                    <td>74</td>
                                                    <td>205420000</td>
                                                    <td>Yakub Sebastian</td>
                                                    <td>RM 247.30</td>
                                                    <td>Point Offset</td>
                                                    <td>03 June 2020</td>
                                                    <td>Active</td>
                                                   
                                                    <td>Iola</td>
                                                    <td>06 November 2019</td>
                                                    <td>08:31 PM</td>
                                                    <td>Jameson Knight</td>
                                                    
                                                    
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
<!--/ Zero configuration table -->
@endsection
{{-- vendor scripts --}}
<script>
$(function() {
  $('[data-toggle="popover"]').popover({
        html: true,
        content: function() {
            return $('#popover-content').html();
        }
  });
});
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
