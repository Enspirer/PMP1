@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <section class="expert-section">
        @include("projects::includes.expert_center.header")
        @include("projects::includes.expert_center.timeline_section")
    </section>
@endsection

@push('after-scripts')

@endpush





