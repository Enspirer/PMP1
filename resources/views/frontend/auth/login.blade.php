@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    @if(is_mobile(request()->header('user-agent')) != true)
        @include('frontend.auth.desktop.login')
    @else
        @include('frontend.auth.mobile.login')
    @endif
@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
