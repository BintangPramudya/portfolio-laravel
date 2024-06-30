<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('/') }}template/css/custom-bs.css">
    <link rel="stylesheet" href="{{ asset('/') }}template/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}template/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}template/fonts/line-icons/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}template/css/style.css">
</head>

<body>
    @yield('content')
    <!-- SCRIPTS -->
    <script src="{{ asset('/') }}template/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}template/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}template/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}template/js/stickyfill.min.js"></script>
    <script src="{{ asset('/') }}template/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('/') }}template/js/jquery.easing.1.3.js"></script>

    <script src="{{ asset('/') }}template/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('/') }}template/js/jquery.animateNumber.min.js"></script>

    <script src="{{ asset('/') }}template/js/custom.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>
