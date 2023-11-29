@extends('admin_panel.layout.master')
@section('page_title', 'Dashboard')
@section('dashboard_menu_active', 'active')
@section('custom_style')
    <style>
        .statistic p {
            margin-bottom: 0px;
        }
    </style>
@endsection
@section('content')

    {{-- @include('admin_panel._partials.dashboard.box') --}}

    {{-- <div class="row text-white statistic" style="">
        <div class="col-12">
            <div class="p-3" style="background-color: #184e77">
                <div class="row">
                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="d-flex justify-content-between">
                            <i class="fa-regular fa-user"></i>
                            <h6 class="text-end">PROFILE</h6>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <p>Teachers Profile:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Staffs Profile:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Students Profile:</p>
                            <p class="text-end">0</p>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="d-flex justify-content-between">
                            <i class="fa-regular fa-calendar-days"></i>
                            <h6 class="text-end">TODAY'S ATTENDANCE</h6>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <p>Absent Staffs:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Present Students:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Absent Students:</p>
                            <p class="text-end">0</p>
                        </div>
                    </div>

                    <div class="col-md-3 mb-5 mb-md-0">
                        <div class="d-flex justify-content-between">
                            <i class="fa-regular fa-file-lines"></i>
                            <h6 class="text-end">STUDENTS FEES</h6>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <p>Receivable Fees:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Paid Fees:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Due Fees:</p>
                            <p class="text-end">0</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="d-flex justify-content-between">
                            <i class="fa-solid fa-chart-pie"></i>
                            <h6 class="text-end">THIS MONTH</h6>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            <p>Cash Received:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Cash Payment:</p>
                            <p class="text-end">0</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Balance:</p>
                            <p class="text-end">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('custom_js')
@endsection
