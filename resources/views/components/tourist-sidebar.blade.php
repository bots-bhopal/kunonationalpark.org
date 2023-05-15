<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('knp.location') }}" class="{{ Request::is('tourist/location') ? 'active' : '' }}">{{ trans('navbar.location') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('knp.reach') }}" class="{{ Request::is('tourist/how-to-reach') ? 'active' : '' }}">{{ trans('navbar.how-to-reach') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.weather') }}" class="{{ Request::is('tourist/weather') ? 'active' : '' }}">{{ trans('navbar.weather') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.safari-zone') }}" class="{{ Request::is('tourist/safari-zone') ? 'active' : '' }}">{{ trans('navbar.safari-zone') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.excursion') }}" class="{{ Request::is('tourist/excursion-and-charges') ? 'active' : '' }}">{{ trans('navbar.excursion') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.interest') }}" class="{{ Request::is('tourist/point-of-interests') ? 'active' : '' }}">{{ trans('navbar.interest') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.stay') }}" class="{{ Request::is('tourist/stay') ? 'active' : '' }}">{{ trans('navbar.stay') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.dos') }}" class="{{ Request::is('tourist/dos') ? 'active' : '' }}">{{ trans('navbar.dos') }}</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>

        {{-- <div class="single-sidebar-widget">
            <div class="sec-title">
                <h2>Download<span> brochure</span></h2>
                <span>Here is some useful documents</span>
            </div>

            <ul class="brochure-btns">
                <li>
                    <a href="BTR.pdf" class="clearfix" target="_blank"><i class="fa fa-file-pdf-o"></i> <span>Download Brochure</span></a>
                </li>
            </ul>
        </div> --}}
    </div>
</div>
