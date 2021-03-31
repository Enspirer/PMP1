@extends('frontend.layouts.mobile.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<div class="pos-f-t">
    <nav class="navbar navbar-dark">
        <input type="checkbox" id="overlay-input" />
        <label for="overlay-input" id="overlay-button"><span></span></label>
        <div class="center-circle">
            <div class="img-center">
                <img src="{{url('theme_light/assets/image/logotext.png')}}" alt="" srcset="" />
            </div>
        </div>
        <div class="right-btn">Join</div>
        <div id="overlay">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sign In</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="hero-image">
    <div class="dark-layer-hero"></div>
    <div class="hero-mobile-content">
        <h4>The place where</h4>
        <h4>
            the <span>top challengers</span> meet the <span>best talent</span>
        </h4>

        <form action="#" class="search-hero-mobile">
            <div class="input-group">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">
                        Search
                    </button>
                </div>
            </div>
        </form>

        <h4>or</h4>

        <a href="#" type="button">Post a Project</a>
    </div>
</div>
<section class="live-action-gray">
    <div class="head-title">
        <div class="row" data-animscroll="fade-up">
            <div class="record-icon">
                <img src="{{url('theme_light/assets/image/icon/rec_red.svg')}}" />
            </div>
            <h1><span>Live</span>Auction</h1>
        </div>
    </div>
</section>

<section class="live-action-content">
      <div class="container">
        <h2>
          World class designer to make mock-up of stages of our process and a
          dashboard for landing page
        </h2>
        <h6>Auction ends in : <span>12Hr 34Min</span></h6>
    
        <div class="row button-live-row">
          <div class="button-live-single col">
            <a class="view-scope-outline" href="#" type="button">VIEW SCOPE</a>
          </div>

          <div class="button-live-single col">
            <a class="view-scope-fill" href="{{route('frontend.auth.login')}}" type="button">SIGN IN TO BIT</a>
          </div>
        </div>
        <br>
        <br />
        <div
          id="container"
          data-animscroll="fade-left"
          style="
            height: 300px;
            -webkit-tap-highlight-color: transparent;
            user-select: none;
            position: relative;
          "
        ></div>

        <!-- <p class="live-bidders">Live Bidders -38</p>
        <br />
        <h6>Auction ends in : <span>12Hr 34Min</span></h6>
        <div class="row button-live-row">
          <div class="button-live-single col">
            <a class="view-scope-outline" href="#" type="button">VIEW SCOPE</a>
          </div>

          <div class="button-live-single col">
            <a class="view-scope-fill" href="#" type="button">VIEW SCOPE</a>
          </div>
        </div> -->
      </div>
    </section>
<section class="tender-section">
    <div class="dark-tender-layer"></div>
    <div class="tender-section-content">
        <div class="title-group">
            <h4>Tallentor Tenders</h4>
            <hr />
        </div>
        <br />
        <h5>Global Tender Marketplace</h5>

        <br />
        <ul>
            <li>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et
            </li>

            <li>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et
            </li>
        </ul>

        <div class="today-trade">
            <div class="single-trade">
                <div class="row">
                    <div class="col-8 col">
                        <h4>Today's Tenders</h4>
                    </div>
                    <div class="col-4 col">
                        <h3>12</h3>
                    </div>
                </div>
            </div>
            <div class="single-trade">
                <div class="row">
                    <div class="col-8 col">
                        <h4>Live Tenders</h4>
                    </div>
                    <div class="col-4 col">
                        <h3>123</h3>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="trade-all-view">
            <a href="{{route('frontend.tender.index')}}">View All Tenders</a>
        </div>
    </div>
</section>
<section class="pic-chalangers-section">
    <div class="title-group">
        <h4>
            Pick your challenge <br />
            & Get started
        </h4>
        <hr />
    </div>
    <br />
    <p class="pick-text">
    The easiest way to grab your next project… Select the project
                matches your team profile and get hired immediately by companies
                around the world. <b>It’s that Simple</b>


    </p>
    <br />
    <div class="swiper-container swiper-container-mob2">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="pick-card">
                    <h6>Mobile app Development</h6>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy
                    </p> -->
                    <div class="row m-0">
                        <p class="views">45 Views</p>
                        <i class="fa fa-long-arrow-up ml-2 red" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('frontend.project_page',1)}}" class="pick-button" type="button">View Project</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="pick-card">
                    <h6>Multivendor ecommerce solution</h6>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy
                    </p> -->
                    <div class="row m-0">
                        <p class="views">45 Views</p>
                        <i class="fa fa-long-arrow-up ml-2 red" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('frontend.project_page',1)}}" class="pick-button" type="button">View Project</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="pick-card">
                    <h6>Dynamic web solution</h6>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy
                    </p> -->
                    <div class="row m-0">
                        <p class="views">45 Views</p>
                        <i class="fa fa-long-arrow-up ml-2 red" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('frontend.project_page',1)}}" class="pick-button" type="button">View Project</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="pick-card">
                    <h6>Digital Marketing campaign</h6>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy
                    </p> -->
                    <div class="row m-0">
                        <p class="views">45 Views</p>
                        <i class="fa fa-long-arrow-up ml-2 red" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('frontend.project_page',1)}}" class="pick-button" type="button">View Project</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="pick-card">
                    <h6>Customized CRM solution</h6>
                    <!-- <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy
                    </p> -->
                    <div class="row m-0">
                        <p class="views">45 Views</p>
                        <i class="fa fa-long-arrow-up ml-2 red" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('frontend.project_page',1)}}" class="pick-button" type="button">View Project</a>
                </div>
            </div>
         
    
        </div>
        <!-- Add Pagination -->
        <br />
        <br />
        <div class="swiper-pagination swiper-pagination-mob2"></div>
    </div>
