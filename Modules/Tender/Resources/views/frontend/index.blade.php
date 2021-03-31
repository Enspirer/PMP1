@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<section class="expert-section">
    <div class="expert-image">
        <img src="{{url('theme_light/assets/inner/jonathan-riley-VW8MUbHyxCU-unsplash.jpg')}}"
          style=" object-position: top; object-fit: cover" />
        <div class="expert-fill"></div>
        <div class="banner-black">
            <div class="row">
                <div class="col-md-8">
                    <h1>Today's</h1>
                    <h5>&nbsp;Tenders</h5>
                </div>
                <div class="col-md-4">
                    <h3>12</h3>
                </div>
            </div>
            <br>
            <hr />
            <br>
            <div class="row">
                <div class="col-md-8">
                    <h5>Live</h5>
                    <h1>Tenders</h1>

                </div>
                <div class="col-md-4">
                    <h3>123</h3>
                </div>
            </div>
        </div>
        <div class="expert-text-head">
            <div class="container">
                <div class="expert-title-small m-w-270" data-animscroll="fade-up">
                    <h3>Tallentor Tenders</h3>
                    <hr class="w-270" />
                </div>
                <h1 style="padding-bottom: 10px">Global Tender Marketplace</h1>
                <a href="#" data-toggle="modal" data-target="#exampleModalLong" class="btn-position">View All Tenders</a>
            </div>
        </div>
    </div>
</section>

<section id="section-tenders">
    <div class="container">
        <div class="row">
            <div class="left-cols col-md-3">
                <div class="card-tender-cols">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" id="headingOne">
                                <a data-toggle="collapse" data-target="#collapseOne" href="#">
                                    <div class="row">
                                        <p style="margin: 0">Tenders By Sectors</p>
                                        <div class="icon-left ml-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <i class="fa fa-minus d-none" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="row">
                                            <p>Government Tenders</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="row">
                                            <p>Government Tenders</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-tender-cols">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" data-target="#collapseTwo" id="headingOne">
                                <a data-toggle="collapse" data-target="#collapseTwo" href="#">
                                    <div class="row">
                                        <p style="margin: 0">Tenders By Category</p>
                                        <div class="icon-left ml-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <i class="fa fa-minus d-none" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="row">
                                            <p>IT and Software</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="row">
                                            <p>Architecture</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="row">
                                            <p>Construction</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="row">
                                            <p>Lorem ipsum</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="row">
                                            <p>Lorem ipsum</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="row">
                                            <p>Lorem ipsum</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="row">
                                            <p>Lorem ipsum</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="row">
                                            <p>Lorem ipsum</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="row">
                                            <p>Lorem ipsum</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-tender-cols">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" data-toggle="collapse" data-target="#collapseThree" id="headingOne">
                                <a data-toggle="collapse" data-target="#collapseThree" href="#">
                                    <div class="row">
                                        <p style="margin: 0">Tenders By Country</p>
                                        <div class="icon-left ml-auto">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            <i class="fa fa-minus d-none" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <a href="#">
                                        <div class="row">
                                            <p>Sri Lanka</p>
                                            <p class="ml-auto">600</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-cols col-md-9">
                <div class="right-body">
                    <div class="row">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item col-md-3">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All Tenders (1125)</a>
                            </li>

                            <li class="nav-item col-md-3">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Today's Tenders (1125)</a>
                            </li>
                            <li class="nav-item col-md-3">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Live Tenders (123)</a>
                            </li>
                            <li class="nav-item col-md-3">
                                <a class="nav-link" id="pills-closed-tab" data-toggle="pill" href="#pills-closed" role="tab" aria-controls="pills-closed" aria-selected="false">Closed Tenders (1102)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row row-selector">
                        <div class="selector">
                            <div class="row m-0">
                                <p>Sort by :</p>
                                <select>
                                    <option selected>Latest</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="selector">
                            <div class="row m-0">
                                <p>Country :</p>
                                <select>
                                    <option selected>Sri Lanka</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="selector">
                            <div class="row m-0">
                                <p>Sector :</p>
                                <select>
                                    <option selected>All Sectors</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="ml-10">Showing 1 - 10 of 1125 tenders</p>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn red" href="#">Live Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn red" href="#">Live Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-closed" role="tabpanel" aria-labelledby="pills-closed-tab">
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-left-tender">
                                <h1>
                                    Developing and maintenance of a software programme for
                                    private insurance company
                                </h1>
                                <hr />
                                <div class="row row-detail m-0">
                                    <p>Posted 38 mins ago</p>
                                    <p>Tender Id: mktplz10001</p>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-md-8 card-detail-list">
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">Company :</div>
                                            <div class="col-md-7 card-detail-item">
                                                <a href="#">Log in to view company</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Category :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                IT and Software
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Location :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                Lorem ipsum, Sri lanka
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 card-detail-item">
                                                Closing Date :
                                            </div>
                                            <div class="col-md-7 card-detail-item">
                                                28 April 2021
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 card-detail-right">
                                        <h6>Tender expire in:</h6>
                                        <h5>24 Days 12 Hr</h5>
                                        <br />
                                        <div class="tender_button">
                                            <a type="button" class="outline_btn" href="#">Today's Tender</a>
                                            <br />

                                            <a type="button" class="normal_btn" href="#">View Tender</a>
                                        </div>
                                    </div>
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
        </div>
    </div>
</section>














@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush