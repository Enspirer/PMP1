@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/profile.css') }}">
@endpush

@section('content')

    <div class="container" style="padding-top: 13rem; margin-bottom: 12rem;">
        <div class="row">
            <div class="col-4">
                <div class="card p-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <i class="fas fa-heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fas fa-ellipsis-h" style="font-size: 1.3rem;"></i>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-4">
                        <div class="col-8 text-center">
                            <img src="{{ url('theme_light/assets/profile/profile.png') }}" alt="" class="img-fluid profile mb-3">
                            <h4 class="font-weight-bold mb-1">Aleska Mandalin</h4>

                            <p class="mb-2">UI/UX Designer</p>

                            <div>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button class="btn contact w-100 rounded-pill">Contact Me</button>
                        </div>
                        <div class="col-6">
                            <button class="btn quote w-100">Get a Quote</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <hr>
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="col-10">
                                    From - Sri Lanka
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-bold">Contact Details</h5>

                            <div class="row">
                                <div class="col-1 pr-0">
                                    <i class="fas fa-at"></i>
                                </div>
                                <div class="col-11">
                                    <p class="mb-3">Email</p>
                                    <p>sample@gmail.com</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1 pr-0">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="col-11">
                                    <p class="mb-3">Phone</p>
                                    <p>(+94) 77 00 00 000</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-1 pr-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="col-11">
                                    <p class="mb-3">Address</p>
                                    <p>513, Sample Address, Colombo, Sri Lanka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">

            </div>
        </div>
    </div>
    
@endsection
