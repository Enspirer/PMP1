@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Create'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>E-shop Products Create</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <form action="{{route('admin.eshop_products.store')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" class="form-control">
                                <option value="1">cat1</option>
                                <option value="2">cat2</option>
                                <option value="3">cat3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="body"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Product Details</label>
                            <textarea name="product_details" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Feature Image</label>
                            <input type="file" name="feature_image" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="images" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <label>Demo Link Availability</label>
                            <select name="demo_link_availability" class="form-control">
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Demo Link</label>
                            <input type="url" name="demo_link" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Customization Availability</label>
                            <select name="customization_availability" class="form-control">
                                <option value="1">Available</option>
                                <option value="0">Not Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Is Feature</label>
                            <select name="is_feature" class="form-control">
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" name="order" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->


    <script>
        CKEDITOR.replace('body');
    </script>

@endsection
