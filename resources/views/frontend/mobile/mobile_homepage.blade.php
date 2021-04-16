@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

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
                <input type="text" class="form-control" placeholder="Projects you are looking for" aria-label="Recipient's username" aria-describedby="basic-addon2" />
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
                <a data-toggle="modal" data-target="#exampleModalCenter" class="view-scope-outline" href="#" type="button">VIEW BRIEF</a>
            </div>

            <div class="button-live-single col">
                <a class="view-scope-fill" href="{{route('frontend.auth.login')}}" type="button">SIGN IN TO BIT</a>
            </div>
        </div>
        <br>
        <br />
        <div id="container" data-animscroll="fade-left" style="
            height: 300px;
            -webkit-tap-highlight-color: transparent;
            user-select: none;
            position: relative;
          "></div>

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
        <div class="row">
        <a style="    margin: auto;
    justify-content: center;
    font-family: Poppins;
    padding: 6px 20px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: 600;
    color: #fff;
    background: #F83535 ;" href="#">VIEW ALL AUCTIONS</a>
        </div>
       
    </div>
</section>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: Poppins;">Project Brief</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" style="border: transparent;">
          <div class="container"><br>
            <b style="font-family: Poppins;">Development of eCommerce platform for a leading Fashion brand</b>
            <br><br>
            <p style="font-family: Poppins;">
              We are a multinational Currier company who
              is planning to get a customized ERP solution
              with the following modules <br>
              <br>
            </p>

            <ul style="font-family: Poppins;">
              <li>
                Accounting &amp; Financials
              </li>
              <li>Human Capital Management</li>
              <li>Manufacturing &amp; Distribution</li>
              <li>Manufacturing &amp; Distribution</li>
              <li>Sales &amp; Inventory Management</li>
              <li>Supply chain management</li>
              <li>Customer relationship management</li>
              <li>Support center management</li>
              <li>Deployment</li>
            </ul>
            <br>
            <p style="font-family: Poppins;">We have completed the initial project scope.
              The team to undertake the process analysis
              and define the sub task management with clear milestones
            </p>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="font-family: Poppins;    color: #000;
    background: transparent;
    border: 1px solid #000 !important;
    border: transparent;" data-dismiss="modal">Close</button>
        <button type="button" style="font-family: Poppins;color: #fff;
    background: #0f9d58;
    border: 1px solid #0f9d58 !important;
    border: transparent;" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


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
            Digital platform connecting buyers and suppliers
            </li>

            <li>
            Get notified of Government and Private sector tenders
            </li>
            <li>
            Making the tender process accessible for businesses of every scale.
            </li>
        </ul>

        <div class="today-trade">
            <div class="single-trade">
                <div class="row">
                    <div class="col-8 col">
                        <h4>Today's Tenders</h4>
                    </div>
                    <div class="col-4 col">
                        <h3>6</h3>
                    </div>
                </div>
            </div>
            <div class="single-trade">
                <div class="row">
                    <div class="col-8 col">
                        <h4>Live Tenders</h4>
                    </div>
                    <div class="col-4 col">
                        <h3>28</h3>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div class="trade-all-view">
            <a href="{{route('frontend.tenders.index')}}">View All Tenders</a>
        </div>
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
                    <img src="{{url('theme_light/assets/pos.jpg')}}" alt="">
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
        <a href="{{route('frontend.shop.index')}}" type="button">View All Products</a>
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
        <a href="{{route('frontend.academy.index')}}" type="button">Register Now</a>
    </div>
</section>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif

@endpush