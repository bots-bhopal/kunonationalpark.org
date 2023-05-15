@extends('layouts.master')

@section('title', '- Animal Management')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.knp-management') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('knp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.knp-management') }}
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.goals') }}
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
                <x-management-sidebar />
            </div>

            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="box-title mb-20">
                    <h2>{{ trans('navbar.goals') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/knp-imgs/goals.webp') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <h4>{{ trans('management.goals-h41') }}</h4>
                        <p>{{ trans('management.goals-h41-p1') }}</p>
                        <h4>{{ trans('management.goals-h42') }}</h4>
                        <p>{{ trans('management.goals-h42-p1') }}</p>
                        <p>{{ trans('management.goals-h42-p2') }}</p>
                        <ul>
                            <li class="mb-3">{{ trans('management.goals-li1') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li2') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li3') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li4') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li5') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li6') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li7') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li8') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li9') }}</li>
                            <li class="mb-3">{{ trans('management.goals-li10') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
