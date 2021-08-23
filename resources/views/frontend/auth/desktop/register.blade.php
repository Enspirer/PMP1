@push('after-styles')
    <style>
        .form-login .strength {
            height:0px;
            width:100%;
            background:#ccc;
            margin-top: -7px;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            overflow: hidden;
            transition: height 0.3s;
        }
        .form-login .strength span{
            width:0px;
            height: 7px;
            display: block;
            transition: width 0.3s;
        }
        .warning {
            color:red!important;
        }
    </style>
@endpush


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
                                <select class="form-select" aria-label="Default select example" name="user_type" id="looking" value="" required>
                                    <option value="">Select</option>
                                    <option value="1">Someone to hire</option>
                                    <option value="2">Project</option>
                                </select>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Next" id="looking-next">

                            <hr>

                            <p style="font-size: 15px">Already a member? <a href="{{route('frontend.auth.login')}}" style="color: #27AE60">Sign in</a></p>

                        </fieldset>

                        <fieldset>

                            <h1>Tell us your name</h1>

                                <div class="form-group mt-3">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control" placeholder="john" id="first_name" required/>
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control" placeholder="duglas" id="last_name" required/>
                                </div>

                                <input type="button" name="previous" class="previous action-button" value="Previous">
                                <input type="button" name="next" class="next action-button" value="Next" id="name-next">

                        </fieldset>

                        <fieldset>

                            <h1>Tell us your contact details</h1>

                            <div class="form-group mt-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="john@example.com" id="email" required/>
                                <p class="email-check mt-2 d-none" style="font-size: 15px; color:red">Email already exists</p>
                            </div>

                            <div class="form-group">
                                <label>Contact number</label>
                                <input name="contact_number"  type="text" class="form-control"  placeholder="94-712975938" id="number" required/>
                                <p class="phone-check mt-2 d-none" style="font-size: 15px; color:red">Phone number already exists</p>
                            </div>

                            <input type="button" name="previous" class="previous action-button" value="Previous">
                            <input type="button" name="next" class="next action-button" value="Next" id="contact-next">

                        </fieldset>


                        <fieldset>

                            <h1>Please enter your password</h1>

                            <p class="text-info strong-info" style="font-size: 14px;">Please use strong password</p>

                            <div class="form-group mt-3">
                                <label>Password</label>
                                <input type="password" name="password" data-strength class="form-control" placeholder="●●●●●●●" required id="pass"/>
                            </div>

                            <div class="form-group">
                                <label>Re-Enter Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●" required id="re-pass"/>
                            </div>

                            <div class="feedback">
                                
                            </div>

                            <input type="button" name="previous" class="previous action-button" value="Previous">
                            <input type="button" name="next" class="next action-button" value="Next" id="pass-next">

                        </fieldset>

                        <fieldset>

                            <h1>Tell us your company details</h1>

                            <div class="form-group mt-3">
                                <label>Company name</label>
                                <input name="company_name" type="text" class="form-control" placeholder="ABC Company" required id="company-name"/>
                            </div>

                            <div class="form-group">
                                <label>Location</label>
                                <select class="form-select" aria-label="Default select example" name="location" required id="location">
                                    <option value="">Select</option>
                                    <option value="USA">USA</option>
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
                            <input type="button" name="next" class="next action-button" value="Next" id="company-next">

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

        const patterns = {
            email : /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})$/,
            contact_number : /^\d{10,12}$/
        }

        let strength = 0;


        function validate(field, regex) {
            if(regex.test(field.val())) {
                field.css('border', '1px solid green');
                field.addClass('valid');

            } else {
                field.css('border', '1px solid red');
                field.removeClass('valid');

            }
        }

        $('#email').keyup(function() {
            validate($(this), patterns[$(this).attr('name')]);
        });

        $('#number').keyup(function() {
            validate($(this), patterns[$(this).attr('name')]);
        });



        $("#looking-next").click(function(){

            if($('#looking').val() != '') {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
            

                current_fs.animate({
                    top: '200px'
                }, 200, function(){
                    current_fs.css('top', '0');
                    
                    current_fs.hide();

                    next_fs.show();
                });
            } else {

                $('#looking').css('border', '1px solid red');
            } 
        });



        $("#name-next").click(function(){

            if($('#first_name').val() != '' && $('#last_name').val() != '') {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();


                current_fs.animate({
                    top: '200px'
                }, 200, function(){
                    current_fs.css('top', '0');
                    
                    current_fs.hide();

                    next_fs.show();
                });
            } else {

                if($('#first_name').val() != '') {
                    $('#last_name').css('border', '1px solid red');
                    $('#first_name').css('border', '0.1px solid #9f9f9f');
                }

                else if($('#last_name').val() != '') {
                    $('#first_name').css('border', '1px solid red');
                    $('#last_name').css('border', '0.1px solid #9f9f9f');
                }
                
                else {
                    $('#first_name').css('border', '1px solid red');
                    $('#last_name').css('border', '1px solid red');
                }
            } 
        });



        $("#contact-next").click(function(){
            

            if($('#email').hasClass('valid') && $('#number').hasClass('valid')) {

                var form1 = new FormData();
                form1.append("email", $('#email').val());

                var settings1 = {
                "url": "{{url('/')}}/api/check_email",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form1
                };



                var form2 = new FormData();
                form2.append("contact_number", $('#number').val());

                var settings2 = {
                "url": "{{url('/')}}/api/check_phone_no",
                "method": "POST",
                "timeout": 0,
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form2
                };


                $.ajax(settings1).done(function (response1) {

                    $.ajax(settings2).done(function (response2) {

                        if(response1 == 'new_email' && response2 == 'new_phone') {
                            current_fs = $('#contact-next').parent();
                            next_fs = $('#contact-next').parent().next();

                            current_fs.animate({
                                top: '200px'
                            }, 200, function(){
                                current_fs.css('top', '0');
                                
                                current_fs.hide();

                                next_fs.show();
                            });

                        }
                        else {
                                if(response1 == 'new_email') {
                                    $('.phone-check').removeClass('d-none');
                                    $('.email-check').addClass('d-none');
                                }

                                else if(response2 == 'new_phone') {
                                    $('.email-check').removeClass('d-none');
                                    $('.phone-check').addClass('d-none');
                                }
                                
                                else {
                                    $('.phone-check').removeClass('d-none');
                                    $('.email-check').removeClass('d-none');
                                }
                            
                        }

                    });  
                });

            }
            
            else {

                if($('#email').hasClass('valid')) {
                    $('#number').css('border', '1px solid red');
                    $('#email').css('border', '0.1px solid #9f9f9f');
                }

                else if($('#number').hasClass('valid')) {
                    $('#email').css('border', '1px solid red');
                    $('#number').css('border', '0.1px solid #9f9f9f');
                }
                
                else {
                    $('#email').css('border', '1px solid red');
                    $('#number').css('border', '1px solid red');
                }
            } 
        });



        $("#pass-next").click(function(){

            if($('#pass').val() != '' && $('#re-pass').val() != '' && strength == 5) {
                if($('#pass').val() == $('#re-pass').val()) {

                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();


                    current_fs.animate({
                        top: '200px'
                    }, 200, function(){
                        current_fs.css('top', '0');
                        
                        current_fs.hide();

                        next_fs.show();
                    });
                } else {
                    let template = `<p style="color:red; font-size: 15px;">Passwords does not match</p>`;

                    $('.feedback').html(template);
                }
                
            } else {

                if(strength != 5) {
                    $('.strong-info').addClass('warning');
                }

                if($('#pass').val() != '') {
                    $('#re-pass').css('border', '1px solid red');
                    $('#pass').css('border', '0.1px solid #9f9f9f');
                }

                if($('#re-pass').val() != '') {
                    $('#pass').css('border', '1px solid red');
                    $('#re-pass').css('border', '0.1px solid #9f9f9f');
                }

            
                if($('#pass').val() == '' && $('#re-pass').val() == '') {
                    $('#pass').css('border', '1px solid red');
                    $('#re-pass').css('border', '1px solid red');
                }
            } 
        });



        $("#company-next").click(function(){

            if($('#company-name').val() != '' && $('#location').val() != '') {
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();


                current_fs.animate({
                    top: '200px'
                }, 200, function(){
                    current_fs.css('top', '0');
                    
                    current_fs.hide();

                    next_fs.show();
                });
            } else {

                if($('#company-name').val() != '') {
                    $('#location').css('border', '1px solid red');
                    $('#company-name').css('border', '0.1px solid #9f9f9f');
                }

                else if($('#location').val() != '') {
                    $('#company-name').css('border', '1px solid red');
                    $('#location').css('border', '0.1px solid #9f9f9f');
                }
                
                else {
                    $('#company-name').css('border', '1px solid red');
                    $('#location').css('border', '1px solid red');
                }
            } 
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






        //password strength bar
        $(function() {

            function passwordCheck(password) {
                if (password.length >= 8) {
                    strength += 1;
                }

                if (password.match(/(?=.*[0-9])/)) {
                    strength += 1;
                }
                    

                if (password.match(/(?=.*[!,%,&,@,#,$,^,*,?,_,~,<,>,])/)) {
                    strength += 1;
                }
                    

                if (password.match(/(?=.*[a-z])/)) {
                    strength += 1;
                }
                    

                if (password.match(/(?=.*[A-Z])/)) {
                    strength += 1;
                }
                    
                    

                displayBar(strength);
            }

            function displayBar(strength) {
                switch (strength) {
                    case 1:
                    $("#password-strength span").css({
                        "width": "20%",
                        "background": "#de1616"
                    });
                    break;

                    case 2:
                    $("#password-strength span").css({
                        "width": "40%",
                        "background": "#de1616"
                    });
                    break;

                    case 3:
                    $("#password-strength span").css({
                        "width": "60%",
                        "background": "#de1616"
                    });
                    break;

                    case 4:
                    $("#password-strength span").css({
                        "width": "80%",
                        "background": "#FFA200"
                    });
                    break;

                    case 5:
                    $("#password-strength span").css({
                        "width": "100%",
                        "background": "#06bf06"
                    });
                    break;

                    default:
                    $("#password-strength span").css({
                        "width": "0",
                        "background": "#de1616"
                    });
                }
            }

                $("[data-strength]").after("<div id=\"password-strength\" class=\"strength\"><span></span></div>")

                $("[data-strength]").focus(function() {
                    $("#password-strength").css({
                        "height": "7px"
                    });
                })
            
                .blur(function() {
                    $("#password-strength").css({
                        "height": "0px"
                    });
                });

                $("[data-strength]").keyup(function() {
                    strength = 0;
                    var password = $(this).val();
                    passwordCheck(password);
                });

        });

    </script>

@endpush
    