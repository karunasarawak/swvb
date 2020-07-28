@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Receipt')

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
                <h4 class="text white col">Membership Deck Dispatch</h4>
                <a href="" class="btn btn-outline-white round mr-1 text-white">Upload CSV</a>
                <a href="" class="btn btn-outline-white round text-white">Download</a>
            </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
            <div class="table-responsive pt-3">
                <table class="table leads-all">
                    <thead class="bg-swvb-dark">
                        <tr>
                            <th><fieldset>
                                    <div class="checkbox">
                                        <input type="checkbox" class="checkbox-input" id="checkbox11">
                                        <label for="checkbox11"></label>
                                    </div>
                                </fieldset>
                            </th>
                            <th class="text-white">Consignment No.</th>
                            <th class="text-white">Mode of Dispatch</th>
                            <th class="text-white">Dispatch Date</th>
                            <th class="text-white">Membership No.</th>
                            <th class="text-white">Name</th>
                            <th class="text-white">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <fieldset>
                                <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox12">
                                <label for="checkbox12"></label>
                                </div>
                            </fieldset>
                            </td>
                            <td>100044</td>
                            <td>Self Collection</td>
                            <td>01 April 2020</td>
                            <td>+6012 345 6789</td>
                            <td>Wilson</td>
                            <td>Not send</td>
                        </tr>
                        <tr>
                            <td>
                            <fieldset>
                                <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox13">
                                <label for="checkbox13"></label>
                                </div>
                            </fieldset>
                            </td>
                            <td>100044</td>
                            <td>Self Collection</td>
                            <td>01 April 2020</td>
                            <td>+6012 345 6789</td>
                            <td>Wilson</td>
                            <td>Not send</td>
                        </tr>

                        <tr>
                            <td>
                            <fieldset>
                                <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox14">
                                <label for="checkbox14"></label>
                                </div>
                            </fieldset>
                            </td>
                            <td>100044</td>
                            <td>Self Collection</td>
                            <td>01 April 2020</td>
                            <td>+6012 345 6789</td>
                            <td>Wilson</td>
                            <td>Not send</td>
                        </tr>

                        <tr>
                            <td>
                            <fieldset>
                                <div class="checkbox">
                                <input type="checkbox" class="checkbox-input" id="checkbox15">
                                <label for="checkbox15"></label>
                                </div>
                            </fieldset>
                            </td>
                            <td>100044</td>
                            <td>Self Collection</td>
                            <td>01 April 2020</td>
                            <td>+6012 345 6789</td>
                            <td>Wilson</td>
                            <td>Not send</td>
                        </tr>
                        
                    </tbody>
                </table>
          </div>     
      </div>
    </div>
  </div>
</section>
<!-- Basic Tag Input end -->


@endsection


{{-- vendor scripts --}}
@section('vendor-scripts')
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
