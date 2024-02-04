@extends('frontend.layout.app')
@section('content')

<!-- content -->
<div class="content">
    <!-- fw-carousel-wrap -->
    <div class="fw-carousel-wrap show-case-slider-wrap dark-bg fl-wrap">
        <!-- fw-carousel  -->
        <div class="fw-carousel  fs-gallery-wrap fl-wrap full-height lightgallery" data-mousecontrol="0">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide-->
                    @foreach ($project_id as $project)
                        <div class="swiper-slide hov_zoom">
                            <img  src="{{ asset('uploads/gallery') }}/{{ $project->gallery }}"   alt="">
                            <a href="{{ asset('uploads/gallery') }}/{{ $project->gallery }}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <div class="pr-bg"></div>
                        </div>
                    @endforeach
                    <!-- swiper-slide end-->
                </div>
            </div>
        </div>
        <!-- fw-carousel end -->
    </div>
    <!-- fw-carousel-wrap end -->
    <!-- fw-carousel-control -->
    <div class="fw-carousel-control dark-bg fl-wrap">
        <div class="fw-carousel-control_container">
            <div class="fw-carousel-counter"></div>
            <div class="fw_cb fw-carousel-button-next"><i class="fal fa-long-arrow-right"></i></div>
            <div class="fw_cb fw-carousel-button-prev"><i class="fal fa-long-arrow-left"></i></div>
        </div>
        <div class="half-scrollbar">
            <div class="hs_init"></div>
        </div>
    </div>
    <!-- fw-carousel-control end -->
    <!-- section-->
    <section class="no-padding-bottom" id="sec2">
        <!-- container-->
        <div class="container">
            <!-- det-wrap-->
            <div class="fl-wrap det-wrap">
                <div class="row">
                    <div class="col-md-12 first-tile_load">

                        <!-- tabs-container-->
                        <div id="tabs-container">
                            <!-- tab-content-->
                            <div id="tab-1" class="tab-content">
                                <h3 class="pr-subtitle"> Project Info</h3>
                                <p>{{ $projects->first()->title }}</p>
                                <p>{{ $projects->first()->description }}</p>
                                <p class="mar-top"></p>
                            </div>
                            <!-- tab-content end-->

                        </div>
                        <!-- tabs-container end-->
                        <div class="clearfix"></div>
                        <span class="dec-border fl-wrap"></span>
                    </div>
                </div>
            </div>
            <!-- det-wrap end-->
        </div>
        <!-- container end -->
        <div class="clearfix"></div>
        <div class="limit-box fl-wrap"></div>
        <!--content-nav_holder-->

        <!-- content-nav_holder end-->
    </section>
    <!-- section end-->
</div>
<!-- content end -->
<!-- footer -->
<div class="height-emulator fl-wrap"></div>

@endsection
