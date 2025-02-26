<!-- project file path: ant_laravel/resources/views/components/AccreditationsComponent.blade.php -->
<div class="row g-4">
    @foreach($badges as $index => $badge)
        <div class="col-sm-2 col-6 wow fadeInRight" data-wow-delay="{{ $index * 0.2 }}s">
            <div class="px-3">
                <img src="{{ asset('assets/images/badges/' . $badge) }}" class="w-100" alt="Accreditation Badge">
            </div>
        </div>
    @endforeach
</div>
