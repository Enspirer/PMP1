@push('after-styles')
    <style>
        .strength {
            height:0px;
            width:100%;
            background:#ccc;
            margin-top: -7px;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
            overflow: hidden;
            transition: height 0.3s;
        }
        .strength span{
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


<section class="login-mob">


  <h1>Register Here</h1>
  <p>Tell us what you are looking for</p>


  <div class="error" style="padding: 15px;">
            @include('includes.partials.messages')
            </div>



  <h6>I'm looking...</h6>




  <div class="btn-group nav nav-tabs" role="group" aria-label="Basic example" id="nav-tab" role="tablist">

    <button type="button" class="btn btn-secondary btn-hire active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Hire</button>
    <button type="button" class="btn btn-secondary btn-work" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Work</button>

  </div>


</section>

<section class="login-form-mob">
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="form-login">
        <form class="m-t-40" action="{{route('frontend.auth.register.post')}}" method="post">
          {{csrf_field()}}
          
          <input type="text" hidden class="form-control" value="1" name="user_type" />


          <fieldset>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" placeholder="john" name="first_name" id="first_name1" required/>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" placeholder="duglas" name="last_name" id="last_name1" required/>
            </div>

            <input type="button" name="next" class="next action-button" value="Next" id="name-next1">

            <hr>

            <p class="already">Already have an account? <a href="{{route('frontend.auth.login')}}">Please sign in here</a></p>

          </fieldset>
          

          <fieldset>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="john@example.com" id="email1" required/>
              <p class="email-check1 mt-2 d-none" style="font-size: 15px; color:red">Email already exists</p>
            </div>

            <div class="form-group">
              <label>Contact number</label>
              <input name="contact_number" type="text" class="form-control" placeholder="94-712975938" id="number1" required/>
              <p class="phone-check1 mt-2 d-none" style="font-size: 15px; color:red">Phone number already exists</p>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous">
            <input type="button" name="next" class="next action-button" value="Next" id="contact-next1">

          </fieldset>
          

          <fieldset>

            <p class="text-info strong-info" style="font-size: 14px;">Please use strong password</p>
          
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" data-strength1 class="form-control" placeholder="●●●●●●●" required id="pass1"/>
            </div>
            <div class="form-group">
              <label>Re-Enter Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●" required id="re-pass1"/>
            </div>

            <div class="feedback1">
                                
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous">
            <input type="button" name="next" class="next action-button" value="Next" id="pass-next1">

          </fieldset>


          <fieldset>

            <div class="form-group">
              <label>Company name</label>
              <input name="company_name" type="text" class="form-control" placeholder="ABC Company" required id="company-name1"/>
            </div>

            <div class="form-group">
              <label>Location</label>
              <select class="form-select" aria-label="Default select example" name="location" required id="location1">
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
            <input type="button" name="next" class="next action-button" value="Next" id="company-next1">

          </fieldset>
          

         
         <fieldset>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkme1" required/>
                <label class="form-check-label" for="exampleCheck1" style="padding-top: 5px;">By signing up you are agree with our <a href="">Terms and conditions.</a>
                </label>
              </div>

              <div class="text-center mt-4 mb-3">
                  <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
              </div>

              <input type="button" name="previous" class="previous action-button mr-3" value="Previous">
              <button class="btn btn-primary ml-3 signup-btn" type="submit" id="submit_btn1" disabled>Sign Up</button>
         </fieldset>
        </form>
      </div>
    </div>



    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="form-login">
        <form class="m-t-40" action="{{route('frontend.auth.register.post')}}" method="post">
          {{csrf_field()}}
          <input type="text" hidden class="form-control" value="2" name="user_type" />

          <fieldset>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" placeholder="john" name="first_name" id="first_name2" required/>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" placeholder="duglas" name="last_name" id="last_name2" required/>
            </div>

            <input type="button" name="next" class="next action-button" value="Next" id="name-next2">

            <hr>

            <p class="already">Already have an account? <a href="{{route('frontend.auth.login')}}">Please sign in here</a></p>

          </fieldset>
          

          <fieldset>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="john@example.com" id="email2" required/>
              <p class="email-check2 mt-2 d-none" style="font-size: 15px; color:red">Email already exists</p>
            </div>

            <div class="form-group">
              <label>Contact number</label>
              <input name="contact_number" type="text" class="form-control" placeholder="94-712975938" id="number2" required/>
              <p class="phone-check2 mt-2 d-none" style="font-size: 15px; color:red">Phone number already exists</p>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous">
            <input type="button" name="next" class="next action-button" value="Next" id="contact-next2">

          </fieldset>
          

          <fieldset>

            <p class="text-info strong-info" style="font-size: 14px;">Please use strong password</p>
          
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" data-strength2 class="form-control" placeholder="●●●●●●●" required id="pass2"/>
            </div>
            <div class="form-group">
              <label>Re-Enter Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●" required id="re-pass2"/>
            </div>

            <div class="feedback2">
                                
            </div>

            <input type="button" name="previous" class="previous action-button" value="Previous">
            <input type="button" name="next" class="next action-button" value="Next" id="pass-next2">

          </fieldset>


          <fieldset>

            <div class="form-group">
              <label>Company name</label>
              <input name="company_name" type="text" class="form-control" placeholder="ABC Company" required id="company-name2"/>
            </div>

            <div class="form-group">
              <label>Location</label>
              <select class="form-select" aria-label="Default select example" name="location" required id="location2">
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
            <input type="button" name="next" class="next action-button" value="Next" id="company-next2">

          </fieldset>
          

         
         <fieldset>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkme2" required/>
                <label class="form-check-label" for="exampleCheck1" style="padding-top: 5px;">By signing up you are agree with our <a href="">Terms and conditions.</a>
                </label>
              </div>

              <div class="text-center mt-4 mb-3">
                  <div class="g-recaptcha" data-callback="checked2" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
              </div>

              <input type="button" name="previous" class="previous action-button mr-3" value="Previous">
              <button class="btn btn-primary ml-3 signup-btn" type="submit" id="submit_btn2" disabled>Sign Up</button>
         </fieldset>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- <script>
        var checker1 = document.getElementById("checkme1");
        var checker2 = document.getElementById("checkme2");
        var btn_submit1 = document.getElementById("btn_submit1");
        var btn_submit2 = document.getElementById("btn_submit2");
        // when unchecked or checked, run the function
        checker1.onchange = function () {
            if (this.checked) {
                btn_submit1.disabled = false;
            } else {
                btn_submit1.disabled = true;
            }
        };
        checker2.onchange = function () {
            if (this.checked) {
                btn_submit2.disabled = false;
            } else {
                btn_submit2.disabled = true;
            }
        };
    </script> -->



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

        $('#email1').keyup(function() {
            validate($(this), patterns[$(this).attr('name')]);
        });

        $('#number1').keyup(function() {
            validate($(this), patterns[$(this).attr('name')]);
        });



        $("#looking-next1").click(function(){

            if($('#looking1').val() != '') {
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

                $('#looking1').css('border', '1px solid red');
            } 
        });



        $("#name-next1").click(function(){

            if($('#first_name1').val() != '' && $('#last_name1').val() != '') {
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

                if($('#first_name1').val() != '') {
                    $('#last_name1').css('border', '1px solid red');
                    $('#first_name1').css('border', '0.1px solid #9f9f9f');
                }

                else if($('#last_name1').val() != '') {
                    $('#first_name1').css('border', '1px solid red');
                    $('#last_name1').css('border', '0.1px solid #9f9f9f');
                }
                
                else {
                    $('#first_name1').css('border', '1px solid red');
                    $('#last_name1').css('border', '1px solid red');
                }
            } 
        });



        $("#contact-next1").click(function(){
            

            if($('#email1').hasClass('valid') && $('#number1').hasClass('valid')) {

                var form1 = new FormData();
                form1.append("email", $('#email1').val());

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
                form2.append("contact_number", $('#number1').val());

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

                            current_fs = $('#contact-next1').parent();
                            next_fs = $('#contact-next1').parent().next();

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
                                    $('.phone-check1').removeClass('d-none');
                                    $('.email-check1').addClass('d-none');
                                }

                                else if(response2 == 'new_phone') {
                                    $('.email-check1').removeClass('d-none');
                                    $('.phone-check1').addClass('d-none');
                                }
                                
                                else {
                                    $('.phone-check1').removeClass('d-none');
                                    $('.email-check1').removeClass('d-none');
                                }
                            
                        }

                    });  
                });

            }
            
            else {

                if($('#email1').hasClass('valid')) {
                    $('#number1').css('border', '1px solid red');
                    $('#email1').css('border', '0.1px solid #9f9f9f');
                }

                else if($('#number1').hasClass('valid')) {
                    $('#email1').css('border', '1px solid red');
                    $('#number1').css('border', '0.1px solid #9f9f9f');
                }
                
                else {
                    $('#email1').css('border', '1px solid red');
                    $('#number1').css('border', '1px solid red');
                }
            } 
        });



        $("#pass-next1").click(function(){

            if($('#pass1').val() != '' && $('#re-pass1').val() != '' && strength == 5) {
                if($('#pass1').val() == $('#re-pass1').val()) {

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

                    $('.feedback1').html(template);
                }
                
            } else {

                if(strength != 5) {
                    $('.strong-info').addClass('warning');
                }

                if($('#pass1').val() != '') {
                    $('#re-pass1').css('border', '1px solid red');
                    $('#pass1').css('border', '0.1px solid #9f9f9f');
                }

                if($('#re-pass1').val() != '') {
                    $('#pass1').css('border', '1px solid red');
                    $('#re-pass1').css('border', '0.1px solid #9f9f9f');
                }

            
                if($('#pass1').val() == '' && $('#re-pass1').val() == '') {
                    $('#pass1').css('border', '1px solid red');
                    $('#re-pass1').css('border', '1px solid red');
                }
            } 
        });



        $("#company-next1").click(function(){

            if($('#company-name1').val() != '' && $('#location1').val() != '') {
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

                if($('#company-name1').val() != '') {
                    $('#location1').css('border', '1px solid red');
                    $('#company-name1').css('border', '0.1px solid #9f9f9f');
                }

                else if($('#location1').val() != '') {
                    $('#company-name1').css('border', '1px solid red');
                    $('#location1').css('border', '0.1px solid #9f9f9f');
                }
                
                else {
                    $('#company-name1').css('border', '1px solid red');
                    $('#location1').css('border', '1px solid red');
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
                    $("#password-strength1 span").css({
                        "width": "20%",
                        "background": "#de1616"
                    });

                    $("#password-strength2 span").css({
                        "width": "20%",
                        "background": "#de1616"
                    });
                    break;

                    case 2:
                    $("#password-strength1 span").css({
                        "width": "40%",
                        "background": "#de1616"
                    });

                    $("#password-strength2 span").css({
                        "width": "40%",
                        "background": "#de1616"
                    });
                    break;

                    case 3:
                    $("#password-strength1 span").css({
                        "width": "60%",
                        "background": "#de1616"
                    });

                    $("#password-strength2 span").css({
                        "width": "60%",
                        "background": "#de1616"
                    });
                    break;

                    case 4:
                    $("#password-strength1 span").css({
                        "width": "80%",
                        "background": "#FFA200"
                    });

                    $("#password-strength2 span").css({
                        "width": "80%",
                        "background": "#FFA200"
                    });
                    break;

                    case 5:
                    $("#password-strength1 span").css({
                        "width": "100%",
                        "background": "#06bf06"
                    });

                    $("#password-strength2 span").css({
                        "width": "100%",
                        "background": "#06bf06"
                    });
                    break;

                    default:
                    $("#password-strength1 span").css({
                        "width": "0",
                        "background": "#de1616"
                    });

                    $("#password-strength2 span").css({
                        "width": "0",
                        "background": "#de1616"
                    });
                }
            }

                $("[data-strength1]").after("<div id=\"password-strength1\" class=\"strength\"><span></span></div>")

                $("[data-strength1]").focus(function() {
                    $("#password-strength1").css({
                        "height": "7px"
                    });
                })
            
                .blur(function() {
                    $("#password-strength1").css({
                        "height": "0px"
                    });
                });

                $("[data-strength1]").keyup(function() {
                    strength = 0;
                    var password = $(this).val();
                    passwordCheck(password);
                });

        });

    function checked1() {
        $('#submit_btn1').removeAttr('disabled');
    };

    </script>

