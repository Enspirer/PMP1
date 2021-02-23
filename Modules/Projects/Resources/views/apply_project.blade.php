@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <div id="apply-project-body">
        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="title col-md-9">
                        <div class="row">
                            <h1>Apply for this project</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-section-single-project">
            <div class="container">
                <div class="row">
                    <div class="left col-md-8">
                        <h2 class="title-about">
                            Wordpress Responsive Website Development
                        </h2>
                        <div class="row">
                            <p class="job-id">Job Id: mktplz10001</p>
                            <p class="post-time">WordPress Development</p>
                            <p class="job-id">Looking from: Sri Lanka India</p>
                        </div>

                        <h3>Project Details</h3>
                        <hr />
                        <p>
                            We're looking for an experienced wordpress developer to work
                            with our team to deliver an excellent responsive website.The
                            initial scope looks to be roughly 7 unique page templates + 2/3
                            ancillary pages (T&C, Privacy, Cookies). We expect about 20
                            unique UI components which will be re-used across those
                            templates - Hero, Nav, Image Gallery etc. <br />
                            <br />
                            A clean and clear continuous delivery process would be a great
                            extra. We're open to guidance on the best frontend technology
                            stack for this project, but particularly interested in
                            suggestions around using wordpress as a headless CMS, with an
                            11ty, gatsby, nextJS or other frontend. We're open to
                            suggestions around the frontend technologies - SASS, SCSS,
                            Timber, etc. The ideal proposal will include your preferred
                            technology choices.
                        </p>
                        <a href="#">View full project brief</a>

                        <h3>Payment Terms</h3>
                        <hr />
                        <p class="bit-rate">
                            Tell us about your bid rate for this project ?
                        </p>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Bid</label>
                                    <input type="text" class="form-control" placeholder="LKR" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Service charges</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            placeholder="LKR"
                                            readonly
                                    />
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Your Ballance</label>
                                    <input type="text" class="form-control" placeholder="LKR" />
                                </div>
                            </div>
                            <div class="btn-diffrent-offer">
                                <a class="" href="#">Offer different payment term</a>
                            </div>

                            <p class="bit-rate-form">
                                Your estimated time period for this project ?
                            </p>

                            <div class="form-group form-group-select col-md-4">
                                <select id="inputState" class="form-control">
                                    <option selected>1 - 2 months</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <p class="bit-rate-form">Cover Letter and Portfolio</p>
                            <hr />
                            <p class="cover-portfolio">Cover Letter</p>
                            <div class="form-group">
                  <textarea
                          class="form-control"
                          id="exampleFormControlTextarea1"
                          rows="9"
                  ></textarea>
                            </div>
                            <p class="cover-portfolio">Portfolio</p>
                            <div class="wrapper">
                                <input
                                        class="search"
                                        type="text"
                                        id="search"
                                        placeholder="Please add your external portfolio link here"
                                />
                                <input class="submit" type="submit" value="Link" />
                            </div>
                            <p class="cover-portfolio">Attachments</p>
                            <div class="dropzone">
                                <label for="files" class="dropzone-container">
                                    <div class="file-icon">+</div>
                                    <div class="dropzone-title">
                                        Drop your files here or
                                        <span class="browse">click here</span> to upload
                                    </div>
                                </label>
                                <input
                                        id="files"
                                        name="files[]"
                                        type="file"
                                        class="file-input"
                                />
                            </div>
                            <hr />
                            <div class="button-section-form">
                                <a class="btn-cancel" href="#">Cancel</a>
                                <a class="btn-send-offer" href="#">Send an offer</a>
                            </div>
                        </form>
                    </div>
                    <div class="right col-md-4">
                        <div class="right-card">
                            <h2>Project Overview</h2>
                            <div class="row">
                                <p class="left-title">Duration :</p>
                                <p class="right-answer">1 - 2 Months</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Project Type :</p>
                                <p class="right-answer">Premium</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Location :</p>
                                <p class="right-answer">Sri Lanka India</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Duration :</p>
                                <p class="right-answer">1 - 2 Months</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Agency Level :</p>
                                <p class="right-answer">Level 2 or higher</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Experience Level :</p>
                                <p class="right-answer">Intermediate</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Agency :</p>
                                <p class="right-answer">Startup</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Job Completion rate :</p>
                                <p class="right-answer">85% or higher</p>
                            </div>
                            <div class="row">
                                <p class="left-title">Language :</p>
                                <p class="right-answer">English Sinhala</p>
                            </div>
                        </div>

                        <div class="right-card">
                            <div class="card-item">
                                <div class="row">
                                    <div class="icon-left">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="details-right">
                                        <h6>Payment Category</h6>
                                        <h4>Fixed Price</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-item">
                                <div class="row">
                                    <div class="icon-left">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="details-right">
                                        <h6>Fixed Price</h6>
                                        <h4>Rs. 25,000 - 40,000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-scripts')

@endpush





