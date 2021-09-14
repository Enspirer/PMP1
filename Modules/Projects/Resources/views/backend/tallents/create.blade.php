@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Create'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Tallents Create</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <form action="{{route('admin.tallents.store')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control" id="category" required>
                                <option value="" selected disabled>Select...</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control-file" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" name="order" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Category Slug</label>
                            <input type="text" name="category_slug" class="form-control" id="category_slug" readonly>
                        </div>

                        <div class="form-group">
                            <label>Talent Slug</label>
                            <input type="text" name="talent_slug" class="form-control" id="talent_slug" readonly>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


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