<body>
<section class="nav-section">
    <nav class="navbar-main navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" style="position: absolute" href="{{url('/')}}"><img
                    src="{{url('theme_light/assets/image/logonew.png')}}"
                    alt=""
                    width="70px"
                    style="position: absolute; top: -11px"
                /></a>
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
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>

                        @auth()


                        <div class='profile'>
                            <div class='avatar' style="margin-bottom: 0px;">
                                <img src='{{ $logged_in_user->picture }}'>
                            </div>
                            <p style="margin-bottom: 0px;text-transform: capitalize;">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</p>
                            <i class="fa fa-caret-down"></i>
                        </div>

                        <div class='profiledropdown'>
                            <ul>
                                <li class='option'> <a href="">Profile</a></li>
                                <li class='option'><a href="">settings</a></li>
                                <li class='option'><a href="">Help</a></li>
                                <li class='divider'></li>
                                <li class='option'><a href="{{route('frontend.auth.logout')}}">Sign out</a></li>
                            </ul>
                        </div>


                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.auth.login')}}">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.auth.register')}}">Sign Up</a>
                            </li>
                        @endauth

                    </ul>
                    <button type="button" class="btn btn-primary">Post a Job</button>
                </div>
            </div>
        </div>
    </nav>
</section>
