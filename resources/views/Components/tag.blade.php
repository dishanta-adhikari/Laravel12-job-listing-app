@props(['tag', 'size' => 'base'])

@php
    use Illuminate\Support\Str;

    $classes = 'bg-white/10 hover:bg-white/25 font-bold rounded-xl transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }

    $tagSlug = Str::slug($tag->name);
@endphp

<a href="/tags/{{ $tagSlug }}" class="{{ $classes }}">
    {{ $tag->name }}
</a>
