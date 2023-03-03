@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-orange-400 text-left text-base font-medium text-white hover:bg-neutral-900 hover:text-orange-500 hover:border-orange-600 focus:outline-none focus:text-orange-500 focus:bg-orange-50 focus:border-orange-600 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-orange-400 text-left text-base font-medium text-white hover:bg-neutral-900 hover:text-orange-500 hover:border-orange-600 focus:outline-none focus:text-orange-500 focus:bg-orange-50 focus:border-orange-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
