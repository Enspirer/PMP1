@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

@section('content')
    <section id="login-body">
        <div class="row">
            <div class="left-form-login col-md-4" data-animscroll="fade-up" data-animscroll-delay="100">
                <h1>Forgot your password?</h1>
                <p style="max-width: 500px;margin: auto; margin-top: 24px;">Don't worry! Resetting your password is easy. Just type the email that you used to register with Tallantor</p>

                <div class="form-login" style="margin-top: 80px; max-width: 350px;">
                    <form method="post" action="{{route('frontend.auth.password.email.post')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>


                        <button type="submit" class="btn btn-primary btn-block">
                            Continue
                        </button>
                    </form>



                </div>
            </div>
            <div class="right-image col-md-8">
                <img src="{{url('theme_light/assets/image/MaskGroup8.png')}}" alt=""/>
                <div class="gradient-layer-dark"></div>
                <div class="top-text-layer" data-animscroll="fade-up" data-animscroll-delay="200">
                    <h1>Welcome to Tallentor</h1>
                    <p>
                        Work with us and go beyond ,<br />
                        from your imaginations
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
