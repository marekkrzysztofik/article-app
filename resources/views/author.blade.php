<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body> 
    @extends('app')
    @section('content')
    <div class="articles bg-dark mt-2">
            <h2 class="mb-1">List of {{$author->name}}'s articles</h2>
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
    @endsection
</body>

</html>