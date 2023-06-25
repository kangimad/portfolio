<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kangimad | Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/assets/css/style.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    {{-- NAVBAR --}}
    @include('portfolio.layouts.header')
    {{-- END NAVBAR --}}

    {{-- HERO --}}
    @yield('home')
    {{-- END HERO --}}

    {{-- ABOUT --}}
    @yield('about')
    {{-- END ABOUT --}}

    {{-- RESUME --}}
    @yield('resume')
    {{-- END RESUME --}}

    {{-- SERVICE --}}
    @yield('services')
    {{-- END SERVICE --}}

    {{-- SKILLS --}}
    @yield('skills')
    {{-- END SKILLS --}}

    {{-- PROJECT --}}
    @yield('projects')
    {{-- END PROJECT --}}

    {{-- BLOG --}}
    @yield('blog')
    {{-- END BLOG --}}

    {{-- CONTACT --}}
    @yield('contact')
    {{-- END CONTACT --}}

    {{-- FOOTER --}}
    @include('portfolio.layouts.footer')
    {{-- END FOOTER --}}


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="{{ asset('portfolio/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/aos.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('portfolio/assets/js/scrollax.min.js') }}"></script>

    <script src="{{ asset('portfolio/assets/js/main.js') }}"></script>

</body>

</html>
