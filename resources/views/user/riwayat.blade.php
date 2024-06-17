<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
        }

        .main-container {
            display: flex;
        }

        .button-container {
            position: relative;
            display: inline-block;
        }

        .button {
            display: block;
            width: 200px;
            padding: 10px;
            border: none;
            text-align: center;
            font-size: 16px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            /* Remove underline */
        }

        .first-button {
            background-color: #fb931d;
            position: relative;
            z-index: 2;
        }

        .second-button {
            background-color: aliceblue;
            position: relative;
            z-index: 1;
            color: black;
            /* Ensure text color is black */
        }

        .first-button:hover {
            background-color: #e07b00;
            /* Darker shade for hover */
        }

        .second-button:hover {
            background-color: #d6e9ff;
            /* Slightly darker shade for hover */
        }




        .transaction-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 1000px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .transaction-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            border-bottom: 1px solid #ddd;
        }

        .transaction-item:last-child {
            border-bottom: none;
        }

        .transaction-item img {
            width: 50px;
            height: auto;
            border-radius: 5px;
            margin-right: 10px;
        }

        .transaction-item h4,
        .transaction-item p {
            margin: 0;
        }

        .transaction-item .details {
            display: flex;
            flex-direction: column;
        }

        .transaction-item .price {
            color: #333;
            font-weight: bold;
        }

        .transaction-item .btn {
            background-color: #FB931E;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .transaction-item .btn:hover {
            color:#FB931E;
            background-color: #FFDD55;
        }

        .transaction-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="main-container">
        <div class="button-container">
            <a href="/userinfo" class="button second-button">Informasi Akun</a>
            <a href="/riwayattransaksi" class="button first-button" style="color: white;">Riwayat Transaksi</a>
        </div>
        <div class="transaction-container">

            <h2>RIWAYAT TRANSAKSI</h2>
            @foreach($orders as $order)
            <div class="transaction-item">
                <div class="details">
                    <img src="img/upload/{{ $order->product->picture }}" alt="{{ $order->product->name }}">
                    <h4>{{ $order->product->name }}</h4>
                    <p>Quantity: {{ $order->quantity }}</p>
                </div>
                <div class="price">
                    Rp. {{ number_format($order->product->price * $order->quantity, 0, ',', '.') }}
                </div>
                <a href="{{ url('/product/' . $order->product->id) }}" class="btn">Beli Lagi</a>
            </div>
            @endforeach
        </div>
    </div>
    </div>
    </div>


    @include('footer')


</body>

</html>