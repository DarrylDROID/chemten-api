<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/radio.css') }}">
    <link rel="icon" href="img/logoatas.png">
    <title>Chemten</title>
</head>
<body>
    <div class="bg-bluebg" style="min-height: 96vh">
        @yield('main_content')
    </div>
    @include('layouts.footer')
</body>
</html>