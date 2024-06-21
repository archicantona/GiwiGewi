<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk Detail</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
        }

        .product-detail-container {
            display: flex;
            gap: 40px;
            padding: 20px;
        }

        .product-image img {
            max-width: 100%;
        }

        .product-info {
            max-width: 600px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .quantity-control input {
            width: 50px;
            text-align: center;
        }

        .minus-btn,
        .plus-btn {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            padding: 10px;
            cursor: pointer;
        }

        .add-to-cart-btn {
            background-color: #f39c12;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    @include('navbar')

    <div class="product-detail-container">
        <div class="product-image">
            <img src="/img/upload/{{ $product->picture }}" alt="{{ $product->name }}" width="300">
        </div>
        <div class="product-info">
            <h1>{{ $product->name }}</h1>
            <h2>Rp. {{ number_format($product->price, 0, ',', '.') }}</h2>
            <h3>Spesifikasi Produk</h3>
            <p style="margin-bottom: 1px;"><strong>Kategori:</strong> {{ $product->category }}</p>
            <p style="margin-bottom: 1px;"><strong>Masa Penyimpanan:</strong> {{ $product->storage_period }} Bulan</p>
            <p style="margin-bottom: 1px;"><strong>Stok:</strong> {{ $product->stock_quantity }}</p>
            <p style="margin-bottom: 1px;"><strong>Berat Produk:</strong> {{ $product->weight }} ML</p>
            <p style="margin-bottom: 1px;"><strong>Nomor BPOM:</strong> {{ $product->no_BPOM }} ML</p>
            <h3>Deskripsi Produk</h3>
            <div class="deskripsi">{{ $product->description }}</div>
            <div class="">

                <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <button type="submit" class="keranjang-btn"><i class="fas fa-cart-plus" style="color: white;"> Tambah Keranjang</i></button>
                </form>
            </div>
        </div>
    </div>

    @include('footer')


    <!-- Simple Dropdown Example -->

</body>


</html>