<section id="news-inner-mob">
      <div class="banner" style="background-image: url('{{url($get_post->feature_image)}}');"></div>
      <div class="inner-mob-details">
        <div class="row m-0">
          <h6>Post {{$get_post->created_at}} </h6>
          <h6>By {{$author_details->first_name}} {{$author_details->last_name}}</h6>
        </div>
        <h1>{{$get_post->title}}</h1>

        <p>
        {{$get_post->short_description}}

        <br>
        {!! $get_post->body !!}
        </p>
      </div>
    </section>