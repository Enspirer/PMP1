<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enspirer Project Marcketplace</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
    <!-- Theame Style  -->
    <link rel="stylesheet" href="{{url('theme_light/styles/css/style.css')}}"/>
    <link rel="stylesheet" href="{{url('theme_light/plugin/dist/css/animtrap.css')}}"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>
</head>

<body>
<section class="nav-section">
    <nav class="navbar-main navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ml-auto row">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign Up</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary">Post a Job</button>
                </div>
            </div>
        </div>
    </nav>
</section>

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


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
        // spaceBetween: -100,
        autoplay: 3000,
        loop: true,
        slidesPerView: 10,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 8,
            },
            1820: {
                slidesPerView: 13,
            },
        },
    });
</script>

<!-- hammer js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<!-- Optional JavaScript -->
<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
></script>
<!-- Theame JS  -->
<script src="{{url('theme_light/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{url('theme_light/plugin/dist/js/anim-trap.js')}}"></script>
<script src="plugin/dist/js/anim-scroll.js"></script>
<script src="plugin/chart/echarts.min.js"></script>
<script type="text/javascript">
    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};

    var option;

    var timeData = [
        "12.00 AM",
        "01.00 AM",
        "02.00 AM",
        "03.00 AM",
        "04.00 AM",
        "05.00 AM",
        "06.00 AM",
        "07.00 AM",
        "08.00 AM",
        "09.00 AM",
        "10.00 AM",
        "11.00 AM",
        "12.00 AM",
        "01.00 PM",
        "02.00 PM",
        "03.00 PM",
        "04.00 PM",
        "05.00 PM",
        "06.00 PM",
        "07.00 PM",
        "08.00 PM",
        "09.00 PM",
        "10.00 PM",
        "11.00 PM",
        "12.00 PM",
    ];

    var bidsData = [
        10,
        30,
        29,
        49,
        50,
        28,
        20,
        50,
        29,
        40,
        29,
        30,
        10,
        30,
        23,
        49,
        65,
        03,
    ];

    //setInterval(function() {
    //
    //},  60 * 1000); // 60 * 1000 milsec

    timeData = timeData.map(function (str) {
        return str.replace("2009/", "");
    });

    option = {
        title: {
            text: "Live Bids",
            left: "center",
            textStyle: {
                color: "#FFFF",
                fontSize: 18,
            },
        },
        tooltip: {
            trigger: "axis",
            axisPointer: {
                animation: false,
            },
        },
        legend: {
            data: ["流量", "降雨量"],
            left: 10,
            textStyle: {
                color: "red",
                fontSize: 18,
            },
        },
        toolbox: {
            feature: {
                dataZoom: {
                    yAxisIndex: "none",
                },
                restore: {},
                saveAsImage: {},
            },
        },
        axisPointer: {
            link: { xAxisIndex: "all" },
        },
        dataZoom: [
            {
                show: true,
                realtime: true,
                start: 30,
                end: 70,
                xAxisIndex: [0, 1],
            },
            {
                type: "inside",
                realtime: true,
                start: 30,
                end: 70,
                xAxisIndex: [0, 1],
            },
        ],
        grid: [
            {
                left: 50,
                right: 50,
                height: "35%",
            },
            {
                left: 50,
                right: 50,
                top: "55%",
                height: "35%",
            },
        ],
        xAxis: [
            {
                type: "category",
                boundaryGap: false,
                axisLine: { onZero: false },
                data: timeData,
            },
            {
                gridIndex: 1,
                type: "category",
                boundaryGap: false,
                axisLine: { onZero: true },
                data: timeData,
                position: "top",
            },
        ],
        textStyle: {
            color: "#FFFF",
            fontSize: 18,
        },
        yAxis: [
            {
                name: "Bids Price",
                type: "value",
                max: 1300,
                splitLine: {
                    show: false,
                },
            },
            {
                gridIndex: 1,
                name: "Time",
                type: "value",
                inverse: true,
                splitLine: {
                    show: false,
                },
            },
        ],
        series: [
            {
                name: "Bids Price",
                type: "line",
                symbolSize: 8,
                hoverAnimation: false,
                fill: true,
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                        {
                            offset: 1,
                            color: "#61BCFF",
                        },
                        {
                            offset: 0.5,
                            color: "#0093FF",
                        },
                    ]),
                },
                data: [
                    0,
                    100,
                    379,
                    200,
                    100,
                    400,
                    800,
                    100,
                    300,
                    778,
                    290,
                    488,
                    300,
                    0,
                    100,
                    379,
                    778,
                    290,
                    488,
                    300,
                    200,
                    100,
                    400,
                    800,
                    100,
                    300,
                    778,
                    290,
                    488,
                    300,
                ],
            },
            {
                name: "Bids Count",
                type: "line",
                xAxisIndex: 1,
                yAxisIndex: 1,
                symbolSize: 8,
                hoverAnimation: false,
                textStyle: {
                    color: "red",
                    fontSize: 18,
                },
                fill: true,
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                        {
                            offset: 1,
                            color: "#F44738",
                            borderColor: "#F44738",
                            lineStyle: {
                                color: "#F44738",
                            },
                        },
                        {
                            offset: 0.1,
                            color: "#FF9A89",
                        },
                    ]),
                },
                data: bidsData,
            },
        ],
    };

    time = setInterval(function () {}, 60 * 1000);

    if (option && typeof option === "object") {
        myChart.setOption(option);
    }
</script>
<script>
    ANIMSCROLL.init({
        easing: "ease-in-out-sine",
    });

    $(document).ready(function () {
        $(".rain").makeitsRain();
    });
</script>
</body>
</html>
