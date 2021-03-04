@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')

    <section id="login-body">
        <div class="row">
            <div class="left-form-login col-md-4" data-animscroll="fade-up" data-animscroll-delay="100"><br><br><br>
                <h1>Register Here</h1>
                <p class="register-paragraph">Tell us what you are looking for</p>
                <div class="form-login">
                    <form class="m-t-40" action="{{route('frontend.auth.register.post')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>I'm looking...</label>
                            <select class="form-select" aria-label="Default select example" name="user_type">
                                <option value="1" selected>Someone to hire</option>
                                <option value="2">Project</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" class="form-control" placeholder="john"/>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="duglas"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="john"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="●●●●●●●"/>
                        </div>

                        <div class="form-group">
                            <label>Re-Enter Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●"/>
                        </div>


                        <div class="form-group">
                            <label>Contact number</label>
                            <input name="contact_number"  type="text" class="form-control"  placeholder="94-712975938"/>
                        </div>
                        <div class="form-group">
                            <label>Company name</label>
                            <input name="company_name" type="text" class="form-control" placeholder="ABC Company"/>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <select class="form-select" aria-label="Default select example" name="location">
                                <option value="USA" selected>USA</option>
                                <option value="England">England</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Japan">Japan</option>
                                <option value="China">China</option>
                                <option value="Canada">Canada</option>
                                <option value="France">France</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkme"/>
                            <label class="form-check-label" for="exampleCheck1">By signing up you are agree with our <br/>
                                <a href="">Terms and conditions.</a>
                            </label>
                        </div>
                        <div class="row row-button">
                            <button type="submit" class="btn btn-primary" disabled id="btn_submit">
                                Sign Up
                            </button>
                            <p>or</p>
                            <a href="#">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right-image col-md-8">
                <img src="{{url('theme_light/assets/image/MaskGroup8.png')}}" alt=""/>
                <div class="gradient-layer-dark"></div>
                <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="100" >
                    <h1>Welcome to Tallentor</h1>
                    <p>
                        Work with us and go beyond ,<br />
                        from your imaginations
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        var checker = document.getElementById("checkme");
        var btn_submit = document.getElementById("btn_submit");
        // when unchecked or checked, run the function
        checker.onchange = function () {
            if (this.checked) {
                btn_submit.disabled = false;
            } else {
                btn_submit.disabled = true;
            }
        };
    </script>



@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif
@endpush
