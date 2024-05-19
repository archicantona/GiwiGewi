<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QHpuNzP5tkJ/NlTrEZKN5xubtkopxHJJu6CNKxtEVcGUg5/cDDzVYydWct8lIUkc2Y9EfmUHHdTVZiBe0kxO0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
        }

        .menu-container {
            display: flex;
            align-items: center;
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
                <img src="{{ asset('img/logo.png') }}" alt="Profil" height="80" class="mx-auto">
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" style="color:white" type="submit">Search</button>
                </form>
                <i class="fa-sharp fa-light fa-user"></i>
            </div>
        </div>
    </nav>

    <!-- <div class="gambar-produk">
        <img src="{{ asset('img/produk/id-11134207-7r990-lq607i89d4pq29.jpg') }}" alt="Profil" width="180" class="mx-auto">
        <p>Sirup Kalamansi 500ML</p>
        <p>50.000</p>
    </div>
    <div class="counter">
        <button class="minus-btn">-</button>
        <input type="text" class="qty-input" value="1">
        <button class="plus-btn">+</button>
    </div> -->
    <div class="main-container">
        <div class="menu-container">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" style="background-color: #FB931E;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilihan Produk
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="item-container">

            <div class="section">
                <div class="product-container" style="display: flex; flex-wrap: wrap; gap: 40px">
                    <div class="item">
                        <img src="{{ asset('img/produk/1.png') }}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">Sirup Kalamansi 500ML</h2>
                        <p class="price">50.000</p>
                        <div class="counter">
                            <button class="minus-btn">-</button>
                            <input type="text" class="qty-input" value="1">
                            <button class="plus-btn">+</button>
                        </div>
                        <!-- <div class="">
                        <button class="keranjang-btn">Keranjang</button>
                    </div> -->

                    </div>
                    <div class="item">
                        <img src="{{ asset('img/produk/2.png') }}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">Pisang Rawas</h2>
                        <p class="price">18.000</p>
                        <div class="">
                            <button class="keranjang-btn">Keranjang</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/produk/3.png') }}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">Kerupuk Tuiri</h2>
                        <p class="price">17.000</p>
                        <div class="">
                            <button class="keranjang-btn">Keranjang</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/produk/4.png') }}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">Kopi 1001 Asli</h2>
                        <p class="price">25.000</p>
                        <div class="">
                            <button class="keranjang-btn">Keranjang</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/produk/5.png') }}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">Perut Punai Rafflesia</h2>
                        <p class="price">18.000</p>
                        <div class="">
                            <button class="keranjang-btn">Keranjang</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/produk/6.png') }}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">Coklat Kalamansi</h2>
                        <p class="price">20.000</p>
                        <div class="">
                            <button class="keranjang-btn">Keranjang</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- <footer>
        <div class="container">
            <div class="footer-content">
                <img src="{{ asset('img/logo.png') }}" alt="Profil" width="160">
                <p>&copy; 2024 Contoh Website. Hak Cipta Dilindungi.</p>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </footer> -->
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