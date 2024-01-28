<footer class="main-footer fixed-footer">
    <div class="pr-bg"></div>
    <div class="container">
        <div class="fl-wrap footer-inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-logo">
                        @if ($setting->first()->footer_logo != null)
                            <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></a>
                        @endif
                    </div>
                    <div class="footer_text  footer-box fl-wrap">
                        @if ( $setting->first()->about != null)
                            <p>{{ $setting->first()->about }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-header fl-wrap"> Contacts</div>
                    <!-- footer-contacts-->
                    <div class="footer-contacts footer-box fl-wrap">
                        <ul>
                            @if ($setting->first()->number != null)
                                <li><span>Phone : </span><a>{{ $setting->first()->number }}</a></li>
                            @endif
                           @if ($setting->first()->email != null)
                                <li><span>Email : </span><a>{{ $setting->first()->email }}</a></li>
                            @endif
                            @if ($setting->first()->address != null)
                             <li><span>Address : </span><a>{{ $setting->first()->address }}</a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- footer contacts end -->
                </div>
            </div>
        </div>
        <div class="subfooter fl-wrap">
            <!-- policy-box-->
            <div class="policy-box">
                @if ($setting->first()->footer != null)
                    <span>{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortech.com/" style="color: #fff">Nugortechit</a></span>
                @endif
            </div>
            <!-- policy-box end-->
            <a href="#" class="to-top-btn to-top">Back to top <i class="fal fa-long-arrow-up"></i></a>
        </div>
    </div>
    <div class="footer-canvas">
        <div class="dots gallery__dots" data-dots=""></div>
    </div>
</footer>
