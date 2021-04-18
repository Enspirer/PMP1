@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
@if(is_mobile(request()->header('user-agent')) != true)
        @include('supportcenter::frontend.desktop.partner.become_a_partner')
    @else
    @include('supportcenter::frontend.mobile.become_a_partner')
    @endif

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush





