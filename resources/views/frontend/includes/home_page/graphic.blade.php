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
.navClass .active {
    background-color : #0f9d58;
    color : white;
}

.navClass .active img {
    filter : invert(1);
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
                    <button class="nav-link active text-left border shadow py-3 mb-3" id="nav-programming-tab" data-toggle="tab" data-target="#nav-programming" type="button" role="tab" aria-controls="nav-programming" aria-selected="true">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/programing_development.svg')}}" alt="" style="height: 40px;">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Programming & Development</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/digital-marketing-icon.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Digital Marketing</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/graphic_designing.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Graphic Designing</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-education-tab" data-toggle="tab" data-target="#nav-education" type="button" role="tab" aria-controls="nav-education" aria-selected="true">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/education_training.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Education & Training</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-digital-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-digital" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/writing_translation.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Writing & Translation</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/video_photography.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Video & Photography</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-online-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-online" aria-selected="true">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/music_audio.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Music & Audio</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-digital-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-digital" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/business_sales.svg')}}" alt="" style="height: 40px">
                            </div>
                            <div class="col-8 text-center">
                                <p class="mb-0">Business & Sales</p>
                            </div>
                        </div>
                    </button>

                    <button class="nav-link text-left border shadow py-3 mb-3" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-" type="button" role="tab" aria-controls="nav-graphic" aria-selected="false">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="{{url('theme_light/assets/graphic/art_craft.svg')}}" alt="" style="height: 40px">
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
                            <img src="{{url('theme_light/assets/graphic/basic_website.png')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Basic Website</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/graphic/dynamic_website.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Dynamic Website</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/graphic/ecommerce_website.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">E-commerce Website</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/graphic/wordpress.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">WordPress Website</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/graphic/landing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Landing Page Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/web_banner.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Web Banners</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/icon.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Icon Pack Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/wireframe.png')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Website Wireframes</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/social-media-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Social Media Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/seo-2.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Search Engine Optimization</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/search-engine-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Search Engine Marketing</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/video-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Video Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/e-commerce-marketing-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">E-Commerce Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/sms-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">SMS Marketing</p>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/email-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Email Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/mobile-app-marketing-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Mobile App Marketing</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/web-analytics-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit:cover; height:170px;">
                            <p class="mt-3">Web Analytics</p>
                        </div>
                    </div>    
                </div>

                <div class="tab-pane fade" id="nav-graphic" role="tabpanel" aria-labelledby="nav-graphic-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/coffee.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Logo Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/company-branding.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Company Branding</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/company-stationary.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Company Stationary</p>
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/package-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Package Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/brochure-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Brochure Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/flyer-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Flyer Design</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/website-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Website Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/app-ui-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">App UI Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/presentation-design.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Presentation Design</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/web-banners.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Web Banners</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/ux.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">UX Designs</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/photoshop-editing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Photoshop Editing</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-education" role="tabpanel" aria-labelledby="nav-education-tab">
                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                            <img src="{{url('theme_light/assets/graphic/digital-marketing.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Digital Marketing</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/graphic/graphic-designing-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Graphic Designing</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/graphic/mobile-apps.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Mobile Apps</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/graphic/web-programming.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Web Programming</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/graphic/seo-1.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Search Engine Optimization</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/shopify.png')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">Shopify Integration</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/php-laravel.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">PHP Laravel</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/wordpress.jpg')}}" alt="" class="img-fluid rounded w-100" style="object-fit: cover; height: 170px;">
                            <p class="mt-3">WordPress</p>
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
            
            $(this).css({'background-color' : '#0f9d58', 'color' : 'white'});
            $(this).find('img').css('filter', 'invert(1)');
            
        },
        function(){
            $(this).css({'background-color' : '', 'color' : 'black'});
            $(this).find('img').css('filter', 'invert(0)');
        });
    });
</script>