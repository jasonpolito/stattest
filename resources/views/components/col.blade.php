@props([
    'gap' => 'normal',
])
@php
    $padding = [
        'normal' => 'px-4 xl:px-6 mb-8 xl:mb-12',
        'sm' => 'px-2 xl:px-4 mb-4 xl:mb-8',
        'none' => '',
    ];
@endphp

<div {{ $attributes->class(['w-full', $padding[$gap]]) }}>
    {{ $slot }}
</div>
