<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])


        <title>@yield('title')</title>
    </head>

    <body>

        @include('partials/header')

        <main>

            @yield('main')

            <a class="portfolio btn btn-outline-warning"
                href="https://portfolio-supabase.giacobelli-mattia12.workers.dev/projects/5">Portfolio</a>

        </main>

        @include('partials/footer')


    </body>

</html>
