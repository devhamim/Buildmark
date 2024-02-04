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
            <div class="bg" data-bg="{{ asset('frontend') }}/images/bg/12.jpg"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>About Us<br> </h2>
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
                        <h3> About Us</h3>
                        <p></p>
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        {{-- <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <img src="{{ asset('frontend') }}/images/all/1.jpg"  class="respimg" alt="">

                        </div> --}}
                        <div class="column-wrap-text">
                            <div class="row">
                                {{-- <div class="col-md-4">
                                    <h3 class="pr-subtitle">
                                        About Us
                                        <div class="pr-bg pr-bg-white"></div>
                                    </h3>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <h3 class="pb-5" style="text-align: left; font-size: 18px;">TO TRANSFORM ENVIRONMENTS, COMMUNITIES, AND ECONOMIES, BUILDMARK COMBINES STRATEGIC THINKING WITH BOLD AND INSPIRATIONAL DESIGN.</h3>
                                    <p>We believe that the power of design has the potential to transform
                                        economies, societies, and the environment. Through specialized designs
                                        that surpass our clients' business objectives and motivate those who
                                        occupy them for living, working, and healing, we help our clients realize
                                        their dreams. Regardless of the sort of development, scale, scope, or
                                        location involved, we always keep the people we are designing for in mind
                                        and approach every problem as a chance for learning.
                                        Our audacious design concepts are inspired by the assurance that comes
                                        from developed knowledge, attentive listening, strong business ownership,
                                        and a collaborative combination of viewpoints.
                                        We are here to do more than design your physical space. We know the ins
                                        and outs of the architectural landscape, enabling us to find cost-reducing
                                        efficiencies while maintaining a passion for new approaches.
                                        We specialize in engineering, architecture, environmental and construction
                                        services. Our team of Engineers offers expertise in a wide range of
                                        technical fields, including civil, structural, environmental, hydraulic,
                                        plumbing, mechanical, project management, and more.</P>


                                </div>
                                <div class="col-lg-12">
                                    <h3 class="pb-5" style="text-align: left; font-size: 25px; font-weight: 800; padding-top: 20px">MISSION & VISION</h3>
                                    <p><strong>* </strong> To establish collaborations that produce creative, economical, high-quality construction that surpasses our clients' expectations in a safe environment.</p>
                                    <p><strong>* </strong> Be a respected, leading regional infrastructure engineering consultant and builder.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="section-number right_sn">-->
                    <!--    <div class="pr-bg pr-bg-white"></div>-->
                    <!--    <span>0</span>1.-->
                    <!--</div>-->
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>
            <!--section -->
            {{-- <section   class="no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inline-facts-container fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="4">0</div>
                                            </div>
                                        </div>
                                        <h6>Finished projects</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="83">0</div>
                                            </div>
                                        </div>
                                        <h6>Happy customers</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="50000">0</div>
                                            </div>
                                        </div>
                                        <h6>Built-Up Sqft Delivered</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="309000">0</div>
                                            </div>
                                        </div>
                                        <h6>Built-Up Sqft Proposed</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->

@endsection
