<!DOCTYPE html>
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
            padding: 20px;
            display: flex;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .col-md-4 {
            flex: 1 1 30%;
            max-width: 30%;
            margin: 10px;
        }
    </style>
</head>

<body style="background-color: #f3f3f3;">

    @include('navbar')

    <h1 class="justify-content-center text-center p-3">ARTIKEL KAMI</h1>
    <div class="article-container text-center justify-content-center">
        <div class="row gx-5">
            @foreach($articles as $article)
            <div class="col-md-4">

                <div class="card-container" data-bs-toggle="tooltip" data-bs-original-title="{{ $article->title }}">

                    <div class="card-article-img">
                        <img src="img/upload/article/{{ $article->image }}" class="card-article-img-top"
                            alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                    </div>

                    <div class="card-article-title-container">
                        <p class="card-article-title text-center">{{ $article->title }}</p>
                    </div>

                    <div class="card-article-body">
                        <p class="card-article-text">{{ Str::limit($article->content, 120) }}</p>
                    </div>

                    <div class="card-article-footer d-flex justify-content-center text-body-secondary">
                        <a href="{{ url('/artikel/' . $article->id) }}" class="btn w-100 btn-primary">Read More</a>
                    </div>

                    <div class="card-article-footer d-flex justify-content-center text-body-secondary">
                        <p class="text-secondary">{{ $article->created_at }}</p>
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>

</html>
