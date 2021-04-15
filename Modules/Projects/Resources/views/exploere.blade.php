@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

   @include('projects::includes.explore_page.category_menu')
    <!-- body  -->
    <div id="explore-body" class="mt-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Marketplace</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Explore
                    </li>
                </ol>
            </nav>
            <h1>Projects Marketplace </h1>
            <p>
                Find the projects matches the skill set of your team on the largest Marketplace for global talents.
                Pick from the hotlist or search through your favorite categories or skillset

            </p>
            <div class="popular">
                <h3>Trending Projects</h3>
                <div class="row">
                    <div class="card">
                        <div class="circle">
                            <div class="inner">
                                <img src="{{url('/theme_light/assets/image/icon/explore/mobile-app.svg')}}" style="width: 40px;height: 40px;margin: auto;display: flex;" alt="">
                            </div>
                        </div>
                        <h3>Mobile app Development</h3>
                    </div>

                    <div class="card">
                        <div class="circle">
                            <div class="inner">
                                <img src="{{url('/theme_light/assets/image/icon/browser.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Front End Development</h3>
                    </div>

                    <div class="card">
                        <div class="circle">
                            <div class="inner">
                                <img src="{{url('/theme_light/assets/image/icon/explore/online-shop.svg')}}" style="width: 40px;height: 40px;margin: auto;display: flex;" alt="">
                            </div>
                        </div>
                        <h3>E-Commerce application </h3>
                    </div>

                    <div class="card">
                        <div class="circle">
                            <div class="inner">
                                <img src="{{url('/theme_light/assets/image/icon/explore/organization.svg')}}" style="width: 40px;height: 40px;margin: auto;display: flex;" alt="">
                            </div>
                        </div>
                        <h3>ERP solution</h3>
                    </div>

                    <div class="card">
                        <div class="circle">
                            <div class="inner">
                                <img src="{{url('/theme_light/assets/image/icon/explore/communicate.svg')}}" style="width: 40px;height: 40px;margin: auto;display: flex;" alt="">
                            </div>
                        </div>
                        <h3>Digital Marketing campaign</h3>
                    </div>

                    <div class="card">
                        <div class="circle">
                            <div class="inner">
                                <img src="{{url('/theme_light/assets/image/icon/explore/payroll.svg')}}" style="width: 40px;height: 40px;margin: auto;display: flex;" alt="">
                            </div>
                        </div>
                        <h3>Payroll Management System</h3>
                    </div>
                </div>
            </div>
            <div class="filters">
                <div class="row">
                    <div class="left-row">
                        <div class="row">
                            <div class="single-filter">
                                <label for="">Sort by :</label>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Latest
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-filter">
                                <label for="">Project Type :</label>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Short Tearm
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-filter">
                                <label for="">Country :</label>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Sri Lanka
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-filter">
                                <label for="">Bids :</label>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                        10 - 15
                                    </button>
                                    <div  class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-filter">
                                <label for="">View :</label>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Expand
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="found-projects">
                <h6 class="project-count">328 Projects found</h6>
            </div>
            <div class="project-list">
                @include('projects::includes.explore_page.items')
            </div>

            <div class="pagination-explore">
                <div class="pagination d-flex justify-content-center flex-wrap">
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')

@endpush





