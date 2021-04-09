<body>
    <section class="nav-section">
        <nav class="navbar-main navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" style="position: absolute" href="{{url('/')}}">

                    <div class="" style="background-image:url('{{url('theme_light/assets/image/logotext.png')}}');height: 100px;background-size: contain;width: 130px;background-position: center;background-repeat: no-repeat;"></div>
                </a>
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
                                <a class="nav-link" href="{{route("frontend.expert_center")}}">Expert Centre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.blog','all')}}">Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('frontend.contact_us')}}">Contact Us</a>
                            </li>

                            @auth()

                            <div class="user-menu-wrap">
                                <a class="mini-photo-wrapper" href="#" onclick="myFunction2(event)">
                                    <img class="mini-photo" src="{{ $logged_in_user->picture }}" width="36" height="36" />
                                </a>

                                <div class="menu-container" id="menu-container">
                                    <ul class="user-menu">
                                        <div class="profile-highlight">
                                            <img src="{{ $logged_in_user->picture }}" alt="profile-img" width="36" height="36" />
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
                                            <a class="user-menu-link" href="{{route('frontend.user.my_projects','active_projects')}}">
                                                <i class="fa fa-tachometer" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>My Projects</div>
                                            </a>
                                        </li>
                                        <li class="user-menu__item">
                                            <a class="user-menu-link" href="{{route('frontend.user.account')}}">
                                                <i class="fa fa-cog" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>Account Settings</div>
                                            </a>
                                        </li>
                                        <li class="user-menu__item">
                                            <a class="user-menu-link" href="{{route('frontend.auth.logout')}}">
                                                <i class="fa fa-sign-out" aria-hidden="true" style="font-size: 20px;color: #4e555b"></i>
                                                <div>Logout</div>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            @else
                            <li class="nav-item">
                                <a class="nav-link-join nav-link" href="{{route('frontend.auth.register')}}">Join</a>
                            </li>
                            @endauth

                        </ul>
                        @auth
                        <a href="{{route('frontend.user.post_project')}}" class="post_job" type="button" class="btn btn-primary">Post a Project</a>
                        @else
                        <a href="{{route('frontend.auth.login')}}" class="post_job" type="button" class="btn btn-primary">Post a Project</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <div class="menu-container">
            <div class="container">
                <div class="menu">
                    <ul class="clearfix">
                        <li>
                            <a class="main-menu-item" href="#">Explore</a>
                            <ul style="padding: 0; background: #fff; box-shadow: inset 6px 36px 30px -30px #00000029;">
                                <li style="background: #f1f1f1;box-shadow: inset 6px 36px 30px -30px #00000029,  inset -20px 7px 28px -20px #00000029;filter: drop-shadow(0px 10px 25px #00000029) drop-shadow(inset 6px 26px 30px 30px #00000029);">
                                    <ul>
                                        <li id="li1" onmouseover="changecv('1')">
                                            <a href="#">
                                                <div class="row m-0">
                                                    <h6 style="line-height: 1; margin: 0">
                                                        Post a Job
                                                    </h6>
                                                    <i id="icon01" class="fa fa-angle-right" style=" margin-left: auto; font-size: 22px; margin-top: -1px; " aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li id="li2" onmouseover="changecv('2')">
                                            <a href="#">
                                                <div class="row m-0">
                                                    <h6 style="line-height: 1; margin: 0">
                                                        Find a Project
                                                    </h6>
                                                    <i id="icon02" class="fa fa-angle-right" style=" margin-left: auto; font-size: 22px; margin-top: -1px; display: none;" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li id="li3" onmouseover="changecv('3')">
                                            <a href="#">
                                                <div class="row m-0">
                                                    <h6 style="line-height: 1; margin: 0">
                                                        How it works
                                                    </h6>
                                                    <i id="icon03" class="fa fa-angle-right" style="margin-left: auto;font-size: 22px;margin-top: -1px;display: none;" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li id="li4" onmouseover="changecv('4')">
                                            <a href="#">
                                                <div class="row m-0">
                                                    <h6 style="line-height: 1; margin: 0">
                                                        Become a Partner
                                                    </h6>
                                                    <i id="icon04" class="fa fa-angle-right" style="margin-left: auto;font-size: 22px;margin-top: -1px;display: none;" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="0101" style="width: 45%; padding: 30px 10px 30px 30px !important">
                                    <h3>Find the Best Global Talent for your next Project</h3>
                                    <br>
                                    <p class="desc">
                                        Prepare comprehensive project plan and post on Tallentor <br>
                                        You will receive instant quotes form agencies <br>
                                        Evaluate and Hire the best talent. <br>
                                        Getting the job done, made so effective with Tallentor

                                    </p>
                                    <br>
                                    <a href="{{route('frontend.auth.login')}}" style="padding: 0;">
                                        <div class="row m-0">
                                            <p>Learn More</p>
                                            <i class="fa fa-angle-right" style="margin-top: -2px;color: #0f9d58;" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li id="img0101" style=" display: none; padding: 30px 10px 30px 30px !important;">
                                    <img src="{{url('theme_light/assets/inner/post a project.jpg')}}" style="width: 100%; height: 180px; object-fit: cover" alt="">
                                </li>

                                <li id="0102" style="display: none;width: 45%; padding: 30px 10px 30px 30px !important">
                                    <h3>Stay tuned to Tallentor, you will never miss that project you desire.
                                    </h3>
                                    <br>
                                    <p class="desc">
                                        Get registered as an agency under your expert category <br>
                                        Tallentor will notify the projects that matches your skill set <br>
                                        You may also browse through the categories that you are interested in.


                                    </p>
                                    <br>
                                    <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}" style="padding: 0;">
                                        <div class="row m-0">
                                            <p>Learn More</p>
                                            <i class="fa fa-angle-right" style="margin-top: -2px;color: #0f9d58;" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li id="img0102" style=" display: none; padding: 30px 10px 30px 30px !important;">
                                    <img src="{{url('theme_light/assets/inner/find a job.jpg')}}" style="width: 100%; height: 180px; object-fit: cover" alt="">
                                </li>

                                <li id="0103" style="display: none;width: 45%;padding: 30px 10px 30px 30px !important;">

                                    <br />
     
                                    <br />
                                    <a href="#" style="padding: 0;">
                                        <div class="row m-0">
                                            <p>a)  &nbsp;&nbsp;     Post a job as a Standard Project</p>
                                        </div>
                                    </a>

