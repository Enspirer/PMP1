<nav id="sidebar" class="sidebar-wrapper" style="margin-top: -7px;!important;">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#">DASHBOARD</a>
            <div id="close-sidebar">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-header">
            <div class="user-pic">
                <div
                        class="user-avatar -medium -online-bubble"
                        style="
                    background-image: url('{{ $logged_in_user->picture }}');
                  "
                ></div>
            </div>
            <div class="user-info">
                @if(auth()->user()->company_name)
                    <span class="user-name">{{auth()->user()->company_name}} </span>
                @else
                    <span class="user-name">{{auth()->user()->first_name}} {{auth()->user()->last_name}} </span>
                @endif

                <span class="user-role"
                ><i class="fa fa-star" aria-hidden="true"></i>4.7 Star</span
                >
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>

                @if(account_type() == 'buyer')
                    
                    <li>
                        <a href="{{route('frontend.user.my_projects','active_projects')}}">
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            <span>My Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('frontend.user.my_projects','active_projects')}}">
                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                            <span>My Bids</span>
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
                            <i class="fa fa-times" aria-hidden="true"></i>
                            <span>Project Cancellations</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('frontend.auth.logout')}}">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Log out</span>
                        </a>
                    </li>

                @elseif (account_type() == 'seller')
                    @if(have_my_profile() != null)
                        <li>
                            <a href="{{route('frontend.user.my_profile')}}" id="my_profile">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="#" type="button" data-toggle="modal" data-target="#myModal" id="modal-btn">
                                <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                <span>My Profile</span>
                            </a>
                        </li>

                    @endif
                    <li>
                        <a href="{{route('frontend.user.dashboard')}}">
                            <i class="far fa-sticky-note" aria-hidden="true"></i>
                            <span>Summary</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('frontend.user.post_project')}}">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            <span>Post a Project</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('frontend.user.my_projects','active_projects')}}">
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
                        <a href="{{route('frontend.auth.logout')}}">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>Log out</span>
                        </a>
                    </li>

                @endif


            </ul>
        </div>
    </div>
</nav>
