<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giwigewi</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
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

    h2{
        font-weight:bold;
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
            <a href="/messages"><i class="fas fa-inbox"></i>Pesan&Kesan</a>
        </div>
        <div class="logout">
            <a href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </div>

    <div class="content">
        <div class="judulhalaman">
            <h2>Tambah Produk</h2>
        </div>
        <div class="form-container">

            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div style="flex: 1;">
                        <label for="name">Nama Produk</label>
                        <input type="text" id="product_name" name="name" required>
                    </div>
                    <div style="flex: 1;">
                        <label for="picture">Gambar Produk</label>
                        <input type="file" id="picture" name="picture" required>
                    </div>
                </div>
                <div class="form-group">
                    <div style="flex: 1;">
                        <label for="price">Harga Produk</label>
                        <input type="number" id="price" name="price" required>
                    </div>
                    <div style="flex: 1;">
                        <label for="stock_quantity">Stok</label>
                        <input type="number" id="stock_quantity" name="stock_quantity" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Produk</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <div style="flex: 1;">
                        <label for="storage_period">Durasi Penyimpanan</label>
                        <input type="number" id="storage_period" name="storage_period" required>
                    </div>
                    <div style="flex: 1;">
                        <label for="no_BPOM">Nomor BPOM</label>
                        <input type="text" id="no_BPOM" name="no_BPOM" required>
                    </div>
                </div>
                <div class="form-group">
                    <div style="flex: 1;">
                        <label for="category">Category</label>
                        <input type="text" id="category" name="category" required>
                    </div>
                    <div style="flex: 1;">
                        <label for="weight">Berat Produk</label>
                        <input type="text" id="weight" name="weight" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn-discard">Discard</button>
                    <button type="submit" class="btn-save">Save Produk</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>