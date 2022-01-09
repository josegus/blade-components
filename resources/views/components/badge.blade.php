@props([
    'primary', 'secondary',
    'xs', 'sm', 'lg', 'xl',
])

@php
    $classes = isset($primary) ? ' bg-purple-400 text-purple-800' : '';
    $classes .= isset($secondary) ? ' bg-sky-400 text-sky-800' : '';

    $classes .= isset($xs) ? ' text-xs' : '';
    $classes .= isset($sm) ? ' text-sm' : '';
    $classes .= isset($lg) ? ' text-lg' : '';
    $classes .= isset($xl) ? ' text-xl' : '';
@endphp

<span {{ $attributes->merge([
    'class' => 'inline-flex items-center px-2.5 py-0.5 rounded-full font-medium text-base'.$classes
]) }}>
    {{ $slot }}
</span>
{{--
Properties
- type (primary, secondary): text-color-*, bg-color-*
- size (sm, md, lg): text-*, p-*,

Any class should be easily replaced and the component should allow multiple combinations:
- <component primary class="bg-red-500">lorem</component>
- <component md class="text-red-200 bg-gray-500">lorem</component>s
--}}
