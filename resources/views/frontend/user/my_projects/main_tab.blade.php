<ul class="nav nav-pill" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <a onclick="window.history.pushState('Active Projects', 'Active Projects', '{{route('frontend.user.my_projects','active_projects')}}');" class="nav-link  {{ $section ?? '' == "active_projects" ? "active" : "" }}" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"> Active Projects
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a onclick="window.history.pushState('BidsAndProsals', 'Bids and Proposals', '{{route('frontend.user.my_projects','bids_and_proposals')}}');" class="nav-link  {{ $section ?? '' == "bids_and_proposals" ? "active" : "" }}" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"> Bids and Proposals
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a onclick="window.history.pushState('Waiting to Review', 'Waiting to Review', '{{route('frontend.user.my_projects','waiting_to_review')}}');" class="nav-link {{ $section ?? '' == "waiting_to_review" ? "active" : "" }}" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            Waiting to Review
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a onclick="window.history.pushState('Completed Projects', 'Completed Projects', '{{route('frontend.user.my_projects','completed_projects')}}');" class="nav-link {{ $section ?? '' == "completed_projects" ? "active" : "" }}" id="pills-contact2-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            Completed Projects
        </a>
    </li>
    <li class="nav-item" role="presentation">
        <a onclick="window.history.pushState('Draft Projects', 'Draft Projects', '{{route('frontend.user.my_projects','draft_project')}}');" class="nav-link {{ $section ?? '' == "draft_project" ? "active" : "" }}" id="pills-contact3-tab" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
            Draft Projects
        </a>
    </li>
</ul>