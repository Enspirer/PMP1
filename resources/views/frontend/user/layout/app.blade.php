<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enspirer Project Marcketplace</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/image/favicon.png">

    @stack('before-styles')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- -------------------- post a project -----------  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css"/>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"/>

    <!-- Theame Style  -->
    <link rel="stylesheet" href="{{url('theme_light/styles/css/style.css')}}">
    <link rel="stylesheet" href="{{url('theme_light/plugin/dist/css/animtrap.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{url('theme_light/styles/sweeper.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css"/>
    <script src="https://cdn.tiny.cloud/1/2ga1455ee2likjyvki76whwe68dglnmvhm3xidu8izmhozt0/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    @stack('after-styles')

    <style>
        body.modal-open .supreme-container{
            -webkit-filter: blur(1px);
            -moz-filter: blur(1px);
            -o-filter: blur(1px);
            -ms-filter: blur(1px);
            filter: blur(1px);
        }
    </style>
</head>
<body class="supreme-container">
@include('frontend.user.includes.navbar')

<section class="dashboard-body">
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
    @include('frontend.user.includes.sidebar')
    <!-- sidebar-wrapper  --> <br><br>
    @yield('content')
    <!-- page-content" -->


    <div class="container-fluid" style="top: 65px;!important;">

        <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#myModal" id="modal-btn">
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
                            <input type="text" value="{{ App\Models\Auth\User::where('id',auth()->user()->id)->first()->first_name }} {{ App\Models\Auth\User::where('id',auth()->user()->id)->first()->last_name }}" class="form-control" id="profile_name" aria-describedby="profile_name" name="profile_name">
                        </div>

                        <div class="form-group">
                            <label for="profile_description">Profile Description</label>
                            <textarea class="form-control" name="profile_description" id="profile_description" rows="7"></textarea>
                        </div>

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
                        
    </div>
    <!-- page-wrapper -->
</section>

<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{url('theme_light/js/sweeper.js')}}"></script>
<!-- hammer js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


<!-- ----------------------- post a project ------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>



<!-- Theame JS  -->
<script src="{{url('theme_light/js/dashboard_main.js')}}"></script>
<script src="{{url('theme_light/js/projects.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="{{url('theme_light/plugin/dist/js/anim-trap.js')}}"></script>
<script src="{{url('theme_light/plugin/dist/js/anim-scroll.js')}}"></script>
<script src="{{url('theme_light/plugin/chart/echarts.min.js')}}"></script>

@stack('after-scripts')

<script>
    ANIMSCROLL.init({
        easing: "ease-in-out-sine",
    });
</script>
</body>
</html>
