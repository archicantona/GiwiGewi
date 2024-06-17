<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
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

        .transaction-container h2 {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }        

        .transaction-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            border-bottom: 1px solid #ddd;
        }

        .transaction-item p {
            font-size: 22;
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

        .transaction-item {
            display: flex;
            flex-direction: column;
        }

        .transaction-item .price {
            color: #333;
            font-weight: bold;
        }

        .transaction-item .btn {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .transaction-item .btn:hover {
            background-color: #e0a800;
        }

        .transaction-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .details {
            display: flex;
        }

        .card {
            border: #ddd;
            padding: 5px;
            text-align: justify;
            margin: 10px;
            width: 400px;
            display: inline-block;
        }

    </style>
</head>

<body>

    @include('navbar')

    <div class="main-container">
        <div class="button-container">
            <a href="/about" class="button first-button">Tentang Kami</a>
            <a href="/contact" class="button second-button" style="color: black;">Hubungi Kami</a>
        </div>
        <div class="transaction-container">
            <h2>TENTANG KAMI</h2>
            <div class="transaction-item">
                <p>
                    Home Industri Giwigewi ini mulai mengolah buah jeruk kalamansi untuk dijadikan sirup yang berbentuk Squash mulai dari tahun 2012. Keunggulan produk ini selain mempunyai citarasa harum dan khas sekaligus sirup kalamansi ini juga sangat bermanfaat bagi kesehatan tubuh bila dikonsumsi secara teratur karena kaya Vitamin C.
                </p>
                <div class="details">
                    <div class="card">
                        <strong>Visi</strong>
                        <p>Menjadi perusahaan penghasil Kalamansi squash yang bermutu dari olahan buah jeruk kalamansi dan mampu menguasai pasar nasional.</p>
                    </div>
                    <div class="card">
                        <strong>Misi</strong>
                        <ul>
                        <li>Menggunakan bahan baku yang berkualitas.</li>
                        <li>Desain kemasan dan penampilan produk semenarik mungkin.</li>
                        <li>Marketing dilakukan secara maksimal dalam skala kecil dan skala besar.</li>
                        <li>Meningkatkan kesejahteraan masyarakat dan menciptakan lingkungan yang sehat.</li>
                        </ul>
                    <div class="card">
                        <strong>BUDAYA</strong>
                        <ul>
                        <li>Menyihatkan</li>
                        <li>Mensejahterakan</li>
                        <li>Membahagiakan</li>
                        <li>Kearifan Lokal</li>
                        <li>Humanis</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')



</body>

</html>