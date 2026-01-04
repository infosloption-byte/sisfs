<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body header-body-bottom-border-fixed">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="synergy Integrated Services" width="100" height="50" data-sticky-width="82" data-sticky-height="40" src="{{asset('assets/front/img/logo/sis-long2.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'index')active @endif" href="{{url('/')}}">Home</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'aboutus')active @endif" href="{{url('aboutus')}}">About Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'service')active @endif" href="{{url('cleaning-services')}}">Services</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'industry')active @endif" href="{{url('cleaning-industry')}}">Industries</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'faq')active @endif" href="{{url('faq')}}">FAQ</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'contactus')active @endif" href="{{url('contactus')}}">Contact</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'joinus')active @endif" href="{{url('joinus')}}">Join Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item dropdown-toggle @if(Route::current()->getName() == 'support')active @endif" href="{{url('support')}}">Docs</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-facebook">
                                    <a style="background-color: #3B5998!important;color: #fff!important" href="http://www.facebook.com/synergyintegratedservices" target="_blank" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a style="background-color: #0E76A8!important;color: #fff!important" href="https://www.linkedin.com/company/synergyintegratedservices/" target="_blank" title="Linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>