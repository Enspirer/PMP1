@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    
@if(is_mobile(request()->header('user-agent')) != true)
@include('blog::frontend.desktop.blog_post')
@else
@include('blog::frontend.mobile.blog_post')
@endif



@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush
