@props([
    'primary', 'secondary',
    'xs', 'sm', 'lg', 'xl',
])

@php
    // focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
    $classes = isset($primary) ? ' bg-purple-600 hover:bg-purple-700' : '';
    $classes .= isset($secondary) ? ' bg-sky-600 hover:bg-sky-700' : '';

    $classes .= isset($xs) ? ' text-xs' : '';
    $classes .= isset($sm) ? ' text-sm' : '';
    $classes .= isset($lg) ? ' text-lg' : '';
    $classes .= isset($xl) ? ' text-xl' : '';
@endphp

<button {{ $attributes->merge(['class' => 'inline-flex items-center px-2.5 py-1.5 border border-transparent font-medium rounded shadow-sm text-white'.$classes]) }}>
    {{ $slot }}
</button>
