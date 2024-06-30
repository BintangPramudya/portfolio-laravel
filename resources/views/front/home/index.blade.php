<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bintang Pramudya | Blog</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('/') }}template/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('/') }}template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/') }}template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('/') }}template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}template/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="{{ asset('/') }}template/assets/css/variables.css" rel="stylesheet">
    <link href="{{ asset('/') }}template/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Bintang Pramudya | Blog</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/articles') }}">Artikel</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="https://www.facebook.com/bintang.pramudya.7186" target="_blank" class="mx-2"><span
                        class="bi-facebook"></span></a>
                <a href="https://github.com/BintangPramudya" target="_blank" class="mx-2"><span
                        class="bi-github"></span></a>
                <a href="https://www.instagram.com/bintangp3_" target="_blank" class="mx-2"><span
                        class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts">

                            <div class="swiper-wrapper">
                                @foreach ($articles as $item)
                                    <div class="swiper-slide">
                                        <a href="{{ url('p/' . $item->slug) }}" class="img-bg d-flex align-items-end"
                                            style="background-image: url('{{ asset('storage/back/' . $item->img) }}');">
                                            <div class="img-bg-inner">
                                                <h2>{{ $item->title }}</h2>
                                                <p>{{ Str::limit(strip_tags($item->desc), 200, '...') }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="{{ url('p/' . $item->slug) }}" class="img-bg d-flex align-items-end"
                                            style="background-image: url('{{ asset('storage/back/' . $item->img) }}');">
                                            <div class="img-bg-inner">
                                                <h2>{{ $item->title }}</h2>
                                                <p>{{ Str::limit(strip_tags($item->desc), 200, '...') }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="custom-swiper-button-next">
                                <span class="bi-chevron-right"></span>
                            </div>
                            <div class="custom-swiper-button-prev">
                                <span class="bi-chevron-left"></span>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">
                            <a href="{{ url('p/' . $latest_post->slug) }}"><img
                                    src="{{ asset('storage/back/' . $latest_post->img) }}" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date"></span>{{ $latest_post->Category->name }}
                                <span class="mx-1">&bullet;</span>
                                <span>{{ $latest_post->created_at->format('d-m-Y') }}</span>
                            </div>
                            <h2><a href="single-post.html">{{ $latest_post->title }}</a></h2>
                            <p class="mb-4 d-block">{{ Str::limit(strip_tags($latest_post->desc), 250, '...') }}</p>
                            <a href="{{ url('p/' . $latest_post->slug) }}" class="btn btn-primary btn-md">Read
                                More</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col border-start custom-border">
                                @foreach ($articles as $item)
                                    <div class="post-entry-1">
                                        <a href="{{ url('p/' . $item->slug) }}"><img
                                                src="{{ asset('storage/back/' . $item->img) }}" alt=""
                                                class="img-fluid"></a>
                                        <div class="post-meta"><span
                                                class="date">{{ $item->Category->name }}</span> <span
                                                class="mx-1">&bullet;</span>
                                            <span>{{ $item->created_at->format('d-m-Y') }}</span>
                                        </div>
                                        <h2><a href="single-post.html">{{ $item->title }}</a></h2>
                                        <a href="{{ url('p/' . $item->slug) }}" class="btn btn-primary btn-md">Read
                                            More</a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Pagination-->
                            <div class="pagination justify-content-center my-4">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>

                </div> <!-- End .row -->
            </div>
        </section> <!-- End Post Grid Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-4">
                        <h3 class="footer-heading">About Me</h3>
                        <p>Blog ini saya buat dengan sepenuh hati</p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Navigation</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="{{ url('/') }}"><i class="bi bi-chevron-right"></i> Home</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Categories</h3>
                        <ul class="footer-links list-unstyled">
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="footer-heading">Recent Posts</h3>
                        @foreach ($articles as $item)
                            <ul class="footer-links footer-blog-entry list-unstyled">
                                <li>
                                    <a href="{{ url('p/' . $item->slug) }}" class="d-flex align-items-center">
                                        <img src="{{ asset('storage/back/' . $item->img) }}" alt=""
                                            class="img-fluid me-3">
                                        <div>
                                            <div class="post-meta d-block"><span
                                                    class="date">{{ $item->Category->name }}</span> <span
                                                    class="mx-1">&bullet;</span>
                                                <span>{{ $item->created_at->format('d-m-Y') }}</span>
                                            </div>
                                            <span>{{ $item->title }}</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <div class="copyright">
                            © Copyright <strong><span>2024</span></strong>. All Rights Reserved
                        </div>
                        <div class="credits">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                            Designed by <a href="">Bintang Pramudya</a>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                            <a href="https://github.com/BintangPramudya" class="github"><i
                                    class="bi bi-github"></i></a>
                            <a href="https://gitlab.com/BintangPramudya" class="gitlab"><i
                                    class="bi bi-gitlab"></i></a>
                            <a href="https://www.facebook.com/bintang.pramudya.7186" class="facebook"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/bintangp3_" class="instagram"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/bintang-pramudya/" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </footer>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/') }}template/assets/js/main.js"></script>

</body>

</html>
