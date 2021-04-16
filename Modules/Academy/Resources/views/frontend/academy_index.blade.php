@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    @if(is_mobile(request()->header('user-agent')) != true)
        @include('academy::frontend.desktop.academy_index')
    @else
        @include('academy::frontend.mobile.academy_index')
    @endif


@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush









