@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="expert-section">
        <div class="swiper-container swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">  <div class="expert-image">
                        <img
                            src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                            style="object-position: center"
                        />
                        <div class="expert-gradient"></div>
                        <div class="expert-text-head">
                            <div class="container">

                                <div class="header-title-swipper">
                                    <p>Post 10h ago</p>
                                    <h1>
                                        Introducing Tallentor live <br /> Auctions
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div></div>
                <div class="swiper-slide">  <div class="expert-image">
                        <img
                            src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                            style="object-position: center"
                        />
                        <div class="expert-gradient"></div>
                        <div class="expert-text-head">
                            <div class="container">

                                <div class="header-title-swipper">
                                    <p>Post 10h ago</p>
                                    <h1>
                                        Introducing Tallentor live <br /> Auctions
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div></div>
                <div class="swiper-slide">  <div class="expert-image">
                        <img
                            src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                            style="object-position: center"
                        />
                        <div class="expert-gradient"></div>
                        <div class="expert-text-head">
                            <div class="container">

                                <div class="header-title-swipper">
                                    <p>Post 10h ago</p>
                                    <h1>
                                        Introducing Tallentor live <br /> Auctions
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination2 swiper-pagination-blog"></div>
        </div>

    </section>

    <section id="blog-tallentor">
        <div class="container">
            <div class="tab-center">
                <div class="title-tab">
                    <h1>Tallentor Press</h1>
                    <hr />
                </div>
            </div>

            <div class="type-row row">

                @foreach($blog_category as $blog_cat)
                    <div class="single-type col-md-2">
                        <div class="card-type">
                            <div class="text-block">
                                <p>About</p>
                                <h5>{{$blog_cat->name}}</h5>
                            </div>
                        </div>
                        <div class="card-round-outer">
                            <div class="card-circle-inner {{$blog_cat->color}}">
                                <h3>{{substr($blog_cat->name,0,1)}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>

            <div class="all-blog-post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="{{route("frontend.blog_post")}}" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-blog-item">
                            <img
                                src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}"
                                alt=""
                            />
                            <div class="card-blog-item-bottum">
                                <p>02 Feb 2021</p>
                                <h5>Lorem ipsum title</h5>
                                <h6>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                </h6>

                                <div class="read-more-card row m-0 mt-3">
                                    <a href="#" class="row m-0">
                                        <p>Read More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
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
