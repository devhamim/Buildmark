
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
                            <!-- nav -->
                            <nav class="nav-inner" id="menu">
                                <ul>
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('about_us') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('cpm.view') }}">CPM</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('projects') }}">Project</a>
                                    </li>
                                    <li><a href="{{ route('services') }}" class="ajax">Services</a></li>
                                    <li><a href="{{ route('concern') }}" class="ajax">Concern</a></li>
                                    <li><a href="{{ route('contect') }}" class="ajax">Contacts</a></li>
                                </ul>
                            </nav>
                            <!-- nav end-->
                        </div>
                        <!--nav-social-->
                        <div class="nav-social">
                            <span class="nav-social_title">Follow us : </span>
                            <ul >
                                <li><a href="https://www.facebook.com/v3partners" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
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

