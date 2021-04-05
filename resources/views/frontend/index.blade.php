@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    @include('frontend.includes.home_page.search_section')
    @include('frontend.includes.home_page.card_timeline_section')
    @include('frontend.includes.home_page.live_auction_new')
    @include('frontend.includes.home_page.tender')
    
{{--    @include('frontend.includes.home_page.what_we_do_section')--}}
    @include('frontend.includes.home_page.expert_center_section')
{{--    @include('frontend.includes.home_page.how_to_work_section')--}}
    @include('frontend.includes.home_page.shop')
    @include('frontend.includes.home_page.acadamy')
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush





