<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Navbar</title>
</head>
<body>
    
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #FB931E;">   
        <div class="container-fluid">
            
            <a class="navbar-brand d-md-none" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Giwigewi" width="100">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
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
                <ul class="navbar-nav mx-auto">
                    <a class="navbar-brand d-none d-md-block" href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="Giwigewi" width="100">
                    </a>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="{{ route('products.search') }}" method="GET" class="d-flex justify-content-end" role="search">
                            <input class="form-control w-100" type="search" placeholder="Search" name="query" aria-label="Search">
                            <button class="btn btn-white mx-1" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    <div class="d-flex align-items-center">
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
                        <button id="cartBtn" class="btn" style="background-color: #FB931E;" type="button">
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
                                <form action="{{ route('checkout') }}" method="POST">
                                    @csrf
                                    <button type="submit" id="checkoutBtn" class="btn btn-warning">Checkout</button>
                                </form>
                            </div>
                        </div>
                        @else
                        {{-- Jika pengguna belum login
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" style="background-color: #FB931E;" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user" style="color: white;"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/login">Login</a></li>
                                <li><a class="dropdown-item" href="/register">Register</a></li>
                            </ul>
                        </div> --}}
                        <a class="tombol" href="/login">Login</a>
                        <a class="tombol" href="/register">Register</a> 
                        @endif
                    </div>
                </ul>
            </div>
        </div>
    </div>
</nav>


</body>
</html>