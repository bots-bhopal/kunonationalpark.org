<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <li>
                        <a href="{{ route('knp.admin-body') }}" class="{{ Request::is('management/admin-body') ? 'active' : '' }}">{{ trans('navbar.administrative-body') }}</a>
                    </li>

                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('knp.goals') }}" class="{{ Request::is('management/goals') ? 'active' : '' }}">{{ trans('navbar.goals') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('knp.other-activities') }}" class="{{ Request::is('management/other-activities') ? 'active' : '' }}">{{ trans('navbar.other-activities') }}</a>
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
