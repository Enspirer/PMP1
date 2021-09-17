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


                            </div>
                        </div>

                    @else
                        
                    @endif
                </main>
                <!-- page-content" -->
            </div>
            <!-- page-wrapper -->
        </section>



@endsection






