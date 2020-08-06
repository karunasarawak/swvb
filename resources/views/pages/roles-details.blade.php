@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Users & Roles')

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
                        <h4 class="card-title text-white ml-2">Role Details</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="row pt-1 pl-2" >
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Role</p>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col">
                                <ul class="list-unstyled">
                                    <li>Role</li>
                                    <li>Abbreviation</li>
                                    <li>Status</li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
    <div class="row" id="custom-checkbox-colored">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row">
                        <h4 class="card-title text-white ml-2">Basic Permissions</h4>
                    </div>    
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        <th class="text-white">Module</th>
                                        <th class="text-white">EA</th>
                                        <th class="text-white">C</th>
                                        <th class="text-white">V</th>
                                        <th class="text-white">E</th>
                                        <th class="text-white">N/A</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>Credentials</td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck1">
                                                <label class="custom-control-label" for="customColorCheck1"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck2">
                                                <label class="custom-control-label" for="customColorCheck2"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck3">
                                                <label class="custom-control-label" for="customColorCheck3"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck4">
                                                <label class="custom-control-label" for="customColorCheck4"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck5">
                                                <label class="custom-control-label" for="customColorCheck5"></label>
                                            </div>
                                            </fieldset>
                                        </td>
               
                                    </tr>
                                    <tr>
                                        <td>Tours</td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck6">
                                                <label class="custom-control-label" for="customColorCheck6"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck7">
                                                <label class="custom-control-label" for="customColorCheck7"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck8">
                                                <label class="custom-control-label" for="customColorCheck8"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck9">
                                                <label class="custom-control-label" for="customColorCheck9"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck10">
                                                <label class="custom-control-label" for="customColorCheck10"></label>
                                            </div>
                                            </fieldset>
                                        </td>
               
                                    </tr>
                                    <tr>
                                        <td>Vouchers</td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck11">
                                                <label class="custom-control-label" for="customColorCheck11"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck12">
                                                <label class="custom-control-label" for="customColorCheck12"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck13">
                                                <label class="custom-control-label" for="customColorCheck13"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck14">
                                                <label class="custom-control-label" for="customColorCheck14"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck15">
                                                <label class="custom-control-label" for="customColorCheck15"></label>
                                            </div>
                                            </fieldset>
                                        </td>
               
                                    </tr>
                                    <tr>
                                        <td>Stamping Fee Request</td>
                                        <td>
                                            <fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck16">
                                                <label class="custom-control-label" for="customColorCheck16"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck17">
                                                <label class="custom-control-label" for="customColorCheck17"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck18">
                                                <label class="custom-control-label" for="customColorCheck18"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck19">
                                                <label class="custom-control-label" for="customColorCheck19"></label>
                                            </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input bg-primary" checked name="customCheck" id="customColorCheck20">
                                                <label class="custom-control-label" for="customColorCheck20"></label>
                                            </div>
                                            </fieldset>
                                        </td>
               
                                    </tr>
                                    <tr>
                                        <td>Membership</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Contract</td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox24">
                                                    <label for="checkbox24"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox34">
                                                    <label for="checkbox34"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox44">
                                                    <label for="checkbox44"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox54">
                                                    <label for="checkbox54"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox64">
                                                    <label for="checkbox64"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                      
                                        
                                    </tr>
                                    <tr>
                                        <td>Contract</td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox25">
                                                    <label for="checkbox25"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox35">
                                                    <label for="checkbox35"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox45">
                                                    <label for="checkbox45"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox55">
                                                    <label for="checkbox55"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox65">
                                                    <label for="checkbox65"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                      
                                        
                                    </tr>
                                    <tr>
                                        <td>Points/Entitlement</td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox26">
                                                    <label for="checkbox26"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox36">
                                                    <label for="checkbox36"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox46">
                                                    <label for="checkbox46"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox56">
                                                    <label for="checkbox56"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox66">
                                                    <label for="checkbox66"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                      
                                        
                                    </tr>
                                    <tr>
                                        <td>External members hip</td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox27">
                                                    <label for="checkbox27"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox37">
                                                    <label for="checkbox37"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox47">
                                                    <label for="checkbox47"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox57">
                                                    <label for="checkbox57"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox67">
                                                    <label for="checkbox67"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                       
                                        
                                    </tr>
                                    <tr>
                                        <td>Payment details</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Methodp</td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox28">
                                                    <label for="checkbox28"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox38">
                                                    <label for="checkbox38"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox48">
                                                    <label for="checkbox48"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox58">
                                                    <label for="checkbox58"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" id="checkbox68">
                                                    <label for="checkbox68"></label>
                                                </div>
                                            </fieldset>
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

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
@endsection
