<div id="video_box">
    <div id="video_overlays"></div>
    <div class="video">
        <img  id="player" src="{{url('theme_light/assets/studio-republic-fotKKqWNMQ4-unsplash.jpg')}}" alt="">
{{--        <video autoplay loop muted id="player" src="{{url('theme_light/assets/video.webm')}}" type="video/webm"></video>--}}
    </div>
    <div class="header-content">
        <div class="content">
            <h1 data-animscroll="fade-up" data-animscroll-delay="100" style="font-size: 36px;line-height: 1.5">
       THE PLACE WHERE<br>THE <span style="color: #fff;font-family: 'Noto Serif', serif;text-transform: lowercase;font-style: italic;font-size: 44px; font-weight: 100">TOP
                    CHALLENGERS </span> MEET THE<span style="color: #fff;font-family: 'Noto Serif', serif;text-transform: lowercase;font-style: italic;font-size: 44px; font-weight: 100;"> BEST TALENT  </span>

            </h1>

            <form action="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">
                <div class="row-search-post row" data-animscroll="fade-up" data-animscroll-delay="200">
                    <input class="search" type="text" id="search" placeholder="Projects you are looking for" />
                    <h3>OR</h3>
                    @auth
                        <a href="{{route('frontend.user.post_project')}}">Post a Job</a>
                    @else
                        <a href="{{route('frontend.auth.login')}}">Post a Job</a>
                    @endauth
                    <button type="submit" style="display: none"></button>
                </div>
            </form>




            <div class="container" data-animscroll="fade-up" data-animscroll-delay="300">
                <div class="row">
                    <p>Popular :</p>
                    <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Web Design</a>
                    <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Logo Design</a>
                    <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">App Development</a>
                    <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">Programming</a>
                    <a href="{{route('frontend.project_explore',['category','search_keyword','country','bids_range','sort_by','infrack'])}}">UI/UX</a>
                </div>
            </div>
        </div>
    </div>
</div>
