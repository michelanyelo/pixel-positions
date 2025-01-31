@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' text-base px-5 py-1';
    }

    if ($size === 'small') {
        $classes .= ' text-[.625rem] px-3 py-1';
    }
@endphp


<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
