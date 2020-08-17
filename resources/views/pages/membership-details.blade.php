@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Membership')

{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/datatables.min.css')}}">
@endsection
{{-- page-styles --}}

@section('content')
<!-- Zero configuration table -->
<section class="float-left">
    <div class="row" x-data="{ edit: false, original:true}">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-swvb-cyan">  
                    <div class="row">
                        <h4 class="col card-title text-white">Membership Details - 234560000</h4>
                            <p class="col h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                <button class="btn btn-primary" x-show="edit" x-cloak >                                                                    
                                    Save
                                </button>
                            </p>
                            <p class="col h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                <button class="btn btn-primary" x-show="edit" x-cloak @click="edit=false, original=true">                                                                    
                                    Close
                                </button>
                            </p>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="row pt-1 pl-2" >
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Primary Member
                                    <button class="border-0 bg-transparent" x-show="original" @click="edit=true, original=false">                                                                    
                                        <i class="bx bx-pencil "></i>
                                    </button>
                                </p>
                                <!-- <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                    <button class="btn btn-primary" x-show="edit" x-cloak >                                                                    
                                        Save
                                    </button>
                                </p>
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">
                                    <button class="btn btn-primary" x-show="edit" x-cloak @click="edit=false, original=true">                                                                    
                                       Close
                                    </button>
                                </p> -->
                            </div>
                            <div class="col">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Contacts & Relationship<button class="border-0 bg-transparent" x-show="original" @click="edit=true, original=false">                                                                    
                                        <i class="bx bx-pencil "></i>
                                    </button></p>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col">
                                <div class="row">
                                    <p class="col">Saluation</p>
                                    <p class="col font-weight-bold black" x-show="original">Mr</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="salutation" class="form-control" placeholder="salutation" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Name</p>
                                    <p class="col font-weight-bold black" x-show="original">John Doe</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="text" name="name" class="form-control" placeholder="name" data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row">
                                    <p class="col">Mobile No.</p>
                                    <p class="col font-weight-bold black" x-show="original">+6012 345 6789</p>
                                    <p class="col" x-cloak x-show="edit">
                                        <input  type="number" name="mobile no." class="form-control" placeholder="mobile no." data-validation-required-message="Please write the company name"  required>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="col">Contract Type</p>
                                    <p class="col font-weight-bold black" x-show="original">Individual/Corporate</p>
                                    <p class="col" x-cloak x-show="edit">
                                    <select name="salutation" class="form-control">
                                        <option value="1" selected>Individual</option>
                                        <option value="2">Corporate</option>
                                    </select>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="row pt-1 pl-2">
                            <div class="col-md-7">
                                <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Secondary Member / Nominees</p>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#newsecondmember">New Secondary Member</button>
                            </div>
                        </div>

                        <div class="card-body card-dashboard pt-1">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-swvb-dark">
                                        <tr>
                                            <th class="text-white">Salutation</th>
                                            <th class="text-white">Name</th>
                                            <th class="text-white">Contact</th>
                                            <th class="text-white">Relationship</th>
                                            <th class="text-white">Membership Types</th>
                                            <th class="text-white">Status</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    <tr x-data="{ archive: false, active: true }">
                                        <td>Mr</td>
                                        <td>Ben</td>
                                        <td class="expanded">+6012 345 6789</td>
                                        <td>Wife</td>
                                        <td>Secondary</td>
                                        <td><p x-cloak x-show="archive">Archived</p><p x-show="active">Active</p></td>
                                        <td><button class="btn btn-outline-primary round mr-1 mb-1" @click="archive = true, active = false">Archive</button></td>
                                    </tr>
                                    <tr x-data="{ active: false, inactive: true }">
                                        <td>Mrs</td>
                                        <td>Jane</td>
                                        <td>+6012 345 6789</td>
                                        <td>Wife</td>
                                        <td>Secondary</td>
                                        <td><p x-cloak x-show="active">Acitve</p><p x-show="inactive">Inacitve</p></td>
                                        <td><button class="btn btn-outline-primary round mr-1 mb-1" @click="inactive = false, active = true">Active</button></td>
                                    </tr>
                                    <tr x-data="{ archive: false, active: true }">
                                        <td>Mr</td>
                                        <td>Ben</td>
                                        <td>+6012 345 6789</td>
                                        <td>Wife</td>
                                        <td>Secondary</td>
                                        <td><p x-cloak x-show="archive">Archived</p><p x-show="active">Active</p></td>
                                        <td><button class="btn btn-outline-primary round mr-1 mb-1" @click="archive = true, active = false">Archive</button></td>
                                    </tr>
                                    <tr x-data="{ active: false, inactive: true }">
                                        <td>Mrs</td>
                                        <td>Jane</td>
                                        <td>+6012 345 6789</td>
                                        <td>Wife</td>
                                        <td>Secondary</td>
                                        <td><p x-cloak x-show="active">Acitve</p><p x-show="inactive">Inacitve</p></td>
                                        <td><button class="btn btn-outline-primary round mr-1 mb-1" @click="inactive = false, active = true">Active</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Nav Filled Starts -->
                <section id="nav-filled">
                    <div class="row pt-1">
                        <div class="col-sm-12">
                             <section class="card">
                                 <div class="card-content">


                                    <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="contract-tab-fill" data-toggle="tab" href="#contract-fill" role="tab"
                                                aria-controls="contract-fill" aria-selected="true">
                                                Contract
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="payment-tab-fill" data-toggle="tab" href="#payment-fill" role="tab"
                                                aria-controls="payment-fill" aria-selected="false">
                                                Payment
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="dispatch-tab-fill" data-toggle="tab" href="#dispatch-fill" role="tab"
                                                aria-controls="dispatch-fill" aria-selected="false">
                                                Dispatch
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="externalmembership-tab-fill" data-toggle="tab" href="#externalmembership-fill" role="tab"
                                                aria-controls="externalmembership-fill" aria-selected="false">
                                                External Membership
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pointentitlement-tab-fill" data-toggle="tab" href="#pointentitlement-fill" role="tab"
                                                aria-controls="pointentitlement-fill" aria-selected="false">
                                                Point Entitlement
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="requestnotes-tab-fill" data-toggle="tab" href="#requestnotes-fill" role="tab"
                                                aria-controls="requestnotes-fill" aria-selected="false">
                                                Status Update
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="remarks-tab-fill" data-toggle="tab" href="#remarks-fill" role="tab"
                                                aria-controls="remarks-fill" aria-selected="false">
                                                Remarks
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="email-tab-fill" data-toggle="tab" href="#email-fill" role="tab"
                                                aria-controls="email-fill" aria-selected="false">
                                                Email
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="sms-tab-fill" data-toggle="tab" href="#sms-fill" role="tab"
                                                aria-controls="sms-fill" aria-selected="false">
                                                SMS
                                                </a>
                                            </li>
                                            

                                        </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content pt-1">
                                        <div class="tab-pane active" id="contract-fill" role="tabpanel" aria-labelledby="contract-tab-fill">
                                            <div class="card-content">
                                                <div class="card-body card-dashboard">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Basic<i class="bx bx-pencil"></i></p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Package<i class="bx bx-pencil"></i></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <p class="col">Application No.</p>
                                                                <p class="col font-weight-bold black">1234 0000</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Agreement No.</p>
                                                                <p class="col font-weight-bold black">1234 1234</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Membership No.</p>
                                                                <p class="col font-weight-bold black">26578940000</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Application Date</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <p class="col">Agreement Date</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Membership Expiry</p>
                                                                <p class="col font-weight-bold black">01 April 2020</p>
                                                            </div>
                                                            <div class="row">
                                                                <p class="col">Membership Term</p>
                                                                <p class="col font-weight-bold black">30 Years</p>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                            <div class="col">
                                                                <div class="row">
                                                                    <p class="col">Package Type</p>
                                                                    <p class="col font-weight-bold black">Pearl Full</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Entitlment</p>
                                                                    <p class="col font-weight-bold black">Three Weekday, One Weekend</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p class="col">Entitlment Balance</p>
                                                                    <p class="col font-weight-bold black">RM 5,00</p>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>


                                <!-- Payment tab -->
                                <div class="tab-pane" id="payment-fill" role="tabpanel" aria-labelledby="payment-tab-fill">

                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Payment Schedule No<i class="bx bx-pencil"></i></p>
                                                </div>
                                                <div class="col">
                                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Installment<i class="bx bx-pencil"></i></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <p class="col">Installment Duration</p>
                                                        <p class="col font-weight-bold black">12 Month</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Package Price</p>
                                                        <p class="col font-weight-bold black">RM 5,000</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Addition</p>
                                                        <p class="col font-weight-bold black">RM 500</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Discount</p>
                                                        <p class="col font-weight-bold black">RM 50</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Nett Package Price</p>
                                                        <p class="col font-weight-bold black">RM 3,500</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Down Payment Paid</p>
                                                        <p class="col font-weight-bold black">RM 1,000</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Admin Charges</p>
                                                        <p class="col font-weight-bold black">RM 100</p>
                                                    </div>
                                                </div>

                                                    <div class="col">
                                                        <div class="row">
                                                            <p class="col">Payment to Date</p>
                                                            <p class="col font-weight-bold black">01 May 2020</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col">Balance Package Price</p>
                                                            <p class="col font-weight-bold black">RM 5,000</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col">Auto Accrue</p>
                                                            <p class="col font-weight-bold black">Accrue</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col">Paid (%)</p>
                                                            <p class="col font-weight-bold black">30%</p>
                                                        </div>
                                                        <div class="row">
                                                            <p class="col">Outstanding Amount</p>
                                                            <p class="col font-weight-bold black">RM 500</p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-content">
                                        <div class="card-body card-dashboard">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="h7 swvb-blue m-0 font-weight-bold my-auto">AMF<i class="bx bx-pencil"></i></p>
                                                </div>
                                                <div class="col">
                                                    <p class="h7 swvb-blue m-0 font-weight-bold">Outstanding Item<i class="bx bx-pencil"></i></p>
                                                </div>
                                                <div class="col">
                                                    <a href="{{ url('/membership/new') }}" type="button" class="btn btn-primary mb-3">Pay Now</a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <p class="col">Payment Type</p>
                                                        <p class="col font-weight-bold black">Credit Card</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Next Payment Due</p>
                                                        <p class="col font-weight-bold black">01 May 2020</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Auto Accrue</p>
                                                        <p class="col font-weight-bold black">Accrue</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="col">Outstanding Amount</p>
                                                        <p class="col font-weight-bold black">RM 500</p>
                                                    </div>
                                                </div>

                                                    <div class="col">
                                                        <div class="card-body card-dashboard">
                                                            <div class="table-responsive">
                                                                <table class="table leads-all">
                                                                    <thead class="bg-swvb-dark">
                                                                        <tr>
                                                                            <th></th>
                                                                            <th class="text-white">Outstanding Item</th>
                                                                            <th class="text-white">Outstanding Amount</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><fieldset>
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox" class="checkbox-input" id="checkbox101">
                                                                                    <label for="checkbox101"></label>
                                                                                </div>
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>Item 01</td>
                                                                            <td>RM 1,000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><fieldset>
                                                                                <div class="checkbox">
                                                                                    <input type="checkbox" class="checkbox-input" id="checkbox120">
                                                                                    <label for="checkbox120"></label>
                                                                                </div>
                                                                                </fieldset>
                                                                            </td>
                                                                            <td>Overpayment</td>
                                                                            <td>RM 500</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="row pt-1">
                                                <div class="col">
                                                    <div class="rol">
                                                        <p class="h7 swvb-blue font-weight-bold col">Credit Card<button class="btn btn-primary round float-right mb-1" data-toggle="modal" data-target="#inlineForm5">Add Credit Card</button></p>
                                                        
                                                    </div>
                                                    <div class="table-responsive">
                                                        <table class="table leads-all">
                                                            <thead class="bg-swvb-dark">
                                                                <tr>
                                                                    <th></th>
                                                                    <th class="text-white">Card Type</th>
                                                                    <th class="text-white">Card Issuer</th>
                                                                    <th class="text-white">Name on Card</th>
                                                                    <th class="text-white">Expiry</th>
                                                                    <th class="text-white">For</th>
                                                                    <th class="text-white">Purpose</th>
                                                                    <th class="text-white">Status</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><fieldset>
                                                                        <div class="checkbox">
                                                                            <input type="checkbox" class="checkbox-input" id="checkbox101">
                                                                            <label for="checkbox101"></label>
                                                                        </div>
                                                                        </fieldset>
                                                                    </td>
                                                                    <td>Item 01</td>
                                                                    <td>RM 1,000</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>AMF</td>
                                                                    <td><button class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#inlineForm">Edit</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><fieldset>
                                                                        <div class="checkbox">
                                                                            <input type="checkbox" class="checkbox-input" id="checkbox120">
                                                                            <label for="checkbox120"></label>
                                                                        </div>
                                                                        </fieldset>
                                                                    </td>
                                                                    <td>Overpayment</td>
                                                                    <td>RM 500</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Installment</td>
                                                                    <td><button class="btn btn-outline-primary round mr-1 mb-1" data-toggle="modal" data-target="#inlineForm">Edit</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>    


                            <!-- Dispatch tab -->
                            <div class="tab-pane" id="dispatch-fill" role="tabpanel" aria-labelledby="dispatch-tab-fill">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Mode</th>
                                                    <th class="text-white">Courier Agent</th>
                                                    <th class="text-white">Consignment No.</th>
                                                    <th class="text-white">Dispatch Date</th>
                                                    <th class="text-white">Dispatch Item</th>
                                                    <th class="text-white">Date Delivered</th>
                                                    <th class="text-white">Status</th>
                                                    <th class="text-white">Remarks</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode A</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>APPROVE</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode B</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>PENDING</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode A</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>APPROVE</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode B</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>PENDING</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode A</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>APPROVE</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode B</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>APPROVE</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode B</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>APPROVE</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                                <tr>
                                                    <td>1234 0000</td>
                                                    <td>Mode B</td>
                                                    <td>01 April 2020</td>
                                                    <td>Item 01</td>
                                                    <td>PENDING</td>
                                                    <td>Your Remarks</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- External Membership -->
                            <div class="tab-pane" id="externalmembership-fill" role="tabpanel" aria-labelledby="externalmembership-tab-fill">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Entity</th>
                                                    <th class="text-white">Membership No.</th>
                                                    <th class="text-white">Start Date</th>
                                                    <th class="text-white">Expiry Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>011</td>
                                                    <td>26504070000</td>
                                                    <td>01 June 2020</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                                <tr>
                                                    <td>012</td>
                                                    <td>26504070000</td>
                                                    <td>01 June 2020</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                                <tr>
                                                    <td>011</td>
                                                    <td>26504070000</td>
                                                    <td>01 June 2020</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                                <tr>
                                                    <td>012</td>
                                                    <td>26504070000</td>
                                                    <td>01 June 2020</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                                <tr>
                                                    <td>011</td>
                                                    <td>26504070000</td>
                                                    <td>01 June 2020</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                                <tr>
                                                    <td>012</td>
                                                    <td>26504070000</td>
                                                    <td>01 June 2020</td>
                                                    <td>01 June 2020</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>

                                
                            <!-- Point Entitlement -->
                            <div class="tab-pane" id="pointentitlement-fill" role="tabpanel" aria-labelledby="pointentitlement-tab-fill">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Amount Transacted</th>
                                                    <th class="text-white">Date of Transaction</th>
                                                    <th class="text-white">Description</th>
                                                    <th class="text-white">Performed by</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>RM 1000</td>
                                                    <td>01 June 2020</td>
                                                    <td>Online Transfer</td>
                                                    <td>Chris</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 1000</td>
                                                    <td>01 June 2020</td>
                                                    <td>Bank in</td>
                                                    <td>Chris</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 1000</td>
                                                    <td>01 June 2020</td>
                                                    <td>Online Transfer</td>
                                                    <td>Chris</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 1000</td>
                                                    <td>01 June 2020</td>
                                                    <td>Bank in</td>
                                                    <td>Chris</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 1000</td>
                                                    <td>01 June 2020</td>
                                                    <td>Online Transfer</td>
                                                    <td>Chris</td>
                                                </tr>
                                                <tr>
                                                    <td>RM 1000</td>
                                                    <td>01 June 2020</td>
                                                    <td>Bank in</td>
                                                    <td>Chris</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="px-2">
                                        {{-- <a href="{{asset('leads/new')}}" class="btn btn-outline-primary round mr-1 mb-1">Add New Notes</a>
                                         --}}
                                    </div>
                                </div>
                                
                            </div>

                            <!-- Status Update -->
                            <div class="tab-pane" id="requestnotes-fill" role="tabpanel" aria-labelledby="requestnotes-tab-fill">
                                <div class="card-body card-dashboard">
                                  <div class="row pt-1">
                                      <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Status Update History</p>
                                       </div>
                                   </div>

                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Type</th>
                                                    <th class="text-white">Request Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Type A</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                                <tr>
                                                    <td>Type B</td>
                                                    <td>01 June 2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Notes</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Name</p>
                                                <p class="col font-weight-bold black">Chris</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Date & Time</p>
                                                <p class="col font-weight-bold black">23 June 2020, 12:15pm</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Note</p>
                                                <p class="col font-weight-bold black">Your Notes Here</p>
                                            </div>
                                            
                                        </div>
                                    </div>

                                  
                                </div>
                                
                            </div>

                             <!-- Remarks -->
                             <div class="tab-pane" id="remarks-fill" role="tabpanel" aria-labelledby="remarks-tab-fill">
                                <div class="card-body card-dashboard">
                                  
                                    <div class="row pt-1">
                                        <div class="col">
                                            <p class="h7 swvb-blue m-0 font-weight-bold my-auto pb-2">Notes</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <p class="col">Name</p>
                                                <p class="col font-weight-bold black">Chris</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Date & Time</p>
                                                <p class="col font-weight-bold black">23 June 2020, 12:15pm</p>
                                            </div>
                                            <div class="row">
                                                <p class="col">Note</p>
                                                <p class="col font-weight-bold black">Your Notes Here</p>
                                            </div>
                                            
                                        </div>
                                    </div>

                                  
                                </div>
                                
                            </div>


                            <!-- Email tab -->
                            <div class="tab-pane" id="email-fill" role="tabpanel" aria-labelledby="email-tab-fill">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Item</th>
                                                    <th class="text-white">Email</th>
                                                    <th class="text-white">Send Date</th>
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

                            <!-- SMS tab -->
                            <div class="tab-pane" id="sms-fill" role="tabpanel" aria-labelledby="sms-tab-fill">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Item</th>
                                                    <th class="text-white">Mobile No.</th>
                                                    <th class="text-white">Send Date</th>
                                                    
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

                            <!-- Incentive tab -->
                            <div class="tab-pane" id="incentives-fill" role="tabpanel" aria-labelledby="incentives-tab-fill">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table leads-all">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th class="text-white">Date</th>
                                                    <th class="text-white">Event</th>
                                                    <th class="text-white">Incentive</th>
                                                    <th class="text-white">Validity</th>
                                                    
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
                    </div>
                </section>
            </div>
            </div>
        </div>
        </div>
        </div>
        
        <div class="col-md-4 float-right-top">
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white"> Menu</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                       
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col">
                                        <button type="button" class="w-100 btn btn-primary" data-toggle="modal" data-target="#inlineForm">
                                        Update Status
                                        </button>

                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col text-align-center">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">Account Statement</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/installment/amfall') }}" type="button" class="w-100 btn btn-primary ">AMF Schedule</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/installment') }}" type="button" class="w-100 btn btn-primary ">Installment Schedule</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/membership/em') }}" type="button" class="w-100 btn btn-primary ">Point/Entitlement Management</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/membership/new') }}" type="button" class="w-100 btn btn-primary ">View Previous Members</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/invoice/{inv_id}/details') }}" type="button" class="w-100 btn btn-primary "> Invoice</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/receipt/details') }}" type="button" class="w-100 btn btn-primary "> Receipt</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/debitnote/details') }}" type="button" class="w-100 btn btn-primary "> Debit Note</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/creditnote/{inv_id}/details') }}" type="button" class="w-100 btn btn-primary "> Credit Note</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/refund/details') }}" type="button" class="w-100 btn btn-primary "> Refund</a>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <a href="{{ url('/contra/details') }}" type="button" class="w-100 btn btn-primary "> Contra</a>
                                    </div>
                                </div>
                                
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Assignments</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                 <div class="row">
                                    <div class="col">
                                        <div class="row pt-1">
                                            <p class="col">Application No.</p>
                                            <p class="col font-weight-bold black">1234 0000</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Application Date</p>
                                            <p class="col font-weight-bold black">01 April 2020</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Agreement No.</p>
                                            <p class="col font-weight-bold black">1234 1234</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Agreement Date</p>
                                            <p class="col font-weight-bold black">01 April 2020</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Membership No.</p>
                                            <p class="col font-weight-bold black">26578940000</p>
                                        </div>
                                        <div class="row pt-1">
                                            <p class="col">Membership Term</p>
                                            <p class="col font-weight-bold black">11 April 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="card">
                <div class="card-header bg-swvb-cyan">
                    <h4 class="card-title  text-white">Documents</h4>
                </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="col">
                                <div class="row pt-1">
                                    <div class="col">
                                        <p>abc.jpg</p>
                                        <p>Invoice Detail 23/6/2020</p>
                                    </div>
                                    <div class="col">
                                        <i class="bx bx-download"></i>
                                        <i class="bx bx-trash"></i>
                                    </div>
                                </div>
                                <hr>
                                <div class="row pt-1">
                                    <div class="col">
                                        <p>abc.jpg</p>
                                        <p>Invoice Detail 23/6/2020</p>
                                    </div>
                                    <div class="col">
                                        <i class="bx bx-download"></i>
                                        <i class="bx bx-trash"></i>
                                    </div>
                                </div>
                                <hr>
                                    <div class="row pt-1">
                                        <div class="col">
                                        <a href="{{ url('/membership/new') }}" type="button" class="btn btn-primary ">Upload</a>
                                        </div>
                                    </div>
    
                            </div>
                        </div>
                    </div>
        </div>

    </div>
