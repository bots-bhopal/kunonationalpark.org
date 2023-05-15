@extends('layouts.master')

@section('title', '- Location')

@push('css')
    <style>
        .green-bg:hover{
            color: #000;
            font-weight: 600;
        }
    </style>
@endpush

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.tourist-information') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('knp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.tourist-information') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.location') }}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Service Section -->
<div id="services-section" class="padding pt-xs-60">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-12 offset-lg-1">
                <x-tourist-sidebar />
            </div>

            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.location') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/knp-imgs/location.webp') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.location-p1') }}</p>
                        <ul>
                            <li class="mb-3">{{ trans('tourist.location-li1') }}</li>
                            <li class="mb-3">{{ trans('tourist.location-li2') }}</li>
                        </ul>
                        <hr/>
                        <h4 class="text-center">{{ trans('tourist.tbl-head') }}</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center ">
                                <thead>
                                    <tr>
                                        <th class="text-center">{{ trans('tourist.tbl-th1') }}</th>
                                        <th class="text-center">{{ trans('tourist.tbl-th2') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ trans('tourist.tbl-tr1-td1') }} <br> {{ trans('tourist.tbl-tr1-br1') }}</td>
                                        <td>{{ trans('tourist.tbl-tr1-td2') }} <br> {{ trans('tourist.tbl-tr1-br2') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('tourist.tbl-tr2-td1') }} <br>{{ trans('tourist.tbl-tr2-br1') }}</td>
                                        <td>{{ trans('tourist.tbl-tr2-td2') }} <br>{{ trans('tourist.tbl-tr2-br2') }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ trans('tourist.tbl-tr3-td1') }} <br>{{ trans('tourist.tbl-tr3-br1') }}</td>
                                        <td>{{ trans('tourist.tbl-tr3-td2') }} <br>{{ trans('tourist.tbl-tr3-br2') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
