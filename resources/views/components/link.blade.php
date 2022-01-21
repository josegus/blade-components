@props([
    'underline',
    'size' => 'base', // 'xs', 'sm', 'base', 'lg', 'xl',
])

@php
    $class = $underline ?? false ? ' underline' : '';

    $class .= match($size) {
        'xs' => ' text-xs',
        'sm' => ' text-sm',
        'lg' => ' text-lg',
        default => ' text-base'
    };

    // TODO: how to override hover:text-color-* maintining text-color?
    $class .= ' inline-flex items-center text-purple-700 cursor-pointer hover:text-purple-800';
@endphp

<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>
