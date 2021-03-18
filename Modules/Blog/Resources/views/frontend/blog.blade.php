@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section class="expert-section">
        <div class="swiper-container swiper-container2">
            <div class="swiper-wrapper">

                @foreach($featuresBlog as $featureblog)
                    <div class="swiper-slide">
                        <div class="expert-image">
                            <img src="{{url($featureblog->feature_image)}}" style="object-position: center">
                            <div class="expert-gradient"></div>
                            <div class="expert-text-head">
                                <div class="container">

                                    <div class="header-title-swipper">
                                        <p>Post 10h ago</p>
                                        <h1>
                                            {{$featureblog->title}}
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination2 swiper-pagination-blog"></div>
        </div>

    </section>

    <section id="blog-tallentor">
        <div class="container">
            <div class="tab-center">
                <div class="title-tab">
                    <h1>Tallentor Press</h1>
                    <hr />
                </div>
            </div>

            <div class="type-row row">
                @foreach($blog_category as $blog_cat)

                        <div class="single-type col-md-2">
                            <div class="card-type">
                                <div class="text-block">
                                    <p>About</p>
                                    <a href="{{route('frontend.blog',$blog_cat->name)}}">
                                         <h5>{{$blog_cat->name}}</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card-round-outer">
                                <div class="card-circle-inner {{$blog_cat->color}}">
                                    <h3>{{substr($blog_cat->name,0,1)}}</h3>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

            <div class="all-blog-post">
                <div class="row">
                    @foreach($blog_posts as $blogpost)
                        <div class="col-md-4">
                            <div class="card-blog-item">
                                <div class="" style="background-image: url('{{url($blogpost->feature_image)}}');height: 210px;background-size: cover;background-repeat: no-repeat;"></div>

                                <img
                                        src=""
                                        alt=""
                                />
                                <div class="card-blog-item-bottum">
                                    <p>{{$blogpost->created_at}}</p><br>

                                    <h5>{{$blogpost->title}}</h5>
                                    <h6 style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 10;-webkit-box-orient: vertical;">
                                        {{$blogpost->short_description}}
                                    </h6>

                                    <div class="read-more-card row m-0 mt-3">
                                        <a href="{{route("frontend.blog_post")}}" class="row m-0">
                                            <p>Read More</p>
                                            <i class="fa fa-angle-right" aria-hidden="true"></i
                                            ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>





@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush
