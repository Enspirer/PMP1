@extends('frontend.user.layout.app')

@section('content')
    <br>
    <section class="dashboard-body">
        <div class="page-wrapper chiller-theme toggled">
            <main class="page-content">
                <div class="dashboard-nav container-fluid">
                    @include('frontend.user.my_projects.main_tab_link')
                </div>
                <div class="dashboard-nav-second container-fluid">
                    <div class="row row-full">
                        <a href="">
                            <div class="row">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <p>Back</p>
                            </div>
                        </a>

                        <ul class="nav nav-pill" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a  class="nav-link active"  id="pills-home-tab"  data-bs-toggle="pill"  data-bs-target="#pills-home"  type="button"  role="tab"  aria-controls="pills-home"  aria-selected="true">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-task-tab" data-bs-toggle="pill" data-bs-target="#pills-task" type="button" role="tab" aria-controls="pills-task" aria-selected="false">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Task
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-message-tab" data-bs-toggle="pill" data-bs-target="#pills-message" type="button" role="tab" aria-controls="pills-message" aria-selected="false">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    Messages
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a  class="nav-link"  id="pills-attachment-tab"  data-bs-toggle="pill"  data-bs-target="#pills-attachment"  type="button"  role="tab"  aria-controls="pills-attachment"  aria-selected="false">
                                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                                    Attachments
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-note-tab" data-bs-toggle="pill" data-bs-target="#pills-note" type="button" role="tab" aria-controls="pills-note" aria-selected="false">
                                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                    Notes
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-log-tab" data-bs-toggle="pill" data-bs-target="#pills-log" type="button" role="tab" aria-controls="pills-log" aria-selected="false">
                                    <i class="fa fa-history" aria-hidden="true"></i>
                                    Activity Log
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-brief-tab" data-bs-toggle="pill" data-bs-target="#pills-brief" type="button" role="tab" aria-controls="pills-brief" aria-selected="false">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    Project Brief
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr/>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="container">
                            <div class="row">
                                <h5>Project Overview</h5>
                            </div>
                            <div class="active-projects">
                                <div class="single-project card-db">
                                    <p class="persantage">0%</p>
                                    <div class="overview-row row">
                                        <div class="left-title-and-company col-md-9">
                                            <div class="row">
                                                <h2>Wordpress Responsive Website Development</h2>
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.599" height="22.451" viewBox="0 0 32.599 39.451">
                                                        <g id="prize" transform="translate(-27.924)">
                                                            <g id="Prize_2_" transform="translate(27.924 0)">
                                                                <g id="Group_49" data-name="Group 49" transform="translate(0 0)">
                                                                    <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#ffdf40"></path>
                                                                </g>
                                                            </g>
                                                            <path id="Path_35" data-name="Path 35" d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z" transform="translate(-211.776 0)" fill="#ffdf40"></path>
                                                            <g id="Group_50" data-name="Group 50" transform="translate(35.648 7.575)">
                                                                <path id="Path_36" data-name="Path 36" d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z" transform="translate(-136 -106)" fill="#ffbe40"></path>
                                                            </g>
                                                            <path id="Path_37" data-name="Path 37" d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z" transform="translate(-211.776 -98.425)" fill="#ffbe40"></path>
                                                            <path id="Path_39" data-name="Path 39" d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z" transform="translate(-211.776 -172.146)" fill="#ffbe40"></path>
                                                            <g id="Group_51" data-name="Group 51" transform="translate(40.25 13.249)">
                                                                <path id="Path_38" data-name="Path 38" d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z" transform="translate(-200.395 -185.395)" fill="#ffdf40"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="company-and-jobid row">
                                                <p class="company">Enspirer (pvt) Ltd.</p>
                                                <p class="jobid">Job Id: mktplz10001</p>
                                            </div>
                                        </div>
                                        <div class="price col-md-3">
                                            <h2>LKR 50,000</h2>
                                        </div>
                                    </div>
                                    <img src="{{url('theme_light/assets/example1.png')}}" alt="" style="width: 100%; margin-top: 20px">
                                    <p class="inprogress">In progress</p>
                                </div>

                                <br/>
                                <img src="{{url('theme_light/assets/example2.png')}}" alt="" style="width: 100%">

                                <br/>
                                <br/>
                                <div class="large-card">
                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="pink card">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="card-body-left col-md-6">
                                                            <div class="date-start">
                                                                <p>Start Date</p>
                                                                <h6>Jan 24 2021</h6>
                                                            </div>
                                                            <div class="date-end">
                                                                <p>Due Date</p>
                                                                <h6>Jan 29 2021</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-body-right col-md-6">
                                                            <h1>18</h1>
                                                            <p>Days Left</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-6">
                                            <div class="blue card">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="card-body-left col-md-6">
                                                            <h6 class="hrs">Total Hours Worked On</h6>
                                                        </div>
                                                        <div class="card-body-right col-md-6">
                                                            <h1>326</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-6">
                                            <div class="green card">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="card-body-left col-md-6">
                                                            <div class="date-start m-t-40">
                                                                <p>Overall Progress</p>
                                                                <h6>In Progress</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-body-right col-md-6">
                                                            <h1>64%</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-6">
                                            <div class="yellow card">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="card-body-left col-md-6">
                                                            <div class="date-start m-t-40">
                                                                <p>Billing Type</p>
                                                                <h6>Fixed Price</h6>
                                                            </div>
                                                        </div>
                                                        <div class="card-body-right col-md-6">
                                                            <h1>50k</h1>
                                                            <p>LKR</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="pills-task" role="tabpanel" aria-labelledby="pills-task-tab">
                        <div class="container">
                            <div class="row">
                                <h5>Task List</h5>
                                <div class="header-search-top ml-auto">
                                    <div class="inputWithIcon">
                                        <input type="text" placeholder="Search projects" />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="pills-message" role="tabpanel" aria-labelledby="pills-message-tab">
                        <div class="container">
                            <div class="row">
                                <h5>Messages</h5>
                                <div class="header-search-top ml-auto">
                                    <div class="inputWithIcon">
                                        <input type="text" placeholder="Search projects" />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="pills-attachment" role="tabpanel" aria-labelledby="pills-attachment-tab">
                        <div class="container">
                            <div class="row">
                                <h5>Attachments</h5>
                                <div class="header-search-top ml-auto">
                                    <div class="inputWithIcon">
                                        <input type="text" placeholder="Search projects" />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="pills-note" role="tabpanel" aria-labelledby="pills-note-tab">
                        <div class="container">
                            <div class="row">
                                <h5>Personal Notes</h5>
                                <div class="header-search-top ml-auto">
                                    <div class="inputWithIcon">
                                        <input type="text" placeholder="Search projects" />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-db p-20 m-t-40">
                                <textarea id="mytextarea">Hello, World!</textarea>
                            </div>

                            <div class="card-db p-20 m-t-40">
                                <table id="table_id" class="display">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Note</th>
                                        <th>Last Modified</th>
                                        <th>Added Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Row 1 Data 1</td>
                                        <td>Row 1 Data 2</td>
                                        <td>Row 1 Data 2</td>
                                        <td>Row 1 Data 2</td>
                                    </tr>
                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>

                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>

                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>

                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>

                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>

                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>

                                    <tr>
                                        <td>Row 2 Data 1</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                        <td>Row 2 Data 2</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="pills-log" role="tabpanel" aria-labelledby="pills-log-tab">
                        <div class="container">
                            <div class="row">
                                <h5>Activity Log</h5>
                                <div class="header-search-top ml-auto">
                                    <div class="inputWithIcon">
                                        <input type="text" placeholder="Search projects" />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline">
                                <ul>
                                    <li>
                                        <span>3rd January 2020</span>
                                        <div class="content-timeline card-db p-20">
                                            <div class="row">
                                                <div class="col-md-2"><img src="https://source.unsplash.com/random/100x100/?nature" alt=""></div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-timeline card-db p-20">
                                            <div class="row">
                                                <div class="col-md-2"><img src="https://source.unsplash.com/random/100x100/?nature" alt=""></div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>21st Jun 2019</span>
                                        <div class="content-timeline card-db p-20">
                                            <div class="row">
                                                <div class="col-md-2"><img src="https://source.unsplash.com/random/100x100/?nature" alt=""></div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>15th April 2018</span>

                                        <div class="content-timeline card-db p-20">
                                            <div class="row">
                                                <div class="col-md-2"><img src="https://source.unsplash.com/random/100x100/?nature" alt=""></div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-timeline card-db p-20">
                                            <div class="row">
                                                <div class="col-md-2"><img src="https://source.unsplash.com/random/100x100/?nature" alt=""></div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <span>22nd Mars 2017</span>
                                        <div class="content-timeline card-db p-20">
                                            <div class="row">
                                                <div class="col-md-2"><img src="https://source.unsplash.com/random/100x100/?nature" alt=""></div>
                                                <div class="col-md-10">
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et do eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="pills-brief" role="tabpanel" aria-labelledby="pills-brief-tab">
                        <div class="container container-brief">
                            <div class="row">
                                <h5>Project Brief</h5>
                                <div class="header-search-top ml-auto">
                                    <div class="inputWithIcon">
                                        <input type="text" placeholder="Search projects" />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-db">
                                <h2 class="title-about">About Project</h2>
                                <p>
                                    We're looking for an experienced wordpress developer to work
                                    with our team to deliver an excellent responsive website.The
                                    initial scope looks to be roughly 7 unique page templates +
                                    2/3 ancillary pages (T&C, Privacy, Cookies). We expect about
                                    20 unique UI components which will be re-used across those
                                    templates - Hero, Nav, Image Gallery etc. <br />
                                    <br />
                                    The number of integrations isn't currently known but we
                                    expect: * A contact form * An interactive component that
                                    will suggest products based on your preferred colours. * CMS
                                    obviously - ideally the majority of the page content will be
                                    editable through the CMS. <br />
                                    <br />
                                    The ideal candidate will: Be code quality focused, with an
                                    eagerness to provide the best experience for the user and
                                    the content editor. Work well against a deadline, working
                                    alongside our project team in a Scrum fashion with Epics,
                                    Stories and Sprints. Be comfortable working in a structure
                                    git centric process with feature based branches, pull
                                    requests and regular meaningful commits. <br />
                                    <br />
                                    A clean and clear continuous delivery process would be a
                                    great extra. We're open to guidance on the best frontend
                                    technology stack for this project, but particularly
                                    interested in suggestions around using wordpress as a
                                    headless CMS, with an 11ty, gatsby, nextJS or other
                                    frontend. We're open to suggestions around the frontend
                                    technologies - SASS, SCSS, Timber, etc. The ideal proposal
                                    will include your preferred technology choices.
                                </p>
                                <h2 class="title-skill">Skill Set</h2>
                                <div class="row-skill row">
                                    <button>Wordpress</button>
                                    <button>Vector Graphics</button>
                                    <button>Figma</button>
                                    <button>HTML/CSS</button>
                                    <button>SASS/SCSS</button>
                                </div>
                                <h2 class="title-scope">Project Scope & Attatchments</h2>
                                <p class="scope-description">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                                    sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                    ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore et dolore magna
                                    aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                    justo duo dolores et ea
                                </p>
                                <div class="row row-download">
                                    <button>
                                        <img src="{{url('theme_light/assets/image/icon/pdf.svg')}}" alt="" />Download
                                        project scope part 1
                                    </button>
                                    <button>
                                        <img src="{{url('theme_light/assets/image/icon/pdf.svg')}}" alt="" />Download
                                        project scope part 2
                                    </button>
                                    <button>
                                        <img src="{{url('theme_light/assets/image/icon/doc.svg')}}" alt="" />User
                                        profiles and journey
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>

    @push('after-scripts')
    <script
            type="text/javascript"
            charset="utf8"
            src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script>
        tinymce.init({
            selector: "#mytextarea",
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#table_id").DataTable();
        });
    </script>
    @endpush


@endsection

@push('after-script')

@endpush
