@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <br>
    <section class="dashboard-body">
        <div class="page-wrapper chiller-theme toggled">
            <main class="page-content">
                <div class="dashboard-nav container-fluid" style="top: 65px;!important;">
                    @include('frontend.user.my_projects.main_tab')
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show {{ $section == "active_projects" ? "active" : "" }}" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                       @include('frontend.user.my_projects.tabs_pages.active_project_tab')
                    </div>

                    <div class="tab-pane fade show {{ $section == "bids_and_proposals" ? "active" : "" }}" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        @include('frontend.user.my_projects.tabs_pages.bids_and_proposals')
                    </div>

                    <div class="tab-pane fade show {{ $section == "waiting_to_review" ? "active" : "" }}" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        @include('frontend.user.my_projects.tabs_pages.waiting_to_review')
                    </div>

                    <div class="tab-pane fade show {{ $section == "completed_projects" ? "active" : "" }}" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
                        @include('frontend.user.my_projects.tabs_pages.completed_projects')
                    </div>

                    <div class="tab-pane fade show {{ $section == "draft_project" ? "active" : "" }}" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">
                       @include('frontend.user.my_projects.tabs_pages.draft_project')
                    </div>
                </div>
            </main>
            <!-- page-content" -->
        </div>
        <!-- page-wrapper -->
    </section>
@endsection

@push('after-scripts')



<script>
    function ChangeUrl(title, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = { Title: title, Url: url };
            history.pushState(obj, obj.Title, obj.Url);
        } else {
            alert("Browser does not support HTML5.");
        }
    }
</script>


<script>
    var Gradient = '<defs><linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="#12C2E9"/><stop offset="50%" stop-color="#2989d8"/><stop offset="100%" stop-color="#7db9e8"/></linearGradient></defs>';
    var bar1 = new ProgressBar.Circle(progress1, {
        strokeWidth: 17,
        easing: 'easeInOut',
        duration: 1400,
        color: 'url(#gradient)',
        trailColor: '#eee',
        trailWidth: 2,
        svgStyle: null
    });
    bar1.svg.insertAdjacentHTML('afterbegin', Gradient);
    bar1.animate(1.0);

    var bar2 = new ProgressBar.Circle(progress2, {
        strokeWidth: 17,
        easing: 'easeInOut',
        duration: 1400,
        color: 'url(#gradient)',
        trailColor: '#eee',
        trailWidth: 1,
        svgStyle: null
    });
    bar2.svg.insertAdjacentHTML('afterbegin', Gradient);
    bar2.animate(1.0);

    var bar3 = new ProgressBar.Circle(progress3, {
        strokeWidth: 17,
        easing: 'easeInOut',
        duration: 1400,
        color: 'url(#gradient)',
        trailColor: '#eee',
        trailWidth: 1,
        svgStyle: null
    });
    bar3.svg.insertAdjacentHTML('afterbegin', Gradient);
    bar3.animate(1.0);

    window.onclick = function () {
        document.getElementById("menu-container").classList.remove("active");
        document.getElementById("menu-container-notofication").classList.remove("active");
    };
</script>


@endpush

