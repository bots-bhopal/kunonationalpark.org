<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('knp.about-introduction') }}" class="{{ Request::is('about/introduction') ? 'active' : '' }}">{{ trans('navbar.introduction') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('knp.history') }}" class="{{ Request::is('about/history') ? 'active' : '' }}">{{ trans('navbar.history') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.significance') }}" class="{{ Request::is('about/significance') ? 'active' : '' }}">{{ trans('navbar.significance') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.forest') }}" class="{{ Request::is('about/forest') ? 'active' : '' }}">{{ trans('navbar.forest') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.biodiversity') }}" class="{{ Request::is('about/biodiversity') ? 'active' : '' }}">{{ trans('navbar.biodiversity') }}</a>
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
