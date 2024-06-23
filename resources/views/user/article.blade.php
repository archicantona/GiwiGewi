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
</head>

<body style="background-color: #f3f3f3;">
    
    @include('navbar')
    
    <div class="container-fluid justify-content-center text-center">
        <h1 class="p-5">ARTIKEL KAMI</h1>
        <div class="row justify-content-center">
            @foreach($articles as $article)
            @if(empty($article))
            <p>no article.</p>
            @else
            <div class="col-auto p-2 mb-3 justify-content-center">
                <div class="card-container justify-content-center text-center align-self-center" data-bs-toggle="tooltip" data-bs-original-title="{{ $article->title }}">
                    <div class="card-article-img">
                        <img src="img/upload/article/{{ $article->image }}" class="card-article-img-top"
                        alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                    </div>
                    <div class="card-article-title-container">
                        @if(empty($article->title))
                        <p class="card-article-title text-center">-</p>
                        @else
                        <p class="card-article-title text-center">{{ $article->title }}</p>
                        @endif
                    </div>
                    <div class="card-article-body">
                        @if(empty($article->content))
                        <p class="card-article-text">-</p>
                        @else
                        <p class="card-article-text">{{ Str::limit($article->content, 120) }}</p>
                        @endif
                    </div>
                    <div class="card-article-footer d-flex justify-content-center text-body-secondary">
                        <a href="{{ url('/artikel/' . $article->id) }}" class="btn w-100 btn-primary">Read More</a>
                    </div>
                    <div class="card-article-footer d-flex justify-content-center text-body-secondary">
                        @if(empty($article->created_at))
                        <p class="text-secondary">-</p>
                        @else
                        <p class="text-secondary">{{ \Carbon\Carbon::parse($article->created_at)->format('d-m-Y • H:i') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    
    @include('footer')
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>

</html>
