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
            <a class="navbar-brand fw-bold fs-4" href="{{ url('/') }}"><--</a>
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
                    <img src="{{ asset('images/project1.png') }}" alt="Sample Image"
                        class="img-fluid rounded img-thumbnail shadow-lg">
                </div>
                <div class="col-md-6">
                    <!-- Column for description -->
                    <h2 class="">CRUD PHP MySql</h2>
                    <p class="text-muted">Project CRUD PHP MySQL untuk data mahasiswa adalah aplikasi web yang dirancang
                        untuk mengelola informasi mahasiswa secara efisien dalam database. CRUD merupakan singkatan dari
                        Create, Read, Update, dan Delete, yang merupakan operasi dasar untuk berinteraksi dengan
                        database. Aplikasi ini memungkinkan pengguna untuk memasukkan data mahasiswa baru, melihat
                        daftar mahasiswa yang tersimpan, mengedit informasi mahasiswa yang ada, dan menghapus data
                        mahasiswa yang tidak lagi diperlukan.
                    </p>
                    <p class="text-muted">Pengembangan project ini menggunakan PHP sebagai bahasa scripting server-side
                        yang mengelola
                        logika aplikasi, sedangkan MySQL digunakan sebagai sistem manajemen basis data untuk menyimpan
                        semua data mahasiswa. User interface (UI) sederhana dibuat dengan HTML dan CSS, yang
                        memungkinkan pengguna untuk berinteraksi dengan aplikasi dengan mudah. Operasi CRUD dijalankan
                        melalui form HTML yang mengirimkan data ke skrip PHP, yang kemudian menjalankan kueri SQL yang
                        sesuai untuk berinteraksi dengan database MySQL.</p>
                    <p class="text-muted">
                        Secara keseluruhan, project CRUD ini sangat penting sebagai alat bantu dalam pengelolaan data
                        mahasiswa, khususnya di lingkungan akademik seperti universitas atau sekolah. Aplikasi ini tidak
                        hanya mempercepat proses pengelolaan data tetapi juga meningkatkan akurasi dan keamanan data.
                        Dengan mengimplementasikan konsep CRUD, pengguna dapat memastikan bahwa data dalam database
                        selalu terkini dan dapat diakses atau dimodifikasi dengan cepat sesuai kebutuhan.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer border-top py-4 bg bg-primary">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-white">&copy; 2024 Bintang Pramudya</p>
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
