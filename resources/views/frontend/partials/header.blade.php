<head>

    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="MD Human resource">
    <meta name="description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else MD Human resource @endif"/>
    <meta name="keywords" content="@if(!empty(@$setting_data->meta_tags)) {{@$setting_data->meta_tags}} @else MD Human resource @endif">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="canonical" href="https://mdhumanresource.com" />

    @if (\Request::is('/'))
        <title>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else MD Human resource @endif </title>
    @else
        <title>@yield('title') | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else MD Human resource @endif </title>
    @endif


    <meta property="og:title" content="@if(!empty(@$setting_data->meta_title)) {{ucwords(@$setting_data->meta_title)}} @else  MD Human resource @endif" />
    <meta property="og:type" content="Consultancy" />
    <meta property="og:url" content="https://mdhumanresource.com/" />
    <meta property="og:site_name" content="MD Human resource" />
    <meta property="og:description" content="@if(!empty(@$setting_data->meta_description)) {{ucwords(@$setting_data->meta_description)}} @else MD Human resource @endif " />

    <link rel="shortcut icon" type="image/x-icon" href="{{ (@$setting_data->favicon) ? asset('/images/settings/'.@$setting_data->favicon):asset('assets/backend/images/canosoft-favicon.png') }}">


    <!-- Stylesheets -->
    <link href="{{asset('assets/frontend/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/slick.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/responsive.css')}}" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>
    @yield('css')
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="header-info-list">
                            <li><span class="icon fa fa-envelope"></span><a href="mailto:{{@$setting_data->phone ?? ''}}">{{@$setting_data->email ?? ''}}</a></li>
                            <li><span class="icon fa fa-map-marker"></span> <a href="mailto:{{@$setting_data->email ?? ''}}">{{@$setting_data->address ?? ''}}</a></li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right">
                        <!--Social Box-->
                        <ul class="social-box">
                            @if(@$setting_data->facebook)
                                <li>
                                    <a href="{{@$setting_data->facebook}}">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif
                            @if(@$setting_data->youtube)
                                <li>
                                    <a href="{{@$setting_data->youtube}}">
                                        <i class="fa-brands fa-youtube"></i>
                                    </a>
                                </li>
                            @endif
                            @if(@$setting_data->instagram)
                                <li><a href="{{@$setting_data->instagram}}">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a></li>
                            @endif
                            @if(@$setting_data->linkedin)
                                <li><a href="{{@$setting_data->linkedin}}">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            @endif
                            @if(!empty(@$setting_data->ticktock))
                                <li>
                                    <a href="{{@$setting_data->ticktock}}">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="/"><img src="{{asset('assets/frontend/images/logo.png')}}" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home Page 01</a></li>
                                            <li><a href="index-3.html">Home Page 02</a></li>
                                            <li><a href="index-4.html">Home Page 03</a></li>
                                            <li><a href="index-5.html">Home Page 04</a></li>
                                            <li><a href="index-6.html">Home Page 05</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style 01</a></li>
                                                    <li><a href="index-3.html">Header Style 02</a></li>
                                                    <li><a href="index-4.html">Header Style 03</a></li>
                                                    <li><a href="index-5.html">Header Style 04</a></li>
                                                    <li><a href="index-6.html">Header Style 05</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="services-one.html">Services Type 01</a></li>
                                            <li><a href="services-two.html">Services Type 02</a></li>
                                            <li><a href="financial-investment.html">Financial Investment</a></li>
                                            <li><a href="market-research.html">Market Research</a></li>
                                            <li><a href="feasibility.html">Feasibility Studies</a></li>
                                            <li><a href="business-consult.html">Business Consulting</a></li>
                                            <li><a href="growth-track.html">Growth Tracking</a></li>
                                            <li><a href="training-work.html">Training & Workshop</a></li>
                                            <li><a href="investment-plan.html">Investment Planning</a></li>
                                            <li><a href="global-coach.html">Global Coaching</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio-two-column.html">Portfolio Two Column</a></li>
                                            <li><a href="portfolio-three-column.html">Portfolio Three Column</a></li>
                                            <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid Style</a></li>
                                            <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-classic.html">Blog Fullwidth</a></li>
                                            <li><a href="blog-single.html">Blog Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact us</a></li>
                                </ul>
                            </div>

                        </nav>

                        <!--Support Box-->
                        <div class="support-box">
                            <div class="support">For Support Call <span class="icon fa fa-headphones"></span></div>
                            <div class="support-number">800-369-8527</div>
                        </div>

                        <!--Button Box-->
                        <div class="button-box">
                            <a href="contact.html" class="theme-btn btn-style-one">Ask For Quote</a>
                        </div>

                        <!--Search Box Outer-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <form method="post" action="http://t.commonsupport.xyz/zemen/blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index-2.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home Page 01</a></li>
                                        <li><a href="index-3.html">Home Page 02</a></li>
                                        <li><a href="index-4.html">Home Page 03</a></li>
                                        <li><a href="index-5.html">Home Page 04</a></li>
                                        <li><a href="index-6.html">Home Page 05</a></li>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style 01</a></li>
                                                <li><a href="index-3.html">Header Style 02</a></li>
                                                <li><a href="index-4.html">Header Style 03</a></li>
                                                <li><a href="index-5.html">Header Style 04</a></li>
                                                <li><a href="index-6.html">Header Style 05</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="services-one.html">Services Type 01</a></li>
                                        <li><a href="services-two.html">Services Type 02</a></li>
                                        <li><a href="financial-investment.html">Financial Investment</a></li>
                                        <li><a href="market-research.html">Market Research</a></li>
                                        <li><a href="feasibility.html">Feasibility Studies</a></li>
                                        <li><a href="business-consult.html">Business Consulting</a></li>
                                        <li><a href="growth-track.html">Growth Tracking</a></li>
                                        <li><a href="training-work.html">Training & Workshop</a></li>
                                        <li><a href="investment-plan.html">Investment Planning</a></li>
                                        <li><a href="global-coach.html">Global Coaching</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Portfolio</a>
                                    <ul>
                                        <li><a href="portfolio-two-column.html">Portfolio Two Column</a></li>
                                        <li><a href="portfolio-three-column.html">Portfolio Three Column</a></li>
                                        <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid Style</a></li>
                                        <li><a href="blog-left.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-classic.html">Blog Fullwidth</a></li>
                                        <li><a href="blog-single.html">Blog Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->
