<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QHpuNzP5tkJ/NlTrEZKN5xubtkopxHJJu6CNKxtEVcGUg5/cDDzVYydWct8lIUkc2Y9EfmUHHdTVZiBe0kxO0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #FB931E;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/pelanggan">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang</a>
                    </li>
                </ul>
                <img src="{{ asset('img/logo.png') }}" alt="Profil" width="160" class="mx-auto">
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" style="color:white" type="submit">Search</button>

                </form>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <div class="button-container">
            <button class="button first-button">Tentang Kami</button>
            <button class="button second-button" style="color: black;">Informasi Kontak</button>

            tentang
        </div>
        <div class="content-container">

            <div class="content">
                <p>
                    Home Industri Giwigewi ini mulai mengolah buah jeruk kalamansi untuk dijadikan sirup yang berbentuk Squash mulai dari tahun 2012. Keunggulan produk ini selain mempunyai citarasa harum dan khas sekaligus sirup kalamansi ini juga sangat bermanfaat bagi kesehatan tubuh bila dikonsumsi secara teratur karena kaya Vitamin C.
                </p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <img src="{{ asset('img/logo.png') }}" alt="Profil" width="160" class="mx-auto">
        <div class="footer-section">

            <h2>GIWIGEWI</h2>
            <p>
                Jl.Budi Utomo 3, Kelurahan Beringin Raya,
                Kecamatan Muara Bangkahulu Kota Bengkulu</p>
        </div>
        <div class="footer-section">
            <h2>LINKS</h2>
            <ul>
                <li><a href="#tentang-kami">Tentang Kami</a></li>
                <li><a href="#produk-kami">Produk Kami</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h2>SUPPORT</h2>
            <p>Contact Us</p>
            <!-- Sisipkan ikon media sosial di sini -->
        </div>
        <div class="footer-bottom">
            <hr>
            <p>© GIWIGEWI 2024 All Rights Reserved</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>