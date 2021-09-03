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
                        <div class="container-fluid" style="top: 65px;!important;">

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Launch demo modal
                            </button>

                                <!-- Modal -->
                            <form action="{{ route('frontend.user.profile_store') }}" method="POST">
                                {{csrf_field()}}
                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
                                    <div class="modal-dialog" style="max-width: 50%;">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="profile_name">Profile Name</label>
                                                <input type="text" class="form-control" id="profile_name" aria-describedby="profile_name" name="profile_name">
                                            </div>

                                            <div class="form-group">
                                                <label for="profile_description">Profile Description</label>
                                                <textarea class="form-control" name="profile_description" id="profile_description" rows="7"></textarea>
                                            </div>

                                            <!-- <div class="form-group specialized">
                                                <label for="title">Specialized On</label>
                                                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" onclick="addSpecial()" style="background-color:#e3dfde; padding:13px;"></i>

                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <h6 class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col-10 pr-0">
                                                                    <input type="text" class="form-control" aria-describedby="title" name="special[]">
                                                                </div>
                                                                <div class="col-1 p-0 text-right">
                                                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#special1" aria-expanded="true">
                                                                    <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-1 p-0 text-center">
                                                                    <i class="fas fa-pen rounded-pill text-muted deleteSpecial" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                                </div>
                                                            </div>
                                                        </h6>
                                                        <div id="special1" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                                            <div class="accordion-body">
                                                                <textarea class="form-control" name="special_description[]" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label for="company_size">Company Size</label>
                                                <input type="text" class="form-control" id="company_size" aria-describedby="company_size" name="company_size">
                                            </div>

                                            <div class="form-group skills">
                                                <label for="skill_set">Skill Set</label>
                                                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" onclick="addSkills()" style="background-color:#e3dfde; padding:13px;"></i>


                                                <div class="row align-items-center">
                                                    <div class="col-11 pr-0">
                                                        <input type="text" class="form-control" id="skill_set1" aria-describedby="skill_set" name="skill_set[]">
                                                    </div>
                                                    <div class="col-1 p-0 text-center">
                                                        <i class="fas fa-pen rounded-pill text-muted deleteSkills" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group license">
                                                <label for="title">License & Certifications</label>
                                                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" onclick="addLicense()" style="background-color:#e3dfde; padding:13px;"></i>

                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <h6 class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col-10 pr-0">
                                                                    <input type="text" class="form-control" aria-describedby="license1" name="license1">
                                                                </div>
                                                                <div class="col-1 p-0 text-right">
                                                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#license1" aria-expanded="true" aria-controls="collapseOne">
                                                                    <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-1 p-0 text-center">
                                                                    <i class="fas fa-pen rounded-pill text-muted deleteLicense" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                                </div>
                                                            </div>
                                                        </h6>
                                                        <div id="license1" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                                            <div class="accordion-body">
                                                                <textarea class="form-control" name="license1_description" id="profile_description" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group awards">
                                                <label for="title">Awards & Badges</label>
                                                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" onclick="addAwards()" style="background-color:#e3dfde; padding:13px;"></i>

                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <h6 class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col-10 pr-0">
                                                                    <input type="text" class="form-control" aria-describedby="awards1" name="awards1">
                                                                </div>
                                                                <div class="col-1 p-0 text-right">
                                                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#awards1" aria-expanded="true" aria-controls="collapseOne">
                                                                    <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-1 p-0 text-center">
                                                                    <i class="fas fa-pen rounded-pill text-muted deleteAwards" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                                </div>
                                                            </div>
                                                        </h6>
                                                        <div id="awards1" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                                            <div class="accordion-body">
                                                                <textarea class="form-control" name="awards1_description" id="profile_description" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group others">
                                                <label for="title">Other Experties</label>
                                                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" onclick="addOthers()" style="background-color:#e3dfde; padding:13px;"></i>

                                                <div class="accordion">
                                                    <div class="accordion-item">
                                                        <h6 class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col-10 pr-0">
                                                                    <input type="text" class="form-control" aria-describedby="others1" name="others1">
                                                                </div>
                                                                <div class="col-1 p-0 text-right">
                                                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#others1" aria-expanded="true" aria-controls="collapseOne">
                                                                    <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-1 p-0 text-center">
                                                                    <i class="fas fa-pen rounded-pill text-muted deleteOthers" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                                </div>
                                                            </div>
                                                        </h6>
                                                        <div id="others1" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                                            <div class="accordion-body">
                                                                <textarea class="form-control" name="others1_description" id="profile_description" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> -->

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            
                                            <button type="submit" class="btn btn-primary">Agree</button>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    @endif
                </main>
                <!-- page-content" -->
            </div>
            <!-- page-wrapper -->
        </section>



@endsection


