<div class="container">
    <div class="border rounded pb-3 card-db mb-5">
        <div class="row justify-content-end mt-1 mr-1">
            <div class="col-2 text-right p-0">
                <i class="fas fa-pen rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#overview_info" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-3 text-center">
                <img src="{{ url('img/user-image.jpg') }}" alt="" class="img-fluid" style="height: 130px">
            </div>
            <div class="col-5">
                <h4 class="font-weight-bold">Enspirer (pvt) Ltd</h4>
                <p class="text-secondary mb-0"><i class="fas fa-map-marker-alt mr-3"></i>Nugegoda, Sri Lanka</p>
            </div>

            <div class="col-4 text-right">
                <button class="btn text-light" style="background-color: #FF6347">VIEW AS PUBLIC</button>
            </div>
        </div>
    </div>


    @include('frontend.user.my_profile.edit_dialogs.overview_info')


    <div class="row border rounded py-3 align-items-center card-db text-center">
        <div class="col">
            <img src="{{ url('img/top.jpg') }}" alt="" class="img-fluid w-100">

            <h6 class="font-weight-bold mt-1">Top Rated</h6>
        </div>

        <div class="col">
            <div class="pie" data-pie='{ "percent": 100, "round": true, "number": false, "colorCircle": "#e6e6e6", "size": "130", "lineargradient": ["#0e9031","#00ff22"] }' ></div>

            <h6 class="font-weight-bold mt-3">100% Response Rate</h6>
        </div>

        <div class="col">
            <div class="pie" data-pie='{ "percent": 96, "round": true, "number": false, "colorCircle": "#e6e6e6", "size": "130", "lineargradient": ["#0e9031","#00ff22"] }'></div>

            <h6 class="font-weight-bold mt-4">96% Order Completion</h6>
        </div>

        <div class="col">
            <div class="pie" data-pie='{ "percent": 90, "round": true, "number": false, "colorCircle": "#e6e6e6", "size": "130", "lineargradient": ["#0e9031","#00ff22"] }'></div>

            <h6 class="font-weight-bold mt-4">90% On-Time Delivery</h6>
        </div>

        <div class="col">
            <div class="pie" data-pie='{ "percent": 97, "round": true, "number": false, "colorCircle": "#e6e6e6", "size": "130", "lineargradient": ["#0e9031","#00ff22"] }'></div>

            <h6 class="font-weight-bold mt-4">4.85 rating</h6>
        </div>
    </div>


    <div class="stats mt-5 mb-5">
        <h4>Stats on this month</h4>

        <div class="row border rounded align-items-center card-db text-left">
            <div class="col border py-4">
                <h6 class="mb-4">Earning in February</h6>

                <h4><span style="font-size: 13px">LKR</span> <br> 84,656</h4>
            </div>

            <div class="col border py-4">
                <h6 class="mb-4">Personal Balance</h6>

                <h4><span style="font-size: 13px">LKR</span> <br> 50,600</h4>
            </div>

            <div class="col border py-4">
                <h6 class="mb-4">Pending Clearance</h6>

                <h4><span style="font-size: 13px">LKR</span> <br> 34,056</h4>
            </div>

            <div class="col border py-4">
                <h6 class="mb-4">Active Projects</h6>

                <h4><span style="font-size: 13px">LKR</span> <br> 20,300</h4>
            </div>

            <div class="col border py-4">
                <h6 class="mb-4">Cancelled Projects</h6>

                <h4><span style="font-size: 13px">LKR</span> <br> 0.00</h4>
            </div>
        </div>
    </div>
    
</div>


@push('after-scripts')

<script src="{{ url('theme_light/js/circularProgressBar.min.js') }}"></script>
<script>

      window.addEventListener('DOMContentLoaded', () => {
        const circle = new CircularProgressBar('pie');

        // const pie = document.querySelectorAll('.pie');
        // const range = document.querySelector('[type="range"]');

        
        //   pie.forEach((el, index) => {

        //     const options = {
        //       index: index + 1,
        //       percent: el.target.data-pie
        //     }
        //     circle.animationTo(options);
        //   })
        

        // setInterval(() => {
        //   const options = {
        //     index: 14,
        //     percent: Math.floor((Math.random() * 100) + 1),
        //   }
        //   circle.animationTo(options);
        // }, 3000);



      });
    </script>



@endpush