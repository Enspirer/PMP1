<!-- awards -->

    <div class="modal fade" id="awards_on" tabindex="-1" aria-labelledby="awards_Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="awards_Label">Awards and Badges</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="specialization">Awards and Badges</label>
                    <input type="text" class="form-control" id="awards" aria-describedby="awards" name="awards">
                </div>

                <div class="form-group">
                    <label for="awards_description">Description</label>
                    <textarea class="form-control" id="awards_description" value="" rows="7"></textarea>
                </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button id="awards_btn" class="btn btn-primary">Update</button>
          </div>
        </div>
      </div>
    </div>

@push('after-scripts')
  <script>
   let awards = 2;

  $('#awards_btn').on('click', function() {

      let name = $('#awards').val();
      let description = $('#awards_description').val();

      let template = `<div class="row border rounded py-3 card-db mt-4 mb-3">
                    <div class="col-12">
          <div class="accordion">
              <div class="accordion-item">
                  <div class="accordion-header">
                      <div class="row align-items-center">
                          <div class="col-10 p-0">
                              <input class="h6 mb-0 border-0" value="${name}" name="awards[]">
                          </div>

                          <div class="col-2 p-0">
                              <div class="row">
                                <div class="col-4 p-0 text-right">
                                    <i class="fas fa-pen rounded-pill text-muted" type="button" data-bs-toggle="modal" data-bs-target="#awards_edit" style="background-color:#e3dfde; padding:13px;"></i>
                                </div>
                                <div class="col-4 p-0 text-right">
                                      <i class="fas fa-trash-alt rounded-pill text-muted deleteAwards" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                  </div>
                                <div class="col-4 p-0 text-right">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#awards${awards}" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-plus rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                    </a>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div id="awards${awards}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                      <div class="accordion-body">
                          <textarea class="form-control" name="awards_description[]" value="${description}" rows="4">${description}</textarea>
                      </div>
                  </div>
              </div>
          </div>`

      $('.awards').append(template);
      awards++;

        $('.deleteAwards').on('click', function() {
            $(this).parents('.row').remove();
        });
    });

    $('.deleteAwards').on('click', function() {
            $(this).parents('.row').remove();
    });
      

    $('#awards_on').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    })
  </script>
@endpush