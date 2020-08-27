@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Installment Schedule')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section class="simple-validation">
    <div class="row" x-data="{ edit: false, original:true}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <div class="row ml-1">
                        <h4 class="col card-title text-white">Installment Schedule Detail</h4>
                        <a href="{{ url('/installment/calculator') }}" class="btn btn-outline-white round text-white">Installment Calculator</a>
                        <button onclick="printable();" class="btn btn-outline-white round text-white bx bx-printer ml-1 float-right"></button>

                        <button onclick="csv();" class="btn btn-outline-white round text-white bx bx-download ml-1 float-right"></button>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{route('installment.save',$payload['installment']->install_id)}}" novalidate>
                            @csrf
                            
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <p class="h7 swvb-blue ml-3 font-weight-bold my-auto pt-2">Basic Info</p>
                                    </div>
                                    <div class="col">
                                        <p class="h7 swvb-blue font-weight-bold my-auto pt-2 ml-2">Payment Details</p>
                                    </div>
                                    <div class="col">
                                        
                                       
                                    <a href="{{url('installment/'.$payload['installment']->install_id.'/reject')}}" class="btn btn-primary m-1 float-right">                                                                    
                                            Reject
                                        </a>
                                        <a href="{{url('installment/'.$payload['installment']->install_id.'/approve')}}" type="submit" class="btn btn-primary m-1 float-right">                                                                    
                                            Approve
                                        </a>
                                 
                                    </div>

                                </div>
                                <?php $i=$payload['installment'];?>
                                <div class="row pt-1 pl-3">
                                    <div class="col">
                                        <div class="row">
                                                <p class="col">Payment Schedule No.</p>
                                                <p class="col font-weight-bold black" x-show="original">{{$i->install_id}}</p>
                                                <p class="col" x-cloak x-show="edit">
                                                    <input  type="text" value="{{$i->install_id}}" readonly="readonly" class="form-control" >
                                                </p>
                                        </div>
                                        <div class="row">
                                                <p class="col">Membership No.</p>
                                                <p class="col font-weight-bold black" x-show="original">{{$i->mbrship_no}}</p>
                                                <p class="col" x-cloak x-show="edit">
                                                <input  type="text" value="{{$i->mbrship_no}}" readonly="readonly" class="form-control" placeholder="Membership No." data-validation-required-message="Please write the company name"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Name</p>
                                            <p class="col font-weight-bold black" x-show="original">{{$i->name}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" value="{{$i->name}}" readonly="readonly" class="form-control" >
                                            </p>
                                        </div>

                                        <div class="row">
                                            <p class="col">Package</p>
                                            <p class="col font-weight-bold black" x-show="original">{{$i->package}}</p>
                                            <p class="col" x-cloak x-show="edit">
                               
                                            <select readonly="readonly" class="select2 form-control package" data-validation-required-message="Please select a Package" required>
                                                <option value="" disabled>--</option>
                                                @include('includes.option_from_data',['array'=>$payload['packages'],'key'=>'package_id','value'=>'package','data'=>$i->package_id])
                                            </select>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Installment Plan</p>
                                            <p class="col font-weight-bold black" x-show="original">{{$i->install_duration}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="number" name="installment[install_duration]" value="{{$i->install_duration}}" class="form-control " placeholder="Installment Plan" data-validation-required-message="Please write the installment_plan"  required>
                                            </p>
                                        </div>
                                        @php
                                            $n=1;
                                        @endphp
                                        @foreach($payload['downpayments'] as $dp)
                                        <div class="row">
                                            <p class="col">Down Payment {{$n}}</p>
                                            <p class="col font-weight-bold black" x-show="original">RM {{$dp->dpymt}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                            <input  type="number"  readonly="readonly" value="{{$dp->dpymt}}" class="form-control " placeholder="Down Payment {{$n}}" >
                                            </p>
                                        </div>
                                        @php
                                         $n++;
                                        @endphp
                                        @endforeach
                                        @while ($n<=6)
                                        <div class="row">
                                            <p class="col">Down Payment {{$n}}</p>
                                            <p class="col font-weight-bold black" x-show="original">--</p>
                                            <p class="col" x-cloak x-show="edit">
                                            <input  type="number" name="downpayments[{{$n}}][dpymt]" class="form-control " placeholder="Down Payment {{$n}}" >
                                            </p>
                                            @php
                                            $n++;
                                            @endphp
                                        </div>
                                        @endwhile
                                        
 
                                        <div class="row">
                                            <p class="col">Nett Membership Price</p>
                                            <p class="col font-weight-bold black" x-show="original">RM {{$i->net_price}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="number" name="installment[net_price]" value="{{$i->net_price}}" class="form-control" placeholder="Membership Price" data-validation-required-message="Please write the nett membership price"  required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="col">Paid (%)</p>
                                        <p class="col font-weight-bold black" x-show="original">{{round($payload['paid'])}}%</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="number" value="{{round($payload['paid'])}}" readonly="readonly" class="form-control" placeholder="20%" data-validation-required-message="Please enter the paid charges"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Admin Charges (%)</p>
                                            <p class="col font-weight-bold black" x-show="original">{{$i->admin_charges}}%</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="installment[admin_charges]" value="{{$i->admin_charges}}" class="form-control" placeholder="Supplier" data-validation-required-message="Please enter the admin charges"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Remarks</p>
                                            <p class="col font-weight-bold black" x-show="original">-</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="salutation" class="form-control" placeholder="Remarks" data-validation-required-message="Please write the remarks"  required>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col">Addition</p>
                                            <p class="col font-weight-bold black" x-show="original">RM {{$i->addition}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="installment[addition]" value="{{$i->addition}}" class="form-control" placeholder="Remarks" data-validation-required-message="Please write the remarks"  required>
                                            </p>
                                        </div>
                                  
                                        <div class="row">
                                            <p class="col">Discount</p>
                                            <p class="col font-weight-bold black" x-show="original">RM {{$i->discount}}</p>
                                            <p class="col" x-cloak x-show="edit">
                                                <input  type="text" name="installment[discount]" value="{{$i->discount}}" class="form-control" placeholder="Remarks" data-validation-required-message="Please write the remarks"  required>
                                            </p>
                                        </div>
                                   
                                    </div>
                                </div>
                           
                                
                                    <div class="table table-responsive pt-3">
                                        <table class="table tours-all" id="installtable">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">No.</th>
                                                    <th class="text-white ">Invoice No.</th>
                                                    <th class="text-white">Projected Date</th>
                                                    <th class="text-white">Actual Date</th>
                                                    <th class="text-white">Invoice Date</th>
                                                    <th class="text-white expanded">Item Name</th>
                                                    <th class="text-white">Amount</th>
                                                   <!-- <th class="text-white expanded">Down Payment 1</th>
                                                    <th class="text-white expanded">Down Payment 2</th>
                                                    <th class="text-white expanded">Down Payment 3</th>-->
                                                    <th class="text-white">Admin Charges</th>
                                                    <th class="text-white">Total</th>
                                                    <th class="text-white">Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $dn=1;
                                                    $charge=0;
                                                    $tn=1;
                                                    //$net=($i->net_price-$payload['total_dp'])*($i->admin_charges/100);
                                                   // $net+=$i->net_price;
                                                   
                                                  
                                                @endphp
                                                
                                               
                                                @if(!empty($payload['schedules']))
                                                @foreach($payload['schedules'] as $s)
                                                @if($tn==1)
                                                @php
                                                    $net=$payload['installment']->outstanding;
                                                @endphp
                                                <tr>
                                                    <td></td>
                                                     <td class="expanded"></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="expanded"></td>
                                                     <td></td>
                                                    <!-- <td class="expanded">RM 1000</td>
                                                    <td class="expanded">RM 1000</td>
                                                    <td class="expanded">250</td>-->
                                                    <td></td>
                                                    <td></td>
                                                    <td>{{$net}}</td>
                                                </tr>
                                                @endif
                                                <tr class="freeze">
                                                    <td>{{$tn++}}</td>
                                                     <td class="expanded">{{$s->inv_no}}</td>
                                                     <td>{{date('d M Y',strtotime($s->projected_alloc_date))}}</td>
                                                    <td>{{date('d M Y',strtotime($s->alloc_date))}}</td>
                                                    <td>@if($s->issue_date) {{date('d M Y',strtotime($s->issue_date))}} @endif</td>
                                                    <td class="expanded">Installment {{$s->term}}</td>
                                                     <td>RM {{number_format($s->net,2)}}</td>
                                                    <!-- <td class="expanded">RM 1000</td>
                                                    <td class="expanded">RM 1000</td>
                                                    <td class="expanded">250</td>-->
                                                    <td>{{number_format($s->bank_charge,2)}}</td>
                                                    <td>{{number_format($s->net+$s->bank_charge,2)}}</td>
                                                    <td>{{number_format($net-=($s->net+$s->bank_charge),2)}}</td>
                                                    <?php
                                                        $charge+=$s->bank_charge;
                                                    ?>
                                                </tr>
                                               
                                                @endforeach
                                                @endif
                                                
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>Total</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{number_format($charge,2)}}</th>
                                                    <th>{{number_format($payload['installment']->net_price+$charge,2)}}</th>
                                                    <th></th>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--downpayment-->
<div class="modal fade text-left" id="downpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Down Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form repeater-default">
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item>
                                        <div class="row justify-content-between">
                                            <div class="col-md-2 col-sm-12 form-group">
                                                <label for="Email">Down Payment </label>
                                                <input type="email" class="form-control" id="Email" placeholder="Enter email id">
                                            </div>
                                            
                                            <div class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                <button class="btn btn-danger text-nowrap px-1" data-repeater-delete type="button"> <i
                                                    class="bx bx-x"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col p-0">
                                        <button class="btn btn-primary" data-repeater-create type="button"><i class="bx bx-plus"></i>
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            
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

<!-- Form wizard with step validation section end -->
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
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
<script>
    function csv() {
    var filename='PaymentSchedule.csv';
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        
        csv.push(row.join(","));        
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}

    function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Hide download link
        downloadLink.style.display = "none";

        // Add the link to DOM
        document.body.appendChild(downloadLink);

        // Click download link
        downloadLink.click();
    }
    function printable() {
        var headstr = "<html><head><title></title></head><body><table style='width:100%'>";
        var footstr = "</table></body>";
        var newstr = document.all.item('installtable').innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>
@endsection