@push('after-scripts')
<!-- <script type="text/javascript">
    let special = 2;
    function addSpecial() {
        let template = `<div class="accordion">
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <div class="row align-items-center">
                            <div class="col-10 pr-0">
                                <input type="text" class="form-control" aria-describedby="title" name="special[]">
                            </div>
                            <div class="col-1 p-0 text-right">
                                <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#special${special}" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                </a>
                            </div>
                            <div class="col-1 p-0 text-center">
                                <i class="fas fa-pen rounded-pill text-muted deleteSpecial" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                            </div>
                        </div>
                    </h6>
                    <div id="special${special}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <textarea class="form-control" name="special_description[]" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>`
        $('.specialized').append(template);
        special++;

        $('.deleteSpecial').on('click', function() {
            $(this).parents('.accordion').remove();
        })
    }

    $('.deleteSpecial').on('click', function() {
            $(this).parents('.accordion').remove();
        })

</script>


<script>
    let skills = 2;

    function addSkills() {
        let template = `<div class="row align-items-center">
                            <div class="col-11 pr-0">
                                <input type="text" class="form-control" id="skill_set${skills}" aria-describedby="skill_set" name="skill_set[]">
                            </div>
                            <div class="col-1 p-0 text-center">
                                <i class="fas fa-pen rounded-pill text-muted deleteSkills" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                            </div>
                        </div>`

        $('.skills').append(template);
        skills++;

        $('.deleteSkills').on('click', function() {
            $(this).parents('.row').remove();
        })
    }

    $('.deleteSkills').on('click', function() {
            $(this).parents('.row').remove();
        })
</script>


<script type="text/javascript">
    let license = 0;
    function addLicense() {
        let template = `<div class="accordion">
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <div class="row align-items-center">
                            <div class="col-10 pr-0">
                                <input type="text" class="form-control" aria-describedby="title" name="title">
                            </div>
                            <div class="col-1 p-0 text-right">
                                <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#license${license}" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                </a>
                            </div>
                            <div class="col-1 p-0 text-center">
                                <i class="fas fa-pen rounded-pill text-muted deleteLicense" type="button" data-bs-toggle="modal" data-bs-target="#specialized_edit" style="background-color:#e3dfde; padding:13px;"></i>
                            </div>
                        </div>
                    </h6>
                    <div id="license${license}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <textarea class="form-control" name="profile_description" id="profile_description" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>`
        $('.license').append(template);
        license++;


        $('.deleteLicense').on('click', function() {
            $(this).parents('.accordion').remove();
        })
    } 

    $('.deleteLicense').on('click', function() {
            $(this).parents('.accordion').remove();
        })    
</script>


<script type="text/javascript">
    let awards = 0;
    function addAwards() {
        let template = `<div class="accordion">
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <div class="row align-items-center">
                            <div class="col-10 pr-0">
                                <input type="text" class="form-control" aria-describedby="title" name="title">
                            </div>
                            <div class="col-1 p-0 text-right">
                                <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#awards${awards}" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                </a>
                            </div>
                            <div class="col-1 p-0 text-center">
                                <i class="fas fa-pen rounded-pill text-muted deleteAwards" type="button" data-bs-toggle="modal" data-bs-target="#specialized_edit" style="background-color:#e3dfde; padding:13px;"></i>
                            </div>
                        </div>
                    </h6>
                    <div id="awards${awards}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <textarea class="form-control" name="profile_description" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>`

        $('.awards').append(template);
        others++;

        $('.deleteAwards').on('click', function() {
            $(this).parents('.accordion').remove();
        })
    } 

    $('.deleteAwards').on('click', function() {
            $(this).parents('.accordion').remove();
        }) 
</script>


<script type="text/javascript">
    let others = 0;
    function addOthers() {
        let template = `<div class="accordion">
                <div class="accordion-item">
                    <h6 class="accordion-header">
                        <div class="row align-items-center">
                            <div class="col-10 pr-0">
                                <input type="text" class="form-control" aria-describedby="title" name="title">
                            </div>
                            <div class="col-1 p-0 text-right">
                                <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#others${others}" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-chevron-down rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                </a>
                            </div>
                            <div class="col-1 p-0 text-center">
                                <i class="fas fa-pen rounded-pill text-muted deleteOthers" type="button" data-bs-toggle="modal" data-bs-target="#specialized_edit" style="background-color:#e3dfde; padding:13px;"></i>
                            </div>
                        </div>
                    </h6>
                    <div id="others${others}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            <textarea class="form-control" name="profile_description" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>`
        $('.others').append(template);
        others++;

        $('.deleteOthers').on('click', function() {
            $(this).parents('.accordion').remove();
        })
    }   

    $('.deleteOthers').on('click', function() {
            $(this).parents('.accordion').remove();
        })
</script> -->

@endpush




