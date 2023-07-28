@props([
    'gap' => 'normal',
])
@php
    $padding = [
        'normal' => '-mx-4 xl:-mx-6',
        'sm' => '-mx-2 xl:-mx-4',
        'none' => '',
    ];
@endphp
<div {{ $attributes->class(['flex flex-wrap', $padding[$gap]]) }}>
    {{ $slot }}
</div>
