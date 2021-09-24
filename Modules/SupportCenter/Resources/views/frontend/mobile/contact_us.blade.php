@if(session()->get('flash_success'))
        <div class="card" style="padding: 50px 15px">
            <div class="card-body" style="text-align: center;">
                <div class="" style="background-image: url('{{url('/theme_light/assets/paper-plane.png')}}');height: 50px;background-position: center;background-size: contain;background-repeat: no-repeat;"></div>
                <br>
                <h3 style="text-align: center;">Your message has been successfully sent,<br> one of our members will get in touch with you shortly.</h3>
                <br>
                <a href="{{ route('frontend.contact_us') }}" class="btn btn-primary" style="background-color: green;color: white">Refresh</a>

            </div>
</div>

@else


<!-- <section id="mobile-contact-hero">
      <h1>Tallentor Global Network</h1>
      <hr />
      <img src="{{url('theme_light/assets/Group700.png')}}" alt="" style="width: 100%" />
    </section>

    <section id="office-ausi">
      <h1>Corporate Office Australia</h1>
      <div class="card-mob-contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20567.158160978393!2d145.24360629041402!3d-37.932466809537274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad61618014742f7%3A0x3aca3a3ee531e726!2s19%20Koombahla%20Ct%2C%20Rowville%20VIC%203178%2C%20Australia!5e0!3m2!1sen!2slk!4v1618646028865!5m2!1sen!2slk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="mob-card-details">
          <div class="row mb-3">
            <div class="col-1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="col-10">
              <p>19 Koombahla Court, Rowville, Victoria 3178, Australia</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-1">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="col-10">
              <p>+61 435 975 999</p>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-1">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <div class="col-10">
              <p>hello@tallentor.com</p>
            </div>
          </div>
        </div>
      </div>
</section> -->

<section id="we-help-mob">
    <h1>We are here to help</h1>

    <div class="row" style="padding:20px">
        <div class="col-12 border p-3 shadow" style="background-color: white">
            <h5 class="mb-3 text-center" style="font-weight: 800">Contact Us</h5>

            <div class="row align-items-center">
                <div class="col-3 text-center p-0">
                    <i class="fas fa-phone-alt mr-2" style="color: #0F9D58; font-size: 19px"></i> <i class="fab fa-whatsapp ml-2" style="color: #0F9D58; font-size: 19px"></i>
                </div>
                <div class="col-9 p-0">
                    <h5 class="mb-0" style="font-weight: 500; font-size: 18px;"> : &nbsp;&nbsp;+94 778669990</h5>
                </div>
            </div>

            <!-- <h5 style="font-weight: 500"><i class="fas fa-phone-alt" style="color: #0F9D58; font-weight: 600"></i>&nbsp;&nbsp;&nbsp;<i class="fab fa-whatsapp" style="color: #0F9D58; font-weight: 600"></i> : +94 778669990</h5> -->

            <div class="row mt-2 align-items-center justify-content-between">
                <div class="col-2">
                    <!-- <img src="{{ url('theme_light/assets/contact/mail.png') }}" alt="" style="height: 22px"> -->
                    <i class="fas fa-envelope" style="color: #0F9D58; font-size: 23px"></i>
                </div>

                <div class="col-9 p-0">
                    <h5 class="mb-1" style="font-weight: 500; font-size: 18px;"> : &nbsp;&nbsp;hello@tallentor.com</h5>
                </div>
            </div>
        </div>
    </div>
    

    <div class="row mt-3" style="padding:20px">
        <div class="col-12">
            <div class="row align-items-center mb-3">
                <div class="col-5 text-center">
                  <img src="{{url('theme_light/assets/call.png')}}" alt="Support" style="height: 60px;"/>
                </div>

                <div class="col-7">
                  <h6 style="font-size:1rem">Support</h6>
                  <p class="card-link-contact" style="color:darkgreen">support@tallantor.com</p>
                </div>
            </div>

            <div class="row align-items-center mb-3">
                <div class="col-5 text-center">
                  <img src="{{url('theme_light/assets/Group695.png')}}" alt="Sales" style="height: 60px;"/>
                </div>

                <div class="col-7">
                  <h6 style="font-size:1rem">Sales</h6>
                  <p class="card-link-contact" style="color:darkgreen">sales@tallantor.com</p>
                </div>
            </div>

            <div class="row align-items-center mb-3">
                <div class="col-5 text-center">
                  <img src="{{url('theme_light/assets/credit-card.png')}}" alt="Accounts" style="height: 60px;"/>
                </div>

                <div class="col-7">
                  <h6 style="font-size:1rem">Accounts</h6>
                  <p class="card-link-contact" style="color:darkgreen">accounts@tallantor.com</p>
                </div>
            </div>

            <div class="row align-items-center mb-3">
                <div class="col-5 text-center">
                  <img src="{{url('theme_light/assets/Group694.png')}}" alt="Partners" style="height: 60px;"/>
                </div>

                <div class="col-7">
                  <h6 style="font-size:1rem">Partner with us</h6>
                  <p class="card-link-contact" style="color:darkgreen">partners@tallentor.com</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="how-we-help-mob">
    <h1>How can we help</h1>
    <p>For any enquiries, please submit your details. A member of Tallentor team will get back to you shortly.</p>


        <form class="mt-4" action="{{route('frontend.contact_us.store')}}" method="post">
          {{csrf_field()}}
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" name="first_name" placeholder="John" required>
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Macclister" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="johnmacclister94@gmail.com" required>
              </div>

              <div class="form-group">
                <label>Tel No</label>
                <input type="text" class="form-control" name="phone" placeholder="+94 11x xxxxxx" required>
              </div>

              <div class="form-group">
                <label>Your Message</label>
                <textarea rows="6" type="text" class="form-control" name="message" placeholder="Hello there..." required></textarea>

              </div>
  
            <div class="row align-items-center mb-3">
                <div class="col-12">
                    <div class="g-recaptcha w-100" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" disabled id="submit_btn">Submit</button>
          </form>

