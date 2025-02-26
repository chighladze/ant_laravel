<!-- project file path: ant_laravel/resources/views/partials/footer.blade.php -->
<footer>
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-sm-6">
                <img src="{{ asset('assets/images/logo.webp') }}" class="w-150px" alt="Logo">
                <div class="spacer-20"></div>
                <p>{{ __('footer.description') }}</p>

                <div class="social-icons mb-sm-30">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-discord"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h5>{{ __('footer.company') }}</h5>
                            <ul>                                        
                                <li><a href="{{ url('/') }}">{{ __('footer.home') }}</a></li>
                                <li><a href="{{ url('/services') }}">{{ __('footer.services') }}</a></li>
                                <li><a href="{{ url('/projects') }}">{{ __('footer.projects') }}</a></li>
                                <li><a href="{{ url('/contact') }}">{{ __('footer.get_quote') }}</a></li>
                                <li><a href="{{ url('/blog') }}">{{ __('footer.blog') }}</a></li>
                                <li><a href="{{ url('/contact') }}">{{ __('footer.contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="widget">
                            <h5>{{ __('footer.our_services') }}</h5>
                            <ul>
                                <li><a href="{{ url('/services') }}">{{ __('footer.system_consultation') }}</a></li>
                                <li><a href="{{ url('/services') }}">{{ __('footer.installation_services') }}</a></li>
                                <li><a href="{{ url('/services') }}">{{ __('footer.system_configuration') }}</a></li>
                                <li><a href="{{ url('/services') }}">{{ __('footer.monitoring_services') }}</a></li>
                                <li><a href="{{ url('/services') }}">{{ __('footer.maintenance') }}</a></li>
                                <li><a href="{{ url('/services') }}">{{ __('footer.storage_backup') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                <div class="widget">
                    <div class="fw-bold text-white"><i class="icofont-clock-time me-2 id-color"></i>{{ __('footer.open_hours') }}</div>
                    {{ __('footer.open_schedule') }}

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white"><i class="icofont-location-pin me-2 id-color"></i>{{ __('footer.workshop_location') }}</div>
                    {{ __('footer.workshop_address') }}

                    <div class="spacer-20"></div>

                    <div class="fw-bold text-white"><i class="icofont-envelope me-2 id-color"></i>{{ __('footer.send_message') }}</div>
                    contact@ucam-cctv.com                            
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                          <p>{{ __('footer.copyright', ['year' => date('Y')]) }}</p>
                        </div>
                        <!-- <div class="de-flex-col">
                          <p>{{ __('footer.developed_by') }}</p>
                        </div> -->
                        <ul class="menu-simple">
                            <li><a href="#">{{ __('footer.terms_conditions') }}</a></li>
                            <li><a href="#">{{ __('footer.privacy_policy') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
