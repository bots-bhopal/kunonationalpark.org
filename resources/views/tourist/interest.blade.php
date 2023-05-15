@extends('layouts.master')

@section('title', '- Point of Interests')

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
                            {{ trans('navbar.interest') }}
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
                    <h2>{{ trans('navbar.interest') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/knp-imgs/interest.webp') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('tourist.interest-p1') }}</p>
                        <p><strong>{{ trans('tourist.interest-p2-strong') }}</strong> {{ trans('tourist.interest-p2') }}</p>
                        <p><strong>{{ trans('tourist.interest-p3-strong') }}</strong> {{ trans('tourist.interest-p3') }}</p>
                        <p><strong>{{ trans('tourist.interest-p4-strong') }}</strong> {{ trans('tourist.interest-p4') }}</p>
                        <p><strong>{{ trans('tourist.interest-p5-strong') }}</strong> {{ trans('tourist.interest-p5') }}</p>
                        <p><strong>{{ trans('tourist.interest-p6-strong') }}</strong> {{ trans('tourist.interest-p6') }}</p>
                        <p>{{ trans('tourist.interest-p6-br') }}</p>
                    </div>
                </div>
                <h4>{{ trans('tourist.interest-p7') }}</h4>
                <ul>
                    <li>{{ trans('tourist.interest-p7-li1') }}</li>
                    <li>{{ trans('tourist.interest-p7-li2') }}</li>
                    <li>{{ trans('tourist.interest-p7-li3') }}</li>
                    <li>{{ trans('tourist.interest-p7-li4') }}</li>
                    <li>{{ trans('tourist.interest-p7-li5') }}</li>
                    <li>{{ trans('tourist.interest-p7-li6') }}</li>
                    <li>{{ trans('tourist.interest-p7-li7') }}</li>
                    <li>{{ trans('tourist.interest-p7-li8') }}</li>
                    <li>{{ trans('tourist.interest-p7-li9') }}</li>
                    <li>{{ trans('tourist.interest-p7-li10') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ./ Service Section -->
@endsection
