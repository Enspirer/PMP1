@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))


@section('content')
    @if(is_mobile(request()->header('user-agent')) != true)
    <section class="expert-section">
        @include("projects::includes.expert_center.desktop.header")
        @include("projects::includes.expert_center.desktop.timeline_section")
    </section>
    @else
    @include("projects::includes.expert_center.mobile.index")
    @endif
@endsection




@push('after-scripts')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@endpush





