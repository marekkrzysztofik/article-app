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
    <form action="{{ route('article.store') }}" method="post" class="mt-2">
        @csrf
        <div class="flex column">
            <div class="articles bg-dark height">
                <h3 for="title">Title:</h3>
                <input type="text" class="input green-border-focus" name="title" required>
                <h3 for="text">Text:</h3>
                <textarea class="input green-border-focus" name="content" maxlength="255" required></textarea>
            </div>
            <div class="select flex space-between bg-dark">
                <h3 for="authors">Authors:</h3>
                <select name="authors[]" multiple required class="green-border-focus">
                    @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>

                <button type="submit" class="button">Dodaj artykuł</button>

            </div>
        </div>
    </form>
    @endsection

</body>

</html>