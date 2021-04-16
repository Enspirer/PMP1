@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')


    <br><br>

    <section class="login-mob">
     
          
     <h1>Hello there,</h1>
     <p>Welcome back</p>
       
     </section>


   <div class="error" style="padding: 15px;">
            @include('includes.partials.messages')
            </div>
            
    <section class="login-form-mob">
        <div class="login-buttons-section">
            @include('frontend.auth.includes.socialite')

        </div>
        <!-- <div class="separator">or</div> -->
        <br>
        <div class="form-login">
            <form action="{{route('frontend.auth.login.post')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email / Username"/>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Continue
                </button>
            </form>
            <div class="row d-flex justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1"/>
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <a href="{{ route('frontend.auth.password.reset') }}" class="text-right" style="color: #0f9d58; font-family: Poppins;font-size: 13px;">Forget Password?</a>
            </div>
            <hr>
            <div class="bottumText">
                <p>Not a member yet? <a href="{{route('frontend.auth.register')}}">Create an account</a></p>
            </div>
        </div>
    </section>

@endsection



