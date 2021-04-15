@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="expert-section">
        <div class="expert-image" style="padding-top: 60px;">
            <img src="{{url('theme_light/assets/inner/globe-01.svg')}}" style="object-position: center;object-fit: cover;" />
            <div class="expert-gradient"></div>
            <div class="expert-text-head">

            </div>
        </div>
    </section>

    <section id="parner-with-us">
        <div class="container">
            <div class="">
                <div class="title-tab">
                    <h1 style="font: normal normal bold 60px/100px Poppins;
            line-height: 1;
            letter-spacing: 3.6px;
            color: #0F9D58;">Become a Partner..</h1>
                    <h1 style="font: normal normal 600 31px/51px Poppins;
            letter-spacing: 1.64px;
            color: #242424;">Tallentor Global Partner Programme</h1>

                </div>
            </div>
            <p style="font: normal normal normal 27px/35px Karla;
        letter-spacing: 0px;
        color: #828282;
        max-width: 800px;">
                We are delighted to invite Business Partners from around the world to join the fastest growing talent marketplace
            </p>
            <br>
            <div class="form-section">
                <form action="">
                    <div class="form-group">
                        <label >First Name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label >Company name</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label >Company email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label >How can we partner</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="button-row">
                        <a href="#">Send the request</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush





