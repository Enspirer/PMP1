<!-- profile_info -->
  <div class="modal fade" id="portfolio_view{{ $portfolio->id }}" tabindex="-1" aria-labelledby="portfolio_view{{ $portfolio->id }}_Label" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 60%;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="portfolio_view{{ $portfolio->id }}_Label"></h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              <div class="row">
                <div class="col-6">
                  <img src="{{ url('files', $portfolio->image) }}" alt="" class="img-fluid w-100" style="height:290px; object-fit: cover;">
                </div>

                <div class="col-6">
                  <h5 class="text-left" style="line-height: 30px;">{{ $portfolio->title }}</h5>

                  <p class="" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 9; -webkit-box-orient: vertical; text-align: justify;">{{ $portfolio->description }}</p>

                  <p class="text-left font-weight-bold">Client Name : {{ $portfolio->client_name }}</p>
                </div>
              </div>
        </div>

        <div class="modal-footer">
          <a href="{{ url($portfolio->link) }}" type="button" class="btn text-light" style="background-color: #FF6347;">View more</a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>