<script>

function validate(field, regex) {
            if(regex.test(field.val())) {
                field.css('border', '1px solid green');
                field.addClass('valid');

            } else {
                field.css('border', '1px solid red');
                field.removeClass('valid');

            }
        }

$('#email2').keyup(function() {
    validate($(this), patterns[$(this).attr('name')]);
});

$('#number2').keyup(function() {
    validate($(this), patterns[$(this).attr('name')]);
});



$("#name-next2").click(function(){

    if($('#first_name2').val() != '' && $('#last_name2').val() != '') {
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

        if($('#first_name2').val() != '') {
            $('#last_name2').css('border', '1px solid red');
            $('#first_name2').css('border', '0.1px solid #9f9f9f');
        }

        else if($('#last_name2').val() != '') {
            $('#first_name2').css('border', '1px solid red');
            $('#last_name2').css('border', '0.1px solid #9f9f9f');
        }
        
        else {
            $('#first_name2').css('border', '1px solid red');
            $('#last_name2').css('border', '1px solid red');
        }
    } 
});



$("#contact-next2").click(function(){
    

    if($('#email2').hasClass('valid') && $('#number2').hasClass('valid')) {

        var form3 = new FormData();
        form3.append("email", $('#email2').val());

        var settings3 = {
        "url": "{{url('/')}}/api/check_email",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form3
        };



        var form4 = new FormData();
        form4.append("contact_number", $('#number2').val());

        var settings4 = {
        "url": "{{url('/')}}/api/check_phone_no",
        "method": "POST",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form4
        };


        $.ajax(settings3).done(function (response1) {

            $.ajax(settings4).done(function (response2) {

                if(response1 == 'new_email' && response2 == 'new_phone') {
                    current_fs = $('#contact-next2').parent();
                    next_fs = $('#contact-next2').parent().next();

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
                            $('.phone-check2').removeClass('d-none');
                            $('.email-check2').addClass('d-none');
                        }

                        else if(response2 == 'new_phone') {
                            $('.email-check2').removeClass('d-none');
                            $('.phone-check2').addClass('d-none');
                        }
                        
                        else {
                            $('.phone-check2').removeClass('d-none');
                            $('.email-check2').removeClass('d-none');
                        }
                    
                }

            });  
        });

    }
    
    else {

        if($('#email2').hasClass('valid')) {
            $('#number2').css('border', '1px solid red');
            $('#email2').css('border', '0.1px solid #9f9f9f');
        }

        else if($('#number2').hasClass('valid')) {
            $('#email2').css('border', '1px solid red');
            $('#number2').css('border', '0.1px solid #9f9f9f');
        }
        
        else {
            $('#email2').css('border', '1px solid red');
            $('#number2').css('border', '1px solid red');
        }
    } 
});



