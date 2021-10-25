@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <main class="page-content" style="padding-top: 5px">
        <div class="container">
            <section class="multi_step_form">
                <form id="msform" action="{{route('frontend.user.post_project.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Project Type</li>
                        <li>About Projects</li>
                        <li>Scope & Attachments</li>
                        <li>Preferences</li>
                        <li>Pricing</li>
                        <li>Publish</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="post-project-type">
                            <h3>Please select your project type</h3>

                            <div class="project-type-card-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="left-card col-md-6">
                                            
                                            <label class="big" for="premium" style="cursor: pointer;">                                        
                                                <div class="blue-card">
                                                <input class="form-check-input" value="Premium" type="radio" name="project_type" id="premium">
                                                    
                                                    <img src="assets/Mask Group 9.png" alt="" />
                                                    <h4>Premium Project</h4>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                24/7 h Lorem ipsum dolor sit amet, consetetur
                                                                sadipscing elitr, sed diam nonumy eirmod
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                Expert project scope building Lorem ipsum
                                                                dolor sit amet, consetetur sadipscing elitr,
                                                                sed diam nonumy eirmod
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                Work and money guarantee Lorem ipsum dolor sit
                                                                amet, consetetur sadipscing elitr, sed
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                vip care Lorem ipsum dolor sit amet,
                                                                consetetur sadipscing elitr, sed diam nonumy
                                                                eirmod
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="button-section-project-type">
                                                        <button href="#">CONTINUE</button>
                                                    </div> -->
                                                </div>
                                            </label>
                                        </div>
                                        <div class="right-card col-md-6">
                                            <label class="big" for="standard" style="cursor: pointer;">                                      

                                                <div class="blue-card">
                                                <input class="form-check-input" value="Standard" type="radio" name="project_type" id="standard">

                                                    <img src="assets/Layer 2.png" alt="" />
                                                    <h4>Standard Project</h4>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                Work and money guarantee Lorem ipsum dolor sit
                                                                amet, consetetur sadipscing elitr, sed
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                vip care Lorem ipsum dolor sit amet,
                                                                consetetur sadipscing elitr, sed diam nonumy
                                                                eirmod
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                vip care Lorem ipsum dolor sit amet,
                                                                consetetur sadipscing elitr, sed diam nonumy
                                                                eirmod
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                vip care Lorem ipsum dolor sit amet,
                                                                consetetur sadipscing elitr, sed diam nonumy
                                                                eirmod
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="single-item-type row">
                                                        <div class="col-md-2">
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-md-10">
                                                            <p>
                                                                vip care Lorem ipsum dolor sit amet,
                                                                consetetur sadipscing elitr,
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="button-section-project-type">
                                                        <button type="button" href="#" class="">
                                                            CONTINUE
                                                        </button>
                                                    </div> -->
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br /><br />
                        <button
                            type="button"
                            class="next action-button"
                            style="
                      float: right;
                      margin-right: 20px;
                      background: #ff6347;
                      border: none;
                      padding: 1px 90px;
                    "
                        >
                            Continue
                        </button>
                        <!-- <button
                          type="button"
                          class="action-button previous_button"
                          style="
                            float: right;
                            background: transparent;
                            border: 1px solid #0458ab;
                            padding: 1px 90px;
                            color: #0458ab;
                          "
                        >
                          Back
                        </button> -->
                    </fieldset>
                    <fieldset>
                        <h3>Please tell us about your project</h3>
                        <div class="post-about-project">
                            <div class="form-group">
                                <label>Project Title</label>
                                <input type="text" name="project_title" class="form-control" placeholder="eg: Wordpress web development" />
                                <small id="emailHelp" class="form-text text-muted"
                                >Need at least 50 characters</small
                                >
                            </div>
                            <div class="category row">
                                <div class="col-md-5">
                                    <select class="form-control" name="category" id="exampleFormControlSelect1">
                                        <option>Select category</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <select class="form-control" name="sub_category" id="exampleFormControlSelect1">
                                        <option>Select sub category</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="post-project-breaf">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Describe your project in brief</label>
                                    <textarea class="form-control" name="project_brief" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    <small>Need at least 200 characters</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Skill set Keywords</label>
                                <select name="skill_set_keywords" class="form-control product_select" id="exampleFormControlSelect1">
                                    <option>Skill set keywords</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="next action-button"
                            style="
                      float: right;
                      margin-right: 0px;
                      background: #ff6347;
                      border: none;
                      padding: 1px 90px;
                    "
                        >
                            Continue
                        </button>
                        <button
                            type="button"
                            class="action-button previous previous_button"
                            style="
                      float: right;
                      background: transparent;
                      border: 1px solid #0458ab;
                      padding: 1px 90px;
                      color: #0458ab;
                    "
                        >
                            Back
                        </button>
                    </fieldset>
                    <fieldset>
                        <h3>Successful project means well planed scope</h3>

                        <div class="post-project-scope">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Describe your project scope</label>
                                        <textarea class="form-control" name="scope" id="exampleFormControlTextarea1" rows="3" placeholder="Mention your project scope"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Attachments</label>
                                        <textarea name="attachment" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-blue-expert">
                                        <img src="assets/Mask Group 9.png" alt="" />
                                        <h4>
                                            Plan your project scope with our certified experts
                                        </h4>
                                        <a href="#">CONTACT NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="next action-button" style="float: right;margin-right: 20px;background: #ff6347;border: none;padding: 1px 90px;">
                            Continue
                        </button>
                        <button
                            type="button"
                            class="action-button previous previous_button"
                            style="
                      float: right;
                      background: transparent;
                      border: 1px solid #0458ab;
                      padding: 1px 90px;
                      color: #0458ab;
                    "
                        >
                            Back
                        </button>
                    </fieldset>

                    <fieldset>
                        <h3>It's your project.. it's your preferences</h3>

                        <div class="post-project-preferences">
                            <div class="row-margin row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Project duration</label>
                                        <select class="form-control" name="duration" id="exampleFormControlSelect1" >
                                            <option>Less than two weeks</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Project duration</label>
                                        <select class="form-control" name="skill_set_keywords" id="exampleFormControlSelect1">
                                            <option>Intermediate</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row-margin row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Agency level</label>
                                        <select class="form-control" name="agency_level" id="exampleFormControlSelect1">
                                            <option>Level 1 or higher</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Job completion rate</label>
                                        <br />
                                        <select class="form-control" name="completion_rate" id="exampleFormControlSelect1">
                                            <option>80% or higher</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row-margin row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                            <input type="radio" class="form-check-input" id="exampleCheck1"/>
                                                <label class="form-check-label" for="exampleCheck1" >Startup or small</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="exampleCheck1"/>
                                                <label class="form-check-label" for="exampleCheck1" >Medium size company</label
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                            <input type="radio" class="form-check-input" id="exampleCheck1"/>
                                                <label class="form-check-label" for="exampleCheck1" >Large company</label >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row-margin row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Location</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Sri lanka</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Get quotes till</label>
                                        <br />
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>March 03</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <br /><br /><br />
                        </div>
                        <button
                            type="button"
                            class="next action-button"
                            style="
                      float: right;
                      margin-right: 20px;
                      background: #ff6347;
                      border: none;
                      padding: 1px 90px;
                    "
                        >
                            Continue
                        </button>
                        <button
                            type="button"
                            class="action-button previous previous_button"
                            style="
                      float: right;
                      background: transparent;
                      border: 1px solid #0458ab;
                      padding: 1px 90px;
                      color: #0458ab;
                    "
                        >
                            Back
                        </button>
                    </fieldset>
                    <fieldset>
                        <h3>Select your pricing plan</h3>

                        <div class="post-price-plan">
                            <div class="container">
                                <div class="row">
                                    <div class="button-column col col-md-4">
                                        <div
                                            class="button-post-project button-post-project-active"
                                            id="button-post-project-fixed"
                                        >
                                            <div class="row">
                                                <i
                                                    class="fa fa-id-card-o"
                                                    aria-hidden="true"
                                                ></i>
                                                <h6>Fixed Price</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-column col col-md-4">
                                        <div
                                            class="button-post-project"
                                            id="button-post-project-hourly"
                                        >
                                            <div class="row">
                                                <i
                                                    class="fa fa-id-card-o"
                                                    aria-hidden="true"
                                                ></i>
                                                <h6>Hourly</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-column col col-md-4">
                                        <div
                                            class="button-post-project"
                                            id="button-post-project-not-sure"
                                        >
                                            <div class="row">
                                                <i
                                                    class="fa fa-id-card-o"
                                                    aria-hidden="true"
                                                ></i>
                                                <h6>Not sure</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br />
                                <div class="row row-bottum-full-card">
                                    <div class="full-card">
                                        <div class="full-card-content fixed">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                Under 10,000 LKR
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                10,000 - 30,000 LKR
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                30,000 - 80,000 LKR
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                80,000 - 150,000 LKR
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                150,000 - 500,000 LKR
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                500,000 - 1,000,000 LKR
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="flexRadioDefault"
                                                                id="flexRadioDefault1"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="flexRadioDefault1"
                                                            >
                                                                over 1,000,000 LKR
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="full-card-content hourly d-none">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput"
                                                            >Project duration</label
                                                            >
                                                            <select
                                                                class="form-control"
                                                                id="exampleFormControlSelect1"
                                                            >
                                                                <option>Less than a week</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput"
                                                            >Hours per week</label
                                                            >
                                                            <select
                                                                class="form-control"
                                                                id="exampleFormControlSelect1"
                                                            >
                                                                <option>10-30</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br />

                                                <div class="row">
                                                    <label
                                                        for="exampleFormControlSelect1"
                                                        style="margin-left: 30px"
                                                    >Hourly Rate</label
                                                    >
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Minimum amount"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Maximum amount"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="full-card-content not-sure d-none">
                                            <p>Ask from agency to give a better option.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-post-project">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value=""
                                        id="flexCheckChecked"
                                        checked
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexCheckChecked"
                                    >
                                        Read and agree with terms and conditions of
                                        marketplce
                                    </label>
                                </div>
                            </div>

                            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                            </li>
                          </ul>

                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                          </div> -->
                        </div>

                        <br><br><br>

                        <button
                            type="button"
                            class="next action-button"
                            style="
                      float: right;
                      margin-right: 20px;
                      background: #ff6347;
                      border: none;
                      padding: 1px 90px;
                    "
                        >
                            Continue
                        </button>
                        <!-- <br><br><br>
                                    <button
                                      type="button"
                                      class="action-button previous previous_button"
                                      style="
                                        float: right;
                                        background: transparent;
                                        border: 1px solid #0458ab;
                                        padding: 1px 90px;
                                        color: #0458ab;
                                      "
                                    >
                                      Back
                                    </button> -->


                    </fieldset>

                    <fieldset>
                        <h3>Almost done, Lets publish your project</h3>
                        <div class="post-publish">
                            <div class="form-group">
                                <label for="exampleInputEmail1"
                                >Invite agencies to bid to your project</label
                                >
                                <select
                                    class="form-control"
                                    id="exampleFormControlSelect1"
                                >
                                    <option>Enter agency name or Email address</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <br />
                            <div class="social-share">
                                <h5>Share this project with</h5>

                                <div class="social-buttons">
                                    <div class="row">
                                        <a href="#"
                                        ><i
                                                class="fa fa-facebook-square"
                                                style="color: #3b5998"
                                                aria-hidden="true"
                                            ></i
                                            ></a>
                                        <a href="#"
                                        ><i
                                                class="fa fa-twitter-square"
                                                style="color: #00acee"
                                                aria-hidden="true"
                                            ></i
                                            ></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br /><br />
                        <button
                            type="submit"
                            class="next action-button"
                            style="
                      float: right;
                      margin-right: 20px;
                      background: #ff6347;
                      border: none;
                      padding: 1px 90px;
                    "
                        >
                            PUBLISH
                        </button>
                        <button
                            type="button"
                            class="action-button previous previous_button"
                            style="
                      float: right;
                      background: transparent;
                      border: 1px solid #0458ab;
                      padding: 1px 90px;
                      color: #0458ab;
                    "
                        >
                            CANCEL
                        </button>
                    </fieldset>
                </form>
            </section>
        </div>
    </main>

@endsection

@push('after-scripts')

@endpush
