<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giwigewi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QHpuNzP5tkJ/NlTrEZKN5xubtkopxHJJu6CNKxtEVcGUg5/cDDzVYydWct8lIUkc2Y9EfmUHHdTVZiBe0kxO0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
</head>

<body>
    @include('navbar')
    <div class="content1">
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 0 0 0 4rem;">
            <div class="left" style="width: 30%;">
                <h1>Jangan tinggalkan Kota Bengkulu Tanpa</h1>
                <img src="http://127.0.0.1:8000/img/logo_nama.png" style="max-height: 60px;">
                <p>Pusat Oleh-oleh dan camilan khas Bengkulu</p>
                <a href="/produk" class="shop-now mx-3">Shop Now</a>
            </div>
            <div class="right" style="width: 50%; height: 80%; object-fit: contain; overflow: hidden;">
                <img src="http://127.0.0.1:8000/img/kanan.png" alt="Giwigewi Products" style="/* height: 80%; */object-fit: contain;width: 100%;height: 100%;">
            </div>
        </div>
    </div>
    
    <div class="content2">
        <div class="section-deskripsi">
            <img class="section-deskripsi d-flex justify-content-center text-center" src="{{ asset('img/logo_nama.png') }}" width="350px" alt="Giwigewi Logo">
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
                PRODUK PILIHAN
            </div>
            <hr style="  border-top: 1px solid rgb(90, 90, 90);"></hr>
        </div>
    </div>
    
    <div class="content4 p-5">
        @foreach ($randomProducts as $product)
        <div class="item">
            <img src="{{ asset('img/upload/' . $product->picture) }}" alt="Profil" height="180">
            <p class="product-names text-lg-start">{{ $product->name }}</p>
            <p class="price text-start">Rp. {{ $product->price }}</p>
            <div class="">
                <a href="{{ url('/product/' . $product->id) }}" class=" detail-btn">Detail</a>
                <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="keranjang-btn" id="addProductToCart">
                        <i class="fas fa-cart-plus" style="color: white;"></i> Keranjang
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    
    @include('footer')
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>


</html>