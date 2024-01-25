@extends('frontend.layout.app')
@section('content')

<!--content-->
<div class="content">
    <!--fixed-column-wrap-->
    <div class="fixed-column-wrap">
        <div class="pr-bg"></div>
        <div class="fixed-column-wrap-content map-mobile">
            <div class="scroll-nav-wrap color-bg">
                <div class="carnival">Scroll down</div>
                <div class="snw-dec">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <div class="map-container mc_big">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5246689190813!2d90.35996!3d23.799935099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0dcbd0b82cd%3A0xa4736716ed1cd8f3!2s2%20Bosoti%20Housing%20Rd%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1706165591259!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
                    <div class="section-number right_sn"><span>0</span>1.</div>
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>
            <!--section-->
            <section id="sec2" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3>Get In touch</h3>
                        <p></p>
                    </div>
                    <div id="contact-form">
                        <div class="pr-bg pr-bg-white"></div>
                        <div id="message"></div>
                        <form  class="custom-form"  method="POST" action="{{ route('customerMessage.store') }}">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" id="name" placeholder="Your Name *" value="" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email"  name="email" id="email" placeholder="Email Address *" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"  name="phone" id="phone" placeholder="Phone *" value="" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text"  name="subject" id="subject" placeholder="subject *" value="" required/>
                                    </div>

                                </div>
                                <textarea name="message"  id="message" cols="40" rows="3" placeholder="Your Message:" required></textarea>

                                <div class="clearfix"></div>
                                <button class="btn float-btn flat-btn color-bg" type="submit" id="submit" name="submit">Send Message <i class="fal fa-long-arrow-right"></i></button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- contact form  end-->
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>2.
                    </div>
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
