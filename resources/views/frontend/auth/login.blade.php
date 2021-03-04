@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')

    <section id="login-body">
        <div class="row">
            <div class="left-form-login col-md-4" data-animscroll="fade-up" data-animscroll-delay="100">
                <h1>Hello there,</h1>
                <p>Welcome back</p>
                <div class="login-buttons-section">
                    @include('frontend.auth.includes.socialite')
                </div>
                <div class="separator">or</div>
                <div class="form-login">
                    <form action="{{route('frontend.auth.login.post')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email / Username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Continue
                        </button>
                    </form>
                    <div class="row d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <a href="{{ route('frontend.auth.password.reset') }}" style="font-size: 13px;color: #0f9d58;" class="text-right">Forget Password?</a>
                    </div>

                    <div class="bottumText">
                        <p>Not a member yet? <a href="{{route('frontend.auth.register')}}">Create an account</a></p>
                    </div>
                </div>
            </div>
            <div class="right-image col-md-8">
                <img src="{{url('theme_light/assets/image/MaskGroup8.png')}}" alt=""/>
                <div class="gradient-layer-dark"></div>
                <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="200">
                    <h1>Welcome to Tallentor</h1>
                    <p>
                        Work with us and go beyond ,<br/>
                        from your imaginations
                    </p>
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





@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
