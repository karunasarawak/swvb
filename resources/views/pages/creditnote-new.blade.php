@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','New Credit Note')

{{-- page style --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/membership.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
<link href="{{asset('assets/css/invoice-style.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->
<section>
    <div class="row" x-data="{name: ''}">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{route('creditnote.store')}}" novalidate>
                        @csrf
                        <input type="hidden" name="credit_no" value="10001">
                        <input type="hidden" name="status" value="1">
                        <input type="hidden" name="issue_date" value="<?php
                            date_default_timezone_set('Asia/Kuala_Lumpur');
                            $current_date = date('Y-m-d');
                            echo $current_date;
                        ?>">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Member</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="mbrship_id">Membership No</label>
                                                <select name="mbrship_id" id="mbrship_id" class="custom-select form-control" data-validation-required-message="Please select a member" x-ref="selectBox" @change="name=$refs.selectBox.options[$refs.selectBox.selectedIndex].dataset.name" required>
                                                    <option value="" disabled selected>Membership No</option>
                                                    @if(isset($payload))
                                                        @foreach($payload['memberships'] as $membership)
                                                    <option value="{{$membership->mbrship_id}}" data-name="{{$membership->lead->name}}">{{$membership->mbrship_no}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name" id="name" x-bind:value="name" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Invoice Details</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="cn_type">CN Type</label>
                                                <select name="cn_type_id" id="cn_type" class="custom-select form-control" data-validation-required-message="Please select a member" required>
                                                    @if(isset($payload))
                                                        @foreach($payload['creditNoteTypes'] as $creditNoteType)
                                                    <option value="{{$creditNoteType->cn_type_id}}">{{$creditNoteType->cn_type}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="controls">
                                                <label for="remark">Remark</label>
                                                <textarea class="form-control" id="remark" name="cn_remarks"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-1">
                                    <div class="col">
                                        <p class="h6 swvb-blue m-0 font-weight-bold my-auto pb-2">Subject To</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <table class="table" id="data-table">
                                            <thead class="bg-swvb-dark">
                                                <tr>
                                                    <th></th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Item</th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Date</th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Description</th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Amount</th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Paid</th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Balance</th>
                                                    <th class="h6 text-white font-weight-bold my-auto align-middle">Credit Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                    <button type="submit" class="btn btn-primary float-right m-1" id="btn_create">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>


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
<script src="{{asset('js/scripts/forms/validation/form-validation.js')}}"></script>
<script src="{{asset('assets/js/tbl_row_update.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
@endsection
