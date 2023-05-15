@extends('layouts.master')

@section('title', '- Biodiversity')

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
            <h1 class="title">{{ trans('navbar.about') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('knp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.about') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.biodiversity') }}
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
                <x-about-sidebar />
            </div>

            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.biodiversity') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/knp-imgs/biodiversity.webp') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('about.biodiversity-p1') }}</p>
                        <p><strong>{{ trans('about.biodiversity-p2') }}</strong></p>
                        <ul>
                            <li>{{ trans('about.biodiversity-li1') }}</li>
                            <li>{{ trans('about.biodiversity-li2') }}</li>
                            <li>{{ trans('about.biodiversity-li3') }}</li>
                            <li>{{ trans('about.biodiversity-li4') }}</li>
                            <li>{{ trans('about.biodiversity-li5') }}</li>
                            <li>{{ trans('about.biodiversity-li6') }}</li>
                            <li>{{ trans('about.biodiversity-li7') }}</li>
                            <li>{{ trans('about.biodiversity-li8') }}</li>
                            <li>{{ trans('about.biodiversity-li9') }}</li>
                            <li>{{ trans('about.biodiversity-li10') }}</li>
                            <li>{{ trans('about.biodiversity-li11') }}</li>
                            <li>{{ trans('about.biodiversity-li12') }}</li>
                            <li>{{ trans('about.biodiversity-li13') }}</li>
                            <li>{{ trans('about.biodiversity-li14') }}</li>
                            <li>{{ trans('about.biodiversity-li15') }}</li>
                            <li>{{ trans('about.biodiversity-li16') }}</li>
                            <li>{{ trans('about.biodiversity-li17') }}</li>
                            <li>{{ trans('about.biodiversity-li18') }}</li>
                            <li>{{ trans('about.biodiversity-li19') }}</li>
                            <li>{{ trans('about.biodiversity-li20') }}</li>
                            <li>{{ trans('about.biodiversity-li21') }}</li>
                            <li>{{ trans('about.biodiversity-li22') }}</li>
                            <li>{{ trans('about.biodiversity-li23') }}</li>
                            <li>{{ trans('about.biodiversity-li24') }}</li>
                            <li>{{ trans('about.biodiversity-li25') }}</li>
                            <li>{{ trans('about.biodiversity-li26') }}</li>
                            <li>{{ trans('about.biodiversity-li27') }}</li>
                            <li>{{ trans('about.biodiversity-li28') }}</li>
                            <li>{{ trans('about.biodiversity-li29') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
