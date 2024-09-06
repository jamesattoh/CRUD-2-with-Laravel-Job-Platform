@props(['employer','width' => 90])

<img class="rounded-xl" src="{{ asset($employer->logo) }}" width="{{ $width }}">

{{-- placehold.it/90/90 --}}

{{-- http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }} --}}
