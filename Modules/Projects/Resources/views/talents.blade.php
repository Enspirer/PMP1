@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

@if(is_mobile(request()->header('user-agent')) != true)
        @include('frontend.includes.home_page.categories', ['padding_top' => 'padding-top:11rem;'])
    @else
        @include('projects::mobile.talents')
    @endif

@endsection

@push('after-scripts')

@endpush





