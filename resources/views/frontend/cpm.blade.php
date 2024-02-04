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
            <div class="bg" data-bg="{{ asset('frontend') }}/images/bg/14.jpg"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>TEAM<br> </h2>
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
                        <h3> TEAM</h3>
                        <p></p>
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-text">
                            <div class="row">
                                @foreach ($teams as $team)
                                <div class="col-md-12 mb-5" style="text-align: left; padding-bottom: 40px;">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2">
                                            @if ($team->image != null)
                                                <img width="100px" height="100px" style="border-radius: 50%" src="{{ asset('uploads/team') }}/{{ $team->image }}" alt="">
                                            @else
                                                <img width="100px" height="100px" style="border-radius: 50%" src="{{ asset('frontend/images/team/1.png') }}" alt="">
                                            @endif
                                        </div>
                                        <div class="col-lg-10 col-md-10">
                                            <h3 style="font-size: 22px"><strong>{{ $team->name }}</strong></h3>
                                            <p><strong>{{ $team->education }}</strong></p>
                                            <p><strong>{{ $team->post }}</strong></p>
                                        </div>

                                    </div>
                                    <p>{{ $team->description }}</p>
                                </div>
                                @endforeach
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
<!-- footer -->
<div class="height-emulator fl-wrap"></div>


@endsection
