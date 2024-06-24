<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QHpuNzP5tkJ/NlTrEZKN5xubtkopxHJJu6CNKxtEVcGUg5/cDDzVYydWct8lIUkc2Y9EfmUHHdTVZiBe0kxO0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <style>
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <form action="{{ route('products.search') }}" method="GET" class="d-flex ms-auto" role="search">    
            <input class="form-control me-2" type="search" placeholder="Search" name="query" aria-label="Search">
            <button class="btn text-white" type="submit" style="background-color: #FB931E;">Search</button>
        </form>
    </div>

    <div class="container product-container">
        @if($products->isEmpty())
            <p>No products found</p>
        @else
            @foreach ($products as $product)
            <div class="item">
                <img src="img/upload/{{$product->picture}}" alt="Profil" height="180">
                <h2 style="font-size: 20px;">{{ $product->name }}</h2>
                <p class="price">{{ $product->price }}</p>
                <div class="">
                    <a href="{{ url('/product/' . $product->id) }}" class="detail-btn">Detail</a>
                    <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit" class="keranjang-btn"><i class="fas fa-cart-plus" style="color: white;"></i></button>
                    </form>
                </div>
            </div>
            @endforeach
        @endif
    </div>

</body>

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>
