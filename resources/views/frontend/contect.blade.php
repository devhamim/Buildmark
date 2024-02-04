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
            <div class="bg" data-bg="{{ asset('frontend') }}/images/bg/11.jpeg"></div>
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
            <section   class="small-padding">
                    <div class="container">
                        <div class="split-sceen-content_title fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <h3>CONTACT US</h3>
                        </div>
                        <div class="column-wrap-content fl-wrap">

                            <div class=" fl-wrap">
                                <div class="pr-bg pr-bg-white"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p><span>Address: </span> LEV 01, HOUSE 12, ROAD 03 BOSOTI HOUSING, MIRPUR 02, DHAKA 1216, Bangladesh.</p>
                                        <p>
                                            <ul style=" text-align: left">
                                                <li style="font-size: 15px"><span>Phone: </span>+88 01711 980 089</li>
                                            </ul>
                                            <ul style="margin-left: 47px; text-align: left">
                                                <li style="font-size: 15px">+88 01712 524 598</li>
                                                <li style="font-size: 15px">+88 01819 427 442</li>
                                                <li style="font-size: 15px">+88 01710 054 037</li>
                                            </ul>
                                        </p>
                                        <p><span>Email: </span> buildmark.bd@yahoo.com</p>
                                        <p><span>Website: </span> www.buildmarkconsultants.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <div class="section-separator"></div>

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
