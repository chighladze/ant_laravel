<!-- project file path: ant_laravel/resources/views/components/CctvSpecialist.blade.php -->
<div class="p-60 rounded-1 sm-padding40 overflow-hidden position-relative jarallax text-light" 
     data-3000="transform: scale(1.2);" data-3500="transform: scale(1);">
    
    <img src="{{ asset('assets/images/background/' . $background) }}" class="jarallax-img" alt="Background">
    <div class="sw-overlay op-8"></div>

    <div class="row align-items-center g-4 gx-5 relative z-index-1000">
        <div class="col-lg-8">
            <div class="subtitle wow fadeInUp mb-3">{{ $subtitle }}</div>
            <h2 class="mb20 wow fadeInUp" data-wow-delay=".2s">{{ $description }}</h2>
            <a class="btn-main btn-line fx-slide" href="{{ url($buttonLink) }}">
                <span>{{ $buttonText }}</span>
            </a>
        </div>
        <div class="col-lg-4 text-center">
            <img src="{{ asset('assets/images/team/' . $image) }}" class="img-fluid rounded-1 wow scaleIn" alt="{{ $name }}">
            <h5 class="mt-3 mb-0">{{ $name }}</h5>
            <p class="small mb-2">{{ $position }}</p>
        </div>
    </div>

    <div class="triangle-bottomright-color"></div>
</div>
