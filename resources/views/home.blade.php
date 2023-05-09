<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Laravel: primi passi</title>
</head>

<body class="text-bg-dark">
    <header class=" text-bg-light text-center py-3">
        <h1 class="display-2 mb-2">
            {{ $title }}
        </h1>
        <h3 class="display-6 mb-1">
            {{ $subtitle }}
        </h3>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <ul class="navbar-nav me-auto text-capitalize">
                    @foreach ($nav_links as $key => $nav_link)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $nav_link }}">{{ $key }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <p class="text-center my-4 fs-3">
            {{ $message }}
        </p>

        <h5 class="py-3 text-center">Here's my todo list</h5>

        <ol class="list-group">
            @foreach ($todos as $todo)
                <li class="list-group-item">

                    @if ($todo['done'])
                        &#9745;
                    @else
                        &#9746;
                    @endif

                    {{ $todo['task'] }}
                </li>
            @endforeach
        </ol>
    </main>

</body>

</html>
