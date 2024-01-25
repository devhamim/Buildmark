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
            <div class="bg" data-bg="{{ asset('frontend') }}/images/bg/3.jpg"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>Woody Nest</h2>
                <p>Architect , Industry & Interior</p>
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
                        <h3> Woody Nest</h3>
                        <p>Architect , Industry & Interior</p>
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="row">
                                <div class="col-md-5"> <img src="{{ asset('frontend/images/all/3.jpeg') }}"  class="respimg" alt=""></div>
                                <div class="col-md-7">
                                    <ul class="pr-list dark-bg pr-list-color">
                                        <li><span>Name </span> : MD. Enamul Haque</li>
                                        <li><span>Position </span> : CEO</li>
                                        <li><span>Specialization </span> : Architect</li>
                                        <li><span>Phone </span> : 01712 203273 , 01819 427 442</li>
                                        <li><span>Mail </span> :   enamuldic@gmail.com</li>
                                    </ul>
                                    <a href="portfolio.html" class="pr-view ajax">My Portfolio<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrap-text fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="row">
                                <div class="col-md-5">
                                    <h3 class="pr-subtitle">
                                        We offer the following services:
                                    </h3>
                                    <ul>
                                        <li style="list-style-type: circle; text-align: start">On-site consultations</li>
                                        <li style="list-style-type: circle; text-align: start">Project survey & analysis</li>
                                        <li style="list-style-type: circle; text-align: start">Space planning & furniture arrangement</li>
                                        <li style="list-style-type: circle; text-align: start">Design concepts</li>
                                        <li style="list-style-type: circle; text-align: start">Finishes & furnishings</li>
                                        <li style="list-style-type: circle; text-align: start">Custom designs</li>
                                        <li style="list-style-type: circle; text-align: start">Purchasing, delivery, & installation</li>
                                        <li style="list-style-type: circle; text-align: start">Project coordination & management</li>
                                    </ul>
                                    <p>If you for considering Woody Nest for your interior design needs. We look forward to working with you and creating a stunning home that you and your family will love for years to come.</p>
                                </div>
                                <div class="col-md-7">

                                    <p>At Woody Nest, great interior design is our business and our passion. We believe that a house becomes a home when it’s personalized — your space should show off your tastes and personality, work with your lifestyle, and maybe make your guests a little jealous. We know that creating a home interior that does all of these things isn’t easy, and we’re here to help.</p>
                                    <p>Our talented interior designers bring 13 years of experience to the table, couch, coffee table, or whichever furniture piece we’re sitting near. From discovering your personal style to knocking down that wall that’s been preventing the open-concept living area you’ve been lusting after, our design firm will make sure that your space isn’t just aesthetically pleasing, but also a reflection of you. So, let’s go beyond those free room layout templates on the internet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>1.
                    </div>
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>

            <!--section-->
            {{-- <section id="sec2" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3>My Skills</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                    </div>
                    <div class="skillbar-box animaper">
                        <div class="pr-bg pr-bg-white"></div>
                        <!-- skill 1-->
                        <div class="custom-skillbar-title"><span>Photoshop</span></div>
                        <div class="skill-bar-percent">95%</div>
                        <div class="skillbar-bg" data-percent="95%">
                            <div class="custom-skillbar"></div>
                        </div>
                        <!-- skill 2-->
                        <div class="custom-skillbar-title"><span>Illustrator</span></div>
                        <div class="skill-bar-percent">65%</div>
                        <div class="skillbar-bg" data-percent="65%">
                            <div class="custom-skillbar"></div>
                        </div>
                        <!-- skill 3-->
                        <div class="custom-skillbar-title"><span>3D MAX</span></div>
                        <div class="skill-bar-percent">75%</div>
                        <div class="skillbar-bg" data-percent="75%">
                            <div class="custom-skillbar"></div>
                        </div>
                        <!-- skill 4-->
                        <div class="custom-skillbar-title"><span>Google ScketchUp</span></div>
                        <div class="skill-bar-percent">90%</div>
                        <div class="skillbar-bg" data-percent="90%">
                            <div class="custom-skillbar"></div>
                        </div>
                    </div>
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>2.
                    </div>
                </div>
            </section> --}}
            <!--section end-->
        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->

@endsection
