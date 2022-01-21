{{--
Properties
- type (primary*, secondary): text-color-*, bg-color-*
- size (xs, sm, base*, lg, xl): text-*, p-*,

Any class should be easily replaced and multiple combinations should be allowed:
- <component type="primary" class="bg-red-500">lorem</component>
- <component size="xs" class="text-red-200 bg-gray-500">lorem</component>s
--}}

@props([
    // TODO: is this "type" attribute going to have a
    // conflict with the native html "type" attribute?
    'type' => 'primary', // primary, secondary
    'size' => 'base', // 'xs', 'sm', 'base', 'lg', 'xl',
])

@php
    // focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
    $class = match($type) {
        'primary' => ' bg-purple-600 hover:bg-purple-700',
        'secondary' => ' bg-sky-600 hover:bg-sky-700',
        default => ' bg-purple-600 hover:bg-purple-700',
    };

    $class .= match($size) {
        'xs' => ' text-xs',
        'sm' => ' text-sm',
        'lg' => ' text-lg',
        default => ' text-base'
    };

    $class .= ' inline-flex items-center px-2.5 py-1.5 border border-transparent font-medium rounded shadow-sm text-white';
@endphp

<button {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</button>
