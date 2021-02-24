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




        <footer class="container-fluid bg-grey py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="logo-part">
                                    <img
                                            src="{{url('theme_light/assets/image/logolight.png')}}"
                                            class="w-50 logo-footer"
                                    />
                                    <p>7637 Laurel Dr. King Of Prussia, PA 19406</p>
                                    <p>
                                        Use this tool as test data for an automated system or find
                                        your next pen
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 px-4">
                                <h6>About Company</h6>
                                <p>But horizontal lines can only be a full pixel high.</p>
                                <a href="#" class="btn-footer"> More Info </a><br />
                                <a href="#" class="btn-footer"> Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 px-4">
                                <h6>Help us</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><a href="#"> Home</a></li>
                                            <li><a href="#"> About</a></li>
                                            <li><a href="#"> Service</a></li>
                                            <li><a href="#"> Team</a></li>
                                            <li><a href="#"> Help</a></li>
                                            <li><a href="#"> Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 px-4">
                                        <ul>
                                            <li><a href="#"> Cab Faciliy</a></li>
                                            <li><a href="#"> Fax</a></li>
                                            <li><a href="#"> Terms</a></li>
                                            <li><a href="#"> Policy</a></li>
                                            <li><a href="#"> Refunds</a></li>
                                            <li><a href="#"> Paypal</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Newsletter</h6>
                                <div class="social">
                                    <a href="#"
                                    ><i class="fa fa-facebook" aria-hidden="true"></i
                                        ></a>
                                    <a href="#"
                                    ><i class="fa fa-instagram" aria-hidden="true"></i
                                        ></a>
                                </div>
                                <form class="form-footer my-3">
                                    <input
                                            type="text"
                                            placeholder="search here...."
                                            name="search"
                                    />
                                    <input type="button" value="Go" />
                                </form>
                                <p>That's technology limitation of LCD monitors</p>
                            </div>
                        </div>
                    </div>
                </div>
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