</section>
<!-- Nav Filled Ends -->


<!-- pop out modal box for update status (status : active) -->
<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content"> 
                <div class="modal-header bg-swvb-cyan">
                    <h4 class="modal-title text-white" id="myModalLabel33">UPDATE STATUS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                    </button>
                </div>

            <!-- form for status of active -->
            <form action="{{route('members.redirect')}}" method="GET" novalidate>
                            @csrf
                <div class="modal-body">
                    <div class="form-group controls">
                        <div class="radio mr-1">
                            <input type="radio" name="Deceased" id="d1" value="d1" checked="" required>
                            <label for="d1">Deceased</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Transfer" value="Transfer" checked="" >
                            <label for="Transfer">Transfer</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Downgrade" value="Downgrade" checked="">
                            <label for="Downgrade">Up/Downgrade</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Cancellation" value="Cancellation" checked="">
                            <label for="Cancellation">Cancellation</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Repurchase" value="Repurchase" checked="">
                            <label for="Repurchase">Repurchase</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="Suspend" value="Suspend" checked="">
                            <label for="female1">Suspend</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="Deceased" id="act" value="Suspend" checked="">
                            <label for="act">Activation</label>
                        </div>

                        <div class="form-group controls">
                            <label class="d-block">Waive Activation Fee</label>
                            <select name="sp" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                                <option value="" disabled selected></option>
                                <option value="" >Yes</option>
                                <option value="" >No</option>
                            </select>
                        </div>

                        <div class="form-group controls">
                            <label class="d-block">Waive Activation Fee Percentage</label>
                            <select name="sp" class="custom-select form-control" data-validation-required-message="Please select a package type" required>
                            <option value="" disabled>--</option>
                                <option value="" disabled selected></option>
                                <option value="" >100%</option>                            
                            </select>
                        </div>
                        <div class="px-2">
                            <button class="btn btn-outline-primary round mr-1 mb-1" onclick="redirect()">Save</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
                      
    <div class="modal-footer">
        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
            <i class="bx bx-x d-block d-sm-none"></i>
            <span class="d-none d-sm-block" onclick="redirect()">Save</span>
        </button>

    </div>
    

