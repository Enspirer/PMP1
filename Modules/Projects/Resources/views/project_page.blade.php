@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('projects::includes.project_page.project_header')
        <div class="body-section-single-project">
            <div class="container">
                <div class="row">
                    <div class="left col-md-8">
                       @include('projects::includes.project_page.project_description')

                        <h2 class="title-skill">Skill Set</h2>
                        <div class="row-skill row">
                            <button>Ui / UX expertise</button>
                            <button>PHP </button>
                            <button>HTML / CSS</button>
                        </div>

                        @auth
                             @include('projects::includes.project_page.project_scopre')
                        @else

                        @endauth
                    </div>
                    <div class="right col-md-4">

                        @auth
                             <a href="{{route('frontend.apply_project',1)}}" class="apply-button" style="margin: 10px 0;">APPLY TO THIS PROJECT</a><br><br>
                            <button class="save-button">
                                <i class="fa fa-heart" aria-hidden="true"></i> SAVE PROJECT
                            </button>
                        @else
                            <a href="{{route('frontend.auth.login')}}" class="apply-button" style="margin: 10px 0;">APPLY TO THIS PROJECT</a>
                        @endauth


                        <div class="right-card">
                            @include('projects::includes.project_page.estimete_projects')
                        </div>

                        @auth
                            @include('projects::includes.project_page.company_details')
                        @else

                        @endauth

                        <div class="bottum-buttons">
                            <button class="button">
                                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report this project
                            </button>
                            <button class="button">
                                <i class="fa fa-share-alt" aria-hidden="true"></i> Share this project
                            </button>
                        </div>
                    </div>
                </div>
                @include('projects::includes.project_page.suggest_more_project')
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')

@endpush





