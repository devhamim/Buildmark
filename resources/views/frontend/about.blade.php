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
                        <h3> Our company story</h3>
                        <p></p>
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <img src="{{ asset('frontend') }}/images/all/1.jpg"  class="respimg" alt="">

                        </div>
                        <div class="column-wrap-text">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 class="pr-subtitle">
                                        About Us
                                        <div class="pr-bg pr-bg-white"></div>
                                    </h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <p>V3 Partners is a meticulously managed construction company. Incorporated in the year 2009, the company has completed several projects in the Mumbai Metropolitan Region (MMR).</p>
                                    <p>The company has attained heights on a strong foundation of high business ethics. The company believes participating in all round functions of the business i.e. project feasibility, optimised planning, marquee architecture, latest construction technique, smooth management, timely delivery and most importantly, customer satisfaction.</p>
                                    <P>The company focuses only on redevelopment of societies in the Mumbai Metropolitan Region (MMR) and is expanding its growth on large scale development outside Mumbai to tap future cities with affordable housing.</P>
                                    <P>What started as a humble beginning has now grown within years as strength and stature. During this journey, the company has not only built building structures but gained customer relationship with trust. An atmospheres where ethics and principles still exists and thrive.</P>
                                    <P>The company believes in respecting its work regardless its magnitude. The principle behind this thought is work should be completed with hard work, precision and trust worthiness.</P>
                                    <P>V3 Partners believes it is in the business where on one hand there are people who impart with their home which they bought through their lifetime savings and on the other hand there are home buyers who accumulate every penny to buy a new home. This trust and dream of getting a new and better home drives and motivates us to give back to society what they have always aspired for.</P>
                                    <P>With this thought process; V3 Partners have started a new consultancy firm We3 Redevelopment Consultant’s Private Limited (We3 RCPL). We3 RCPL focuses on self-redevelopment of societies on Development Management (DM) model. At We3 RCPL we offer a whole bouquet of scope of work under one umbrella. Our one of a kind model of self-redevelopment helps society to take on the mammoth task of redevelopment with ease and peace.</P>


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
            <!--section -->
            <section   class="no-padding">
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
            </section>


        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->

@endsection
