@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('Edit'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>E-shop Products Edit</strong>
                </div><!--card-header-->

                <div class="card-body">
                    <form action="{{route('admin.eshop_products.update')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" value="{{ $eshop->product_name }}" class="form-control">
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
                            <textarea name="description" id="body">{{ $eshop->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company_name" value="{{ $eshop->company_name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $eshop->price }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Product Details</label>
                            <textarea name="product_details" class="form-control" rows="5">{{ $eshop->product_details }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Feature Image</label>
                            <input type="file" name="feature_image" class="form-control-file">
                        </div>
                        <br>
                        <img src="{{url('upload\shop',$eshop->feature_image)}}" style="width: 30%;" alt="" >
                        <br><br>

                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="images" class="form-control-file">
                        </div>
                        <br>
                        <img src="{{url('upload\shop',$eshop->images)}}" style="width: 30%;" alt="" >
                        <br><br>

                        <div class="form-group">
                            <label>Demo Link Availability</label>
                            <select name="demo_link_availability" class="form-control">
                                <option value="1" {{ $eshop->demo_link_available == 1 ? "selected" : "" }}>Available</option>
                                <option value="0" {{ $eshop->demo_link_available == 0 ? "selected" : "" }}>Not Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Demo Link</label>
                            <input type="url" name="demo_link" value="{{ $eshop->demo_link }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Customization Availability</label>
                            <select name="customization_availability" class="form-control">
                                <option value="1" {{ $eshop->customization_available == 1 ? "selected" : "" }}>Available</option>
                                <option value="0" {{ $eshop->customization_available == 0 ? "selected" : "" }}>Not Available</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Is Feature</label>
                            <select name="is_feature" class="form-control">
                                <option value="Enabled" {{ $eshop->is_feature == 'Enabled' ? "selected" : "" }}>Enabled</option>
                                <option value="Disabled" {{ $eshop->is_feature == 'Disabled' ? "selected" : "" }}>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="Enabled" {{ $eshop->status == 'Enabled' ? "selected" : "" }}>Enabled</option>
                                <option value="Disabled" {{ $eshop->status == 'Disabled' ? "selected" : "" }}>Disabled</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" name="order" value="{{ $eshop->order }}" class="form-control">
                        </div>

                        <input type="hidden" name="hidden_id" value="{{ $eshop->id }}"/>
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
