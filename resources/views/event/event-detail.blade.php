@extends('layouts.master')

@section('title', '- Event Detail')

@section('content')
    <!-- Intro Section -->
    <div class="page-header parallax">
        <div class="container">
            <h1 class="title">{{ trans('navbar.event-detail') }}</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('vvnp.index') }}">{{ trans('navbar.home') }}</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.event-detail') }}
                        </li>

                        {{-- <li class="breadcrumb-item active" aria-current="page">
                            {{ trans('navbar.introduction') }}
                        </li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Intro Section -->

<!-- Blog Post Section -->
<section class="ptb-80 ptb-xs-40">
    <div class="container">
        <div class="row">
            <!-- Post Item -->
            <div class="col-md-12 col-lg-9 mx-auto">
                <div class="row">
                    <div class="col-md-12 blog-post-hr image-block">
                        <div class="blog-post mb-30">

                            <div class="post-media">
                                <div class="images image-box">
                                    <figure class="image">
                                        @php
                                            $path = public_path() . "/storage/event_image/".$eventDetail->image;
                                        @endphp

                                        @if (!empty($eventDetail['image']) && file_exists($path))
                                            <img src="{{asset('public/storage/event_image/'.$eventDetail->image)}}" class="lazy-image owl-lazy" alt="">
                                            <a href="{{asset('public/storage/event_image/'. $eventDetail->image)}}" class="lightbox-image icon" data-fancybox="image"><span class="fa fa-search"></span></a>
                                        @else
                                            <img src="{{asset('public/assets/images/'.$eventDetail->image)}}" class="img-responsive rounded" alt="image">
                                        @endif
                                    </figure>
                                </div>
                            </div>

                            {{-- <div class="post-media">
                                <div class="item">
                                    <img src="{{ asset('public/storage/news_image/'.$newsDetail->image) }}" alt="News-Image" />
                                </div>
                            </div> --}}

                            <div class="post-meta">
                                <span style="color: #333;">by Admin</span>
                            </div>

                            <div class="post-header">
                                <h2 style="color: #000;">{{$eventDetail->title}}</h2>
                            </div>

                            <div class="post-entry">
                                <p>
                                    {!! $eventDetail->description !!}
                                </p>
                            </div>

                            <hr />

                            <!-- Related Images Start Here -->
                            <div class="carousel-wrap">
                                <div class="image-block owl-carousel news-carousel">
                                    @if ($eventDetail)
                                        @foreach($eventDetail->images as $image)
                                            <div class="item image-box">
                                                <figure class="image">
                                                    <img src="{{asset('public/storage/event_images/'. $image->image)}}" >
                                                    <div class="overlay-box">
                                                        <ul class="option-box">
                                                            <li><a href="{{asset('public/storage/event_images/'. $image->image)}}" class="lightbox-image" data-fancybox="image"><span class="fa fa-search"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figure>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- Related Images End Here -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Post Section -->
@endsection
