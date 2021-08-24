<!-- profile_info -->
<form action="{{ route('frontend.user.portfolio_update') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="modal fade" id="add_portfolio" tabindex="-1" aria-labelledby="add_portfolio_Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_portfolio_Label">Add Portfolio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="title" name="title">
              </div>

              <div class="form-group">
                  <label for="image">Portfolio Image</label>
                  <input type="file" class="form-control" id="image" name="image">
              </div>

              <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"></textarea>
              </div>

              <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" aria-describedby="link" name="link">
              </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        
      </div>
    </div>
  </div>

</form>