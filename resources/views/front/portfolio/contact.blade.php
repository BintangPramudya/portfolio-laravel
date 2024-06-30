@extends('front.layout.app')
@section('title', 'Bintang Pramudya | Contact')
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
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                            <li><a href="{{ url('contact') }}" class="active">Contact</a></li>
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
                        <h1>Kontak saya</h1>
                        <div class="mx-auto w-75">
                            <p>Bintang Pramudya</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VIDEO -->
            <div class="video-container">
                <img src="{{ asset('/') }}template/images/bg_contact.jpg" alt="">
            </div>

            <a href="#next-section" class="smoothscroll scroll-button">
                <span class=" icon-keyboard_arrow_down"></span>
            </a>

        </section>

        <section class="site-section" id="next-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <form action="#" class="">

                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label class="text-black" for="fname">First Name</label>
                                    <input type="text" id="fname" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname">Last Name</label>
                                    <input type="text" id="lname" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="email">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">

                                <div class="col-md-12">
                                    <label class="text-black" for="subject">Subject</label>
                                    <input type="subject" id="subject" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
                                        placeholder="Write your notes or questions here..."></textarea>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                                </div>
                            </div>


                        </form>
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">Malang</p>

                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+62823 2323 5324</a></p>

                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">bintangpramudyapp@gmail.com</a></p>

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
