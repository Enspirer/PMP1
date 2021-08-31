

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
                    <h5 class="mb-0" style="color: #0F9D58">Programming & Development&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;Basic Website</h5>
                </div>
            </div>
        </div>


        <div class="row mt-5 align-items-center mb-5">
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid">
            </div>

            <div class="col-11">
                <h5 class="mb-0 text-secondary">Give your job a title</h5>
            </div>

            <input type="text" class="form-control mt-3 w-100" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="margin-left: 1.8rem;">
        </div>


        <div class="row align-items-center">
            <div class="col-1 text-center">
                <img src="{{ url('theme_light/assets/projects/details.png') }}" alt="" class="img-fluid">
            </div>

            <div class="col-11">
                <h5 class="mb-0 text-secondary">Describe the job in details</h5>
                
            </div>

            <p class="mt-2" style="margin-left: 1.8rem;">Include expected deliverables, requirements and time frame for delivery</p>

            
        </div>

        <div class="form-group w-100" style="margin-left: 1rem;">
            <textarea id="editor"></textarea>
        </div>


        <div class="form-group w-100 position-relative" style="margin-left: 1rem;">
            <!-- <form action="/file-upload" class="dropzone" id="my-awesome-dropzone">
                <div class="row align-items-center w-100" style="position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
                    <div class="col-6">
                        <div class="row align-items-center">
                            <div class="col-1 text-center">
                                <img src="{{ url('theme_light/assets/projects/upload.png') }}" class="img-fluid">
                            </div>
                            <div class="col-11">
                                <h5 class="mb-0">Drag and drop a file here</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-1">
                        <h5 class="mb-0">OR</h5>
                    </div>

                    <div class="col-5 text-right">
                        <button type="file" class="btn bg-light text-primary border-success class="dropzone"">Upload Files</button>
                    </div>
                </div>
            </form> -->
            <div class="w-100" id="drag-drop-area"></div>
        </div>

        <div class="row" style="margin-left: 1rem;">
            <div class="col-6 p-0">
                <p>Supported file types <img src="{{ url('theme_light/assets/projects/info-circle.svg') }}" alt="" class="img-fluid ml-2"></p>
            </div>

            <div class="col-6 text-right p-0">
                <p>Using 0/10MB</p>
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
      var uppy = new Uppy.Core()
        .use(Uppy.Dashboard, {
          inline: true,
          target: '#drag-drop-area'
        })
        .use(Uppy.Tus, {endpoint: 'https://tusd.tusdemo.net/files/'})

      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      })
    </script>

@endpush