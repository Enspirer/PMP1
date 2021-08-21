
<section id="login-body">
        <div class="row">
            <div class="left-form-login col-md-4" data-animscroll="fade-up" data-animscroll-delay="100">
            <div class="error" style="padding: 15px;">
            @include('includes.partials.messages')
            </div>
            

                <!-- <h1>Register Here</h1>
                <p class="register-paragraph">Tell us what you are looking for</p> -->
                <div class="form-login">
                    <form class="m-t-40" action="{{route('frontend.auth.register.post')}}" method="post" id="register-form">
                        {{csrf_field()}}

                        <fieldset>

                            <h1>Tell us what you are looking for</h1>
                            <div class="form-group mt-3">
                                <label>I'm looking...</label>
                                <select class="form-select" aria-label="Default select example" name="user_type">
                                    <option value="1" selected>Someone to hire</option>
                                    <option value="2">Project</option>
                                </select>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next">

                            <hr>

                            <p style="font-size: 15px">Already a member? <a href="{{route('frontend.auth.login')}}" style="color: #27AE60">Sign in</a></p>

                        </fieldset>

                        <fieldset>

                            <h1>Tell us your name</h1>

                                <div class="form-group mt-3">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="john"/>
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="duglas"/>
                                </div>

                                <input type="button" name="previous" class="previous action-button" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next">

                        </fieldset>

                        <fieldset>

                            <h1>Tell us your contact details</h1>

                            <div class="form-group mt-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="john@example.com"/>
                            </div>

                            <div class="form-group">
                                <label>Contact number</label>
                                <input name="contact_number"  type="text" class="form-control"  placeholder="94-712975938"/>
                            </div>

                            <input type="button" name="previous" class="previous action-button" value="Previous">
                            <input type="button" name="next" class="next action-button" value="Next">

                        </fieldset>


                        <fieldset>

                            <h1>Please enter your password</h1>

                            <div class="form-group mt-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="●●●●●●●"/>
                            </div>

                            <div class="form-group">
                                <label>Re-Enter Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●"/>
                            </div>

                            <input type="button" name="previous" class="previous action-button" value="Previous">
                            <input type="button" name="next" class="next action-button" value="Next">

                        </fieldset>

                        <fieldset>

                            <h1>Tell us your company details</h1>

                            <div class="form-group mt-3">
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

                            <input type="button" name="previous" class="previous action-button" value="Previous">
                            <input type="button" name="next" class="next action-button" value="Next">

                        </fieldset>

                        <fieldset>

                            <h1>Do you agree with us?</h1>

                            <div class="form-check mb-5">

                                <input type="checkbox" class="form-check-input" id="checkme"/>

                                <label class="form-check-label" for="exampleCheck1" style="padding-top: 5px">By signing up you are agree with our <a href="">Terms and conditions.</a></label>

                            </div>
   

                            <input type="button" name="previous" class="previous action-button mr-3" value="Previous">
                            <button type="submit" class="btn btn-primary ml-3 signup-btn" disabled id="btn_submit">Sign Up</button>

                        </fieldset> 
                    </form>
                </div>
            </div>
            <div class="right-image col-md-8">
                <img src="{{url('theme_light/assets/image/MaskGroup8.png')}}" alt=""/>
                <div class="gradient-layer-dark"></div>
                <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="100" >
                    <h1>Welcome to Tallentor</h1>
                    <p>
                    Work with us and,<br/>
                    go beyond imaginations
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




@push('after-scripts')
<script>

        var current_fs, next_fs, previous_fs;

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            

            current_fs.animate({
                top: '200px'
            }, 200, function(){
                current_fs.css('top', '0');
                
                current_fs.hide();

                next_fs.show();
            });
        });

        $(".previous").click(function(){

            
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
            

            current_fs.animate({
                top: '200px'
            }, 200, function(){

                current_fs.css('top', '0');

                current_fs.hide();

                previous_fs.show();
            });
        });
    </script>

@endpush
    