@extends('components.layout.base')

@section('navbar')
    @include('business.navbar')
@endsection

@section('content')
    {{ $slot }}
@endsection

@push('scripts')
    <div>biz script</div>
    {{ $scripts ?? '' }}
@endpush
