{{-- @props(['prefix' => false])

@if($prefix)
    <div class="mt-1 flex rounded-md shadow-sm">
        <span
            class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-100 text-gray-700 sm:text-sm">
            {{ $prefix }}
        </span>
        <input {{ $attributes(['class'=> 'form-input flex-1 rounded-none rounded-r-md focus:border-navy-500 focus:ring
        focus:ring-navy-500 focus:ring-opacity-50 block w-full min-w-0 sm:text-sm border-gray-300' ]) }} />
    </div>
@else
    <input {{ $attributes(['class'=> 'form-input flex-1 mt-1 shadow-sm rounded-md focus:border-navy-500 focus:ring focus:ring-navy-500 focus:ring-opacity-50 block w-full min-w-0 sm:text-sm border-gray-300' ]) }} />
@endif --}}

@props([
    'size' => 'base', // 'xs', 'sm', 'base', 'lg'
])

@php
    $class = match($size) {
        'xs' => ' text-xs',
        'sm' => ' text-sm',
        'lg' => ' text-lg',
        default => ' text-base'
    };

    $class .= ' block w-full px-3 py-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md';
@endphp

<input {{ $attributes->merge(['class' => $class]) }}>
