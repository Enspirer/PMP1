@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<style>
.navClass .dropdown-menu {
  height: 300px;
  overflow-y: scroll;
}
::-webkit-scrollbar {
  width: 8px;
  border: 1px solid #d5d5d5;
}
::-webkit-scrollbar-track {
  border-radius: 0;
  background: #eeeeee;
}
::-webkit-scrollbar-thumb {
  border-radius: 0;
  background: #b0b0b0;
}
</style>

<div class="hero-image">
    <div class="dark-layer-hero"></div>
    <div class="hero-mobile-content">
        <h4>The place where</h4>
        <h4>
            the <span>top challengers</span> meet the <span>best talent</span>
        </h4>

        <form action="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}" class="search-hero-mobile">
            <div class="input-group">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" class="form-control" placeholder="Projects you are looking for" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        Search
                    </button>
                </div>
            </div>
        </form>

        <h4>or</h4>

        <a href="{{route('frontend.auth.login')}}" type="button">Post a Project</a>
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
<section class="categories">
    <div class="container text-center" style="margin-top: 5rem; margin-bottom: 5rem">
        <h4 style = "font: normal normal bold 18px/56px Poppins; letter-spacing: 0px; line-height: 1; color: #000000; text-align: center;">Top Categories at Tallentor</h4>
        <p style="max-width: 90%; margin: auto; text-align: center; font: normal normal normal 12px/20px Karla; letter-spacing: 0px; color: #000000; line-height: 1.5;">one place with thousands of creative talents</p>

        <div class="row justify-content-between mt-4">
            <div class="col-12">
                <div class="dropdown graphic-design" id="nav-tab" role="tablist">
                    <button class="btn btn-secondary dropdown-toggle mb-3 w-75" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" style="background-color: #0f9d58;">
                        Top Categories
                    </button>

                    <div class="dropdown-menu w-75" aria-labelledby="dropdownMenuButton">
                        <div class="nav nav-tabs">
                    
                            <button class="nav-link active text-left border-0 bg-light w-100" id="nav-programming-tab" data-toggle="tab" data-target="#nav-programming" type="button" role="tab" aria-controls="nav-programming" aria-selected="true">
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/programing_development.svg')}}" alt="" style="height: 30px;">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Programming & Development</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false">
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/digital_marketing.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Digital Marketing</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false">
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/graphic_designing.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Graphic Designing</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="nav-education-tab" data-toggle="tab" data-target="#nav-education" type="button" role="tab" aria-controls="nav-education" aria-selected="false">
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/education_training.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Education & Training</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="" data-toggle="tab" data-target="#" type="button" role="tab" aria-controls="nav-digital" aria-selected="false" disabled>
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/writing_translation.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Writing & Translation</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="" data-toggle="tab" data-target="#" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false" disabled>
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/video_photography.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Video & Photography</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="" data-toggle="tab" data-target="#" type="button" role="tab" aria-controls="nav-online" aria-selected="true" disabled>
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/music_audio.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Music & Audio</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="" data-toggle="tab" data-target="#" type="button" role="tab" aria-controls="nav-digital" aria-selected="false" disabled>
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/business_sales.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Business & Sales</p>
                                    </div>
                                </div>
                            </button>

                            <button class="nav-link text-left border-0 bg-light w-100" id="" data-toggle="tab" data-target="#" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false" disabled>
                                <div class="row align-items-center text-center">
                                    <div class="col-4">
                                        <img src="{{url('theme_light/assets/graphic/art_craft.svg')}}" alt="" style="height: 30px">
                                    </div>
                                    <div class="col-8">
                                        <p class="mb-0" style="font-size: 0.9rem">Art & Craft</p>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="tab-content" id="nav-tabContent">

                    <h6 class="mb-4 category_title"></h6>

                    <div class="tab-pane fade show active" id="nav-programming" role="tabpanel" aria-labelledby="nav-programming-tab">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/basic_website.png')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Basic Website</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/dynamic_website.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Dynamic Website</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/ecommerce_website.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">E-commerce Website</p>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                                <img src="{{url('theme_light/assets/graphic/wordpress_website.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">WordPress Website</p>
                            </div>
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                                <img src="{{url('theme_light/assets/graphic/landing.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Landing Page Design</p>
                            </div>
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                                <img src="{{url('theme_light/assets/graphic/web_banner.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Web Banners</p>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                                <img src="{{url('theme_light/assets/graphic/icon.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Icon Pack Design</p>
                            </div>
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                                <img src="{{url('theme_light/assets/graphic/wireframe.png')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Website Wireframes</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/social-media-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Social Media Marketing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/seo-2.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Search Engine Optimization</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/search-engine-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Search Engine Marketing</p>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/video-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Video Marketing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/e-commerce-marketing-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">E-Commerce Marketing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/sms-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">SMS Marketing</p>
                            </div>
                        </div>  

                        <div class="row justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/email-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Email Marketing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/mobile-app-marketing-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Mobile App Marketing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/web-analytics-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="height:80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Web Analytics</p>
                            </div>
                        </div>    
                    </div>

                    <div class="tab-pane fade" id="nav-graphic" role="tabpanel" aria-labelledby="nav-graphic-tab">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/coffee.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Logo Design</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/company-branding.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Company Branding</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/company-stationary.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Company Stationary</p>
                            </div>  
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/package-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Package Design</p>
                            </div>
                            <div class="col-3 p-1">   
                                <img src="{{url('theme_light/assets/graphic/brochure-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Brochure Design</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/flyer-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Flyer Design</p>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/website-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Website Design</p>
                            </div>
                            <div class="col-3 p-1">   
                                <img src="{{url('theme_light/assets/graphic/app-ui-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">App UI Design</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/presentation-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Presentation Design</p>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/web-banners.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Web Banners</p>
                            </div>
                            <div class="col-3 p-1">   
                                <img src="{{url('theme_light/assets/graphic/ux.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">UX Designs</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/photoshop-editing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Photoshop Editing</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/digital-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Digital Marketing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/graphic-designing-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Graphic Designing</p>
                            </div>
                            <div class="col-3 p-1">
                                <img src="{{url('theme_light/assets/graphic/mobile-apps.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Mobile Apps</p>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                                <img src="{{url('theme_light/assets/graphic/web-programming.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Web Programming</p>
                            </div>
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                                <img src="{{url('theme_light/assets/graphic/seo-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Search Engine Optimization</p>
                            </div>
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                                <img src="{{url('theme_light/assets/graphic/shopify.png')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">Shopify Integration</p>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                                <img src="{{url('theme_light/assets/graphic/php-laravel.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">PHP Laravel</p>
                            </div>
                            <div class="col-3 p-1" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                                <img src="{{url('theme_light/assets/graphic/wordpress.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 80px;">
                                <p class="mt-2 mb-0" style="font-size: 0.8rem">WordPress</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
                <a href="{{route('frontend.auth.login')}}"  type="button" style="font-family: Poppins;color: #fff;
    background: #0f9d58;
    border: 1px solid #0f9d58 !important;
    border: transparent;" class="btn btn-primary">Save changes</a>
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
                            <a href="{{route('frontend.shop.item')}}">  <img  src="{{url('theme_light/assets/pos.jpg')}}" alt=""></a>  
                                <div class="card-shop-bottum">
                                    <div class="row m-0">
                                        <p><a href="{{route('frontend.shop.item')}}"> POS System</a></p>
                                        <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                                    </div>
                                    <div class="row m-0 mt-1">
                                        <div class="price">
                                            <h3>From $2500</h3>
                                            <h6>Fully Customizable</h6>
                                         
                                            <!-- <h6>per month</h6> -->
                                        </div>
                                        <a href="{{route('frontend.shop.item')}}" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-shop">
                            <a href="{{route('frontend.shop.item')}}" >  <img src="{{url('theme_light/assets/ecommerce.jpg')}}" alt=""></a>
                                <div class="card-shop-bottum">
                                    <div class="row m-0">
                                        <p><a href="{{route('frontend.shop.item')}}">E-Commerce Solution</a></p>
                                        <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                                    </div>
                                    <div class="row m-0 mt-1">
                                        <div class="price">
                                            <h3>From $50</h3>
                                            <h6>per month</h6>
                                        </div>
                                        <a href="{{route('frontend.shop.item')}}" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-shop">
                            <a href="{{route('frontend.shop.item')}}"> <img src="{{url('theme_light/assets/payroll.jpg')}}" alt=""> </a>
                                <div class="card-shop-bottum">
                                    <div class="row m-0">
                                        <p><a href="{{route('frontend.shop.item')}}">Payroll managemen..</a></p>
                                        <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                                    </div>
                                    <div class="row m-0 mt-1">
                                        <div class="price">
                                            <h3>From $3000</h3>
                                            <h6>Fully Customizable</h6>
                                            <!-- <h6>per month</h6> -->
                                        </div>
                                        <a href="{{route('frontend.shop.item')}}" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-shop">
                            <a href="{{route('frontend.shop.item')}}">    <img src="{{url('theme_light/assets/multivendorecommerce.jpg')}}" alt=""></a>
                                <div class="card-shop-bottum">
                                    <div class="row m-0">
                                        <p><a href="{{route('frontend.shop.item')}}">Multi vendor ecom..</a></p>
                                        <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                                    </div>
                                    <div class="row m-0 mt-1">
                                        <div class="price">
                                            <h3>From $100</h3>
                                            <h6>per month</h6>
                                        </div>
                                        <a href="{{route('frontend.shop.item')}}" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-shop">
                            <a href="{{route('frontend.shop.item')}}">  <img src="{{url('theme_light/assets/erp.jpg')}}" alt=""> </a>
                                <div class="card-shop-bottum">
                                    <div class="row m-0">
                                        <p><a href="{{route('frontend.shop.item')}}">ERP Hospital Man..</a></p>
                                        <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                                    </div>
                                    <div class="row m-0 mt-1">
                                        <div class="price">
                                            <h3>From $4000</h3>
                                            <h6>Fully Customizable</h6>
                                            <!-- <h6>per month</h6> -->
                                        </div>
                                        <a href="{{route('frontend.shop.item')}}" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card-shop">
                            <a href="{{route('frontend.shop.item')}}">    <img src="{{url('theme_light/assets/crm.jpg')}}" alt=""> </a>
                                <div class="card-shop-bottum">
                                    <div class="row m-0">
                                        <p><a href="{{route('frontend.shop.item')}}">CRM System</a></p>
                                        <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                                    </div>
                                    <div class="row m-0 mt-1">
                                        <div class="price">
                                            <h3>From $3000</h3>
                                            <h6>Fully Customizable</h6>
                                            <!-- <h6>per month</h6> -->
                                        </div>
                                        <a href="{{route('frontend.shop.item')}}" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
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