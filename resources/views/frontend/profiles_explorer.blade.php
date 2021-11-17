@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    @if(is_mobile(request()->header('user-agent')) != true)
        @include('frontend.includes.find_talents.all_talents')
    @else
        @include('frontend.mobile.mobile_homepage')
    @endif

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush





