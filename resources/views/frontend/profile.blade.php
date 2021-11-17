@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('theme_light/styles/css/profile.css') }}">
@endpush

@section('content')

    <div class="container" style="padding-top: 13rem; margin-bottom: 12rem;">
        <div class="row">
            <div class="col-4">
                <div class="card p-3 mb-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <i class="fas fa-heart" style="color: #FF6243; font-size: 1.3rem; cursor: pointer"></i>
                        </div>
                        <div class="col-6 text-right">
                            <i class="fas fa-ellipsis-h" style="font-size: 1.3rem; cursor: pointer"></i>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-4">
                        <div class="col-8 text-center">
                            <img src="{{ url('theme_light/assets/profile/profile.jpg') }}" alt="" class="img-fluid profile mb-3">
                            <h4 class="font-weight-bold mb-1">Aleska Mandalin</h4>

                            <p class="mb-2">UI/UX Designer</p>

                            <div>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                                <i class="far fa-star gold"></i>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <button class="btn contact w-100 rounded-pill">Contact Me</button>
                        </div>
                        <div class="col-6">
                            <button class="btn quote w-100 rounded-pill">Get a Quote</button>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <hr>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <i class="fas fa-map-marker-alt p-2" style="color: #707070"></i>
                                        </div>
                                        <div class="col-10">
                                            From - Sri Lanka
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row contact-details">
                        <div class="col-12">
                            <h5 class="font-weight-bold mb-3">Contact Details</h5>

                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <div class="row justify-content-between align-items-center mb-3">
                                        <div class="col-1">
                                            <i class="fas fa-at p-2"></i>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-0">Email</p>
                                            <p class="mb-0">sample@gmail.com</p>
                                        </div>
                                    </div>

                                    <div class="row justify-content-between align-items-center mb-3">
                                        <div class="col-1">
                                            <i class="fas fa-phone-alt p-2"></i>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-0">Phone</p>
                                            <p class="mb-0">(+94) 77 00 00 000</p>
                                        </div>
                                    </div>

                                    <div class="row justify-content-between align-items-center mb-3">
                                        <div class="col-1">
                                            <i class="fas fa-map-marker-alt p-2"></i>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-0">Address</p>
                                            <p class="mb-0">513, Sample Address, Colombo, Sri Lanka</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 about">
                    <h5 class="font-weight-bold">About</h5>
                    <p class="mb-4" style="font-size: 0.8rem; line-height: 1.2rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to.</p>

                    <h5 class="font-weight-bold">Education</h5>

                    <div class="pl-3">
                        <div class="mb-2">
                            <h6 class="mb-0">B.Sc in IT</h6>
                            <p class="mb-0" style="color: rgb(0, 0, 0, 0.5); font-size: 0.8rem;">University of Colombo - School of Computing</p>
                        </div>
                        <div class="mb-2">
                            <h6 class="mb-0">B.Sc in IT</h6>
                            <p style="color: rgb(0, 0, 0, 0.5); font-size: 0.8rem;">University of Colombo - School of Computing</p>
                        </div>
                        <div class="mb-2">
                            <h6 class="mb-0">B.Sc in IT</h6>
                            <p style="color: rgb(0, 0, 0, 0.5); font-size: 0.8rem;">University of Colombo - School of Computing</p>
                        </div>
                    </div>

                    <h5 class="font-weight-bold">Skills</h5>

                    <div>
                        <ul class="pl-4" style="">
                            <div class="row">
                                <div class="col-4 mb-2">
                                    <li>Website design</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Responsive website</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Wordpress</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Html | css</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Html 5</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Frontend development</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Shopify</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Woocommerce</li>
                                </div>
                                <div class="col-4 mb-2">
                                    <li>Website design</li>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card p-3 right-side">
                    <div class="row mb-3">
                        <div class="col-6">
                            <h5 class="font-weight-bold">Portfolio</h5>
                        </div>
                        <div class="col-6 text-right">
                            <i class="bi bi-arrow-left-short" style="color: #C7C9DB; font-size: 1.5rem; cursor: pointer"></i>
                            <i class="bi bi-arrow-right" style="color: #17BA77; font-size: 1.5rem; cursor: pointer"></i>
                        </div>
                    </div>

                    <div class="row single-image" style="margin-bottom: 3rem;">
                        <div class="col-4 position-relative mb-5">
                            <div class="image-section">
                                <img src="{{ url('theme_light/assets/profile/portfolio_1.png') }}" alt="" class="img-fluid w-100">

                                <p class="mb-0 title">Graphic Design</p>
                                <i class="fas fa-heart heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                                        
                                <div class="carousel-caption">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        
                            <div class="row mt-2 align-items-center out-caption">
                                <div class="col-6">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 position-relative mb-5">
                            <div class="image-section">
                                <img src="{{ url('theme_light/assets/profile/portfolio_2.png') }}" alt="" class="img-fluid w-100">

                                <p class="mb-0 title">Graphic Design</p>
                                <i class="fas fa-heart heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                                        
                                <div class="carousel-caption">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        
                            <div class="row mt-2 align-items-center out-caption">
                                <div class="col-6">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 position-relative mb-5">
                            <div class="image-section">
                                <img src="{{ url('theme_light/assets/profile/portfolio_3.png') }}" alt="" class="img-fluid w-100">

                                <p class="mb-0 title">Graphic Design</p>
                                <i class="fas fa-heart heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                                        
                                <div class="carousel-caption">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        
                            <div class="row mt-2 align-items-center out-caption">
                                <div class="col-6">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 position-relative mb-5">
                            <div class="image-section">
                                <img src="{{ url('theme_light/assets/profile/portfolio_2.png') }}" alt="" class="img-fluid w-100">

                                <p class="mb-0 title">Graphic Design</p>
                                <i class="fas fa-heart heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                                        
                                <div class="carousel-caption">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        
                            <div class="row mt-2 align-items-center out-caption">
                                <div class="col-6">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 position-relative mb-5">
                            <div class="image-section">
                                <img src="{{ url('theme_light/assets/profile/portfolio_3.png') }}" alt="" class="img-fluid w-100">

                                <p class="mb-0 title">Graphic Design</p>
                                <i class="fas fa-heart heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                                        
                                <div class="carousel-caption">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        
                            <div class="row mt-2 align-items-center out-caption">
                                <div class="col-6">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 position-relative mb-5">
                            <div class="image-section">
                                <img src="{{ url('theme_light/assets/profile/portfolio_1.png') }}" alt="" class="img-fluid w-100">

                                <p class="mb-0 title">Graphic Design</p>
                                <i class="fas fa-heart heart" style="color: #FF6243; font-size: 1.3rem;"></i>
                                        
                                <div class="carousel-caption">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        
                            <div class="row mt-2 align-items-center out-caption">
                                <div class="col-6">
                                    <h5 class="font-weight-bold mb-0">Title Here</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <p class="mb-0" style="font-size: 0.75rem">Preview <i class="fas fa-arrow-right ml-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reviews border-top pt-3">
                        <div class="row mb-4">
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-6 pr-0">
                                        <h5 class="font-weight-bold">Customer Reviews</h5>
                                    </div>
                                    <div class="col-1 pl-0">
                                        <i class="far fa-star gold"></i>
                                    </div>
                                    <div class="col-5 px-0">
                                        <h5 class="font-weight-bold">4.9 <span class="ml-2">(1,503)</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom pb-2 mb-4">
                            <div class="mx-4">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <img src="{{ url('theme_light/assets/profile/profile.jpg') }}" alt="" class="img-fluid review-photo">
                                    </div>
                                    <div class="col-10 pl-0">
                                        <h6>Alseka Mandalin <i class="far fa-star gold ml-2"></i> <span class="gold">5</span></h6>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-10 pl-0">
                                        <p style="font-size: 0.8rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker i</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom pb-2 mb-4">
                            <div class="mx-4">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <img src="{{ url('theme_light/assets/profile/profile.jpg') }}" alt="" class="img-fluid review-photo">
                                    </div>
                                    <div class="col-10 pl-0">
                                        <h6>Alseka Mandalin <i class="far fa-star gold ml-2"></i> <span class="gold">5</span></h6>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-10 pl-0">
                                        <p style="font-size: 0.8rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker i</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom pb-2 mb-4">
                            <div class="mx-4">
                                <div class="row align-items-center">
                                    <div class="col-2">
                                        <img src="{{ url('theme_light/assets/profile/profile.jpg') }}" alt="" class="img-fluid review-photo">
                                    </div>
                                    <div class="col-10 pl-0">
                                        <h6>Alseka Mandalin <i class="far fa-star gold ml-2"></i> <span class="gold">5</span></h6>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-10 pl-0">
                                        <p style="font-size: 0.8rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker i</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection


@push('after-scripts')

<script>
    $('.single-image .image-section').hover(function() {
            $(this).find('img').addClass('dark');
            $(this).find('.carousel-caption').addClass('show');
            $(this).siblings('.out-caption').addClass('hide');
        
        },function() {
            $(this).find('img').removeClass('dark');
            $(this).find('.carousel-caption').removeClass('show');
            $(this).siblings('.out-caption').removeClass('hide');
    });
</script>
@endpush