@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Stamping Fee')

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
                    <h4 class="card-title text-white">Stamping Fee Listing</h4>
                </div>
                <div class="card-content">
                    
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">

                            <table class="table tours-all">
                                <thead class="bg-swvb-dark">
                                    <tr>
                                        
                                        <th class="text-white">Bil</th>
                                        <th class="text-white">Jenis Penyeteman</th>
                                        <th class="text-white">Kategori</th>
                                        
                                        <th class="text-white">Jenis Suratcara</th>
                                        <th class="text-white">*Tarikh S/Cara(DD/MM/YY)</th>
                                        <th class="text-white">*Butiran S/Cara</th>
                                        <th class="text-white">*Nilai Kontrak/Balasan/Pinjaman(RM)</th>
                                        <th class="text-white">Prinsipal/Subsidiari</th>
                                        <th class="text-white">Huraian</th>
                                        <th class="text-white">Duti Dikenakan(RM)</th>
                                        <th class="text-white">Penalti(RM)</th>
                                        <th class="text-white">*Bil Asal(0-1)</th>
                                        <th class="text-white">*Bil Salinan(0-30)</th>
                                        <th class="text-white">Amaun Salinan(RM)</th>
                                        <th class="text-white">Jumlah Duti Kena Dibayar(RM)</th>
                                        <th class="text-white">*Nama Penuh/Nama Syarikat</th>
                                        <th class="text-white">*No IC/Passport/Pendaftran Syarikat</th>
                                        
                                    </tr>
                                </thead>
                               
                                <tbody>
                                   
                                    <tr>
                                        <td >1</td>
                                        <td>_007_PENYETEMAN_AM</td>                        
                                        <td>_046_PenyetamanAM</td>
                                        <td>197 Perjanjian Biasa</td>
                                        <td></td>
                                        <td>Membership Agreement</td>
                                        <td></td>
                                        <td>P-Principal</td>
                                        <td>Timeshare Membership</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>20</td>
                                        <td></td>
                                        <td></td>




                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <td>B0001</td>
                                        <td>02</td>                        
                                        <td>RM 200</td>
                                        <td>01 April 2020</td>
                                        <td>Chris</td>
                                        <td>Wilson</td>
                                        <td>Wilson</td>
                                        <td>01 April 2020</td>
                                        <td><select name="pri_postal1" class="select2 form-control" required>
                                                <option>--</option>
                                                <option value="98000">PENDING</option>
                                                <option value="sibu">Sibu</option>
                                                <option value="miri">Miri</option>
                                            </select>
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
