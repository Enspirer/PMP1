@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/my_profile.css') }}">
@endpush

@section('content')



    <section class="dashboard-body">
            <div class="page-wrapper chiller-theme toggled">
                <main class="page-content">
                    
                    @if(have_my_profile() != null)
                        <div class="dashboard-nav container-fluid" style="top: 65px;!important;">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="nav nav-pill" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="portfolio-tab" data-bs-toggle="tab" data-bs-target="#portfolio" type="button" role="tab" aria-controls="portfolio" aria-selected="false">Portfolio</a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="portfolio" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                
                            </div>

                            <div class="tab-content" id="pills-tabContent">


                                <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">

                                    @include('frontend.user.my_profile.tabs_pages.overview')
                                    
                                </div>


                                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                    @include('frontend.user.my_profile.tabs_pages.about')
                                </div>


                                <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">

                                    @include('frontend.user.my_profile.tabs_pages.portfolio')

                                </div>

                                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">

                                    @include('frontend.user.my_profile.tabs_pages.settings')

                                </div>


                            </div>
                        </div>

                    @else
                        
                    @endif
                </main>
                <!-- page-content" -->
            </div>
            <!-- page-wrapper -->
        </section>


    @if(\Session::has('success'))

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary invisible" id="info-btn" data-toggle="modal" data-target="#exampleModal"></button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body" style="padding: 5rem 1rem;">
                        <h4 class="mb-0 text-center">Your information updated successfully.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif



@endsection


@push('after-scripts')
    <script>
        if(document.getElementById("info-btn")){
            $('#info-btn').click();
        }
    </script>
@endpush






