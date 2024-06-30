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
                            <li><a href="#" class="nav-link active">Home</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
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
                        <h1>Bintang Pramudya</h1>
                        <div class="mx-auto w-75">
                            <p>Mahasiswa | ITSK dr. Soepraoen</p>
                        </div>
                        <p class="mt-5"><a href="{{url('contact')}}" class="btn btn-outline-white btn-md ">Get in touch</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="video-container">
                <img src="{{ asset('/') }}template/images/hero_bg.jpg" alt="">
            </div>

            <a href="#about-us-section" class="scroll-button smoothscroll">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>

        </section>

        <!-- ABOUT US -->
        <section class="site-section about-us-section" id="about-us-section">
            <div class="container">
                <div class="row mb-5 pt-0 site-section">
                    <div class="col-md-6 align-self-center">
                        <h3 class="section-title-sub text-primary" data-aos="fade-up">Tentang Saya</h3>
                        <h2 class="section-title mb-4" data-aos="fade-up">Bintang Pramudya</h2>
                        <p data-aos="fade-up">Saya adalah seorang remaja berusia 20 tahun yang telah menyelesaikan
                            pendidikan SMA
                            jurusan IPA dan saat ini sedang menempuh pendidikan S1 di bidang Informatika di
                            Malang, dengan fokus pada pengembangan web fullstack. Saya memiliki pemahaman
                            mendalam tentang teknologi dan bahasa pemrograman yang digunakan dalam pengembangan
                            web, baik di sisi front-end maupun back-end.</p>
                        <p data-aos="fade-up">Dengan semangat belajar yang tinggi dan
                            kemampuan adaptasi terhadap teknologi terbaru, saya berharap dapat bekerja sebagai
                            fullstack web developer untuk mengasah keahlian, menambah pengalaman praktis, dan
                            berkontribusi dalam tim yang dinamis dan inovatif.</p><br>
                        <div class="col mt-5" data-aos="fade-up">
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
                                class="img-fluid img-shadow" data-aos="fade-up">
                        </div>
                        {{-- <div class="img-2"><img src="{{ asset('/') }}template/images/bintangp3.jpg" alt="Image"
                                class="img-fluid img-shadow">
                        </div> --}}
                    </div>
                </div>

                {{-- <div class="row pb-0 border-top pt-5 block__19738 section-counter">

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <span class="icon-line-mobile mr-3"></span>
                            <strong class="number" data-number="2393">0</strong>
                        </div>
                        <span class="caption">Completed Projects</span>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <span class="icon-line-lightbulb mr-3"></span>
                            <strong class="number" data-number="54">0</strong>
                        </div>
                        <span class="caption">Winners &amp; Awards</span>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <span class="icon-line-trophy mr-3"></span>
                            <strong class="number" data-number="120">0</strong>
                        </div>
                        <span class="caption">Number of Team</span>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                            <span class="icon-line-puzzle mr-3"></span>
                            <strong class="number" data-number="550">0</strong>
                        </div>
                        <span class="caption">Line of Codes</span>
                    </div>


                </div> --}}

            </div>
        </section>

        <!-- MY SKILLS -->
        <section class="site-section skills-section bg-light block__62849" id="skills-section">
            <div class="container">
                <div class="row mb-5" data-aos="fade-up">
                    <div class="col-12 text-center" data-aos="fade">
                        <h3 class="section-title-sub text-primary">My Skills</h3>
                        <h2 class="section-title mb-3">Skills</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
                        <a href="service-single.html" class="block__16443 text-center d-block">
                            <span class="custom-icon mx-auto"><span class="icon-html5 d-block"></span></span>
                            <h3>HTML</h3>
                            <p>Intermediate</p>
                            <progress max="100" value="80"></progress>
                            <p>80%</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
                        <a href="service-single.html" class="block__16443 text-center d-block">
                            <span class="custom-icon mx-auto"><span class="icon-css3 d-block"></span></span>
                            <h3>CSS</h3>
                            <p>Intermediate</p>
                            <progress max="100" value="75"></progress>
                            <p>75%</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
                        <a href="service-single.html" class="block__16443 text-center d-block">
                            <span class="custom-icon mx-auto"><span class="icon-javascript d-block"><i
                                        class="fa-brands fa-js"></i></span></span>
                            <h3>JavaScript</h3>
                            <p>Beginner</p>
                            <progress max="100" value="85"></progress>
                            <p>85%</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
                        <a href="service-single.html" class="block__16443 text-center d-block">
                            <span class="custom-icon mx-auto"><span class="icon-php d-block"><i
                                        class="fa-brands fa-php"></i></span></span>
                            <h3>PHP</h3>
                            <p>Beginner</p>
                            <progress max="100" value="70"></progress>
                            <p>70%</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
                        <a href="service-single.html" class="block__16443 text-center d-block">
                            <span class="custom-icon mx-auto"><span class="icon-laravel d-block"><i
                                        class="fa-brands fa-laravel"></i></span></span>
                            <h3>Laravel</h3>
                            <p>Beginner</p>
                            <progress max="100" value="67"></progress>
                            <p>67%</p>
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5" data-aos="fade-up">
                        <a href="service-single.html" class="block__16443 text-center d-block">
                            <span class="custom-icon mx-auto"><span class="icon-wordpress d-block"></span></span>
                            <h3>WordPress</h3>
                            <p>Beginner</p>
                            <progress max="100" value="72"></progress>
                            <p>72%</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
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

        <section class="site-section block__45439 bg-light">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center" data-aos="fade">
                        <h3 class="section-title-sub text-primary">Read the latest post</h3>
                        <h2 class="section-title mb-3">Blog Posts</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up">
                        <div class="block__86547 d-block d-xl-flex align-items-stretch">
                            <figure class="img"
                                style="background-image: url('{{ asset('/') }}template/images/laravelll.jpg')">
                            </figure>
                            <div class="h-100">
                                <h3 class="mb-4"><a href="#">Framework PHP Modern untuk Pengembangan Web</a></h3>
                                <div class="block__27192 d-flex pt-1 border-top">
                                    <a href=""><span class="icon-file"></span> Framework</a>
                                    <a href=""><span class="icon-calendar-o"></span> 29 Juni 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up">
                        <div class="block__86547 d-block d-xl-flex align-items-stretch">
                            <figure class="img"
                                style="background-image: url('{{ asset('/') }}template/images/reactjs.jpg')">
                            </figure>
                            <div class="h-100">
                                <h3 class="mb-4"><a href="#">Pengenalan ReactJS: Panduan Lengkap untuk Pemula</a>
                                </h3>
                                <div class="block__27192 d-flex pt-1 border-top">
                                    <a href=""><span class="icon-file"></span> Framework</a>
                                    <a href=""><span class="icon-calendar-o"></span> 19 Juni 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up">
                        <div class="block__86547 d-block d-xl-flex align-items-stretch">
                            <figure class="img"
                                style="background-image: url('{{ asset('/') }}template/images/java.jpg')">
                            </figure>
                            <div class="h-100">
                                <h3 class="mb-4"><a href="#">Java</a></h3>
                                <div class="block__27192 d-flex pt-1 border-top">
                                    <a href=""><span class="icon-file"></span> Programming</a>
                                    <a href=""><span class="icon-calendar-o"></span> 24 Apr 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-4" data-aos="fade-up">
                        <div class="block__86547 d-block d-xl-flex align-items-stretch">
                            <figure class="img"
                                style="background-image: url('{{ asset('/') }}template/images/php.jpg')">
                            </figure>
                            <div class="h-100">
                                <h3 class="mb-4"><a href="#">Apa itu Pemrograman PHP</a></h3>
                                <div class="block__27192 d-flex pt-1 border-top">
                                    <a href=""><span class="icon-file"></span> Programming</a>
                                    <a href=""><span class="icon-calendar-o"></span> 17 Apr 2024</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="4000">
                <div class="col-12 text-center mt-5">
                    <a href="{{ url('blog') }}" class="btn btn-primary btn-md">Read More</a>
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
