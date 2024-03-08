<head>
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <style>
        @include('main');
    </style>
</head>
@extends('auth.master')
@section('cont')
    <div class="textarbic">

        <div class="one">
            <a href="/getPatient" class="khader" style="padding: 0">
                <div style="background-color:#82d1e1; height: 70px  ">
                    <h5>قائمة المرضى</h5>

                </div>
                <hr>
            </a>
        </div>
        <div class="one">
            <a href="/createPatient" class="khader" style="padding: 0">
                <div style="background-color:rgb(241 170 175); height: 70px">
                    <h5>إضافة مريض</h5>
                </div>
                <hr>

            </a>
        </div>

                <div class="one">
                    <div>
                        <h5 style="margin-bottom: 0px; font-weight:bold; margin-left:-25px">ssss</h5>
                        <p style="margin-left: -15px;">العدد الكلي للمرضى </p>
                    </div>
                </div>
    </div>
@endsection
