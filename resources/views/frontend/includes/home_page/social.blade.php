<div class="container-fluid social-banner">
    <div class="container social">
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/footer/fb.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/footer/twitter.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/footer/youtube.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/footer/instagram.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/footer/linked.png') }}" alt="" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-3 fb">
                <a href="asdasd" style="color:black" target="_blank" id="stack_panel">
                    <div class="card" style="height: 25rem;">
                        <img id="facebook_src" src="dsfsdfsd" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                        <div class="card-body">
                            <p class="card-text mb-1" id="description_fb">sdfsdfs</p>
                            
                            <div class="text-right">
                                <img src="dasdasdad" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </a>
            </div>

         
            <div class="col-3">
                <a href="sadasd" style="color:black" target="_blank">
                    <div class="card" style="height: 25rem;">
                        <img src="{{ url('theme_light/assets/footer/2.png') }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                        <div class="card-body">
                            <p class="card-text mb-1">{{ 'ggg' }}</p>
                            
                            <div class="text-right">
                                <img src="{{ url('theme_light/assets/footer/twitter_color.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            @if(count(Modules\Blog\Entities\BlogPost::get()) != 0)
                @foreach(Modules\Blog\Entities\BlogPost::latest()->take(2)->get() as $key => $blog_posts)            
                    <div class="col-3">
                        <a href="{{url('blog/all')}}" style="color:black">
                            <div class="card" style="height: 25rem;">
                                <img src="{{ url($blog_posts->feature_image) }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                                <div class="card-body">
                                    <p class="card-text mb-1">{!!$blog_posts->body!!}</p>
                                    
                                    <div class="text-right">
                                        @if(Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first() != null)
                                            <a href="{{url('blog/all')}}" style="color: {{Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->color}}; font-size: 1.1rem;">{{ Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->name }}</a>
                                        @else
                                            <p style="color: Red; font-size: 1.1rem;">Category Deleted</p>   
                                        @endif
                                    
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif

            <!-- <div class="col-3">
                <div class="card" style="height: 25rem;">
                    <img src="{{ url('theme_light/assets/footer/4.png') }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                    <div class="card-body">
                        <p class="card-text mb-1">We're giving away 100,000,000 $Shib to 5 random people (20,000,000 each)Money bag RocketFollow Me! Gem stoneRetweet and Like. Open handsComment #SHIBARMY  ⚠followers only giveaway⚠ #BTC  #ETH #Giveaway #ADA</p>
                        
                        <div class="text-right">
                            <a href="#" style="color: #FF0000; font-size: 1.1rem;">News</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<script>
    $.get("{{route('facebook_news')}}", function(data, status){
        var backimage_f = JSON.parse(data);
        $("#facebook_src").attr("src",backimage_f.image);
        $("#description_fb").html(backimage_f.title);
        $("#stack_panel").attr("href",backimage_f.link);
    }).
    fail(function(jqXHR, textStatus, errorThrown) {
        $('.fb').addClass('d-none');
    });


    $.get("{{route('twitter_news')}}", function(data, status){

    });

</script>


