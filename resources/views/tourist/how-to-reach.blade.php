@extends('layouts.master')

@section('title', '- How to Reach')

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
                            {{ trans('navbar.how-to-reach') }}
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
                    <h2>{{ trans('navbar.how-to-reach') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/knp-imgs/how-to-reach.webp') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.reach-p1') }}</p>
                        <p><strong>{{ trans('tourist.reach-p2-strong') }}</strong>{{ trans('tourist.reach-p2') }}</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center ">
                                <thead>
                                <tr>
                                    <th class="text-center">{{ trans('tourist.tblA-th1') }}</th>
                                    <th class="text-center">{{ trans('tourist.tblA-th2') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ trans('tourist.tblA-tr1-td1') }}</td>
                                    <td>{{ trans('tourist.tblA-tr1-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblA-tr2-td1') }}</td>
                                    <td>{{ trans('tourist.tblA-tr2-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblA-tr3-td1') }}</td>
                                    <td>{{ trans('tourist.tblA-tr3-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblA-tr4-td1') }}</td>
                                    <td>{{ trans('tourist.tblA-tr4-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblA-tr5-td1') }}</td>
                                    <td>{{ trans('tourist.tblA-tr5-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblA-tr6-td1') }}</td>
                                    <td>{{ trans('tourist.tblA-tr6-td2') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <p><strong>{{ trans('tourist.reach-p3-strong') }}</strong>{{ trans('tourist.reach-p3') }}</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center ">
                                <thead>
                                <tr>
                                    <th class="text-center">{{ trans('tourist.tblB-th1') }}</th>
                                    <th class="text-center">{{ trans('tourist.tblB-th2') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ trans('tourist.tblB-tr1-td1') }}</td>
                                    <td>{{ trans('tourist.tblB-tr1-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblB-tr2-td1') }}</td>
                                    <td>{{ trans('tourist.tblB-tr2-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblB-tr3-td1') }}</td>
                                    <td>{{ trans('tourist.tblB-tr3-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblB-tr4-td1') }}</td>
                                    <td>{{ trans('tourist.tblB-tr4-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblB-tr5-td1') }}</td>
                                    <td>{{ trans('tourist.tblB-tr5-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblB-tr6-td1') }}</td>
                                    <td>{{ trans('tourist.tblB-tr6-td2') }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <p><strong>{{ trans('tourist.reach-p4-strong') }}</strong>{{ trans('tourist.reach-p4') }}</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover text-center ">
                                <thead>
                                <tr>
                                    <th class="text-center">{{ trans('tourist.tblC-th1') }}</th>
                                    <th class="text-center">{{ trans('tourist.tblC-th2') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ trans('tourist.tblC-tr1-td1') }}</td>
                                    <td>{{ trans('tourist.tblC-tr1-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblC-tr2-td1') }}</td>
                                    <td>{{ trans('tourist.tblC-tr2-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblC-tr3-td1') }}</td>
                                    <td>{{ trans('tourist.tblC-tr3-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblC-tr4-td1') }}</td>
                                    <td>{{ trans('tourist.tblC-tr4-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblC-tr5-td1') }}</td>
                                    <td>{{ trans('tourist.tblC-tr5-td2') }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('tourist.tblC-tr6-td1') }}</td>
                                    <td>{{ trans('tourist.tblC-tr6-td2') }}</td>
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
<!-- ./ Service Section -->
@endsection
