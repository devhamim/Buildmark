
<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KV2EPFNNYK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KV2EPFNNYK');
</script>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        @if ($setting->first()->title != null)
            <title>{{ $setting->first()->title }}</title>
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/reset.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/css/color.css">
        <!--=============== favicons ===============-->
        @if ($setting->first()->favicon != null)
            <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
        @endif
    </head>
    <body>
        <!--Loader -->
        <div class="loader2">
            <div class="loader loader_each"><span></span></div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">

            <!-- header start  -->
            @include('frontend.layout.header')
            <!-- wrapper end -->
                @yield('content')

            @include('frontend.layout.footer')
                    <!-- share-wrapper  end -->
                </div>
                <!-- content-holder end -->
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('frontend') }}/js/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('frontend') }}/js/plugins.js"></script>
        <script type="text/javascript" src="{{ asset('frontend') }}/js/core.js"></script>
        <script type="text/javascript" src="{{ asset('frontend') }}/js/scripts.js"></script>


    </body>
</html>
