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
