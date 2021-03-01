<section id="live-auction">
    <div class="head-title">
        <div class="row" data-animscroll="fade-up">
            <div class="record-icon">
                <img src="{{url('theme_light/assets/image/icon/rec_red.svg')}}">
            </div>
            <h1><span>Live</span>Auction</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="left-live col-md-4" style="padding: 0">
                <div class="top-title" style="box-shadow: 3px 3px 36px 0px rgba(0,0,0,0.48);padding: 20px; border-radius: 4px">
                    <h3 data-animscroll="fade-up" style="margin: 0">
                        Development of eCommerce platform for a leading
                        Fashion brand
                    </h3> <br>
{{--                        <h4 style="font-size: 18px;color: black;" data-animscroll="fade-up">Main requirements</h4><br>--}}

{{--                        <ul style="color: black;" data-animscroll="fade-up">--}}
{{--                            <li>An agency with minimum of 5 years experience and a team of 5 for the project</li>--}}
{{--                            <li>Fully customized ecommerce platform with source code</li>--}}
{{--                            <li>Latest Ui / UX components</li>--}}
{{--                            <li>Payment gateway integration</li>--}}
{{--                            <li>Full project scope available for review.</li>--}}
{{--                        </ul>--}}
                    <div class="auction-end" data-animscroll="fade-up">
                        <div class="row" style="margin: 0">
                            <h3 style="font-size: 18px">Auction ends in :</h3>
                            <h2 style="font-size: 18px">&nbsp;12 Hr 34 Min</h2>
                        </div>
                    </div>
                    <div class="auction-button" data-animscroll="fade-up">
                        <div class="row" style="margin: 0;display: grid">
                            <a class="outline-btn-auction" href="#" style="font-size: 16px;background: transparent;color: #0F9D58;text-align: center;font-weight: 500;margin: 0;border: none">PROJECT BRIEF</a>
                            {{--<a class="outline-btn-auction" href="#" style="margin-top: 5px">VIEW SCOPE</a>--}}
                            <a class="outline-btn-auction" href="" style="margin: 5px 0 0 0;font-size: 16px; background: transparent;color: #0F9D58;text-align: center;font-weight: 500;border: none">VIEW SCOPE</a>

                            @auth()
                                <a class="fill-btn-auction" href="{{route('frontend.project_auction',1)}}" style="margin: 5px 0 0 0;font-size: 16px;text-align: center;font-weight: 500">PLACE A BID</a>
                            @else
                                <a class="fill-btn-auction" href="{{route('frontend.auth.login')}}" style="margin: 5px 0 0 0;font-size: 16px;text-align: center;font-weight: 500">SIGN IN TO BID</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-chart col-md-8">
                <div id="container"  data-animscroll="fade-left" style="margin-top: 120px; height: 100%; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"_echarts_instance_="ec_1613561955227">


                </div>
            </div>
        </div>
    </div>
</section>
