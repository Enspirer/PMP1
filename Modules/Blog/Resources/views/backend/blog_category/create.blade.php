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
                    <form action="{{route('admin.blog_category.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                          <label>Color</label>
                             <select class="form-control" name="color">
                               <option value="blue">Blue</option>
                               <option value="purple">Purple</option>
                               <option value="light-blue">Light Blue</option>
                               <option value="red">Red</option>
                               <option value="yellow">Yellow</option>
                               <option value="green">Green</option>
                             </select>
                        </div>


                        <div class="form-group">
                            <label >Description</label>
                            <textarea name="description" class="form-control"  rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1">Enable</option>
                                <option value="0">Disable</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


@endsection
