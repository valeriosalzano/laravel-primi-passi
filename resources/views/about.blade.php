<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>About us</title>
</head>

<body class="text-bg-dark">
    <header class=" text-bg-light text-center py-3">
        <h1 class="display-2 mb-2">
            {{ $title }}
        </h1>

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
        <section>
            <h2 class="py-3 text-center display-6 fw-semibold"> {{ $section_title }} </h2>
            <p class="text-center my-3 lh-lg"> {{ $text }} </p>
            <small> {{ $caption }} </small>
        </section>

    </main>

</body>

</html>
