<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @extends('app')
    @section('content')
    <h1>Top 3 Authors</h1>
    <div class="scrollable-list">
        @foreach ($authors as $author)
        <p><span>Miejsce {{ $author->id }}:</span><a href="/author/{{ $author->id }}">{{ $author->name }}</a>-{{$author->articles_count}}</p>
        @endforeach
    </div>
    </div>
    @endsection
</body>

</html>