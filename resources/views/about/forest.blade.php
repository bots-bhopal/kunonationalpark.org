@extends('layouts.master')

@section('title', '- Forest & Vegetation')

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
                            {{ trans('navbar.forest') }}
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
                    <h2>{{ trans('navbar.forest') }}</h2>
                </div>

                <div class="full-pic">
                    <figure>
                        <img src="{{ asset('public/assets/images/knp-imgs/forest.webp') }}" alt="">
                    </figure>
                </div>

                <div class="text-box mt-40">
                    <div class="text-content text-justify">
                        <p>{{ trans('about.forest-p1') }}</p>
                        <ul>
                            <li>
                                <strong>{{ trans('about.forest-ul1') }}</strong>
                                <ul>
                                    <li>
                                        {{ trans('about.forest-ul1-li1') }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>{{ trans('about.forest-ul2') }}</strong>
                                <ul>
                                    <li>
                                        {{ trans('about.forest-ul2-li1') }}
                                    </li>
                                    <li>
                                        {{ trans('about.forest-ul2-li2') }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>{{ trans('about.forest-ul3') }}</strong>
                                <ul>
                                    <li>
                                        {{ trans('about.forest-ul3-li1') }}
                                    </li>
                                    <li>
                                        {{ trans('about.forest-ul3-li2') }}
                                    </li>
                                    <li>
                                        {{ trans('about.forest-ul3-li3') }}
                                    </li>
                                    <li>
                                        {{ trans('about.forest-ul3-li4') }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>{{ trans('about.forest-ul4') }}</strong>
                                <ul>
                                    <li>
                                        {{ trans('about.forest-ul4-li1') }}
                                    </li>
                                    <li>
                                        {{ trans('about.forest-ul4-li2') }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>{{ trans('about.forest-ul5') }}</strong>
                                <ul>
                                    <li>
                                        {{ trans('about.forest-ul5-li1') }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <strong>{{ trans('about.forest-ul6') }}</strong>
                                <ul>
                                    <li>
                                        {{ trans('about.forest-ul6-li1') }}
                                    </li>
                                    <li>
                                        {{ trans('about.forest-ul6-li2') }}
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <p>{{ trans('about.forest-p2') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
