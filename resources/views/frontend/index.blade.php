@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    @if(is_mobile(request()->header('user-agent')) != true)
        @include('frontend.includes.home_page.search_section')
        @include('frontend.includes.home_page.card_timeline_section')
        <!-- @include('frontend.includes.home_page.live_auction_new') -->
        @include('frontend.includes.home_page.categories', ['padding_top' => 'padding-top:7rem;'])
        <!-- @include('frontend.includes.home_page.tallentor_mall') -->
        @include('frontend.includes.home_page.tender')
        @include('frontend.includes.home_page.expert_center_section')
        @include('frontend.includes.home_page.shop')
        @include('frontend.includes.home_page.acadamy')
        @include('frontend.includes.home_page.social')
    @else
        @include('frontend.mobile.mobile_homepage')
    @endif

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush





