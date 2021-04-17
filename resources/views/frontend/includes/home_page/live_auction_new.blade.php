<section id="live-auction-new">
  <div class="head-title">
    <div class="row" data-animscroll="fade-up">
      <div class="record-icon">
        <img src="{{url('theme_light/assets/image/icon/rec_red.svg')}}">
      </div>
      <h1><span>Live</span>Auction</h1>
    </div>
  </div>
  <div class="container">
    <div class="row">


      <div class="col-md-12" style="margin: auto;">
        <div class="auction-card-full">
          <div class="row">
            <div class="col-md-5" style="padding: 0px 20px 0 0;">
              <h1>
                Development of eCommerce platform for a leading Fashion brand
              </h1>
              <br>
              <h3>Auction ends in : <span>12 Hr 34 Min</span></h3>

              <br>
              <a data-toggle="modal" data-target="#exampleModalCenter" class="outline-auction" href="#" type="button">VIEW BRIEF</a>
              @auth()
              <a class="fill-auction" href="{{route('frontend.project_auction',1)}}" type="button">VIEW BID PAGE</a>
              @else
              <a class="fill-auction" href="{{route('frontend.auth.login')}}" type="button">SIGN IN TO BID</a>
              @endauth

            </div>
            <div class="col-md-7" style="padding: 0px 20px 0 40px">
              <div id="container" data-animscroll="fade-left" style="
                    height: 100%;
                    -webkit-tap-highlight-color: transparent;
                    user-select: none;
                    position: relative;
                  "></div>
            </div>
          </div>
        </div>





      </div>

    </div>
    <div class="auction-btn-center">

      <a class="auction-all-inner-link-btn" href="{{route('frontend.project_auction',1)}}" type="button">VIEW ALL AUCTIONS</a>
    </div>


  </div>
</section>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: Poppins;">Project Brief</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card" style="border: transparent;">
          <div class="container"><br>
            <b style="font-family: Poppins;">Development of eCommerce platform for a leading Fashion brand</b>
            <br><br>
            <p style="font-family: Poppins;">
              We are a multinational Currier company who
              is planning to get a customized ERP solution
              with the following modules <br>
              <br>
            </p>

            <ul style="font-family: Poppins;">
              <li>
                Accounting &amp; Financials
              </li>
              <li>Human Capital Management</li>
              <li>Manufacturing &amp; Distribution</li>
              <li>Manufacturing &amp; Distribution</li>
              <li>Sales &amp; Inventory Management</li>
              <li>Supply chain management</li>
              <li>Customer relationship management</li>
              <li>Support center management</li>
              <li>Deployment</li>
            </ul>
            <br>
            <p style="font-family: Poppins;">We have completed the initial project scope.
              The team to undertake the process analysis
              and define the sub task management with clear milestones
            </p>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" style="font-family: Poppins;    color: #000;
    background: transparent;
    border: 1px solid #000 !important;
    border: transparent;" data-dismiss="modal">Close</button>
        <button type="button" style="font-family: Poppins;color: #fff;
    background: #0f9d58;
    border: 1px solid #0f9d58 !important;
    border: transparent;" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>