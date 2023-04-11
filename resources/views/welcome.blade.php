@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
@endsection
@section('content')
    @if(count($sliders) > 0)
        <section class="main-slider">

            <div class="main-slider-carousel owl-carousel owl-theme">
                @foreach(@$sliders as $slider)
                    <div class="slide" style="background-image:url({{ asset('/images/sliders/'.$slider->image) }})">
                    <div class="auto-container">
                        <div class="content">
                            <h3>{{@$slider->subheading}}</h3>
                            <h2>{{@$slider->heading}}</h2>
                            @if(@$slider->link)
                                <div class="link-box">
                                    <a href="{{@$slider->link}}" class="theme-btn btn-style-two">{{@$slider->button ?? 'Start Exploring'}}</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </section>
    @endif

    @if($homepage_info->mission)
        <section class="services-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">

                        <!--Services Block-->
                        <div class="services-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <h3><a> Our Mission </a></h3>
                                <div class="icon-box">
                                    <span class="icon flaticon-analysis"></span>
                                </div>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->mission) }}
                                </div>
                            </div>
                        </div>

                        <!--Services Block-->
                        <div class="services-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <h3><a>Our Vision </a></h3>
                                <div class="icon-box">
                                    <span class="icon flaticon-sports-and-competition"></span>
                                </div>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->vision) }}
                                </div>
                            </div>
                        </div>

                        <!--Services Block-->
                        <div class="services-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <h3><a>Our Value</a></h3>
                                <div class="icon-box">
                                    <span class="icon flaticon-graph"></span>
                                </div>
                                <div class="text">
                                    {{ ucfirst(@$homepage_info->value) }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->welcome_description))
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Title Column-->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Sec Title-->
                            <div class="sec-title">
                                <h2>{{$homepage_info->welcome_heading ?? ''}}</h2>
                                <div class="title-text">{{$homepage_info->welcome_subheading ?? ''}}</div>
                            </div>
                            <div class="text">
                                {{ ucfirst(@$homepage_info->welcome_description) }}
                            </div>
                            @if(@$homepage_info->welcome_link)
                                <a href="{{@$homepage_info->welcome_link}}" class="theme-btn btn-style-five">{{@$homepage_info->welcome_button??'Learn More'}}</a>
                            @endif
                        </div>
                    </div>

                    <!--Video Column-->
                    <div class="video-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">

                            <!--Video Box-->
                            <div class="video-box">
                                <figure class="image">
                                    <img src="{{ @$homepage_info->welcome_image ? asset('/images/home/welcome/'.@$homepage_info->welcome_image):''}}" alt="">
                                </figure>
                                @if(@$homepage_info->welcome_video_link)
                                    <a href="{{@$homepage_info->welcome_video_link}}"
                                       class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a>
                                @endif
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    @if(!empty($homepage_info->action_heading))
        <div class="call-to-action-section">
            <div class="outer-container">
                <div class="clearfix">

                    <div class="left-column clearfix">
                        <div class="image-layer" style="background-image: url({{asset('assets/frontend/images/background/1.jpg')}})"></div>
                        <div class="inner-column">
                            <h2>{{@$homepage_info->action_heading}}</h2>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="inner-column">
                            <a href="{{@$homepage_info->action_link2}}" class="theme-btn btn-style-four">
                                {{@$homepage_info->action_link ?? 'Learn more'}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif

    @if(!empty($homepage_info->core_main_heading))
        <section class="planning-section">
            <div class="auto-container">
                <!--Sec Title-->
                <div class="sec-title centered">
                    <div class="title-text">{{ucfirst(@$homepage_info->core_main_description)}}</div>
                    <h2>{{ucfirst(@$homepage_info->core_main_heading)}}</h2>
                </div>

                <div class="row clearfix">
                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-handshake"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading1 ?? '')}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description1 ?? '')}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-path"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading2)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description2)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-analysis"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading3)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description3)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-analytics"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading4)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description4)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-worker"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading5)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description5)}}
                            </div>
                        </div>
                    </div>

                    <!--Services Block Four-->
                    <div class="services-block-four col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <span class="icon flaticon-value"></span>
                            </div>
                            <h3><a>{{ucwords(@$homepage_info->core_heading6)}}</a></h3>
                            <div class="text">
                                {{ucfirst(@$homepage_info->core_description6)}}
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    @endif

    @if(count($latestServices) > 0)
        <section class="case-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>What we provide</h2>
                <div class="title-text">Our Best Services</div>
            </div>
        </div>
        <div class="four-item-carousel owl-carousel owl-theme">

            @foreach(@$latestServices as $index=>$service)
                <div class="case-block">
                <div class="inner-box">
                    <div class="image">
                        <img src="{{asset('/images/service/thumb/thumb_'.@$service->banner_image)}}" alt="" />
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="text"></div>
                                    <a href="{{route('service.single',$service->slug)}}" class="read-more"><span class="fa fa-angle-right"></span> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-box">
                        <div class="category">MD Human Resource</div>
                        <h3><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>
    @endif

    @if(count($director) > 0)
        <section class="help-section director-swiper-slider">
            <div class="auto-container swiper-wrapper">
                @foreach($director as $managing)
                    <div class="inner-container clearfix swiper-slide">

                        <div class="content-column">
                            <div class="inner-column">
                                <div class="content">
                                    <div class="sec-title">
                                        <h2>{{ucfirst(@$managing->heading)}}</h2>
                                        <div class="title-text">{{ucfirst(@$managing->designation)}}</div>
                                    </div>
                                    <div class="text">
                                        {{@$managing->description}}
                                    </div>
                                    <a class="risk"><span class="fa fa-angle-right"></span> Message from Director </a>
                                </div>
                            </div>
                        </div>

                        <div class="image-column-2" style="background-image: url({{asset('/images/director/'.@$managing->image)}})">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="{{asset('/images/director/'.@$managing->image)}}" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>What Clients Saying</h2>
                <div class="title-text">Automate & Simplify The Whole Process</div>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">

                <!--Testimonial Block Two-->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">
                                    <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                    <div class="author">Camron White</div>
                                </div>
                            </div>
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="images/resource/author-1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block Two-->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">
                                    <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                    <div class="author">Camron White</div>
                                </div>
                            </div>
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="images/resource/author-1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Testimonial Block Two-->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-7 col-sm-12">
                                <div class="inner-column">
                                    <div class="text">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comod duis aute irure dolor reprehenderit voluptate velit esse cillum dolore fugiat nulla pariatur eaxcepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                                    <div class="author">Camron White</div>
                                </div>
                            </div>
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-5 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="images/resource/author-1.jpg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Testimonial Section-->

    <!--Fluid Section Two-->
    <section class="fluid-section-two">
        <div class="outer-container clearfix">

            <!--Image Column-->
            <div class="image-column" style="background-image:url(images/resource/image-2.jpg);">
                <figure class="image-box"><img src="images/resource/image-2.jpg" alt=""></figure>
            </div>

            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <!--Sec Title-->
                    <div class="sec-title light">
                        <h2>Need zemen Support?</h2>
                        <div class="title-text">Automate & Simplify The Whole Process</div>
                    </div>

                    <!-- Support Form -->
                    <div class="support-form">

                        <!--Contact Form-->
                        <form method="post" action="http://t.commonsupport.xyz/zemen/contact.html">
                            <div class="row clearfix">

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="username" placeholder="Your Name" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <select class="custom-select-box">
                                        <option>Service Required</option>
                                        <option>Service One</option>
                                        <option>Service Two</option>
                                        <option>Service Three</option>
                                        <option>Service Four</option>
                                    </select>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Latest zemen News</h2>
                <div class="title-text">Automate & Simplify The Whole Process</div>
            </div>
            <div class="row clearfix">

                <!--Blocks Column-->
                <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!--News Block-->
                        <div class="news-block">
                            <div class="inner-box">
                                <ul class="post-info">
                                    <li>SEPtember 23, 2018</li>
                                    <li>Consultant</li>
                                </ul>
                                <h3><a href="blog-single.html">Consecter elit duied aiusmod tempor didunt labore dolory</a></h3>
                            </div>
                        </div>

                        <!--News Block-->
                        <div class="news-block">
                            <div class="inner-box">
                                <ul class="post-info">
                                    <li>august 25, 2018</li>
                                    <li>finance</li>
                                </ul>
                                <h3><a href="blog-single.html">Ipsum dolor sit amet adipisicing elit, dolore magns aliqua enim </a></h3>
                            </div>
                        </div>

                        <!--News Block-->
                        <div class="news-block">
                            <div class="inner-box">
                                <ul class="post-info">
                                    <li>SEPtember 23, 2018</li>
                                    <li>business</li>
                                </ul>
                                <h3><a href="blog-single.html">Sunt in culpa qui officia deserunt mollit animed kyest laborum</a></h3>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/news-1.jpg" alt="" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End News Section-->

@endsection

@section('js')
    <script src="{{asset('assets/frontend/js/lightbox.min.js')}}"></script>
@endsection
