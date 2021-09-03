<!-- company_size -->

<form action="{{ route('frontend.user.profile_company_size_update') }}" method="POST">
  {{csrf_field()}}
      <div class="modal fade" id="company_size" tabindex="-1" aria-labelledby="company_size_Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="company_size_Label">Company Size</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                    <label for="company_size">Company Size</label>
                    <input type="text" class="form-control" id="company_size" aria-describedby="company_size" name="company_size" value="{{ $profile_details->company_size }}">
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