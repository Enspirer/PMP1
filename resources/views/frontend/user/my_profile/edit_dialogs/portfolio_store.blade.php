<!-- profile_info -->
<form action="{{ route('frontend.user.portfolio_store') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="modal fade" id="portfolio_store" tabindex="-1" aria-labelledby="portfolio_store_Label" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 70%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="portfolio_store_Label">Add Portfolio</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-4 text-center">
              <div class="mb-3 add_new" style="border: 2px dashed #868e96; height: 225px;" type="button">
                <h5 class="text-secondary" style="line-height: 2rem; position: relative; top: 50%; -webkit-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%);">Add Portfolio <br> Image</h5>
              </div>
              <input type="text" class="form-control" id="image_new_name" disabled>
            </div>

            
            <input type="file" class="form-control" id="image_store" name="image" style="display: none">

            <div class="col-8">
              <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
              </div>

              <div class="form-group">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="description" rows="7"></textarea>
              </div>

              <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" class="form-control" id="link" aria-describedby="link" name="link">
              </div>

              <div class="form-group">
                  <label for="client_name">Client Name</label>
                  <input type="text" class="form-control" id="client_name" aria-describedby="client_name" name="client_name">
              </div>
            </div>
          </div>
              
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add Portfolio</button>
        </div>
        
      </div>
    </div>
  </div>

</form>