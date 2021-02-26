@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <br>
    <section class="dashboard-body">
        <div class="page-wrapper chiller-theme toggled">
            <main class="page-content">
                <div class="dashboard-nav container-fluid">
                    @include('frontend.user.my_projects.main_tab')
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                       @include('frontend.user.my_projects.tabs_pages.active_project_tab')
                    </div>

                    <div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        @include('frontend.user.my_projects.tabs_pages.bids_and_proposals')
                    </div>

                    <div class="tab-pane fade show" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        @include('frontend.user.my_projects.tabs_pages.waiting_to_review')
                    </div>

                    <div class="tab-pane fade show" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
                        @include('frontend.user.my_projects.tabs_pages.completed_projects')
                    </div>

                    <div class="tab-pane fade show" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">
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
        $(function(){
            var hash = window.location.hash;
            hash && $('ul.nav a[href="' + hash + '"]').tab('show');

            $('.nav-tabs a').click(function (e) {
                $(this).tab('show');
                var scrollmem = $('body').scrollTop() || $('html').scrollTop();
                window.location.hash = this.hash;
                $('html,body').scrollTop(scrollmem);
            });
        });
    </script>

@endpush

