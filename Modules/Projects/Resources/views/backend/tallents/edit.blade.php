@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Edit'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Tallents Edit</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <form action="{{route('admin.tallents.update')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $tallents->title }}" class="form-control" id="title" required>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control" id="category" required>
                                <option value="" selected disabled>Select...</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}" {{ $tallents->category_id == $cat->id ? "selected" : "" }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ $tallents->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <br>
                        <img src="{{url('upload\projects\tallents',$tallents->image)}}" style="width: 30%;" alt="" >
                        <br><br>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="Enabled" {{ $tallents->status == 'Enabled' ? "selected" : "" }}>Enabled</option>
                                <option value="Disabled" {{ $tallents->status == 'Disabled' ? "selected" : "" }}>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" name="order" value="{{ $tallents->order }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" name="category_slug" value="{{ $tallents->category_slug }}" class="form-control" id="category_slug" readonly>
                        </div>

                        <div class="form-group">
                            <label>Talent Slug</label>
                            <input type="text" name="talent_slug" value="{{ $tallents->talent_slug }}" class="form-control" id="talent_slug" readonly>
                        </div>

                        <input type="hidden" name="hidden_id" value="{{ $tallents->id }}"/>
                        <button type="submit" class="btn btn-success mt-2">Update</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <script>
        CKEDITOR.replace('body');
    </script>

@endsection

@push('after-scripts')
    <script>
        $('#title').keyup(function() {
            let val = $(this).val();

            val = val.replace(/\s+/g, '-').toLowerCase();

            $('#talent_slug').val(val);
        });

        $('#category').on('change', function() {
            let slug = $(this).find("option:selected").text();

            slug = slug.replace(/\s+/g, '-').toLowerCase();

            $('#category_slug').val(slug);
        });
    </script>
@endpush
