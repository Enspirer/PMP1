

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/projects.css') }}">
@endpush
    <div class="container" style="padding-top: 200px;">
        <div class="bread-crumb">
            <div class="row align-items-center">
                <div class="col-1 text-center">
                    <img src="{{url('theme_light/assets/categories/programming_development.svg')}}" alt="" style="height: 40px;">
                </div>

                <div class="col-11">
                    <p class="mb-0" style="color: #0F9D58; font-size:0.9rem;">Programming & Development&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;Basic Website</p>
                </div>
            </div>
        </div>


        <div class="row mt-5 align-items-center mb-5">
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid">
            </div>

            <div class="col-11">
                <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your job a title</h5>
            </div>

            <input type="text" class="form-control mt-3 w-100" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="margin-left: 1.8rem;">
        </div>


        <div class="row align-items-center">
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/projects/details.png') }}" alt="" class="img-fluid">
            </div>

            <div class="col-11">
                <h5 class="mb-0 text-secondary" style="font-size: 18px;">Describe the job in details</h5>
                
            </div>

            <p class="mt-2 text-secondary" style="margin-left: 1.8rem; font-size: 0.9rem;">Include expected deliverables, requirements and time frame for delivery</p>

            
        </div>


        <div class="form-group w-100 position-relative mb-0" style="margin-left: 1rem;">
            <div class="w-100" id="drag-drop-area"></div>
        </div>

        <div class="row" style="margin-left: 1rem;">
            <div class="col-6 p-0">
                <p style="font-size: 0.9rem;">Supported file types <img src="{{ url('theme_light/assets/projects/info-circle.svg') }}" alt="" class="img-fluid ml-2" style="height: 0.8rem"></p>
            </div>

            <div class="col-6 text-right p-0">
                <p style="font-size: 0.9rem;">Using 0/10MB</p>
            </div>
        </div>


        <div class="row justify-content-center mt-5 feature-buttons" style="margin-bottom: 8rem; margin-left: 1rem;">
            <div class="col-4 text-center">
                <button class="btn py-4 bg-light shadow border-0">Talk to Expert Center</button>
            </div>

            <div class="col-4 text-center">
                <button class="btn py-4 bg-light shadow border-0">Log In</button>
            </div>

            <div class="col-4 text-center">
                <button class="btn py-4 bg-light shadow border-0">Post Job & Hire Now</button>
            </div>
        </div>

        
    </div>


@push('after-scripts')
<script src="https://cdn.tiny.cloud/1/osu7g9y3krl6vramg8kqtncs4mbrx946rbehu781ysn5jo7e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
        uppy.use(GoogleDrive, { target: Uppy.Dashboard, companionUrl: 'https://ww.tallentor.com/' })

        .use(Uppy.Tus, {endpoint: 'https://tusd.tusdemo.net/files/'})

      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      })
    </script>

@endpush