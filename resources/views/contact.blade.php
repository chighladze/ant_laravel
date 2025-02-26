@extends('layouts.main')

@section('title', __('contact.contact'))

@section('content')
<!-- Section: Header with background image and page title -->
<section id="subheader" class="relative jarallax text-light">
    <div class="de-gradient-edge-top"></div>
    <img src="{{ asset('images/background/1.webp') }}" class="jarallax-img" alt="">
    <div class="container relative z-2">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="subtitle s2 text-light wow fadeInUp mb-2">{{ __('contact.contact') }}</div>
                <div class="clearfix"></div>
                <h1 class="cam-style">{{ __('contact.contact') }}<span></span><span></span><span></span><span></span></h1>
            </div>
        </div>
    </div>
    <div class="crumb-wrapper">
        <ul class="crumb">
            <li><a href="{{ route('home') }}">{{ __('contact.home') }}</a></li>
            <li class="active">{{ __('contact.contact') }}</li>
        </ul>
    </div>
    <div class="triangle-bottomright-dark z-2"></div>
    <div class="sw-overlay op-8"></div>
</section>
<!-- Section end -->

<!-- Section: Contact Information and Form -->
<section class="relative">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <!-- Contact Information Section -->
                <h2 class="wow fadeInUp">{{ __('contact.contact') }}</h2>
                <p>{{ __('contact.any_questions') }}</p>

                <div class="spacer-single"></div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Office Location -->
                        <div class="relative mb-4">
                            <i class="abs fs-32 p-3 bg-dark-2 icofont-location-pin id-color-2"></i>
                            <div class="ms-80px">
                                <div class="fw-bold text-white">{{ __('contact.workshop_location') }}</div>
                                {{ __('contact.workshop_address') }}
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="relative mb-4">
                            <i class="abs fs-32 p-3 bg-dark-2 icofont-envelope id-color-2"></i>
                            <div class="ms-80px">
                                <div class="fw-bold text-white">{{ __('contact.email') }}</div>
                                contact@ucam-cctv.com
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="relative mb-4">
                            <i class="abs fs-32 p-3 bg-dark-2 icofont-phone id-color-2"></i>
                            <div class="ms-80px">
                                <div class="fw-bold text-white">{{ __('contact.call_now') }}</div>
                                (123) 202-9296
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="bg-dark-2 p-60 relative">
                    <div class="triangle-bottomright-dark"></div>
                    <form name="contactForm" id="contact_form" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <!-- Name Input -->
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-underline" placeholder="{{ __('contact.your_name') }}" required>
                                </div>

                                <!-- Email Input -->
                                <div class="field-set">
                                    <input type="email" name="email" id="email" class="form-underline" placeholder="{{ __('contact.email') }}" required>
                                </div>

                                <!-- Phone Number Input -->
                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-underline" placeholder="{{ __('contact.your_phone') }}" required>
                                </div>

                                <!-- Message Textarea -->
                                <div class="field-set">
                                    <textarea name="message" id="message" class="form-underline h-100px" placeholder="{{ __('contact.your_message') }}" required></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Google reCAPTCHA -->
                        <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>

                        <!-- Submit Button -->
                        <div id='submit' class="mt-3">
                            <input type='submit' id='send_message' value='{{ __('contact.send_message') }}' class="btn-main">
                        </div>

                        <!-- Success and Error Messages -->
                        <div id="success_message" class='success'>
                            {{ __('contact.success_message') }}
                        </div>
                        <div id="error_message" class='error'>
                            {{ __('contact.error_message') }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section end -->
@endsection
