@php
    $classes = "p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-700 transition-colors duration-300 group"
@endphp

{{-- <div {{ $attributes(['class' => 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-700 transition-colors duration-300 group']) }}>
    {{ $slot }}
</div> --}}


<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
