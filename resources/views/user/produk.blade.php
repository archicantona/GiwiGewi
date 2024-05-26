<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

    @include('navbar')

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
                    @foreach ($products as $product)
                    <div class="item">
                        <img src="img/upload/{{$product-> picture}}" alt="Profil" width="180">
                        <h2 style="font-size: 20px;">{{ $product->name }}</h2>
                        <p class="price">{{ $product->price }}</p>
                        <div class="">
                            <a href="{{ url('/product/' . $product->id) }}" class="keranjang-btn">Keranjang</a>
                        </div>
                    </div>
                    @endforeach
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
    @include('footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>