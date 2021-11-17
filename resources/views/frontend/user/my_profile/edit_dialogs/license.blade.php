<!-- license -->


      <div class="modal fade" id="license_on" tabindex="-1" aria-labelledby="license_Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="license_Label">License and Certifications</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="license">License and Certification</label>
                    <input type="text" class="form-control" id="license" aria-describedby="license" name="license">
                </div>

                <div class="form-group">
                    <label for="license_description">Description</label>
                    <textarea class="form-control" name="description" id="license_description" rows="7"></textarea>
                </div>
            </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button id="license_btn" type="button" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>


@push('after-scripts')
  <script>
   let license = 2;

  $('#license_btn').on('click', function() {

      let name = $('#license').val();
      let description = $('#license_description').val();


      let template = `<div class="row border rounded py-3 card-db mt-4 mb-3">
                    <div class="col-12">
          <div class="accordion">
              <div class="accordion-item">
                  <div class="accordion-header">
                      <div class="row align-items-center">
                          <div class="col-10 p-0">
                              <input class="h6 mb-0 border-0" value="${name}" name="license[]">
                          </div>

                          <div class="col-2 p-0">
                              <div class="row">
                                <div class="col-4 p-0 text-right">
                                    <i class="fas fa-pen rounded-pill text-muted" type="button" data-bs-toggle="modal" data-bs-target="#license_edit" style="background-color:#e3dfde; padding:13px;"></i>
                                </div>
                                <div class="col-4 p-0 text-right">
                                      <i class="fas fa-trash-alt rounded-pill text-muted deleteLicense" type="button" style="background-color:#e3dfde; padding:13px;"></i>
                                  </div>
                                <div class="col-4 p-0 text-right">
                                    <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#license${license}" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-plus rounded-pill text-muted" style="background-color:#e3dfde; padding:13px;"></i>
                                    </a>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div id="license${license}" class="accordion-collapse collapse" aria-labelledby="headingOne">
                      <div class="accordion-body">
                          <textarea class="form-control" name="license_description[]" rows="4">${description}</textarea>
                      </div>
                  </div>
              </div>
          </div>`

      $('.licenses').append(template);
      license++;

        $('.deleteLicense').on('click', function() {
            $(this).parents('.row').remove();
        });
    });

    $('.deleteLicense').on('click', function() {
            $(this).parents('.row').remove();
    });
      

    $('#license_on').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    })
  </script>
@endpush