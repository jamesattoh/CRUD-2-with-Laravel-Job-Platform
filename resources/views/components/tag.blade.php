@props(['tag','size' => 'base',])

@php
    $classes ="bg-white/10 hover:bg-white/25 transition-colors duration-300 rounded-xl font-bold";

    if ($size == 'base') {
        $classes .= " text-sm py-1 px-5";
    }

    if ($size == 'small') {
        $classes .= " text-2xs py-1 px-3";
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
