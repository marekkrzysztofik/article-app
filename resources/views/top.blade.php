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
        <h1>Top 3 Authors</h1>
        <div class="table bg-dark">
        <table>
                   <th>Miejsce</th>
                        <th >Imię</th>
                        <th >Ilość artykułów</th>
                   
                    </tr>
                    @foreach ($authors as $author)
                    <tr v-for="item in lastTransactions">
                    <td >1</td>
                        <td ><a href="/author/{{ $author->id }}">{{ $author->name }}</a></td>
                        <td ><span>{{ $author->articles_count }}</span></td> 
                    </tr>
                </table>
                @endforeach
        </div>
        
    </div>
    </div>
    @endsection
</body>

</html>