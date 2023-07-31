@props([
    'style' => 'primary',
    'icon' => false,
    'size' => 'normal',
])
@php
    $style = $style ?: 'primary';
    $size = $size ?: 'normal';
    $hover = 'hover:brightness-105 hover:shadow-xl shadow-primary-500';
    $base = 'inline-block group rounded leading-normal mb-6 transition-all mr-2';
    $css = implode(' ', [$base, $hover]);
    $styles = [
        'primary' => 'bg-primary-500 text-white',
        'secondary' => 'bg-secondary-500 text-white',
        'unstyled' => 'no-style',
    ];
    $sizes = [
        'sm' => 'py-1 px-3 sm:py-2 sm:px-4 text-sm',
        'normal' => 'py-3 px-5 sm:py-4 sm:px-6',
        'lg' => 'py-4 px-6 sm:py-6 sm:px-8 text-lg',
    ];
    $classes = [$css, $styles[$style], $sizes[$size]];
@endphp
<a href="{{ $url ?? '#' }}" {{ $attributes->class($classes) }}>
    @if ($style == 'primary')
        <span class="rounded opacity-50 fill-parent to-primary-600 bg-gradient-to-b from-transparent"></span>
    @endif
    <span class="flex items-center">
        <span>{{ $slot }}</span>
        @if ($icon)
            <span class="pl-3 transition-all group-hover:translate-x-[0.15rem]">{!! Str::replace('<svg ', '<svg class="w-5 h-5" ', $icon) !!}</span>
        @endif
    </span>
</a>
