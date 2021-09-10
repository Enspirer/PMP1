<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', app_name())</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/png" href="{{url('theme_light/assets/image/favicon.png')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->

    <link rel="stylesheet" href="{{url('theme_light/styles/css/stylemob.css')}}" />
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @yield('meta')
    @stack('before-styles')
    <!-- Theame Style  -->

    @stack('after-styles')
</head>

<body>
    @include('includes.partials.read-only')

    <div id="app">
        @include('includes.partials.logged-in-as')

        <div class="">
            <div class="header">
                <header class="pos-f-t page-header">
                    <nav class="navbar navbar-dark">
                        <!-- <input type="checkbox" id="overlay-input" /> -->
                        <label for="overlay-input" aria-label="Open Mobile Menu" class="open-mobile-menu fa-lg" id="overlay-button"><span></span></label>
                        <div class="center-circle" style="box-shadow: 0px -1px 18px 1px #0000005c;">
                            <div class="img-center">
                                <a style="padding: 3px 0 0 9px;" href="{{url('/')}}"> <img src="{{url('theme_light/assets/image/new.png')}}" alt="" srcset="" /></a>
                            </div>
                        </div>
                        @auth()
                        <div class="right-btn"> <a style="padding: 0;color: white;" href="{{route('frontend.auth.register')}}"><i class="fa fa-user" style="font-size: 25px;" aria-hidden="true"></i></a> </div>
                        @else
                        <div class="right-btn"> <a style="padding: 0;color: white;" href="{{route('frontend.auth.register')}}">Join</a> </div>
                        @endauth
                        


                        <nav class="slide-content">
                            <div class="part-yellow-top-logo">
                                <div class="row m-0 align-items-center">
                                    <div class="col-6 p-0">
                                        <a href="{{url('/')}}" style="padding: 0;">  <img src="{{url('theme_light/assets/image/new.png')}}" alt="" srcset="" /></a>
                                    </div>
                                    <div class="col-6 p-0">
                                        <a class="post-job-btn-mob" href="{{route('frontend.auth.login')}}">Post a Project</a>
                                    </div>
                                </div>
                            </div>

                            <div class="part-yellow-top-menu">
                                <a class="{{ Request::segment(1) === null ? 'active' : null }}" href="{{url('/')}}">Home</a>
                                <a class="{{ Request::segment(2) === 'expert-center' ? 'active' : null }}" href="{{route("frontend.expert_center")}}">Expert Centre</a>
                                <a class="{{ Request::segment(1) === 'blog' ? 'active' : null }}" href="{{route('frontend.blog','all')}}">Media</a>
                                <a class="{{ Request::segment(1) === 'supportcenter' ? 'active' : null }}" href="{{route('frontend.contact_us')}}">Contact Us</a>
                                <a class="{{ Request::segment(1) === 'register' ? 'active' : null }}" href="{{route('frontend.auth.register')}}">Join</a>
                            </div>

                            <div class="part-gray-sub-menu">
                                <a class="{{ Request::segment(2) === 'explore-project' ? 'active' : null }}" id="collapsbtnexplore" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Explore <i id="mobile-menu-icon-down" class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <a href="{{route('frontend.auth.login')}}">Post a Job</a>
                                        <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Find a Project</a>
                                        <a href="{{route("frontend.expert_center")}}">How it works</a>
                                        <a href="{{route('frontend.become_a_partner')}}">Become a partner</a>
                                    </div>
                                </div>
                                <a class="{{ Request::segment(2) === 'auction-projects' ? 'active' : null }} " href="{{route('frontend.project_auctions_explore')}}">Auctions</a>
                                <a class="{{ Request::segment(1) === 'tender' ? 'active' : null }}" href="{{route('frontend.tenders.index')}}">Tenders</a>
                                <a class="{{ Request::segment(1) === 'shop' ? 'active' : null }}" href="{{route('frontend.shop.index')}}">e-Shop</a>
                                <a class="{{ Request::segment(1) === 'academy' ? 'active' : null }}" href="{{route('frontend.academy.index')}}">Academy</a>
                            </div>


                        </nav>

                        <div class="slide-fade"></div>

                </header>

            </div>





            </nav>
        </div>

        @yield('content')
        </div>
    </div>
    <footer class="footer" style="padding: 10px 0px 20px 0px;">
        <div class="container bottom_border">
            <div class="row">
                <div class="col-sm-4 col-md col-sm-4 col-12 col" data-animscroll="fade-up">
                    <h5 class="headin5_amrc col_white_amrc pt2"></h5>
                    <p class="mb10">
                        <img src="{{url('theme_light/assets/image/footer_logo.png')}}" alt="" width="190px">
                    </p>
                    <p><i class="fa fa fa-envelope"></i> hello@tallentor.com</p>
                </div>

                <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                    <h5 class="headin5_amrc col_white_amrc pt2">Company</h5>
                    <ul class="footer_ul_amrc">
                        <li><a href="{{route("frontend.about")}}">About Us</a></li>
                        <li><a href="{{route("frontend.expert_center")}}">Expert Centre</a></li>
                        <li><a href="{{route('frontend.project_auctions_explore')}}">Live Auction</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="{{route('frontend.contact_us')}}">Contact us</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                    <h5 class="headin5_amrc col_white_amrc pt2">Resources</h5>
                    <ul class="footer_ul_amrc">
                        <li><a href="">Help & Support</a></li>
                        <li>
                            <a href="">Partner with us</a>
                        </li>
                        <li><a href="">Events</a></li>
                        <li><a href="{{route('frontend.blog','all')}}">Blog</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Mobile app development</a></li>
                        <li>
                            <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">ERP Solutions</a>
                        </li>
                        <li><a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Web applications</a></li>
                        <li><a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Digital Marketing</a></li>
                        <li><a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Architecture</a></li>
                        <li><a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Video animations</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="foote_bottom_ul_amrc"></ul>
            <p class="text-center">
                Copyright @2021 | <a style="color: #c2c2c2;font-weight: 400;font-size: 15px;">Tallentor Global Ltd</a>
            </p>

            <ul class="social_footer_ul" style="padding-left: 0;">
                <li>
                    <a href="https://www.facebook.com/tallentor" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/tallentor/" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </footer>





    <!-- Scripts -->
    @stack('before-scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script> -->

    <script src="{{url('js/core/popper.min.js')}}"></script>

    <script src="{{url('js/core/jquery-3.6.0.min.js')}}"></script>

    <script src="{{url('js/core/bootstrap.min.js')}}"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Initialize Swiper -->

    <!-- hammer js  -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
    <!-- Optional JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <!-- Theame JS  -->
    <script src="{{url('theme_light/js/main.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    <script src="{{url('theme_light/plugin/dist/js/anim-trap.js')}}"></script>
    <script src="{{url('theme_light/plugin/dist/js/anim-scroll.js')}}"></script>
    <script src="{{url('theme_light/plugin/chart/echarts.min.js')}}"></script>

    <script>
      var swiper = new Swiper(".swiper-container-mob9", {
        slidesPerView: 1.3,
        spaceBetween: 10,
      });
    </script>
        <script>
            var swiper = new Swiper(".swiper-container-mob10", {
              slidesPerView: 1.3,
              spaceBetween: 10,
            });
          </script>
             <script>
      var swiper = new Swiper(".swiper-container-mob7", {
        slidesPerView: 2.5,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination-mob2",
        },
      });
    </script>
    <script>
      var swiper = new Swiper(".swiper-container6", {
        pagination: {
          el: ".swiper-pagination2",
          clickable: true,
        },
              autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
      });
    </script>

    
    <script>
      var swiper = new Swiper(".swiper-container-mob5", {
        slidesPerView: 1.2,
        spaceBetween: 20,
        pagination: {
          el: ".swiper-pagination-mob2",
        },
      });
    </script>

    <script>
        var swiper = new Swiper(".swiper-container-mob2", {
            slidesPerView: 1,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination-mob2",
                clickable: true,
            },
        });
    </script>

    <script>
        $("#collapsbtnexplore").click(function() {
            if ($(this).attr('aria-expanded') == 'false') {
                $("#mobile-menu-icon-down").removeClass("fa-angle-down")
                $("#mobile-menu-icon-down").addClass("fa-angle-up")
                $(this).addClass("active");
            } else {
                $("#mobile-menu-icon-down").addClass("fa-angle-down")
                $("#mobile-menu-icon-down").removeClass("fa-angle-up")
                $(this).removeClass("active");
            }
        });


        $(document).ready(function() {
            $('.open-mobile-menu,.slide-fade,.sliding-panel-close').on('click touchstart', function(e) {
                $('.slide-content,.slide-fade').toggleClass('is-visible');
                $('#wrapper').toggleClass('is-obscured');
                $('.slide-content').toggleClass('slide-content-display');
                e.preventDefault();
            });
        });
    </script>

    <script>
        var swiper = new Swiper(".swiper-container-mob", {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination-mob",
                clickable: true,
            },
        });
    </script>

    <script>
        ANIMSCROLL.init({
            easing: "ease-in-out-sine",
        });
    </script>

    <script type="text/javascript">
        var dom = document.getElementById("container");
        var myChart = echarts.init(dom);
        var app = {};
        var option;
        option = {
            tooltip: {
                trigger: "axis",
                axisPointer: {
                    type: "cross",
                    crossStyle: {
                        color: "#999",
                    },
                },
            },
            toolbox: {
                feature: {
                    dataView: {
                        show: false,
                        readOnly: false
                    },
                    magicType: {
                        show: false,
                        type: ["line", "bar"]
                    },
                    restore: {
                        show: false
                    },
                    saveAsImage: {
                        show: false
                    },
                },
            },
            legend: {
                data: ["Price", "Bid Count", "平均温度"],
            },
            xAxis: [{
                type: "category",
                data: [
                    "12:00 AM",
                    "1:00 AM",
                    "2:00 AM",
                    "3:00 AM",
                    "4:00 AM",
                    "5:00 AM",
                    "6:00 AM",
                    "7:00 AM",
                    "8:00 AM",
                    "9:00 AM",
                    "10:00 AM",
                    "11:00 AM",
                    "12:00 PM",
                    "1:00 PM",
                    "2:00 PM",
                    "3:00 PM",
                    "4:00 PM",
                    "5:00 PM",
                    "6:00 PM",
                    "7:00 PM",
                    "9:00 PM",
                    "10:00 PM",
                    "11:00 PM",
                    "12:00 PM",
                ],
                axisPointer: {
                    type: "shadow",
                },
            }, ],
            yAxis: [{
                    type: "value",
                    name: "Bid Range",
                    min: 0,
                    max: 100000,
                    interval: 10000,
                    splitLine: {
                        show: false,
                    },
                    axisLabel: {
                        formatter: "{value}",
                    },
                },
                {
                    type: "value",
                    name: "Bid Count",
                    min: 0,
                    max: 25,
                    interval: 5,
                    splitLine: {
                        show: false,
                    },
                    axisLabel: {
                        formatter: "{value}",
                    },
                },
            ],
            series: [{
                    name: "Price",
                    type: "line",
                    fill: "true",
                    areaStyle: {
                        color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                                offset: 0,
                                color: "#2F8FEB",
                            },
                            {
                                offset: 1,
                                color: "#fffF",
                            },
                        ]),
                    },
                    data: [
                        10000,
                        12000,
                        13000,
                        13050,
                        13560,
                        30000,
                        50000,
                        50000,
                        60000,
                        70000.6,
                        750000,
                        750000,
                        80000,
                        60000,
                        70000,
                        50000,
                        40000,
                        37000,
                        70000,
                        78000,
                        78000,
                        69999,
                        40000,
                        3.3,
                    ],
                },
                {
                    name: "Bid Count",
                    type: "line",
                    yAxisIndex: 1,
                    data: [
                        2.0,
                        2.2,
                        3.3,
                        4.5,
                        6.3,
                        10.2,
                        20.3,
                        23.4,
                        23.0,
                        16.5,
                        12.0,
                        6.2,
                        10,
                        23,
                        21,
                        42,
                        14,
                        56,
                        74,
                        7,
                        40,
                        10,
                        25,
                    ],
                },
            ],
        };
        if (option && typeof option === "object") {
            myChart.setOption(option);
        }
    </script>

    @stack('after-scripts')
    @include('includes.partials.ga')
</body>

</html>