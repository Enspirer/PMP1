    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>@yield('title', app_name())</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="icon" type="image/png" href="{{url('theme_light/assets/image/favicon.png')}}" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>

        <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://releases.transloadit.com/uppy/v2.0.2/uppy.min.css" rel="stylesheet">

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
                font-size: 40px;
            }
        </style>

        <style>
            .open {
                border-radius: 80px;
                padding: 21px 25px;
            }
            .open i {
                font-size: 25px;
                color: white;
            }
            .imp {
                opacity: 100!important;
                transition : opacity 1s;
            }
            .hide {
                opacity : 0;
                transition : opacity 1s;
            }
            .open i {
                transform: (0deg);
                transition: transform 1s;
            }
            .plus-rotate {
                transform: rotate(45deg)!important;
                transition: transform 1s!important;
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

            <!-- Swal.fire('Any fool can use a computer') -->
            
        </div><!-- container -->
    </div><!-- #app -->


    <div class="text-right" style="position:fixed; bottom: 0.8rem; right:0.8rem">

        <div class="d-inline-block bg-light hide p-2 mr-1" style="box-shadow: 0 2px 4px rgb(0 0 0 / 40%); border-radius: 40px; position">

            <div class="row align-items-center text-center" style="width: 80px">
                <div class="col-12">
                    <a href="javascript:void(Tawk_API.toggle())" class="mt-3 mb-3" type="button" style="color: #344955" onclick="chat()"><i class="fas fa-headset" style="font-size: 30px;"></i></a> 
                </div>

                <div class="col-12">
                    <a class="mb-3" type="button" data-toggle="modal" data-target="#chat" style="color: #344955"><i class="fab fa-whatsapp" style="font-size: 30px;"></i></a> 
                </div>

                <div class="col-12">
                    <a href="https://m.me/tallentor" class="mb-3" type="button" style="color: #344955"><i class="fab fa-facebook-messenger" style="font-size: 30px;"></i></a> 
                </div>

            </div>
        </div>
        
        <a class="d-block open border bg-primary ml-auto" type="button"><i class="fas fa-plus"></i></a>
    </div>

    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat"></div>



        <!-- Modal -->
        <div class="modal fade" id="chat" tabindex="-1" aria-labelledby="chatLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="chatLabel">WhatsApp Team</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="7"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary border-0 text-light" data-dismiss="modal">Close</button>
                <a href="https://api.whatsapp.com/send/?phone=94777009990&text=" type="button" class="btn border-0 text-light" style="background: #0f9d58">Send</a>
            </div>
            </div>
        </div>
        </div>




    <footer class="footer">
        <div class="container bottom_border">
            <div class="row justify-content-between align-items-center" style="margin-top: 5rem;">
                <div class="col-6">
                    <p class="mb10">
                        <img src="{{url('theme_light/assets/image/footer_logo.png')}}" alt="" width="190px">
                    </p>
                </div>
                <div class="col-3 py-2" style="background-color: #0F9D58">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{ url('theme_light/assets/footer/talk.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h4 class="col_white_amrc mb-0">Let's Talk</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4 col-md col-sm-4 col-12 col" data-animscroll="fade-up">
                    <!-- <h5 class="headin5_amrc col_white_amrc pt2"></h5> -->
                    <!--headin5_amrc-->
                    
                    <!-- <p><i class="fa fa fa-envelope"></i> hello@tallentor.com</p> -->
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


                <div class="col-sm-4 col-md col-6 col" data-animscroll="fade-up" style="background-color: rgb(255, 254, 252, 0.1)">
                    <div class="row mt-4 align-items-center">
                        <div class="col-3">
                            <img src="{{ url('theme_light/assets/footer/email.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h6 class="col_white_amrc font-weight-normal mb-0">Business Inquiries</h6>
                            <p class="mb-0">hello@tallentor.com</p>
                        </div>
                    </div>

                    <div class="row mt-3 align-items-center bottom_border">
                        <div class="col-3">
                            <img src="{{ url('theme_light/assets/footer/tele.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-9">
                            <h6 class="col_white_amrc font-weight-normal mb-0">PR or Media</h6>
                            <p class="mb-0">hello@tallentor.com</p>
                        </div>
                    </div>
                    <form action="{{ route('frontend.email_subscription_store') }}" method="POST">
                        {{csrf_field()}}
                        <div class="input-group mt-4 mb-3 p-1" style="background-color: rgb(255, 254, 252, 0.1); border: 1px solid white; border-radius: 50px">
                            <input type="email" class="form-control border-0" placeholder="Enter your Email" aria-label="email" aria-describedby="email" name="email" id="email" style="background: border-box; border-radius: 50px; color: white" onkeyup="check()">
                            <button class="btn rounded-0 text-light border-0" type="submit" style="background-color: #0F9D58; border-radius: 50px!important; font-size: 0.7rem;" id="subscribe-btn" disabled>SUBSCRIBE</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>

        <div class="container">
            <ul class="foote_bottom_ul_amrc">

            </ul>

            <p class="text-center">
                Copyright @2021 | <a style="color: #c2c2c2;font-weight: 400;font-size: 15px;">Tallentor Global Ltd</a>
            </p>
        </div>
    </footer>

    


    <!-- Scripts -->
    @stack('before-scripts')
    <script src="{{url('js/core/swiper-bundle.min.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>

    @if(\Session::has('success'))

        <script>
            Swal.fire('Thank you for the subscription')
        </script>
    @endif


    <script>

        function check() {
            $('#subscribe-btn').removeAttr('disabled');
        }
    </script>

    

    <script>
        var galleryThumbs = new Swiper(".gallery-thumbs", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper(".gallery-top", {
            initialSlide: 0,
            // loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // observer: true,
            // observeParents: true,
            // parallax:true,

            // thumbs: {
            //     swiper: galleryThumbs,
            // },
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
    <script src="{{url('js/core/jquery-3.6.0.min.js')}}"></script>
    <script src="{{url('js/core/popper.min.js')}}"></script>
    <script src="{{url('js/core/bootstrap.min.js')}}"></script>
    <!-- Theame JS  -->
    <script src="{{url('theme_light/js/main.js')}}"></script>
    <script src="{{url('theme_light/plugin/dist/js/anim-trap.js')}}"></script>
    <script src="{{url('theme_light/plugin/dist/js/anim-scroll.js')}}"></script>
    <script src="{{url('theme_light/plugin/chart/echarts.min.js')}}"></script>

    <script src="{{url('theme_light/plugin/chart/echarts.min.js')}}"></script>
    <!-- <script src="{{url('theme_light/charts/chart_section.js')}}"></script> -->
    <script src="{{url('js/core/hammer.min.js')}}"></script>
    <script src="{{url('js/core/dropzone.js')}}"></script>
    <script src="{{url('js/core/uppy.min.js')}}"></script>





    

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


  
    <!--End of Tawk.to Script-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/614e0abed326717cb6833275/1fgcdjudh';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();

        Tawk_API.onLoad = function(){
            Tawk_API.hideWidget();
        };
        

        function chat() {
            Tawk_API.onLoad = function(){
                Tawk_API.hideWidget();
            };
        }
        
    </script>
    <!--End of Tawk.to Script-->


    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100353505440718");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
        FB.init({
        xfbml : true,
        version : 'v11.0'
        });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script>
        ANIMSCROLL.init({
            easing: "ease-in-out-sine",
        });

    </script>



<script>
    $('.open').on('click', function() {
        $(this).siblings().toggleClass('imp');
        $(this).find('i').toggleClass('plus-rotate');
    })
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

