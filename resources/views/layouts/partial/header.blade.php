<!--loader-->
<div id="preloader">
    @include('layouts.loader')
</div>
<!--loader-->

<!-- Floating Social Media Icons -->
<div class="social-icons">
    <a href="https://www.facebook.com/KunoNationalParkOfficial/" target="_blank" class="facebook"><i class="fa fa-facebook-f"></i>Facebook</a>
    <a href=" https://twitter.com/KunoNationalPrk" target="_blank" class="twitter"><i class="fa fa-twitter"></i>Twitter</a>
    <a href="https://instagram.com/kunonationalpark" target="_blank" class="instagram"><i class="fa fa-instagram"></i>Instagram</a>
</div>

<!-- Feedback Box -->
{{-- <div class="feedback-box">
    <a onclick="feedbackForm();">
        <i class="fa fa-commenting" aria-hidden="true" style="margin-right: 5px;"></i> Feedback
    </a>
</div> --}}

<!--Start header area-->
<header class="header-area">
    <div class="container-fluid">
        <div class="row pr-lg-5 pl-lg-5">
            <div class="col-lg-12 col-md-12 col-sm-12 pl-0 pr-0">
                <div class="d-flex justify-content-between align-items-center pt-1 pb-1">
                    <a href="{{ route('knp.index') }}" class="d-flex align-items-center">
                        <img src="{{asset('public/assets/images/KunoCheetahLogo.png')}}" class="img-fluid" alt="kuno-logo" width="120" height="80"/>
                        <img src="{{asset('public/assets/images/kuno.png')}}" class="img-fluid kuno-text-logo" alt="kuno" width="200" height="80"/>
                        {{-- <h2 class="my-auto text-center text-uppercase ml-2 mr-2 linear-wipe" style="font-family: 'Raleway', sans-serif; font-weight:900;">{{ trans('navbar.title') }}</h2> --}}
                    </a>

                    <a href="https://forest.mponline.gov.in/" target="_blank">
                        <img src="{{asset('public/assets/images/safari.jpg')}}" class="img-fluid" alt="click-to-book-safari" width="120" height="80">
                        <!-- Image Attribution -->
                        <!-- <div>Icons made by
                            <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
                        </div> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

<!--Start mainmenu area-->
<section class="mainmenu-area">
    <div class="container-fluid">
        <div class="mainmenu-bg">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Start mainmenu-->
                    <nav class="main-menu navbar-toggleable-md">
                        <div class="navbar-header hidden-lg-up">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- ==========================	Desktop Nav ============================ -->
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix" >
                                <li>
                                    <a href="{{ route('knp.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.history') }}" class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.forest') }}">{{ trans('navbar.forest') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.biodiversity') }}">{{ trans('navbar.biodiversity') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.location') }}">{{ trans('navbar.location') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.reach') }}" class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.weather') }}">{{ trans('navbar.weather') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.safari-zone') }}">{{ trans('navbar.safari-zone') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.interest') }}">{{ trans('navbar.interest') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.dos') }}">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank">{{ trans('navbar.safari') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.knp-management') }}</a>
                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.goals') }}" class="active">{{ trans('navbar.goals') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.other-activities') }}">{{ trans('navbar.other-activities') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('knp.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('knp.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>

                                <li>
                                    <a href="https://forest.mponline.gov.in/" target="_blank" class="btn-safari">{{ trans('navbar.safari') }}</a>
                                </li>
                            </ul>


                            <!-- ==========================	Mobile Nav ============================ -->
                            <ul class="mobile-menu clearfix">
                                <li>
                                    <a href="{{ route('knp.index') }}">{{ trans('navbar.home') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.about') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.about-introduction') }}">{{ trans('navbar.introduction') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.history') }}" class="active">{{ trans('navbar.history') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.significance') }}">{{ trans('navbar.significance') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.forest') }}">{{ trans('navbar.forest') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.biodiversity') }}">{{ trans('navbar.biodiversity') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.tourist-information') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.location') }}">{{ trans('navbar.location') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.reach') }}" class="active">{{ trans('navbar.how-to-reach') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.weather') }}">{{ trans('navbar.weather') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.safari-zone') }}">{{ trans('navbar.safari-zone') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.excursion') }}">{{ trans('navbar.excursion') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.interest') }}">{{ trans('navbar.interest') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.stay') }}">{{ trans('navbar.stay') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.dos') }}">{{ trans('navbar.dos') }}</a>
                                        </li>

                                        <li>
                                            <a href="https://forest.mponline.gov.in/" target="_blank">{{ trans('navbar.safari') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.knp-management') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.admin-body') }}">{{ trans('navbar.administrative-body') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.goals') }}" class="active">{{ trans('navbar.goals') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('knp.other-activities') }}">{{ trans('navbar.other-activities') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('knp.gallery') }}">{{ trans('navbar.gallery') }}</a>
                                </li>

                                <li>
                                    <a href="#">{{ trans('navbar.info-corner') }}</a>
                                    <span class="submenu-button"></span>

                                    <ul class="sub-nav">
                                        <li>
                                            <a href="{{ route('knp.newses') }}">{{ trans('navbar.news') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ route('knp.contact') }}">{{ trans('navbar.contact') }}</a>
                                </li>

                                <li>
                                    <a href="https://forest.mponline.gov.in/" target="_blank">{{ trans('navbar.safari') }}</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="link_btn float_right">
                        <ul class="navbar-nav language thm-btn">
                            <!-- Language Dropdown Menu -->
                            <li class="nav-item dropdown">
                                <!-- New Language Switcher -->
                                <a class="nav-link dropdown-toggle hover bdr" data-toggle="dropdown" href="#">
                                    <img src="{{ asset('public/assets/images/icons/google-translate.png') }}" width="24" height="24" alt="Google-Translate" class="img-fluid"> {{ Config::get('languages')[App::getLocale()]['display'] }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right pt-1 pb-1">
                                    @foreach (Config::get('languages') as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}" style="margin-right: 8px!important"></span> {{$language['display']}}</a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End mainmenu area-->
<!-- END HEADER -->
