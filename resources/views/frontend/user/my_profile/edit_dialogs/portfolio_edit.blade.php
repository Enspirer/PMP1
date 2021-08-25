<!-- profile_info -->
<form action="{{ route('frontend.user.portfolio_update') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="modal fade" id="portfolio_edit{{ $portfolio->id }}" tabindex="-1" aria-labelledby="portfolio_edit{{ $portfolio->id }}_Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="portfolio_edit{{ $portfolio->id }}_Label">Edit Portfolio</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-left">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="title" name="title" value="{{ $portfolio->title }}">
              </div>

              <div class="form-group">
                  <label for="image">Portfolio Image</label>
                  <input type="file" class="form-control" id="new_image" name="new_image" value="{{ $portfolio->image }}">
              </div>

              <input type="hidden" class="form-control" id="old_image" name="old_image" value="{{ $portfolio->image }}">

              <div class="row justify-content-center">
                <div class="col-6 text-center">
                  <img src="{{url('files/',$portfolio->image)}}" alt="" class="img-fluid w-100" style="height: 170px; object-fit: cover;">
                </div>
              </div>

              
              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" value="<?php echo $portfolio['description'];?>">{{ $portfolio->description }}</textarea>
              </div>

              <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" aria-describedby="link" name="link" value="{{ $portfolio->link }}">
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