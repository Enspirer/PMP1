@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Blog Category Edit</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <form action="{{route('admin.blog_category.update')}}" method="post">
                        {{csrf_field()}}
                        <input name="id" type="text" hidden class="form-control" value="{{$blog_category->id}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" value="{{$blog_category->name}}">
                        </div>

                        <div class="form-group">
                            <label>Color</label>
                            <select class="form-control" name="color">
                                <option value="blue" {{ $blog_category->color == "blue" ? "selected" : "" }} >Blue</option>
                                <option value="purple" {{ $blog_category->color == "purple" ? "selected" : "" }} >Purple</option>
                                <option value="light-blue" {{ $blog_category->color == "light-blue" ? "selected" : "" }} >Light Blue</option>
                                <option value="red" {{ $blog_category->color == "red" ? "selected" : "" }} >Red</option>
                                <option value="yellow" {{ $blog_category->color == "yellow" ? "selected" : "" }} >Yellow</option>
                                <option value="green" {{ $blog_category->color == "green" ? "selected" : "" }} >Green</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label >Description</label>
                            <textarea name="description" class="form-control"  rows="3">{{$blog_category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $blog_category->status == "1" ? "selected" : "" }} >Enable</option>
                                <option value="0" {{ $blog_category->status == "0" ? "selected" : "" }} >Disable</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


@endsection