</div>



<!--update status Modal for status: be back-->
<div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Update Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Withdrawal</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Email Address" class="form-control">
                    </div>
                    <label>Cancellation</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Password" class="form-control">
                    </div>
                    <label>Pending</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Email Address" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="inlineForm3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">Update Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Terminate</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Email Address" class="form-control">
                    </div>
                    <label>Active</label>
                    <div class="form-group">
                        <input type="radio" placeholder="Password" class="form-control">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="inlineForm5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Credit Card</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Card Holder</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card holder" class="form-control">
                    </div>
                    <label>Card Type</label>
                    <div class="form-group">
                        <input type="name" placeholder="Type of card" class="form-control">
                    </div>
                    <label>Card Issuer</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card issuer" class="form-control">
                    </div>
                    <label>Name on Card</label>
                    <div class="form-group">
                        <input type="name" placeholder="Name on card" class="form-control">
                    </div>
                    <label>CVV</label>
                    <div class="form-group">
                        <input type="number" placeholder="CVV" class="form-control">
                    </div>
                    <label>Expiry Date</label>
                    <div class="form-group">
                        <input type="date" value="01 June 2020" class="form-control">
                    </div>
                    <label>Card No.</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card Number" class="form-control">
                    </div>
                    <label>Remarks</label>
                    <div class="form-gro up">
                        <input type="name" placeholder="Remarks" class="form-control">
                    </div>
                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" placeholder="Status" class="form-control">
                    </div>
                    

                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--update status Modal for status: Suspend-->
