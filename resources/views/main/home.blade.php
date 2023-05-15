@extends('layouts.master')

@section('title', '')

@push('css')
    <style>
        .btn-color-line:hover {
            background: #228b22 !important;
            color: #fff;
        }

        .client-avtar {
            border: 0px solid #228b22 !important;
        }

        #toast-container .toast-error {
            background-color: #dc3545;
            opacity: 1;
        }

        .hover-text:hover {
            color: #228b22;
        }

        .tooltip {
            z-index: 100 !important;
        }

        /* .tooltip-inner {
                max-width: 300px;
                padding: 3px 8px;
                color: #fff;
                text-align: center;
                background-color: #000;
                border-radius: 0.25rem;
                font-size: 18px;
                font-weight: 600;
            }
        */

    </style>
@endpush

@section('content')
    <!-- Main Banner -->
    <div class="main-banner banner_up">
        <div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
            <!-- START REVOLUTION SLIDER fullwidth mode -->
            <div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-128">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/welcome-kuno.webp') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title tp-resizeme " id="slide-128-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                            {{-- <div class="banner-text text-center">
                                <h3><span
                                        style="color:#f3973f">{{ trans('home.welcome') }}</span>{{ trans('home.knp') }}
                                </h3>
                                <p style="letter-spacing: 1px!important">{{ trans('home.knp-official') }}</p>
                                <h4>
                                    <p style="letter-spacing: 1px!important">{{ trans('home.slider-p1') }}</p>
                                </h4>
                                <a class="btn-text green-bg"
                                    href="{{ route('knp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div> --}}
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-129">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-1.webp') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title tp-resizeme " id="slide-129-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                            <div class="banner-text text-center">
                                <h3><span
                                        style="color:#f3973f">{{ trans('home.welcome') }}</span>{{ trans('home.knp') }}
                                </h3>
                                <p style="letter-spacing: 1px!important">{{ trans('home.knp-official') }}</p>
                                <h4>
                                    <p style="letter-spacing: 1px!important">{{ trans('home.slider-p1') }}</p>
                                </h4>
                                <a class="btn-text green-bg"
                                    href="{{ route('knp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-130" data-title="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-2.webp') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-130-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span
                                        style="color:#f3973f">{{ trans('home.welcome') }}</span>{{ trans('home.knp') }}
                                </h3>
                                <p style="letter-spacing: 1px!important">{{ trans('home.knp-official') }}</p>
                                <h4>
                                    <p style="letter-spacing: 1px!important">{{ trans('home.slider-p1') }}</p>
                                </h4>
                                <a class="btn-text green-bg"
                                    href="{{ route('knp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-131">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('public/assets/images/banner/slider-img-3.webp') }}" alt=""
                            class="rev-slidebg">
                        <!-- LAYERS -->
                        <div class="tp-caption Newspaper-Title   tp-resizeme " id="slide-131-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['center','center','center','center']" data-voffset="['0','0','0','0']"
                            data-fontsize="['50','50','50','30']" data-lineheight="['55','55','55','35']"
                            data-width="['600','600','600','420']" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                            data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="banner-text text-center">
                                <h3><span
                                        style="color: #f3973f">{{ trans('home.welcome') }}</span>{{ trans('home.knp') }}
                                </h3>
                                <p style="letter-spacing: 1px!important">{{ trans('home.knp-official') }}</p>
                                <h4>
                                    <p style="letter-spacing: 1px!important">{{ trans('home.slider-p1') }}</p>
                                </h4>
                                <a class="btn-text green-bg"
                                    href="{{ route('knp.about-introduction') }}">{{ trans('home.know') }}</a>
                            </div>
                        </div>
                    </li>
                    <!-- SLIDE  -->
                </ul>

                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!-- Main Banner End-->

    <!-- About Section -->
    <section class="busines_promo_wrapper__block padding ptb-xs-40">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="promor_wrap__block">
                        <h3>{{ trans('home.know-more-about') }}</h3>
                        <h2>{{ trans('home.knp-h2') }} <span>{{ trans('home.knp-h2-span') }}</span></h2>

                        <p class="text-justify">
                            {{ trans('home.about-p1') }}
                        </p>

                        <div class="text-center">
                            <a class="btn green-bg text-white"
                                href="{{ route('knp.about-introduction') }}">{{ trans('home.know') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 my-auto mt-sm-30 mt-xs-30 text-center">
                    <h3 class="documentary">{{ trans('home.documentary') }}</h3>
                    <h3 class="documentary-title">{{ trans('home.knp-h2') }} <span
                            class="documentary-span-title">{{ trans('home.knp-h2-span') }}</span></h3>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/6TEO0BFqQR0"
                        title="Kuno-National-Park" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Unique National Park -->
    <div class="padding ptb-xs-40 different-sec">
        <div class="container">
            <div class="row pb-30 text-center ">
                <div class="col-sm-12 mb-20">
                    <h2><span>{{ trans('home.what-makes') }}</span> {{ trans('home.kuno') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>
            <div class="row light-color">


                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    <div class="right-txt float-right">
                        <h3>{{ trans('home.vegetation') }}</h3>
                        <p>
                            {{ trans('home.vegetation-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </div>
                    <div class="right-txt float-right">
                        <h3>{{ trans('home.biodiversity') }}</h3>
                        <p>
                            {{ trans('home.biodiversity-p') }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 process mb-40">
                    <div class="icon-lf float-left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="right-txt float-right">
                        <h3>{{ trans('home.lion') }}</h3>
                        <p>
                            {{ trans('home.lion-p') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Unique National Park -->

    <!-- Quick Info Start -->
    <section id="choose_us" class="padding ptb-xs-40 pt-xs-0 overflow_hidden secondary_bg">
        <!-- half image background element -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-sm-30 mt-xs-30">
                    <h2 class="text-center">
                        <span>{{ trans('home.quick') }}</span> {{ trans('home.info') }}
                    </h2>
                    <span class="b-line"></span>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="media choose_box pb-4">
                                <div class="d-flex mr-3 mt-4 mt-sm-2 mt-xs-2">
                                    <img src="{{ asset('public/assets/images/info_icon/Plan your Visit.png') }}" width="60"
                                        height="60" />
                                </div>
                                <div class="media-body">
                                    <h4 class="mt-0">{{ trans('home.plan-your-visit') }}</h4>

                                    <p class="text-justify">
                                        {{ trans('home.plan-your-visit-p') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="media choose_box pb-5">
                                <div class="d-flex mr-3 mt-4 mt-sm-2 mt-xs-2">
                                    <img src="{{ asset('public/assets/images/info_icon/How to Reach.png') }}" width="60"
                                        height="60" />
                                </div>
                                <div class="media-body">
                                    <h4 class="mt-0">{{ trans('home.how-to-reach') }}</h4>
                                    <p class="text-justify">
                                        {{ trans('home.how-to-reach-p') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="media choose_box">
                                <div class="d-flex mr-3 mt-4 mt-sm-2 mt-xs-2">
                                    <img src="{{ asset('public/assets/images/info_icon/What to See.png') }}" width="60"
                                        height="60" />
                                </div>
                                <div class="media-body">
                                    <h4 class="mt-0">{{ trans('home.what-to-see') }}</h4>
                                    <p class="text-justify">
                                        {{ trans('home.what-to-see-p') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="media choose_box pb-3">
                                <div class="d-flex mr-3 mt-4 mt-sm-2 mt-xs-2">
                                    <img src="{{ asset('public/assets/images/info_icon/Stay.png') }}" width="60"
                                        height="60" />
                                </div>
                                <div class="media-body">
                                    <h4 class="mt-0">{{ trans('home.stay') }}</h4>
                                    <p class="text-justify">
                                        {{ trans('home.stay-p') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .col-* -->
            </div>
        </div>
    </section>
    <!-- End Quick Info -->

    <!--Visit Section start -->
    <section class="available_wrap__block">
        <div class="available_content__block text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-30" style="line-height: 51px;">
                            {{ trans('home.visit-p') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visit Section end -->

    <!--Gallery Section -->
    <section class="ptb-60 ptb-xs-40 gray-bg">
        <div class="container">
            <div class="row pb-30 text-center">
                <div class="col-sm-12 mb-20">
                    <h2><span>{{ trans('home.our') }} </span>{{ trans('home.gallery') }}</h2>
                    <span class="b-line"></span>
                </div>
            </div>

            <div class="row">
                <!-- Post Item -->
                <div class="col-lg-12 mx-auto">
                    <div class="carousel-wrap">
                        <div class="image-block owl-carousel gallery-carousel">
                            @forelse($images as $image)
                                <div class="item image-box">
                                    <figure class="image">
                                        <img src="{{ asset('public/storage/gallery/' . $image->filename) }}">
                                        <div class="overlay-box">
                                            <ul class="option-box">
                                                <li><a href="{{ asset('public/storage/gallery/' . $image->filename) }}"
                                                        class="lightbox-image" data-fancybox="image"><span
                                                            class="fa fa-search"></span></a></li>
                                            </ul>
                                        </div>
                                    </figure>
                                </div>
                            @empty
                                <div class="item image-box">
                                    <figure class="image">
                                        <img src="{{ asset('public/assets/images/Image-Not-Found.jpg') }}" />
                                    </figure>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- End Post Item -->
            </div>
        </div>

        <div class="text-center mt-20">
            <a class="btn-text green-bg hover-text"
                href="{{ route('knp.gallery') }}">{{ trans('home.see-more') }}</a>
        </div>
    </section>
    <!--End Gallery Section -->

    <!-- News Section -->
    <section id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
                    <div class="row pb-30 text-center">
                        <div class="col-sm-12 mb-20">
                            <h2><span>{{ trans('home.latest') }} </span>{{ trans('home.news') }}</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>

                    <div class="row">
                        @forelse ($newses as $news)
                            <div class="col-md-6 col-lg-4 mb-xs-30">
                                <div class="image-block blog-post">
                                    <div class="post-media">
                                        <div class="images image-box">
                                            <figure class="image">
                                                @php
                                                    $path = public_path() . '/storage/news_image/' . $news->image;
                                                @endphp

                                                @if (!empty($news['image']) && file_exists($path))
                                                    <img src="{{ asset('public/storage/news_image/' . $news->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('public/assets/images/image-gallery.jpg') }}"
                                                        class="img-responsive rounded" alt="image">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="post-header">
                                        <h4><a
                                                href="{{ route('knp.news-details', $news->slug) }}">{!! Str::limit($news->title, 50, '...') !!}</a>
                                        </h4>
                                    </div>

                                    <div class="post-meta">
                                        <span class="badge badge-pill badge-mix" style="font-size: 12px; font-weight: 600; text-transform: capitalize;">Posted On: {{ date('d-M-Y', strtotime($news->date)) }}</span>
                                    </div>

                                    <div class="post-entry">
                                        <p class="text-justify">
                                            {!! strip_tags(Str::limit($news->description, 100, '...')) !!}
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left">
                                        <a href="{{ route('knp.news-details', $news->slug) }}"
                                            class="btn btn-md btn-color-line ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                <div class="p-2 text-center">
                                    <h2>{{ __('home.news-not-found') }}</h2>
                                </div><!-- single-post -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="post-more-link text-center">
                                <a href="{{ route('knp.newses') }}"
                                    class="btn btn-md btn-color-line">{{ trans('home.view-all') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Event Section -->
    {{-- <section id="testimonial-section" class="faq padding pt-xs-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 mb-xs-30 mb-sm-60">
                    <div class="row pb-30 text-center">
                        <div class="col-sm-12 mb-20">
                            <h2><span>{{ trans('home.latest') }} </span>{{ trans('home.event') }}</h2>
                            <span class="b-line"></span>
                        </div>
                    </div>

                    <div class="row">
                        @forelse ($events as $event)
                            <div class="col-md-6 col-lg-4 mb-xs-30">
                                <div class="image-block blog-post">
                                    <div class="post-media">
                                        <div class="images image-box">
                                            <figure class="image">
                                                @php
                                                    $path = public_path() . "/storage/event_image/".$event->image;
                                                @endphp

                                                @if (!empty($news['image']) && file_exists($path))
                                                    <img src="{{asset('public/storage/event_image/'.$event->image)}}" alt="">
                                                @else
                                                    <img src="{{asset('public/assets/images/'.$event->image)}}" class="img-responsive rounded" alt="image">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="post-meta">
                                        <span style="color: #333;">by Admin</span>
                                    </div>

                                    <div class="post-header">
                                        <h4><a href="{{ route('vvnp.event-details', $event->slug) }}">{!! Str::limit($event->title, 40, '...') !!}</a></h4>
                                    </div>

                                    <div class="post-entry">
                                        <p class="text-justify">
                                            {!! Str::limit($event->description, 150, '...') !!}
                                        </p>
                                    </div>
                                    <div class="post-more-link pull-left">
                                        <a href="{{ route('vvnp.event-details', $event->slug) }}" class="btn btn-md btn-color-line ">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 pb-4">
                                    <div class="p-2 text-center">
                                        <h2>{{__('home.event-not-found')}}</h2>
                                    </div><!-- single-post -->
                            </div><!-- col-lg-4 col-md-6 -->
                        @endforelse
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="post-more-link text-center">
                                <a href="{{ route('vvnp.events') }}" class="btn btn-md btn-color-line ">{{ trans('home.view-all-event') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Event Section -->

    <!-- Tender Section -->
    {{-- <div id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2>{{__('home.tender-heading-1')}}<span>{{__('home.tender-heading-2')}}</span></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
                @forelse ($tenders as $tender)
                    @if ($tender->last_date <= Carbon\Carbon::now()->toDateTimeString())
                        <div class="col-lg-12 col-md-12 pb-4 mt-0">
                            <div class="p-2 text-center">
                                <h2>{{__('home.tender-not-found')}}</h2>
                            </div><!-- single-post -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @else
                        <div class="col-md-12 col-lg-4 mb-80">
                            <div class="about-block gray-bg padding-40 clearfix about-box-shadow">
                                <div class="client-avtar">
                                    @if ($tender->file_extension)
                                        @if ($tender->file_extension == 'doc' || $tender->file_extension == 'docx')
                                            <img src="{{asset('public/assets/images/doc-icon/word.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif

                                        @if ($tender->file_extension == 'xls' || $tender->file_extension == 'xlsx')
                                            <img src="{{asset('public/assets/images/doc-icon/excel.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif

                                        @if ($tender->file_extension == 'pdf')
                                            <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" class="img-responsive rounded" alt="doc-image">
                                        @endif
                                    @endif
                                </div>
                                <div class="text-box">
                                    <div class="box-title">
                                        <h4>{{$tender->title}}</h4>
                                    </div>

                                    <div class="text-content">
                                        <p>
                                            {!! Str::limit($tender->description, 200, '...') !!}
                                        </p>
                                    </div>

                                    <a href="{{ route('str.tender.download', $tender->original_filename) }}" class="btn btn-success" style="background-color: #2d871c; color: #ffffff; border: 2px solid #2d871c;"><i class="fa fa-download" style="margin-right: 4px;"></i>{{__('home.btn-download')}}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-lg-12 col-md-12 pb-4 mt-0">
                        <div class="p-2 text-center">
                            <h2>{{__('home.tender-not-found')}}</h2>
                        </div><!-- single-post -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-more-link text-center">
                        <a href="{{ route('str.tenders') }}" class="btn btn-md btn-color-line ">{{ trans('home.view-all-tender') }}</a>
                    </div>
                </div>
            </div>

            <!-- Collape Section End Here -->
        </div>
    </div> --}}
    <!-- End Tender Section -->

    <!-- Documents Section -->
    {{-- <div id="blog" class="wow fadeIn ptb-80 gray-bg">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="heading-box ">
                        <h2>{{__('home.docs-heading-1')}}<span>{{__('home.docs-heading-2')}}</span></h2>
                        <span class="b-line"></span>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
                @forelse ($docs as $doc)
                    <div class="col-md-12 col-lg-4 mb-80">
                        <div class="about-block gray-bg padding-40 clearfix about-box-shadow">
                            <div class="client-avtar">
                                @if ($doc->file_extension)
                                    @if ($doc->file_extension == 'doc' || $doc->file_extension == 'docx')
                                        <img src="{{asset('public/assets/images/doc-icon/word.png')}}" class="img-responsive rounded" alt="doc-image">
                                    @endif

                                    @if ($doc->file_extension == 'pdf')
                                        <img src="{{asset('public/assets/images/doc-icon/pdf.png')}}" class="img-responsive rounded" alt="doc-image">
                                    @endif
                                @endif
                            </div>
                            <div class="text-box">
                                <div class="box-title">
                                    <h4>{{$doc->title}}</h4>
                                </div>

                                <div class="text-content">
                                    <p>
                                        {!! Str::limit($doc->description, 200, '...') !!}
                                    </p>
                                </div>

                                <a href="{{ route('vvnp.docs.download', $doc->original_filename) }}" class="btn btn-success" style="background-color: #2d871c; color: #ffffff; border: 2px solid #2d871c;"><i class="fa fa-download" style="margin-right: 4px;"></i>{{__('home.btn-download')}}</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12 pb-4 mt-0">
                        <div class="p-2 text-center">
                            <h2>{{__('home.docs-not-found')}}</h2>
                        </div><!-- single-post -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforelse
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="post-more-link text-center">
                        <a href="{{ route('vvnp.docs') }}" class="btn btn-md btn-color-line">{{ trans('home.view-all-docs') }}</a>
                    </div>
                </div>
            </div>

            <!-- Collape Section End Here -->
        </div>
    </div> --}}
    <!-- End Documents Section -->
@endsection

@push('js')
@endpush
