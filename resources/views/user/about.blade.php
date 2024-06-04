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
    </style>
</head>

<body>

    @include('navbar')

    <div class="main-container">
        <div class="button-container">
            <button class="button first-button">Tentang Kami</button>
            <button class="button second-button" style="color: black;">Informasi Kontak</button>
        </div>
        <div class="content-container">

            <div class="content">
                <p>
                    Home Industri Giwigewi ini mulai mengolah buah jeruk kalamansi untuk dijadikan sirup yang berbentuk Squash mulai dari tahun 2012. Keunggulan produk ini selain mempunyai citarasa harum dan khas sekaligus sirup kalamansi ini juga sangat bermanfaat bagi kesehatan tubuh bila dikonsumsi secara teratur karena kaya Vitamin C.
                </p>
            </div>
        </div>
    </div>
    @include('footer')



</body>

</html>