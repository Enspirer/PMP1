@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

   @include('projects::includes.explore_page.category_menu')
    <!-- body  -->
    <div id="explore-body">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Marketplace</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Web Development
                    </li>
                </ol>
            </nav>
            <h1>Web Development</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.erunt
                reprehenderit et explicabo sed minus doloribus commodi at, aliquam
                tempora earum magnam perferendis asperiores. Culpa?
            </p>
            <div class="popular">
                <h3>Popular Picks</h3>
                <div class="row">
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
                                <img src="{{url('/theme_light/assets/image/icon/browser.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Front End Development</h3>
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
                                <img src="{{url('/theme_light/assets/image/icon/browser.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Front End Development</h3>
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
                                <img src="{{url('/theme_light/assets/image/icon/browser.png')}}" alt="">
                            </div>
                        </div>
                        <h3>Front End Development</h3>
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
                <div class="single-item">
                    <div class="container">
                        <div class="title">
                            <div class="row">
                                <div class="text col-md-11">
                                    <div class="featured-badge">
                                        <div class="content">
                                            <div class="circle">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <div class="ribbon-red"><p>Featured Project</p></div>
                                        </div>
                                    </div>
                                    <h1>
                                        World-class designer to make mock-up of stages of our
                                        process and a dashboard for landing page
                                    </h1>
                                </div>
                                <div class="favorite col-md-1">
                                    <div class="circle">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time row">
                            <p>Posted 1 day ago</p>
                            <p>Est. Time: Less than 1 week</p>
                            <p>Est. Time: Less than 1 week</p>
                        </div>
                        <div class="description">
                            <h6>
                                We need support making icons for our website. E.g a mock-up of
                                what one of our screens will look like on our landing page.
                                Ideally, we'd do this as a working session where I'd talk
                                through what we need.
                            </h6>
                            <div class="skill row">
                                <p>Skill set:</p>
                                <p>Wordpress</p>
                                <p>Vector Graphics</p>
                                <p>Figma</p>
                                <p>Adobe XD</p>
                                <p>UI Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="badge">
                        <div class="row">
                            <div class="icon-group row">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.817" height="26.817" viewBox="0 0 26.817 26.817">
                                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M27.379,13.971A13.408,13.408,0,1,1,13.971.563,13.408,13.408,0,0,1,27.379,13.971Zm-14.959,7.1,9.948-9.948a.865.865,0,0,0,0-1.223L21.145,8.676a.865.865,0,0,0-1.223,0l-8.113,8.113L8.02,13A.865.865,0,0,0,6.8,13L5.574,14.224a.865.865,0,0,0,0,1.223L11.2,21.071a.865.865,0,0,0,1.223,0Z" transform="translate(-0.563 -0.563)" fill="#0458ab"></path>
                                    </svg>
                                </i>
                                <p>Verified Customer</p>
                            </div>

                            <div class="icon-group row">
                                <i><svg  xmlns="http://www.w3.org/2000/svg"  width="32.599"  height="32.451"  viewBox="0 0 32.599 32.451">
                                        <g id="prize" transform="translate(-27.924)">
                                            <g id="Prize_2_" transform="translate(27.924 0)">
                                                <g id="Group_49" data-name="Group 49" transform="translate(0 0)">
                                                    <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#ffdf40">
                                                </g>
                                            </g>
                                            <path id="Path_35" data-name="Path 35" d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z" transform="translate(-211.776 0)" fill="#ffdf40"></path>
                                            <g id="Group_50" data-name="Group 50" transform="translate(35.648 7.575)">
                                                <path  id="Path_36"  data-name="Path 36"  d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z"  transform="translate(-136 -106)"  fill="#ffbe40">
                                            <path id="Path_37" data-name="Path 37" d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z" transform="translate(-211.776 -98.425)" fill="#ffbe40">
                                            <path  id="Path_39"  data-name="Path 39"  d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z"  transform="translate(-211.776 -172.146)"  fill="#ffbe40">
                                            <g id="Group_51" data-name="Group 51" transform="translate(40.25 13.249)">
                                                <path id="Path_38" data-name="Path 38" d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z" transform="translate(-200.395 -185.395)" fill="#ffdf40">
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                                <p>Premium Project</p>
                            </div>

                            <div class="icon-group row">
                                <i>
                                    <svg id="price-tag" xmlns="http://www.w3.org/2000/svg" width="28.711" height="28.711" viewBox="0 0 28.711 28.711">
                                        <g id="Group_60" data-name="Group 60">
                                            <path id="Path_42" data-name="Path 42" d="M25.72,0H18.132a5.351,5.351,0,0,0-3.808,1.577L1.02,14.882a3.486,3.486,0,0,0,0,4.929L8.9,27.692a3.486,3.486,0,0,0,4.928,0L27.134,14.385a5.346,5.346,0,0,0,1.577-3.807V2.991A2.993,2.993,0,0,0,25.72,0ZM22.131,9.57A2.991,2.991,0,1,1,25.122,6.58,2.993,2.993,0,0,1,22.131,9.57Z" fill="#00b312"/>
                                        </g>
                                    </svg>
                                </i>
                                <p>12 Bids</p>
                            </div>

                            <div class="icon-group row">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.75" height="29" viewBox="0 0 21.75 29">
                                        <path id="Icon_awesome-map-marker-alt" data-name="Icon awesome-map-marker-alt" d="M9.757,28.415C1.528,16.484,0,15.26,0,10.875a10.875,10.875,0,0,1,21.75,0c0,4.385-1.528,5.609-9.757,17.54a1.36,1.36,0,0,1-2.235,0Zm1.118-13.009a4.531,4.531,0,1,0-4.531-4.531A4.531,4.531,0,0,0,10.875,15.406Z" fill="tomato"/>
                                    </svg>
                                </i>
                                <p>Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="container">
                        <div class="title">
                            <div class="row">
                                <div class="text col-md-11">
                                    <h1>
                                        World-class designer to make mock-up of stages of our
                                        process and a dashboard for landing page
                                    </h1>
                                </div>
                                <div class="favorite col-md-1">
                                    <div class="circle">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time row">
                            <p>Posted 1 day ago</p>
                            <p>Est. Time: Less than 1 week</p>
                            <p>Est. Time: Less than 1 week</p>
                        </div>
                        <div class="description">
                            <h6>
                                We need support making icons for our website. E.g a mock-up of
                                what one of our screens will look like on our landing page.
                                Ideally, we'd do this as a working session where I'd talk
                                through what we need.
                            </h6>
                            <div class="skill row">
                                <p>Skill set:</p>
                                <p>Wordpress</p>
                                <p>Vector Graphics</p>
                                <p>Figma</p>
                                <p>Adobe XD</p>
                                <p>UI Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="badge">
                        <div class="row">
                            <div class="icon-group row">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.817" height="26.817" viewBox="0 0 26.817 26.817">
                                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M27.379,13.971A13.408,13.408,0,1,1,13.971.563,13.408,13.408,0,0,1,27.379,13.971Zm-14.959,7.1,9.948-9.948a.865.865,0,0,0,0-1.223L21.145,8.676a.865.865,0,0,0-1.223,0l-8.113,8.113L8.02,13A.865.865,0,0,0,6.8,13L5.574,14.224a.865.865,0,0,0,0,1.223L11.2,21.071a.865.865,0,0,0,1.223,0Z" transform="translate(-0.563 -0.563)" fill="#d4d4d4">
                                    </svg>
                                </i>
                                <p>Not Verified</p>
                            </div>

                            <div class="icon-group row">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="32.599" height="32.451" viewBox="0 0 32.599 32.451">
                                        <g id="prize" transform="translate(-27.924)">
                                            <g id="Prize_2_" transform="translate(27.924 0)">
                                                <g id="Group_49" data-name="Group 49" transform="translate(0 0)">
                                                    <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#d4d4d4"
                                                    />
                                                </g>
                                            </g>
                                            <path
                                                    id="Path_35"
                                                    data-name="Path 35"
                                                    d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z"
                                                    transform="translate(-211.776 0)"
                                                    fill="#d4d4d4"
                                            />
                                            <g
                                                    id="Group_50"
                                                    data-name="Group 50"
                                                    transform="translate(35.648 7.575)"
                                            >
                                                <path
                                                        id="Path_36"
                                                        data-name="Path 36"
                                                        d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z"
                                                        transform="translate(-136 -106)"
                                                        fill="#b7b7b7"
                                                />
                                            </g>
                                            <path
                                                    id="Path_37"
                                                    data-name="Path 37"
                                                    d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z"
                                                    transform="translate(-211.776 -98.425)"
                                                    fill="#b7b7b7"
                                            />
                                            <path
                                                    id="Path_39"
                                                    data-name="Path 39"
                                                    d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z"
                                                    transform="translate(-211.776 -172.146)"
                                                    fill="#ffbe40"
                                            />
                                            <g
                                                    id="Group_51"
                                                    data-name="Group 51"
                                                    transform="translate(40.25 13.249)"
                                            >
                                                <path
                                                        id="Path_38"
                                                        data-name="Path 38"
                                                        d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z"
                                                        transform="translate(-200.395 -185.395)"
                                                        fill="#f9f9f9"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                                <p>Standard Project</p>
                            </div>

                            <div class="icon-group row">
                                <i>
                                    <svg
                                            id="price-tag"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="28.711"
                                            height="28.711"
                                            viewBox="0 0 28.711 28.711"
                                    >
                                        <g id="Group_60" data-name="Group 60">
                                            <path
                                                    id="Path_42"
                                                    data-name="Path 42"
                                                    d="M25.72,0H18.132a5.351,5.351,0,0,0-3.808,1.577L1.02,14.882a3.486,3.486,0,0,0,0,4.929L8.9,27.692a3.486,3.486,0,0,0,4.928,0L27.134,14.385a5.346,5.346,0,0,0,1.577-3.807V2.991A2.993,2.993,0,0,0,25.72,0ZM22.131,9.57A2.991,2.991,0,1,1,25.122,6.58,2.993,2.993,0,0,1,22.131,9.57Z"
                                                    fill="#b7b7b7"
                                            />
                                        </g>
                                    </svg>
                                </i>
                                <p>12 Bids</p>
                            </div>

                            <div class="icon-group row">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.75" height="29" viewBox="0 0 21.75 29">
                                        <path id="Icon_awesome-map-marker-alt" data-name="Icon awesome-map-marker-alt" d="M9.757,28.415C1.528,16.484,0,15.26,0,10.875a10.875,10.875,0,0,1,21.75,0c0,4.385-1.528,5.609-9.757,17.54a1.36,1.36,0,0,1-2.235,0Zm1.118-13.009a4.531,4.531,0,1,0-4.531-4.531A4.531,4.531,0,0,0,10.875,15.406Z" fill="#b7b7b7">
                                    </svg>
                                </i>
                                <p>Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="container">
                        <div class="title">
                            <div class="row">
                                <div class="text col-md-11">
                                    <h1>
                                        World-class designer to make mock-up of stages of our
                                        process and a dashboard for landing page
                                    </h1>
                                </div>
                                <div class="favorite col-md-1">
                                    <div class="circle">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time row">
                            <p>Posted 1 day ago</p>
                            <p>Est. Time: Less than 1 week</p>
                            <p>Est. Time: Less than 1 week</p>
                        </div>
                        <div class="description">
                            <h6>
                                We need support making icons for our website. E.g a mock-up of
                                what one of our screens will look like on our landing page.
                                Ideally, we'd do this as a working session where I'd talk
                                through what we need.
                            </h6>
                            <div class="skill row">
                                <p>Skill set:</p>
                                <p>Wordpress</p>
                                <p>Vector Graphics</p>
                                <p>Figma</p>
                                <p>Adobe XD</p>
                                <p>UI Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="badge">
                        <div class="row">
                            <div class="icon-group row">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.817" height="26.817" viewBox="0 0 26.817 26.817"
                                    >
                                        <path
                                                id="Icon_awesome-check-circle"
                                                data-name="Icon awesome-check-circle"
                                                d="M27.379,13.971A13.408,13.408,0,1,1,13.971.563,13.408,13.408,0,0,1,27.379,13.971Zm-14.959,7.1,9.948-9.948a.865.865,0,0,0,0-1.223L21.145,8.676a.865.865,0,0,0-1.223,0l-8.113,8.113L8.02,13A.865.865,0,0,0,6.8,13L5.574,14.224a.865.865,0,0,0,0,1.223L11.2,21.071a.865.865,0,0,0,1.223,0Z"
                                                transform="translate(-0.563 -0.563)"
                                                fill="#d4d4d4"
                                        />
                                    </svg>
                                </i>
                                <p>Not Verified</p>
                            </div>
                            <div class="icon-group row">
                                <i
                                ><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="32.599"
                                            height="32.451"
                                            viewBox="0 0 32.599 32.451"
                                    >
                                        <g id="prize" transform="translate(-27.924)">
                                            <g id="Prize_2_" transform="translate(27.924 0)">
                                                <g
                                                        id="Group_49"
                                                        data-name="Group 49"
                                                        transform="translate(0 0)"
                                                >
                                                    <path
                                                            id="Path_34"
                                                            data-name="Path 34"
                                                            d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z"
                                                            transform="translate(-27.924 0)"
                                                            fill="#d4d4d4"
                                                    />
                                                </g>
                                            </g>
                                            <path
                                                    id="Path_35"
                                                    data-name="Path 35"
                                                    d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z"
                                                    transform="translate(-211.776 0)"
                                                    fill="#d4d4d4"
                                            />
                                            <g
                                                    id="Group_50"
                                                    data-name="Group 50"
                                                    transform="translate(35.648 7.575)"
                                            >
                                                <path
                                                        id="Path_36"
                                                        data-name="Path 36"
                                                        d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z"
                                                        transform="translate(-136 -106)"
                                                        fill="#b7b7b7"
                                                />
                                            </g>
                                            <path
                                                    id="Path_37"
                                                    data-name="Path 37"
                                                    d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z"
                                                    transform="translate(-211.776 -98.425)"
                                                    fill="#b7b7b7"
                                            />
                                            <path
                                                    id="Path_39"
                                                    data-name="Path 39"
                                                    d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z"
                                                    transform="translate(-211.776 -172.146)"
                                                    fill="#ffbe40"
                                            />
                                            <g
                                                    id="Group_51"
                                                    data-name="Group 51"
                                                    transform="translate(40.25 13.249)"
                                            >
                                                <path
                                                        id="Path_38"
                                                        data-name="Path 38"
                                                        d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z"
                                                        transform="translate(-200.395 -185.395)"
                                                        fill="#f9f9f9"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                                <p>Standard Project</p>
                            </div>
                            <div class="icon-group row">
                                <i>
                                    <svg
                                            id="price-tag"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="28.711"
                                            height="28.711"
                                            viewBox="0 0 28.711 28.711"
                                    >
                                        <g id="Group_60" data-name="Group 60">
                                            <path
                                                    id="Path_42"
                                                    data-name="Path 42"
                                                    d="M25.72,0H18.132a5.351,5.351,0,0,0-3.808,1.577L1.02,14.882a3.486,3.486,0,0,0,0,4.929L8.9,27.692a3.486,3.486,0,0,0,4.928,0L27.134,14.385a5.346,5.346,0,0,0,1.577-3.807V2.991A2.993,2.993,0,0,0,25.72,0ZM22.131,9.57A2.991,2.991,0,1,1,25.122,6.58,2.993,2.993,0,0,1,22.131,9.57Z"
                                                    fill="red"
                                            />
                                        </g>
                                    </svg>
                                </i>
                                <p>45 Bids</p>
                            </div>
                            <div class="icon-group row">
                                <i>
                                    <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="21.75"
                                            height="29"
                                            viewBox="0 0 21.75 29"
                                    >
                                        <path
                                                id="Icon_awesome-map-marker-alt"
                                                data-name="Icon awesome-map-marker-alt"
                                                d="M9.757,28.415C1.528,16.484,0,15.26,0,10.875a10.875,10.875,0,0,1,21.75,0c0,4.385-1.528,5.609-9.757,17.54a1.36,1.36,0,0,1-2.235,0Zm1.118-13.009a4.531,4.531,0,1,0-4.531-4.531A4.531,4.531,0,0,0,10.875,15.406Z"
                                                fill="#b7b7b7"
                                        />
                                    </svg>
                                </i>
                                <p>Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-item">
                    <div class="container">
                        <div class="title">
                            <div class="row">
                                <div class="text col-md-11">
                                    <h1>
                                        World-class designer to make mock-up of stages of our
                                        process and a dashboard for landing page
                                    </h1>
                                </div>
                                <div class="favorite col-md-1">
                                    <div class="circle">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="time row">
                            <p>Posted 1 day ago</p>
                            <p>Est. Time: Less than 1 week</p>
                            <p>Est. Time: Less than 1 week</p>
                        </div>
                        <div class="description">
                            <h6>
                                We need support making icons for our website. E.g a mock-up of
                                what one of our screens will look like on our landing page.
                                Ideally, we'd do this as a working session where I'd talk
                                through what we need.
                            </h6>
                            <div class="skill row">
                                <p>Skill set:</p>
                                <p>Wordpress</p>
                                <p>Vector Graphics</p>
                                <p>Figma</p>
                                <p>Adobe XD</p>
                                <p>UI Design</p>
                            </div>
                        </div>
                    </div>
                    <div class="badge">
                        <div class="row">
                            <div class="icon-group row">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="26.817" height="26.817" viewBox="0 0 26.817 26.817">
                                        <path id="Icon_awesome-check-circle" data-name="Icon awesome-check-circle" d="M27.379,13.971A13.408,13.408,0,1,1,13.971.563,13.408,13.408,0,0,1,27.379,13.971Zm-14.959,7.1,9.948-9.948a.865.865,0,0,0,0-1.223L21.145,8.676a.865.865,0,0,0-1.223,0l-8.113,8.113L8.02,13A.865.865,0,0,0,6.8,13L5.574,14.224a.865.865,0,0,0,0,1.223L11.2,21.071a.865.865,0,0,0,1.223,0Z" transform="translate(-0.563 -0.563)" fill="#d4d4d4"></path>
                                    </svg>
                                </i>
                                <p>Not Verified</p>
                            </div>
                            <div class="icon-group row">
                                <i
                                ><svg xmlns="http://www.w3.org/2000/svg" width="32.599" height="32.451" viewBox="0 0 32.599 32.451"
                                    >
                                        <g id="prize" transform="translate(-27.924)">
                                            <g id="Prize_2_" transform="translate(27.924 0)">
                                                <g
                                                        id="Group_49"
                                                        data-name="Group 49"
                                                        transform="translate(0 0)"
                                                >
                                                    <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#d4d4d4"/>
                                                </g>
                                            </g>
                                            <path id="Path_35" data-name="Path 35" d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z" transform="translate(-211.776 0)" fill="#d4d4d4"
                                            <g id="Group_50" data-name="Group 50" transform="translate(35.648 7.575)">
                                                <path id="Path_36" data-name="Path 36" d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z" transform="translate(-136 -106)" fill="#b7b7b7">
                                            </g>
                                            <path id="Path_37" data-name="Path 37" d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z" transform="translate(-211.776 -98.425)" fill="#b7b7b7"></path>
                                            <path id="Path_39" data-name="Path 39" d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z" transform="translate(-211.776 -172.146)" fill="#ffbe40">
                                            <g id="Group_51" data-name="Group 51" transform="translate(40.25 13.249)"
                                            >
                                                <path id="Path_38" data-name="Path 38" d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z" transform="translate(-200.395 -185.395)" fill="#f9f9f9">
                                            </g>
                                        </g>
                                    </svg>
                                </i>
                                <p>Standard Project</p>
                            </div>
                            <div class="icon-group row">
                                <i>
                                    <svg
                                            id="price-tag"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="28.711"
                                            height="28.711"
                                            viewBox="0 0 28.711 28.711"
                                    >
                                        <g id="Group_60" data-name="Group 60">
                                            <path  id="Path_42"  data-name="Path 42"  d="M25.72,0H18.132a5.351,5.351,0,0,0-3.808,1.577L1.02,14.882a3.486,3.486,0,0,0,0,4.929L8.9,27.692a3.486,3.486,0,0,0,4.928,0L27.134,14.385a5.346,5.346,0,0,0,1.577-3.807V2.991A2.993,2.993,0,0,0,25.72,0ZM22.131,9.57A2.991,2.991,0,1,1,25.122,6.58,2.993,2.993,0,0,1,22.131,9.57Z"  fill="rgba(255,112,1,0.93)"></path>
                                        </g>
                                    </svg>
                                </i>
                                <p>30 Bids</p>
                            </div>
                            <div class="icon-group row">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21.75" height="29" viewBox="0 0 21.75 29" >
                                        <path id="Icon_awesome-map-marker-alt" data-name="Icon awesome-map-marker-alt" d="M9.757,28.415C1.528,16.484,0,15.26,0,10.875a10.875,10.875,0,0,1,21.75,0c0,4.385-1.528,5.609-9.757,17.54a1.36,1.36,0,0,1-2.235,0Zm1.118-13.009a4.531,4.531,0,1,0-4.531-4.531A4.531,4.531,0,0,0,10.875,15.406Z" fill="#b7b7b7"/>
                                    </svg>
                                </i>
                                <p>Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination-explore">
                <div class="pagination d-flex justify-content-center flex-wrap">
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#" class="active">3</a>
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





