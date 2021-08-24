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
        <!-- <div class="col-3 position-relative img-fluid image" style="background-image: url('img/1.jpg'); background-size: 100% 100%;background-repeat: no-repeat;"> -->
        <div class="col-3 position-relative">
            
            <img src="{{ url('img/1.jpg') }}" alt="" class="img-fluid w-100">

            <div class="carousel-caption d-none">
                <i class="fas fa-pen rounded-pill text-muted mr-2" style="background-color:#e3dfde; padding:10px;"></i> <i class="fas fa-trash rounded-pill text-muted ml-2" style="background-color:#e3dfde; padding:10px;"></i>
            </div>
            <p class="font-weight-bold">Lorem ipsum web site</p>
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