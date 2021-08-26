@push('before-styles')
<style>
.navClass {
  height: 500px;
  overflow-y: scroll;
}
::-webkit-scrollbar {
  width: 8px;
  border: 1px solid #d5d5d5;
}
::-webkit-scrollbar-track {
  border-radius: 0;
  background: #eeeeee;
}
::-webkit-scrollbar-thumb {
  border-radius: 0;
  background: #b0b0b0;
}
button:focus {
    outline: none;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endpush

<div class="container text-center" style="margin-top: 7rem; margin-bottom: 7rem">
    <h2>Top Categories at Tallentor</h2>
    <p>one place with thousands of creative talents,</p>

    <div class="row justify-content-between mt-5">
        <div class="col-3">
            <nav class="navClass">
                <div class="nav flex-column graphic-design border-0" id="nav-tab" role="tablist" style="overflow-x: auto;">
                    <button class="nav-link active text-left" id="nav-online-tab" data-toggle="tab" data-target="#nav-online" type="button" role="tab" aria-controls="nav-online" aria-selected="true"><img src="{{url('theme_light/assets/graphic/online-course-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Online Courses</button>

                    <button class="nav-link text-left" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-marketing-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Digital Marketing</button>

                    <button class="nav-link text-left" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false"><img src="{{url('theme_light/assets/graphic/graphic-design-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Graphic Designing</button>

                    <button class="nav-link active text-left" id="nav-online-tab" data-toggle="tab" data-target="#nav-online" type="button" role="tab" aria-controls="nav-online" aria-selected="true"><img src="{{url('theme_light/assets/graphic/online-course-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Online Courses</button>

                    <button class="nav-link text-left" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-marketing-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Digital Marketing</button>

                    <button class="nav-link text-left" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false"><img src="{{url('theme_light/assets/graphic/graphic-design-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Graphic Designing</button>

                    <button class="nav-link active text-left" id="nav-online-tab" data-toggle="tab" data-target="#nav-online" type="button" role="tab" aria-controls="nav-online" aria-selected="true"><img src="{{url('theme_light/assets/graphic/online-course-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Online Courses</button>

                    <button class="nav-link text-left" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-marketing-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Digital Marketing</button>

                    <button class="nav-link text-left" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false"><img src="{{url('theme_light/assets/graphic/graphic-design-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Graphic Designing</button>

                    <button class="nav-link active text-left" id="nav-online-tab" data-toggle="tab" data-target="#nav-online" type="button" role="tab" aria-controls="nav-online" aria-selected="true"><img src="{{url('theme_light/assets/graphic/online-course-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Online Courses</button>

                    <button class="nav-link text-left" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-marketing-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Digital Marketing</button>

                    <button class="nav-link text-left" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false"><img src="{{url('theme_light/assets/graphic/graphic-design-icon.svg')}}" class="mr-3" alt="" style="height: 40px">Graphic Designing</button>
                </div>
            </nav>
        </div>

        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-online" role="tabpanel" aria-labelledby="nav-online-tab">
                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                            <img src="{{url('theme_light/assets/graphic/digital-marketing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Digital Marketing</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/graphic/graphic-designing-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Graphic Designing</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/graphic/mobile-apps.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Mobile Apps</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/graphic/web-programming.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Web Programming</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/graphic/seo-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Search Engine Optimization</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/shopify.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Shopify Integration</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/php-laravel.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">PHP Laravel</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/wordpress.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">WordPress</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/social-media-marketing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Social Media Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/seo-2.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Search Engine Optimization</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/search-engine-marketing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Search Engine Marketing</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/video-marketing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Video Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/e-commerce-marketing-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">E-Commerce Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/sms-marketing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">SMS Marketing</p>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/email-marketing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Email Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/mobile-app-marketing-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Mobile App Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/web-analytics-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Web Analytics</p>
                        </div>
                    </div>    
                </div>

                <div class="tab-pane fade" id="nav-graphic" role="tabpanel" aria-labelledby="nav-graphic-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/logo-design-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Logo Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/company-branding.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Company Branding</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/company-stationary.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Company Stationary</p>
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/package-design.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Package Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/brochure-design.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Brochure Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/flyer-design.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Flyer Design</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/website-design.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Website Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/app-ui-design.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">App UI Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/presentation-design.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Presentation Design</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/web-banners.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Web Banners</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/ux-design-1.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">UX Designs</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/photoshop-editing.jpg')}}" alt="" class="img-fluid rounded">
                            <p class="mt-3">Photoshop Editing</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('.navClass div').children('button').hover(function(){
            $(this).css({'background-color' : '#0f9d58', 'color' : 'white', 'border-right' : '3px solid white'});
            $(this).children('img').css('filter', 'invert(1)');
        },
        function(){
            $(this).css({'background-color' : '', 'color' : 'black', 'border-right' : 'none'});
            $(this).children('img').css('filter', 'invert(0)');
        });
    });
</script>