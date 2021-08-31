@push('before-styles')
<style>
/* .navClass {
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
} */
.navClass .nav .active {
    background-color : #0f9d58;
    color : white;
}

.navClass .nav .active img {
    filter : brightness(50);
}
button:focus {
    outline: none;
}
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@endpush

<div class="container text-center" style="margin-top: 7rem; margin-bottom: 10rem">

    <div class="heading-text">
        <h1 style="font-size: 42px; color: #361d41; margin: auto; text-align: center; font: normal normal bold 48px/70px Poppins;">Top Categories at Tallentor</h1>
        <p style="margin-top: 19px !important; max-width: 700px; text-align: center; margin: auto;font-size: 18px;">one place with thousands of creative talents</p>
    </div>
    

    <div class="row justify-content-between mt-5">
        <div class="col-3">
            <nav class="navClass">
                <div class="nav flex-column categories border-0" id="nav-tab" role="tablist" style="overflow-x: auto;">
                    <button class="nav-link text-left border shadow py-3 mb-3 active" id="nav-programming-tab" data-toggle="tab" data-target="#nav-programming" type="button" role="tab" aria-controls="nav-programming" aria-selected="true">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/programming_development.svg')}}" alt="" style="height: 40px;">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Programming & Development</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/digital_marketing.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Digital Marketing</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/graphic_designing.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Graphic Designing</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-education-tab" data-toggle="tab" data-target="#nav-education" type="button" role="tab" aria-controls="nav-education" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/education_training.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Education & Training</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-digital-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-digital" aria-selected="false" disabled>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/writing_translation.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Writing & Translation</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false" disabled>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/video_photography.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Video & Photography</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-online-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-online" aria-selected="false" disabled>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/music_audio.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Music & Audio</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-digital-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-digital" aria-selected="false" disabled>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/business_sales.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Business & Sales</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false" disabled>
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/categories/art_craft.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Art & Craft</p>
                            </div>
                        </div>
                    </button>
                </div>
            </nav>
        </div>

        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-programming" role="tabpanel" aria-labelledby="nav-programming-tab">
                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                            <a href="{{ route('frontend.post_a_job') }}"><img src="{{url('theme_light/assets/categories/basic_website.jpg')}}" alt="" class="img-fluid rounded w-100"></a>
                            <p class="mt-3">Basic Website</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/categories/dynamic_website.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Dynamic Website</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/categories/ecommerce_website.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">E-commerce Website</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/categories/wordpress_website.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">WordPress Website</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/categories/landing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Landing Page Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/web_banner.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Web Banners</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/packs.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Icon Pack Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/wireframe.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Website Wireframes</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/erp.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">ERP Solutions</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/pms.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">PMS Solutions</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/payroll.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Payroll Management</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/pos.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">POS Systems</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/social-media-marketing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Social Media Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/seo-2.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Search Engine Optimization</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/search-engine-marketing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Search Engine Marketing</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/video-marketing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Video Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/e-commerce-marketing-1.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">E-Commerce Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/sms-marketing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">SMS Marketing</p>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/email-marketing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Email Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/mobile-app-marketing-1.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Mobile App Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/web-analytics-1.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Web Analytics</p>
                        </div>
                    </div>    
                </div>

                <div class="tab-pane fade" id="nav-graphic" role="tabpanel" aria-labelledby="nav-graphic-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/coffee.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Logo Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/company-branding.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Company Branding</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/company-stationary.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Company Stationary</p>
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/package-design.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Package Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/categories/brochure-design.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Brochure Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/flyer-design.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Flyer Design</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/website-design.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Website Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/categories/app-ui-design.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">App UI Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/presentation-design.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Presentation Design</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/web-banners.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Web Banners</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/categories/ux.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">UX Designs</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/categories/photoshop-editing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Photoshop Editing</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                            <img src="{{url('theme_light/assets/categories/digital-marketing.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Digital Marketing</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/categories/graphic-designing-1.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Graphic Designing</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/categories/mobile-apps.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Mobile Apps</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/categories/web-programming.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Web Programming</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/categories/seo-1.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Search Engine Optimization</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/shopify.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">Shopify Integration</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/php-laravel.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">PHP Laravel</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/categories/wordpress.jpg')}}" alt="" class="img-fluid rounded w-100">
                            <p class="mt-3">WordPress</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>