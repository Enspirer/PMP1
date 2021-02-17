@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <div id="video_box">
        <div id="video_overlays"></div>
        <div class="video">
            <video autoplay loop muted id="player" src="{{url('theme_light/assets/video.webm')}}" type="video/webm"></video>
        </div>
        <div class="header-content">
            <div class="content">
                <h1 data-animscroll="fade-up" data-animscroll-delay="100">
                    BEST PLACE TO HIRE YOUR NEW <br/>
                    TEAM FOR NEXT PROJECT
                </h1>
                <div class="wrapper" data-animscroll="fade-up" data-animscroll-delay="200">
                    <input class="search" type="text" id="search" />
                    <input class="submit" type="submit" value="Search" />
                </div>
                <div class="container" data-animscroll="fade-up" data-animscroll-delay="300">
                    <div class="row">
                        <p>Popular :</p>
                        <a href="">Web Design</a>
                        <a href="">Logo Design</a>
                        <a href="">App Development</a>
                        <a href="">Programming</a>
                        <a href="">UI/UX</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="card-swipper">
        <div class="container">
            <div class="heading-text">
                <h1 data-animscroll="fade-up">
                    Projects
                    <span>Live</span>
                </h1>
                <p data-animscroll="fade-up" data-animscroll-delay="100">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus,
                    amet in maiores provident quae dolores iusto reprehenderit quod
                    tenetur minus. Molestias quis corporis consequatur
                </p>
            </div>
        </div>

        <div class="">
            <div class="timeline" data-animscroll="fade-up" data-animscroll-delay="100">
                <div class="swiper-container">
                    <div class="swiper-wrapper ol">
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="{{url('theme_light/assets/image/icon/browser.png')}}" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span><i class="color-green">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.25" height="15" viewBox="0 0 11.25 15">
                            <path id="Icon_open-arrow-thick-top" data-name="Icon open-arrow-thick-top" d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"/>

                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/screen.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-yellow"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/browser (1).png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-yellow"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/folder.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-red"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/folder.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-red"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/folder.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-red"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/folder.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-red"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/folder.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-red"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide li">
                            <div class="anim-hover-grow">
                                <div class="card">
                                    <div class="circle">
                                        <div class="inner">
                                            <img src="assets/image/icon/folder.png" alt="" />
                                        </div>
                                    </div>
                                    <title>Lorem Web Design</title>
                                    <div class="small-text">
                                        <p>
                                            Lorem brand is a startup clothing company we need
                                            perfect logo for our brand....
                                        </p>
                                    </div>
                                    <div class="arrow-inline">
                                        <p>45 Views</p>
                                        <span
                                        ><i class="color-red"
                                            ><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="11.25"
                                                        height="15"
                                                        viewBox="0 0 11.25 15"
                                                >
                            <path
                                    id="Icon_open-arrow-thick-top"
                                    data-name="Icon open-arrow-thick-top"
                                    d="M5.569,0,0,5.625H3.75V15H7.5V5.625h3.75Z"
                            />
                          </svg> </i
                                            ></span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn btn-outline-light">
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="live-auction">
        <div class="container">
            <div class="row">
                <div class="left-live col-md-7">
                    <div class="top-title">
                        <div class="row" data-animscroll="fade-up">
                            <div class="record-icon">
                                <img src="assets/image/icon/rec_red.svg" alt=""">
                            </div>
                            <h1><span>Live</span>Auction</h1>
                        </div>
                        <h3 data-animscroll="fade-up">
                            World-class designer to make mock-up of stages of our process
                            and a dashboard for landing page
                        </h3>
                        <p data-animscroll="fade-up">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                            dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                            sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren, no sea
                        </p>
                        <div class="auction-end" data-animscroll="fade-up">
                            <div class="row">
                                <h3>Auction ends in :</h3>
                                <h2>12 Hr 34 Min</h2>
                            </div>
                        </div>
                        <div class="auction-button" data-animscroll="fade-up">
                            <div class="row">
                                <a class="fill-btn-auction" href="#">SIGN IN TO BID</a>
                                <a class="outline-btn-auction" href="#">VIEW SCOPE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-chart col-md-5">
                    <div
                            id="container"
                            data-animscroll="fade-left"
                            style="
                height: 100%;
                -webkit-tap-highlight-color: transparent;
                user-select: none;
                position: relative;
              "
                            _echarts_instance_="ec_1613561955227"
                    >
                        <div
                                style="
                  position: relative;
                  width: 1600px;
                  height: 732px;
                  padding: 0px;
                  margin: 0px;
                  border-width: 0px;
                  cursor: default;
                "
                        >
                            <canvas
                                    data-zr-dom-id="zr_0"
                                    width="1600"
                                    height="732"
                                    style="
                    position: absolute;
                    left: 0px;
                    top: 0px;
                    width: 1600px;
                    height: 732px;
                    user-select: none;
                    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                    padding: 0px;
                    margin: 0px;
                    border-width: 0px;
                  "
                            ></canvas>
                        </div>
                        <div
                                class=""
                                style="
                  position: absolute;
                  display: block;
                  border-style: solid;
                  white-space: nowrap;
                  z-index: 9999999;
                  box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px;
                  transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s,
                    visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s,
                    left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s,
                    top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s;
                  background-color: rgb(255, 255, 255);
                  border-width: 1px;
                  border-radius: 4px;
                  color: rgb(102, 102, 102);
                  font: 14px / 21px 'Microsoft YaHei';
                  padding: 10px;
                  left: 1269px;
                  top: 95px;
                  border-color: rgb(255, 255, 255);
                  pointer-events: none;
                "
                        >
                            <div style="margin: 0px 0 0; line-height: 1">
                                <div style="margin: 0px 0 0; line-height: 1">
                                    <div
                                            style="
                        font-size: 14px;
                        color: #666;
                        font-weight: 400;
                        line-height: 1;
                      "
                                    >
                                        11.00 PM
                                    </div>
                                    <div style="margin: 10px 0 0; line-height: 1">
                                        <div style="margin: 0px 0 0; line-height: 1">
                                            <div style="margin: 0px 0 0; line-height: 1">
                          <span
                                  style="
                              display: inline-block;
                              margin-right: 4px;
                              border-radius: 10px;
                              width: 10px;
                              height: 10px;
                              background-color: #91cc75;
                            "
                          ></span
                          ><span
                                                        style="
                              font-size: 14px;
                              color: #666;
                              font-weight: 400;
                              margin-left: 2px;
                            "
                                                >Bids Count</span
                                                ><span
                                                        style="
                              float: right;
                              margin-left: 20px;
                              font-size: 14px;
                              color: #666;
                              font-weight: 900;
                            "
                                                >488</span
                                                >
                                                <div style="clear: both"></div>
                                            </div>
                                            <div style="clear: both"></div>
                                        </div>
                                        <div style="clear: both"></div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div style="margin: 20px 0 0; line-height: 1">
                                    <div
                                            style="
                        font-size: 14px;
                        color: #666;
                        font-weight: 400;
                        line-height: 1;
                      "
                                    >
                                        11.00 PM
                                    </div>
                                    <div style="margin: 10px 0 0; line-height: 1">
                                        <div style="margin: 0px 0 0; line-height: 1">
                                            <div style="margin: 0px 0 0; line-height: 1">
                          <span
                                  style="
                              display: inline-block;
                              margin-right: 4px;
                              border-radius: 10px;
                              width: 10px;
                              height: 10px;
                              background-color: #5470c6;
                            "
                          ></span
                          ><span
                                                        style="
                              font-size: 14px;
                              color: #666;
                              font-weight: 400;
                              margin-left: 2px;
                            "
                                                >Bids Price</span
                                                ><span
                                                        style="
                              float: right;
                              margin-left: 20px;
                              font-size: 14px;
                              color: #666;
                              font-weight: 900;
                            "
                                                >379</span
                                                >
                                                <div style="clear: both"></div>
                                            </div>
                                            <div style="clear: both"></div>
                                        </div>
                                        <div style="clear: both"></div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div style="clear: both"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do">
        <div class="title">
            <h1 data-animscroll="fade-up" >What we do</h1>
            <hr data-animscroll="fade-up"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="left-text col-md-6" data-animscroll="fade-right">
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
                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor
                        sit amet, consetetur sadipscing elitr, sed diam nonumy
                    </p>
                    <a href="#" data-animscroll="fade-up">Read More</a>
                </div>
                <div class="right-video col-md-6" data-animscroll="fade-left">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1swlUtEkXZ0"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen >

                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="expert-center">
        <div class="title">
            <h1 data-animscroll="fade-up">Expert Center</h1>
            <hr data-animscroll="fade-up"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="left-text col-md-6">
                    <h3 data-animscroll="fade-up">Plan Your Project with <br> our experts</h3>
                    <ul>
                        <li data-animscroll="fade-up">Lorem ipsum dolouyam erat, sed diam voluptua. At vero eos et accusam et justo duo doloredolor sit amet</li>
                        <li data-animscroll="fade-up">Lorem ipsum dolouyam erat, sed diam voluptua. At vero eos et accusam et justo duo doloredolor sit amet</li>
                        <li data-animscroll="fade-up">Lorem ipsum dolouyam erat, sed diam voluptua. At vero eos et accusam et justo duo doloredolor sit amet</li>
                    </ul>
                    <a href="#" data-animscroll="fade-up">Read More</a>
                </div>
                <div class="right-image col-md-6">
                    <img src="assets/image/Asset 2graphic1.png" alt="" data-animscroll="fade-left">
                </div>
            </div>
        </div>
    </section>

    <section> -->
        <div id="how-to-work">
            <div class="container">
                <h1 data-animscroll="fade-up">How Lorem Ipsum works</h1>
                <hr data-animscroll="fade-up" />
                <div class="row">
                    <div class="col col-md-3" data-animscroll="fade-up" data-animscroll-delay="100">
                        <div class="card">
                            <h3>Hire the team</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet
                            </p>
                            <div class="arrow-card">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3" data-animscroll="fade-up" data-animscroll-delay="200">
                        <div class="card">
                            <h3>Hire the team</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet
                            </p>
                            <div class="arrow-card">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3" data-animscroll="fade-up" data-animscroll-delay="300">
                        <div class="card">
                            <h3>Hire the team</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet
                            </p>
                            <div class="arrow-card">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3" data-animscroll="fade-up" data-animscroll-delay="400">
                        <div class="card">
                            <h3>Hire the team</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                sea takimata sanctus est Lorem ipsum dolor sit amet
                            </p>
                            <div class="arrow-card">
                                <i class="fas fa-arrow-right"></i>
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





