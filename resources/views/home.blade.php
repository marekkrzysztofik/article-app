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
        <div class="list-box">
            <div class="scrollable-list">
                <h2>List of articles</h2>
                @foreach ($articles as $article)
                <p><a href="/article/{{ $article->id }}">{{ $article->id }}. {{ $article->title }}</a></p>
                @endforeach
            </div>

        </div>
        <div class="list-box">
            <div class="scrollable-list">
                <h2>List of our authors</h2>
                @foreach ($authors as $author)
                <p><a href="/author/{{ $author->id }}">{{ $author->id }}. {{ $author->name }}</a></p>
                @endforeach
            </div>
        </div>
    </div>

    @endsection

</body>

</html>