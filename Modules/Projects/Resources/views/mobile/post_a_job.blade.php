

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/projects.css') }}">
@endpush
    <div class="container-fluid" style="padding-top: 60px;">
        <div class="bread-crumb">
            <div class="row align-items-center">
                <div class="col-2 text-center">
                    <img src="{{url('theme_light/assets/categories/programming_development.svg')}}" alt="" style="height: 2rem;">
                </div>

                <div class="col-10">
                    <p class="mb-0" style="color: #0F9D58; font-size:0.9rem;">{{ $category }}&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;{{ $talent }}</p>
                </div>
            </div>
        </div>


        <div class="row mt-4 align-items-center mb-5">
            <div class="col-2 text-center">
                <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid" style="height: 2rem;">
            </div>

            <div class="col-10">
                <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your job a title</h5>
            </div>

            <input type="text" class="form-control mt-3 w-100 mx-3" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>


        <div class="row align-items-center">
            <div class="col-2 text-center">
                <img src="{{ url('theme_light/assets/projects/details.png') }}" alt="" class="img-fluid" style="height: 2rem;">
            </div>

            <div class="col-10">
                <h5 class="mb-0 text-secondary" style="font-size: 18px;">Describe the job in details</h5>
                
            </div>

            <p class="mt-2 text-secondary mx-3" style="font-size: 0.9rem;">Include expected deliverables, requirements and time frame for delivery</p>

            
        </div>


        <div class="form-group w-100 position-relative mb-0">
            <div class="w-100" id="drag-drop-area"></div>
        </div>

        <div class="row">
            <div class="col-6">
                <p style="font-size: 0.9rem;">Supported file types <img src="{{ url('theme_light/assets/projects/info-circle.svg') }}" alt="" class="img-fluid ml-2" style="height: 0.8rem"></p>
            </div>

            <div class="col-6 text-right">
                <p style="font-size: 0.9rem;">Using 0/10MB</p>
            </div>
        </div>

        <div class="row mt-4 mb-5">
            <div class="col-12">
                <textarea name="project_brief" rows="5" class="form-control" placeholder="Project Brief"></textarea>
            </div>
        </div>

        <div class="row mb-2 justify-content-center">
            <div class="col-12 text-center">
                <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" style="display: inline-block;"></div>
            </div>
        </div>


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