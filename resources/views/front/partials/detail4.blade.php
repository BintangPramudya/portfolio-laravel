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
            <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}"> <-- </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Bintang
                                    Pramudya</a>
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
                    <img src="{{ asset('images/project4.png') }}" alt="Sample Image"
                        class="img-fluid rounded img-thumbnail shadow-lg">
                </div>
                <div class="col-md-6">
                    <!-- Column for description -->
                    <h2 class="">Dashboar Admin CRUD Laravel</h2>
                    <p class="text-muted">Dashboard Admin CRUD adalah sebuah aplikasi web yang dibangun menggunakan
                        framework Laravel, yang dirancang untuk memudahkan administrasi dan pengelolaan data dalam suatu
                        sistem. Dashboard ini menyediakan antarmuka pengguna yang intuitif dan mudah digunakan untuk
                        operasi Create, Read, Update, dan Delete (CRUD), yang merupakan operasi dasar untuk interaksi
                        dengan database. Tujuan utama dari proyek ini adalah untuk menyediakan sebuah solusi efisien
                        yang memungkinkan pengguna atau admin untuk dengan mudah mengelola informasi, seperti data
                        pengguna, berita, atau artikel, tanpa memerlukan pengetahuan mendalam tentang pengkodean
                        backend.</p>
                    <p class="text-muted">Proyek ini dilengkapi dengan beberapa fitur penting yang mendukung kebutuhan
                        administratif, termasuk manajemen pengguna, manajemen konten, dan alat analisis data. Admin
                        dapat menambahkan, mengedit, dan menghapus pengguna, serta menetapkan peran dan hak akses yang
                        berbeda kepada setiap pengguna. Selain itu, terdapat fungsi pengelolaan artikel atau postingan
                        yang memungkinkan admin untuk mempublikasikan, mengupdate, dan menghapus konten secara dinamis.
                        Dashboard ini juga terintegrasi dengan fitur pencarian dan penyaringan data yang canggih,
                        memudahkan admin untuk menemukan data spesifik dalam volume yang besar.</p>
                    <p class="text-muted">Menggunakan Laravel sebagai dasar dari proyek Dashboard Admin CRUD membawa
                        sejumlah keunggulan, termasuk keamanan yang lebih terjamin, pengembangan yang lebih cepat berkat
                        adanya banyak pustaka dan paket pendukung, serta kemudahan dalam pemeliharaan kode. Laravel juga
                        menyediakan fitur bawaan seperti Eloquent ORM, yang mempermudah interaksi dengan database
                        menggunakan PHP secara lebih efisien dan lebih aman. Framework ini juga mendukung MVC (Model
                        View Controller) yang memisahkan logika aplikasi dari antarmuka pengguna, sehingga memudahkan
                        pengembangan dan pengujian oleh developer. Dengan demikian, Laravel menyediakan fondasi yang
                        robust dan skalabel untuk pengembangan aplikasi web kompleks seperti dashboard admin CRUD ini.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer border-top py-4 bg">
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