$("#pass-next2").click(function(){

    if($('#pass2').val() != '' && $('#re-pass2').val() != '' && strength == 5) {
        if($('#pass2').val() == $('#re-pass2').val()) {

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
            let template = `<p style="color:red; font-size: 25px;">Passwords does not match</p>`;

            $('.feedback2').html(template);
        }
        
    } else {

        if(strength != 5) {
            $('.strong-info').addClass('warning');
        }

        if($('#pass2').val() != '') {
            $('#re-pass2').css('border', '1px solid red');
            $('#pass2').css('border', '0.1px solid #9f9f9f');
        }

        if($('#re-pass2').val() != '') {
            $('#pass2').css('border', '1px solid red');
            $('#re-pass2').css('border', '0.1px solid #9f9f9f');
        }

    
        if($('#pass2').val() == '' && $('#re-pass2').val() == '') {
            $('#pass2').css('border', '1px solid red');
            $('#re-pass2').css('border', '1px solid red');
        }
    } 
});



$("#company-next2").click(function(){

    if($('#company-name2').val() != '' && $('#location2').val() != '') {
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

        if($('#company-name2').val() != '') {
            $('#location2').css('border', '1px solid red');
            $('#company-name2').css('border', '0.1px solid #9f9f9f');
        }

        else if($('#location2').val() != '') {
            $('#company-name2').css('border', '1px solid red');
            $('#location2').css('border', '0.1px solid #9f9f9f');
        }
        
        else {
            $('#company-name2').css('border', '1px solid red');
            $('#location2').css('border', '1px solid red');
        }
    } 
});



