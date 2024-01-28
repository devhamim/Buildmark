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
                                        <li><strong>01.</strong><span>Write : </span> <a href="mailto:{{ $settings->first()->email }}">{{ $settings->first()->email }}</a></li>
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
            <!--section-->
            <section id="sec2" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3>why choose us</h3>
                        <p></p>
                    </div>
                    <div id="contact-form">
                        <div class="pr-bg pr-bg-white"></div>
                        <div id="message"></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, vel. Quidem, consequuntur ea harum laudantium ex perspiciatis adipisci. Voluptatum praesentium libero, explicabo eum vitae cupiditate ad temporibus quo quidem sint.</p>
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
@endsection
