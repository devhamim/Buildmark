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
            <div class="bg" data-bg="{{ asset('frontend') }}/images/bg/13.jpg"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>Specialized Services</h2>
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
            @foreach ($services as $service)
                <section   class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>{{ $service->title }}</h3>
                        </div>
                        <div class="column-wrap-content fl-wrap">
                            <div class="column-wrap-media fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <img src="{{ asset('uploads/service') }}/{{ $service->image }}"  class="respimg" alt="">

                            </div>
                            <div class=" fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>{!! $service->sort_desp !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
            <!--section end-->
            <div class="section-separator"></div>
            <div class="clearfix"></div>
            <!--section-->
            <section id="sec2" class="small-padding" style="text-align: left;">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3>why choose us</h3>
                    </div>
                    <div class="column-wrap-media fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <img src="{{ asset('frontend/images/chooseus.jpg') }}"  class="respimg" alt="">
                    </div>
                    <div id="contact-form">
                        <ul style=" list-style: disc;">
                            <li style="font-size: 15px">We are budget-conscious creatives that enjoy working under constraints.</li>
                            <li style="font-size: 15px">We used cost-effective methods, knowledge, skill, and experience to build.</li>
                            <li style="font-size: 15px">We always aim to meet and exceed our clients' expectations.</li>
                            <li style="font-size: 15px">We complete every project on schedule time period.</li>
                            <li style="font-size: 15px">Our ability to collaborate as a team and find innovative approaches to difficult engineering problems</li>
                            <li style="font-size: 15px">Our goal is to build long-term connections with each and every clients by capitalizing on our strong points—having excellent people skills, extensive knowledge of the heavy construction management, and providing high-caliber multidisciplinary engineering and design—to successfully complete project in a timely, safe, and economical manner.</li>
                        </ul>
                    </div>
                    <!-- contact form  end-->
                </div>
            </section>
            <!--section end-->
        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->
<!-- footer -->
<div class="height-emulator fl-wrap"></div>

@endsection
