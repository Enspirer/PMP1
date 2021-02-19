@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

@endsection

@push('after-scripts')
<div id="single-project-body">
    <div class="header-section">
        <div class="container">
            <div class="row">
                <div class="title col-md-9">
                    <div class="row">
                        <p class="post-time">Posted 2 hours ago</p>
                        <p class="job-id">Job Id: mktplz10001</p>
                    </div>
                    <div class="row">
                        <h1>Wordpress Responsive Website Development</h1>
                    </div>
                    <div class="row">
                        <p class="post-time">WordPress Development</p>
                        <p class="job-id">Looking from: Sri Lanka India</p>
                    </div>
                </div>
                <div class="time col-md-3">
                    <div class="ocl-timer">
                        <div class="ocl-timer__main-unit-amount">
                            <span id="days">4</span>
                        </div>
                        <div class="ocl-timer__timer-details">
                            <div class="ocl-timer__main-unit">Days to Expire</div>
                            <div class="ocl-timer__secondary-units">
                                <div class="ocl-timer__secondary-unit">
                                    <div class="ocl-timer__secondary-unit-name">Hours</div>
                                    <div class="ocl-timer__secondary-unit-amount">
                                        <span id="hours">05</span>
                                    </div>
                                </div>
                                <div class="ocl-timer__secondary-units-divider">:</div>
                                <div class="ocl-timer__secondary-unit">
                                    <div class="ocl-timer__secondary-unit-name">Mins</div>
                                    <div class="ocl-timer__secondary-unit-amount">
                                        <span id="minutes">05</span>
                                    </div>
                                </div>
                                <div class="ocl-timer__secondary-units-divider">:</div>
                                <div class="ocl-timer__secondary-unit">
                                    <div class="ocl-timer__secondary-unit-name">Second</div>
                                    <div class="ocl-timer__secondary-unit-amount">
                                        <span id="seconds">05</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body-section-single-project">
        <div class="container">
            <div class="row">
                <div class="left col-md-8">
                    <h2 class="title-about">About Project</h2>
                    <p>
                        We're looking for an experienced wordpress developer to work
                        with our team to deliver an excellent responsive website.The
                        initial scope looks to be roughly 7 unique page templates + 2/3
                        ancillary pages (T&C, Privacy, Cookies). We expect about 20
                        unique UI components which will be re-used across those
                        templates - Hero, Nav, Image Gallery etc. <br />
                        <br />
                        The number of integrations isn't currently known but we expect:
                        * A contact form * An interactive component that will suggest
                        products based on your preferred colours. * CMS obviously -
                        ideally the majority of the page content will be editable
                        through the CMS. <br />
                        <br />
                        The ideal candidate will: Be code quality focused, with an
                        eagerness to provide the best experience for the user and the
                        content editor. Work well against a deadline, working alongside
                        our project team in a Scrum fashion with Epics, Stories and
                        Sprints. Be comfortable working in a structure git centric
                        process with feature based branches, pull requests and regular
                        meaningful commits. <br />
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
                    <h2 class="title-skill">Skill Set</h2>
                    <div class="row-skill row">
                        <button>Wordpress</button>
                        <button>Vector Graphics</button>
                        <button>Figma</button>
                        <button>HTML/CSS</button>
                        <button>SASS/SCSS</button>
                        <button>Java Script</button>
                    </div>
                    <h2 class="title-scope">Project Scope & Attatchments</h2>
                    <p class="scope-description">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                        diam nonumy eirmod tempor invidunt ut labore et dolore magna
                        aliquyam erat, sed diam voluptua. At vero eos et accusam et
                        justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                        takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                        dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua. At vero eos et accusam et justo duo dolores
                        et ea
                    </p>
                    <div class="row row-download">
                        <button>
                            <img src="assets/image/icon/pdf.svg" alt="" />Download project
                            scope part 1
                        </button>
                        <button>
                            <img src="assets/image/icon/pdf.svg" alt="" />Download project
                            scope part 2
                        </button>
                        <button>
                            <img src="assets/image/icon/doc.svg" alt="" />User profiles
                            and journey
                        </button>
                    </div>
                    <div class="preferences-and-activity container">
                        <div class="row">
                            <div class="preference col-md-6">
                                <h1>Client's Preferences</h1>
                                <div class="preferenece-list">
                                    <div class="list-item-preference">
                                        <div class="row">
                                            <p class="item-question">Location :</p>
                                            <p class="item-answer">Sri Lanka India</p>
                                        </div>
                                    </div>
                                    <div class="list-item-preference">
                                        <div class="row">
                                            <p class="item-question">Agency Level :</p>
                                            <p class="item-answer">Level 2 or higher</p>
                                        </div>
                                    </div>
                                    <div class="list-item-preference">
                                        <div class="row">
                                            <p class="item-question">Job Completion rate :</p>
                                            <p class="item-answer">85% or higher</p>
                                        </div>
                                    </div>
                                    <div class="list-item-preference">
                                        <div class="row">
                                            <p class="item-question">Language :</p>
                                            <p class="item-answer">English Sinhala</p>
                                        </div>
                                    </div>
                                    <div class="list-item-preference">
                                        <div class="row">
                                            <p class="item-question">Agency :</p>
                                            <p class="item-answer">Startup or Medium company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="activity col-md-6">
                                <h1>Activity on this Project</h1>
                                <div class="activity-list">
                                    <div class="list-item-activity">
                                        <div class="row">
                                            <p class="item-question">Bids :</p>
                                            <p class="item-answer">10 to 20</p>
                                        </div>
                                    </div>
                                    <div class="list-item-activity">
                                        <div class="row">
                                            <p class="item-question">Impressions :</p>
                                            <p class="item-answer">120</p>
                                        </div>
                                    </div>
                                    <div class="list-item-activity">
                                        <div class="row">
                                            <p class="item-question">Hires :</p>
                                            <p class="item-answer">0</p>
                                        </div>
                                    </div>
                                    <div class="list-item-activity">
                                        <div class="row">
                                            <p class="item-question">Invites :</p>
                                            <p class="item-answer">3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right col-md-4">
                    <a href="{{route('frontend.apply_project',1)}}" class="apply-button">APPLY TO THIS PROJECT</a>
                    <button class="save-button">
                        <i class="fa fa-heart" aria-hidden="true"></i> SAVE PROJECT
                    </button>
                    <div class="right-card">
                        <div class="card-item">
                            <div class="row">
                                <div class="icon-left">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="details-right">
                                    <h6>Estimated Budjet</h6>
                                    <h4>Rs. 25,000 - 40,000</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-item">
                            <div class="row">
                                <div class="icon-left">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="details-right">
                                    <h6>Project Duration</h6>
                                    <h4>1 - 2 Months</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-item">
                            <div class="row">
                                <div class="icon-left">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="details-right">
                                    <h6>Project Type</h6>
                                    <h4>Premium</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-item">
                            <div class="row">
                                <div class="icon-left">
                                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                                </div>
                                <div class="details-right">
                                    <h6>Required Experience level</h6>
                                    <h4>Intermediate Level</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-item">
                            <div class="row">
                                <div class="icon-left">
                                    <i class="fa fa-file" aria-hidden="true"></i>
                                </div>
                                <div class="details-right">
                                    <h6>Payment Category</h6>
                                    <h4>Fixed Price</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-card-second">
                        <div class="company-profile">
                            <div class="row">
                                <i class="fas fa-user"></i>
                                <h3>
                                    ABC <br />
                                    Company
                                </h3>
                            </div>
                        </div>
                        <div class="card-item-all">
                            <div class="card-item">
                                <div class="row">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <p>Verified Client</p>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                    <p>Sri Lanka</p>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    <p>8 Projects Posted</p>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <i class="fa fa-id-card" aria-hidden="true"></i>
                                    <p>100% Hire Rate</p>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <i class="fas fa-dollar-sign"></i>
                                    <p>Rs. 90k total spend</p>
                                </div>
                            </div>
                            <div class="card-item">
                                <div class="row">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <p>4.89 from 8 review</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottum-buttons">
                        <button class="button">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report this project
                        </button>
                        <button class="button">
                            <i class="fa fa-share-alt" aria-hidden="true"></i> Share this project
                        </button>
                    </div>
                </div>
            </div>
            <h2 class="title-more-project">More projects from ABC company</h2>
            <div class="cards-section">
                <div class="card-more-project">
                    <div class="row">
                        <div class="details-more-project col-md-9">
                            <h2>Update an existing website product</h2>
                            <div class="row">
                                <p>Posted 2 hours ago</p>
                                <p>Est. Time: Less than 5 days</p>
                                <p>Job Id: mktplz10001</p>
                            </div>
                        </div>
                        <div class="budget-more-project col-md-3">
                            <h5>Estimated Budjet</h5>
                            <h3>Rs. 25,000 - 40,000</h3>
                        </div>
                    </div>
                </div>
                <div class="card-more-project">
                    <div class="row">
                        <div class="details-more-project col-md-9">
                            <h2>Update an existing website product</h2>
                            <div class="row">
                                <p>Posted 2 hours ago</p>
                                <p>Est. Time: Less than 5 days</p>
                                <p>Job Id: mktplz10001</p>
                            </div>
                        </div>
                        <div class="budget-more-project col-md-3">
                            <h5>Estimated Budjet</h5>
                            <h3>Rs. 25,000 - 40,000</h3>
                        </div>
                    </div>
                </div>

                <h2 class="title-more-project">Similar projects on marketplace</h2>
                <div class="cards-section">
                    <div class="card-more-project">
                        <div class="row">
                            <div class="details-more-project col-md-9">
                                <h2>Update an existing website product</h2>
                                <div class="row">
                                    <p>Posted 2 hours ago</p>
                                    <p>Est. Time: Less than 5 days</p>
                                    <p>Job Id: mktplz10001</p>
                                </div>
                            </div>
                            <div class="budget-more-project col-md-3">
                                <h5>Estimated Budjet</h5>
                                <h3>Rs. 25,000 - 40,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-more-project">
                        <div class="row">
                            <div class="details-more-project col-md-9">
                                <h2>Update an existing website product</h2>
                                <div class="row">
                                    <p>Posted 2 hours ago</p>
                                    <p>Est. Time: Less than 5 days</p>
                                    <p>Job Id: mktplz10001</p>
                                </div>
                            </div>
                            <div class="budget-more-project col-md-3">
                                <h5>Estimated Budjet</h5>
                                <h3>Rs. 25,000 - 40,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-more-project">
                        <div class="row">
                            <div class="details-more-project col-md-9">
                                <h2>Update an existing website product</h2>
                                <div class="row">
                                    <p>Posted 2 hours ago</p>
                                    <p>Est. Time: Less than 5 days</p>
                                    <p>Job Id: mktplz10001</p>
                                </div>
                            </div>
                            <div class="budget-more-project col-md-3">
                                <h5>Estimated Budjet</h5>
                                <h3>Rs. 25,000 - 40,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-more-project">
                        <div class="row">
                            <div class="details-more-project col-md-9">
                                <h2>Update an existing website product</h2>
                                <div class="row">
                                    <p>Posted 2 hours ago</p>
                                    <p>Est. Time: Less than 5 days</p>
                                    <p>Job Id: mktplz10001</p>
                                </div>
                            </div>
                            <div class="budget-more-project col-md-3">
                                <h5>Estimated Budjet</h5>
                                <h3>Rs. 25,000 - 40,000</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endpush





