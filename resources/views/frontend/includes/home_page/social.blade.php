<div class="container-fluid social-banner">
    <div class="container social">
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-1 text-center">
                <a href="https://www.facebook.com/tallentor" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
            <div class="col-1 text-center">
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
            <div class="col-1 text-center">
                <!-- <a href=""><img src="{{ url('theme_light/assets/footer/youtube.png') }}" alt="" class="img-fluid"></a> -->
                <a href=""><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-1 text-center">
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-1 text-center">
                <a href=""><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="https://www.facebook.com/tallentor" style="color:black" target="_blank" id="stack_panel">
                    <div class="card" style="height: 25rem;">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftallentor%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=false&appId=4531192260303691" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </a>
            </div>


            @if(count(Modules\Blog\Entities\BlogPost::get()) != 0)
                @foreach(Modules\Blog\Entities\BlogPost::latest()->take(2)->get() as $key => $blog_posts)            
                    <div class="col-4">
                        <a href="{{url('blog/',Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->name)}}" style="color:black">
                            <div class="card" style="height: 25.2rem;">
                                @if(Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->name == 'News')
                                    <div class="px-4 py-2" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                        <div class="row align-items-center">
                                            <div class="col-3 text-center">
                                                <img src="{{ url('theme_light/assets/footer/news.png') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0" style="color: #065A31; font-size: 1.6rem;">Latest at Tallentor</p>
                                            </div>
                                        </div>
                                    </div>

                                @else

                                    <div class="px-4 py-2" style="-webkit-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); -moz-box-shadow: inset 0.5px 14px -8px rgba(0,0,0,0.75); box-shadow: inset 0px 0.5px 14px -8px rgba(0,0,0,0.75);">
                                        <div class="row align-items-center">
                                            <div class="col-3 text-center">
                                                <img src="{{ url('theme_light/assets/footer/club.png') }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="col-9">
                                                <p class="mb-0" style="color: #065A31; font-size: 1.6rem;">Tallentor Club</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <img src="{{ url($blog_posts->feature_image) }}" class="card-img-top" alt="..." style="object-fit: cover; height: 13rem;">
                                <div class="card-body">
                                    <p class="card-text mb-1" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2; /* number of lines to show */-webkit-box-orient: vertical;height: 80px;">{{$blog_posts->short_description}}</p>
                                    
                                    <div class="text-right mb-1">
                                        @if(Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first() != null)
                                            <a href="{{url('blog',Modules\Blog\Entities\BlogCategory::where('id',$blog_posts->category_id)->first()->name)}}" style="font-size: 1rem; color: #0033FF;">View More</a>
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
        // $("#stack_panel").attr("href",backimage_f.link);
    }).
    fail(function(jqXHR, textStatus, errorThrown) {
        $('.fb').addClass('d-none');
    });


    $.get("{{route('twitter_news')}}", function(data, status){
        var data = JSON.parse(data);
        $(".twitter-link").attr("href", data.link);
        $("#description_twitter").text(data.title);
    }).
    fail(function(jqXHR, textStatus, errorThrown) {
        $('.twitter').addClass('d-none');
    });

</script>


