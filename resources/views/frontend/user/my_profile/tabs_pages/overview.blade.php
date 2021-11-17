<div class="container">
    <div class="border rounded pb-3 card-db mb-5">
        <div class="row justify-content-end mt-1 mr-1">
            <div class="col-2 text-right p-0">
                <i class="fas fa-pen rounded-pill text-muted ml-3" type="button" data-bs-toggle="modal" data-bs-target="#overview_info" style="background-color:#e3dfde; padding:13px;"></i>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-3 text-center">
                @if($user->company_logo == null )
                    <img src="{{ url('img/no-image.jpg') }}" alt="" class="img-fluid border" width="60%">
                @else
                    <img src="{{url('files/company_logo',$user->company_logo)}}" class="img-fluid" width="60%" alt="">
                @endif
            </div>
            <div class="col-5">
                <h4 class="font-weight-bold">{{ $user->company_name }}</h4>
                <p class="text-secondary mb-0"><i class="fas fa-map-marker-alt mr-3"></i>{{ $user->location }}</p>
            </div>

            <div class="col-4 text-right">
                <button class="btn text-light" style="background-color: #FF6347">VIEW AS PUBLIC</button>
            </div>
        </div>
    </div>


    @include('frontend.user.my_profile.edit_dialogs.overview_info')

    
    @if($profile_details->profile_description != null)
        <div class="border rounded p-4 card-db mb-5">            
            {{$profile_details->profile_description}}
        </div>
    @endif



    
    
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