<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
</head>

<body>
    <header>
        <h1>
            {{ $title }}
        </h1>

        <nav>
            <ul>
                @foreach ($nav_links as $key => $nav_link)
                    <li>
                        <a href="{{ $nav_link }}">{{ $key }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

    </header>

    <main>

        <section>
            <h2> {{ $section_title }} </h2>
            <p> {{ $text }} </p>
            <small> {{ $caption }} </small>
        </section>

    </main>

</body>

</html>
