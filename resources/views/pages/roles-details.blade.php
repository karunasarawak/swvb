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
    <form action="{{route('role.checkbox',$payload['staff']->staff_id)}}" method="POST" novalidate>   
        @csrf
        
        <div class="row" x-data="{ e: false, o: true }">
            <div class="col-12">
                <div class="card">
                    <!-- change contact side menu url n test contact details -->
                    <div class="card-header bg-swvb-cyan">
                        <div class="row">
                            <h4 class="card-title text-white ml-2">Role Details<button type="button" class="btn btn-outline-white round ml-2" x-show="o" @click="e = true, o = false">Edit</button>
                                <div class="float-right" x-show="e" x-cloak>
                                    <button type="submit" class="btn btn-outline-white round mr-1">Save</button>
                                    <button type="button" class="btn btn-outline-white round" @click="e = false, o = true">Close</button>
                                </div></h4>
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
                                <div class="col-sm-4" >
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Role</label>
                                            <p x-show="o"></p>
                                            <input type="text" x-cloak x-show="e" name="install_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4" >
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Abbreviation</label>
                                            <p x-show="o"></p>
                                            <input type="text" x-cloak x-show="e" name="install_cc_exp" class="form-control" vallue="01/2020" data-validation-required-message="Please enter the expiry date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="location">Status</label>
                                            <p x-show="o"></p>
                                            <select name="package_id" id="packagetype" x-cloak x-show="e" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                                <option value="1">Chalet</option>
                                                <option value="2">John</option>

                                            </select>
                                        </div>
                                    </div>
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
                                <div class="pt-2 table table-responsive">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group controls">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Activiy logs</label>               
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="custom-control-inline">
                                                            <div class="radio mr-1">
                                                                <input type="radio" name="amfcc" value="1" id="ccy" @click="xcc=false, cc=true" required>
                                                                <label for="ccy">All</label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="amfcc" value="0" id="ccn" @click="xcc=true, cc=false">
                                                                <label for="ccn">Own department</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table  class="table">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Module</th>
                                                    <th class="text-white">Enable All</th>
                                                    <th class="text-white">Create</th>
                                                    <th class="text-white">View</th>
                                                    <th class="text-white">Edit</th>
                                                    <th class="text-white">Not Applicable</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                    @if(isset($payload))
                                                        @foreach($payload['module'] as $l)
                                                        <?php
                                                            $moduleName = str_replace(str_split('/ '),'',$l); 
                                                        ?>
                                                        <tr>    
                                                    
                                                            <td style="width:50%">{{$l}}</td>
                                                            
                                                            <td>
                                                                <fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input bg-primary cbInput{{$moduleName}}"  onclick="selectAll('{{$moduleName}}')"  id="{{$moduleName}}1">
                                                                    <label class="custom-control-label" for="{{$moduleName}}1"></label>
                                                                </div>
                                                                </fieldset>
                                                            </td>
                                                            <td><fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="{{$moduleName}}_c"  value="{{$moduleName}}_c" class="custom-control-input bg-primary cbInput{{$moduleName}}"   id="{{$moduleName}}2">
                                                                    <label class="custom-control-label" for="{{$moduleName}}2"></label>
                                                                </div>
                                                                </fieldset>
                                                            </td>
                                                            <td><fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="{{$moduleName}}_v"  value="{{$moduleName}}_v" class="custom-control-input bg-primary cbInput{{$moduleName}}"   id="{{$moduleName}}3">
                                                                    <label class="custom-control-label" for="{{$moduleName}}3"></label>
                                                                </div>
                                                                </fieldset>
                                                            </td>
                                                            <td><fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" name="{{$moduleName}}_e"  value="{{$moduleName}}_e" class="custom-control-input bg-primary cbInput{{$moduleName}}"   id="{{$moduleName}}4">
                                                                    <label class="custom-control-label" for="{{$moduleName}}4"></label>
                                                                </div>
                                                                </fieldset>
                                                            </td>
                                                            <td><fieldset>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input bg-primary"  onclick="disable('{{$moduleName}}')" name="{{$moduleName}}_na" id="{{$moduleName}}5">
                                                                    <label class="custom-control-label" for="{{$moduleName}}5"></label>
                                                                </div>
                                                                </fieldset>
                                                            </td>
                                                        
                                                        </tr>
                                                        @endforeach
                                                    @endif
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary m-3 float-right">Save</button>   
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
                            <h4 class="card-title text-white ml-2">Approvals</h4>
                        </div>    
                    </div>

                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="pt-2 table table-responsive">
                                <table class="table">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">Approvals</th>
                                            <th class="text-white">Check</th>
                                            <th class="text-white">Check 2</th>
                                            <th class="text-white">Verify</th>
                                            <th class="text-white">Verify 2</th>
                                            <th class="text-white">Approval</th>
                                            <th class="text-white">Approval 2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($payload))
                                        @foreach($payload['approval'] as $a)
                                        <?php
                                            $approvals = str_replace(str_split('/ '),'',$a); 
                                        ?>
                                            <tr>
                                                <td>{{$a}}</td>
                                                <td>
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="{{$approvals}}_c1"  value="{{$approvals}}_c1" class="custom-control-input bg-primary cbInput{{$approvals}}" id="{{$approvals}}1">
                                                            <label class="custom-control-label" for="{{$approvals}}1"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td><fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="{{$approvals}}_c2"  value="{{$approvals}}_c2" class="custom-control-input bg-primary cbInput{{$approvals}}"  id="{{$approvals}}2">
                                                            <label class="custom-control-label" for="{{$approvals}}2"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td><fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="{{$approvals}}_v1"  value="{{$approvals}}_v1" class="custom-control-input bg-primary cbInput{{$approvals}}"  id="{{$approvals}}3">
                                                            <label class="custom-control-label" for="{{$approvals}}3"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td><fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="{{$approvals}}_v2"  value="{{$approvals}}_v2" class="custom-control-input bg-primary cbInput{{$approvals}}"  id="{{$approvals}}4">
                                                            <label class="custom-control-label" for="{{$approvals}}4"></label>
                                                        </div>
                                                    </fieldset>     
                                                </td>
                                                <td><fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="{{$approvals}}_a1"  value="{{$approvals}}_a1" class="custom-control-input bg-primary cbInput{{$approvals}}"  id="{{$approvals}}5">
                                                            <label class="custom-control-label" for="{{$approvals}}5"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td><fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="{{$approvals}}_a2"  value="{{$approvals}}_a2" class="custom-control-input bg-primary cbInput{{$approvals}}"  id="{{$approvals}}6">
                                                            <label class="custom-control-label" for="{{$approvals}}6"></label>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
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
                            <h4 class="card-title text-white ml-2">Notifications</h4>
                        </div>    
                    </div>

                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="pt-2 table table-responsive">
                                <table class="table">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">Item</th>
                                            <th class="text-white">In-System Notifications</th>
                                            <th class="text-white">Email</th>
                                            <th class="text-white">Email CC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @if(isset($payload))
                                    @foreach($payload['notifications'] as $n)
                                    <?php
                                        $notifications = str_replace(str_split('/ '),'',$n); 
                                    ?>    
                            
                                    <tr>    
                                        <td>{{$n}}</td>
                                        <td><fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="{{$notifications}}_isn"  value="{{$notifications}}_isn" class="custom-control-input bg-primary cbInput{{$notifications}}" id="{{$notifications}}1">
                                                    <label class="custom-control-label" for="{{$notifications}}1"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="{{$notifications}}_e"  onclick="pickone('{{$notifications}}')" value="{{$notifications}}_e" class="custom-control-input bg-primary cbInput{{$notifications}}" id="{{$notifications}}2">
                                                    <label class="custom-control-label" for="{{$notifications}}2"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                        <td><fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="{{$notifications}}_ec" onclick="pickone('{{$notifications}}')" value="{{$notifications}}_ec" class="custom-control-input bg-primary cbInput{{$notifications}}" id="{{$notifications}}3">
                                                    <label class="custom-control-label" for="{{$notifications}}3"></label>
                                                </div>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<script type="text/javascript">
    

        function selectAll(module)
        {
            var cbIdAll = module + '1';
            var cbIdC = module + '2';
            var cbIdV = module + '3';
            var cbIdE = module + '4';
            var cbIdNA = module + '5';
            
            var cbAll = document.getElementById(cbIdAll);
            var cbC = document.getElementById(cbIdC);
            var cbV = document.getElementById(cbIdV);
            var cbE = document.getElementById(cbIdE);
            var cbNA = document.getElementById(cbIdNA);

            if(cbAll.checked == true)
            {
                cbC.checked = true;
                cbV.checked = true;
                cbE.checked = true;
                cbNA.checked = false;
                
            }
            else if (cbAll.checked == false)
            {
                cbC.checked = false;
                cbV.checked = false;
                cbE.checked = false;
                
            }
        }

        function disable(module)
        {
            
            var NAid = module + '5';
            var NAcb = document.getElementById(NAid);
            var disableclass = 'cbInput' + module;
            
            var disablec = document.getElementsByClassName(disableclass);

            if (NAcb.checked ==  true)
            {
                for (i=0;i<disablec.length;i++){
                    disablec[i].checked = false;
                    disablec[i].disabled = true;

                }
            }
            else {
                for (i=0;i<disablec.length;i++){
                    disablec[i].disabled = false;
                }
            }
        }

        function pickone(notifications){

            var E = notifications + '2';
            var EC = notifications + '3';
            
            var email = document.getElementById(E);
            var emailcc = document.getElementById(EC);

            if (email.checked == true){
                emailcc.disabled = true;
            }
            else if (emailcc.checked == true){
                email.disabled = true;
            }
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

@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/pickers/dateTime/pick-a-datetime.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
