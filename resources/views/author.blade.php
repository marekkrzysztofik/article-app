<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @extends('app')
    @section('content')
    <div class="article">
        @foreach ($articles as $article)
        <p><a href="/article/{{ $article->id }}">{{ $article->id }}. {{ $article->title }}</a></p>
        <p>{{ $article->content }}</p>
        @endforeach
    </div>
    @endsection
</body>

</html>