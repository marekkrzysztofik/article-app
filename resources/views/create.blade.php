<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Create Article</title>
</head>

<body>
    @extends('app')
    @section('content')
    <form action="{{ route('article.store') }}" method="post" class="grid">
        @csrf
        <div class="input-box">
            <h3 for="title">Title:</h3>
            <input type="text" id="title" name="title" required>
        </div>
        <div class="input-box">
            <h3 for="text">Text:</h3>
            <textarea id="text" name="content" required></textarea>
        </div>


        <div class="input-box">
            <h3 for="authors">Authors:</h3>
            <select id="authors" name="authors[]" multiple required>
                @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Dodaj artykuł</button>
    </form>
    @endsection

</body>

</html>