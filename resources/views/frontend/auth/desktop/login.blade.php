<section id="login-body">
    <div class="container" style="padding-top: 10rem;">
        <div class="row justify-content-center mb-5">
            <div class="col-10">
                <div class="row" style="-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);
-moz-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);
box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%)">
                <div class="col-md-6 text-center p-0">
                <img src="{{url('theme_light/assets/login.png')}}" alt="Welcome to Tallentor" class="w-100" style="height: 30rem;"/>
                <!-- <div class="gradient-layer-dark"></div>
                <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="200">
                    <h1>Welcome to Tallentor</h1>
                    <p>
                        Work with us and,<br/>
                        go beyond imaginations
                    </p>
                </div> -->
            </div>

            <div class="left-form-login col-md-6 p-4" data-animscroll="fade-up" data-animscroll-delay="100">

                <div class="error">
                    @include('includes.partials.messages')
                </div>
                
                <h1 class="mb-2" style="font-size: 2.4rem; font-weight: 700">Login</h1>
                
                <h1>Hello there,</h1>
                <p>Welcome back</p>
                <!-- <div class="login-buttons-section">
                    @include('frontend.auth.includes.socialite')
                </div> -->
                <!-- <div class="separator">or</div> -->
                <div class="form-login">
                    <form action="{{route('frontend.auth.login.post')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email" class="form-label mb-1">User Name or Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""/>
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label mb-1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder=""/>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            Continue
                        </button>

                        <div class="row d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <a href="{{ route('frontend.auth.password.reset') }}" style="font-size: 13px;color: #0f9d58;" class="text-right">Forget Password?</a>
                        </div>
                    </form>
                   

                    <div class="bottumText">
                        <p>Not a member yet? <a href="{{route('frontend.auth.register')}}">Create an account</a></p>
                    </div>
                </div>
            </div>
                </div>
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
