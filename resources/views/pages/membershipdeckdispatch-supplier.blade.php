@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Card Printing List')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Basic tabs start -->
<section id="basic-tabs-components">
  <div class="card"> 
    <div class="card-header bg-swvb-cyan">
      <div class="card-title">
            <div class="row">
                <h4 class="text white col">Card Printing List<a href="" class="btn btn-outline-white round text-white ml-2">Add</a></h4>
                <a href="" class="btn btn-outline-white round text-white">Download</a>
            </div>
      </div>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="table-responsive pt-3">
                    <table class="table tours-all">
                        <thead class="bg-swvb-dark">
                            <tr>
                                <th><fieldset>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkbox-input" id="checkbox10">
                                            <label for="checkbox10"></label>
                                        </div>
                                    </fieldset>
                                </th>
                                <th class="text-white">Batch No.</th>
                                <th class="text-white">Consignment No.</th>
                                <th class="text-white">Mode of Dispatch</th>
                                <th class="text-white">DIspatch Date</th>
                                <th class="text-white">Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="row-link" onclick="location.href='{{ url('/membershipdeckdispatch/supplierdetails') }}'">
                                <td>
                                    <fieldset>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkbox-input" id="checkbox2">
                                            <label for="checkbox2"></label>
                                        </div>
                                    </fieldset>
                                </td>
                                <td>14</td>
                                <td>100044</td>
                                <td>Self Collection</td>
                                <td>01 April 2020</td>
                                <td>Sent for Printing</td>
                                
                            </tr>
                            <tr >
                                <td>
                                    <fieldset>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkbox-input" id="checkbox3">
                                            <label for="checkbox3"></label>
                                        </div>
                                    </fieldset>
                                </td>
                                <td><a href="{{ url('/membershipdeckdispatch/supplierdetails') }}">14</a></td>
                                <td><a href="{{ url('/membershipdeckdispatch/supplierdetails') }}">100044</a></td>
                                <td>Self Collection</td>
                                <td>01 April 2020</td>
                                <td>Sent for Printing</td>
                                
                            </tr>

                            <tr>
                                <td>
                                    <fieldset>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkbox-input" id="checkbox6">
                                            <label for="checkbox6"></label>
                                        </div>
                                    </fieldset>
                                </td>
                                <td><a href="{{ url('/membershipdeckdispatch/supplierdetails') }}">14</a></td>
                                <td><a href="{{ url('/membershipdeckdispatch/supplierdetails') }}">100044</a></td>
                                <td>Self Collection</td>
                                <td>01 April 2020</td>
                                <td>Sent for Printing</td>
                            </tr>

                            <tr>
                                <td>
                                    <fieldset>
                                        <div class="checkbox">
                                            <input type="checkbox" class="checkbox-input" id="checkbox4">
                                            <label for="checkbox4"></label>
                                        </div>
                                    </fieldset>
                                </td>
                                <td><a href="{{ url('/membershipdeckdispatch/supplierdetails') }}">14</a></td>
                                <td><a href="{{ url('/membershipdeckdispatch/supplierdetails') }}">100044</a></td>
                                <td>Self Collection</td>
                                <td>01 April 2020</td>
                                <td>Sent for Printing</td>
                            </tr>
                            
                        </tbody>
                    </table>
            </div>
            <button type="button" class="btn btn-primary m-3 float-right" >
            Create
            </button>
        </div>
   </div>
</section>
<!-- Basic Tag Input end -->


@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/datetime-moment.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
{{-- <script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script> --}}
<script src="{{asset('vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script> --}}
<script src="{{asset  ('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
@endsection
