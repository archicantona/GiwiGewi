<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <title>Navbar</title>
</head>
<body>
    
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #FB931E;">   
        <div class="container-fluid text-center">
            <a class="navbar-brand d-md-none" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Giwigewi" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/produk">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/artikel">ARTIKEL</a>
                    </li>
                </ul>
                
                <div class="navbar-nav ms-5">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="Giwigewi" width="100">
                    </a>
                </div>
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="{{ route('products.search') }}" method="GET" role="search" class="d-flex">
                            <input class="form-control" type="search" placeholder="Search" name="query" aria-label="Search">
                            <button class="btn btn-white" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    <li class="nav-item">
                        @if(auth()->check())
                        <!-- Jika pengguna sudah login -->
                        <div class="dropdown">
                            <button class="btn nav-link dropdown-toggle" style="background-color: #FB931E;" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user" style="color: white;"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item text-dark" href="/userinfo">Informasi akun</a></li>
                                <li><a class="dropdown-item text-dark" href="/logout">Logout</a></li>
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
                        <div class="container-fluid mx-2">
                            <a class="btn" href="/login">Login</a>
                            <a class="btn" href="/register">Register</a> 
                        </div>
                        @endif
                    </li>
                </ul>         
                
            </div>
        </div>
    </nav>
    
    @if(Session::has('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Toastify({
                text: "{{ Session::get('success') }}",
                duration: 7000,  // Duration in milliseconds
                close: true,
                gravity: "top", // Showing the toast at the top of the page
                position: "center", // Positioning the toast in the center
                backgroundColor: "#4CAF50", // Custom background color
            }).showToast();
        });
    </script>
    @endif
    
</body>

<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</html>
