


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
            @yield('content')
        </div><!-- container -->
    </div><!-- #app -->




    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div
                        class="col-sm-4 col-md col-sm-4 col-12 col"
                        data-animscroll="fade-up">
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
                        <li><a href="{{route("frontend.about")}}">About Us</a></li>
                        <li><a href="{{route("frontend.expert_center")}}">Expert Centre</a></li>
                        <li><a href="{{route('frontend.project_auction',1)}}">Live Auction</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="{{route('frontend.contact_us')}}">Contact us</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>

                <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up">
                    <h5 class="headin5_amrc col_white_amrc pt2">Resources</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="">Help & Support</a></li>
                        <li>
                            <a href="">Partner with us</a>
                        </li>
                        <li><a href="">Events</a></li>
                        <li><a href="{{route('frontend.blog','all')}}">Blog</a></li>
                        <li><a href="">Sitemap</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
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
                    <a href="https://www.facebook.com/tallentor" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                        ></a>
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
            <!--social_footer_ul ends here-->
        </div>
    </footer>





    <!-- Scripts -->
    @stack('before-scripts')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script>
        var galleryThumbs = new Swiper(".gallery-thumbs", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper(".gallery-top", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });
    </script>



    <script>
        var swiper = new Swiper(".col-swiper-container", {
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        var swiper = new Swiper('.swiper-container2', {
            pagination: {
                el: '.swiper-pagination2',
                clickable: true,
            },
        });
    </script>

    <script>
        var swiper = new Swiper(".swiper-container1", {
            autoplay: {
                delay: 1000,
            },
            loop: true,
            loopedSlides: 50,
            breakpoints: {
                320: {
                    slidesPerView: 2,
                },
                480: {
                    slidesPerView: 3,
                },
                640: {
                    slidesPerView: 4,
                },
                1200: {
                    slidesPerView: 8,
                },

            },
        });
    </script>

    <script>
        var swiper = new Swiper(".swiper-container3", {
            slidesPerView: 4,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
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
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"
    ></script>
    <script>
        $(document).ready(function () {
            "use strict";
            $(".menu > ul > li:has( > ul)").addClass("menu-dropdown-icon");
            $(".menu > ul > li > ul:not(:has(ul))").addClass("normal-sub");
            $(".menu > ul").before('<a href="#" class="menu-mobile">&nbsp;</a>');
            $(".menu > ul > li").hover(function (e) {
                if ($(window).width() > 943) {
                    $(this).children("ul").stop(true, false).fadeToggle(150);
                    e.preventDefault();
                }
            });
            $(".menu > ul > li").click(function () {
                if ($(window).width() <= 943) {
                    $(this).children("ul").fadeToggle(150);
                }
            });
            $(".menu-mobile").click(function (e) {
                $(".menu > ul").toggleClass("show-on-mobile");
                e.preventDefault();
            });
        });
        $(window).resize(function () {
            $(".menu > ul > li").children("ul").hide();
            $(".menu > ul").removeClass("show-on-mobile");
        });
    </script>

    <script language="javascript" type="text/javascript">
        function changecv(id) {
            if (id == 1) {
                $("#0101").show();
                $("#0102").hide();
                $("#0103").hide();
                $("#0104").hide();
                $("#icon01").show();
                $("#icon02").hide();
                $("#icon03").hide();
                $("#icon04").hide();
                $("#img0101").show();
                $("#img0102").hide();
                $("#img0103").hide();
                $("#img0104").hide();
                $("#li1").addClass("active-menu");
                $("#li2").removeClass("active-menu");
                $("#li3").removeClass("active-menu");
                $("#li4").removeClass("active-menu");
            }
            if (id == 2) {
                $("#0101").hide();
                $("#0102").show();
                $("#0103").hide();
                $("#0104").hide();
                $("#icon01").hide();
                $("#icon02").show();
                $("#icon03").hide();
                $("#icon04").hide();
                $("#img0101").hide();
                $("#img0102").show();
                $("#img0103").hide();
                $("#img0104").hide();
                $("#li1").removeClass("active-menu");
                $("#li2").addClass("active-menu");
                $("#li3").removeClass("active-menu");
                $("#li4").removeClass("active-menu");
            }
            if (id == 3) {
                $("#0101").hide();
                $("#0102").hide();
                $("#0103").show();
                $("#0104").hide();
                $("#icon01").hide();
                $("#icon02").hide();
                $("#icon03").show();
                $("#icon04").hide();
                $("#img0101").hide();
                $("#img0102").hide();
                $("#img0103").show();
                $("#img0104").hide();
                $("#li1").removeClass("active-menu");
                $("#li2").removeClass("active-menu");
                $("#li3").addClass("active-menu");
                $("#li4").removeClass("active-menu");
            }
            if (id == 4) {
                $("#0101").hide();
                $("#0102").hide();
                $("#0103").hide();
                $("#0104").show();
                $("#icon01").hide();
                $("#icon02").hide();
                $("#icon03").hide();
                $("#icon04").show();
                $("#img0101").hide();
                $("#img0102").hide();
                $("#img0103").hide();
                $("#img0104").show();
                $("#li1").removeClass("active-menu");
                $("#li2").removeClass("active-menu");
                $("#li3").removeClass("active-menu");
                $("#li4").addClass("active-menu");
            }
        }


    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6043128b385de407571d2421/1f0300t1e';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <script type="text/javascript">

    </script>
    <script>
        ANIMSCROLL.init({
            easing: "ease-in-out-sine",
        });

    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KR2WKTS');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KR2WKTS"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @stack('after-scripts')
    @include('includes.partials.ga')
    </body>
    </html>

