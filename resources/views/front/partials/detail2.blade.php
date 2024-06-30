<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-dark shadow-lg">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}"><-- </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Bintang Pramudya</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="detail-project py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Detail Project</h2>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <!-- Column for image -->
                    <img src="{{ asset('images/project2.png') }}" alt="Sample Image"
                        class="img-fluid rounded img-thumbnail shadow-lg">
                </div>
                <div class="col-md-6">
                    <!-- Column for description -->
                    <h2 class="">Web Portfolio Html Css Bootstrap</h2>
                    <p class="text-muted">Proyek pembuatan sebuah web portfolio menggunakan HTML, CSS, dan Bootstrap
                        adalah cara efektif untuk memamerkan karya dan keahlian seseorang di internet. Web portfolio
                        tidak hanya berfungsi sebagai galeri digital, tapi juga sebagai platform vital untuk memperluas
                        jaringan profesional dan peluang karir.</p>
                    <p class="text-muted">1. Struktur dan Desain Fundamental:
                        Dalam pembuatan web portfolio, HTML berperan sebagai kerangka dasar yang menentukan struktur
                        konten. Setiap elemen seperti header, footer, galeri, dan lainnya didefinisikan dengan HTML. CSS
                        kemudian digunakan untuk mengatur tampilan visual dari elemen-elemen tersebut, termasuk warna,
                        font, dan layout. Dengan menggunakan CSS, pengembang bisa menciptakan tampilan yang profesional
                        dan menarik yang mencerminkan identitas personal atau brand mereka. Bootstrap, sebagai framework
                        CSS, mempercepat proses desain dengan menyediakan komponen-komponen yang siap pakai seperti
                        tombol, kartu, dan responsivitas yang mudah diimplementasikan, sehingga memastikan website
                        terlihat baik di semua perangkat.
                    </p>
                    <p class="text-muted"> 2. Responsivitas dan Interaksi Pengguna:
                        Bootstrap memainkan peran krusial dalam memastikan bahwa web portfolio memiliki tampilan yang
                        responsif. Artinya, website akan tampak dan berfungsi dengan baik di berbagai perangkat, mulai
                        dari desktop hingga smartphone. Framework ini dilengkapi dengan sistem grid yang fleksibel dan
                        kelas utilitas responsif yang memudahkan penyesuaian tampilan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer border-top py-4 bg ">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-muted">&copy; 2024 Bintang Pramudya</p>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer END --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
