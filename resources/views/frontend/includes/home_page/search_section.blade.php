<div id="video_box">
    <div id="video_overlays"></div>
    <div class="video">
        <video autoplay loop muted id="player" src="{{url('theme_light/assets/video.webm')}}" type="video/webm"></video>
    </div>
    <div class="header-content">
        <div class="content">
            <h1 data-animscroll="fade-up" data-animscroll-delay="100">
                THE PLACE WHERE THE TOP <br>
                CHALLENGERS MEET THE BEST TALLENTS

            </h1>
            <div class="wrapper" data-animscroll="fade-up" data-animscroll-delay="200">
                <form action="{{route('frontend.project_explore',[1,'null','null','null','null'])}}">
                    <input class="search" type="text" id="search" />
                    <input class="submit" type="submit" value="Search" />

                </form>
            </div>
            <div class="container" data-animscroll="fade-up" data-animscroll-delay="300">
                <div class="row">
                    <p>Popular :</p>
                    <a href="">Web Design</a>
                    <a href="">Logo Design</a>
                    <a href="">App Development</a>
                    <a href="">Programming</a>
                    <a href="">UI/UX</a>
                </div>
            </div>
        </div>
    </div>
</div>