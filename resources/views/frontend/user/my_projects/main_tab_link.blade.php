<ul class="nav nav-pill" id="pills-tab">
    <li class="nav-item" role="presentation">
        <a href="{{route('frontend.user.my_projects','active_projects')}}" class="nav-link" id="pills-home-tab"  aria-selected="true"> Active Projects
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('frontend.user.my_projects','bids_and_proposals')}}" class="nav-link  " id="pills-profile-tab"aria-selected="false"> Bids and Proposals
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('frontend.user.my_projects','waiting_to_review')}}" class="nav-link " id="pills-contact-tab" aria-selected="false">
            Waiting to Review
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('frontend.user.my_projects','completed_projects')}}" class="nav-link " id="pills-contact2-tab" aria-selected="false">
            Completed Projects
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a href="{{route('frontend.user.my_projects','draft_project')}}" class="nav-link " id="pills-contact3-tab"  aria-selected="false">
            Draft Projects
        </a>
    </li>
</ul>