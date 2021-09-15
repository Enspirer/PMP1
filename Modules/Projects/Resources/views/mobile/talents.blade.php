<section class="categories">
    <div class="container text-center" style="margin-top: 3rem; margin-bottom: 5rem">
        <h4 style = "font: normal normal bold 18px/56px Poppins; letter-spacing: 0px; line-height: 1; color: #000000; text-align: center;">Top Categories at Tallentor</h4>
        <p style="max-width: 90%; margin: auto; text-align: center; font: normal normal normal 12px/20px Karla; letter-spacing: 0px; color: #000000; line-height: 1.5;">one place with thousands of creative talents</p>

        <div class="row justify-content-between mt-4">
            <div class="col-12">
                <div class="dropdown categories" id="nav-tab" role="tablist">
                    <button class="btn btn-secondary dropdown-toggle mb-3 w-75" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" style="background-color: #0f9d58;">
                        Top Categories
                    </button>

                    <div class="dropdown-menu w-75" aria-labelledby="dropdownMenuButton">
                        <div class="nav nav-tabs">

                            @foreach($categories as $category)
                                @if($category->status == 'Enabled')
                                    @if($loop->first)
                    
                                        <button class="nav-link active text-left border-0 bg-light w-100" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true">
                                            <div class="row align-items-center text-center">
                                                <div class="col-4">
                                                    <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 30px;">
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0" style="font-size: 0.9rem">{{ $category->name}}</p>
                                                </div>
                                            </div>
                                        </button>

                                    @else

                                        <button class="nav-link text-left border-0 bg-light w-100" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true">
                                            <div class="row align-items-center text-center">
                                                <div class="col-4">
                                                    <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 30px;">
                                                </div>
                                                <div class="col-8">
                                                    <p class="mb-0" style="font-size: 0.9rem">{{ $category->name}}</p>
                                                </div>
                                            </div>
                                        </button>

                                    @endif
 
                                @else

                                    <button class="nav-link text-left border-0 bg-light w-100" id="tab-{{$category->id}}" data-toggle="tab" data-target="#category-{{ $category->id}}" type="button" role="tab" aria-controls="{{ $category->name}}" aria-selected="true" disabled>
                                        <div class="row align-items-center text-center">
                                            <div class="col-4">
                                                <img src="{{url('upload/projects', $category->icon)}}" alt="" style="height: 30px;">
                                            </div>
                                            <div class="col-8">
                                                <p class="mb-0" style="font-size: 0.9rem">{{ $category->name}}</p>
                                            </div>
                                        </div>
                                    </button>

                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="tab-content" id="nav-tabContent">

                    <!-- <h6 class="mb-4 category_title"></h6> -->

                    @foreach($categories as $category)
                        @if($loop->first)

                            <div class="tab-pane fade show active" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">
                                <div class="row mb-3 justify-content-center">
                                    @foreach(App\Models\Tallents::where('category_id', $category->id)->get() as $talent)
                                        <div class="col-4 p-2">
                                        <a href="{{ route('frontend.post_a_job', [ $talent->category_slug, $talent->talent_slug ] ) }}">
                                            <img src="{{url('upload/projects/tallents', $talent->image)}}" alt="{{ $talent->title }}" class="img-fluid rounded w-100" style="height:80px;"></a>
                                            <p class="mt-2 mb-0" style="font-size: 0.8rem">{{ $talent->title }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        @else

                            <div class="tab-pane fade show" id="category-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{$category->id}}">
                                <div class="row mb-3 justify-content-center">
                                    @foreach(App\Models\Tallents::where('category_id', $category->id)->get() as $talent)
                                        <div class="col-4 p-2">
                                        <a href="{ route('frontend.post_a_job', [ $talent->category_slug, $talent->talent_slug ] ) }}">
                                            <img src="{{url('upload/projects/tallents', $talent->image)}}" alt="{{ $talent->title }}" class="img-fluid rounded w-100" style="height:80px;"></a>
                                            <p class="mt-2 mb-0" style="font-size: 0.8rem">{{ $talent->title }}</p>
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
</section>