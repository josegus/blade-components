{{--
Properties
- type (primary*, secondary): text-color-*, bg-color-*
- size (xs, sm, base*, lg, xl): text-*, p-*,

Any class should be easily replaced and multiple combinations should be allowed:
- <component type="primary" class="bg-red-500">lorem</component>
- <component size="xs" class="text-red-200 bg-gray-500">lorem</component>s
--}}

@props([
    'type' => 'primary', // primary, secondary
    'size' => 'base', // 'xs', 'sm', 'base', 'lg', 'xl',
])

@php
    $class = match($type) {
        'primary' => ' bg-purple-400 text-purple-800',
        'secondary' => ' bg-sky-400 text-sky-800',
        default => ' bg-purple-400 text-purple-800',
    };

    // Do we really need all these sizes?
    // Badges are usually small
    $class .= match($size) {
        'xs' => ' text-xs',
        'sm' => ' text-sm',
        'lg' => ' text-lg',
        default => ' text-base'
    };

    $class .= ' inline-flex items-center px-2.5 py-0.5 rounded-full font-medium';
@endphp

<span {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</span>
