<!-- profile_info -->

<form action="{{ route('frontend.user.profile_info_update') }}" method="POST">
  {{csrf_field()}}
  <div class="modal fade" id="profile_info" tabindex="-1" aria-labelledby="profile_info_Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profile_info_Label">Profile Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="profile_name">Profile Name</label>
                <input type="text" class="form-control" id="profile_name" aria-describedby="profile_name" name="profile_name" value="{{ $profile_details->profile_name }}">
            </div>

            <div class="form-group">
                <label for="profile_description">Profile Description</label>
                <textarea class="form-control" name="profile_description" id="profile_description" rows="7" value="{{ $profile_details->profile_description }}">{{ $profile_details->profile_description }}</textarea>
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