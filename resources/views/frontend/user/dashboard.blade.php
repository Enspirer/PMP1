@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.user.includes.project_summery')
@endsection

@push('after-scripts')

@endpush














