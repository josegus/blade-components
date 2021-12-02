@props(['name', 'address'])
<div>
    {{ $name }} -
    {{ $address }}
    <button {{ $attributes->merge(['class' => 'bg-blue']) }}>{{ $slot }}</button>
</div>
