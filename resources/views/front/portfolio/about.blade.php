@extends('front.layout.app')
@section('title', 'Bintang Pramudya | About')
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
                            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ url('about') }}" class="active">About</a></li>
                            <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
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
        <section class="home-section section-hero overlay slanted" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>Tentang Saya</h1>
                        <div class="mx-auto w-75">
                            <p>Bintang Pramudya</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="video-container">
                <img src="{{ asset('/') }}template/images/hero_bg.jpg" alt="">
            </div>

            <a href="#next-section" class="smoothscroll scroll-button">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>

        </section>

        <!-- ABOUT US -->
        <section class="site-section about-us-section">
            <div class="container" data-aos="fade-up">
                <div class="row mb-5 pt-0 site-section">
                    <div class="col-md-6 align-self-center">
                        <h3 class="section-title-sub text-primary">Tentang Saya</h3>
                        <h2 class="section-title mb-4">Bintang Pramudya</h2>
                        <p>Saya adalah seorang remaja berusia 20 tahun yang telah menyelesaikan pendidikan SMA
                            jurusan IPA dan saat ini sedang menempuh pendidikan S1 di bidang Informatika di
                            Malang, dengan fokus pada pengembangan web fullstack. Saya memiliki pemahaman
                            mendalam tentang teknologi dan bahasa pemrograman yang digunakan dalam pengembangan
                            web, baik di sisi front-end maupun back-end.</p>
                        <p>Dengan semangat belajar yang tinggi dan
                            kemampuan adaptasi terhadap teknologi terbaru, saya berharap dapat bekerja sebagai
                            fullstack web developer untuk mengasah keahlian, menambah pengalaman praktis, dan
                            berkontribusi dalam tim yang dinamis dan inovatif.</p>
                        <div class="col mt-5">
                            <h3>Follow Me</h3>
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
                    <div class="col-md-5 ml-auto img-overlap">
                        <div class="img-1"><img src="{{ asset('/') }}template/images/Bintang.jpg" alt="Image"
                                class="img-fluid img-shadow">
                        </div>
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
