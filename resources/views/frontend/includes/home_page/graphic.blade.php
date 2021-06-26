@push('before-styles')
<style>
.navClass {
  height: 400px;
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
    <h2>Graphic Designing</h2>
    <p>A single place, milliions of creative talents</p>

    <div class="row justify-content-between mt-5">
        <div class="col-3">
            <nav class="navClass">
                <div class="nav flex-column graphic-design border-0" id="nav-tab" role="tablist" style="overflow-x: auto;">
                    <button class="nav-link active text-left" id="nav-graphic-tab" data-toggle="tab" data-target="#nav-graphic" type="button" role="tab" aria-controls="nav-graphic" aria-selected="true"><img src="{{url('theme_light/assets/graphic/graphic-icon.svg')}}" class="mr-3" alt="" style="color:red">Graphic Designing</button>

                    <button class="nav-link text-left" id="nav-web-tab" data-toggle="tab" data-target="#nav-web" type="button" role="tab" aria-controls="nav-web" aria-selected="false"><img src="{{url('theme_light/assets/graphic/web-icon.svg')}}" class="mr-3" alt="">Web Designing</button>

                    <button class="nav-link text-left" id="nav-digital-tab" data-toggle="tab" data-target="#nav-digital" type="button" role="tab" aria-controls="nav-digital" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-icon.svg')}}" class="mr-3" alt="">Digital Marketing</button>

                    <button class="nav-link active text-left" id="nav-graphic-tab1" data-toggle="tab" data-target="#nav-graphic1" type="button" role="tab" aria-controls="nav-graphic1" aria-selected="true"><img src="{{url('theme_light/assets/graphic/graphic-icon.svg')}}" class="mr-3" alt="">Graphic Designing</button>

                    <button class="nav-link text-left" id="nav-web-tab1" data-toggle="tab" data-target="#nav-web1" type="button" role="tab" aria-controls="nav-web1" aria-selected="false"><img src="{{url('theme_light/assets/graphic/web-icon.svg')}}" class="mr-3" alt="">Web Designing</button>

                    <button class="nav-link text-left" id="nav-digital-tab1" data-toggle="tab" data-target="#nav-digital1" type="button" role="tab" aria-controls="nav-digital1" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-icon.svg')}}" class="mr-3" alt="">Digital Marketing</button>

                    <button class="nav-link active text-left" id="nav-graphic-tab2" data-toggle="tab" data-target="#nav-graphic2" type="button" role="tab" aria-controls="nav-graphic2" aria-selected="true"><img src="{{url('theme_light/assets/graphic/graphic-icon.svg')}}" class="mr-3" alt="">Graphic Designing</button>
                    
                    <button class="nav-link text-left" id="nav-web-tab2" data-toggle="tab" data-target="#nav-web2" type="button" role="tab" aria-controls="nav-web2" aria-selected="false"><img src="{{url('theme_light/assets/graphic/web-icon.svg')}}" class="mr-3" alt="">Web Designing</button>

                    <button class="nav-link text-left" id="nav-digital-tab2" data-toggle="tab" data-target="#nav-digital2" type="button" role="tab" aria-controls="nav-digital2" aria-selected="false"><img src="{{url('theme_light/assets/graphic/digital-icon.svg')}}" class="mr-3" alt="">Digital Marketing</button>
                </div>
            </nav>
        </div>

        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-graphic" role="tabpanel" aria-labelledby="nav-graphic-tab">
                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                            <img src="{{url('theme_light/assets/graphic/graphic-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Graphic Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/graphic/ui-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">UI Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/graphic/brochure-design.png')}}" alt="" class="img-fluid">
                            <p class="mt-3">Brochure Design</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/graphic/business-card-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Business card Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/graphic/font-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Font Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/logo-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Logo Design</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
                    <div class="row">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                            <img src="{{url('theme_light/assets/graphic/business-card-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Business card Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="100">
                            <img src="{{url('theme_light/assets/graphic/font-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Font Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="200">
                            <img src="{{url('theme_light/assets/graphic/logo-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Logo Design</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="300">
                            <img src="{{url('theme_light/assets/graphic/graphic-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Graphic Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="400">
                            <img src="{{url('theme_light/assets/graphic/ui-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">UI Design</p>
                        </div>
                        <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500" data-animscroll-delay="500">
                            <img src="{{url('theme_light/assets/graphic/brochure-design.png')}}" alt="" class="img-fluid">
                            <p class="mt-3">Brochure Design</p>
                        </div>
                    </div>   
                </div>

                <div class="tab-pane fade" id="nav-digital" role="tabpanel" aria-labelledby="nav-digital-tab">
                    <div class="row mb-3">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/logo-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Logo Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/brochure-design.png')}}" alt="" class="img-fluid">
                            <p class="mt-3">Brochure Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/graphic-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Graphic Design</p>
                        </div>  
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/ui-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">UI Design</p>
                        </div>
                        <div class="col-4">   
                            <img src="{{url('theme_light/assets/graphic/business-card-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Business card Design</p>
                        </div>
                        <div class="col-4">
                            <img src="{{url('theme_light/assets/graphic/font-design.svg')}}" alt="" class="img-fluid">
                            <p class="mt-3">Font Design</p>
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