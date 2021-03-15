<style>
    #card-swipper .timeline title{
        font-size: 17px;
        /*max-width: 90px;*/
    }
</style>

<section id="card-swipper">
    <div class="container">
        <div class="heading-text">
            <h1 data-animscroll="fade-up" style="font-size: 42px;color: #361d41">
                Pick your challenge & Get started
            </h1>
            <p data-animscroll="fade-up" data-animscroll-delay="100" style="font-size: 18px">
                The easiest way to grab your next project… Select the project
                matches your team profile and get hired immediately by companies
                around the world. <b>It’s that Simple</b>

            </p>
        </div>
    </div>

    <div class="">
        <div class="timeline" data-animscroll="fade-up" data-animscroll-delay="100">
            <div class="swiper-container swiper-container1">
                <div class="swiper-wrapper ol">
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/browser.png')}}" alt="" />
                                    </div>
                                </div>
                                <title>Mobile app Development</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span><i class="color-green">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>

                          </svg> </i></span></div>

                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">

                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/screen.png')}}" alt="" />
                                    </div>
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                            <i class="color-yellow"><svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                </div>

                                <title>Multivendor ecommerce solution</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>

                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/browserspaceone.png')}}" alt=""/>
                                    </div>
                                </div>
                                <title>Dynamic web solution</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                            <i class="color-yellow">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                    <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                                </svg>
                                            </i>
                                        </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                    </div>
                                </div>
                                <title>Customized CRM solution</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                        <i class="color-red">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="11.25"  height="15"  viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt=""/>
                                    </div>
                                </div>
                                <title>Customize CRM solution</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                        <i class="color-red">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="11.25"  height="15"  viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                    </div>
                                </div>
                                <title>Dynamic web site solution</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                        <i class="color-red">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                    </div>
                                </div>
                                <title>Digital Marketing campaign</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                        <i class="color-red">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                    </div>
                                </div>
                                <title>Organic Search Engine Optimisation</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                        <i class="color-red">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide li">
                        <div class="anim-hover-grow">
                            <div class="card">
                                <div class="circle">
                                    <div class="inner">
                                        <img src="{{url('theme_light/assets/image/icon/folder.png')}}" alt="" />
                                    </div>
                                </div>
                                <title>Audio Visual production</title>
                                <div class="small-text">
                                    {{--<p>--}}
                                        {{--Lorem brand is a startup clothing company we need--}}
                                        {{--perfect logo for our brand....--}}
                                    {{--</p>--}}
                                </div>
                                <div class="arrow-inline">
                                    <p>45 Views</p>
                                    <span>
                                        <i class="color-red">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                                                <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </div>
                                <div class="button">
                                    <form action="{{route('frontend.project_page',1)}}" method="get">
                                        <button type="submit" class="btn btn-outline-dark">
                                            View Project
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}" class="btn btn-primary" style="margin: 0;background: #0F9D58;border: none;color: #fff;padding: 12px 25px">VIEW ALL PROJECTS</a>
        </div>

    </div>
</section>
