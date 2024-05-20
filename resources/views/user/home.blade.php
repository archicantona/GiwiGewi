<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
                <img src="{{ asset('img/logo.png') }}" alt="Profil" width="100" class="mx-auto">

                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn" style="color:white" type="submit">Search</button>
                </form>
                <a type="button" class="btn btn-secondary" href="/logout">Logout</a>
            </div>
        </div>
    </nav>
    <div class="content1">
        <div style="
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 0 0 4rem;
">

            <!-- <div class="container"> -->
            <div class="left" style="
    width: 30%;
">
                <h1>Jangan tinggalkan Kota Bengkulu Tanpa</h1>
                <img src="http://127.0.0.1:8000/img/logo_nama.png" style="max-height: 30px;">
                <p>Pusat Oleh-oleh dan camilan khas Bengkulu</p>
                <a href="#" class="shop-now">Shop Now</a>
            </div>
            <div class="right" style="
    width: 50%;
    height: 80%;
    object-fit: contain;
    overflow: hidden;
">
                <img src="http://127.0.0.1:8000/img/kanan.png" alt="Giwigewi Products" style="
    /* height: 80%; */
    object-fit: contain;
    width: 100%;
    height: 100%;
">
            </div>
            <!-- </div> -->
        </div>
    </div>
    <div class="content2">
        <div class="section">
            <img src="{{ asset('img/logo_nama.png') }}" alt="Giwigewi Logo">
            <p>
                <span class="brand">Giwigewi</span> adalah sirup kalamansi yang menawarkan pengalaman menyegarkan dan lezat dalam setiap tetesnya. Diproduksi dengan hati-hati dan menggunakan bahan-bahan pilihan, <span class="brand">Giwigewi</span> menghadirkan kelezatan kalamansi dalam kemasan yang praktis dan menarik.
            </p>
        </div>
    </div>
    <div class="video-container">
        <iframe class="youtube-video" src="https://www.youtube.com/embed/c59s4moM2zs" frameborder="0" allowfullscreen></iframe>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="content3">
        <div>
            <div class="pilihan_produk">
                PILIHAN PRODUK
            </div>
        </div>
    </div>

    <div class="content4">
        <div class="item">
            <img src="{{ asset('img/produk/2.png') }}" alt="Profil" width="180">
            <h2 style="font-size: 20px;">Pisang Rawas</h2>
            <p class="price">18.000</p>
            <div class="">
                <button class="keranjang-btn">Keranjang</button>
            </div>
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
            <img src="{{ asset('img/produk/2.png') }}" alt="Profil" width="180">
            <h2 style="font-size: 20px;">Pisang Rawas</h2>
            <p class="price">18.000</p>
            <div class="">
                <button class="keranjang-btn">Keranjang</button>
            </div>
        </div>
    </div>


</body>

</html>