<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark shadow-sm " >
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-info" href="#">Bintang Pramudya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link active text-info" aria-current="page" href="#home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#about">Tentang Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="#contact">Kontak Saya</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
