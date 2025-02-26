<!-- project file path: ant_laravel/resources/views/components/BrandCard.blade.php -->
<div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="{{ $delay }}s">
    <div class="relative hover overflow-hidden">
        <div class="absolute w-100 h-100 p-40 bg-dark hover-op-1 hover-mt-40">
            <h4>{{ $brand['name'] }}</h4>
            <p>{{ $brand['description'] }}</p>
            <a class="btn-main fx-slide" href="{{ url('brand-details', $brand['slug']) }}"><span>View Details</span></a>
        </div>
        <div class="text-center py-3">
            <img src="{{ asset('assets/images/products/' . $brand['image']) }}" class="w-80" alt="{{ $brand['name'] }}">
            <h4>{{ $brand['name'] }}</h4>
        </div>
    </div>
</div>
