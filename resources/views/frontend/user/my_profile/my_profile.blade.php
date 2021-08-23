@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/my_profile.css') }}">
@endpush

@section('content')

<section class="dashboard-body">
        <div class="page-wrapper chiller-theme toggled">
            <main class="page-content">
                <div class="dashboard-nav container-fluid" style="top: 65px;!important;">

                <div class="row">
                    <div class="col-6">
                        <ul class="nav nav-pill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">About</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Portfolio</a>
                            </li>
                        </ul>
                    </div>
                </div>
                    
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="container">
                            <div class="row border rounded border-danger py-5 align-items-center card-db">
                                <div class="col-3 text-center">
                                    <img src="{{ url('img/user-image.jpg') }}" alt="" class="img-fluid" style="height: 130px">
                                </div>
                                <div class="col-5">
                                    <h4>Enspirer (pvt) Ltd</h4>
                                    <p><i class="fas fa-map-marker-alt"></i> Nugegoda, Sri Lanka</p>
                                </div>

                                <div class="col-4 text-right">
                                    <button class="btn text-light" style="background-color: #FF6347">VIEW AS PUBLIC</button>
                                </div>
                            </div>


                            <div class="row border rounded border-danger py-5 align-items-center card-db">
                                <div class="col">

                                </div>

                                <div class="col">
                                    <div class="progress-bar-tal col-md-1">
                                        <div class="progress-style" id="progress2"></div>
                                        <p class="persantage-status">64%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>


                    


                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-5">
                                    <h4 class="d-inline-block mr-3">Digital Marketing Agency</h4> <i class="fas fa-pen rounded-pill text-muted ml-3" style="background-color:#e3dfde; padding:13px;"></i>
                                </div>

                                <div class="col-1">
                                    <i class="fas fa-share-alt rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:15px;"></i>
                                </div>
                            </div>


                            <div class="row border rounded py-4 card-db mt-4">
                                <div class="col-11">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt laudantium velit non accusamus dolor! Quia eos veritatis beatae delectus, ratione expedita deserunt aspernatur voluptas necessitatibus corrupti? At ex iure beatae cum facere, hic nulla magni atque amet non dicta mollitia ipsam eveniet laboriosam suscipit et. Harum minus qui dolores quidem molestias voluptas a delectus est vel, repellat inventore deleniti optio? Libero ipsam dolor esse id vel sapiente repellat quae minima veritatis sunt labore dolores, at animi quidem debitis officia, recusandae minus ut voluptatem tempora dignissimos. Officia omnis fugit maxime, blanditiis, veniam, doloremque modi illum neque officiis soluta illo quam facilis!</p>

                                    <a href="#">Read more...</a>
                                </div>
                                <div class="col-1">
                                    <i class="fas fa-pen rounded-pill text-muted ml-3" style="background-color:#e3dfde; padding:13px;"></i>
                                </div>
                            </div>



                            <div class="row justify-content-between mt-5">
                                <div class="col-5">
                                    <h4 class="d-inline-block mr-3">Specialized on</h4> <i class="fas fa-plus rounded-pill text-muted ml-3" style="background-color:#e3dfde; padding:13px;"></i>
                                </div>
                            </div>


                            <div class="row border rounded py-3 card-db mt-4 mb-3">
                                <div class="col-12">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <div class="row align-items-center">
                                                    <div class="col-11 p-0">
                                                        <h6 class="mb-0">Mobile app development / IOS</h6>
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="fas fa-plus rounded-pill text-muted ml-3" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </h6>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row border rounded py-3 card-db mb-3">
                                <div class="col-12">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingTwo">

                                            <div class="row align-items-center">
                                                <div class="col-11 p-0">
                                                    <h6 class="mb-0">Mobile app development / IOS</h6>
                                                </div>
                                                <div class="col-1">
                                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    <i class="fas fa-plus rounded-pill text-muted ml-3" style="background-color:#e3dfde; padding:13px;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                                
                                            </h6>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row border rounded py-3 card-db">
                                <div class="col-12">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="headingThree">
                                                <div class="row align-items-center">
                                                    <div class="col-11 p-0">
                                                        <h6 class="mb-0">ERP system design</h6>
                                                    </div>
                                                    <div class="col-1">
                                                        <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                        <i class="fas fa-plus rounded-pill text-muted ml-3" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </h6>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>


                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="aaa">Portfolio - 8</h4>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn text-light" style="background-color: #FF6347">VIEW AS PUBLIC</button>
                                </div>
                            </div>

                            <div class="row mt-4 text-center">
                                <div class="col-3 position-relative img-fluid image" style="background-image: url('img/1.jpg'); background-size: 100% 100%;background-repeat: no-repeat;">
                                    
                                    <!-- <img src="{{ url('img/1.jpg') }}" alt="" class="img-fluid w-100" style="object-fit:cover;"> -->

                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site</p>
                                </div>

                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/2.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>

                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/3.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>

                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/4.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/1.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>

                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/2.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>

                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/3.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>

                                <div class="col-3 position-relative">
                                    <img src="{{ url('img/4.jpg') }}" alt="" class="img-fluid w-100">
                                    <div class="carousel-caption d-none">
                                        <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
                                    </div>
                                    <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
                                </div>

                            </div>
                        </div>
                        </div>
                    </div>


                </div>


            </main>
            <!-- page-content" -->
        </div>
        <!-- page-wrapper -->
    </section>

@endsection

@push('after-scripts')

<script>
    $('#contact .image').hover(function() {
        $(this).addClass('hover');
        // $(this).siblings('div').removeClass('d-none');
    }, function() {
        $(this).removeClass('hover');
        // $(this).siblings('div').addClass('d-none');
    });
</script>

@endpush
