@props([
    'handle' => null,
    'data' => [],
])
@php
    use Statamic\Facades\Entry;
    use Illuminate\Support\Facades\Blade;
    
    $slug = str_replace(['"', "'"], '', $handle);
    $entry = Entry::query()
        ->where('collection', 'views')
        ->where('slug', $slug)
        ->first();
@endphp
{!! Blade::render($entry->get('markup')['code']) !!}
