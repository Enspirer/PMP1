@extends('frontend.layouts.mobile.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <h2>Hello</h2>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif
@endpush





