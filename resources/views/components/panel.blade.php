@php
    $classes = 'p-4 bg-white/15 rounded-xl border border-transparent hover:border-blue-800 transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes])}}>
{{ $slot }}
</div>

{{--
// another way of achieving the same result

<div {{ $attributes->merge(['class' => $classes])}}>
{{ $slot }}
</div>
--}}