<br>
                                    <a href="#" style="padding: 0;">
                                        <div class="row m-0">
                                            <p>b)  &nbsp;&nbsp;     Post a job with the Expert Project Plan (Hire the Expert Centre)</p>
                                        </div>
                                    </a>

<br><br>
<a href="{{route("frontend.expert_center")}}" style="padding: 0;">
                                        <div class="row m-0">
                                            <p>Learn More</p>
                                            <i class="fa fa-angle-right" style="margin-top: -2px;color: #0f9d58;" aria-hidden="true"></i>
                                        </div>
                                    </a>

                                </li>
                                <li id="img0103" style=" display: none; padding: 30px 10px 30px 30px !important;">
                                    <img src="{{url('theme_light/assets/inner/how it works.jpg')}}" style="width: 100%; height: 180px; object-fit: cover" alt="">
                                </li>
                                <li id="0104" style="display: none;width: 45%;padding: 30px 10px 30px 30px !important;">
                                    <h3>Tallentor Global Partner Program</h3>
                                    <br />
                                    <p class="desc">
                                        We are delighted to invite Business Partners from around the world to join the fastest growing Talent Marketplace

                                    </p>
                                    <br />
                                    <a href="{{route('frontend.become_a_partner')}}" style="padding: 0;">
                                        <div class="row m-0">
                                            <p>Learn More</p>
                                            <i class="fa fa-angle-right" style="margin-top: -2px;color: #0f9d58;" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </li>
                                <li id="img0104" style=" display: none; padding: 30px 10px 30px 30px !important;">
                                    <img src="{{url('theme_light/assets/inner/partnerus-01.jpg')}}" style="width: 100%; height: 180px; object-fit: cover" alt="">
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="main-menu-item" href="{{route('frontend.project_auction',1)}}">Auctions</a>
                        </li>
                        <li>
                            <a class="main-menu-item" href="{{route('frontend.tenders.index')}}">Tenders</a>
                        </li>
                        <li>
                            <a class="main-menu-item" href="{{route('frontend.shop.index')}}">e-Shop</a>
                        </li>
                        <li>
                            <a class="main-menu-item" href="{{route('frontend.academy.index')}}">Acadamy</a>
                        </li>
                        <!-- <li>
                            <a class="main-menu-item" href="#">Tenders</a>
                            <ul>
                                <li><a href="#">Today</a></li>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="#">Sport</a></li>
                            </ul>

                            
                        </li> -->
                   

                        <!-- <li>
                            <a class="main-menu-item" href="#">Academy</a>
                            <ul style="padding: 0">
                                <li style="background: #f1f1f1;box-shadow: inset 6px 36px 30px -30px #00000029,inset -20px 7px 28px -20px #00000029; filter: drop-shadow(0px 10px 25px #00000029)drop-shadow(inset 6px 26px 30px 30px #00000029);">
                                    <ul>
                                        <li onclick="changecv2('1')">
                                            <a href="#">Lidership</a>
                                        </li>
                                        <li onclick="changecv2('2')"><a href="#">History</a></li>
                                        <li onclick="changecv2('3')">
                                            <a href="#">Locations</a>
                                        </li>
                                        <li onclick="changecv2('4')"><a href="#">Careers</a></li>
                                    </ul>
                                </li>
                                <li id="0201" style="width: 45%; padding: 30px 10px 30px 30px !important">
                                    <h3>Lorem Ipsum project</h3>
                                    <br>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                    </p>
                                    <br>
                                    <div class="row m-0">
                                        <p>Learn More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li id="0202" style="padding: 30px 10px 30px 30px !important">
                                    <img src="{{url('theme_light/assets/multivendorecommerce.jpg')}}" style="width: 100%; height: 200px; object-fit: cover" alt="">
                                </li>

                                <li id="0203" style="display: none; width: 45%;padding: 30px 10px 30px 30px !important;">
                                    <h3>Lorem Ipsum project2</h3>
                                    <br>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor
                                    </p>
                                    <br>
                                    <div class="row m-0">
                                        <p>Learn More</p>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </li>
                                <li id="0204" style="display: none;padding: 30px 10px 30px 30px !important;">
                                    <img src="{{url('theme_light/assets/erp.jpg')}}" style="width: 100%; height: 200px; object-fit: cover" alt="" />
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>


    </section>