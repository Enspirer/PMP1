<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enspirer Project Marcketplace</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="icon" type="image/png" href="assets/image/favicon.png" />

    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- Theame Style  -->
    <link rel="stylesheet" href="styles/css/style.css" />
    <link rel="stylesheet" href="plugin/dist/css/animtrap.css" />
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
    </style>
</head>

<body>
<section class="nav-section">
    <nav class="navbar-main navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"
            ><img src="assets/image/logotext.png" alt="" width="160px"
                /></a>

            <div class="header-search-top">
                <div class="inputWithIcon">
                    <input type="text" placeholder="Search projects" />
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>

            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ml-auto row">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"
                            >Home <span class="sr-only">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                        <div class="user-menu-wrap">
                            <a class="mini-photo-wrapper-notification" href="#">
                                <i
                                    class="fa fa-bell"
                                    aria-hidden="true"
                                    style="
                        font-size: 22px;
                        color: #131313;
                        top: 12px;
                        margin-top: 8px;
                        margin-left: 32px;
                      "
                                ></i>
                            </a>

                            <div class="menu-container-notofication">
                                <ul class="user-menu-notifiaction">
                                    <div class="profile-highlight">
                                        <img
                                            src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
                                            alt="profile-img"
                                            width="36"
                                            height="36"
                                        />
                                        <div class="details">
                                            <div id="profile-name">Kenny Lee</div>
                                            <div id="profile-footer">Team Hallaway</div>
                                        </div>
                                    </div>

                                    <div class="profile-highlight">
                                        <img
                                            src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
                                            alt="profile-img"
                                            width="36"
                                            height="36"
                                        />
                                        <div class="details">
                                            <div id="profile-name">Kenny Lee</div>
                                            <div id="profile-footer">Team Hallaway</div>
                                        </div>
                                    </div>

                                    <div class="profile-highlight">
                                        <img
                                            src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
                                            alt="profile-img"
                                            width="36"
                                            height="36"
                                        />
                                        <div class="details">
                                            <div id="profile-name">Kenny Lee</div>
                                            <div id="profile-footer">Team Hallaway</div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <div class="user-menu-wrap">
                            <a class="mini-photo-wrapper" href="#">
                                <img
                                    class="mini-photo"
                                    src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
                                    width="36"
                                    height="36"
                                />
                            </a>

                            <div class="menu-container">
                                <ul class="user-menu">
                                    <div class="profile-highlight">
                                        <img
                                            src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
                                            alt="profile-img"
                                            width="36"
                                            height="36"
                                        />
                                        <div class="details">
                                            <div id="profile-name">Kenny Lee</div>
                                            <div id="profile-footer">Team Hallaway</div>
                                        </div>
                                    </div>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="#">
                                            <img
                                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1604623/trophy.png"
                                                alt="trophy_icon"
                                                width="20"
                                                height="20"
                                            />
                                            <div>Achievements</div>
                                        </a>
                                    </li>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="#">
                                            <img
                                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1604623/team.png"
                                                alt="team_icon"
                                                width="20"
                                                height="20"
                                            />
                                            <div>Team</div>
                                        </a>
                                    </li>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="#">
                                            <img
                                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1604623/book.png"
                                                alt="team_icon"
                                                width="20"
                                                height="20"
                                            />
                                            <div>Log History</div>
                                        </a>
                                    </li>
                                    <div class="footer">
                                        <li class="user-menu__item">
                                            <a
                                                class="user-menu-link"
                                                href="#"
                                                style="color: #f44336"
                                            >Logout</a
                                            >
                                        </li>
                                        <li class="user-menu__item">
                                            <a class="user-menu-link" href="#">Settings</a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </ul>
                    <a class="post_job" type="button" class="btn btn-primary"
                    >Post a Job</a
                    >
                    <!-- <button type="button" class="btn btn-primary">Post a Job</button> -->
                </div>
            </div>
        </div>
    </nav>
</section>

