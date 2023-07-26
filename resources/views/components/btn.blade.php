@props([
    'style' => 'primary',
    'size' => 'normal',
])
@php
    $style = $style ?: 'primary';
    $size = $size ?: 'normal';
    $hover = 'hover:brightness-105 hover:shadow-md';
    $base = 'inline-block rounded leading-normal mb-6 transition-all mr-2';
    $css = implode(' ', [$base, $hover]);
    $styles = [
        'primary' => 'bg-primary-500 text-white',
        'secondary' => 'bg-secondary-500 text-white',
        'none' => '',
    ];
    $sizes = [
        'sm' => 'py-1 px-3 sm:py-2 sm:px-4 text-sm',
        'normal' => 'py-3 px-5 sm:py-4 sm:px-6',
        'lg' => 'py-4 px-6 sm:py-6 sm:px-8 text-lg',
    ];
@endphp
<a href="{{ $url ?? '#' }}" {{ $attributes->class([$css, $styles[$style], $sizes[$size]]) }}>
    <span class="rounded opacity-50 fill-parent to-primary-600 bg-gradient-to-b from-transparent"></span>
    <span>{{ $slot }}</span>
</a>