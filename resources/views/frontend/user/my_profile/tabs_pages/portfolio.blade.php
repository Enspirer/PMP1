<div class="container portfolio">
    <div class="row">
        <div class="col-6">
            <h4 class="aaa">Portfolio - 8</h4>
        </div>
        <div class="col-6 text-right">
            <button class="btn text-light" style="background-color: #FF6347">VIEW AS PUBLIC</button>
        </div>
    </div>

    <div class="row mt-4 text-center">
        <div class="col-3 position-relative" type="button" data-bs-toggle="modal" data-bs-target="#portfolio_store">
            <div style="border: 2px dashed #868e96; height: 225px;">
                <h5 class="text-secondary" style="line-height: 2rem; position: relative; top: 50%; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);">Add New <br> Portfolio</h5>
            </div>
        </div>


        @foreach($portfolios as $portfolio)
            <div class="col-3 position-relative port" style="margin-bottom:30px!important;">
                <a type="button" data-bs-toggle="modal" data-bs-target="#portfolio_view{{ $portfolio->id }}"><img src="{{ url('files', $portfolio->image) }}" alt="" class="img-fluid w-100" style="height:225px; object-fit: cover;"></a>

                <div class="carousel-caption p-0">
                    <p class="font-weight-bold mb-0">{{ $portfolio->title }}</p>

                    <div class="icons mt-2">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#portfolio_edit{{ $portfolio->id }}"><i class="fas fa-pen rounded-pill text-muted mr-2"></i></a>
                        <a class="delete" href="{{ route('frontend.user.portfolio_delete', $portfolio->id) }}" type="button" data-bs-toggle="modal" data-bs-target="#portfolio_delete"><i class="fas fa-trash rounded-pill text-muted ml-2"></i></a>
                    </div>
                    
                </div>

                @include('frontend.user.my_profile.edit_dialogs.portfolio_view')
                @include('frontend.user.my_profile.edit_dialogs.portfolio_edit')
                
            </div>
        @endforeach
    </div>
</div>


@include('frontend.user.my_profile.edit_dialogs.portfolio_store')
@include('frontend.user.my_profile.edit_dialogs.portfolio_delete')



@push('after-scripts')

<script>
    $('.port').hover(function() {
        $(this).children('div').find('.icons').addClass('icons-show');
        $(this).children('a').find('img').addClass('img-hover');
        $(this).children('div').addClass('carousel-move');
    },
    
    function() {
        $(this).children('div').find('.icons').removeClass('icons-show');
        $(this).children('a').find('img').removeClass('img-hover');
        $(this).children('div').removeClass('carousel-move');
    });



    $('.delete').on('click', function() {
        let link = $(this).attr('href');
        $('.modal-footer a').attr('href', link);
    })


    $(".add_new").click(function () {
        $("#image_store").click();
    });

    $(".edit_port").click(function () {
        $("#image_edit").click();
    });

    $(document).ready(function() {
        $('#image_store[type="file"]').change(function() {
            let name = $("#image_store").val();

            $("#image_new_name").val(name);
        });
    });

    $(document).ready(function() {
        $('#image_edit[type="file"]').change(function() {
            let name = $("#image_edit").val();

            $("#image_edit_name").val(name);
        });
    });

</script>

@endpush