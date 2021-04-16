@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
@if(is_mobile(request()->header('user-agent')) != true)
        @include('frontend.auth.passwords.desktop.email')
    @else
    @include('frontend.auth.passwords.mobile.email')
    @endif
@endsection
