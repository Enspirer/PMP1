<!-- skill_set -->
<form action="{{ route('frontend.user.profile_skills_update') }}" method="POST">
  {{csrf_field()}}
    <div class="modal fade" id="skill_set" tabindex="-1" aria-labelledby="skill_set_Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="skill_set_Label">Skill Set</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              @if($profile_details->skills != null)
                  @foreach(json_decode($profile_details->skills) as $skill)
                      <div class="form-group">
                          <input type="text" class="form-control" name="skills[]" value="{{ $skill }}">
                      </div>
                  @endforeach

              @else
                  <div class="form-group">
                      <input type="text" class="form-control" name="skills[]" value="">
                  </div>
              @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>
</form>