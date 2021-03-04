<section class="nav-section sticky">
    <nav class="navbar-main navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="logo-left-side-bar" style="width: 250px;">

                    <a class="navbar-brand" href="#" style="display: flex;margin: auto;"><img src="{{url('theme_light/assets/image/logotext.png')}}" alt="" width="160px" style="width: 110px;margin: auto;"></a>
            </div>


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
            <div class="collapse navbar-collapse" id="navbaryNav">
                <div class="ml-auto row">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">
                                Home <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">Explore</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.user.dashboard')}}">Dashboard</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                        <div class="user-menu-wrap">
                            <a class="mini-photo-wrapper-notification" href="#" onclick="myFunction1(event)">

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

                            <div class="menu-container-notofication" id="menu-container-notofication">
                                <ul class="user-menu-notifiaction">
                                    <div class="profile-highlight">
                                        <img
                                                src="https://images.unsplash.com/photo-1578976563986-fb8769ab695e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80"
                                                alt="profile-img"
                                                width="36"
                                                height="36"
                                        />
                                        <div class="details">
                                            <div id="profile-name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                            <div id="profile-footer">Team Hallaway</div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <div class="user-menu-wrap">
                            <a class="mini-photo-wrapper" href="#" onclick="myFunction2(event)">
                                <img
                                        class="mini-photo"
                                        src="{{ $logged_in_user->picture}}"
                                        width="36"
                                        height="36"
                                />
                            </a>

                            <div class="menu-container" id="menu-container">
                                <ul class="user-menu">
                                    <div class="profile-highlight">
                                        <img
                                                src="{{ $logged_in_user->picture}}"
                                                alt="profile-img"
                                                width="36"
                                                height="36"
                                        />
                                        <div class="details">
                                            <a href="{{route('frontend.user.account')}}">
                                                <div id="profile-name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                                <div id="profile-footer">{{auth()->user()->company_name}}</div>
                                            </a>

                                        </div>
                                    </div>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.user.my_projects','active_projects')}}">
                                            <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                            <div>Dashboard</div>
                                        </a>
                                    </li>

                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.user.my_projects','active_projects')}}">
                                            <i class="fa fa-tachometer" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                            <div>My Projects</div>
                                        </a>
                                    </li>
                                    <li class="user-menu__item">
                                        <a class="user-menu-link" href="{{route('frontend.user.my_projects','active_projects')}}">
                                            <i class="fa fa-cog" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                            <div>Account Settings</div>
                                        </a>
                                    </li>
{{--                                    <li class="user-menu__item">--}}
{{--                                        <a class="user-menu-link" href="#">--}}
{{--                                            <img--}}
{{--                                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1604623/team.png"--}}
{{--                                                    alt="team_icon"--}}
{{--                                                    width="20"--}}
{{--                                                    height="20"--}}
{{--                                            />--}}
{{--                                            <div>Logout</div>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li class="user-menu__item">
                                        <a class="user-menu-link"  href="{{route('frontend.auth.logout')}}">
                                            <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                            <div>Logout</div>
                                        </a>
                                    </li>
{{--                                    <div class="footer">--}}
{{--                                        <li class="user-menu__item">--}}
{{--                                            <a--}}
{{--                                                    class="user-menu-link"--}}
{{--                                                    href="{{route('frontend.auth.logout')}}"--}}
{{--                                                    style="color: #f44336"--}}
{{--                                            >Logout</a--}}
{{--                                            >--}}
{{--                                        </li>--}}
{{--                                        <li class="user-menu__item">--}}
{{--                                            <a class="user-menu-link" href="{{route('frontend.user.account')}}">Settings</a>--}}
{{--                                        </li>--}}
{{--                                    </div>--}}
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
