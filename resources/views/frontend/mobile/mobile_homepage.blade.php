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
        <h4 style="line-height: 20px;">The place where</h4>
        <h4 style="line-height: 22px">
            the <span>top challengers</span> meet the <span><br> best talent</span>
        </h4>

        <form action="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}" class="search-hero-mobile">
            <div class="input-group">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" class="form-control" placeholder="Projects you are looking for" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                <!-- <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        Search
                    </button>
                </div> -->
            </div>

            <div class="row justify-content-center mt-4">
               

                    <div class="col-6 text-right">
                        <a href="{{route('frontend.talents')}}" type="button" class="search-button">Find Talent</a>
                    </div>
                    <div class="col-6 text-left">
                        <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}" type="button" class="search-button">Find Work</a>
                    </div>
                </div>
        </form>

        <!-- <h4>or</h4>

        <a href="{{route('frontend.auth.login')}}" type="button">Post a Project</a> -->
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
    <div class="swiper-container swiper-container-mob2" style="max-width: 100%; overflow-x: hidden;">
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
        <div class="swiper-pagination-mob2 text-center"></div>
    </div>
</section>

<section class="categories">
    <div class="container text-center" style="margin-top: 3rem; margin-bottom: 5rem">
        <h4 style = "font: normal normal bold 18px/56px Poppins; letter-spacing: 0px; line-height: 1; color: #000000; text-align: center;">Top Categories at Tallentor</h4>
        <p style="max-width: 90%; margin: auto; text-align: center; font: normal normal normal 12px/20px Karla; letter-spacing: 0px; color: #000000; line-height: 1.5;">one place with thousands of creative talents</p>

        <div class="row justify-content-between mt-4">
            <div class="col-12">
                <div class="dropdown categories" id="nav-tab" role="tablist">
                    <button class="btn btn-secondary dropdown-toggle mb-3 w-75" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" style="background-color: #0f9d58;">
                        Top Categories
                    </button>

                    <div class="dropdown-menu w-75" aria-labelledby="dropdownMenuButton">
                        <div class="nav nav-tabs">

                            @foreach($categories as $category)
                                @if($category->status == 'Enabled')
                                    @if($loop->first)
                    
                                        <button class="nav-link active text-left border-0 bg-light w-100" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true">
                                            <div class="row align-items-center text-center">
                                                <div class="col-4">
                                                    <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 30px;">
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0" style="font-size: 0.9rem">{{ $category->name}}</p>
                                                </div>
                                            </div>
                                        </button>

                                    @else

                                        <button class="nav-link text-left border-0 bg-light w-100" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true">
                                            <div class="row align-items-center text-center">
                                                <div class="col-4">
                                                    <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 30px;">
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0" style="font-size: 0.9rem">{{ $category->name}}</p>
                                                </div>
                                            </div>
                                        </button>

                                    @endif
 
                                @else

                                    <button class="nav-link text-left border-0 bg-light w-100" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true" disabled>
                                        <div class="row align-items-center text-center">
                                            <div class="col-4">
                                                <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 30px;">
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0" style="font-size: 0.9rem">{{ $category->name}}</p>
                                            </div>
                                        </div>
                                    </button>

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="tab-content" id="nav-tabContent">

                    <!-- <h6 class="mb-4 category_title"></h6> -->

                    @foreach($categories as $category)
                        @if($loop->first)

                            <div class="tab-pane fade show active" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">
                                <div class="row mb-3 justify-content-center">
                                    @foreach(App\Models\Tallents::where('category_id', $category->id)->get() as $talent)
                                        <div class="col-4 p-2">
                                        <a href="{{ route('frontend.post_a_job', [ $talent->category_slug, $talent->talent_slug ] ) }}">
                                            <img src="{{url('upload/projects/tallents', $talent->image)}}" alt="{{ $talent->title }}" class="img-fluid rounded w-100" style="height:80px;"></a>
                                            <p class="mt-2 mb-0" style="font-size: 0.8rem">{{ $talent->title }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        @else

                            <div class="tab-pane fade show" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">
                                <div class="row mb-3 justify-content-center">
                                    @foreach(App\Models\Tallents::where('category_id', $category->id)->get() as $talent)
                                        <div class="col-4 p-2">
                                        <a href="{ route('frontend.post_a_job', [ $talent->category_slug, $talent->talent_slug ] ) }}">
                                            <img src="{{url('upload/projects/tallents', $talent->image)}}" alt="{{ $talent->title }}" class="img-fluid rounded w-100" style="height:80px;"></a>
                                            <p class="mt-2 mb-0" style="font-size: 0.8rem">{{ $talent->title }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="tallentor_mall">
    <div class="container text-center" style="margin-bottom: 7rem">

        <div class="row mb-4 justify-content-center">
            <div class="col-6 align-items-center">
                <img src="{{ url('theme_light/assets/tallentor_mall/tallentor_mall_logo.jpg') }}" alt="" class="img-fluid" style="height: 40px;">
                <h4 class="d-inline-block my-auto" style="font: normal normal bold 18px/56px Poppins; letter-spacing: 0px; line-height: 1; color: #000000; text-align: center;">Tallentor Mall</h4>
            </div>
        </div>


        <div class="row mb-4">
            <div class="col-4 px-2">
                <img src="{{ url('theme_light/assets/tallentor_mall/traditional_modern_musk.jpg') }}" alt="" class="img-fluid w-100">
                <p class="mt-2 mb-0" style="font-size: 0.9rem">Traditional Modern Mask</p>
            </div>

            <div class="col-4 px-2">
                <img src="{{ url('theme_light/assets/tallentor_mall/stone_statues.jpg') }}" alt="" class="img-fluid w-100">
                <p class="mt-2 mb-0" style="font-size: 0.9rem">Stone Statues</p>
            </div>

            <div class="col-4 px-2">
                <img src="{{ url('theme_light/assets/tallentor_mall/traditional_srilanka _painting.jpg') }}" alt="" class="img-fluid w-100">
                <p class="mt-2 mb-0" style="font-size: 0.9rem">Traditional Sri Lanka Painting</p>
            </div>

        </div>

        <div class="row">
            <div class="col-4 px-2">
                <img src="{{ url('theme_light/assets/tallentor_mall/wooden_elephant_statue.jpg') }}" alt="" class="img-fluid w-100">
                <p class="mt-2 mb-0" style="font-size: 0.9rem">Wooden Elephant Statue</p>
            </div>

            <div class="col-4 px-2">
                <img src="{{ url('theme_light/assets/tallentor_mall/cane_furniture.jpg') }}" alt="" class="img-fluid w-100">
                <p class="mt-2 mb-0" style="font-size: 0.9rem">Cane Furniture</p>
            </div>

            <div class="col-4 px-2">
                <img src="{{ url('theme_light/assets/tallentor_mall/srilanka-batik_saree.jpg') }}" alt="" class="img-fluid w-100">
                <p class="mt-2 mb-0" style="font-size: 0.9rem">Sri Lanka Batik Saree</p>
            </div>
            
        </div>
    </div>
</section> -->


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

    <div class="text-center">
        <img src="{{url('theme_light/assets/expert_center/expert_center.png')}}" alt="Expert Center" data-animscroll="fade-left">
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
    <div class="swiper-container swiper-container-mob" style="max-width: 100%; overflow-x: hidden;">
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
        <div class="swiper-pagination-mob text-center"></div>
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


<section>
    <div class="container-fluid social-banner mt-5">
        <div class="container social">
            <div class="row justify-content-center align-items-center mb-5">
                <div class="col text-center">
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                </div>
                <div class="col text-center">
                    <a href=""><i class="fab fa-twitter"></i></a>
                </div>
                <div class="col text-center">
                    <!-- <img src="{{ url('theme_light/assets/footer/youtube.png') }}" alt="" class="img-fluid"> -->
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
                <div class="col text-center">
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col text-center">
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-4 fb">
                    <a href="" style="color:black" target="_blank" id="stack_panel">
                        <div class="card" style="height: 26rem;">
                            <img src="" id="facebook_src" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                            <div class="card-body">
                                <p class="card-text mb-1" id="description_fb"></p>
                                
                                <div class="text-right">
                                    <img src="{{ url('theme_light/assets/footer/fb_color.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 mb-4 twitter">
                    <a href="" style="color:black" target="_blank" class="twitter-link">
                        <div class="card" style="height: 26rem;">
                            <img src="{{ url('theme_light/assets/footer/twitter_large.png') }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                            <div class="card-body">
                                <p class="card-text mb-1" id="description_twitter"></p>
                                
                                <div class="text-right">
                                    <img src="{{ url('theme_light/assets/footer/twitter_color.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                @if(count(Modules\Blog\Entities\BlogPost::get()) != 0)
                    @foreach(Modules\Blog\Entities\BlogPost::latest()->take(2)->get() as $key => $blog_posts) 
                        <div class="col-12 mb-4">
                            <a href="{{url('blog/all')}}" style="color:black">
                                <div class="card" style="height: 26rem;">
                                    <img src="{{ url($blog_posts->feature_image) }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                                    <div class="card-body">
                                        <div class="card-text mb-1" style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical;">{!!$blog_posts->body!!}</div>
                                        
                                        <div class="text-right">
                                            @if(Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first() != null)
                                                <a href="{{url('blog/all')}}" style="color: {{Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->color}}; font-size: 1.1rem;">{{ Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->name }}</a>
                                            @else
                                                <p style="color: Red; font-size: 1.1rem;">Category Deleted</p>   
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                <!-- <div class="col-12 mb-4">
                    <div class="card" style="height: 26rem;">
                        <img src="{{ url('theme_light/assets/footer/4.png') }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                        <div class="card-body">
                            <p class="card-text mb-1">We're giving away 100,000,000 $Shib to 5 random people (20,000,000 each)Money bag RocketFollow Me! Gem stoneRetweet and Like. Open handsComment #SHIBARMY  ⚠followers only giveaway⚠ #BTC  #ETH #Giveaway #ADA</p>
                            
                            <div class="text-right">
                                <a href="#" style="color: #FF0000; font-size: 1.1rem;">News</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif

<script>
    $.get("{{route('facebook_news')}}", function(data, status){
        var backimage_f = JSON.parse(data);
        $("#facebook_src").attr("src",backimage_f.image);
        $("#description_fb").html(backimage_f.title);
        $("#stack_panel").attr("href",backimage_f.link);
    }).
    fail(function(jqXHR, textStatus, errorThrown) {
        $('.fb').addClass('d-none');
    });


    $.get("{{route('twitter_news')}}", function(data, status){
        var data = JSON.parse(data);
        $(".twitter-link").attr("href", data.link);
        $("#description_twitter").text(data.title);
    }).
    fail(function(jqXHR, textStatus, errorThrown) {
        $('.twitter').addClass('d-none');
    });

</script>
@endpush