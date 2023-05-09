<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel: primi passi</title>
</head>

<body>
    <header>
        <h1>
            {{ $title }}
        </h1>
        <h3>
            {{ $subtitle }}
        </h3>
    </header>

    <main>
        <p>
            {{ $message }}
        </p>

        <h5>Here's my todo list</h5>
        <ol>
          @foreach ($todos as $todo)
            <li>
              
              @if ($todo['done'])
                &#9745;
              @else
                &#9746;
              @endif

              {{$todo['task']}}
            </li>
          @endforeach
        </ol>
    </main>

</body>

</html>
