@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')

<form action="{{route('admin.blog_post.store')}}" enctype="multipart/form-data" method="post">
{{csrf_field()}}
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <strong>Blog Category</strong>
                </div><!--card-header-->

                <div class="card-body">
                   
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input name="slug" type="text" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control" required>
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

                    
                </div>
            </div><!--card-->
        </div><!--col-->


        <div class="col-6">
            <div class="card">

                <div class="card-body">

                
                    <div class="form-group">
                            <label>Feature Image</label>
                            <input name="feature_image" type="file" class="form-control" required>
                        </div>

                    <div class="form-group mt-4">
                        <label>Multiple Images</label>

                        <div id="inputFormRow">
                            <div class="input-group mb-3">
                                            
                                <input type="file" name="images[]" class="form-control m-input" placeholder="Image" autocomplete="off" required>
                                            
                                <div class="input-group-append">                
                                    <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                </div>
                            </div>
                        </div>

                        <div id="newRow"></div>
                        <button id="addRow" type="button" class="btn btn-info">Add Row</button>
                                                            
                    </div>                    
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</form>

    <script>
        CKEDITOR.replace( 'body' );
    </script>

    <script type="text/javascript">        
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="file" name="images[]" class="form-control m-input" placeholder="Image" autocomplete="off" required>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

    
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>
@endsection
