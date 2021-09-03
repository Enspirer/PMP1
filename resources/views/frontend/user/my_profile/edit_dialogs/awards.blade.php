<!-- awards -->

<form action="{{ route('frontend.user.profile_awards_update') }}" method="POST">
  {{csrf_field()}}
    <div class="modal fade" id="awards" tabindex="-1" aria-labelledby="awards_Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="awards_Label">Awards and Badges</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
                <div class="form-group">
                    <label for="specialization">Awards and Badges</label>
                    <input type="text" class="form-control" id="awards" aria-describedby="awards" name="awards">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="7"></textarea>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>

</form>