<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>navbar</title>
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
                    <a class="nav-link" aria-current="page" href="/">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/produk">PRODUK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/artikel">ARTIKEL</a>
                </li>
            </ul>
            <a class="navbar-brand mx-auto" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Profil" width="100">
            </a>
            <form action="{{ route('products.search') }}" method="GET" class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search">
                <button class="btn" type="submit">Search</button>
            </form>

            <div class="d-flex align-items-center ms-3">
                @if(auth()->check())
                <!-- Jika pengguna sudah login -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle" style="background-color: #FB931E;" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user" style="color: white;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/userinfo">Informasi Akun</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div>
                <button id="cartBtn" class="btn ms-2" style="background-color: #FB931E;" type="button">
                    <i class="fas fa-shopping-cart" style="color: white;"></i>
                </button>
                <div id="cartPopup" class="cart-popup">
                    <div class="cart-popup-content">
                        <span class="close">&times;</span>
                        <h2>Keranjang Produk</h2>
                        <div id="cartItems">
                            <!-- Cart items will be loaded here -->
                        </div>
                        <div id="cartTotal">
                            <!-- Cart total will be shown here -->
                        </div>
                        <div class="alert alert-primary" role="alert">
                                 A simple primary alert—check it out!
                                </div>
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <button type="submit" id="checkoutBtn" class="btn btn-warning">Checkout</button>
                        </form>
                    </div>
                </div>
                @else
                <!-- Jika pengguna belum login -->
                <!-- <div class="dropdown">
                    <button class="btn dropdown-toggle" style="background-color: #FB931E;" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user" style="color: white;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/login">Login</a></li>
                        <li><a class="dropdown-item" href="/register">Register</a></li>
                    </ul>
                </div> -->
                <a class="tombol" href="/login">Login</a>
                <a class="tombol" href="/register">Register</a>
                @endif
            </div>
        </div>
    </div>
</nav>
</body>
</html>