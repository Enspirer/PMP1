@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Edit'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Project Category</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <form action="{{route('admin.project_category.update')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
                        </div>

                        <label>Description</label> 
                        <textarea class="form-control" name="description" rows="3"> {{ $category->description }} </textarea>
                        <br>
                        
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="file" class="form-control-file" name="icon">
                            <br>
                            <img src="{{ url('upload/projects',$category->icon) }}" style="width: 8%;" />
                            <br><br>
                        </div>  

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $category->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $category->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" class="form-control" name="order" value="{{ $category->order }}" required>
                        </div>

                        <input type="hidden" name="hidden_id" value="{{ $category->id }}"/>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <script>
        CKEDITOR.replace('body');
    </script>

@endsection
