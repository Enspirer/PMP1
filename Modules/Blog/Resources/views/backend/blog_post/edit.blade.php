@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Blog Category</strong>
                </div><!--card-header-->
                <div class="card-body">
                    <form action="{{route('admin.blog_post.update')}}" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-md-9">
                                {{csrf_field()}}
                                <input name="id" hidden type="text" class="form-control" value="{{$blog_post->id}}">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" value="{{$blog_post->title}}">
                                </div>
                                <div class="form-group">
                                    <label>Body</label>
                                    <textarea name="body" rows="50" style="height: 500px;">{{$blog_post->body}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input name="slug" type="text" class="form-control" value="{{$blog_post->slug}}">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        @foreach($BlogCategory as $blogCategorys)
                                            <option value="1" {{ $blog_post->category_id == "$blogCategorys->id" ? "selected" : "" }}>{{$blogCategorys->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="" style="border-style: dashed;border-width: 2px;height: 300px;color: grey;text-align: center;padding: 20px;">
                                        <img src="{{url($blog_post->feature_image)}}" style="width: 258px;height: 268px;object-fit: cover;" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="feature_image" type="file" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea name="short_description" class="form-control" rows="10">{{$blog_post->short_description}}</textarea>
                                </div>

                                <div class="">
                                    <label>Title</label>
                                        <div class="row" id="reference_links">

                                            @foreach($get_references as $get_reference)

                                            @endforeach



                                        </div>
                                        <div class="">
                                            <div onclick="add_reference()" class="" style="border-style: dashed;border-width: 2px;padding: 10px;color: grey;">
                                                <div class="">Add Related</div>
                                            </div>
                                        </div>
                                </div>


                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <script>
        CKEDITOR.replace( 'body' );
        CKEDITOR.config.height = 700;
    </script>

    <script>
        function add_reference() {
            var element_ids = Math.floor(Math.random(1000) * 1000);
            $('#reference_links').append(
                '<div class="col-md-12" id="'+element_ids+'">' +
                    '<select class="form-control" name="reference_post_id[]" required>' +
                        @foreach($blog_posts as $blogpost_r)
                        ' <option value="{{$blogpost_r->id}}">{{$blogpost_r->title}}</option>' +
                        @endforeach
                    '</select>' + '<a onclick="delete_reference('+ element_ids +')" class="btn btn-primary">X</a><br><br>'+
                    '' +
                '</div>')
        }

        function delete_reference(id) {
            $('#'+id).remove();
        }
    </script>

@endsection
