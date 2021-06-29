<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding: 120px;">
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
                        <input type="text" class="form-control" value="" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Company name:</label>
                        <input type="text" class="form-control" value="" name="company_name" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" value="" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Telephone:</label>
                        <input type="text" class="form-control" value="" name="telephone" required>
                    </div>
                    <div class="form-group">
                        <label>Project Brief:</label>
                        <textarea type="text" class="form-control" rows="5" name="project_brief" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Appoint date and time:</label>
                        <input type="datetime-local" class="form-control" value="" name="appoiment_date_time" required>
                    </div>
                    <div class="form-group">
                        <label>Additional notes :</label>
                        <textarea type="text" class="form-control" rows="5" name="additional_note"></textarea>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="font-family: Poppins;    color: #000;
    background: transparent;
    border: 1px solid #000 !important;
    border: transparent;" data-dismiss="modal">Close</button>
    <button type="submit" style="font-family: Poppins;color: #fff;
    background: #0f9d58;
    border: 1px solid #0f9d58 !important;
    border: transparent;" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="z-index: 99999999999999999999;">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Request 15min free consultation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Your name*</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Company name</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Email)</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Telephone*</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Project brief*</label>
                        <textarea class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Appointment date and time</label>
                        <input type="datetime-local" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label>Additional notes</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>




                    <div class="row m-0 d-flex justify-content-center">
                        <button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-submit ml-4">SUBMIT</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>