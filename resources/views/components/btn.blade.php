@props([
    'style' => 'primary',
    'size' => 'normal',
])
@php
    $hover = 'hover:brightness-105 hover:shadow-md';
    $base = 'inline-block rounded leading-normal my-8 transition-all mr-2';
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
<a href="{{ $url ?? '#' }}" {{ $attributes->class([$css, $styles[$style], $sizes[$size]]) }}>{{ $slot }}</a>
