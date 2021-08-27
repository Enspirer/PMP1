@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))


@section('content')
    @if(is_mobile(request()->header('user-agent')) != true)
        @if(session()->get('flash_success'))
            <div class="card" style="padding: 100px">
                <div class="card-body" style="text-align: center;">
                    <div class="" style="background-image: url('{{url('/theme_light/assets/paper-plane.png')}}');height: 100px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                    <br>
                    <h3 style="text-align: center;">Your message has been successfully sent,<br> one of our members will get in touch with you shortly.</h3>
                    <br>
                    <a href="" class="btn btn-primary" style="background-color: green;color: white">Refresh</a>

                </div>
            </div>

        @else
        <section class="expert-section">
            @include("projects::includes.expert_center.desktop.header")
            @include("projects::includes.expert_center.desktop.timeline_section")
        </section>
        @endif

    @else
    @include("projects::includes.expert_center.mobile.index")
    @endif
@endsection




@push('after-scripts')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function checked() {
    $('#submit_btn').removeAttr('disabled');
};
</script>

@endpush





