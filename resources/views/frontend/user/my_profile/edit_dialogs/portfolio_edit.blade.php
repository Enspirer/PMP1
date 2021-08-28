<!-- profile_info -->
<form action="{{ route('frontend.user.portfolio_update') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="modal fade" id="portfolio_edit{{ $portfolio->id }}" tabindex="-1" aria-labelledby="portfolio_edit{{ $portfolio->id }}_Label" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 70%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="portfolio_edit{{ $portfolio->id }}_Label">Edit Portfolio</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-4 text-center">
              <div class="mb-3 edit_port" style="border: 2px dashed #868e96; height: 225px;" type="button">
                <h5 class="text-secondary" style="line-height: 2rem; position: relative; top: 50%; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);">Add Portfolio <br> Image</h5>
              </div>
              <input type="text" class="form-control" id="image_edit_name" disabled>
              <img src="{{url('files/',$portfolio->image)}}" alt="" class="img-fluid w-100 mt-3"style="height: 200px; object-fit: cover;">
            </div>

            <input type="file" class="form-control" id="image_edit" name="new_image" value="{{ $portfolio->image }}" style="display: none">

            <div class="col-8 text-left">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="edit_title" aria-describedby="title" name="title" value="{{ $portfolio->title }}">
              </div>
              
              <input type="hidden" class="form-control" id="old_image" name="old_image" value="{{ $portfolio->image }}">

              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="edit_description" value="<?php echo $portfolio['description'];?>" rows="7">{{ $portfolio->description }}</textarea>
              </div>

              <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="edit_link" aria-describedby="link" name="link" value="{{ $portfolio->link }}">
              </div>

              <div class="form-group">
                  <label for="client_name">Client Name</label>
                  <input type="text" class="form-control" id="edit_client_name" aria-describedby="client_name" name="client_name" value="{{ $portfolio->client_name }}">
              </div>
            </div>
          </div>

             
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="hidden" class="form-control" id="hid_id" aria-describedby="hid_id" name="hid_id" value="{{ $portfolio->id }}">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        
      </div>
    </div>
  </div>

</form>