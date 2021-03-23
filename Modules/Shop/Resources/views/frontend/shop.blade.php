@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <section class="expert-section">
        <div class="expert-image">
            <img src="{{url('theme_light/assets/cosmo-consult_crm_resco-mobile-crm_shutterstock_1030116061.jpg')}}" style="object-position: top; object-fit: cover;" alt="" />
            <div class="expert-gradient"></div>
            <div class="expert-text-head">
                <div class="container">
                    <div class="expert-title-small m-w-270" data-animscroll="fade-up">
                        <h3>Tallentor Shop</h3>
                        <hr class="w-270" />
                    </div>
                    <h1>Ready-made software needs for you</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="shop-section">
        <div class="container">
            <div class="tab-center">
                <div class="title-tab">
                    <h1>Tallantor Shop</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="card-shop">
                    <img  src="{{url('theme_light/assets/pos.jpg')}}" alt="">
                        <div class="card-shop-bottum">
                            <div class="row m-0">
                                <p><a href="#"> POS System</a></p>
                                <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                            </div>
                            <div class="row m-0 mt-1">
                                <div class="price">
                                    <h3>From $1800</h3>
                                    <h6>per month</h6>
                                </div>
                                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card-shop">
                    <img src="{{url('theme_light/assets/ecommerce.jpg')}}" alt="">
                        <div class="card-shop-bottum">
                            <div class="row m-0">
                            <p><a href="#">E-Commerce Solution</a></p>
                                <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                            </div>
                            <div class="row m-0 mt-1">
                                <div class="price">
                                <h3>From $50</h3>
                                                    <h6>per month</h6>
                                </div>
                                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card-shop">
                    <img src="{{url('theme_light/assets/payroll.jpg')}}" alt="">
                        <div class="card-shop-bottum">
                            <div class="row m-0">
                            <p><a href="#">Payroll management s..</a></p>
                                <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                            </div>
                            <div class="row m-0 mt-1">
                                <div class="price">
                                <h3>From $1500</h3>
                                                    <h6>per month</h6>
                                </div>
                                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card-shop">
                    <img src="{{url('theme_light/assets/multivendorecommerce.jpg')}}" alt="">
                        <div class="card-shop-bottum">
                            <div class="row m-0">
                            <p><a href="#">Multi vendor ecommerce..</a></p>
                                <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                            </div>
                            <div class="row m-0 mt-1">
                                <div class="price">
                                <h3>From $100</h3>
                                                    <h6>per month</h6>
                                </div>
                                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card-shop">
                    <img src="{{url('theme_light/assets/erp.jpg')}}" alt="">
                        <div class="card-shop-bottum">
                            <div class="row m-0">
                            <p><a href="#">ERP Hospital Manage..</a></p>
                                <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                            </div>
                            <div class="row m-0 mt-1">
                                <div class="price">
                                <h3>From $3000</h3>
                                                    <h6>per month</h6>
                                </div>
                                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card-shop">
                    <img src="{{url('theme_light/assets/crm.jpg')}}" alt="">
                        <div class="card-shop-bottum">
                            <div class="row m-0">
                            <p><a href="#">CRM System</a></p>
                                <div class="rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i>5.0</div>
                            </div>
                            <div class="row m-0 mt-1">
                                <div class="price">
                                <h3>From $2000</h3>
                                                    <h6>per month</h6>
                                </div>
                                <a href="#" class="ml-auto"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>

            <div class="pagination-explore">
                <div class="pagination d-flex justify-content-center flex-wrap">
                    <a href="#"><i class="fa fa-angle-left"></i></a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#" class="active">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#"><i class="fa fa-angle-right"></i></a>
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
