@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/projects.css') }}">

    <style>

        .navClass .nav a {
            color : black;
        }
        .navClass .nav .active {
            background-color : #0f9d58;
            color : white;
        }

        .navClass .nav .active img {
            filter : brightness(50);
        }
        button:focus {
            outline: none;
        }

        .vertical-hover {
            background-color : #0f9d58;
            color : white!important;
        }

    </style>
@endpush

@if ( session()->has('message') )

  <div class="container" style="background-color: #98FB98; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

      <h1 style="margin-top:150px;" class="fs-1">Thank You!</h1><br>
      <p class="lead mb-3"><h4>We received your application. We appreciate you taking the time to apply.<br><br>  If you are selected for an interview, our human resources department will be in contact with you.<br><br> Have a great day!</h4></p>
      <br><hr><br>    
      <p class="lead">
          <a class="btn btn-secondary btn-md mt-2 mb-2" style="color:white; border:1px solid grey" href="{{url('projects/talents')}}" role="button">Go Back to Talents Page</a>
      </p>
      <br>
  </div>
@else  
    <div class="container mb-4" style="padding-top: 200px;">

        <div class="row">
            <div class="col-3">
                <nav class="navClass">
                    <div class="nav flex-column categories border-0" id="nav-tab" role="tablist" style="overflow-x: auto;">
                        @foreach($side_categories as $side_category)
                            @if($side_category->status == 'Enabled')
                                
                                <a href="{{ route('frontend.talents') }}#tab-{{ $side_category->id }}" class="nav-link text-left border shadow py-3 mb-3 {{ $side_category->name == $category ? 'active' : null }}" id="tab-{{$side_category->id}}">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <img src="{{url('upload/projects', $side_category->icon)}}" alt="" style="height: 40px;">
                                        </div>
                                        <div class="col-8 text-center">
                                            <p class="mb-0">{{ $side_category->name}}</p>
                                        </div>
                                    </div>
                                </a>

                            @endif
                        @endforeach
                    </div>
                </nav>
            </div>

            <div class="col-9" style="padding-left: 5rem;">
                <div class="bread-crumb">
                    <div class="row align-items-center">
                        <div class="col-1 text-center">
                            <img src="{{url('upload/projects', Modules\Projects\Entities\ProjectCategory::where('name', $category)->first()->icon)}}" alt="" style="height: 40px;">
                        </div>

                        <div class="col-11">
                            <p class="mb-0" style="font-size:0.9rem;"><a href="" class="breadcrumb-category" style="color: #0F9D58;">{{ $category }}</a>&nbsp;&nbsp;&nbsp;<i class="fas fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;<a href="" style="color: #0F9D58;">{{ $talent }}</a></p>
                        </div>
                    </div>
                </div>


                <form action="{{route('frontend.post_a_job.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="row mt-5 align-items-center mb-5">
                        <div class="col-1 pr-0">
                            <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-11 pl-0">
                            <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your job a title</h5>
                        </div>

                        <div class="col-12">
                            <input type="text" name="title" class="form-control mt-3 w-100" placeholder="Title" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>

                    @if(empty( auth()->user()->id) === true )
                    <div class="row mt-5 align-items-center mb-5">
                        <div class="col-1 pr-0">
                            <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-11 pl-0">
                            <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your Name</h5>
                        </div>

                        <div class="col-12">
                            <input type="text" name="name" class="form-control mt-3 w-100" placeholder="Name" aria-label="name" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    <div class="row mt-5 align-items-center mb-5">
                        <div class="col-1 pr-0">
                            <img src="{{ url('theme_light/assets/projects/job_title.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-11 pl-0">
                            <h5 class="mb-0 text-secondary" style="font-size: 18px;">Give your Email Address</h5>
                        </div>

                        <div class="col-12">
                            <input type="text" name="email" class="form-control mt-3 w-100" placeholder="Email" aria-label="email" aria-describedby="basic-addon1" required>
                        </div>
                    </div>
                    @endif


                    <div class="row align-items-center">
                        <div class="col-1 pr-0">
                            <img src="{{ url('theme_light/assets/projects/details.png') }}" alt="" class="img-fluid">
                        </div>

                        <div class="col-11 pl-0">
                            <h5 class="mb-0 text-secondary" style="font-size: 18px;">Describe the job in details</h5>
                            
                        </div>

                        <div class="col-12">
                            <p class="mt-2 text-secondary" style="font-size: 0.9rem;">Include expected deliverables, requirements and time frame for delivery</p>
                        </div>
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

                    <div class="row mb-2 justify-content-center align-items-center">
                        <div class="div col-6 text-center">
                            <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR" style="display: inline-block;"></div>
                            <br>
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                        </div>                        
                        <div class="col-6 text-center">
                            <button type="submit" class="btn text-light py-3 rounded-0 w-75 fw-bold" style="background-color: #d78713; border:none; font-size: 1.2rem; position: relative; top: -0.4rem;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>


    <div class="container-fluid" style="background-color: #0f9d58; padding: 2.5rem 0">
        <div class="container">
            <div class="row">
                <div class="col-3">

                </div>

                <div class="col-9" style="padding-left: 5rem;">
                    <div class="row justify-content-center feature-buttons">
                        <div class="col-4 text-center">
                            <a href="{{ route('frontend.contact_us') }}" class="btn py-3 bg-light shadow border-0 rounded-0">Talk to an Advisor</a>
                        </div>

                        <div class="col-4 text-center">
                            <a href="{{ route('frontend.expert_center') }}" class="btn py-3 bg-light shadow border-0 rounded-0">Expert Centre</a>
                        </div>

                        <div class="col-4 text-center">
                            <a href="{{route('frontend.user.post_project')}}" class="btn py-3 bg-light shadow border-0 rounded-0">Post a Job</a>
                        </div>
                    </div>
                </div>
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


<script type='text/javascript'>
    // Javascript to enable link to tab
    var hash = location.hash.replace(/^#/, '');  // ^ means starting, meaning only match the first hash

    if (hash) {
        $('.nav a[href="#' + hash + '"]').tab('show');
    } 

    // Change hash for page-reload
    $('.nav a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
    })
</script>

<script>
    $('.navClass .nav-link').hover(function() {
        $(this).addClass('vertical-hover');

        $(this).find('img').css('filter', 'brightness(100)');
        
    }, function() {

        $(this).removeClass('vertical-hover');

        if($(this).hasClass('active')) {
            $(this).find('img').css('filter', 'brightness(100)');
        }
        else {
            $(this).find('img').css('filter', 'brightness(1)');
        }
    });
</script>

<script>
    var $active = jQuery(".categories a.active");

    $active.each(function() {
        let link = $(this).attr('href');
        $('.breadcrumb-category').attr('href', link);
    });
</script>

@endpush

@endif