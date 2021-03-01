@extends('frontend.user.layout.app')

@section('content')
    <br>
    <section class="dashboard-body">
        <div class="page-wrapper chiller-theme toggled">
            <main class="page-content">
                <div class="dashboard-nav container-fluid">
                    @include('frontend.user.my_projects.main_tab_link')
                </div>
                <div class="dashboard-nav-second container-fluid">
                    <div class="row row-full">
                        <a href="{{route('frontend.user.my_projects','active_projects')}}">
                            <div class="row">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <p>Back</p>
                            </div>
                        </a>

                        <ul class="nav nav-pill" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a  class="nav-link active"  id="pills-home-tab"  data-bs-toggle="pill"  data-bs-target="#pills-home"  type="button"  role="tab"  aria-controls="pills-home"  aria-selected="true">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    Overview
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-task-tab" data-bs-toggle="pill" data-bs-target="#pills-task" type="button" role="tab" aria-controls="pills-task" aria-selected="false">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Task
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-message-tab" data-bs-toggle="pill" data-bs-target="#pills-message" type="button" role="tab" aria-controls="pills-message" aria-selected="false">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    Messages
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a  class="nav-link"  id="pills-attachment-tab"  data-bs-toggle="pill"  data-bs-target="#pills-attachment"  type="button"  role="tab"  aria-controls="pills-attachment"  aria-selected="false">
                                    <i class="fa fa-paperclip" aria-hidden="true"></i>
                                    Attachments
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-note-tab" data-bs-toggle="pill" data-bs-target="#pills-note" type="button" role="tab" aria-controls="pills-note" aria-selected="false">
                                    <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                    Notes
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-log-tab" data-bs-toggle="pill" data-bs-target="#pills-log" type="button" role="tab" aria-controls="pills-log" aria-selected="false">
                                    <i class="fa fa-history" aria-hidden="true"></i>
                                    Activity Log
                                </a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-brief-tab" data-bs-toggle="pill" data-bs-target="#pills-brief" type="button" role="tab" aria-controls="pills-brief" aria-selected="false">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    Project Brief
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr/>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        @include('frontend.user.my_projects.tabs_pages.project_page_tabs.overview_tab')
                    </div>

                    <div class="tab-pane fade show" id="pills-task" role="tabpanel" aria-labelledby="pills-task-tab">
                        @include('frontend.user.my_projects.tabs_pages.project_page_tabs.task_list_tab')
                    </div>

                    <div class="tab-pane fade show" id="pills-message" role="tabpanel" aria-labelledby="pills-message-tab">
                        @include('frontend.user.my_projects.tabs_pages.project_page_tabs.messages_tab')
                    </div>

                    <div class="tab-pane fade show" id="pills-attachment" role="tabpanel" aria-labelledby="pills-attachment-tab">
                       @include('frontend.user.my_projects.tabs_pages.project_page_tabs.attachments_tab')
                    </div>

                    <div class="tab-pane fade show" id="pills-note" role="tabpanel" aria-labelledby="pills-note-tab">
                        @include('frontend.user.my_projects.tabs_pages.project_page_tabs.personal_notes')
                    </div>

                    <div class="tab-pane fade show" id="pills-log" role="tabpanel" aria-labelledby="pills-log-tab">
                        @include('frontend.user.my_projects.tabs_pages.project_page_tabs.activitry_logs_tab')

                    </div>

                    <div class="tab-pane fade show" id="pills-brief" role="tabpanel" aria-labelledby="pills-brief-tab">
                        @include('frontend.user.my_projects.tabs_pages.project_page_tabs.project_breaf')
                    </div>
                </div>
            </main>
        </div>
    </section>

    @push('after-scripts')
    <script
            type="text/javascript"
            charset="utf8"
            src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script>
        tinymce.init({
            selector: "#mytextarea",
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#table_id").DataTable();
            $("#table_id").DataTable();
            $("#table_id_task").DataTable();
            $("#table_id_attachment").DataTable();
        });
    </script>
    @endpush


@endsection

@push('after-script')

@endpush
