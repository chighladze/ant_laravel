<!-- project file path: ant_laravel/resources/views/partials/overlay.blade.php -->
<!-- overlay content begin -->
<div id="extra-wrap" class="text-light">
    <div id="btn-close">
        <span></span>
        <span></span>
    </div>

    <div id="extra-content">
        <img src="{{ asset('assets/images/logo.webp') }}" class="w-150px" alt="Logo">

        <div class="spacer-30-line"></div>

        <h5 class="mb-3">{{ __('overlay.our_services') }}</h5>

        <ul class="ul-style-2">
            <li><a href="{{ url('/services') }}">{{ __('overlay.system_consultation') }}</a></li>
            <li><a href="{{ url('/services') }}">{{ __('overlay.installation_services') }}</a></li>
            <li><a href="{{ url('/services') }}">{{ __('overlay.system_configuration') }}</a></li>
            <li><a href="{{ url('/services') }}">{{ __('overlay.monitoring_services') }}</a></li>
            <li><a href="{{ url('/services') }}">{{ __('overlay.maintenance') }}</a></li>
            <li><a href="{{ url('/services') }}">{{ __('overlay.storage_backup') }}</a></li>
        </ul>

        <div class="spacer-30-line"></div>

        <h5>Contact Us</h5>
        <div><i class="icofont-clock-time me-2"></i>{{ __('overlay.opening_hours') }}</div>
        <div><i class="icofont-location-pin me-2"></i>{{ __('overlay.address') }}</div>
        <div><i class="icofont-envelope me-2"></i>contact@ant.ge</div>

        <div class="spacer-30-line"></div>

        <h5>{{ __('overlay.about_us') }}</h5>
        <p>{{ __('overlay.about_description') }}</p>

        <div class="social-icons">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </div>
</div>
<!-- overlay content end -->

