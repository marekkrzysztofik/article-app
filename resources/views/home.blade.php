<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    @extends('app')
    @section('content')
    <div class=flex>
        <div class="articles bg-dark mt-2">
            <h2 class="mb-1">List of articles</h2>
            <div class="articles-grid scrollable-list">
                @foreach ($articles as $article)
                <a href="/article/{{ $article->id }}">
                    <div class="article-box green-hover">
                        <p>{{ $article->id }}. {{ $article->title }}</p>
                        <p class="article-content">{{ $article->content }}</p>
                    </div>
                </a>
                @endforeach
            </div>

        </div>
        <div class="authors bg-dark">
            <div class="scrollable-list">
                <h2 class="mb-1">Our authors</h2>
                @foreach ($authors as $author)
                <a href="/author/{{ $author->id }}">
                    <div class="author-item green-hover">
                        <p>{{ $author->id }}. {{ $author->name }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    @endsection

</body>

</html>