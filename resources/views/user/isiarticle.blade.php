<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .article-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .article-image img {
            width: 100%;
            height: auto;
        }

        .article-info {
            padding: 20px;
        }

        .article-info h1 {
            margin-top: 0;
            font-size: 2em;
        }

        .article-info p {
            font-size: 1em;
            color: #333;
        }
    </style>

</head>

<body>
    @include('navbar')


    <div class="article-container">
        <div class="article-image">
            <img src="/img/upload/article/{{ $articles->image }}" alt="{{ $articles->title }}">
        </div>
        <div class="article-info">
            <h1>{{ $articles->title }}</h1>
            <p>{{ $articles->content }}</p>
        </div>
    </div>

    @include('footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>



    <!-- Simple Dropdown Example -->

</body>

</html>