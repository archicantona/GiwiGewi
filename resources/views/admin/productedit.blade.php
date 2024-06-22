<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    body {
        font-family: 'Lato', sans-serif;
        margin: 0;
        padding: 0;
    }

    .sidebar {
        height: 100vh;
        width: 250px;
        background-color: #ff9933;
        padding-top: 20px;
        position: fixed;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .sidebar img {
        display: block;
        margin: 0 auto;
        width: 150px;
    }

    .sidebar a {
        text-decoration: none;
        color: white;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        margin: 5px 0;
        border-radius: 5px;
    }

    .sidebar a:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .sidebar a.active {
        background-color: white;
        color: #ff9933;
    }

    .sidebar a i {
        margin-right: 10px;
    }

    .logout {
        text-align: center;
        margin-bottom: 20px;
    }

    .logout a {
        color: white;
    }

    .judulhalaman {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .form-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group input[type="file"] {
        padding: 3px;
    }

    .form-group textarea {
        resize: vertical;
        height: 100px;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .form-actions button {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-actions .btn-discard {
        background-color: #fff;
        border: 1px solid #ccc;
        color: #333;
    }

    .form-actions .btn-save {
        background-color: orange;
        color: white;
    }

    .form-actions .btn-save:hover {
        background-color: darkorange;
    }
</style>

<body>
    <div class="sidebar">
        <div>
            <img src="{{ asset('img/logo.png') }}" alt="Giwigewi Logo">
            <a href="/admin" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="/userorder"><i class="fas fa-chart-line"></i> User Order</a>
            <a href="/tambahartikel"><i class="fas fa-plus"></i> Tambah Artikel</a>
            <a href="/messages"><i class="fas fa-inbox"></i>Pesan</a>
        </div>
        <div class="logout">
            <a href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </div>

    <div class="content">
        <div class="judulhalaman">
            <h2>Edit Produkk</h2>
        </div>
        <div class="form-container">

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture">
                @if($product->picture)
                <img src="{{ asset('img/upload/' . $product->picture) }}" alt="Product Image" height="100">
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="form-group">
                <label for="stock_quantity">Stock Quantity</label>
                <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="{{ $product->stock_quantity }}" required>
            </div>
            <div class="form-group">
                <label for="storage_period">Storage Period</label>
                <input type="text" class="form-control" id="storage_period" name="storage_period" value="{{ $product->storage_period }}">
            </div>
            <div class="form-group">
                <label for="no_BPOM">No BPOM</label>
                <input type="text" class="form-control" id="no_BPOM" name="no_BPOM" value="{{ $product->no_BPOM }}">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}">
            </div>
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="text" class="form-control" id="weight" name="weight" value="{{ $product->weight }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        </div>
    </div>
</body>

</html>