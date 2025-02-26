<!-- project file path: ant_laravel/resources/views/components/WhyChooseUsComponent.blade.php -->
<div class="row g-4">
    <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="py-4 bg-dark rounded-1 text-center wow fadeInUp" data-wow-delay=".0s">
            <h1 class="fs-72 mb-2">15</h1>
            <div class="fs-18">Years of Experience</div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-6">
        <ul class="ul-style-2 fw-600 text-white mb-4 wow fadeInUp" data-wow-delay=".6s">
            @foreach($features as $feature)
                <li>{{ $feature }}</li>
            @endforeach
        </ul>
    </div>
</div>