<section class="dashboard-body">
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">USER DASHBOARD</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <div
                            class="user-avatar -medium -online-bubble"
                            style="
                    background-image: url('https://source.unsplash.com/random/100x100/?nature');
                  "
                        ></div>
                    </div>
                    <div class="user-info">
                        <span class="user-name">Enspire (pvt) Ltd </span>
                        <span class="user-role"
                        ><i class="fa fa-star" aria-hidden="true"></i>4.7 Star</span
                        >
                    </div>
                </div>
                <!-- sidebar-header  -->
                <!-- <div class="sidebar-search">
                      <div>
                        <div class="input-group">
                          <input type="text" class="form-control search-menu" placeholder="Search...">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-search" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div> -->
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                <span>Summary</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                <span>Post a Project</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-file-o" aria-hidden="true"></i>
                                <span>My Projects</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <span>Payments</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span>Invite Co-workers</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <span>Project Cancellations</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- sidebar-content  -->
            <!-- <div class="sidebar-footer">
                  <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                  </a>
                  <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                  </a>
                  <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                  </a>
                  <a href="#">
                    <i class="fa fa-power-off"></i>
                  </a>
                </div> -->
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="dashboard-nav container-fluid" style="width: 100%; height: 50px; background: #F0F0F0;">
                <div class="row">
                    <div class="col-md-2"><p>Active Projects</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h5>Active Projects - <span>3 (LKR 120,000)</span></h5>
                    <div class="header-search-top ml-auto">
                        <div class="inputWithIcon">
                            <input type="text" placeholder="Search projects" />
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="active-projects">
                    <div class="single-project card-db">
                        <div class="row">
                            <div class="left-title-and-company col-md-5">
                                <h2>Wordpress website development</h2>
                                <div class="row">
                                    <p>Enspirer (pvt) Ltd.</p>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.599" height="22.451" viewBox="0 0 32.599 32.451">
                                            <g id="prize" transform="translate(-27.924)">
                                                <g id="Prize_2_" transform="translate(27.924 0)">
                                                    <g id="Group_49" data-name="Group 49" transform="translate(0 0)">
                                                        <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#ffdf40"/>
                                                    </g>
                                                </g>
                                                <path id="Path_35" data-name="Path 35" d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z" transform="translate(-211.776 0)" fill="#ffdf40"/>
                                                <g id="Group_50" data-name="Group 50" transform="translate(35.648 7.575)">
                                                    <path id="Path_36" data-name="Path 36" d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z" transform="translate(-136 -106)" fill="#ffbe40"/>
                                                </g>
                                                <path id="Path_37" data-name="Path 37" d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z" transform="translate(-211.776 -98.425)" fill="#ffbe40"/>
                                                <path id="Path_39" data-name="Path 39" d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z" transform="translate(-211.776 -172.146)" fill="#ffbe40"/>
                                                <g id="Group_51" data-name="Group 51" transform="translate(40.25 13.249)">
                                                    <path id="Path_38" data-name="Path 38" d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z" transform="translate(-200.395 -185.395)" fill="#ffdf40"/>
                                                </g>
                                            </g>
                                        </svg>

                                    </div>
                                </div>

                            </div>
                            <div class="status-bar col-md-2">
                                <p class="status">Status:</p>
                                <p class="status-type progress-green">In progress</p>
                            </div>
                            <div class="progress-bar-tal col-md-1">
                                <div class="progress-style" id="progress1"></div>
                                <p class="persantage-status">64%</p>
                            </div>
                            <div class="remain-time col-md-2">
                                <h6>18 <small>D</small> 12 <small>h</small></h6>
                                <p>Remaining</p>
                            </div>
                            <div class="price col-md-2">
                                <h2>50,00000</h2>
                                <p>LKR</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-project card-db">
                        <div class="row">
                            <div class="left-title-and-company col-md-5">
                                <h2>Wordpress website development</h2>
                                <div class="row">
                                    <p>Enspirer (pvt) Ltd.</p>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.599" height="22.451" viewBox="0 0 32.599 32.451">
                                            <g id="prize" transform="translate(-27.924)">
                                                <g id="Prize_2_" transform="translate(27.924 0)">
                                                    <g id="Group_49" data-name="Group 49" transform="translate(0 0)">
                                                        <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#ffdf40"/>
                                                    </g>
                                                </g>
                                                <path id="Path_35" data-name="Path 35" d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z" transform="translate(-211.776 0)" fill="#ffdf40"/>
                                                <g id="Group_50" data-name="Group 50" transform="translate(35.648 7.575)">
                                                    <path id="Path_36" data-name="Path 36" d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z" transform="translate(-136 -106)" fill="#ffbe40"/>
                                                </g>
                                                <path id="Path_37" data-name="Path 37" d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z" transform="translate(-211.776 -98.425)" fill="#ffbe40"/>
                                                <path id="Path_39" data-name="Path 39" d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z" transform="translate(-211.776 -172.146)" fill="#ffbe40"/>
                                                <g id="Group_51" data-name="Group 51" transform="translate(40.25 13.249)">
                                                    <path id="Path_38" data-name="Path 38" d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z" transform="translate(-200.395 -185.395)" fill="#ffdf40"/>
                                                </g>
                                            </g>
                                        </svg>

                                    </div>
                                </div>

                            </div>
                            <div class="status-bar col-md-2">
                                <p class="status">Status:</p>
                                <p class="status-type hold">On hold</p>
                            </div>
                            <div class="progress-bar-tal col-md-1">
                                <div class="progress-style" id="progress2"></div>
                                <p class="persantage-status">64%</p>
                            </div>
                            <div class="remain-time col-md-2">
                                <h6>18 <small>D</small> 12 <small>h</small></h6>
                                <p>Remaining</p>
                            </div>
                            <div class="price col-md-2">
                                <h2>50,00000</h2>
                                <p>LKR</p>
                            </div>
                        </div>
                    </div>

                    <div class="single-project card-db">
                        <div class="row">
                            <div class="left-title-and-company col-md-5">
                                <h2>Wordpress website development</h2>
                                <div class="row">
                                    <p>Enspirer (pvt) Ltd.</p>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.599" height="22.451" viewBox="0 0 32.599 32.451">
                                            <g id="prize" transform="translate(-27.924)">
                                                <g id="Prize_2_" transform="translate(27.924 0)">
                                                    <g id="Group_49" data-name="Group 49" transform="translate(0 0)">
                                                        <path id="Path_34" data-name="Path 34" d="M44.224,32.451l-2.538-3.5-3.691,2.273-1.013-4.227-4.231.669.63-4.267L29.157,22.38l2.27-3.692-3.5-2.537,3.5-2.537-2.27-3.692,4.227-1.014L32.71,4.636l4.271.675,1.013-4.225,3.693,2.269L44.224,0l2.536,3.354,3.693-2.269,1.013,4.225,4.271-.675-.674,4.272L59.29,9.922l-2.27,3.692,3.5,2.537-3.5,2.537,2.27,3.692-4.223,1.013.63,4.267-4.231-.669-1.013,4.227-3.691-2.273Z" transform="translate(-27.924 0)" fill="#ffdf40"/>
                                                    </g>
                                                </g>
                                                <path id="Path_35" data-name="Path 35" d="M258.538,28.946l3.691,2.273,1.013-4.227,4.231.669-.63-4.267,4.223-1.013-2.27-3.692,3.5-2.537-3.5-2.537,2.27-3.692-4.227-1.014.674-4.272-4.271.675-1.013-4.225-3.693,2.269L256,0V32.451Z" transform="translate(-211.776 0)" fill="#ffdf40"/>
                                                <g id="Group_50" data-name="Group 50" transform="translate(35.648 7.575)">
                                                    <path id="Path_36" data-name="Path 36" d="M144.576,123.152a8.576,8.576,0,1,1,8.576-8.576A8.585,8.585,0,0,1,144.576,123.152Z" transform="translate(-136 -106)" fill="#ffbe40"/>
                                                </g>
                                                <path id="Path_37" data-name="Path 37" d="M264.576,114.576A8.585,8.585,0,0,0,256,106v17.152A8.585,8.585,0,0,0,264.576,114.576Z" transform="translate(-211.776 -98.425)" fill="#ffbe40"/>
                                                <path id="Path_39" data-name="Path 39" d="M256,190.885l3.974-3.974-1.516-1.516L256,187.853Z" transform="translate(-211.776 -172.146)" fill="#ffbe40"/>
                                                <g id="Group_51" data-name="Group 51" transform="translate(40.25 13.249)">
                                                    <path id="Path_38" data-name="Path 38" d="M203.3,191.957l-2.9-2.9,1.516-1.516,1.386,1.386,3.53-3.53,1.516,1.516Z" transform="translate(-200.395 -185.395)" fill="#ffdf40"/>
                                                </g>
                                            </g>
                                        </svg>

                                    </div>
                                </div>

                            </div>
                            <div class="status-bar col-md-2">
                                <p class="status">Status:</p>
                                <p class="status-type progress-green">In progress</p>
                            </div>
                            <div class="progress-bar-tal col-md-1">
                                <div class="progress-style" id="progress3"></div>
                                <p class="persantage-status">64%</p>
                            </div>
                            <div class="remain-time col-md-2">
                                <h6>18 <small>D</small> 12 <small>h</small></h6>
                                <p>Remaining</p>
                            </div>
                            <div class="price col-md-2">
                                <h2>50,00000</h2>
                                <p>LKR</p>
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

<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
        // spaceBetween: -100,
        autoplay: 3000,
        loop: true,
        slidesPerView: 10,
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
            },
            1200: {
                slidesPerView: 8,
            },
            1820: {
                slidesPerView: 13,
            },
        },
    });
</script>

<!-- hammer js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<!-- Optional JavaScript -->
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
></script>
<!-- Theame JS  -->
<script src="js/main.js"></script>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"
></script>
<script src="plugin/dist/js/anim-trap.js"></script>
<script src="plugin/dist/js/anim-scroll.js"></script>
<script src="plugin/chart/echarts.min.js"></script>
<script>
    ANIMSCROLL.init({
        easing: "ease-in-out-sine",
    });

    $(document).ready(function () {
        $(".rain").makeitsRain();
    });
</script>
</body>
</html>
