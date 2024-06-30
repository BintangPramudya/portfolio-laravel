@extends('front.layout.app')
@section('title', 'Bintang Pramudya | Portfolio')
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
        <section class="home-section section-hero overlay slanted" id="home-section">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 text-center">
                        <h1>Portfolio</h1>
                        <div class="mx-auto w-75">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis aperiam eveniet vitae
                                mollitia nemo.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="video-container">
                <img src="{{ asset('/') }}template/images/hero_portfolio.jpg" alt="">
            </div>

            <a href="#next-section" class="smoothscroll scroll-button">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>

        </section>

        <section class="site-section block__62272" id="portfolio-section">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12 text-center">
                        <h3 class="section-title-sub text-primary">Awesome Works</h3>
                        <h2 class="section-title mb-3">Portfolio</h2>
                    </div>
                </div>

                <div class="row justify-content-center mb-5">
                    <div id="filters" class="filters text-center button-group col-md-7">
                        <button class="btn btn-primary active" data-filter="*">All</button>
                        <button class="btn btn-primary" data-filter=".web">Web</button>
                        <button class="btn btn-primary" data-filter=".design">Design</button>
                    </div>
                </div>

                <div id="posts" class="row no-gutter">
                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">
                        <a href="{{ url('project-1') }}" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/project-1.png">
                        </a>
                    </div>
                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">
                        <a href="{{ url('project-2') }}" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/project-2.png">
                        </a>
                    </div>

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">

                        <a href="" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/Home.png">
                        </a>

                    </div>

                    <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">
                        <a href="{{ url('project-3') }}" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/project-3.png">
                        </a>
                    </div>

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">
                        <a href="" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/Home2.png">
                        </a>
                    </div>

                    {{-- <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                        <a href="" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/sq_img_9.jpg">
                        </a>
                    </div> --}}

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">
                        <a href="" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/Dokter.png">
                        </a>
                    </div>

                    <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4" data-aos="fade-up">
                        <a href="" class="item-wrap">
                            <span class="icon-link"></span>
                            <img class="img-fluid" src="{{ asset('/') }}template/images/dokter2.png">
                        </a>
                    </div>
                </div>
            </div>

        </section>

        {{-- <section class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h3 class="section-title-sub text-primary">Testimonials</h3>
                        <h2 class="section-title mb-3">Happy People Says</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block__87154">
                            <span class="quote"><img src="{{ asset('/') }}template/images/quote.png"
                                    alt="Image"></span>
                            <blockquote>
                                <p>Ipsum harum assumenda in eum vel eveniet numquam cumque vero vitae enim cupiditate
                                    deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex
                                    asperiores quisquam optio nostrum sit</p>
                            </blockquote>
                            <div class="block__91147 d-flex align-items-center">
                                <figure class="mr-4"><img src="{{ asset('/') }}template/images/person_1.jpg"
                                        alt="Image" class="img-fluid">
                                </figure>
                                <div>
                                    <h3>Elisabeth Smith</h3>
                                    <span class="position">Creative Director</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="block__87154">
                            <span class="quote"><img src="{{ asset('/') }}template/images/quote.png"
                                    alt="Image"></span>
                            <blockquote>
                                <p>Ipsum harum assumenda in eum vel eveniet numquam, cumque vero vitae enim cupiditate
                                    deserunt eligendi officia modi consectetur. Expedita tempora quos nobis earum hic ex
                                    asperiores quisquam optio nostrum sit</p>
                            </blockquote>
                            <div class="block__91147 d-flex align-items-center">
                                <figure class="mr-4"><img src="{{ asset('/') }}template/images/person_2.jpg"
                                        alt="Image" class="img-fluid">
                                </figure>
                                <div>
                                    <h3>Chris Peter</h3>
                                    <span class="position">Web Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section> --}}


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
