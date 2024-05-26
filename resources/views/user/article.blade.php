<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-QHpuNzP5tkJ/NlTrEZKN5xubtkopxHJJu6CNKxtEVcGUg5/cDDzVYydWct8lIUkc2Y9EfmUHHdTVZiBe0kxO0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Open Sans', sans-serif;
            font-size: 18px;
        }

        .article_container {
            max-height: 300px;
            max-width: 200px;
        }
    </style>
</head>

<body>
    @include('navbar')
    <div class="article_container">
        @foreach ($articles as $articles)
        <div class="item">
            <img src="img/upload/article/{{$articles-> image}}" alt="Profil" width="180">
            <h2 style="font-size: 20px;">{{ $articles->title }}</h2>
            <p class="price">{{ $articles->content }}</p>
            <div class="">
                <a class="keranjang-btn">Keranjang</a>
            </div>
        </div>
        @endforeach
    </div>

</body>

</html>