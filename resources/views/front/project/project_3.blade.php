@extends('front.layout.app')
@section('title', 'Bintang Pramudya | Project 3')
@section('content')
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <!-- NAVBAR -->
        <header class="site-navbar mt-3" id="top">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="site-logo col-6"><a href="{{ url('/') }}">Bintang Pramudya</a></div>
                    <nav class="mx-auto site-navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('portfolio') }}" class="active">Portfolio</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>

                    <div class="col-6 site-burger-menu d-block d-lg-none text-right">
                        <a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>
        </header>

        <!-- HOME -->
        <section class="home-section section-hero image-bg overlay-2 slanted"
            style="background-image: url('{{asset('/')}}template/images/project-1.png')" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>Sistem Informasi Klinik</h1>
                        <div class="mx-auto w-75">
                            <p>Laravel 10</p>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#next-section" class="smoothscroll scroll-button">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>

        </section>

        <section class="site-section portfolio-single" id="next-section">

            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <p>Projek ini saya buat untuk melengkapi tugas kuliah saya pada mata kuliah sistem informasi.</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <strong class="d-block text-black">Client</strong>
                        -
                    </div>
                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <strong class="d-block text-black">Tool</strong>
                        Laravel 10
                    </div>
                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <strong class="d-block text-black">Year Started</strong>
                        2024
                    </div>
                    <div class="col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <strong class="d-block text-black">Website URL</strong>
                        <a href="https://github.com/BintangPramudya" target="_blank" class="spepcial_link">Visit Website</a>
                    </div>
                </div>
                <div class="row mb-5 mt-5">

                    <div class="col-lg-6">
                        <figure>
                            <a href="#" data-fancybox="gallery"><img src="{{asset('/')}}template/images/project-3.png"
                                    alt="Image" class="img-fluid border"></a>
                        </figure>
                    </div>
                    <div class="col-lg-5 ml-auto h-100 jm-sticky-top">
                        <div class="mb-5">
                            <h3 class="mb-4 h4">Dashboard Admin CRUD</h3>

                            <p class="mb-0">Sistem Informasi Klinik berbasis web ayng dibuat sederhana atau user friendly menggunakan laravel 10.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <figure class="mb-0 ">
                            <a href="#" data-fancybox="gallery"><img src="{{asset('/')}}template/images/project-3.png"
                                    alt="Image" class="img-fluid border"></a>
                        </figure>
                    </div>
                    <div class="col-lg-5 mr-auto h-100 jm-sticky-top  order-2 order-lg-1">

                        <h3 class="mb-4 h4">Tools</h3>
                        <ul class="ul-check success mt-5 list-unstyled mb-0">
                            <li>Laravel</li>
                            <li>Javascript</li>
                            <li>Bootstrap</li>
                            <li>Datatables</li>
                            <li>Laravel UI</li>
                        </ul>

                    </div>
                </div>


            </div>
        </section>
        <section class=" py-3 site-section">
            <div class="container ">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <a href="{{url('portfolio')}}" class="py-3 rounded border d-block">All Projects</a>
                    </div>
                </div>
            </div>
        </section>


        <footer class="site-footer slanted-footer">

            <a href="#top" class="smoothscroll scroll-top">
                <span class="icon-keyboard_arrow_up"></span>
            </a>

            <div class="container">
                <div class="row mb-5">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Navigation</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <h3>Contact Me</h3>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/bintang.pramudya.7186" target="_blank"><span
                                    class="icon-facebook"></span></a>
                            <a href="https://github.com/BintangPramudya" target="_blank"><span
                                    class="icon-github"></span></a>
                            <a href="https://www.instagram.com/bintangp3_" target="_blank"><span
                                    class="icon-instagram"></span></a>
                            <a href="https://www.linkedin.com/in/bintang-pramudya/" target="_blank"><span
                                    class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12">
                        <p class="copyright"><small class="block">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | <i class="icon-heart text-danger"
                                    aria-hidden="true"></i> by <a href="" target="_blank">Bintang Pramudya</a>
                            </small></p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
@endsection
