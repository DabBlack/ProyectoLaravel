@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-500 text-sm font-medium leading-5 text-white hover:text-orange-600 hover:border-orange-600 focus:outline-none focus:text-orange-600 focus:border-orange-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 text-sm font-medium leading-5 text-white hover:text-orange-600 hover:border-orange-600 focus:outline-none focus:text-orange-600 focus:border-orange-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
