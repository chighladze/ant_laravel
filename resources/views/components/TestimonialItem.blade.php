<!-- project file path: ant_laravel/resources/views/components/TestimonialItem.blade.php -->
<div class="item">
    <div class="relative text-light text-center">
        <div class="text-center">
            <img class="d-inline w-80px rounded-1" alt="{{ $name }}" src="{{ asset('assets/images/testimonial/' . $image) }}">
        </div>
        <div class="mt-3 fw-600">{{ $name }}<span>Customer</span></div>
        <div class="de-rating-ext mb-3">
            <span class="d-stars">
                @for ($i = 0; $i < 5; $i++)
                    <i class="fa fa-star"></i>
                @endfor
            </span>
        </div>
        <p>"{{ $review }}"</p>
    </div>
</div>
