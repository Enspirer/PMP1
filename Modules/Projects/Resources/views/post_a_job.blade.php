@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

@if(is_mobile(request()->header('user-agent')) != true)
        @include('projects::desktop.post_a_job')
    @else
        @include('projects::mobile.post_a_job')
    @endif

@endsection

@push('after-scripts')

@endpush





