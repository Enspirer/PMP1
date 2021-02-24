@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <div id="single-project-body">
        @include('projects::includes.project_auction.header')
        <div class="body-section-single-project">
            <div class="container">
                <div
                        id="containernew"
                        style="width: 100%; height: 400px;"
                        data-animscroll="fade-left"></div>
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
                        <a href="" type="button" class="btn apply-button">BID NOW</a>
                        <a href="" class="save-button">
                            View Scope
                        </a>
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

            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
<script type="text/javascript">
    var dom = document.getElementById("containernew");
    var myChart = echarts.init(dom);
    var app = {};
    var option;
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                crossStyle: {
                    color: '#999'
                }
            }
        },
        toolbox: {
            feature: {
                dataView: {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore: {show: true},
                saveAsImage: {show: true},
            }
        },
        legend: {
            data: ['Price', 'Bid Count', '平均温度']
        },
        xAxis: [
            {
                type: 'category',
                data: ['12:00 AM', '1:00 AM', '2:00 AM', '3:00 AM', '4:00 AM', '5:00 AM', '6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '9:00 PM', '10:00 PM','11:00 PM','12:00 PM'],
                axisPointer: {
                    type: 'shadow'
                }
            }
        ],
        yAxis: [
            {
                type: 'value',
                name: 'Bid Range',
                min: 0,
                max: 100000,
                interval: 10000,
                splitLine: {
                    show: false
                },
                axisLabel: {
                    formatter: '{value}'
                }
            },
            {
                type: 'value',
                name: 'Bid Count',
                min: 0,
                max: 25,
                interval: 5,
                splitLine: {
                    show: false
                },
                axisLabel: {
                    formatter: '{value}'
                }
            }
        ],
        series: [
            {
                name: 'Price',
                type: 'line',
                fill: 'true',
                areaStyle: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: '#2F8FEB'
                    }, {
                        offset: 1,
                        color: '#fffF'
                    }])
                },
                data: [10000, 12000,13000, 13050, 13560, 30000, 50000, 50000, 60000, 70000.6, 750000, 750000,80000,60000,70000,50000,40000,37000,70000,78000,78000,69999,40000, 3.3]
            },
            {
                name: 'Bid Count',
                type: 'line',
                yAxisIndex: 1,
                data: [2.0, 2.2, 3.3, 4.5, 6.3, 10.2, 20.3, 23.4, 23.0, 16.5, 12.0, 6.2,10,23,21,42,14,56,74,7,40,10,25,]
            }
        ]
    };
    if (option && typeof option === 'object') {
        myChart.setOption(option);
    }
</script>
@endpush





