<!-- project file path: ant_laravel/resources/views/components/cta-button.blade.php -->
<a href="{{ $link }}" class="d-block relative bg-dark-2 text-light p-4 rounded-1">
    <i class="id-color p-3 rounded-1 fs-56 {{ $icon }}"></i>
    <div class="absolute abs-middle ms-90px">
        <span>{{ $subtitle }}</span>
        <h4>{{ $title }}</h4>
    </div>
</a>
