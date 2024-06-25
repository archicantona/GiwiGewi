<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giwigewi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
</head>

<body>
    @include('navbar')
    
    <div class="container-fluid p-5" style="margin-top: 75px!important; margin-bottom: 125px!important">
        <div class="row gx-5">
            <div class="col-5">
                <img class="product-image" src="/img/upload/{{ $product->picture }}" alt="{{ $product->name }}">
            </div>
            <div class="col-7">
                <div class="product-info">
                    <h1 class="product-detail-name">{{ $product->name }}</h1>
                    <h2>Rp. {{ number_format($product->price, 0, ',', '.') }}</h2>
                    <h3 class="mt-5">Spesifikasi Produk</h3>
                    <p style="margin-bottom: 1px;"><strong>Kategori:</strong> {{ $product->category }}</p>
                    <p style="margin-bottom: 1px;"><strong>Masa Penyimpanan:</strong> {{ $product->storage_period }} Bulan</p>
                    <p style="margin-bottom: 1px;"><strong>Stok:</strong> {{ $product->stock_quantity }}</p>
                    <p style="margin-bottom: 1px;"><strong>Berat Produk:</strong> {{ $product->weight }}</p>
                    <p style="margin-bottom: 1px;"><strong>Nomor BPOM:</strong> {{ $product->no_BPOM }}</p>
                    <h3 class="mt-5">Deskripsi Produk</h3>
                    <div class="deskripsi">{{ $product->description }}</div>
                    <div class="">
                        
                        <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="quantity" value="1">
                            <div class="qty-input">
                                <button class="quantity-btn" id="minusBtn" type="button">-</button>
                                <input type="number" name="quantity" id="quantityInput" value="1" class="form-quantity">
                                <button class="quantity-btn" id="addBtn" type="button">+</button>
                                <button type="submit" class="keranjang-btn"><i class="fas fa-cart-plus" style="color: white;"></i> Keranjang</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
    @include('footer')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const minusBtn = document.getElementById('minusBtn');
            const addBtn = document.getElementById('addBtn');
            const quantityInput = document.getElementById('quantityInput');
            
            minusBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });
            
            addBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        });
    </script>
    
</body>
</html>
