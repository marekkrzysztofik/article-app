<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @extends('app')
    @section('content')
    <div class="article bg-dark">
        <h2 class="mb-1">Article {{ $article->id }}</h2>
        <p><span>Authors:</span> @foreach ($article->authors as $author)
            <a href="/author/{{ $author->id }}" class="green-text-hover">{{ $author->name }}</a>,
            @endforeach
        </p>
        <p><span>Title:</span> {{ $article->title }}</p>
        <div class="ss">
            <p class="m-3 justify"> {{ $article->content }}</p>
        </div>
    </div>
    @endsection
</body>

</html>