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

    h2{
        font-weight:bold;
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

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>

<body>
    <div class="sidebar">
        <div>
            <img src="{{ asset('img/logo.png') }}" alt="Giwigewi Logo">
            <a href="/admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="/userorder" class="active"><i class="fas fa-chart-line"></i> User Order</a>
            <a href="/tambahartikel"><i class="fas fa-plus"></i> Tambah Artikel</a>
            <a href="/messages"><i class="fas fa-inbox"></i>Pesan&Kesan</a>
        </div>
        <div class="logout">
            <a href="/logout"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
    </div>

    <div class="content">
        <div class="judulhalaman">
            <h2>User Orders</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Produk</th>
                    <th>Quantity</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $userId => $userOrders)
                @php
                $rowspan = $userOrders->count();
                $first = true;
                @endphp
                @foreach($userOrders as $index => $order)
                <tr>
                    @if($first)
                    <td rowspan="{{ $rowspan }}">{{ $loop->parent->iteration }}</td>
                    <td rowspan="{{ $rowspan }}">{{ $order->user->name }}</td>
                    @php $first = false; @endphp
                    @endif
                    <td>{{ $order->product->name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>Rp. {{ number_format($order->product->price * $order->quantity, 0, ',', '.') }}</td>
                </tr>
                @endforeach
                @endforeach
            </tbody>

        </table>
    </div>
</body>

</html>