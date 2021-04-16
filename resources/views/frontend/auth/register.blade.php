@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
    @if(is_mobile(request()->header('user-agent')) != true)
        @include('frontend.auth.dasktop.register')
    @else
        @include('frontend.auth.mobile.register')
    @endif
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif
@endpush
