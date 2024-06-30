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
                    <img src="{{ asset('images/project3.png') }}" alt="Sample Image"
                        class="img-fluid rounded img-thumbnail shadow-lg">
                </div>
                <div class="col-md-6">
                    <!-- Column for description -->
                    <h2 class="">CRUD & Sorting Data Pasien</h2>
                    <p class="text-muted">Proyek Java ini berfokus pada pengembangan sistem manajemen data pasien yang
                        memungkinkan pengguna untuk melakukan operasi Create, Read, Update, dan Delete (CRUD) pada data
                        yang disimpan. Aplikasi ini dirancang menggunakan Java sebagai bahasa pemrograman utama, dengan
                        dukungan dari MySQL untuk database backend. Tujuan utamanya adalah untuk menyederhanakan
                        pengelolaan data pasien di fasilitas kesehatan, memperbaiki aksesibilitas dan efisiensi dalam
                        mengelola informasi pasien secara detail termasuk nama, umur, diagnosa, dan riwayat pengobatan.
                    </p>
                    <p class="text-muted"> Di samping fungsi CRUD, sistem juga dilengkapi dengan fitur sorting atau
                        pengurutan data yang
                        memudahkan pengguna dalam mencari dan menganalisis informasi pasien. Pengurutan bisa dilakukan
                        berdasarkan berbagai parameter seperti nama, tanggal lahir, atau jenis diagnosa. Fitur ini
                        sangat membantu dalam situasi di mana dokter atau staf medis perlu mengakses data pasien
                        tertentu dari database yang besar dengan cepat dan efisien. Sorting data diimplementasikan
                        menggunakan algoritma pengurutan yang efisien seperti quicksort atau mergesort, tergantung pada
                        kebutuhan skenario penggunaan yang spesifik.</p>
                    <p class="text-muted"> Implementasi sistem ini menggunakan arsitektur MVC (Model, View, Controller)
                        untuk memisahkan
                        logika bisnis dari UI, memungkinkan kode yang lebih bersih dan mudah di-maintain. GUI (Graphical
                        User Interface) dibuat menggunakan Java Swing atau JavaFX, memberikan pengalaman pengguna yang
                        intuitif dan mudah digunakan. Seluruh sistem diharapkan tidak hanya meningkatkan kecepatan dalam
                        pengelolaan data kesehatan tapi juga membantu dalam membuat keputusan medis yang lebih cepat dan
                        akurat berdasarkan data yang terorganisir dan mudah diakses.</p>
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
