<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="aaa">Portfolio - 8</h4>
        </div>
        <div class="col-6 text-right">
            <button class="btn text-light" style="background-color: #FF6347">VIEW AS PUBLIC</button>
        </div>
    </div>

    <div class="row mt-4 text-center">
        <div class="col-3 position-relative" style="" type="button" data-bs-toggle="modal" data-bs-target="#add_portfolio">
            <div style="position: relative; top: 40%; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); border: 3px dashed #868e96; padding: 60px 5px">
                <h5 class="text-secondary" style="line-height: 1.8rem;">Add New Portfolio</h5>
                <i class="fas fa-plus" style="font-size: 75px; color: #868e96;"></i>
            </div>
        </div>

        <div class="col-3 position-relative">
            <img src="{{ url('img/2.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>

        <div class="col-3 position-relative">
            <img src="{{ url('img/3.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>

        <div class="col-3 position-relative">
            <img src="{{ url('img/4.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-3 position-relative">
            <img src="{{ url('img/1.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>

        <div class="col-3 position-relative">
            <img src="{{ url('img/2.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>

        <div class="col-3 position-relative">
            <img src="{{ url('img/3.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>

        <div class="col-3 position-relative">
            <img src="{{ url('img/4.jpg') }}" alt="" class="img-fluid w-100">
            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site & mobile app development</p>
        </div>

    </div>
</div>


@include('frontend.user.my_profile.edit_dialogs.add_portfolio')


@push('after-scripts')

<script>
    $('#contact .image').hover(function() {
        $(this).addClass('hover');
        // $(this).siblings('div').removeClass('d-none');
    }, function() {
        $(this).removeClass('hover');
        // $(this).siblings('div').addClass('d-none');
    });
</script>

@endpush