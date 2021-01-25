@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-indigo-600 hover:text-indigo-800 text-xs uppercase py-3 font-bold block transition duration-150 ease-in-out'
            : 'text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
