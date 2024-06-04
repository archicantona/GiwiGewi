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

        .cart-popup {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 400px;
            height: 100%;
            background-color: white;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            overflow-y: auto;
            z-index: 1000;
        }

        .cart-popup-content {
            padding: 20px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 25px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    @include('navbar')

    <div class="item-container">
        <div class="section">
            <div class="product-container" style="display: flex; flex-wrap: wrap; gap: 40px">
                @if($products->isEmpty())
                <p>No products found</p>
                @else
                @foreach ($products as $product)
                <div class="item">
                    <img src="{{ asset('img/upload/' . $product->picture) }}" alt="Profil" height="180">
                    <h2 style="font-size: 20px;">{{ $product->name }}</h2>
                    <p class="price">{{ $product->price }}</p>
                    <div class="">
                        <a href="{{ asset('img/upload/' . $product->picture) }}" class=" detail-btn">Detail</a>
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


        </div>
    </div>
    </div>




    @include('footer')


</body>

</html>