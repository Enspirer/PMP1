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
                    <form action="{{route('admin.blog_post.store')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input name="slug" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                @foreach($BlogCategory as $blogCategorys)
                                    <option value="{{$blogCategorys->id}}">{{$blogCategorys->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Body</label>
                            <textarea name="body"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Short Description</label>
                            <textarea name="short_description" class="form-control" rows="10"></textarea>
                        </div>


                        <div class="form-group">
                            <label>Feature Image</label>
                            <input name="feature_image" type="file" class="form-control-file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <script>
        CKEDITOR.replace( 'body' );
    </script>

@endsection
