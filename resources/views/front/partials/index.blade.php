<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bintang Pramudya | Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" />
</head>

<body>
    @include('front.partials.navbar')
    {{-- Hero section --}}
    <section id="#home" class="home py-5 bg-light">
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 mt-5 mt-md-0 ">
                    <div class="hero-img text-center">
                        <img src="{{ asset('images/bintangp3.jpg') }}" alt="" width="400"
                            class="rounded-circle mw-100" data-aos="flip-left" data-aos-duration="900">
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                    <div class="hero-text">
                        <p class="text-info mb-1">Halo Semua 👋, Saya</p>
                        <h1 class="fw-bold fs-1">Bintang Pramudya</h1>
                        <h2>Mahasiswa | <span class="text-secondary">Junior Web Developper</span></h2>
                        <p class="mt-4 text-muted">Jika kamu tidak tahan terhadap penatnya belajar, maka kamu akan
                            menanggung bahayanya
                            kebodohan. <span class="fw-bold">- Imam Syafi'i</span></p>
                        <a href="https://wa.link/zt0fv7" target="_blank" class="btn btn-info text-white">Hubungi
                            Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero section end --}}

    {{-- about --}}
    <section class="about py-5 bg-white" id="about">
        <div class="container-lg py-4 ">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Tentang Saya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">Menghubungkan kreativitas dengan Kode</h3>
                        <p class="text-muted">Nama saya Bintang Pramudya, seorang mahasiswa Informatika tahun kedua di
                            Universitas Teknologi Nusantara dan saya adalah Junior Web Developer. Saya memiliki
                            kegemaran dalam membangun dan mengembangkan aplikasi
                            web yang tidak hanya fungsional tetapi juga user-friendly. Melalui pendidikan saya di bidang
                            informatika, saya telah mengasah kemampuan teknis saya dalam pemrograman menggunakan
                            JavaScript, HTML, CSS, dan kerangka kerja seperti Node.js. Saya sangat berminat dalam
                            mengasah kemampuan coding saya dan terus belajar tentang teknologi terbaru di dunia web
                            development. </p>
                    </div>
                    <div class="about-text2">
                        <h2>Pendidikan</h2>
                        <ul class="list-group">
                            <li class="list-group-item">MA Sabilul Hasanah, 2019 - 2022</li>
                            <li class="list-group-item">Institut Teknologi, Sains, dan Kesehatan RS.DR. Soepraoen Kesdam
                                V/BRW, 2022 - Sekarang</li>
                        </ul>
                    </div>
                    <div class="row text-center text-uppercase my-3">
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <div class="social-links">
                                <a href="https://instagram.com/bintangp3_" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>Instagram</title>
                                        <path
                                            d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                                    </svg></a>
                                <a href="https://github.com/bintangpramudya" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>GitHub</title>
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                    </svg></a>
                                <a href="https://gitlab.com/bintangpramudya" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>GitLab</title>
                                        <path
                                            d="m23.6004 9.5927-.0337-.0862L20.3.9814a.851.851 0 0 0-.3362-.405.8748.8748 0 0 0-.9997.0539.8748.8748 0 0 0-.29.4399l-2.2055 6.748H7.5375l-2.2057-6.748a.8573.8573 0 0 0-.29-.4412.8748.8748 0 0 0-.9997-.0537.8585.8585 0 0 0-.3362.4049L.4332 9.5015l-.0325.0862a6.0657 6.0657 0 0 0 2.0119 7.0105l.0113.0087.03.0213 4.976 3.7264 2.462 1.8633 1.4995 1.1321a1.0085 1.0085 0 0 0 1.2197 0l1.4995-1.1321 2.4619-1.8633 5.006-3.7489.0125-.01a6.0682 6.0682 0 0 0 2.0094-7.003z" />
                                    </svg></a>
                                <a href="https://facebook.com/bintang.pramudya7186" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>Facebook</title>
                                        <path
                                            d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">HTML</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">CSS</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">JAVASCRIPT</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80"
                                aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">PHP</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about end --}}


    {{-- portfolio --}}
    <section id="portfolio" class="portfolio py-5 bg-light">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold">Project Terbaru</h2>
                        <p class="text-muted mb-5">Project yang saya buat untuk portfolio dan tugas</p>
                    </div>
                </div>
            </div>
            <div class="row dflex justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="portfolio-item" data-aos="flip-left" data-aos-duration="900">
                        <img src="{{ asset('images/project1.png') }}" alt="" class="w-100 img-thumbnail">
                        <h3 class="text-capitalize fs-5 my-2">CRUD PHP MySql</h3>
                        <p class="mb-4"><a href="{{ route('detail') }}"
                                class="text-primary text-decoration-none">Lihat
                                Detail</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="portfolio-item" data-aos="flip-up" data-aos-duration="900">
                        <img src="{{ asset('images/project2.png') }}" alt="" class="w-100 img-thumbnail">
                        <h3 class="text-capitalize fs-5 my-2">Web Portfolio HTML CSS Bootstrap</h3>
                        <p class="mb-4"><a href="{{ route('detail2') }}"
                                class="text-primary text-decoration-none">Lihat
                                Detail</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="portfolio-item" data-aos="flip-right" data-aos-duration="900">
                        <img src="{{ asset('images/project3.png') }}" alt="" class="w-100 img-thumbnail">
                        <h3 class="text-capitalize fs-5 my-2">CRUD Sorting Data Pasien</h3>
                        <p class="mb-4"><a href="{{ route('detail3') }}"
                                class="text-primary text-decoration-none">Lihat
                                Detail</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="portfolio-item " data-aos="flip-right" data-aos-duration="900">
                        <img src="{{ asset('images/project4.png') }}" alt="" class="w-100 img-thumbnail">
                        <h3 class="text-capitalize fs-5 my-2">Dashboard Admin CRUD Laravel</h3>
                        <p class="mb-4"><a href="{{ route('detail4') }}"
                                class="text-primary text-decoration-none">Lihat
                                Detail</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="portfolio-item " data-aos="flip-right" data-aos-duration="900">
                        <img src="{{ asset('images/si_annur-care.png') }}" alt="" class="w-100 img-thumbnail">
                        <h3 class="text-capitalize fs-5 my-2">Sistem informasi klinik laravel 10</h3>
                        <p class="mb-4"><a href="{{ route('detail5') }}"
                                class="text-primary text-decoration-none">Lihat
                                Detail</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- portfolio end --}}

    {{-- Blog --}}
    <section id="portfolio" class="portfolio py-5 bg-body-secondary">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold">Blog</h2>
                        <p class="text-muted mb-5">Project yang saya buat untuk portfolio dan tugas</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-item" data-aos="flip-left" data-aos-duration="900">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/javascript.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mengenal Javascript</h5>
                                <p class="card-text">JavaScript, sering disingkat sebagai JS, adalah
                                    salah satu bahasa pemrograman yang paling fundamental dan berpengaruh dalam
                                    pengembangan...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-item" data-aos="flip-left" data-aos-duration="900">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/laravel.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Laravel</h5>
                                <p class="card-text">Dalam dunia pengembangan web, kebutuhan akan aplikasi yang
                                    efisien, aman, dan mudah dikelola menjadi prioritas. Di antara berbagai framework...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-item" data-aos="flip-left" data-aos-duration="900">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/mysql.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">MySql</h5>
                                <p class="card-text">MySQL adalah sistem manajemen basis data
                                    relasional (RDBMS) yang berbasis pada bahasa SQL (Structured Query Language).</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="portfolio-item" data-aos="flip-left" data-aos-duration="900">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('images/php.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pemrograman PHP</h5>
                                <p class="card-text">PHP (Hypertext Preprocessor) adalah bahasa
                                    pemrograman yang sangat populer di kalangan pengembang web, terkenal dengan
                                    kemudahannya</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class= "d-flex justify-content-center">
                    <a href="{{ route('blog') }}" class="btn btn-info w-50 mt-5 text-white">Baca Selengkapnya</a>
                </div>

            </div>
        </div>
    </section>
    {{-- Blog end --}}

    {{-- contact --}}
    <section id="contact" class="contact py-5 bg-light">
        <div class="container-lg py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Hubungi Saya</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-item d-flex">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20">
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Email</h3>
                            <p class="text-muted">bintangpramudyapp@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex">
                        <div class="icon">
                            <svg role="img" width="23" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <title>WhatsApp</title>
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                            </svg>
                        </div>
                        <div class="text ms-3">
                            <h3 class="fs-5">Whatsapp</h3>
                            <p class="text-muted">+62 831 - 8076 - 6998</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <div class="social-links ">
                                <a href="https://instagram.com/bintangp3_" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>Instagram</title>
                                        <path
                                            d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077" />
                                    </svg></a>
                                <a href="https://github.com/bintangpramudya" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>GitHub</title>
                                        <path
                                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                    </svg></a>
                                <a href="https://gitlab.com/bintangpramudya" target="_blank"><svg role="img"
                                        width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        class="me-2">
                                        <title>GitLab</title>
                                        <path
                                            d="m23.6004 9.5927-.0337-.0862L20.3.9814a.851.851 0 0 0-.3362-.405.8748.8748 0 0 0-.9997.0539.8748.8748 0 0 0-.29.4399l-2.2055 6.748H7.5375l-2.2057-6.748a.8573.8573 0 0 0-.29-.4412.8748.8748 0 0 0-.9997-.0537.8585.8585 0 0 0-.3362.4049L.4332 9.5015l-.0325.0862a6.0657 6.0657 0 0 0 2.0119 7.0105l.0113.0087.03.0213 4.976 3.7264 2.462 1.8633 1.4995 1.1321a1.0085 1.0085 0 0 0 1.2197 0l1.4995-1.1321 2.4619-1.8633 5.006-3.7489.0125-.01a6.0682 6.0682 0 0 0 2.0094-7.003z" />
                                    </svg></a>
                                <a href="https://facebook.com/bintang.pramudya7186" target="_blank"><svg
                                        role="img" width="40" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="me-2">
                                        <title>Facebook</title>
                                        <path
                                            d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="Your Name"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <input type="text" placeholder="Your Email"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <input type="text" placeholder="Subject"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <textarea rows="5" type="text" placeholder="Your Message"
                                        class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-info px-3 text-white">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contact end --}}

    {{-- Footer --}}
    <footer class="footer border-top py-4 bg-dark">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12 ">
                    <p class="m-0 text-center text-white">&copy; 2024 Bintang Pramudya. All
                        rights reserved.</p>
                    <p class="m-0 text-center text-white">Dibuat oleh <a href="https://instagram.com/bintangp3_"
                            target="_blank" style="text-decoration: none;" class="fw-bold text-white">Bintang
                            Pramudya</a></p>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer END --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
