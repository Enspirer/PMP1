<section id="login-body">
    <div class="container" style="padding-top: 10rem;">
        <div class="row justify-content-center mb-5">
            <div class="col-10">
                <div class="row" style="-webkit-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);
-moz-box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%);
box-shadow: 0px 0px 3px -1px rgb(0 0 0 / 75%)">
                    <div class="col-md-6 text-center p-0">
                        <img src="{{url('theme_light/assets/login.png')}}" alt="" class="w-100" style="height: 30rem;"/>
                        <!-- <div class="gradient-layer-dark"></div>
                        <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="200">
                            <h1>Welcome to Tallentor</h1>
                            <p>
                                Work with us and go beyond ,<br />
                                from your imaginations
                            </p>
                        </div> -->
                    </div>

                    <div class="left-form-login col-md-6 p-4" data-animscroll="fade-up" data-animscroll-delay="100">
                        <h1>Forgot your password?</h1>
                        <p style="max-width: 500px;margin: auto; margin-top: 24px;font-size: 15px;">Don't worry! Resetting your password is easy. Just type the email that you used to register with Tallantor</p>

                            <div class="form-login" style="margin-top: 50px; max-width: 350px;">
                                <form method="post" action="{{route('frontend.auth.password.email.post')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="">
                                    </div>


                                    <button type="submit" class="btn btn-primary btn-block">
                                        Continue
                                    </button>
                                </form>



                            </div>
                            <p style="font-size: 13px;" class="already mt-5">Did you remembered your password?<a href="{{route('frontend.auth.login')}}" style="color: #0f9d58;"> Try signing in </a></p>
                        </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
