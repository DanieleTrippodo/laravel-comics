<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Comics</title>

    @vite('resources/js/app.js')
</head>





<body>

    @include('layouts.main-header')

    <main>
        @yield('content')   {{-- Da vedere --}}
    </main>

    @include('layouts.main-footer')
</body>
</html>
