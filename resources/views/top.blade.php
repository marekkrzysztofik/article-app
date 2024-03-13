<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    @extends('app')
    @section('content')
    <div class="flex top-authors">
        <h1 class="mt-2 mb-1">This week's top authors</h1>
        <div class="table bg-dark">
            @if(count($authors) > 0)
            <table>
                <tr>
                    <th>Place</th>
                    <th>Name</th>
                    <th>Articles quantity</th>
                </tr>
                @foreach ($authors as $author)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td><a href="/author/{{ $author->id }}">{{ $author->name }}</a></td>
                    <td><span>{{ $author->articles_count }}</span></td>
                </tr>
                @endforeach
            </table>
            @else
            <h3>That's too bad</h3>
            <p>No one has written anything this week :c</p>
            @endif
        </div>

    </div>
    </div>
    @endsection
</body>

</html>