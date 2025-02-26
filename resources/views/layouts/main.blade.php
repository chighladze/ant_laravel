<!-- project file path: ant_laravel/resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ANT | {{ __('home.welcome') }}</title>
    <link rel="icon" href="{{ asset('assets/images/icon.webp') }}" type="image/gif" sizes="16x16">

    <meta charset="utf-8">
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="description" content="{{ __('messages.meta_description') }}">
    <meta name="keywords" content="{{ __('messages.meta_keywords') }}">
    <meta name="author" content="Your Company Name">
    <meta property="og:title" content="{{ __('messages.meta_title') }}">
    <meta property="og:description" content="{{ __('messages.meta_description') }}">
    <meta property="og:image" content="{{ asset('assets/images/preview.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ __('messages.meta_title') }}">
    <meta name="twitter:description" content="{{ __('messages.meta_description') }}">
    <meta name="twitter:image" content="{{ asset('assets/images/preview.webp') }}">


    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/coloring.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/swiper-custom-1.css') }}" rel="stylesheet" type="text/css">

    <!-- Color scheme -->
    <link id="colors" href="{{ asset('assets/css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css">

    @stack('styles')
</head>


<body class="dark-scheme">
<div id="wrapper">
    <a href="#" id="back-to-top"></a>

    <!-- page preloader begin -->
    <div id="de-loader"></div>
    <!-- page preloader close -->

    <!-- header begin -->
    @include('partials.header')
    <!-- header close -->

    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        @yield('content')

    </div>
    <!-- content close -->

    <!-- footer begin -->
    @include('partials.footer')
    <!-- footer close -->
</div>

<!-- overlay content begin -->
@include('partials.overlay')
<!-- overlay content end -->


<!-- Javascript Files
================================================== -->
<script src="{{ asset('assets/js/vendors.js') }}"></script>
<script src="{{ asset('assets/js/designesia.js') }}"></script>
<script src="{{ asset('assets/js/swiper.js') }}"></script>
<script src="{{ asset('assets/js/custom-marquee.js') }}"></script>
<script src="{{ asset('assets/js/custom-swiper-1.js') }}"></script>

@stack('scripts')

<script>
    function changeLanguage(locale) {
        fetch('/change-language/' + locale, { method: 'GET' })
            .then(() => location.reload()); // Reload to apply language change
    }
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Ucam CCTV",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('assets/images/logo.webp') }}",
  "description": "{{ __('messages.meta_description') }}",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "100 S Main St",
    "addressLocality": "New York",
    "addressRegion": "NY",
    "postalCode": "10001",
    "addressCountry": "US"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-123-202-9296",
    "contactType": "customer service"
  }
}
</script>

</body>


</body>

</html>
