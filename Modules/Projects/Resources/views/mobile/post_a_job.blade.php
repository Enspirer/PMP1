

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/projects.css') }}">
@endpush

@if ( session()->has('message') )

  <div class="container" style="background-color: #98FB98; padding-top:1px; text-align:center;">
      <div class="">
        <h1 style="margin-top:50px;" class="fs-1">Thank You!</h1><br>
        <p class="lead mb-2"><h4>We received your application. We appreciate you taking the time to apply.<br><br>  If you are selected for an interview, our human resources department will be in contact with you.<br><br> Have a great day!</h4></p>
        <hr class="mt-4 mb-4">  
        <p class="lead">
            <a class="btn btn-secondary btn-md mt-1 mb-1" style="color:white; border:1px solid grey" href="{{url('projects/talents')}}" role="button">Go Back to Talents Page</a>
        </p>
        <br>
      </div>
  </div>
@else  

    <div class="container-fluid" style="padding-top: 60px;">

        <div class="row justify-content-between mb-3">
            <div class="col-12">
                <div class="categories text-center" id="nav-tab" role="tablist">
                    <a href="{{ route('frontend.talents') }}" class="btn btn-secondary mb-3 w-75" type="button" style="background-color: #0f9d58;">
                        Top Categories
                    </a>
                </div>
            </div>
        </div>


        <div class="bread-crumb">
            <div class="row align-items-center">
                <div class="col-2 text-center">
                    <img src="{{url('upload/projects', Modules\Projects\Entities\ProjectCategory::where('name', $category)->first()->icon)}}" alt="" style="height: 2rem;">
                </div>

                <div class="col-10">
                    <p class="mb-0" style="color: #0F9D58; font-size:0.9rem;">{{ $category }}&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;{{ $talent }}</p>
                </div>
            </div>
        </div>


        <form action="{{route('frontend.post_a_job.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="row mt-4 align-items-center mb-5">
                <div class="col-2 text-center">
                    <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid" style="height: 2rem;">
                </div>

                <div class="col-10">
                    <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your job a title</h5>
                </div>

                <input type="text" name="title" class="form-control mt-3 w-100 mx-3" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            @if(empty( auth()->user()->id) === true )
                <div class="row mt-5 align-items-center mb-5">
                    <div class="col-2 pr-0">
                        <img src="{{ url('theme_light/assets/projects/user.png') }}" alt="" class="img-fluid" style="height: 2rem;">
                    </div>

                    <div class="col-10 pl-0">
                        <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your Name</h5>
                    </div>

                    <div class="col-12">
                        <input type="text" name="name" class="form-control mt-3 w-100" placeholder="Name" aria-label="name" aria-describedby="basic-addon1" required>
                    </div>
                </div>
                <div class="row mt-5 align-items-center mb-5">
                    <div class="col-2 pr-0">
                        <img src="{{ url('theme_light/assets/projects/email.png') }}" alt="" class="img-fluid" style="height: 2rem;">
                    </div>

                    <div class="col-10 pl-0">
                        <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your Email Address</h5>
                    </div>

                    <div class="col-12">
                        <input type="text" name="email" class="form-control mt-3 w-100" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" required>
                    </div>
                </div>
            @endif


            <div class="row align-items-center">
                <div class="col-2 text-center">
                    <img src="{{ url('theme_light/assets/projects/details.png') }}" alt="" class="img-fluid" style="height: 2rem;">
                </div>

                <div class="col-10">
                    <h5 class="mb-0 text-secondary" style="font-size: 18px;">Describe the job in details</h5>
                    
                </div>

                <p class="mt-2 text-secondary mx-3" style="font-size: 0.9rem;">Include expected deliverables, requirements and time frame for delivery</p>

                
            </div>


            <!-- <div class="form-group w-100 position-relative mb-0">
                <div class="w-100" id="drag-drop-area"></div>
            </div>

            <div class="row">
                <div class="col-6">
                    <p style="font-size: 0.9rem;">Supported file types <img src="{{ url('theme_light/assets/projects/info-circle.svg') }}" alt="" class="img-fluid ml-2" style="height: 0.8rem"></p>
                </div>

                <div class="col-6 text-right">
                    <p style="font-size: 0.9rem;">Using 0/10MB</p>
                </div>
            </div> -->

            <div class="row mb-5">
                <div class="col-12">
                    <input type="file" name="file" class="form-control mt-3 w-100" placeholder="File Upload" aria-label="FileUpload" aria-describedby="basic-addon1" required>
                </div>
            </div>

            <div class="row mt-4 mb-5">
                <div class="col-12">
                    <textarea name="project_brief" rows="5" class="form-control" placeholder="Project Brief" required></textarea>
                </div>
            </div>

            <div class="row mb-2 justify-content-center">
                <div class="col-12 text-center">
                    <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" style="display: inline-block;"></div>
                    <br>
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                </div>                
            </div>

            <div class="row mt-4 mb-5">
                <div class="col-12 text-center">
                    <button type="submit" class="btn text-light py-3 rounded-0 w-75 fw-bold" style="background-color: #d78713; border:none; font-size: 1.2rem; position: relative; top: -0.4rem;">Submit</button>
                </div>
            </div>
            

        </form>   


        <div class="row justify-content-center mt-5 feature-buttons-mobile" style="margin-bottom: 4rem;">
            <div class="col-sm-12 text-center mb-3">
                <button class="btn py-3 bg-light shadow border-0">Talk to Expert Center</button>
            </div>

            <div class="col-sm-12 text-center mb-3">
                <button class="btn py-3 bg-light shadow border-0">Log In</button>
            </div>

            <div class="col-sm-12 text-center mb-3">
                <button class="btn py-3 bg-light shadow border-0">Post Job & Hire Now</button>
            </div>
        </div>
    </div>


@push('after-scripts')
<script src="https://cdn.tiny.cloud/1/osu7g9y3krl6vramg8kqtncs4mbrx946rbehu781ysn5jo7e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
            $('#submit_btn').removeAttr('disabled');
        };
    </script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>

<!-- <script>
    Dropzone.options.myAwesomeDropzone  = {
    dictDefaultMessage: null
};
</script> -->

<script>
    const { Instagram } = Uppy;
    const { Facebook } = Uppy;
    const { Url } = Uppy;
    const { Dropbox } = Uppy;
    const { OneDrive } = Uppy;
    const { Zoom } = Uppy;
    const { GoogleDrive } = Uppy


      var uppy = new Uppy.Core()
        .use(Uppy.Dashboard, {
          inline: true,
          target: '#drag-drop-area'
        })


        uppy.use(Facebook, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/' })
        uppy.use(Instagram, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/' })
        uppy.use(Url, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/', locale: {} })
        uppy.use(Dropbox, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/' })
        uppy.use(OneDrive, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/' })
        // uppy.use(Zoom, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/' })
        uppy.use(GoogleDrive, { target: Uppy.Dashboard, companionUrl: 'https://companion.uppy.io/' })

        .use(Uppy.Tus, {endpoint: 'https://www.tallentor.com/files/'})

      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      })
    </script>

@endpush

@endif