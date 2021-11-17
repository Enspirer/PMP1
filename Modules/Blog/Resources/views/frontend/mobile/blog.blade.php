<section class="expert-section">
    <div class="swiper-container6 swiper-container">
        <div class="swiper-wrapper">
        @foreach($featuresBlog as $featureblog)
            <div class="swiper-slide">
                <div class="expert-image">
                    <img src="{{url($featureblog->feature_image)}}" style="object-position: center" />
                    <div class="expert-gradient"></div>
                    <div class="expert-text-head">
                        <div class="container">
                            <div class="header-title-swipper">
                                <p>Post 10h ago</p>
                                <h1> {{$featureblog->title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
  
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination2 swiper-pagination-blog" style="display: flex; justify-content: center; bottom: -5px"></div>
    </div>
</section>

<section id="media-bottum-section-mob" class="mt-5">
    <h1>Tallentor Media Center</h1>
    <hr>

    <div class="filter-part">
        <div class="row button-live-row">
            <div class="button-live-single col dropdown" id="filters">
                <div class="view-scope-outline" href="#" type="button" data-toggle="dropdown">
                    <i class="fa fa-list-alt" aria-hidden="true" ></i> &nbsp; Category</div>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @foreach($blog_category as $blog_cat)
                            <li>
                                <a href="{{route('frontend.blog',$blog_cat->name)}}" class="dropdown-item">
                                    <h5>{{$blog_cat->name}}</h5>
                                    </a>
                            </li>
                        @endforeach
                    </ul>
            </div>


            <div class="filter-popup"></div>




            <div class="button-live-single col">
                <a class="view-scope-outline" href="#" type="button"><i class="fa fa-align-left" aria-hidden="true"></i> &nbsp; Sort
                    by</a>
            </div>
        </div>
    </div>

    <div class="blogs-mob mt-5">
    @foreach($blog_posts as $blogpost)
    <a href="{{route("frontend.blog_post",$blogpost->slug)}}">
     

        <div class="card-blog-item">
            <img src="{{url($blogpost->feature_image)}}" style="height: 250px;object-fit: cover;" alt="" />
            <div class="card-blog-item-bottum">
                <p>{{$blogpost->created_at}}</p>
                <h5>{{$blogpost->title}}</h5>
                <h6>
                {{$blogpost->short_description}}
                </h6>

                <div class="read-more-card row m-0 mt-3">
                    <a href="{{route("frontend.blog_post",$blogpost->slug)}}" class="row m-0">
                        <p>Read More</p>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        
        </a>
        
        @endforeach


    </div>
</section>