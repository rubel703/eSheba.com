<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>@yield('title')-eSheba</title>
    <link rel="stylesheet" href="{{asset('/')}}/assets/frontend/css/maicons.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/frontend/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/frontend/vendor/animate/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}/assets/frontend/css/theme.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/plugins/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/plugins/slick-theme.css">
     <!-- others Stylesheet -->
     <link rel="stylesheet" href="{{ asset('/') }}/assets/frontend/css/style.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('frontend.includes.header')

    @yield('content')

   @include('frontend.includes.footer')

    <script src="{{asset('/')}}/assets/frontend/js/jquery-3.5.1.min.js"></script>

    <script src="{{asset('/')}}/assets/frontend/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('/')}}/assets/frontend/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="{{asset('/')}}/assets/frontend/vendor/wow/wow.min.js"></script>

    <script src="{{asset('/')}}/assets/frontend/js/theme.js"></script>

    <script src="{{ asset('/') }}/assets/frontend/js/script.js"></script>
    <script src="{{ asset('/') }}/assets/frontend/js/contact.js"></script>

     <!-- Slick Slider -->
     <script src="{{ asset('/') }}/assets/frontend/plugins/slick.min.js"></script>
     <!-- Counterup -->
     <script src="{{ asset('/') }}/assets/frontend/plugins/jquery.waypoints.min.js"></script>

</body>

</html>
