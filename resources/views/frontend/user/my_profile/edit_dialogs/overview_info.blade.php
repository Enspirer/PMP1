<!-- profile_info -->
<!-- <form action=""></form> -->
<form action="{{ route('frontend.user.overview') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="modal fade" id="overview_info" tabindex="-1" aria-labelledby="overview_info_Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="overview_info_Label">Profile Info</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
             
              <div class="form-group">
                  <label>Profile Picture</label>
                  <input type="file" class="form-control" name="company_logo">
                  <br>
                  <img src="{{url('files/company_logo',$user->company_logo)}}" class="img-fluid" width="50%" alt="">                 
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