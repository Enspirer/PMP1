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
    <div class="container" style="padding-top: 10rem;">
        <div class="row justify-content-center mb-5">
            <div class="col-10">
                <div class="row">
                    <div class="col-md-6 text-center p-0">
                        <img src="{{url('theme_light/assets/signup.png')}}" alt="Welcome to Tallentor" class="w-100" style="height: 30rem;"/>
                        <!-- <div class="gradient-layer-dark"></div>
                        <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="100" >
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
                    

                        
                        <h1 style="font-size: 2.5rem;">Join Tallentor</h1>
                        <!-- <p class="register-paragraph">Tell us what you are looking for</p> -->
                        <div class="form-login">
                            <form action="{{route('frontend.auth.register.post')}}" method="post" id="register-form" style="margin-top: 20px;">
                                {{csrf_field()}}

                                <fieldset>

                                    <h1>Tell us what you are looking for</h1>
                                    <div class="form-group mt-3 mb-4">
                                        <label>I'm looking for</label>
                                        <select class="form-select" aria-label="Default select example" name="user_type" id="looking" value="" required>
                                            <option value="" selected disabled hidden>Select</option>
                                            <option value="1">Someone to hire</option>
                                            <option value="2">Projects</option>
                                        </select>
                                    </div>

                                    <input type="button" name="next" class="next action-button" value="Next" id="looking-next">

                                    <hr class="mb-4">

                                    <p style="font-size: 15px">Already a member? <a href="{{route('frontend.auth.login')}}" style="color: #0F9D58">Sign in</a></p>

                                </fieldset>

                                <fieldset>

                                    <h1>Tell us your name</h1>

                                        <div class="form-group mt-3">
                                            <label>First Name</label>
                                            <input type="text" name="first_name" class="form-control" placeholder="john" id="first_name" required/>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label>Last Name</label>
                                            <input type="text" name="last_name" class="form-control" placeholder="duglas" id="last_name" required/>
                                        </div>

                                        <input type="button" name="next" class="next action-button" value="Next" id="name-next">
                                        <input type="button" name="previous" class="previous action-button" value="Previous">

                                </fieldset>

                                <fieldset>

                                    <h1>Tell us your contact details</h1>

                                    <div class="form-group mt-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="john@example.com" id="email" required/>
                                        <p class="email-check mt-2 d-none" style="font-size: 15px; color:red">Email already exists</p>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label>Contact number</label>
                                        <input name="contact_number"  type="text" class="form-control"  placeholder="+01 xxx xxxxx" id="number" required/>
                                        <p class="phone-check mt-2 d-none" style="font-size: 15px; color:red">Phone number already exists</p>
                                    </div>

                                    
                                    <input type="button" name="next" class="next action-button" value="Next" id="contact-next">
                                    <input type="button" name="previous" class="previous action-button" value="Previous">

                                </fieldset>


                                <fieldset>

                                    <h1>Please enter your password</h1>

                                    <p class="text-info strong-info warning mb-2 text-left" style="font-size: 14px;">Please use strong password</p>

                                    <p class="mb-1 text-left" style="font-size: 13px;">Minimum 8 characters</p>
                                    <p class="mb-1 text-left" style="font-size: 13px;">A mixture of both uppercase and lowercase letters</p>
                                    <p class="mb-1 text-left" style="font-size: 13px;">A mixture of letters and numbers</p>
                                    <p class="mb-2 text-left" style="font-size: 13px;">Inclusion of at least one special character. e.g., ! @ # ? ]</p>
                                    <p class="text-info strong-info warning mb-2 text-left" style="font-size: 14px;">Note: do not use < or > in your password</p>
                                    

                                    <div class="form-group mt-3">
                                        <label>Password</label>
                                        <input type="password" name="password" data-strength class="form-control" placeholder="●●●●●●●" required id="pass"/>
                                    </div>

                                    <div class="form-group">
                                        <label>Re-Enter Password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●" required id="re-pass"/>
                                    </div>

                                    <div class="feedback mb-4">
                                        
                                    </div>

                                    
                                    <input type="button" name="next" class="next action-button" value="Next" id="pass-next">
                                    <input type="button" name="previous" class="previous action-button" value="Previous">

                                </fieldset>

                                <fieldset>

                                    <h1>Tell us your company details</h1>

                                    <div class="form-group mt-3">
                                        <label>Company name</label>
                                        <input name="company_name" type="text" class="form-control" placeholder="ABC Company" required id="company-name"/>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label>Location</label>
                                        <select class="form-select" aria-label="Default select example" name="location" required id="location">
                                            <option value="" selected disabled hidden>Select Country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>

                                    
                                    <input type="button" name="next" class="next action-button" value="Next" id="company-next">
                                    <input type="button" name="previous" class="previous action-button" value="Previous">

                                </fieldset>

                                <fieldset>

                                    <h1>Do you agree?</h1>

                                    <div class="form-check mb-5">

                                        <input type="checkbox" class="form-check-input" id="checkme" required/>

                                        <label class="form-check-label" for="exampleCheck1" style="padding-top: 5px">By signing up you agree with our <a href="">Terms and Conditions</a></label>

                                    </div>

                                    <div class="text-center mb-4">
                                        <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" style="display: inline-block;"></div>
                                    </div>

                                   
                                    <button type="submit" class="btn btn-primary signup-btn" disabled id="submit_btn" style="width: 100%; margin-bottom: 15px;">Sign Up</button>
                                    <input type="button" name="previous" class="previous action-button mr-3" value="Previous">

                                </fieldset> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- <script>
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


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
        $('#submit_btn').removeAttr('disabled');
    };
    </script>

@endpush
    