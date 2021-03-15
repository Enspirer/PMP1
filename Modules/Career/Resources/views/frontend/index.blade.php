@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="expert-section">
        <div class="expert-image">
            <img
                src="{{url('theme_light/assets/brooke-cagle-g1Kr4Ozfoac-unsplash.jpg')}}"
                style="object-position: center"
            />
            <div class="expert-gradient"></div>
            <div class="expert-text-head">
                <div class="container">
                    <div class="expert-title-small m-w-270" data-animscroll="fade-up">
                        <h3>Tallentor Carrers</h3>
                        <hr class="w-270" />
                    </div>
                    <h1>
                        Join with us and be a part of <br />
                        tallentor life
                    </h1>
                    <a href="#" class="btn-position">See open positions</a>
                </div>
            </div>
        </div>
    </section>

    <section id="life-tallentor">
        <div class="life-tallentor-gray">
            <div class="container">
                <div class="tab-center">
                    <div class="title-tab">
                        <h1>Life at Tallentor</h1>
                        <hr />
                    </div>
                </div>
                <div class="row row-life-body">
                    <div class="col-md-5">
                        <img src="{{url('theme_light/assets/Screenshot2021-03-14155828.png')}}" alt="" />
                    </div>
                    <div class="col-md-7 pl-5">
                        <p>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                            dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                            sed diam voluptua. At vero eos et accusam et justo duo dolores
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum. Stet clita kasd gubergren, no sea
                        </p>
                        <h6>Find out more from our social media platforms</h6>
                        <div class="social-btn">
                            <a href="#" class="btn-fb"
                            ><i class="fa fa-facebook-square" aria-hidden="true"></i
                                >Follow facebook/tallentor&nbsp;&nbsp;&nbsp;</a
                            >
                            <br />
                            <br /><br />
                            <a href="#" class="btn-insta"
                            ><i class="fa fa-instagram" aria-hidden="true"></i> Follow
                                instergram/tallentor</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="life-tallentor-white">
            <div class="tab-center">
                <div class="title-tab">
                    <h1>Life at Tallentor</h1>
                    <hr />
                </div>
            </div>

            <div class="container">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div
                            class="card-header"
                            data-toggle="collapse"
                            data-target="#collapseOne"
                            id="headingOne"
                        >
                            <a data-toggle="collapse" data-target="#collapseOne" href="#"
                            >Front end developer - (Remote)
                            </a>
                        </div>

                        <div
                            id="collapseOne"
                            class="collapse show"
                            aria-labelledby="headingOne"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident.
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable
                                VHS.
                                <br>
                                <a class="read-more" href="#">Read More</a>
                                <br>
                                <div class="row m-0 apply-now-button-row">
                                    <a class="apply-now-button" href="#">Apply Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="card">
                        <div
                            class="card-header"
                            id="headingTwo"
                            data-toggle="collapse"
                            data-target="#collapseTwo"
                        >
                            <a data-toggle="collapse" data-target="#collapseTwo" href="#"
                            >Front end developer - (Remote)
                            </a>
                        </div>
                        <div
                            id="collapseTwo"
                            class="collapse"
                            aria-labelledby="headingTwo"
                            data-parent="#accordionExample"
                        >
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident.
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable
                                VHS.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush
