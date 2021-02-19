<body>
<section class="nav-section">
    <nav class="navbar-main navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                            fdsdfasf
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
