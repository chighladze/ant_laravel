<!-- project file path: ant_laravel/resources/views/partials/header.blade.php -->
<header class="transparent">
    <div id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between xs-hide">
                        <div class="d-flex">
                            <div class="topbar-widget">
                                <a href="#">
                                    <img src="#" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="topbar-widget me-5">
                                <a href="#">
                                    <img src="{{ asset('assets/images/svg-white/phone.svg') }}" alt="">
                                    {{ __('header.contact') }}: (123) 202-9296
                                </a>
                            </div>
                            <div class="topbar-widget">
                                <a href="#">
                                    <img src="{{ asset('assets/images/svg-white/envelope.svg') }}" alt="">
                                    {{ __('header.email') }}: contact@ant.ge
                                </a>
                            </div>
                        </div>                 
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>            
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <!-- Logo begin -->
                        <div id="logo">
                            <a href="{{ route('home') }}">
                                <img class="logo-main" src="{{ asset('assets/images/logo.webp') }}" alt="">
                                <img class="logo-scroll" src="{{ asset('assets/images/logo.webp') }}" alt="">
                                <img class="logo-mobile" src="{{ asset('assets/images/logo.webp') }}" alt="">
                            </a>
                        </div>
                        <!-- Logo close -->
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <ul id="mainmenu">
                            <li><a class="menu-item" href="{{ route('home') }}">{{ __('header.home') }}</a></li>
                            <li><a class="menu-item" href="{{ route('services') }}">{{ __('header.services') }}</a></li>
                            <li><a class="menu-item" href="{{ route('brands') }}">{{ __('header.brands') }}</a></li>
                            <li><a class="menu-item" href="{{ route('projects') }}">{{ __('header.projects') }}</a></li>  
                            <li>
                                <a class="menu-item" href="{{ route('blog') }}">{{ __('header.blog') }}</a>
                                <ul>
                                    <li><a class="menu-item" href="{{ route('blog') }}">{{ __('header.blog_default') }}</a></li>
                                    <li><a class="menu-item" href="{{ route('blog2') }}">{{ __('header.blog_style2') }}</a></li>
                                    <li><a class="menu-item" href="{{ route('blog.single') }}">{{ __('header.blog_single') }}</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item" href="{{ route('contact') }}">{{ __('header.contact') }}</a></li>
                        </ul>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- Language Switcher -->
                        <ul id="mainmenu">
                          <li>
                              <a class="menu-item" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ strtoupper(Session::get('locale', 'ka')) }}
                              </a>
                              <ul>
                                  <li><a href="javascript:void(0);" onclick="changeLanguage('ka')">ქართული</a></li>
                                  <li><a href="javascript:void(0);" onclick="changeLanguage('en')">English</a></li>
                                  <li><a href="javascript:void(0);" onclick="changeLanguage('ru')">Русский</a></li>
                              </ul>
                          </li>
                        </ul>
                        <div id="btn-extra" class="img">
                            <img src="{{ asset('assets/images/ui/dots.svg') }}" alt="">
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</header>
