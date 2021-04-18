@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

@if(is_mobile(request()->header('user-agent')) != true)
        @include('projects::desktop.project_acution_explore')
    @else
    @include('projects::mobile.project_acution_explore')
    @endif



    @endsection

@push('after-scripts')

@endpush