@extends('frontend.user.layout.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

    <main class="page-content">
        <div class="dashboard-nav container-fluid">
            <ul class="nav nav-pill" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="true">
                        Contact Info
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-password-tab" data-bs-toggle="pill" data-bs-target="#pills-password" type="button" role="tab" aria-controls="pills-password" aria-selected="false">
                        Password & Security
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-notification-tab" data-bs-toggle="pill" data-bs-target="#pills-notification" type="button" role="tab" aria-controls="pills-notification" aria-selected="false">
                        Notification Settings
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-linked-tab" data-bs-toggle="pill" data-bs-target="#pills-linked" type="button" role="tab" aria-controls="pills-linked" aria-selected="false">
                        Linked Accounts
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a  class="nav-link"  id="pills-terms-tab"  data-bs-toggle="pill"  data-bs-target="#pills-terms"  type="button"  role="tab"  aria-controls="pills-terms"  aria-selected="false">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="container">
                    @include('frontend.user.account.tabs.account_info_section')

                    <div class="account-deactivation card-db p-20">
                        <h6>Account Deactivation</h6>
                        <div class="what-happen">
                            <h5>What happens when you deactivate account</h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dit, sit amet, consetetur</li>
                                <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dit, sit amet, consetetur</li>
                                <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dit, sit amet, consetetur</li>
                                <li>See our <a href="#" class="red-terms">Terms and Conditions</a></li>
                            </ul>
                            <div class="deactivate-form">
                                <div class="row">
                                    <div class="left-account col-md-2">
                                        <p>User ID</p>
                                    </div>
                                    <div class=" col-md-10">
                                        <select class="form-control">
                                            <option>Turn on vacation mood for...</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="left-account col-md-2">
                                        <p>Tell us more (optional)</p>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn-diactivate btn btn-primary">Deactivate my account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                @include('frontend.user.account.tabs.change_password_section')
            </div>

            <div class="tab-pane fade show" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">
               @include('frontend.user.account.tabs.notification_settings')
            </div>

            <div class="tab-pane fade show" id="pills-linked" role="tabpanel" aria-labelledby="pills-linked-tab">
               @include('frontend.user.account.tabs.linked_account')
            </div>

            <div  class="tab-pane fade show"  id="pills-terms"  role="tabpanel"  aria-labelledby="pills-terms-tab">
                @include('frontend.user.account.tabs.terms_and_condition')
            </div>
        </div>
    </main>

@endsection

@push('after-scripts')

@endpush

