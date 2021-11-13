<style>
    #news-section .top-part-news .container .news-body p{
        line-height:inherit;
    }
</style>



<section class="expert-section" style="padding: 90px;">
    <div class="container">
        <nav aria-label="breadcrumb" style="margin-top: 50px;background-color: white !important;">
            <ol class="breadcrumb" style="background-color: white !important;">
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                <li class="breadcrumb-item"><a href="#">{{Modules\Blog\Entities\BlogCategory::where('id',$get_post->category_id)->first()->name}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$get_post->title}}</li>
            </ol>
        </nav>
    </div>
        <div class="expert-image" style="">
            <img src="{{url($get_post->feature_image)}}" style="object-position: top;object-fit: contain;" alt="" />
            <div class="expert-text-head">
                <div class="container"></div>
            </div>
        </div>
    </section>

    <section id="news-section">
        <div class="top-part-news">
            <div class="container">

                <div class="title-part">
                    <div class="row m-0">
                        <p>Post {{$get_post->created_at}} </p>
                        <p>By {{$author_details->first_name}} {{$author_details->last_name}}</p>


                    </div>
                    <h1>{{$get_post->title}}</h1>
                </div>
                <div class="news-body">
                    <p>
                        {{$get_post->short_description}}
                    </p>
                    <br />
                    <p>{!! $get_post->body !!}
                    </p>
                </div>
            </div>
        </div>
        <div class="bottum-part-news">
            <div class="container" >
                <h3>Related News</h3>
                <div class="swiper-container3 swiper container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                        <div class="swiper-slide"><div class="card">
                                <img src="{{url('theme_light/assets/pexels-fauxels-3184291.jpg')}}" alt="" />
                                <div class="body-news-card-bottum">
                                    <p>02 Feb 2021</p>
                                    <h6>Lorem ipsum title</h6>
                                    <h5>
                                        Lorem ipsum dolor sit amet, consetetur sadipscing it amet, consete
                                    </h5>
                                </div>
                            </div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