</section>
<section class="expert-center-section">
    <div class="title-group">
        <h4>Expert Centre</h4>
        <hr />
    </div>
    <br />
    <h6>Plan Your Project with our experts</h6>
    <h5>Plan it precisely, Save money and time</h5>
    <div class="content">
        <p>
            The biggest challenge for any company is to define the scale and the
            specifications of a projects.
        </p>
        <p>
            Our professional team will take care of the end to end planning of
            your project to take the load off your mind.
        </p>

        <h6>Step 01</h6>
        <p>Register as a company and request for a consultation</p>

        <h6>Step 02</h6>
        <p>One of our members will arrange time for virtual meeting</p>

        <h6>Step 03</h6>
        <p>Brief your requirements</p>
    </div>
    <img src="assets/Asset 2graphic1.png" alt="" />
    <br />
    <br />
    <div class="button-expert">
        <a href="{{route("frontend.expert_center")}}" type="button">Book your 15 Min FREE consultation</a>
    </div>
</section>
<section class="shop-section">
    <div class="title-group">
        <h4>Tallentor Shop</h4>
        <hr />
    </div>
    <br />
    <div class="swiper-container swiper-container-mob">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card-shop">
                <img  src="{{url('theme_light/assets/pos.jpg')}}" alt="">
                    <div class="card-shop-bottum">
                        <div class="row m-0">
                            <p><a href="#"> POS System</a></p>
                            <div class="rating ml-auto">
                                <i class="fa fa-star" aria-hidden="true"></i>5.0
                            </div>
                        </div>
                        <div class="row m-0 mt-1">
                            <div class="price">
                                <h3>From $1800</h3>
                                <h6>per month</h6>
                            </div>
                            <a href="#" class="ml-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card-shop">
                <img src="{{url('theme_light/assets/ecommerce.jpg')}}" alt="">
                    <div class="card-shop-bottum">
                        <div class="row m-0">
                        <p><a href="#">E-Commerce Solution</a></p>
                            <div class="rating ml-auto">
                                <i class="fa fa-star" aria-hidden="true"></i>5.0
                            </div>
                        </div>
                        <div class="row m-0 mt-1">
                            <div class="price">
                            <h3>From $50</h3>
                                            <h6>per month</h6>
                            </div>
                            <a href="#" class="ml-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card-shop">
                <img src="{{url('theme_light/assets/payroll.jpg')}}" alt="">
                    <div class="card-shop-bottum">
                        <div class="row m-0">
                        <p><a href="#">Payroll mana....</a></p>
                            <div class="rating ml-auto">
                                <i class="fa fa-star" aria-hidden="true"></i>5.0
                            </div>
                        </div>
                        <div class="row m-0 mt-1">
                            <div class="price">
                            <h3>From $1500</h3>
                                            <h6>per month</h6>
                            </div>
                            <a href="#" class="ml-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card-shop">
                <img src="{{url('theme_light/assets/multivendorecommerce.jpg')}}" alt="">
                    <div class="card-shop-bottum">
                        <div class="row m-0">
                        <p><a href="#">Multi vendor ec..</a></p>
                            <div class="rating ml-auto">
                                <i class="fa fa-star" aria-hidden="true"></i>5.0
                            </div>
                        </div>
                        <div class="row m-0 mt-1">
                            <div class="price">
                            <h3>From $100</h3>
                                            <h6>per month</h6>
                            </div>
                            <a href="#" class="ml-auto">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <br />
        <br />
        <div class="swiper-pagination-mob swiper-pagination"></div>
    </div>
    <br />
    <div class="button-shop">
        <a  href="{{route('frontend.shop.index')}}" type="button">View All Products</a>
    </div>
</section>
<section class="acadamy-section-mobile">
    <div class="title-group">
        <h4>Tallentor Academy</h4>
        <hr />
    </div>
    <div class="card-acadamy">
        <h3>Web Development</h3>
        <div class="label-acadamy">
            <p>Fundamental</p>
        </div>
        <div class="acadamy-details row">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <p>6 Months</p>
            <!-- <hr />
            <i class="fa fa-align-justify" aria-hidden="true"></i>
            <p>course list Lor</p> -->
        </div>
        <div class="acadamy-details row">
            <i class="fa fa-check" aria-hidden="true"></i>
            <p>Project Based Learning with industri...</p>
        </div>
        <div class="color-card yellow-bg"></div>
    </div>

    <div class="card-acadamy">
    <h3>Digital Marketing</h3>
        <div class="label-acadamy">
            <p>Fundamental</p>
        </div>
        <div class="acadamy-details row">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <p>3 Months</p>
            <!-- <hr />
            <i class="fa fa-align-justify" aria-hidden="true"></i>
            <p>course list Lor</p> -->
        </div>
        <div class="acadamy-details row">
            <i class="fa fa-check" aria-hidden="true"></i>
            <p>
Industrial Training with Realti...</p>
        </div>
        <div class="color-card green-bg"></div>
    </div>

    <div class="card-acadamy">
    <h3>Graphic Designing</h3>
        <div class="label-acadamy">
            <p>Fundamental</p>
        </div>
        <div class="acadamy-details row">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <p>3 Months</p>
            <!-- <hr />
            <i class="fa fa-align-justify" aria-hidden="true"></i>
            <p>course list Lor</p> -->
        </div>
        <div class="acadamy-details row">
            <i class="fa fa-check" aria-hidden="true"></i>
            <p>Industrial Training with Job placeme...</p>
        </div>
        <div class="color-card red-bg"></div>
    </div>

    <br />
    <br />
    <div class="button-acadamy">
        <a href="#" type="button">Register Now</a>
    </div>
</section>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush