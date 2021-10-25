@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="expert-section">
        <div class="expert-image">
            <img
                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                style="object-position: center"
            />
            <div class="expert-gradient"></div>
            <div class="expert-text-head">
                <div class="container">
                    <div class="expert-title-small m-w-130" data-animscroll="fade-up">
                        <h3>About Us</h3>
                        <hr class="w-130" />
                    </div>
                    <h2 data-animscroll="fade-up" class="nato-text">
                        The place where the
                        <span class="italic-text"> top challengers </span> <br />
                        meet the <span class="italic-text"> best talents</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="about-body-bottom">
        <div class="green-row">
            <div class="container">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a
                            class="nav-item nav-link active w-25"
                            id="nav-home-tab"
                            data-toggle="tab"
                            href="#nav-home"
                            role="tab"
                            aria-controls="nav-home"
                            aria-selected="true"
                        >Who we are</a
                        >
                        <a
                            class="nav-item nav-link w-25"
                            id="nav-profile-tab"
                            data-toggle="tab"
                            href="#nav-profile"
                            role="tab"
                            aria-controls="nav-profile"
                            aria-selected="false"
                        >Meet the team</a
                        >
                        <a
                            class="nav-item nav-link w-25"
                            id="nav-contact-tab"
                            data-toggle="tab"
                            href="#nav-contact"
                            role="tab"
                            aria-controls="nav-contact"
                            aria-selected="false"
                        >Board of Directors</a
                        >
                        <a
                            class="nav-item nav-link w-25"
                            id="nav-contact-tab"
                            data-toggle="tab"
                            href="#nav-contact"
                            role="tab"
                            aria-controls="nav-contact"
                            aria-selected="false"
                        >Careers</a
                        >
                    </div>
                </nav>
            </div>
        </div>
        <div class="tab-body-about">
            <div class="container">
                <div class="tab-content" id="nav-tabContent">
                    <div
                        class="tab-pane fade show active"
                        id="nav-home"
                        role="tabpanel"
                        aria-labelledby="nav-home-tab"
                    >
                        <div class="tab-center">
                            <div class="title-tab">
                                <h1>Who We Are</h1>
                                <hr />
                            </div>
                        </div>

                        <div class="tab-body-inner mt-3">
                            <h3>The Story</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea
                            </p>

                            <h3 class="mt-5">What we do</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea
                            </p>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="nav-profile"
                        role="tabpanel"
                        aria-labelledby="nav-profile-tab"
                    >
                        ...
                    </div>
                    <div
                        class="tab-pane fade"
                        id="nav-contact"
                        role="tabpanel"
                        aria-labelledby="nav-contact-tab"
                    >
                        ...
                    </div>
                </div>
            </div>
        </div>

        <div class="white-card-row-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-about">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <img src="{{url('theme_light/assets/image/icon/flag.svg')}}" alt="" />
                                    </div>
                                    
                                    <div class="col-5 card-title-name">
                                        <h6>Our</h6>
                                        <h5>Mission</h5>
                                    </div>
                                </div>
                                <p class="card-text-body-p">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-about">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <img src="{{url('theme_light/assets/image/icon/investigate.svg')}}" alt="" />
                                    </div>
                                    <div class="col-5 card-title-name">
                                        <h6>Our</h6>
                                        <h5>Vission</h5>
                                    </div>
                                </div>
                                <p class="card-text-body-p">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-about">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-2">
                                        <img src="{{url('theme_light/assets/image/icon/lightbulb.svg')}}" alt="" />
                                    </div>

                                    <div class="col-5 card-title-name">
                                        <h6>Core</h6>
                                        <h5>Values</h5>
                                    </div>
                                </div>
                                <p class="card-text-body-p">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush
