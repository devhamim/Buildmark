@extends('frontend.layout.app')
@section('content')

<!--content-->
<div class="content">
    <!--fixed-column-wrap-->
    <div class="fixed-column-wrap">
        <div class="pr-bg"></div>
        <!--fixed-column-wrap-content-->
        <div class="fixed-column-wrap-content">
            <div class="scroll-nav-wrap color-bg">
                <div class="carnival">Scroll down</div>
                <div class="snw-dec">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>
            <div class="bg" data-bg="{{ asset('frontend') }}/images/bg/1.jpg"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>Contact Us<br> </h2>
                <p></p>
            </div>
            <!--fixed-column-wrap_title end-->
            <div class="fixed-column-dec"></div>
        </div>
        <!--fixed-column-wrap-content end-->
    </div>
    <!--fixed-column-wrap end-->
    <!--column-wrap-->
    <div class="column-wrap">
        <!--column-wrap-container -->
        <div class="column-wrap-container fl-wrap">
            <div class="col-wc_dec">
                <div class="pr-bg pr-bg-white"></div>
            </div>
            <div class="col-wc_dec col-wc_dec2">
                <div class="pr-bg pr-bg-white"></div>
            </div>
            <!--section-->
            <section id="sec2" class="small-padding" style="text-align: left;">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3>why choose us</h3>
                    </div>
                    <div id="contact-form">
                        <ul style=" list-style: disc;">
                            <li>We are budget-conscious creatives that enjoy working under constraints.</li>
                            <li>We used cost-effective methods, knowledge, skill, and experience to build.</li>
                            <li>We always aim to meet and exceed our clients' expectations.</li>
                            <li>We complete every project on schedule time period.</li>
                            <li>Our ability to collaborate as a team and find innovative approaches to difficult engineering problems</li>
                            <li>Our goal is to build long-term connections with each and every clients by capitalizing on our strong points—having excellent people skills, extensive knowledge of the heavy construction management, and providing high-caliber multidisciplinary engineering and design—to successfully complete project in a timely, safe, and economical manner.</li>
                        </ul>
                    </div>
                    <!-- contact form  end-->
                </div>
            </section>
            <!--section end-->
            <!--section-->
            <section id="sec1" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3> Contact Details</h3>
                        <p> </p>
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <img src="{{ asset('frontend') }}/images/all/1.jpg"  class="respimg" alt="">
                            <div class="cont-det-wrap dark-bg">
                                <div class="pr-bg pr-bg-white"></div>
                                <ul>
                                    @if ($settings->first()->email != null)
                                        <li><strong>01.</strong><span>Email : </span> <a href="mailto:{{ $settings->first()->email }}">{{ $settings->first()->email }}</a></li>
                                    @endif
                                    @if ($settings->first()->number != null)
                                        <li><strong>02.</strong><span> Call :</span> <a href="tel:{{ $settings->first()->number }}">{{ $settings->first()->number }}</a></li>
                                    @endif
                                    @if ($settings->first()->address != null)
                                        <li><strong>03.</strong><span> Visit :</span> <a>{{ $settings->first()->address }}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>

        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->
@endsection
