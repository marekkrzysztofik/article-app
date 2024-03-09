<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Articles')</title>
</head>

<body>
    @vite('resources/css/app.css')
    <nav class="navbar flex">
        <h1><a href="/">Laravel Articles</a></h1>
        <h3><a href="/">Home</a></h3>
        <h3> <a href="/top">Top 3 Authors</a></h3>
        <h3> <a href="/create">Create article</a></h3>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>

</html>