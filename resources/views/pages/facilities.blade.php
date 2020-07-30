@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Facilities')

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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-swvb-cyan">
                            <div class="row">
                                <h4 class="card-title text-white ml-2">Faciities</h4>
                            </div>    
                        </div>
                        <div class="card-content">
                            
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">

                                    <table class="table tours-all">
                                        <thead class="bg-swvb-dark">
                                            <tr>
                                                <th class="text-white">Facility</th>
                                                <th class="text-white">Required field</th>
                                                <th class="text-white">Status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr>
                                                <td>Credentials</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox2">
                                                            <label for="checkbox2"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox3">
                                                            <label for="checkbox3"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox4">
                                                            <label for="checkbox4"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox5">
                                                            <label for="checkbox5"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox6">
                                                            <label for="checkbox6"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox7">
                                                            <label for="checkbox7"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Tours</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox21">
                                                            <label for="checkbox21"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox31">
                                                            <label for="checkbox31"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox41">
                                                            <label for="checkbox41"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox51">
                                                            <label for="checkbox51"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox61">
                                                            <label for="checkbox61"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox71">
                                                            <label for="checkbox71"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Vouchers</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox22">
                                                            <label for="checkbox22"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox32">
                                                            <label for="checkbox32"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox42">
                                                            <label for="checkbox42"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox52">
                                                            <label for="checkbox52"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox62">
                                                            <label for="checkbox62"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox72">
                                                            <label for="checkbox72"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Stamping Fee Request</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox23">
                                                            <label for="checkbox23"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox33">
                                                            <label for="checkbox33"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox43">
                                                            <label for="checkbox43"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox53">
                                                            <label for="checkbox53"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox63">
                                                            <label for="checkbox63"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox73">
                                                            <label for="checkbox73"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
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
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox34">
                                                            <label for="checkbox34"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox44">
                                                            <label for="checkbox44"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox54">
                                                            <label for="checkbox54"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox64">
                                                            <label for="checkbox64"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox74">
                                                            <label for="checkbox74"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Contract</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox25">
                                                            <label for="checkbox25"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox35">
                                                            <label for="checkbox35"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox45">
                                                            <label for="checkbox45"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox55">
                                                            <label for="checkbox55"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox65">
                                                            <label for="checkbox65"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox75">
                                                            <label for="checkbox75"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Points/Entitlement</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox26">
                                                            <label for="checkbox26"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox36">
                                                            <label for="checkbox36"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox46">
                                                            <label for="checkbox46"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox56">
                                                            <label for="checkbox56"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox66">
                                                            <label for="checkbox66"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox72">
                                                            <label for="checkbox76"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>External members hip</td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox27">
                                                            <label for="checkbox27"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox37">
                                                            <label for="checkbox37"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox47">
                                                            <label for="checkbox47"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox57">
                                                            <label for="checkbox57"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox67">
                                                            <label for="checkbox67"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox77">
                                                            <label for="checkbox77"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
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
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox38">
                                                            <label for="checkbox38"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox48">
                                                            <label for="checkbox48"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox58">
                                                            <label for="checkbox58"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox68">
                                                            <label for="checkbox68"></label>
                                                        </div>
                                                    </fieldset></td>
                                                <td><fieldset>
                                                        <div class="checkbox">
                                                            <input type="checkbox" class="checkbox-input" id="checkbox78">
                                                            <label for="checkbox78"></label>
                                                        </div>
                                                    </fieldset></td>
                                                
                                            </tr>
                                            <tr>
                                        <td>MSD</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    
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
