<div class="gray-background-contact"  data-animscroll="fade-up">
    <div class="container"  data-animscroll="fade-up">
        <div class="row">
            <div class="col col-md-3">
                <div class="content">
                    <img src="{{url('theme_light/assets/call.png')}}" alt="" />
                    <h6>Customer Support</h6>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="content">
                    <img src="{{url('theme_light/assets/Group695.png')}}" alt="" />
                    <h6>Sales Inquiries</h6>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="content">
                    <img src="{{url('theme_light/assets/credit-card.png')}}" alt="" />
                    <h6>Accounts and Finance</h6>
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
                    <p class="card-link-contact">Visit Support Centre</p>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="content">
                    <p class="card-link-contact">salesinquiries@tallantor.com</p>
                </div>
            </div>
            <div class="col col-md-3">
                <div class="content">
                    <p class="card-link-contact">accountsf@tallantor.com</p>
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
                        Have an inquiry or some feedback for us ? Fill out the form
                        below to contact our team.
                    </p>
                    <img src="{{url('theme_light/assets/MaskGroup16.png')}}" alt="" data-animscroll="fade-up">
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
