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
                        {{csrf_field()}}
                        <input name="id" hidden type="text" class="form-control" value="{{$blog_post->id}}">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" value="{{$blog_post->title}}">
                        </div>
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
                            <label>Body</label>
                            <textarea name="body">{{$blog_post->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <input name="short_description" type="text" class="form-control" value="{{$blog_post->short_description}}">
                        </div>

<div class="row m-0">
    <img src="{{url($blog_post->feature_image)}}" style="width: 128px;height: 128px;object-fit: cover" >
    <div class="form-group ml-3">
        <label>Feature Image</label>
        <input name="feature_image" type="file" class="form-control-file">
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
    </script>

@endsection
