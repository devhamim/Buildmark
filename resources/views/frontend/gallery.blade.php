
<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        @if ($setting->first()->title != null)
            <title>{{ $setting->first()->title }}</title>
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
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
            <!-- header start  -->
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

                    <!-- fixed-filter-panel -->
                        <div class="fixed-filter-panel bot-element fw-panel hor-mob-filter">
                            <div class="fixed-filter-panel_title color-bg hor-mob-filter_btn">
                                Works Filter <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <div class="gallery-filters">
                                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">All Works</a>
                                @foreach ($projects as $project)
                                    @php
                                        $project_cat = Str::replace(' ', '', $project->title)
                                    @endphp
                                    <a href="#" class="gallery-filter " data-filter=".{{ $project_cat }}">{{ $project->title }} </a>
                                @endforeach
                            </div>
                            <div class="count-folio round-counter">
                                <div class="num-album"></div>
                                <div class="all-album"></div>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll or  Swipe</span>
                            </div>
                        </div>
                        <!-- fixed-filter-panelend -->
                        <!--horizontal-grid   -->
                        <div class="horizontal-grid-wrap  fl-wrap  ">
                            <!-- portfolio start -->
                            <div   id="portfolio_horizontal_container" class="two-ver-columns">
                                <!-- portfolio_item-->
                                @foreach ($projects as $project)
                                    @php
                                        $project_cat = Str::replace(' ', '', $project->title)
                                    @endphp
                                    <div class="portfolio_item {{ $project_cat }}">
                                        <div class="grid-item-holder">
                                            <img  src="{{ asset('uploads/gallery') }}/{{ $project->image }}"    alt="">

                                            <div class="grid-det">
                                                <div class="grid-det_category"><a href="{{ route('projects.details', $project->id) }}">{{ $project->title }}</a></div>
                                                <div class="grid-det-item">
                                                    <a href="{{ route('projects.details', $project->id) }}" class="ajax grid-det_link">{{ $project->address }}<i class="fal fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pr-bg"></div>
                                    </div>
                                @endforeach
                                <!-- portfolio_item end-->
                            </div>
                            <!-- portfolio end -->
                        </div>
                        <!--horizontal-grid end -->

                    <!-- share-wrapper-->
                    <div class="share-wrapper">
                        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
                        <div class="share-container fl-wrap  isShare"></div>
                    </div>
                    <!-- share-wrapper  end -->
                </div>
                <!-- content-holder end -->
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('frontend') }}/js/plugins.js"></script>
        <script type="text/javascript" src="{{ asset('frontend') }}/js/core.js"></script>
        <script type="text/javascript" src="{{ asset('frontend') }}/js/scripts.js"></script>
    </body>
</html>
