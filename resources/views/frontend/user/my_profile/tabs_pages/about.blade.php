<div class="container">


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">{{ $profile_details-> profile_name }}</h4>
                <i class="fas fa-pen rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#profile_info" style="background-color:#e3dfde; padding:13px;"></i>
            </div>

            <div class="col-1">
                <i class="fas fa-share-alt rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:15px;"></i>
            </div>
        </div>


        <div class="row border rounded py-3 card-db mt-4">
            <div class="col-12" style="text-align:justify">
                <p>{{ $profile_details-> profile_description }}</p>

                <a href="#">Read more...</a>
            </div>
        </div>
    </div>

    @include('frontend.user.my_profile.edit_dialogs.profile_info')


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">Specialized on</h4>
                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#specialized_on" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>

        <form action="{{ route('frontend.user.profile_specialized_update') }}" method="POST">
        {{csrf_field()}}
            <div class="specialized">
                @if(json_decode($profile_details->specialized_on) != null)
                    @foreach(json_decode($profile_details->specialized_on) as $special)
                        <div class="row border rounded py-3 card-db mt-4 mb-3">
                            <div class="col-12">
                            
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="panelsStayOpen-headingOne">
                                            <div class="row align-items-center">
                                                <div class="col-10 p-0">
                                                    <input type="text" class="form-control border-0 font-weight-bold" name="specialization[]" value="{{ $special->name }}">
                                                </div>

                                                <div class="col-2 p-0">
                                                    <div class="row">
                                                        <!-- <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-pen rounded-pill text-muted" type="button" data-bs-toggle="modal" data-bs-target="#specialized_edit" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div> -->
                                                        <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-trash-alt rounded-pill text-muted deleteSpecial" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div>
                                                        <div class="col-4 p-0 text-right">
                                                            <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $special->name) }}" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fas fa-plus rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse{{ str_replace(' ', '', $special->name) }}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                <input type="text" class="form-control border-0" name="specialization_description[]" id="specialization_des" value="{{ $special->description }}"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="row justify-content-end">
                <div class="col-4 text-right">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                </div>
            </div>
        </form>
    </div>

    @include('frontend.user.my_profile.edit_dialogs.specialized_on')
    @include('frontend.user.my_profile.edit_dialogs.specialized_edit')


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">Company Size</h4>
                <i class="fas fa-pen rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#company_size" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>


        <div class="row border rounded py-3 card-db mt-4 align-items-center">
            <div class="col-12">
                <p class="mb-0">{{ $profile_details->company_size }}</p>
            </div>
        </div>
    </div>

    @include('frontend.user.my_profile.edit_dialogs.company_size')


    
    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">Skill set</h4>
                <!-- <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#skills_on" style="background-color:#e3dfde; padding:13px;"></i> -->
                <i class="fas fa-pen rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#skill_set" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>


        <div class="row border rounded py-3 card-db mt-4 align-items-center">
            <div class="col-12">
                <div class="row text-center">
                    @if(json_decode($profile_details->skills) != null)
                        @foreach(json_decode($profile_details->skills) as $skill)
                            <div class="col-2 p-1">
                                <p class="mb-0">{{ $skill }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('frontend.user.my_profile.edit_dialogs.skill_set')


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">License and Certifications</h4>
                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#license_on" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>

        <form action="{{ route('frontend.user.profile_license_update') }}" method="POST">
        {{csrf_field()}}
            <div class="licenses">
                @if(json_decode($profile_details->license_and_certification) != null)
                    @foreach(json_decode($profile_details->license_and_certification) as $license)
                        <div class="row border rounded py-3 card-db mt-4 mb-3">
                            <div class="col-12">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="panelsStayOpen-headingOne">
                                            <div class="row align-items-center">
                                                <div class="col-10 p-0">
                                                    <input type="text" class="form-control border-0 font-weight-bold" name="license[]" value="{{ $license->name }}">
                                                </div>

                                                <div class="col-2 p-0">
                                                    <div class="row">
                                                        <!-- <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-pen rounded-pill text-muted" type="button" data-bs-toggle="modal" data-bs-target="#specialized_edit" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div> -->
                                                        <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-trash-alt rounded-pill text-muted deleteLicense" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div>
                                                        <div class="col-4 p-0 text-right">
                                                            <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $license->name) }}" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fas fa-plus rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse{{ str_replace(' ', '', $license->name) }}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                <input type="text" class="form-control border-0" name="license_description[]" id="license_des" value="{{ $license->description }}"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row justify-content-end">
                <div class="col-4 text-right">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                </div>
            </div>
        </form>

    </div>

    @include('frontend.user.my_profile.edit_dialogs.license')
    @include('frontend.user.my_profile.edit_dialogs.license_edit')


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">Awards and Badges</h4>
                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#awards_on" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>
        <form action="{{ route('frontend.user.profile_awards_update') }}" method="POST">
        {{csrf_field()}}
            <div class="awards">
                @if(json_decode($profile_details->awards_badges) != null)
                    @foreach(json_decode($profile_details->awards_badges) as $awards)
                        <div class="row border rounded py-3 card-db mt-4 mb-3">
                            <div class="col-12">
                                <div class="accordion">
                                    <div class="accordion-item">
                                        <div class="accordion-header" id="panelsStayOpen-headingOne">
                                            <div class="row align-items-center">
                                                <div class="col-10 p-0">
                                                    <input type="text" class="form-control border-0 font-weight-bold" name="awards[]" value="{{ $awards->name }}">
                                                </div>

                                                <div class="col-2 p-0">
                                                    <div class="row">
                                                        <!-- <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-pen rounded-pill text-muted" type="button" data-bs-toggle="modal" data-bs-target="#awards_edit" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div> -->
                                                        <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-trash-alt rounded-pill text-muted deleteAwards" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div>
                                                        <div class="col-4 p-0 text-right">
                                                            <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $awards->name) }}" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fas fa-plus rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse{{ str_replace(' ', '', $awards->name) }}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                <input type="text" class="form-control border-0" name="awards_description[]" id="awards_des" value="{{ $awards->description }}"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="row justify-content-end">
                <div class="col-4 text-right">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                </div>
            </div>
        </form>

    </div>

    @include('frontend.user.my_profile.edit_dialogs.awards')
    @include('frontend.user.my_profile.edit_dialogs.awards_edit')


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">Other Experties</h4>
                <i class="fas fa-plus rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#other_expertise_on" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>

        <form action="{{ route('frontend.user.profile_others_update') }}" method="POST">
        {{csrf_field()}}
            <div class="others">
                @if(json_decode($profile_details->other_experties) != null)
                    @foreach(json_decode($profile_details->other_experties) as $others)
                        <div class="row border rounded py-3 card-db mt-4 mb-3">
                            <div class="col-12">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                    <div class="accordion-header" id="panelsStayOpen-headingOne">
                                            <div class="row align-items-center">
                                                <div class="col-10 p-0">
                                                    <input type="text" class="form-control border-0 font-weight-bold" name="others[]" value="{{ $others->name }}">
                                                </div>

                                                <div class="col-2 p-0">
                                                    <div class="row">
                                                        <!-- <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-pen rounded-pill text-muted" type="button" data-bs-toggle="modal" data-bs-target="#others_edit" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div> -->
                                                        <div class="col-4 p-0 text-right">
                                                            <i class="fas fa-trash-alt rounded-pill text-muted deleteOthers" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                                        </div>
                                                        <div class="col-4 p-0 text-right">
                                                            <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace(' ', '', $others->name) }}" aria-expanded="true" aria-controls="collapseOne">
                                                            <i class="fas fa-plus rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse{{ str_replace(' ', '', $others->name) }}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                <input type="text" class="form-control border-0" name="others_description[]" id="others_des" value="{{ $others->description }}"></input>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="row justify-content-end">
                <div class="col-4 text-right">
                    <button type="submit" class="btn btn-primary px-5">Save</button>
                </div>
            </div>
        </form>

    </div>

    @include('frontend.user.my_profile.edit_dialogs.other_expertise')
    @include('frontend.user.my_profile.edit_dialogs.other_expertise_edit')


    <div class="mb-5">
        <div class="row justify-content-between">
            <div class="col-5">
                <h4 class="d-inline-block mr-3">Client reviews</h4>
            </div>
        </div>


        <div class="row border rounded py-3 card-db mt-4">
            <div class="col-12">
                <h6>Responsive web design lankatiles</h6>

                <div class="stars ">
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>

                    <h6 class="d-inline-block ml-3">5.00</h6>
                    <p class="d-inline-block ml-3 mb-0" style="font-size: 12px;">28 Dec 2020</p>
                </div>

                <p class="mb-0">"great work by Enspirer team.. job well done"</p>
            </div>
        </div>

        <div class="row border rounded py-3 card-db mt-4">
            <div class="col-12">
                <h6>Responsive web design lankatiles</h6>

                <div class="stars ">
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>
                    <i class="fas fa-star me-3 bottom-banner-stars" style="color: #F7FF00"></i>

                    <h6 class="d-inline-block ml-3">5.00</h6>
                    <p class="d-inline-block ml-3 mb-0" style="font-size: 12px;">28 Dec 2020</p>
                </div>

                <p class="mb-0">"great work by Enspirer team.. job well done"</p>
            </div>
        </div>

    </div>


</div>


