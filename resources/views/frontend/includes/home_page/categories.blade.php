@push('before-styles')
<style>
/* .navClass {
  height: 500px;
  overflow-y: scroll;
}
::-webkit-scrollbar {
  width: 8px;
  border: 1px solid #d5d5d5;
}
::-webkit-scrollbar-track {
  border-radius: 0;
  background: #eeeeee;
}
::-webkit-scrollbar-thumb {
  border-radius: 0;
  background: #b0b0b0;
} */
.navClass .nav a {
            color : black;
        }
.navClass .nav .active {
    background-color : #0f9d58;
    color : white;
}

.navClass .nav .active img {
    filter : brightness(50);
}
button:focus {
    outline: none;
}

.vertical-hover {
    background-color : #0f9d58;
    color : white!important;
}
:focus-visible {
    outline: none!important;
}
</style>

@endpush

<div class="container text-center top-categories" style="{{$padding_top}} margin-bottom: 10rem">

    <div class="heading-text">
        <h1 style="font-size: 42px; color: #361d41; margin: auto; text-align: center; font: normal normal bold 48px/70px Poppins;">Top Categories at Tallentor</h1>
        <p style="margin-top: 19px !important; max-width: 700px; text-align: center; margin: auto;font-size: 18px;">one place with thousands of creative talents</p>
    </div>
    

    <div class="row justify-content-between mt-5">
        <div class="col-3">
            <nav class="navClass">
                <div class="nav flex-column categories border-0" id="nav-tab" role="tablist" style="overflow-x: auto;">
                @foreach($categories as $category)
                    @if($category->status == 'Enabled')
                        @if($loop->first)
                            <a href="#tab-{{ $category->id }}" class="nav-link text-left border shadow py-3 mb-3 active" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 40px;">
                                    </div>
                                    <div class="col-8 text-center">
                                        <p class="mb-0">{{ $category->name}}</p>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="#tab-{{ $category->id }}" class="nav-link text-left border shadow py-3 mb-3" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true">
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 40px;">
                                    </div>
                                    <div class="col-8 text-center">
                                        <p class="mb-0">{{ $category->name}}</p>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @else
                        <button class="nav-link text-left border shadow py-3 mb-3" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true" disabled>
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 40px;">
                                </div>
                                <div class="col-8 text-center">
                                    <p class="mb-0">{{ $category->name}}</p>
                                </div>
                            </div>
                        </button>
                    @endif
                @endforeach
                </div>
            </nav>
        </div>

        <div class="col-8 images">
            <div class="tab-content" id="nav-tabContent">

                @foreach($categories as $category)
                    @if($loop->first)
                        <div class="tab-pane fade show active" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">

                    
                            <div class="row mb-3">
                                @foreach(App\Models\Tallents::where('category_id', $category->id)->get() as $talent)
                                
                                    <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                                        <a href="{{ route('frontend.post_a_job', [ $talent->category_slug, $talent->talent_slug ] ) }}"><img src="{{url('upload/projects/tallents', $talent->image)}}" alt="{{ $talent->title }}" class="img-fluid rounded w-100"></a>
                                        <p class="mt-3">{{ $talent->title }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">

                    
                            <div class="row mb-3">
                                @foreach(App\Models\Tallents::where('category_id', $category->id)->get() as $talent)
                                
                                    <div class="col-4" data-animscroll="zoom-in" data-animscroll-duration="500">
                                        <a href="{{ route('frontend.post_a_job', [ $talent->category_slug, $talent->talent_slug ] ) }}"><img src="{{url('upload/projects/tallents', $talent->image)}}" alt="{{ $talent->title }}" class="img-fluid rounded w-100"></a>
                                        <p class="mt-3">{{ $talent->title }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif 
                @endforeach
            </div>
        </div>
    </div>
</div>



@push('after-scripts')
    <script>
        $('.top-categories .images .col-4').hover(function(){
            $(this).addClass('dark');

        }, function() {
            $(this).removeClass('dark');
        });
    </script>


<script>
    $('.navClass .nav-link').hover(function() {
        $(this).addClass('vertical-hover');

        $(this).find('img').css('filter', 'brightness(100)');
        
    }, function() {

        $(this).removeClass('vertical-hover');

        if($(this).hasClass('active')) {
            $(this).find('img').css('filter', 'brightness(100)');
        }
        else {
            $(this).find('img').css('filter', 'brightness(1)');
        }
    });
</script>


<script type='text/javascript'>
    // Javascript to enable link to tab
    var hash = location.hash.replace(/^#/, '');  // ^ means starting, meaning only match the first hash
    if (hash) {
        $('.nav a[href="#' + hash + '"]').tab('show');
    } 

    // Change hash for page-reload
    $('.nav a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;


        // var scrollTo = $('top-categories');
  
       
        let scrollTop = $(".top-categories").offset().top;

        window.scrollTo(scrollTop, scrollTop);
        
    })
</script>

@endpush
