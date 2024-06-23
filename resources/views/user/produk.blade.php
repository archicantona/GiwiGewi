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
</head>

<body style="background-color: #f3f3f3">
    
    @include('navbar')
    
    <div class="item-container">
        <div class="section">
            <div class="product-container" style="display: flex; flex-wrap: wrap; gap: 5px">
                @if($products->isEmpty())
                <p>No products found</p>
                @else
                @foreach ($products as $product)
                <div class="item">
                    <img src="{{ asset('img/upload/' . $product->picture) }}" alt="Profil" height="180">
                    <p class="product-names text-lg-start font-weight-bold">{{ $product->name }}</p>
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
                @endif
            </div>
        </div>
    </div>
    
    @include('footer')
    
</body>

</html>