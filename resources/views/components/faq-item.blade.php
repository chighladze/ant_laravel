<!-- project file path: ant_laravel/resources/views/components/faq-item.blade.php -->
<div class="accordion-section-title" data-tab="#accordion-{{ $id }}">
    {{ $question }}
</div>
<div class="accordion-section-content" id="accordion-{{ $id }}">
    {!! $answer !!}
</div>
