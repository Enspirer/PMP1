<section class="acadamy-mob" data-animscroll="fade-up">
      <div class="dark-layer-mob-tender"></div>
      <div class="title-group">
        <h4>Tallentor academy</h4>
        <hr />
        <p>
            Ready-made software update for you
        </p>
      </div>
    </section>

    <section class="acadamy-body-mob mt-4">
        <div class="swiper-container swiper-container-acadamy-mob" style="max-width: 100%; overflow-x: hidden;">
            <div class="swiper-wrapper">
              <div class="swiper-slide">     
                <div class="card-acadamy">
                  <h3>Web Development</h3>
                  <div class="label-acadamy">
                    <p>Fundamental</p>
                  </div>
                  <div class="acadamy-details row">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>6 months</p>
                  </div>
                  <div class="acadamy-details row">
                    <div class="col-2 col">
                      <i
                        class="fa fa-check"
                        style="float: right"
                        aria-hidden="true"
                      ></i>
                    </div>
                    <div class="col-9">
                      <p style="margin-left: -20px">
                        Project Based Learning with industrial Training
                      </p>
                    </div>
                  </div>
                  <div class="color-card yellow-bg"></div>
                </div>
              </div>

              <div class="swiper-slide">     
                <div class="card-acadamy">
                  <h3>Web Development</h3>
                  <div class="label-acadamy">
                    <p>Fundamental</p>
                  </div>
                  <div class="acadamy-details row">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>6 months</p>
                  </div>
                  <div class="acadamy-details row">
                    <div class="col-2 col">
                      <i
                        class="fa fa-check"
                        style="float: right"
                        aria-hidden="true"
                      ></i>
                    </div>
                    <div class="col-9">
                      <p style="margin-left: -20px">
                        Project Based Learning with industrial Training
                      </p>
                    </div>
                  </div>
                  <div class="color-card yellow-bg"></div>
                </div>
              </div>

              <div class="swiper-slide">     
                <div class="card-acadamy">
                  <h3>Web Development</h3>
                  <div class="label-acadamy">
                    <p>Fundamental</p>
                  </div>
                  <div class="acadamy-details row">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>6 months</p>
                  </div>
                  <div class="acadamy-details row">
                    <div class="col-2 col">
                      <i
                        class="fa fa-check"
                        style="float: right"
                        aria-hidden="true"
                      ></i>
                    </div>
                    <div class="col-9">
                      <p style="margin-left: -20px">
                        Project Based Learning with industrial Training
                      </p>
                    </div>
                  </div>
                  <div class="color-card yellow-bg"></div>
                </div>
              </div>

              <div class="swiper-slide">     
                <div class="card-acadamy">
                  <h3>Web Development</h3>
                  <div class="label-acadamy">
                    <p>Fundamental</p>
                  </div>
                  <div class="acadamy-details row">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>6 months</p>
                  </div>
                  <div class="acadamy-details row">
                    <div class="col-2 col">
                      <i
                        class="fa fa-check"
                        style="float: right"
                        aria-hidden="true"
                      ></i>
                    </div>
                    <div class="col-9">
                      <p style="margin-left: -20px">
                        Project Based Learning with industrial Training
                      </p>
                    </div>
                  </div>
                  <div class="color-card yellow-bg"></div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination text-center"></div>
        </div>
    </section>



    <div class="mt-3 mb-5 text-center">
        <a style="margin: auto;
            text-decoration: none;
            font: normal normal normal 18px/26px Karla;
            letter-spacing: 0px;
            color: #ffffff;
            background: #0f9d58 0% 0% no-repeat padding-box;
            border-radius: 4px;
            padding: 12px 44px;" href="{{route('frontend.contact_us')}}">Inquire Now</a>
            </div>
      



    @push('after-scripts')
    <script>
        var swiper = new Swiper('.swiper-container-acadamy-mob', {
          slidesPerView: 1,
          // spaceBetween: 20,
          centeredSlides: true,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
        });
      </script>
      @endpush