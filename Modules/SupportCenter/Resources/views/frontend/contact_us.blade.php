@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

@if(is_mobile(request()->header('user-agent')) != true)
        @include('supportcenter::frontend.desktop.contact_us.contact_us')
    @else
    @include('supportcenter::frontend.mobile.contact_us')
    @endif

@endsection

@push('after-scripts')

@endpush





