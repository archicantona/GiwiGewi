<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Fitur Tambah ke Keranjang</title>
  <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
  <link rel="stylesheet" href="{{ asset('css/keranjang.css') }}">
  <link rel="icon" type="image/x-icon" href="/img/logo.png">
</head>
<body>
  <div class="product">
    <img src="product_image.jpg" alt="Product Image">
    <h2>Product Name</h2>
    <p>Price: $XX.XX</p>
    <button class="add-to-cart-btn">Add to Cart</button>
  </div>
  <div class="cart">
    <h2>Shopping Cart</h2>
    <ul class="cart-items">
      <!-- Cart items will be dynamically added here -->
    </ul>
  </div>
</body>
</html>
