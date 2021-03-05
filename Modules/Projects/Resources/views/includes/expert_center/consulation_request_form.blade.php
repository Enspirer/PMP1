<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: purple;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white">Request 15min free consultation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('frontend.consulting_request')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" value="" name="name">
                    </div>
                    <div class="form-group">
                        <label>Company name:</label>
                        <input type="text" class="form-control" value="" name="company_name">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" value="" name="email">
                    </div>
                    <div class="form-group">
                        <label>Telephone:</label>
                        <input type="text" class="form-control" value="" name="telephone">
                    </div>
                    <div class="form-group">
                        <label>Project Brief:</label>
                        <textarea type="text" class="form-control" rows="5" name="project_brief"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Appoint date and time:</label>
                        <input type="text" class="form-control" value="" name="appoiment_date_time">
                    </div>
                    <div class="form-group">
                        <label>Additional notes :</label>
                        <textarea type="text" class="form-control" rows="5" name="additional_note"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>