@props([
    'tag' => 'h1',
    'align' => 'left',
    'size' => 'lg',
])
@php
    $sizes = [
        'lg' => 'text-4xl md:text-5xl lg:text-6xl',
        'md' => 'text-3xl md:text-4xl lg:text-5xl',
        'sm' => 'text-2xl md:text-3xl lg:text-4xl',
    ];
@endphp
<{{ $tag }} {{ $attributes->class([$sizes[$size ?? 'md'], 'xl:mb-12 mb-8 font-bold', "text-$align"]) }}>
    {{ $slot }}
    </{{ $tag }}>
