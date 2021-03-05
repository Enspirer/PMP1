
    <div class="gray-background-contact"  data-animscroll="fade-up">
        <div class="container"  data-animscroll="fade-up">
            <div class="row">
                <div class="col col-md-3">
                    <div class="content">
                        <img src="{{url('theme_light/assets/call.png')}}" alt="" />
                        <h6>Support</h6>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="content">
                        <img src="{{url('theme_light/assets/Group695.png')}}" alt="" />
                        <h6>Sales</h6>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="content">
                        <img src="{{url('theme_light/assets/credit-card.png')}}" alt="" />
                        <h6>Accounts</h6>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="content">
                        <img src="{{url('theme_light/assets/Group694.png')}}" alt="" />
                        <h6>Partner With Us</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-md-3">
                    <div class="content">
                        <p class="card-link-contact">support@tallantor.com</p>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="content">
                        <p class="card-link-contact">sales@tallantor.com</p>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="content">
                        <p class="card-link-contact">accounts@tallantor.com</p>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="content">
                        <p class="card-link-contact">partners@tallentor.com</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-section-contact">
                <div class="row">
                    <div class="left-section col-md-6">
                        <h3 data-animscroll="fade-right" >How can we help</h3>
                        <p data-animscroll="fade-right">
                            For any enquiries, please submit your details.  A member of Tallentor team will get back to you shortly.
                        </p>
                        <img src="{{url('theme_light/assets/MaskGroup16.png')}}" style="width: 100%" alt="" data-animscroll="fade-up">
                    </div>
                    <div class="right-section col-md-6" data-animscroll="fade-left">
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

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



