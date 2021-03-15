@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="expert-section">
        <div class="expert-image">
            <img src="{{url('theme_light/assets/news.png')}}" style="object-position: top" alt="" />
            <div class="expert-gradient"></div>
            <div class="expert-text-head">
                <div class="container"></div>
            </div>
        </div>
    </section>

    <section id="news-section">
        <div class="top-part-news">
            <div class="container">
                <div class="title-part">
                    <div class="row m-0">
                        <p>Post 10h ago</p>
                        <p>By tallentor team</p>
                    </div>
                    <h1>Introducing Tallentor live auctions</h1>
                </div>
                <div class="news-body">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    </p>
                    <br />
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    </p>
                    <h2>Lorem ipsum sub title</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                        sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                    </p>
                </div>
            </div>
        </div>
        <div class="bottum-part-news">
            <div class="container" >
                <h3>Related News</h3>
                <div class="swiper-container3 swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
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
