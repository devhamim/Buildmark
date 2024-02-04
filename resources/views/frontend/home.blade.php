<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KV2EPFNNYK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KV2EPFNNYK');
</script>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        @if ($setting->first()->title != null)
            <title>{{ $setting->first()->title }}</title>
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/reset.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/color.css">
        <!--=============== favicons ===============-->
        @if ($setting->first()->favicon != null)
            <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
        @endif

    </head>



    <body>
        <!--Loader -->
        <div class="loader2">
            <div class="loader loader_each"><span></span></div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
<header class="main-header">
    <a href="{{ url('/') }}" class="header-logo ajax">
        @if ($setting->first()->logo != null)
            <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
        @endif
    </a>
    <!-- sidebar-button -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap">
        <div class="nav-button">
            <span  class="nos"></span>
            <span class="ncs"></span>
            <span class="nbs"></span>
            <div class="menu-button-text">Menu</div>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!-- sidebar-button end-->
    <!--  navigation -->
    <div class="header-contacts">
        <ul>
            @if ($setting->first()->number != null)
                <li><span> Call </span> <a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a></li>
            @endif
            @if ($setting->first()->email != null)
                <li><span> Email </span> <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></li>
            @endif
        </ul>
    </div>
    <!-- navigation  end -->
</header>
<!-- header end -->
<!-- left-panel -->
<div class="left-panel">
    <div class="horizonral-subtitle"><span><strong></strong></span></div>
    <div class="left-panel_social">
        <ul >
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
        </ul>
    </div>
</div>
<!-- left-panel end -->
<!-- share-button -->
<div class="share-button showshare">
    <span>Share</span>
</div>
<!-- share-button end -->
<!-- wrapper  -->
<div id="wrapper">
    <!-- content-holder  -->
    <div class="content-holder" data-pagetitle="">
        <!-- nav-holder-->
        <div class="nav-holder but-hol">
            <div class="nav-scroll-bar-wrap fl-wrap">
                <div class="nav-search">
                    <ul style="text-align: left">
                        @if ($setting->first()->number != null)
                            <li><span> Call </span> <a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a></li>
                        @endif
                        @if ($setting->first()->email != null)
                            <li><span> Email </span> <a href="mailto:{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></li>
                        @endif
                    </ul>
                </div>
                <!-- nav -->
                <nav class="nav-inner" id="menu">
                    <ul>
                        <li>
                            <a href="{{ url('/') }}" class="act-link">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about_us') }}">About</a>
                        </li>
                        <li>
                            <a href="{{ route('cpm.view') }}">TEAM</a>
                        </li>
                        <li><a href="{{ route('services') }}" class="ajax">Specialized Services</a></li>
                        <li>
                            <a href="{{ route('projects') }}">Portfolio</a>
                        </li>
                        <li>
                            <a href="{{ route('all.gallery') }}">Gallery</a>
                        </li>
                        <li><a href="{{ route('project.list') }}" class="ajax">Project List</a></li>
                        <li><a href="{{ route('contect') }}" class="ajax">Contact</a></li>
                    </ul>
                </nav>
                <!-- nav end-->
            </div>
            <!--nav-social-->
            <div class="nav-social">
                <span class="nav-social_title">Follow us : </span>
                <ul >
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                </ul>
            </div>
            <!--nav-social end -->
        </div>
        <div class="nav-overlay">
            <div class="element"></div>
        </div>
        <!-- nav-holder end -->
        <!--Content -->
        <div class="content full-height hidden-item home-half-slider">
            <div class="hero-canvas-wrap">
                <div class="dots gallery__dots" data-dots=""></div>
            </div>
            <!-- option-panel-->
            <div class="option-panel bot-element">
                <a href="{{ route('about_us') }}" class="ajax start-btn color-bg"> Start explore <i class="fal fa-long-arrow-right"></i></a>
                <div class="swiper-counter">
                    <div id="current">01</div>
                    <div id="total"></div>
                </div>
                <div class="slide-progress-container">
                    <div class="slide-progress-warp">
                        <div class="slide-progress color-bg"></div>
                    </div>
                </div>
            </div>
            <!--option-panel end -->
            <!-- hero-slider-wrap -->
            <div class="hero-slider-wrap fl-wrap full-height">
                <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                    <div class="swiper-container" style="background: #0000001e">
                        <div class="swiper-wrapper" >
                            <!-- swiper-slide-->
                            @foreach ($banners as $banner)
                                <div class="swiper-slide">
                                    <div class="half-hero-wrap">
                                        <div class="pr-bg"></div>
                                        <div class="rotate_text"></div>
                                        <h1 style="width: 50%"><span>{{ $banner->title }} </span></h1>
                                        <h4></h4>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- swiper-slide end-->
                        </div>
                    </div>
                </div>
                <div class="hero-slider_control-wrap bot-element">
                    <div class="hero-slider_control hero-slider-button-next"><span>Next<i class="fal fa-angle-right"></i></span> </div>
                    <div class="hero-slider_control hero-slider-button-prev"><span><i class="fal fa-angle-left"></i>Prev </span></div>
                </div>
                <div class="hero-slider-wrap_pagination hlaf-slider-pag"></div>
            </div>
            <!-- hero-slider-wrap  end-->
            <!-- hero-slider-img-->
            <div class="hero-slider-img hero-slider-wrap_halftwo">
            <div class="sec-lines"></div>
                <div class="swiper-container">
                    <div class="swiper-wrapper" >
                        <!-- swiper-slide-->
                        @foreach ($banners as $banner)
                            <div class="swiper-slide">
                                <div class="bg"  data-bg="{{ asset('uploads/banner') }}/{{ $banner->image }}"></div>
                                <div class="overlay"></div>
                            </div>
                        @endforeach
                        <!-- swiper-slide end-->
                    </div>
                </div>
            </div>
            <!-- hero-slider-img  end-->
        </div>
        <!-- content  end -->
        <!-- share-wrapper-->
        <div class="share-wrapper">
            <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!-- share-wrapper  end -->
    </div>
    <!-- content-holder end -->
</div>
</div>

<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/plugins.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/core.js"></script>
<script type="text/javascript" src="{{ asset('frontend') }}/js/scripts.js"></script>


</body>
</html>
