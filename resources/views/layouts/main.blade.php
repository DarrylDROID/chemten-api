<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
    <title>Chemten</title>
</head>
<body>
    @include('layouts.nav')
    <div class="bg-bluebg">
        @yield('main_content')
    </div>
</body>
</html>