</section>


<section id="customer-centre" class="mt-4">
    <h1>Customer Centre 24/7</h1>

    <div class="row justify-content-center text-center" style="margin-top: 2rem;">
      <div class="col-12 p-0 mb-2">
        <a href="javascript:void(Tawk_API.toggle())"><img src="{{ url('theme_light/assets/contact/mcc_1.png') }}" alt="Live Support" class="img-fluid"></a>
      </div>

      <div class="col-12 p-0 mb-2">
        <a href="https://api.whatsapp.com/send/?phone=94777009990&text="><img src="{{ url('theme_light/assets/contact/mcc_2.png') }}" alt="Whatsapp" class="img-fluid"></a>
      </div>

      <div class="col-12 p-0 mb-2">
        <a href="https://m.me/tallentor"><img src="{{ url('theme_light/assets/contact/mcc_3.png') }}" alt="Messenger" class="img-fluid"></a>
      </div>
    </div>

</section>

<section id="partner-office-mob">


    <h1 class="mb-4">Partner Offices</h1>

    <div class="card-contact mb-5">
        <div class="map-part-top">
            <img class="map" src="{{url('theme_light/assets/contact/sri_lanka.png')}}" alt="">
            <img class="flag" src="https://www.countryflags.io/lk/flat/64.png">
        </div>
                
        <div class="content-part">
            <h3>Sri Lanka</h3>
            
            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">558/ 3B Pitipana Town, Homagama, 10206 Sri lanka</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">+94 0778669990</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">hello@tallentor.com</div>
            </div>
        </div>
    </div>

    <div class="card-contact mb-5">
        <div class="map-part-top">
            <img class="map" src="{{url('theme_light/assets/contact/australia.png')}}" alt="">
            <img class="flag" src="https://www.countryflags.io/au/flat/64.png">
        </div>
                
        <div class="content-part">
            <h3>Australia</h3>
            
            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">19 Koombahla Court, Rowville, Victoria 3178, Australia</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">+61 435 975 999</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">info@tallentor.com</div>
            </div>
        </div>
    </div>

    <div class="card-contact mb-5">
        <div class="map-part-top">
            <img class="map" src="{{url('theme_light/assets/contact/uae.png')}}" alt="">
            <img class="flag" src="https://www.countryflags.io/ae/flat/64.png">
        </div>

        <div class="content-part">
            <h3>United Arab Emirates</h3>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">No - 512 Al Zahra Building Al Nabaa Sharjah AE </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">+971 568694803</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">uae@tallentor.com</div>
            </div>
        </div>
    </div>

    <div class="card-contact mb-5">
        <div class="map-part-top">
            <img class="map" src="{{url('theme_light/assets/contact/uk.png')}}" alt="">
            <img class="flag" src="https://www.countryflags.io/gb/flat/64.png">
        </div>

        <div class="content-part">
            <h3>United Kingdom</h3>
            
            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="col-md-10 col-10">Unit 134 Lomeshaye Business Village, Turner road, Nelson, Lancashire, BB9 7DR United Kingdom
                    </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">+44 7908 337092</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">uk@tallentor.com</div>
            </div>
        </div>
    </div>

    <div class="card-contact">
        <div class="map-part-top">
            <img class="map" src="{{url('theme_light/assets/contact/malaysia.png')}}" alt="">
            <img class="flag" src="https://www.countryflags.io/my/flat/64.png">
        </div>

        <div class="content-part">
            <h3>Malaysia</h3>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">A 15-03 Tropicana Avenue, NO.12 Persiaran Tropicana, Tropicana Golf & Country resort, PJU3 Petaling Jaya 47410, Selangor, Malaysia.</div>
            </div>
            <div class="row">

            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">malaysia@tallentor.com</div>
            </div>
        </div>
    </div>

    <div class="card-contact">
        <div class="map-part-top">
            <img class="map" src="{{url('theme_light/assets/contact/france.png')}}" alt="">
            <img class="flag" src="https://www.countryflags.io/fr/flat/64.png">
        </div>

        <div class="content-part">
            <h3>France</h3>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">61 Rue Saint Blaise 75020 Paris</div>
            </div>
            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">+33 6 52 30 02 55</div>
            </div>

            <div class="row">
                <div class="col-md-2 col-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="col-md-10 col-10">france@tallentor.com</div>
            </div>
        </div>
    </div>


</section>

@endif


@push('after-scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    function checked() {
    $('#submit_btn').removeAttr('disabled');
};
</script>
@endpush