<div>
    <div>
        <div class="single-sidebar-widget">
            <div class="special-links">
                <ul>
                    <ul class="link blog-link">
                        <li>
                            <a href="{{ route('nwls.how-to-reach') }}"
                                class="{{ Request::is('tourist/how-to-reach') ? 'active' : '' }}">{{ trans('navbar.how-to-reach') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.best-time-to-visit') }}"
                                class="{{ Request::is('tourist/best-time-to-visit') ? 'active' : '' }}">{{ trans('navbar.best-time-to-visit') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.excursion') }}"
                                class="{{ Request::is('tourist/excursion-and-charges') ? 'active' : '' }}">{{ trans('navbar.excursion') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.point-of-interests') }}"
                                class="{{ Request::is('tourist/point-of-interests') ? 'active' : '' }}">{{ trans('navbar.point') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.stay') }}"
                                class="{{ Request::is('tourist/stay') ? 'active' : '' }}">{{ trans('navbar.stay') }}</a>
                        </li>

                        <li>
                            <a href="{{ route('nwls.dos') }}"
                                class="{{ Request::is('tourist/dos') ? 'active' : '' }}"
                                style="text-transform: none;">{{ trans('navbar.dos') }}</a>
                        </li>

                        {{-- <li>
                            <a href="https://forest.mponline.gov.in/" target="_blank";>{{ trans('navbar.safari-booking') }}</a>
                        </li> --}}
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
