@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="contact-body">
        @include('supportcenter::frontend.includes.contact_us.partner_office_section')
        @include('supportcenter::frontend.includes.contact_us.partner_office_canada')
        @include('supportcenter::frontend.includes.contact_us.contact_form_section')
        @include('supportcenter::frontend.includes.contact_us.partner_office_list')
    </section>

@endsection

@push('after-scripts')

@endpush





