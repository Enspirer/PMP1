<body>
<section class="nav-section">
    <nav class="navbar-main navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" style="position: absolute" href="{{url('/')}}">

                <div class="" style="background-image:url('{{url('theme_light/assets/image/logotext.png')}}');height: 100px;background-size: contain;width: 130px;background-position: center;background-repeat: no-repeat;"></div>
               </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ml-auto row">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("frontend.expert_center")}}">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('frontend.contact_us')}}">Contact Us</a>
                        </li>

                        @auth()

                            <div class="user-menu-wrap">
                                <a class="mini-photo-wrapper" href="#" onclick="myFunction2(event)">
                                    <img class="mini-photo" src="{{ $logged_in_user->picture }}" width="36" height="36"/>
                                </a>

                                <div class="menu-container" id="menu-container">
                                    <ul class="user-menu">
                                        <div class="profile-highlight">
                                            <img
                                                src="{{ $logged_in_user->picture }}"
                                                alt="profile-img"
                                                width="36"
                                                height="36"
                                            />
                                            <div class="details">
                                                <div id="profile-name">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                                                <div id="profile-footer">Team Hallaway</div>
                                            </div>
                                        </div>
                                        <li class="user-menu__item">
                                            <a class="user-menu-link" href="{{route('frontend.user.dashboard')}}">
                                                <i class="fa fa-list-alt" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>Dashboard</div>
                                            </a>
                                        </li>




                                        <li class="user-menu__item">
                                            <a class="user-menu-link" href="#">
                                                <i class="fa fa-tachometer" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>My Projects</div>
                                            </a>
                                        </li>
                                        <li class="user-menu__item">
                                            <a class="user-menu-link" href="#">
                                                <i class="fa fa-cog" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>Account Settings</div>
                                            </a>
                                        </li>
                                        <li class="user-menu__item">
                                            <a class="user-menu-link"  href="{{route('frontend.auth.logout')}}">
                                                <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>Logout</div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

{{--                        <div class='profile'>--}}
{{--                            <div class='avatar' style="margin-bottom: 0px;">--}}
{{--                                <img src='{{ $logged_in_user->picture }}'>--}}
{{--                            </div>--}}
{{--                            <p style="margin-bottom: 0px;text-transform: capitalize;">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</p>--}}
{{--                            <i class="fa fa-caret-down"></i>--}}
{{--                        </div>--}}

{{--                        <div class='profiledropdown'>--}}
{{--                            <ul>--}}
{{--                                <li class='option'> <a href="">Profile</a></li>--}}
{{--                                <li class='option'><a href="">settings</a></li>--}}
{{--                                <li class='option'><a href="">Help</a></li>--}}
{{--                                <li class='divider'></li>--}}
{{--                                <li class='option'><a href="{{route('frontend.auth.logout')}}">Sign out</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}


                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.auth.login')}}">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.auth.register')}}">Join</a>
                            </li>
                        @endauth

                    </ul>
                    @auth
                         <a class="post_job" type="button" class="btn btn-primary">Post a Job</a>
                    @else
                        <a class="post_job" type="button" class="btn btn-primary">Post a Job</a>
                   @endauth
                </div>
            </div>
        </div>
    </nav>
</section>
