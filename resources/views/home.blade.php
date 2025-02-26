@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section class="text-light no-top no-bottom position-relative overflow-hidden z-1000">
    <div class="v-center">
        <div class="swiper">
            <div class="swiper-wrapper">
                @php
                    $slides = [
                        [
                            'image' => '1.webp',
                            'title' => __('home.protection_you_can_trust'),
                            'subtitle' => __('home.five_star_service'),
                            'overlay' => 'op-9'
                        ],
                        [
                            'image' => '2.webp',
                            'title' => __('home.safety_in_every_frame'),
                            'subtitle' => __('home.five_star_service'),
                            'overlay' => 'op-7'
                        ]
                    ];

                    $features = [
                        ['icon' => 'ultra-high-resolution.svg', 'title' => __('home.ultra_high_resolution'), 'text' => __('home.trust_us')],
                        ['icon' => 'night-vision.svg', 'title' => __('home.night_vision'), 'text' => __('home.trust_us')],
                        ['icon' => 'motion-detection.svg', 'title' => __('home.motion_detection'), 'text' => __('home.trust_us')]
                    ];
                @endphp

                @foreach($slides as $slide)
                    <div class="swiper-slide">
                        <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/slider/' . $slide['image']) }})">
                            <div class="sw-caption">
                                <div class="container" data-0="opacity:1" data-300="opacity:0">
                                    <div class="row gx-5 align-items-center justify-content-center">
                                        <div class="spacer-double"></div>
                                        <div class="col-lg-12 text-center">     
                                            <div class="spacer-single"></div>
                                            <div class="sw-text-wrapper">
                                                <div class="subtitle wow">{{ $slide['subtitle'] }}</div>
                                                <div>
                                                    <h1 class="cam-style text-uppercase mb-3 wow">
                                                        {{ $slide['title'] }}<span></span><span></span><span></span><span></span>
                                                    </h1>
                                                </div>                                                    
                                                <div class="spacer-10"></div>
                                                <a class="btn-main btn-line fx-slide mb10 mb-3 wow" href="{{ url('/contact') }}">
                                                    <span>{{ __('home.get_quote') }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="spacer-single"></div>

                                    <div class="row g-4 sm-hide wow slider-extra">
                                        @foreach($features as $feature)
                                            <div class="col-lg-4 col-md-6 mb-sm-30">
                                                <div class="relative">
                                                    <img src="{{ asset('assets/images/svg-color/' . $feature['icon']) }}" class="absolute w-70px z-2" alt="">
                                                    <div class="ps-90">
                                                        <h4 class="mb-0">{{ $feature['title'] }}</h4>
                                                        <p>{{ $feature['text'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="sw-overlay {{ $slide['overlay'] }}"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row g-4 mb-2 justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="subtitle wow fadeInUp">{{ __('home.services') }}</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                  {{ __('home.professional_services') }}
                </h2>
            </div>
        </div>

        <div class="row g-4">
            @php
                $services = [
                    [
                        'icon' => 'cctv.svg',
                        'title' => __('home.installation'),
                        'description' => __('home.installation_desc'),
                        'delay' => '0s'
                    ],
                    [
                        'icon' => 'networking.svg',
                        'title' => __('home.system_design'),
                        'description' => __('home.system_design_desc'),
                        'delay' => '.2s'
                    ],
                    [
                        'icon' => 'setting.svg',
                        'title' => __('home.maintenance'),
                        'description' => __('home.maintenance_desc'),
                        'delay' => '.4s'
                    ],
                    [
                        'icon' => 'monitor.svg',
                        'title' => __('home.monitoring'),
                        'description' => __('home.monitoring_desc'),
                        'delay' => '.6s'
                    ]
                ];
            @endphp

            @foreach($services as $service)
                <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="{{ $service['delay'] }}">
                    <a href="{{ url('/services/single') }}" class="d-block hover relative bg-dark-2 p-40 pb-20 h-100 mb-sm-30"
                       data-0="transform:scale(0); opacity:0" data-600="transform:scale(1); opacity:1">
                        <img src="{{ asset('assets/images/svg-color/' . $service['icon']) }}" class="w-70px mb-3 hover-jello infinite" alt="{{ $service['title'] }}">
                        <h4>{{ $service['title'] }}</h4>
                        <p>{{ $service['description'] }}</p>
                        <div class="triangle-bottomright-dark"></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>



<section class="bg-dark-2 no-top no-bottom overflow-hidden">
    <div class="container-fluid position-relative half-fluid">
        <div class="container">
            <div class="row">
                <!-- Image -->
                <div class="col-lg-6 position-lg-absolute right-half h-100 overflow-hidden">
                    <div class="image" data-bgimage="url({{ asset('assets/images/misc/4.webp') }})"
                         data-700="transform: scale(1.2);" data-1300="transform: scale(1);"></div>
                    <div class="triangle-bottomright-dark"></div>
                </div>
                <!-- Text -->
                <div class="col-lg-6">
                    <div class="me-lg-3">
                        <div class="spacer-double"></div>
                        <div class="spacer-single sm-hide"></div>
                        <div class="subtitle s2 mb-3 wow fadeInUp" data-wow-delay=".0s">
                            {{ __('home.why_choose_us') }}
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            {{ __('home.unmatched_surveillance') }}
                        </h2>

                        <div class="row g-4">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="py-4 bg-dark rounded-1 text-center wow fadeInUp" data-wow-delay=".0s">
                                    <h1 class="fs-72 mb-2">15</h1>
                                    <div class="fs-18">{{ __('home.years_of_experience') }}</div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <ul class="ul-style-2 fw-600 text-white mb-4 wow fadeInUp" data-wow-delay=".6s">
                                    <li>{{ __('home.expertise_trust') }}</li>
                                    <li>{{ __('home.top_technology') }}</li>
                                    <li>{{ __('home.custom_solutions') }}</li>
                                    <li>{{ __('home.support_maintenance') }}</li>
                                    <li>{{ __('home.comprehensive_solutions') }}</li>
                                    <li>{{ __('home.proven_track_record') }}</li>
                                </ul>
                            </div>
                        </div>

                        <a class="btn-main fx-slide mb10 mb-3 wow fadeIn" href="{{ url('/contact') }}">
                            <span>{{ __('home.get_quote') }}</span>
                        </a>
                        <div class="spacer-single sm-hide"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container">
        <div class="row g-4 mb-2 justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="subtitle wow fadeInUp">{{ __('home.our_accreditations') }}</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ __('home.officially_certified') }}</h2>
            </div>
        </div>

        <div class="row g-4">
            @php
                $badges = [
                    '1.webp', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp'
                ];
            @endphp

            @foreach($badges as $index => $badge)
                <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay="{{ $index * 0.2 }}s">
                    <div class="px-3">
                        <img src="{{ asset('assets/images/badges/' . $badge) }}" class="w-100" alt="{{ __('home.accreditation') }} {{ $index + 1 }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-dark-2">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="subtitle wow fadeInUp mb-3">{{ __('home.brand_choice') }}</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ __('home.most_complete') }}</h2>
            </div>

            @php
                $brands = [
                    ['key' => 'swann', 'image' => '1.webp'],
                    ['key' => 'honeywell', 'image' => '2.webp'],
                    ['key' => 'hikvision', 'image' => '3.webp'],
                    ['key' => 'bosch', 'image' => '4.webp'],
                    ['key' => 'dahua', 'image' => '5.webp'],
                    ['key' => 'lorex', 'image' => '6.webp'],
                ];
            @endphp

            @foreach($brands as $index => $brand)
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="{{ $index * 0.2 }}s">
                    <div class="relative hover overflow-hidden">
                        <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
                            <h4>{{ __('brands.' . $brand['key'] . '.name') }}</h4>
                            <p>{{ __('brands.' . $brand['key'] . '.description') }}</p>
                            <a class="btn-main fx-slide" href="{{ url('/brand-details') }}">
                                <span>{{ __('home.view_details') }}</span>
                            </a>
                        </div>
                        <div class="text-center py-3">
                            <img src="{{ asset('assets/images/products/' . $brand['image']) }}" class="w-80"
                                 alt="{{ __('brands.' . $brand['key'] . '.name') }}">
                            <h4>{{ __('brands.' . $brand['key'] . '.name') }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div class="spacer-double"></div>
    <div class="spacer-single"></div>
</section>



<section class="bg-color no-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-min-100">
                <div class="p-60 rounded-1 sm-padding40 overflow-hidden position-relative jarallax text-light"
                     data-3000="transform: scale(1.2);" data-3500="transform: scale(1);">
                     
                    <img src="{{ asset('assets/images/background/4.webp') }}" class="jarallax-img" alt="{{ __('home.background_image') }}">
                    <div class="sw-overlay op-8"></div>

                    <div class="row align-items-center g-4 gx-5 relative z-index-1000">
                        <div class="col-lg-8">
                            <div class="subtitle wow fadeInUp mb-3">{{ __('home.cctv_specialist') }}</div>
                            <h2 class="mb20 wow fadeInUp" data-wow-delay=".2s">
                                {{ __('home.surveillance_description') }}
                            </h2>
                            <a class="btn-main btn-line fx-slide" href="{{ url('/contact') }}">
                                <span>{{ __('home.get_quote') }}</span>
                            </a>
                        </div>

                        @php
                            $ceo = [
                                'name' => 'Jeffery Mussman',
                                'position' => __('home.founder_ceo'),
                                'image' => '1.webp',
                            ];
                        @endphp

                        <div class="col-lg-4 text-center">
                            <img src="{{ asset('assets/images/team/' . $ceo['image']) }}" class="img-fluid rounded-1 wow scaleIn" alt="{{ $ceo['name'] }}">
                            <h5 class="mt-3 mb-0">{{ $ceo['name'] }}</h5>
                            <p class="small mb-2">{{ $ceo['position'] }}</p>
                        </div>
                    </div>

                    <div class="triangle-bottomright-color"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-dark-2 text-light">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="subtitle wow fadeInUp mb-3">{{ __('home.testimonials') }}</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ __('home.happy_customers') }}</h2>
            </div>
        </div>

        <div class="row g-4">
            <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                @php
                    $testimonials = [
                        ['name' => 'Michael S.', 'image' => '1.webp', 'review' => __('home.testimonial_michael')],
                        ['name' => 'Robert L.', 'image' => '2.webp', 'review' => __('home.testimonial_robert')],
                        ['name' => 'Jake M.', 'image' => '3.webp', 'review' => __('home.testimonial_jake')],
                        ['name' => 'Alex P.', 'image' => '4.webp', 'review' => __('home.testimonial_alex')],
                        ['name' => 'Carlos R.', 'image' => '5.webp', 'review' => __('home.testimonial_carlos')],
                        ['name' => 'Edward B.', 'image' => '6.webp', 'review' => __('home.testimonial_edward')],
                        ['name' => 'Daniel H.', 'image' => '7.webp', 'review' => __('home.testimonial_daniel')],
                        ['name' => 'Bryan G.', 'image' => '8.webp', 'review' => __('home.testimonial_bryan')],
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                    <div class="item">
                        <div class="relative text-light text-center">
                            <div class="text-center">
                                <img class="d-inline w-80px rounded-1" alt="{{ $testimonial['name'] }}" src="{{ asset('assets/images/testimonial/' . $testimonial['image']) }}">
                            </div>
                            <div class="mt-3 fw-600">{{ $testimonial['name'] }} <span>{{ __('home.customer') }}</span></div>
                            <div class="de-rating-ext mb-3">
                                <span class="d-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                            <p>"{{ $testimonial['review'] }}"</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section class="pt60 pb60">
    <div class="container">
        <div class="row g-4">
            @php
                $services = [
                    ['title' => __('home.emergency_service'), 'subtitle' => __('home.call_now', ['number' => '(123) 202-9296']), 'icon' => 'icofont-phone-circle', 'link' => '/contact', 'delay' => '.2s'],
                    ['title' => __('home.request_for'), 'subtitle' => __('home.free_estimation'), 'icon' => 'icofont-calculator', 'link' => '/installation', 'delay' => '.4s'],
                    ['title' => __('home.discover'), 'subtitle' => __('home.latest_projects'), 'icon' => 'icofont-image', 'link' => '/projects', 'delay' => '.6s'],
                ];
            @endphp

            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="{{ $service['delay'] }}">
                    <a href="{{ url($service['link']) }}" class="d-block relative bg-dark-2 text-white p-4 rounded-1">
                        <i class="id-color p-3 rounded-1 fs-56 {{ $service['icon'] }}"></i>
                        <div class="absolute abs-middle ms-90px">
                            <span>{{ $service['title'] }}</span>
                            <h4>{{ $service['subtitle'] }}</h4>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-dark-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">                            
                <div class="subtitle wow fadeInUp mb-3">{{ __('home.do_you_have') }}</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">{{ __('home.any_questions') }}</h2>
            </div>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-12">
                <div class="accordion s2 wow fadeInUp">
                    @php
                        $faqs = [
                            ['question' => __('home.faq_installation_process'), 
                             'answer' => '<ol>
                                            <li>' . __('home.faq_step1') . '</li>
                                            <li>' . __('home.faq_step2') . '</li>
                                            <li>' . __('home.faq_step3') . '</li>
                                            <li>' . __('home.faq_step4') . '</li>
                                          </ol>'],
                            ['question' => __('home.faq_how_many_cameras'), 
                             'answer' => __('home.faq_how_many_cameras_answer')],
                            ['question' => __('home.faq_night_vision'), 
                             'answer' => __('home.faq_night_vision_answer')],
                            ['question' => __('home.faq_motion_detection'), 
                             'answer' => __('home.faq_motion_detection_answer')],
                            ['question' => __('home.faq_maintenance_required'), 
                             'answer' => __('home.faq_maintenance_required_answer')],
                            ['question' => __('home.faq_weatherproof'), 
                             'answer' => __('home.faq_weatherproof_answer')],
                        ];
                    @endphp

                    <div class="accordion-section">
                        @foreach($faqs as $index => $faq)
                            <div class="accordion-section-title" data-tab="#accordion-{{ $index }}">
                                {{ $faq['question'] }}
                            </div>
                            <div class="accordion-section-content" id="accordion-{{ $index }}">
                                {!! $faq['answer'] !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="relative no-top no-bottom" aria-label="section">
    <div class="container-fluid">
        <div class="row g-0">
            @php
                $gallery_images = [
                    '1.webp', '2.webp', '3.webp', '4.webp',
                    '5.webp', '6.webp', '7.webp', '8.webp'
                ];
            @endphp

            @foreach(array_chunk($gallery_images, 4) as $row)
                <div class="col-md-6">
                    <div class="row g-0">
                        @foreach($row as $image)
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/' . $image) }}" class="w-100 hover-scale-1-1" alt="Gallery Image">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



<section class="pt60 pb60">
    <div class="container">
        <div class="row g-4">
            @php
                $cta_buttons = [
                    [
                        'link' => route('contact'), 
                        'icon' => 'icofont-phone-circle', 
                        'subtitle' => 'Emergency Service', 
                        'title' => 'Call (123) 202-9296'
                    ],
                    [
                        'link' => route('installation'), 
                        'icon' => 'icofont-calculator', 
                        'subtitle' => 'Request For', 
                        'title' => 'Free Estimation'
                    ],
                    [
                        'link' => route('projects'), 
                        'icon' => 'icofont-image', 
                        'subtitle' => 'Discover', 
                        'title' => 'Latest Projects'
                    ]
                ];
            @endphp

            @foreach($cta_buttons as $button)
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay=".2s">
                    @include('components.cta-button', $button)
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection