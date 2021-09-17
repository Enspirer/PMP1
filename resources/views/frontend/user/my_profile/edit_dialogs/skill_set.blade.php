<!-- skill_set -->
<form action="{{ route('frontend.user.profile_skills_update') }}" method="POST">
  {{csrf_field()}}
    <div class="modal fade" id="skill_set" tabindex="-1" aria-labelledby="skill_set_Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="skill_set_Label">Skill Set</h5>
            <i class="fas fa-plus rounded-pill text-muted text-end" type="button" style="background-color:#e3dfde; padding:13px;" onclick="add()"></i>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          </div>
          <div class="modal-body skills-body">
              @if($profile_details->skills != null)
                  @foreach(json_decode($profile_details->skills) as $skill)
                      <div class="row align-items-center mb-3">
                        <div class="col-10">
                          <div class="form-group mb-0">
                            <input type="text" class="form-control" name="skills[]" value="{{ $skill }}">
                          </div>
                        </div>

                        <div class="col-2">
                          <i class="fas fa-trash-alt rounded-pill text-muted delete" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                        </div>
                      </div>
                  @endforeach

              @else
                  <div class="row align-items-center mb-3">
                    <div class="col-10">
                      <div class="form-group mb-0">
                        <input type="text" class="form-control" name="skills[]" value="">
                      </div>
                    </div>

                    <div class="col-2">
                      <i class="fas fa-trash-alt rounded-pill text-muted delete" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                    </div>
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


@push('after-scripts')
  <script>
    function add() {
      let template = `<div class="row align-items-center mb-3">
                        <div class="col-10">
                          <div class="form-group mb-0">
                            <input type="text" class="form-control" name="skills[]" value="">
                          </div>
                        </div>

                        <div class="col-2">
                          <i class="fas fa-trash-alt rounded-pill text-muted delete" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                        </div>
                      </div>`;

      $('.skills-body').append(template);

        $('.delete').on('click', function() {
            $(this).parents('.row').remove();
      });
    }

    $('.delete').on('click', function() {
            $(this).parents('.row').remove();
    });

    
  </script>
@endpush