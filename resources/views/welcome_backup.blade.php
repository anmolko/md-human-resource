@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
    <link rel="stylesheet" href="{{asset('assets/frontend/css/lightbox.css')}}"><style>

        #gallery #image-gallery .img-wrapper {
            height: 270px;
        }
        #gallery img.img-responsive {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    @if(count($sliders) > 0)
        <section class="sc-slider-section sc-slider-style2">
            <div class="swiper sc-slider-2">
                <div class="swiper-wrapper">
                    @foreach(@$sliders as $slider)
                        <div class="swiper-slide">
                        <div class="sc-image-layer" style="background: url('{{ asset('/images/sliders/'.$slider->image) }}');"></div>
                        <div class="container position-relative">
                            <div class="sc-slider-content p-z-idex">
                                <div class="sc-slider-subtitle">{{@$slider->subheading}}</div>
                                <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">
                                    {{@$slider->heading}}
                                </h1>
                                @if(@$slider->link)
                                    <div class="slider-btn-area d-flex align-items-center">
                                        <div class="sc-slider-btn">
                                            <a class="sc-primary-btn p-z-idex2" href="{{@$slider->link}}"> {{@$slider->button ?? 'Start Exploring'}}</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
    {{--                        <div class="shape-overly-one"></div>--}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    @endif
    @if(!empty($homepage_info->why_heading))
        <section class="sc-statistics-section-area gray-bg-color sc-pb-80">
            <div class="container">
                <div class="sc-statistics-style white-bg-color">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="sc-statistics-left-content">
                                <div class="sc-heading-area sc-mb-35">
                                    <span class="sub-title"><i class="icon-line"></i> {{ucwords(@$homepage_info->why_subheading)}}</span>
                                    <h2 class="title">
                                        <h2 class="section-title__title"><?php
                                                $split = explode(" ", @$homepage_info->why_heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$homepage_info->why_heading)."\n"}}
                                        <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                                    </h2>
                                </div>
                                <div
                                    class="sc-ab-image"
                                    data-sal="slide-up"
                                    data-sal-duration="800"
                                    data-sal-delay="250"
                                    style="position: absolute;"
                                >
                                    <img
                                        class="sc-border-radius"
                                        src="{{asset('/images/home/welcome/'.@$homepage_info->what_image5)}}"
                                        alt="Statistics"
                                    />
                                    @if(@$homepage_info->why_description)
                                        <div class="video-area video-center d-flex align-items-center "  data-sal="slide-up"
                                             data-sal-duration="800" data-sal-delay="250">
                                            <div class="sc-video-btn sc-mr-15">
                                                <a
                                                    class="popup-videos-button"
                                                    data-autoplay="true"
                                                    data-vbtype="video"
                                                    href="{{@$homepage_info->why_description}}"
                                                >
                                                    <i class="icon-play_video"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 sc-statistics-area sc-pl-70 sc-md-pl-15 sc-md-mt-30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-happy"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->happy_clients ?? '660'}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Happy Customer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-complete"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->project_completed ?? '450'}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Complete Project</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-running"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->visa_approved ?? '340'}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Visa Approved</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                                    <div class="sc-statistics-service-box sc-mb-25 text-center">
                                        <i class="p-z-idex position-relative icomoon icon-wining"></i>
                                        <div class="sc-counter-number">
                                            <div class="sc-count">
                                                <span class="odometer" data-count="{{@$homepage_info->success_stories}}">0</span>
                                            </div>
                                            <span class="sc-title p-z-idex position-relative">Success Stories</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif





    @if(@$recruitments[0]->heading)
        <div class="sc-process-section-area sc-business-section-area position-relative sc-pt-100 sc-md-pt-80 sc-pb-100 sc-md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 sc-pb-75 sc-md-pb-55">
                        <div class="sc-heading-area sc-mb-75 sc-md-mb-50">
                            <span class="sub-title"><i class="icon-line"></i> {{@$recruitments[0]->description ?? 'The Work Flow'}}</span>
                            <h2 class="title white-color">
                                <?php
                                $split = explode(" ", @$recruitments[0]->heading);?> {{preg_replace('/\W\w+\s*(\W*)$/', '$1', @$recruitments[0]->heading)."\n"}}
                                <span class="primary-color italic"> {{$split[count($split)-1]}} </span>
                            </h2>
                        </div>
                        <div class="sc-process-content-area">
                            <div class="row">

                                @foreach(@$recruitments as $index=>$recruitment)
                                    <div class="col-lg-3 col-md-6 sal-animate mt-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="{{($index+3)*100 }}">
                                        <div class="sc-business-item text-center sc-md-mb-35">
                                            <div class="sc-icon">
                                                <span>{{$index+1}}</span>
                                                <div class="triangle-down"></div>
                                            </div>
                                            <div class="sc-business-text">
                                                <h4 class="title white-color">{{@$recruitment->title}}</h4>
                                                <p class="des">
                                                    {{@$recruitment->icon_description}}
                                                </p>
                                            </div>
                                            @if(!in_array($index,$recuruitment_index) && !$loop->last)
                                                <div class="shape-image">
                                                    <img src="{{asset('assets/frontend/images/icons/business-shape.png')}}" alt="Business">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif







@endsection

@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
