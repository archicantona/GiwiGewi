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
                    <a class="nav-link" aria-current="page" href="/produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/artikel">Artikel</a>
                </li>
            </ul>
            <a href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Profil" width="100" class="mx-auto">
            </a>
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" style="color:white" type="submit">Search</button>
            </form>
            <div>
                @if(auth()->check())
                <!-- Jika pengguna sudah login -->
                <div class="dropdown">
                    <button class="btn dropdown-toggle" style="background-color: #FB931E;" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user" style="color: white;"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Informasi Akun</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </div>
                @else
                <!-- Jika pengguna belum login -->
                <button class="btn" style="background-color: #FB931E;" type="button" onclick="window.location.href='/login'">
                    <i class="fas fa-user" style="color: white;"></i>
                </button>
                @endif
            </div>

        </div>
</nav>