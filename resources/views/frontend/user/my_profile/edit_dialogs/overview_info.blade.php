<!-- profile_info -->
<form>
  <div class="modal fade" id="overview_info" tabindex="-1" aria-labelledby="overview_info_Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="overview_info_Label">Profile Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" aria-describedby="address">
              </div>

              <div class="form-group">
                  <label>Profile Picture</label>
                  <input type="file" class="form-control" name="large_left_image">
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