<div class="modal fade text-left" id="inlineForm5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Credit Card</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Card Holder</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card holder" class="form-control">
                    </div>
                    <label>Card Type</label>
                    <div class="form-group">
                        <input type="name" placeholder="Type of card" class="form-control">
                    </div>
                    <label>Card Issuer</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card issuer" class="form-control">
                    </div>
                    <label>Name on Card</label>
                    <div class="form-group">
                        <input type="name" placeholder="Name on card" class="form-control">
                    </div>
                    <label>CVV</label>
                    <div class="form-group">
                        <input type="number" placeholder="CVV" class="form-control">
                    </div>
                    <label>Expiry Date</label>
                    <div class="form-group">
                        <input type="date" value="01 June 2020" class="form-control">
                    </div>
                    <label>Card No.</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card Number" class="form-control">
                    </div>
                    <label>Remarks</label>
                    <div class="form-group">
                        <input type="name" placeholder="Remarks" class="form-control">
                    </div>
                    <label>Status</label>
                    <div class="form-group">
                        <input type="text" placeholder="Status" class="form-control">
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">login</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--add new secondary member-->
<div class="modal fade text-left" id="newsecondmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-swvb-blue">
                <h4 class="modal-title text-white" id="myModalLabel33">New Secondary Member/Nominees</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="bx bx-x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Salutation</label>
                    <div class="form-group">
                        <input type="text" placeholder="Card holder" class="form-control">
                    </div>
                    <label>Name</label>
                    <div class="form-group">
                        <input type="name" placeholder="Type of card" class="form-control">
                    </div>
                    <label>Contact</label>
                    <div class="form-group">
                        <input type="number" placeholder="Card issuer" class="form-control">
                    </div>
                    <label>Relationship</label>
                    <div class="form-group">
                        <input type="text" placeholder="Name on card" class="form-control">
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
