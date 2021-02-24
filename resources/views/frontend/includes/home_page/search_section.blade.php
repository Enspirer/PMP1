<div id="video_box">
    <div id="video_overlays"></div>
    <div class="video">
        <video autoplay loop muted id="player" src="{{url('theme_light/assets/video.webm')}}" type="video/webm"></video>
    </div>
    <div class="header-content">
        <div class="content">
            <h1 data-animscroll="fade-up" data-animscroll-delay="100" style="font-size: 36px">
                THE PLACE WHERE<br> THE <span style="color: orangered;"> TOP
                    CHALLENGERS</span> MEET THE<span style="color: orangered;"> BEST TALENT</span>

            </h1>
            <form action="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">
                <div class="row-search-post row" data-animscroll="fade-up" data-animscroll-delay="200">
                        <input class="search" type="text" id="search" placeholder="Projects you are looking for" />
                        <h3>OR</h3>
                        <a href="">Post a Job</a>
                        <button type="submit" style="display: none"></button>
                </div>
            </form>
            <div class="container" data-animscroll="fade-up" data-animscroll-delay="300">
                <div class="row">
                    <p>Popular :</p>
                    <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">Web Design</a>
                    <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">Logo Design</a>
                    <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">App Development</a>
                    <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">Programming</a>
                    <a href="{{route('frontend.project_explore',['null','null','null','null','null','null'])}}">UI/UX</a>
                </div>
            </div>
        </div>
    </div>
</div>