$(".previous2").click(function(){

    
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
        $("#password-strength1 span").css({
            "width": "20%",
            "background": "#de1616"
        });

        $("#password-strength2 span").css({
            "width": "20%",
            "background": "#de1616"
        });
        break;

        case 2:
        $("#password-strength1 span").css({
            "width": "40%",
            "background": "#de1616"
        });

        $("#password-strength2 span").css({
            "width": "40%",
            "background": "#de1616"
        });
        break;

        case 3:
        $("#password-strength1 span").css({
            "width": "60%",
            "background": "#de1616"
        });

        $("#password-strength2 span").css({
            "width": "60%",
            "background": "#de1616"
        });
        break;

        case 4:
        $("#password-strength1 span").css({
            "width": "80%",
            "background": "#FFA200"
        });

        $("#password-strength2 span").css({
            "width": "80%",
            "background": "#FFA200"
        });
        break;

        case 5:
        $("#password-strength1 span").css({
            "width": "100%",
            "background": "#06bf06"
        });

        $("#password-strength2 span").css({
            "width": "100%",
            "background": "#06bf06"
        });
        break;

        default:
        $("#password-strength1 span").css({
            "width": "0",
            "background": "#de1616"
        });

        $("#password-strength2 span").css({
            "width": "0",
            "background": "#de1616"
        });
    }
}

    $("[data-strength2]").after("<div id=\"password-strength2\" class=\"strength\"><span></span></div>")

    $("[data-strength2]").focus(function() {
        $("#password-strength2").css({
            "height": "7px"
        });
    })

    .blur(function() {
        $("#password-strength2").css({
            "height": "0px"
        });
    });

    $("[data-strength2]").keyup(function() {
        strength = 0;
        var password = $(this).val();
        passwordCheck(password);
    });

});

    function checked2() {
        $('#submit_btn2').removeAttr('disabled');
    };

</script>


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


@endpush