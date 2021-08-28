
<div class="contact"  data-animscroll="fade-up">
    <div class="container"  data-animscroll="fade-up">

        <div class="title-underline" data-animscroll="fade-up">
            <h1 class="text-center">We are here to help</h1>
            <hr>
        </div>

        <div class="row" style="margin-top: 5rem;">

            <div class="col-7 gray-background-contact box">
                <div class="row position-relative" style="top:-2rem; left: 2rem">
                    <div class="col-8 border p-4 shadow" style="background-color: white">
                        <h4 class="mb-3" style="font-weight: 800">Contact Us</h4>

                        <h5 style="font-weight: 500">Call / WhatsApp: +94 778669990</h5>

                        <h5 style="font-weight: 500">Email: hello@tallentor.com</h5>
                    </div>
                </div>

                <div class="row align-items-center mb-4 justify-content-center">
                    <div class="col-3 text-center">
                        <img src="{{url('theme_light/assets/call.png')}}" alt="" style="height: 80px;"/>
                    </div>

                    <div class="col-5">
                        <h6 style="font-size:1.1rem">Support</h6>
                        <p class="card-link-contact" style="color:darkgreen">support@tallantor.com</p>
                    </div>
                </div>

                <div class="row align-items-center mb-4 justify-content-center">
                    <div class="col-3 text-center">
                        <img src="{{url('theme_light/assets/Group695.png')}}" alt="" style="height: 80px;"/>
                    </div>

                    <div class="col-5">
                        <h6 style="font-size:1.1rem">Sales</h6>
                        <p class="card-link-contact" style="color:darkgreen">sales@tallantor.com</p>
                    </div>
                </div>

                <div class="row align-items-center mb-4 justify-content-center">
                    <div class="col-3 text-center">
                        <img src="{{url('theme_light/assets/credit-card.png')}}" alt="" style="height: 80px;"/>
                    </div>

                    <div class="col-5">
                        <h6 style="font-size:1.1rem">Accounts</h6>
                        <p class="card-link-contact" style="color:darkgreen">accounts@tallantor.com</p>
                    </div>
                </div>


                <div class="row align-items-center mb-4 justify-content-center">
                    <div class="col-3 text-center">
                        <img src="{{url('theme_light/assets/Group694.png')}}" alt="" style="height: 80px;"/>
                    </div>

                    <div class="col-5">
                        <h6 style="font-size:1.1rem">Partner With Us</h6>
                        <p class="card-link-contact" style="color:darkgreen">partners@tallentor.com</p>
                    </div>
                </div>
            </div>


            <div class="col-5">
                <form action="{{route('frontend.contact_us.store')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="John" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Last Name</label>
                                <input class="form-control" name="last_name" placeholder="Macclister" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="johnmacclister94@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Tell No</label>
                            <input type="text" class="form-control" name="phone" placeholder="+94 70 123876" required>
                        </div>
                        <div class="form-group">
                            <label>Your Message</label>
                            <textarea class="form-control" name="message" rows="6" placeholder="lorem ipsum messege" required></textarea>
                        </div>

                        <div class="row align-items-center justify-content-between">
                            <div class="col-12">
                                <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                            <!-- <div class="col-6 text-right">
                                <button type="submit" class="btn btn-primary" disabled id="submit_btn">Submit</button>
                            </div> -->
                        </div>

                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary" disabled id="submit_btn">Submit</button>
                        </div>
                </form>
            </div>

        </div>
    </div>



