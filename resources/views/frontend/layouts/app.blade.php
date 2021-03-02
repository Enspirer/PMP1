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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" type="image/png" href="{{url('theme_light/assets/image/favicon.png')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    @yield('meta')
    @stack('before-styles')
    <!-- Theame Style  -->
    <link rel="stylesheet" href="{{url('theme_light/styles/css/style.css')}}"/>
    <link rel="stylesheet" href="{{url('theme_light/styles/css/timeline.css')}}"/>
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
    <style>
        a.link_element:hover {
            color: black !important;
        }
    </style>
    @stack('after-styles')
</head>



    <body>
        @include('includes.partials.read-only')

        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
        </div><!-- #app -->




        <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div
                        class="col-sm-4 col-md col-sm-4 col-12 col"
                        data-animscroll="fade-up"
                    >
                        <h5 class="headin5_amrc col_white_amrc pt2"></h5>
                        <!--headin5_amrc-->
                        <p class="mb10">
                            <img src="{{url('theme_light/assets/image/logolight.png')}}" alt="" width="190px">
                        </p>
                        <p><i class="fa fa fa-envelope"></i> hello@tallentor.com</p>
                    </div>

                    <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Company</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://webenlance.com">About Us</a></li>
                            <li><a href="http://webenlance.com">Expert Centre</a></li>
                            <li><a href="http://webenlance.com">Live Auction</a></li>
                            <li><a href="http://webenlance.com">Terms & Conditions</a></li>
                            <li><a href="http://webenlance.com">Privacy Policy</a></li>
                            <li><a href="http://webenlance.com">Contact us</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>

                    <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Resources</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://webenlance.com">Help & Support</a></li>
                            <li>
                                <a href="http://webenlance.com">Partner with us</a>
                            </li>
                            <li><a href="http://webenlance.com">Events</a></li>
                            <li><a href="http://webenlance.com">Blog</a></li>
                            <li><a href="http://webenlance.com">Sitemap</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>

                    <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="http://webenlance.com">Mobile app development</a></li>
                            <li>
                                <a href="http://webenlance.com">ERP Solutions</a>
                            </li>
                            <li><a href="http://webenlance.com">Web applications</a></li>
                            <li><a href="http://webenlance.com">Digital Marketing</a></li>
                            <li><a href="http://webenlance.com">Architecture</a></li>
                            <li><a href="http://webenlance.com">Video animations</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>


                </div>
            </div>

            <div class="container">
                <ul class="foote_bottom_ul_amrc">
                    <!-- <li><a href="http://webenlance.com">Home</a></li>
                <li><a href="http://webenlance.com">About</a></li>
                <li><a href="http://webenlance.com">Services</a></li>
                <li><a href="http://webenlance.com">Pricing</a></li>
                <li><a href="http://webenlance.com">Blog</a></li>
                <li><a href="http://webenlance.com">Contact</a></li> -->
                </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">
                    Copyright @2021 | <a style="color: #c2c2c2;font-weight: 400;font-size: 15px;">Tallentor Global Ltd</a>
                </p>

                <ul class="social_footer_ul" style="padding-left: 0;">
                    <li>
                        <a href="https://www.facebook.com/tallentor"
                        ><i class="fab fa-facebook-f"></i
                            ></a>
                    </li>
                    <li>
                        <a href="http://webenlance.com"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/tallentor/"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                <!--social_footer_ul ends here-->
            </div>
        </footer>





        <!-- Scripts -->
        @stack('before-scripts')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

        <script>
            var swiper = new Swiper(".swiper-container", {
                // spaceBetween: -100,
                autoplay: {
                    delay: 1000,
                },
                loop: true,
                loopedSlides: 50,
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

                },
            });
        </script>

        <!-- hammer js  -->
        <!-- Optional JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Theame JS  -->
        <script src="{{url('theme_light/js/main.js')}}"></script>
        <script src="{{url('theme_light/plugin/dist/js/anim-trap.js')}}"></script>
        <script src="{{url('theme_light/plugin/dist/js/anim-scroll.js')}}"></script>
        <script src="{{url('theme_light/plugin/chart/echarts.min.js')}}"></script>

        <script src="{{url('theme_light/plugin/chart/echarts.min.js')}}"></script>
        <script src="{{url('theme_light/charts/chart_section.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>

        <script type="text/javascript">

        </script>
        <script>
            ANIMSCROLL.init({
                easing: "ease-in-out-sine",
            });

        </script>
        @stack('after-scripts')

        @include('includes.partials.ga')



        <!-- Initialize Swiper -->

    </body>
</html>

