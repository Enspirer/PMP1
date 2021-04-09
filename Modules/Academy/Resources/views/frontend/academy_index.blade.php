@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <body>
    <section class="expert-section">
        <div class="expert-image">
            <img src="{{url('theme_light/assets/pexels-fauxels-3184317.jpg')}}" style="object-position: top" alt=""/>
            <div class="expert-gradient"></div>
            <div class="expert-text-head">
                <div class="container">
                    <div class="expert-title-small m-w-270" data-animscroll="fade-up">
                        <h3>Tallentor Academy</h3>
                        <hr class="w-270" />
                    </div>
                    <h1 data-animscroll="fade-up">
                        Learn with the industry professionals
                    </h1>
                </div>
            </div>
        </div>

        <section id="tallentor-acadamy">
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="card-acadamy">
                            <h3>Web Development</h3>
                            <div class="label-acadamy">
                                <p>Fundamental</p>
                            </div>
                            <div class="acadamy-details row">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p>6 months</p>
                            </div>
                            <div class="acadamy-details row">
                                <div class="col-md-1">
                                    <i class="fa fa-check" style="float: right" aria-hidden="true"></i>
                                </div>
                                <div class="col-md-10">
                                    <p style="margin-left: -20px">
                                        Project Based Learning with industrial Training
                                    </p>
                                </div>
                            </div>
                            <div class="color-card yellow-bg"></div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card-acadamy">
                            <h3>Digital Marketing</h3>
                            <div class="label-acadamy">
                                <p>Fundamental</p>
                            </div>
                            <div class="acadamy-details row">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p>3 Months</p>
                            </div>
                            <div class="acadamy-details row">
                                <div class="col-md-1">
                                    <i class="fa fa-check" aria-hidden="true" style="float: right"></i>
                                </div>
                                <div class="col-md-10">
                                    <p style="margin-left: -20px">
                                        Industrial Training with Realtime campaigns
                                    </p>
                                </div>
                            </div>
                            <div class="color-card green-bg"></div>
                        </div>
                    </div>
                    <div class="col col-md-4">
                        <div class="card-acadamy">
                            <h3>Graphic Designing</h3>
                            <div class="label-acadamy">
                                <p>Fundamental</p>
                            </div>
                            <div class="acadamy-details row">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p>3 Months</p>
                            </div>
                            <div class="acadamy-details row">
                                <div class="col-md-1">
                                    <i class="fa fa-check" aria-hidden="true" style="float: right"></i>
                                </div>
                                <div class="col-md-10">
                                    <p style="margin-left: -20px">
                                        Industrial Training with Job placement options
                                    </p>
                                </div>
                            </div>
                            <div class="color-card red-bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="acadamy-page-down">
        <div class="acadamy-page-gray">
            <div class="container">
                <div class="row">
                    <div class="left-detail col-md-8">
                        <h1>Web Development</h1>
                        <div class="row">
                            <p>Created by <a href="">John Macclister</a></p>
                            <div class="label-acadamy">
                                <p>Fundamental</p>
                            </div>
                        </div>
                        <div class="acadamy-body">
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
                                sea
                            </p>
                        </div>
                        <div class="bottum-icon-row row">
                            <div class="single-icon col-md-3">
                                <div class="row">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p>Course duration</p>
                                </div>
                            </div>
                            <div class="single-icon col-md-3">
                                <div class="row">
                                    <h6>5.0</h6>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="single-icon col-md-3">
                                <p>123 Students following</p>
                            </div>
                            <div class="single-icon col-md-3">
                                <div class="row">
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                    <p>English</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-pos">
                            <div class="card-breaf">
                                <video width="100%" height="auto" controls>
                                    <source src="assets/The Apple Car Is Coming Sooner Than You Think.mkv" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="container container-detail">
                                    <h1>10,000 LKR</h1>
                                    <p>30 day money-back guarantee</p>

                                    <div class="feature-course">
                                        <h2>Features of this course</h2>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet, coi</li>
                                            <li>Lorem ipsum dolor sit amet, coi</li>
                                            <li>Lorem ipsum dolor sit amet, coi</li>
                                            <li>Lorem ipsum dolor sit amet, coi</li>
                                            <li>Lorem ipsum dolor sit amet, coi</li>
                                            <li>Lorem ipsum dolor sit amet, coi</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <a class="inqure-btn" type="button" href="#">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="what-you-learn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container container-border">
                            <h3>What you will learn</h3>
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                </li>
                                <li>
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Course content</h3>

                        <div id="accordion" class="accordion">
                            <div class="card mb-0">
                                <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <a class="card-title"
                                    >Inroduction
                                        <span class="position-absolute">2 Lecture &nbsp; | &nbsp; 2h 30min</span></a>
                                </div>
                                <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice
                                        lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you probably haven't heard
                                        of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                                <div
                                        class="card-header collapsed"
                                        data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapseTwo"
                                >
                                    <a class="card-title"
                                    >Lorem ipaum
                                        <span class="position-absolute"
                                        >2 Lecture &nbsp; | &nbsp; 2h 30min</span
                                        ></a
                                    >
                                </div>
                                <div
                                        id="collapseTwo"
                                        class="card-body collapse"
                                        data-parent="#accordion"
                                >
                                    <p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                        helvetica, craft beer labore wes anderson cred nesciunt
                                        sapiente ea proident. Ad vegan excepteur butcher vice
                                        lomo. Leggings occaecat craft beer farm-to-table, raw
                                        denim aesthetic synth nesciunt you probably haven't heard
                                        of them accusamus labore sustainable VHS.
                                    </p>
                                </div>
                                <div
                                        class="card-header collapsed"
                                        data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapseThree"
                                >
                                    <a class="card-title"
                                    >Lorem ipaum
                                        <span class="position-absolute"
                                        >2 Lecture &nbsp; | &nbsp; 2h 30min</span
                                        ></a
                                    >
                                </div>
                                <div
                                        id="collapseThree"
                                        class="collapse"
                                        data-parent="#accordion"
                                >
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. samus labore
                                        sustainable VHS.
                                    </div>
                                </div>

                                <div
                                        class="card-header collapsed"
                                        data-toggle="collapse"
                                        data-parent="#accordion"
                                        href="#collapseFour"
                                >
                                    <a class="card-title"
                                    >Lorem ipaum
                                        <span class="position-absolute"
                                        >2 Lecture &nbsp; | &nbsp; 2h 30min</span
                                        ></a
                                    >
                                </div>
                                <div
                                        id="collapseFour"
                                        class="collapse"
                                        data-parent="#accordion"
                                >
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia
                                        aute, non cupidatat skateboard dolor brunch. Food truck
                                        quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin
                                        coffee nulla assumenda shoreditch et. samus labore
                                        sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="acadamy-page-gray">
            <div class="container">
                <h3>Reviews</h3>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="review">
                                <div class="row m-0">
                                    <img
                                            class="rounded-circle"
                                            src="https://images.unsplash.com/profile-1446404465118-3a53b909cc82?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&cs=tinysrgb&fit=crop&h=64&w=64&s=3ef46b07bb19f68322d027cb8f9ac99f"
                                            alt=""
                                    />
                                    <div class="name-and-rating mt-auto mb-auto ml-3">
                                        <h6>Ravindra Kumara</h6>
                                        <div class="row row-star m-0">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-rating m-0 mt-3">
                                    <p>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                                        ut labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eos et accusam et justo duo dolores et
                                        ea rebum. Stet clita kasd gubergren, no sea
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="review">
                                <div class="row m-0">
                                    <img
                                            class="rounded-circle"
                                            src="https://images.unsplash.com/profile-1446404465118-3a53b909cc82?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&cs=tinysrgb&fit=crop&h=64&w=64&s=3ef46b07bb19f68322d027cb8f9ac99f"
                                            alt=""
                                    />
                                    <div class="name-and-rating mt-auto mb-auto ml-3">
                                        <h6>Ravindra Kumara</h6>
                                        <div class="row row-star m-0">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-rating m-0 mt-3">
                                    <p>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                                        ut labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eos et accusam et justo duo dolores et
                                        ea rebum. Stet clita kasd gubergren, no sea
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">  <div class="review">
                                <div class="row m-0">
                                    <img
                                            class="rounded-circle"
                                            src="https://images.unsplash.com/profile-1446404465118-3a53b909cc82?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&cs=tinysrgb&fit=crop&h=64&w=64&s=3ef46b07bb19f68322d027cb8f9ac99f"
                                            alt=""
                                    />
                                    <div class="name-and-rating mt-auto mb-auto ml-3">
                                        <h6>Ravindra Kumara</h6>
                                        <div class="row row-star m-0">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-rating m-0 mt-3">
                                    <p>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                                        ut labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eos et accusam et justo duo dolores et
                                        ea rebum. Stet clita kasd gubergren, no sea
                                    </p>
                                </div>
                            </div></div>
                        <div class="swiper-slide">  <div class="review">
                                <div class="row m-0">
                                    <img
                                            class="rounded-circle"
                                            src="https://images.unsplash.com/profile-1446404465118-3a53b909cc82?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&cs=tinysrgb&fit=crop&h=64&w=64&s=3ef46b07bb19f68322d027cb8f9ac99f"
                                            alt=""
                                    />
                                    <div class="name-and-rating mt-auto mb-auto ml-3">
                                        <h6>Ravindra Kumara</h6>
                                        <div class="row row-star m-0">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-rating m-0 mt-3">
                                    <p>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                        sit amet. Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                                        ut labore et dolore magna aliquyam erat, sed diam
                                        voluptua. At vero eos et accusam et justo duo dolores et
                                        ea rebum. Stet clita kasd gubergren, no sea
                                    </p>
                                </div>
                            </div></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination d-flex justify-content-end"></div>

                    <div class="navigation-arrow">
                        <div class="row m-0">
                            <i class="fa fa-long-arrow-left nbprev" aria-hidden="true"></i>
                            &nbsp;
                            <i class="fa fa-long-arrow-right nbext" aria-hidden="true"></i>
                        </div>
                    </div>
                    <!-- <i class="fa fa-angle-right nbext" aria-hidden="true"></i> -->
                    <!-- <div class="swiper-button-prev"></div> -->
                </div>
            </div>
        </div>
    </section>



    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".nbext",
                prevEl: ".nbprev",
            },
        });
    </script>

   
    <script>
        $(".panel-collapse").on("show.bs.collapse", function () {
            $(this).siblings(".panel-heading").addClass("active");
        });

        $(".panel-collapse").on("hide.bs.collapse", function () {
            $(this).siblings(".panel-heading").removeClass("active");
        });
    </script>
    </body>
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif

@endpush









